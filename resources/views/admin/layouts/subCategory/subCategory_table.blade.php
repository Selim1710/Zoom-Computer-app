@extends('admin.master')
@section('contents')

<div class="table_button">
    <a href="{{ route('admin.add.subCategory') }}" class="btn btn-primary">Add Sub-Category</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">category_id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr class="text-center">
                <td>1</td>
                <td>special desktop</td>
                <td>1</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>               
            </tr>
            
            
        </tbody>
    </table>
</div>
@endsection