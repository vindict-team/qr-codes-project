<?php if(@$header_type == "page") { 
date_default_timezone_set('Europe/Kiev');
?> 
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    <title>Панель Администратора - <?php echo @$page_name; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/img/arm-logo.png" alt="homepage" class="dark-logo" width="55px" height="55px"/>
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            АРМ
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
					    <li class="nav-item dropdown">
                            <a class="nav-link text-muted waves-effect waves-dark" target="_blank" href="../../">На сайт</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-muted waves-effect waves-dark" href="../logout.php">Выход</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="../main.php" class="waves-effect"><i class="fa fa-home m-r-10" aria-hidden="true"></i> Главная</a>
                        </li>
                        <li>
                            <a href="customers.php" class="waves-effect"><i class="fa fa-users m-r-10" aria-hidden="true"></i> Участники</a>
                        </li>
                        <li>
                            <a href="emails.php" class="waves-effect"><i class="fa fa-envelope-o m-r-10" aria-hidden="true"></i> Электронные адреса</a>
                        </li>
                        <li>
                            <a href="blocks.php" class="waves-effect"><i class="fa fa-font m-r-10" aria-hidden="true"></i> Текстовые блоки</a>
                        </li>
						<li>
                            <a href="speakers.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i> Спикеры</a>
                        </li>
						<li>
                            <a href="courses.php" class="waves-effect"><i class="fa fa-copy m-r-10" aria-hidden="true"></i> Курсы</a>
                        </li>
                        <li>
                            <a href="gallery.php" class="waves-effect"><i class="fa fa-photo m-r-10" aria-hidden="true"></i> Редактирование фото</a>
                        </li>
                        <li>
                            <a href="logs.php" class="waves-effect"><i class="fa fa-address-book-o m-r-10" aria-hidden="true"></i> Логи авторизации</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php } elseif(@$header_type == "main") { ?>

<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.png">
<title>Панель Администратора - <?php echo @$page_name; ?></title>
<!-- Bootstrap Core CSS -->
<link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="./assets/css/style.css" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="./assets/css/colors/blue.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
	<svg class="circular" viewBox="25 25 50 50">
		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
	<!-- ============================================================== -->
	<!-- Topbar header - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<header class="topbar">
		<nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
			<!-- ============================================================== -->
			<!-- Logo -->
			<!-- ============================================================== -->
			<div class="navbar-header">
				<a class="navbar-brand" href="main.php">
					<!-- Logo icon -->
					<b>
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<img src="./assets/img/arm-logo.png" alt="homepage" class="dark-logo" width="55px" height="55px"/>
						
					</b>
					<!--End Logo icon -->
					<!-- Logo text -->
					<span>
						<!-- dark Logo text -->
						АРМ
					</span>
				</a>
			</div>
			<!-- ============================================================== -->
			<!-- End Logo -->
			<!-- ============================================================== -->
			<div class="navbar-collapse">
				<!-- ============================================================== -->
				<!-- toggle and nav items -->
				<!-- ============================================================== -->
				<ul class="navbar-nav mr-auto mt-md-0 ">
					<!-- This is  -->
					<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
				</ul>
				<!-- ============================================================== -->
				<!-- User profile and search -->
				<!-- ============================================================== -->
				<ul class="navbar-nav my-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link text-muted waves-effect waves-dark" target="_blank" href="../">На сайт</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link text-muted waves-effect waves-dark" href="logout.php">Выход</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- ============================================================== -->
	<!-- End Topbar header -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Left Sidebar - style you can find in sidebar.scss  -->
	<!-- ============================================================== -->
	<aside class="left-sidebar">
		<!-- Sidebar scroll-->
		<div class="scroll-sidebar">
			<!-- Sidebar navigation-->
			<nav class="sidebar-nav">
				<ul id="sidebarnav">
					<li>
						<a href="main.php" class="waves-effect"><i class="fa fa-home m-r-10" aria-hidden="true"></i> Главная</a>
					</li>
					<li>
						<a href="pages/customers.php" class="waves-effect"><i class="fa fa-users m-r-10" aria-hidden="true"></i> Участники</a>
					</li>
					<li>
						<a href="pages/emails.php" class="waves-effect"><i class="fa fa-envelope-o m-r-10" aria-hidden="true"></i> Электронные адреса</a>
					</li>
					<li>
						<a href="pages/blocks.php" class="waves-effect"><i class="fa fa-font m-r-10" aria-hidden="true"></i> Текстовые блоки</a>
					</li>
					<li>
						<a href="pages/speakers.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i> Спикеры</a>
					</li>
					<li>
						<a href="pages/courses.php" class="waves-effect"><i class="fa fa-copy m-r-10" aria-hidden="true"></i> Курсы</a>
					</li>
					<li>
						<a href="pages/gallery.php" class="waves-effect"><i class="fa fa-photo m-r-10" aria-hidden="true"></i> Редактирование фото</a>
					</li>
					<li>
						<a href="pages/logs.php" class="waves-effect"><i class="fa fa-address-book-o m-r-10" aria-hidden="true"></i> Логи авторизации</a>
					</li>
				</ul>
			</nav>
			<!-- End Sidebar navigation -->
		</div>
		<!-- End Sidebar scroll-->
	</aside>

<?php } ?>