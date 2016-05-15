<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 

	<!--Own Style CSS-->
	{!!Html::style('css/styleL.css')!!}
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form method="post" action="" class="login">
			<p>
			  <label for="login">Email:</label>
			  <input type="text" name="login" id="login">
			</p>

			<p>
			  <label for="password">Password:</label>
			  <input type="password" name="password" id="password">
			</p>

			<p class="login-submit">
			  <button type="submit" class="login-button">Login</button>
			</p>

			<p class="forgot-password"><a href="/forgot">Forgot your password?</a></p>
		</form>
	</div>
</div>
  
</div>
</body>
</html>
