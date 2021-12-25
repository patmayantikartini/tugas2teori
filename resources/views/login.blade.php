<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href={{asset("edmin/code/bootstrap/css/bootstrap.min.css")}}  rel="stylesheet">
	<link type="text/css" href={{asset("edmin/code/bootstrap/css/bootstrap-responsive.min.css")}} rel="stylesheet">
	<link type="text/css" href={{asset("edmin/code/css/theme.css")}} rel="stylesheet">
	<link type="text/css" href={{asset("edmin/code/images/icons/css/font-awesome.css")}} rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Sign Up
						</a></li>

						

						<li><a href="#">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						@csrf
						<div class="module-body">
						{{--session--}}
						@if (session()->has('register'))
						<div class="alert alert-danger">
							{{session('register')}}
						</div>
						@endif

						@if (session()->has('gagal_login'))
						<div class="alert alert-danger">
							{{session('gagal_login')}}
						</div>
						@endif
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" @error('email') is-invalid @enderror value="{{old('email')}}" type="text" id="inputEmail" placeholder="Email" name="email">
							</div>
						</div>
						@error('email')
						<div class="alert alert-danger">
							{{$message}}
						</div>
						@enderror
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12"@error('password') @enderror type="password" id="inputPassword" placeholder="Password" name="password">
							</div>
						</div>
						@error('password')
						<div class="alert alert-danger">
							{{$message}}
						</div>

						@enderror

						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>