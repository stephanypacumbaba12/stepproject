<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('form/https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('form/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('form/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('form/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('form/css/style.css')}}">

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('form/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
		  <a href="/"><img src="images/logo.png" alt="Shoe E-commerce" style="width:40px; margin-left:10px;"></a>
            <h3>Register to <strong>E-commerce</strong></h3>
            <form action="{{ route('sample.validate_registration') }}" method="POST">
			@csrf
              <div class="form-group first">
                <label for="name">Name</label>
                <input type="name"  name="name" class="form-control" placeholder="Name" id="username">
				@if($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
              </div>
			  <div class="form-group first">
                <label for="email">Email</label>
                <input type="email"  name="name" class="form-control" placeholder="your-email@gmail.com" id="username">
				@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password"  name="password" class="form-control" placeholder="Your Password" id="password">
				@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
              </div>
              <div class="form-group last mb-3">
                <label for="password">Confirm Password</label>
                <input type="password"  name="confirm_password" class="form-control" placeholder="Confirm Password" id="password">
				@if($errors->has('confirm_password'))
							<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
						@endif
              </div>
            
			  <div class="form-group mb-3">
					<label for="user_type">User Type:</label>
					<select name="user_type" class="form-control">
						<option value="customer">Customer</option>
						<option value="seller">Seller</option>
						<option value="admin">Admin</option>
					</select>
					@if($errors->has('user_type'))
						<span class="text-danger">{{ $errors->first('user_type') }}</span>
					@endif
				</div>
              <input type="submit" value="Register" class="btn btn-block btn-primary">
            </form>
			<span class="ml-auto"><a href="login" class="forgot-pass">Already have an Account?Login</a></span> 
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('form/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('form/js/popper.min.js')}}"></script>
    <script src="{{asset('form/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('form/js/main.js')}}"></script>
  </body>
</html>