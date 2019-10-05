

@extends('../Layouts/layout')



@section("banner")
@endsection
@section("side_nav")
@endsection
@section("body-content")


<!-- BREADCRUMB -->
<div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->
<!--       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix" method="POST" action="{{ url('register_add') }}" role="form">

                 @csrf()
             


                    <div class="col-md-6">
                        <div class="billing-details">
                            <!-- <p>Already a customer ? <a href="#">Login</a></p> -->
                            <div class="section-title">
                                <h3 class="title">Register User</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="first_name" placeholder="First Name">
                                 @error('username')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror

                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="last_name" placeholder="Last Name">
                                 @error('Last Name')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                                @error('Email')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror 
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="country" placeholder="Country">
                            </div>
                            <div class="form-group">
                            
                                <input class="input" type="text" name="zip_code" placeholder="ZIP Code">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="telephone" placeholder="Telephone">
                                 @error('Telephone')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="register">
                                    <label class="font-weak" for="register">Create Account?</label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            <p>
                                                <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                                <button type="submit" class="primary-btn">Register</button>
                                 
                            </div>
                    </div>


                    
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->







   
@endsection