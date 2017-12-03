
<?php
require $_SERVER['DOCUMENT_ROOT'].'/qr/system/db.php';
//require $_SERVER['DOCUMENT_ROOT'].'/qr/system/function.php';

$header_type = 'main';
$page_name = 'QR Project by Vindict team';
$page_dec = 'Автоматизированная система отслеживания посещений для мероприятий и учреждений.';
$fb_title = 'Система автоматизации посещений';
$fb_image = 'images/full_image_2.jpg';
$fb_link = 'http://vindict.com.ua/qr/';
$fb_site_name = 'QR Project';
$fb_desc = 'Автоматизированная система отслеживания посещений для мероприятий и работы в Вашей компании!';
$twitter_title = 'Система автоматизации посещений';
$twitter_image = 'images/full_image_2.jpg';
$twitter_link = 'http://vindict.com.ua/qr/';
$twitter_card = '';
require_once 'common/header.php';


?>
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
<?php $footer_type = "main"; require_once 'common/footer.php'; ?>
		