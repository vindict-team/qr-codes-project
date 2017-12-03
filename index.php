
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>QR Project by Vindict Team</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Автоматизированная система отслеживания посещений для мероприятий и учреждений." />
	<meta name="author" content="Vindict Team" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Система автоматизации посещений"/>
	<meta property="og:image" content="images/full_image_2.jpg"/>
	<meta property="og:url" content="http://vindict.com.ua/qr/"/>
	<meta property="og:site_name" content="QR Project"/>
	<meta property="og:description" content="Автоматизированная система отслеживания посещений для мероприятий и работы в Вашей компании!"/>
	<meta name="twitter:title" content="Система автоматизации посещений" />
	<meta name="twitter:image" content="images/full_image_2.jpg" />
	<meta name="twitter:url" content="http://vindict.com.ua/qr/" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.png">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	-->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="css/orange.css">
	<!-- End demo purposes only -->


	<style>
	/* For demo purpose only */

	/*
	GREEN
	8dc63f
	RED
	FA5555
	TURQUOISE
	27E1CE
	BLUE 
	2772DB
	ORANGE
	FF7844
	YELLOW
	FCDA05
	PINK
	F64662
	PURPLE
	7045FF

	*/
	
	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}

	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations ul {
		margin-bottom: 20px;
		float: left;	
	}
	#colour-variations li {
		list-style: none;
		display: inline;
	}
	#colour-variations li a {
		width: 20px;
		height: 20px;
		position: relative;
		float: left;
		margin: 5px;
	}



	#colour-variations li a[data-theme="style"] {
		background: #8dc63f;
	}
	#colour-variations li a[data-theme="red"] {
		background: #FA5555;
	}
	#colour-variations li a[data-theme="turquoise"] {
		background: #27E1CE;
	}
	#colour-variations li a[data-theme="blue"] {
		background: #2772DB;
	}
	#colour-variations li a[data-theme="orange"] {
		background: #FF7844;
	}
	#colour-variations li a[data-theme="yellow"] {
		background: #FCDA05;
	}
	#colour-variations li a[data-theme="pink"] {
		background: #F64662;
	}
	#colour-variations li a[data-theme="purple"] {
		background: #7045FF;
	}

	#colour-variations a[data-layout="boxed"],
	#colour-variations a[data-layout="wide"] {
		padding: 2px 0;
		width: 48%;
		border: 1px solid #ededed;
		text-align: center;
		color: #777;
		display: block;
	}
	#colour-variations a[data-layout="boxed"]:hover,
	#colour-variations a[data-layout="wide"]:hover {
		border: 1px solid #777;
	}
	#colour-variations a[data-layout="boxed"] {
		float: left;
	}
	#colour-variations a[data-layout="wide"] {
		float: right;
	}

	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #8dc63f;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	</style>
	<!-- End demo purposes only -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<!-- 
		INFO:
		Add 'boxed' class to body element to make the layout as boxed style.
		Example: 
		<body class="boxed">	
	-->
	<body>

	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<section id="fh5co-header">
			<div class="container">
				<nav role="navigation">
					<ul class="pull-left left-menu">
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="#">О нас</a></li>
					</ul>
					<h1 id="fh5co-logo"><a href="index.html">QR<span>project</span></a></h1>
					<ul class="pull-right right-menu">
						<li><a href="#">Авторизация</a></li>
						<li class="fh5co-cta-btn"><a href="#">Регистрация</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->

		<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/full_image_2.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro no-js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-center-position">
							<h2 class="animate-box">Везде есть глаза</h2>
							<h3 class="animate-box">Наш проект позволит автоматизировать процесс учета посещаемости в ваших объектах</h3>
							
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Посмотреть краткий экскурс</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		<!-- END #fh5co-hero -->

		<section id="fh5co-features">
			<div class="container">
				<div class="row text-center row-bottom-padded-md">
					<div class="col-md-8 col-md-offset-2">
						<figure class="fh5co-devices animate-box"><img src="images/img_devices.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></figure>
						<h2 class="fh5co-lead animate-box">Доступен с любого устройства</h2>
						<p class="fh5co-sub-lead animate-box">Где бы Вы не были, вы сможете посмотреть, кто посещал то или иное событие, вне зависимости от вашего гаджета. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-power"></i>
							</div>
							<h3 class="animate-box">Быстрый доступ</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-flag2"></i>
							</div>
							<h3 class="animate-box">Интуитивно понятный</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-anchor"></i>
							</div>
							<h3 class="animate-box">Приятный дизайн</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-paragraph"></i>
							</div>
							<h3 class="animate-box">Доступные цены</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-umbrella"></i>
							</div>
							<h3 class="animate-box">Безопасный</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-feature">
							<div class="fh5co-icon animate-box">
								<i class="icon-toggle"></i>
							</div>
							<h3 class="animate-box">Инновационный</h3>
							<p class="animate-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
			</div>
		</section>	
		
		
		<section id="fh5co-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Пробный</h2>
						<div class="price"><sup class="currency">$</sup>7<small>/месяц</small></div>
						<p>Хотите опробовать проект в деле? Этот пакет для Вас!</p>
						<hr>
						<ul class="pricing-info">
							<li>1 объект</li>
							<li>5 отчетов в месяц</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Купить</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Обычный</h2>
						<div class="price"><sup class="currency">$</sup>19<small>/месяц</small></div>
						<p>Базовый пакет для небольших объектов</p>
						<hr>
						<ul class="pricing-info">
							<li>5 объектов</li>
							<li>15 отчетов в месяц</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Купить</a>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box popular">
						<div class="popular-text">Берите это</div>
						<h2 class="pricing-plan">Плюс</h2>
						<div class="price"><sup class="currency">$</sup>79<small>/месяц</small></div>
						<p>Пакет для средних предприятий и объектов</p>
						<hr>
						<ul class="pricing-info">
							<li>Неограниченное кол-во объектов</li>
							<li>100 отчетов в месяц</li>
							<li>Поддержка 24/7</li>
							<li>Персональный кабинет</li>
						</ul>
						<a href="#" class="btn btn-primary btn-sm">Купить</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">VIP</h2>
						<div class="price"><sup class="currency">$</sup>125<small>/месяц</small></div>
						<p>Пакет для больших предприятий и объектов</p>
						<hr>
						<ul class="pricing-info">
							<li>Неограниченное кол-во объектов</li>
							<li>Неограниченное кол-во отчетов</li>
							<li>Поддержка 24/7</li>
							<li>Персональный кабинет</li>
							<li>Система распределения прав</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Купить</a>
					</div>
				</div>
				
				</div>
			</div>
		</section>

		<!-- END #fh5co-pricing -->

		<div id="fh5co-faqs">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="fh5co-label animate-box">FAQ</div>
						<h2 class="fh5co-lead animate-box">Часто задаваемые вопросы</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="fh5co-faq-list">
							<li class="animate-box">
								<h2>Шо это такое?</h2>
								<p>Сразу видно, Вы с Харькова. Это проект для автоматизации процесса учета посещаемости того или иного объекта.</p>
							</li>
							<li class="animate-box">
								<h2>На каких языках ваш проект функционирует?</h2>
								<p>На данном этапе наш проект функционирует на русском языке, но в последствии будет доступен на английском, а також на солов'їній мові, вельме шановний пане або пані.</p>
							</li>
							<li class="animate-box">
								<h2>Могу ли я учитывать студентов, которые не посещают мои лекции?</h2>
								<p>Да, конечно, взяв один из пакетов вы получаете доступ к кабинету, где вы сможете просматривать кто посещал лекции, когда и сколько раз.</p>
							</li>
							<li class="animate-box">
								<h2>Нужны ли вам помощники?</h2>
								<p>В данный момент такой необходимости нет, как только в этом появится необходимость - мы объявим.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<section id="fh5co-testimonials" class="boredr-top">
			<div class="container">
				<div class="row row-bottom-padded-sm">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="fh5co-label animate-box">Отзывы</div>
						<h2 class="fh5co-lead animate-box">Что о нас говорят люди </h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="flexslider">
					  		<ul class="slides">
							   <li>
							      <blockquote>
							      	<p>&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo;</p>
							      	<p><cite>&mdash; Steve Jobs</cite></p>
							      </blockquote>
							   </li>
							   <li>
							    	<blockquote>
							      	<p>&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo;</p>
							      	<p><cite>&mdash; Frank Chimero</cite></p>
							      </blockquote>
							   </li>
							   <li>
							    	<blockquote>
							      	<p>&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo;</p>
							      	<p><cite>&mdash; Ferdinand A. Porsche</cite></p>
							      </blockquote>
							   </li>
							</ul>
						</div>
						<div class="flexslider-controls">
						   <ol class="flex-control-nav">
						      <li class="animate-box"><img src="images/person4.jpg" alt="Person1"></li>
						      <li class="animate-box"><img src="images/person2.jpg" alt="Person2"></li>
						      <li class="animate-box"><img src="images/person3.jpg" alt="Person3"></li>
						   </ol>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="fh5co-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">

					<div class="col-md-6 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Связь с нами</h3>
							<p>
								<a href="support@qrproject.com.ua">support@qrproject.com.ua</a> <br>
								<a href="tel:+123456789">+38 066 666 77 88</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Мы в социальных сетях</h3>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left"><small>&copy; 2017 <a href="index.html">QRProject</a>. Все права соблюдены.</small></p>
							<p class="fh5co-right"><small class="fh5co-right">Разработка сайта: <a href="http://vindict.com.ua" target="_blank">Vindict team</a> </small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
	</div>
	<!-- END #fh5co-page -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	-->
	<script src="js/jquery.cookie.js"></script>
	<script>
		$(function(){

			if ( $.cookie('layoutCookie') != '' ) {
				$('body').addClass($.cookie('layoutCookie'));
			}
			
			$('a[data-layout="boxed"]').click(function(event){
				event.preventDefault();
				$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
				$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
			});

			$('a[data-layout="wide"]').click(function(event){
				event.preventDefault();
				$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
				$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
			});
		});
	</script>

	</body>
</html>

