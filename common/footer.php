<?php if(@$footer_type == "main") { ?>

		<footer id="fh5co-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">

					<div class="col-md-6 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Связь с нами</h3>
							<p>
								<a href="mailto:support@vindict.com.ua">support@vindict.com.ua</a> <br>
								<a href="tel:+380666667788">+38 066 666 77 88</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Мы в социальных сетях</h3>
							<ul class="fh5co-social">
								<li><a target="_blank" href="#"><i class="icon-twitter"></i></a></li>
								<li><a target="_blank" href="#"><i class="icon-facebook"></i></a></li>
								<li><a target="_blank" href="https://instagram.com/vindict.team"><i class="icon-instagram"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/channel/UCbeT0F_-Ng72jy8rZ0ECOsw"><i class="icon-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left"><small>&copy; <?php echo date('Y'); ?> <a href="index.html">QRProject</a>. Все права соблюдены.</small></p>
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

<?php } elseif(@$footer_type == "register") { ?>
<footer id="page-footer">
	<div class="container">
		<div class="row" id="footer-margin">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="fh5co-footer-widget">
					<h3>Связь с нами</h3>
					<p>
						<a href="mailto:support@vindict.com.ua">support@vindict.com.ua</a> <br>
						<a href="tel:+380666667788">+38 066 666 77 88</a>
					</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="fh5co-footer-widget">
					<h3>Мы в социальных сетях</h3>
					<ul class="fh5co-social">
						<li><a target="_blank" href="#"><i class="icon-Twitter"></i></a></li>
						<li><a target="_blank" href="#"><i class="icon-Facebook"></i></a></li>
						<li><a target="_blank" href="https://instagram.com/vindict.team"><i class="icon-Instagram"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/channel/UCbeT0F_-Ng72jy8rZ0ECOsw"><i class="icon-Youtube"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
	<div class="fh5co-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="fh5co-left"><small>&copy; <?php echo date('Y'); ?> <a href="/qr">QRProject</a>. Все права соблюдены.</small></p>
					<p class="fh5co-right"><small class="fh5co-right">Разработка сайта: <a href="http://vindict.com.ua" target="_blank">Vindict team</a> </small></p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<!-- END #fh5co-page -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>

<script src="js/flickity.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/granim.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/scripts.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>


	</body>
</html>
<?php } ?>
