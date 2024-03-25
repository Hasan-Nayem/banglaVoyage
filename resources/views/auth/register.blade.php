
<!doctype html>
<html lang="en">
  <head>
  	<title>BanglaVoyage 🤝</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href=" {{ asset('assets/auth/css/style.css') }} ">

	</head>
	<body>
	<section class="ftco-section" style="padding: 1rem 0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Join with banglaVoyage! 🤝</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('assets/auth/images/bg-1.jpg') }});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form method="POST" action="{{ route('register') }}" class="signin-form">
                            @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Name</label>
			      			<input type="text" id="name" name="name" :value="old('name')" class="form-control" placeholder="Name" required autofocus autocomplete="name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label"for="email">Email</label>
			      			<input type="text" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control" placeholder="Email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
			      		</div>

                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                        >
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="form-group mb-3">
                            <label class="label" for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="form-control" placeholder="Password"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                        >
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		          </form>
		          <p class="text-center">{{ __('Already registered?') }} <a href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('assets/auth/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/popper.js') }}"></script>
  <script src="{{ asset('assets/auth/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/main.js') }}"></script>

	</body>
</html>
