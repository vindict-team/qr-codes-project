<?php if(@$footer_type == "main") { ?>

<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                &copy; Школа Риэлторского Мастерства, <?php echo date('Y'); ?><br/>Developed by <a href="http://vindict.com.ua" target="_blank">Vindict team</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<?php if(@$blocks) { ?>
	<script type="text/javascript">
	$('[id="submit1"]').click(function(event) {
	event.preventDefault();
	var text = "<?php echo $_POST['about-school']; ?>";
	var blocks = true;
	var id = 1;
		$.ajax({
		  url: '../../system/function.php',
		  type: 'POST',
		cache: true,
		async: false,
		  data: {
			text:text,
			blocks:blocks,
			id:id
		  },
		  success: function(data) {
			  console.log(data);
		  },
		  error: console.log("it did not work (answer)")
		});
	});
	</script>
<?php } ?>
<?php if(@$gallery) { ?>
<script type="text/javascript">
$(document).ready(function(){
	$('input[id=\'deleteinput\']').change(function() {
		if($('input[id=\'deleteinput\']:checked').length > 0) {
			$("#delete_photos").prop('disabled', false); 
		} else {
			$("#delete_photos").prop('disabled', true); 
		}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#delete_all_photos').click(function(event) {
		 event.preventDefault();
		 if(window.confirm("Точно удалить всю галерею?")) { 
			$("input[id='deleteinput']").each(function() {
				this.checked = true;                        
			});
		 var checked = $("input[id='deleteinput']:checked");
		 var checkedValues = checked.map(function(i) { return $(this).val() }).get();
		 console.log(checkedValues);
		 var clause = 'photos_delete';
		 $.post('edit_model', {'checkedValues': checkedValues, 'clause': clause}, function(response) {
			alert('Фото успешно удалены!'); location.reload();
		});
		}
	});
});	
</script>
<?php } ?>
<?php if(@$speakers) { ?>
	
<?php } ?>

</body>
</html>


<?php } elseif(@$footer_type == "first") { ?>


<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                &copy; Школа Риэлторского Мастерства, <?php echo date('Y'); ?><br/>Developed by <a href="http://vindict.com.ua" target="_blank">Vindict team</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="./assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="./assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="./assets/plugins/flot/jquery.flot.js"></script>
    <script src="./assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="./assets/js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

<?php } ?>