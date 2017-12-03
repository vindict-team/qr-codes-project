<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/system/function.php';
if(!isset($_SESSION['user'])) {
	header('Location: ../admin/index.php');
}
$header_type = "page";
$page_name = "Галерея фото";
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/header.php';

$photos = get_photos();
?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Галерея фото</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Галерея фото</li>
                        </ol>
						<a class="btn btn-info" role="button" href="add_image.php">Добавить изображения</a>
						<?php if($photos != NULL) {?>
						<input style="margin-left: 1%;" type="submit" id="delete_all_photos" name="delete_all_photos" value="Удалить все фото" class="btn btn-danger btn-md paper-shadow relative">
						<?php } ?>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
								<div class="card-block">
									<div class="panel-body">
									<?php 
									if($photos != NULL) {
										foreach($photos as $img) {
										$i++;
										echo '<div class="col-xs-12 col-sm-4 gallery-item">
												<div class="img-container-gallery" style="background-image: url(../../'.$img['path'].');"></div>
													<div class="form-group-gallery">
														<label class="col-md-12">Заголовок</label>
														<div class="col-md-12">
															<input type="text" placeholder="Введите заголовок..." value="'.$img['title'].'" class="form-control form-control-line">
														</div>
													</div>
													<div class="form-group-gallery">
														<label class="col-md-12">Описание</label>
														<div class="col-md-12">
															<textarea class="form-control" placeholder="Введите описание..." rows="2" id="about-rieltor">'.$img['desc'].'</textarea>
														</div>
													</div>
													<div id="#deletephotos" class="form-check form-check-inline" style="padding-top: 10px;text-align:center;width:100%;">
													<label><input id="deleteinput" type="checkbox" value="'.$img['id'].'" name="deletephoto">&nbsp;Удалить?</label>
													</div>
											</div>';
										}
										echo '<div style="margin: 5px auto; text-align: center;"><input type="submit" id="delete_photos" name="delete_photos" value="Удалить выбранные фото" class="btn btn-danger btn-md paper-shadow relative" disabled></div>';
									} else {
										echo '<div class="alert alert-info">
										  <strong>Внимание!</strong> В базе данных нет изображений для галереи. Загрузите фото, чтобы начать работу с данным разделом.
										</div>';
									}
									?>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php $footer_type = "main"; $gallery = true; require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/footer.php'; ?>