
<?php
require $_SERVER['DOCUMENT_ROOT'].'/qr/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/qr/system/function.php';

$header_type = 'page';
$register = true;
$page_name = 'QR Project - Регистрация';
$page_dec = 'Регистрация нового аккаунта для автоматизированной Системы Отслеживания Посещений.';
$fb_title = 'Регистрация - Система Отслеживания Посещений';
$fb_image = 'images/full_image_2.jpg';
$fb_link = 'http://vindict.com.ua/qr/register.php';
$fb_site_name = 'QR Project';
$fb_desc = 'Регистрация нового аккаунта для автоматизированной Системы Отслеживания Посещений.';
$twitter_title = 'Система Отслеживания Посещений';
$twitter_image = 'images/full_image_2.jpg';
$twitter_link = 'http://vindict.com.ua/qr/register.php';
$twitter_card = '';
require_once 'common/header.php';


?>
		        <div class="main-container">
            <section class="bg--secondary space--sm" id="bg-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="boxed boxed--lg boxed--border">
                                <div class="text-block text-center">
                                    <img alt="Регистрация нового пользовтеля - СПО" src="images/question.png" class="image--sm" />
                                    <span class="h5">Зачем мне регистрироваться?</span>
                                    <span><a href="#" target="_blank">Узнать подробнее</a></span>
                                    <span class="label">Полезно!</span>
                                </div>
                                <hr>
                                <div class="text-block">
                                    <ul class="menu-vertical">
                                        <li>
                                            <a href="#" data-toggle-class=".account-tab:not(.hidden);hidden|#policy;hidden">Политика конфиденциальности</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle-class=".account-tab:not(.hidden);hidden|#rules;hidden">Правила использования</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle-class=".account-tab:not(.hidden);hidden|#question;hidden">Есть вопрос?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="boxed boxed--lg boxed--border">
                                <div id="register" class="account-tab">
<div class="tabs-container" data-content-align="left">
	<ul class="tabs">
		<li class="active">
			<div class="tab__title text-center">
				<i class="icon icon--sm block icon-Student-Male"></i>
				<span class="h5">Я студент</span>
			</div>
			<div class="tab__content">
			<h4>Новый студент:</h4>
                <form method="POST" id="register-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Имя:</label>
                            <input type="text" name="name" placeholder="Василий Петров" />
                        </div>
                        <div class="col-sm-12">
                            <label>Электронная почта:</label>
                            <input type="email" name="email" placeholder="example@mail.com" />
                        </div>
                        <div class="col-sm-12">
                            <label>Пароль:</label>
                            <input type="password" name="password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" />
                        </div>
                        <div class="col-sm-12">
                            <label>Повторите пароль:</label>
                            <input type="password" name="password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" />
                        </div>
                        <div class="col-sm-12">
                        	<label>Университет:</label>
                            <div class="input-select">
                            	<select>
                            		<option selected="" value="nure">Харьковский национальный университет радиоэлектроники (ХНУРЭ)</option>
                            	</select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-checkbox">
                                <input type="checkbox" name="agree" id="input-assigned">
                                <label for="input-assigned"></label>
                            </div>
                            <span>Я прочитал и согласен с Правилами пользования и Политикой конфиденциальности.</span>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <button type="submit" class="btn btn--primary type--uppercase">Зарегестрироваться</button>
                        </div>
                    </div>
                </form>
			</div>
		</li>
		<li>
			<div class="tab__title text-center">
				<i class="icon icon--sm block icon-Business-Man"></i>
				<span class="h5">Я преподаватель</span>
			</div>
			<div class="tab__content">
			<h4>Новый преподаватель:</h4>
                <form method="POST" id="register-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Имя:</label>
                            <input type="text" name="name" placeholder="Василий Петров" />
                        </div>
                        <div class="col-sm-12">
                            <label>Электронная почта:</label>
                            <input type="email" name="email" placeholder="example@mail.com" />
                        </div>
                        <div class="col-sm-12">
                            <label>Пароль:</label>
                            <input type="password" name="password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" />
                        </div>
                        <div class="col-sm-12">
                            <label>Повторите пароль:</label>
                            <input type="password" name="password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" />
                        </div>
                        <div class="col-sm-12">
                        	<label>Университет:</label>
                            <div class="input-select">
                            	<select>
                            		<option selected="" value="nure">Харьковский национальный университет радиоэлектроники (ХНУРЭ)</option>
                            	</select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-checkbox">
                                <input type="checkbox" name="agree" id="input-assigned">
                                <label for="input-assigned"></label>
                            </div>
                            <span>Я прочитал и согласен с Правилами пользования и Политикой конфиденциальности.</span>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <button type="submit" class="btn btn--primary type--uppercase">Зарегестрироваться</button>
                        </div>
                    </div>
                </form>
			</div>
		</li>
		<li>
			<div class="tab__title text-center">
				<i class="icon icon--sm block icon-ID-Card"></i>
				<span class="h5">Заявка на сотрудничество</span>
			</div>
			<div class="tab__content">
			<h4>Написать Администрации СОП:</h4>
                <form method="POST" id="register-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Имя:</label>
                            <input type="text" name="name" placeholder="Василий Петров" />
                        </div>
                        <div class="col-sm-12">
                            <label>Организация:</label>
                            <input type="text" name="display-name" placeholder="Киевский Политехнический Университет (КПУ)" />
                        </div>
                        <div class="col-sm-12">
                            <label>Электронная почта:</label>
                            <input type="email" name="email" placeholder="example@mail.com" />
                        </div>
                        <div class="col-sm-12">
                        	<label>Вам необходимо:</label>
                            <div class="input-select">
                            	<select>
                            		
                            		<option selected="" value="test">Протестировать систему</option>
                            		<option value="once">Заявка на единоразовое пользование системой</option>
                            		<option value="all">Заявка на временное пользование системой</option>
                            	</select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label>Обращение:</label>
                            <textarea rows="12" name="statement" style="resize:none;" placeholder="Ваше обращение..."></textarea>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <button type="submit" class="btn btn--primary type--uppercase">Оставить заявку</button>
                        </div>
                    </div>
                </form>
			</div>
		</li>
	</ul>
</div>
                                </div>
                                <div id="policy" class="hidden account-tab">
                                    <h4>Политика конфиденциальности QR project</h4>
                                    <p>Составляется юристами. Скоро будет. Отвечаем.</p>
                                </div>
                                <div id="rules" class="hidden account-tab">
                                    <h4>Правила пользования</h4>
                                    <p>Думаем сколько брать денег. Пока ещё считаем, но скоро всё будет. Отвечаем.</p>
                                </div>
                                <div id="question" class="hidden account-tab">
                                    <h4>Возникли трудности?</h4>
                                    <p>Советуем для начала посетить <a href="#" target="_blank">страницу FAQ</a>. Если Вы не нашли там ответов, заполните форму ниже.
                                    Мы овтетим Вам в течении 24-48 часов.</p>
                                    <form method="POST" id="question-post">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label>Тема вопроса:</label>
                                                <input type="text" name="title" placeholder="С чем вы столкнулись?" />
                                            </div>
                                            <div class="col-xs-12">
                                                <label>Электронный адрес:</label>
                                                <input type="email" name="email" placeholder="example@mail.com" />
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Ваш вопрос:</label>
                                                <textarea rows="12" name="text" style="resize:none;" placeholder="Опишите вкратце проблему..."></textarea>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <button type="submit" class="btn btn--primary type--uppercase">Отправить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
        </div>
<?php $footer_type = "register"; require_once 'common/footer.php'; ?>
		