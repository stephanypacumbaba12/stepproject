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

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('form/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
		  <a href="/"><img src="images/logo.png" alt="Shoe E-commerce" style="width:40px; margin-left:10px;"></a>
            <h3>Login to <strong>E-commerce</strong></h3>
            <form action="{{ route('sample.validate_login') }}" method="post">
			@csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email"  name="name" class="form-control" placeholder="Email@gmail.com" id="username">
				@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password"  name="password" class="form-control" placeholder="Password" id="password">
				@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
              </div>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
			<span class="ml-auto"><a href="registration" class="forgot-pass">Dont have an Account?Register</a></span> 
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