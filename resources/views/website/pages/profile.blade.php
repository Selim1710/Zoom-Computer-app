<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('website/css/profile.css') }}">

    <title>user profile</title>
</head>

<body class="bg-dark">
    <section class="user-profile text-white">
        <div class="container">
            <h1 class="text-center pt-3">User Profile</h1>
            <div class="edit-profile text-right">
                <a href="{{ route('user.edit.profile') }}" class="btn btn-secondary">Edit profile</a>
                <a href="#" class="btn btn-danger">Logout</a>
            </div>
            <!-- user image -->
            <div class="user-image mt-3">
                <img src="{{ asset('website/images/emp.jpg') }}" class="img w-50" style="border:2px solid red;">
            </div>
            <div class="change-image mt-2">
                <a href="#" class="btn btn-primary">Change</a>
            </div>


            <!-- user detalis -->
            <div class="user-details mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            User Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            Product Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            Mycart
                        </a>
                    </li>
                </ul>
                <!-- User details -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active mt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
                        Name: <br>
                        E-mail: <br>
                        Address: <br>
                    </div>
                    <!-- product order -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table border table-responsive">
                            <thead>
                                <th>SL</th>
                                <th>Product-id</th>
                                <th>Model</th>
                                <th>Name</th>
                                <th>Unit-Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Sub-total</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td>1010</td>
                                    <td>Due to the widespread use of tables across third-party</td>
                                    <td>computer</td>
                                    <td>35000</td>
                                    <td>15</td>
                                    <td>15620000</td>
                                    <td>15620000</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>1010</td>
                                    <td>Due to the widespread use of tables across third-party</td>
                                    <td>computer</td>
                                    <td>35000</td>
                                    <td>15</td>
                                    <td>15620000</td>
                                    <td>15620000</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>1010</td>
                                    <td>Due to the widespread use of tables across third-party</td>
                                    <td>computer</td>
                                    <td>35000</td>
                                    <td>15</td>
                                    <td>15620000</td>
                                    <td>15620000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- mycart -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="button-group mt-2 mb-2">
                            <a href="#" class="btn btn-success">Checkout</a>
                            <a href="#" class="btn btn-danger">Clear All</a>
                        </div>
                        <table class="table border table-responsive">
                            <thead>
                                <th>SL</th>
                                <th>Product-id</th>
                                <th>Model</th>
                                <th>Name</th>
                                <th>Unit-Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Sub-total</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td>1010</td>
                                    <td>Due to the widespread use of tables across third-party</td>
                                    <td>computer</td>
                                    <td>35000</td>
                                    <td>15</td>
                                    <td>15620000</td>
                                    <td>15620000</td>
                                    <td>
                                    <a href="#" class="btn btn-success">Order</a>
                                        <a href="#" class="btn btn-danger">Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>