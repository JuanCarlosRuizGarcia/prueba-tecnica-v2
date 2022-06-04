<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> @yield('title','Empleados') </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.warnings {
			width: 600px;
			text-align: center;
			margin: auto;
			color: #B06AB3;
			padding-top: 20px;
			border-radius: 30px 30px 50px 60px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@yield('content')
			</div>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>
