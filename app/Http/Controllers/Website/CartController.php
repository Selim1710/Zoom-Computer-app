<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('website.home')->with('error', 'there is no product into the cart');
        }
        $cartExist = session()->get('cart');
        // case-1:no cart
        if (!$cartExist) {
            $cartData = [$id => [
                'product_id' => $product->id,
                'product_model' => $product->model,
                'product_name' => $product->product_name,
                'regular_price' => $product->regular_price,
                'product_offer' => $product->product_offer,
                'product_quantity' => 1,
            ]];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product added into the cart');
        }
        // case-2:already one cart exist
        if (!isset($cartExist[$id])) {
            $cartExist[$id] = [
                'product_id' => $product->id,
                'product_model' => $product->model,
                'product_name' => $product->product_name,
                'regular_price' => $product->regular_price,
                'product_offer' => $product->product_offer,
                'product_quantity' => 1,
            ];
            session()->put('cart', $cartExist);
            return redirect()->back()->with('message', 'Product added into the cart');
        }
        // case-3: same product adding into the cart
        $cartExist[$id]['product_quantity'] = $cartExist[$id]['product_quantity'] + 1;
        session()->put('cart', $cartExist);
        return redirect()->back()->with('message', 'Product added into the cart');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('error', 'Cart Cleared');
    }
    public function order($id)
    {
        $cart = session()->get('cart');
        $cart = $cart[$id];
        $cart = Order::create([
            'customer_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'phone' => auth()->user()->phone,
            'product_id' => $cart['product_id'],
            'product_name' => $cart['product_name'],
            'model' => $cart['product_model'],
            'price' => $cart['regular_price'],
            'offer' => $cart['product_offer'],
            'quantity' => $cart['product_quantity'],
            'total' =>($cart['regular_price'] * $cart['product_quantity']) - (($cart['regular_price'] * $cart['product_quantity']) * ($cart['product_offer'] / 100)),
            // savings(discount * price) then substract with original price
        ]);
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Order place successful');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('error', 'Product deleted from cart');
    }


    public function checkout()
    {
        $carts = session()->get('cart');
        if ($carts) {
            foreach ($carts as $cart)
                Order::create([
                    'customer_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'phone' => auth()->user()->phone,
                    'product_id' => $cart['product_id'],
                    'product_name' => $cart['product_name'],
                    'model' => $cart['product_model'],
                    'price' => $cart['regular_price'],
                    'offer' => $cart['product_offer'],
                    'quantity' => $cart['product_quantity'],
                    'total' => ($cart['regular_price'] * $cart['product_quantity']) - ($cart['product_offer'] / 100),
                ]);
            session()->forget('cart');
            return redirect()->back()->with('message', 'Order place successfully');
        }
        return redirect()->back()->with('error', 'No data found into the cart');
    }


    public function store(Request $request)
    {
        //
    }
}