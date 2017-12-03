<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Школа Риэлторского Мастерства - Авторизация</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page">
    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('./assets/img/city.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="POST" action="index.php">
								<div class="header header-primary text-center">
									<h4>Авторизация</h4>
								</div>
								<?php //manager123+
								if (isset($_POST)) {
									require $_SERVER['DOCUMENT_ROOT'].'/admin/login.php';
									echo(auth($_POST));
								}?>
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">account_circle</i>
										</span>
										<input type="text" name="login" class="form-control" class="form-control" placeholder="Логин..." autofocus>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" name="password" required placeholder="Пароль..." class="form-control" />
									</div>
								</div>
								<div class="footer text-center">
									<input type="submit" name="do_login" value="Войти" class="btn btn-simple btn-primary btn-lg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <div class="copyright pull-center">
		                &copy; <?php echo date('Y'); ?>, developed by <a href="http://vindict.com.ua" target="_blank">Vindict team</a>
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="./assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="./assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="./assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="./assets/js/material-kit.js" type="text/javascript"></script>

</html>
