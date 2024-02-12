<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('authen/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Forgot Password</h3>
		      		</div>
		      		</div>
						<form method="POST" action="{{ route('password.email') }}">
        					@csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control rounded-left" placeholder="email" id="email" type="text" name="email" :value="old('email')" required autofocus autocomplete="email">
						  <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
		      		</div>
					<div>
						<x-auth-session-status class="mt-2 text-success" :status="session('status')" />
					</div>
					<div>
						<x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
					</div>
	            <div class="form-group d-flex align-items-center">
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit" herf="{{ route ('login')}}">SUBMIT</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p><a href="{{ route('login') }}" class="txt2 bo1 m-1-5">Login</a></p>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('authen/js/jquery.min.js')}}"></script>
  <script src="{{ asset('authen/js/popper.js')}}"></script>
  <script src="{{ asset('authen/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('authen/js/main.js')}}"></script>

	</body>
</html>