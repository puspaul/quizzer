<!doctype html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="finalstyle.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>

<body>

<div class="container">
	<div class="login-box">
		<div class="row">
	
		<div class="col-md-6 login-left">
			<h2>Login Here<h2>
			<form method="post" action="validation.php">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			
			</form>
		</div>
		
		
		<div class="col-md-6 login-right">
			<h2>Register Here<h2>
			<form method="post" action="registration.php">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		
			</form>
	</div>
	</div>
</div>	
</div>
</body>
</html>
