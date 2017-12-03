<?php
require $_SERVER['DOCUMENT_ROOT'].'/qr/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/qr/system/function.php';

if(!isset($_SESSION['user'])) {
	header('Location: ../im/index.php');
}
$header_type = "main";
$page_name = "Главная";
require_once 'common/header.php';

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
                        <h3 class="text-themecolor m-b-0 m-t-0">Главная</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Главная</li>
                        </ol>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-5 col-xs-12">
							<div class="card">
								<div class="card-block">
									<h3 class="block-header">Здесь что-то будет...с</h3>
									<center class="m-t-30"> 
										<p>И тут...</p>
									</center>
								</div>
							</div>
					</div>
					<div class="col-md-7 col-xs-12">
							<div class="card">
								<div class="card-block">
									<h3 class="block-header">Очередной блок...</h3>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Таблицы</th>
													<th>Это курто</th>
													<th style="text-align:center;">Поверьте</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>test</td>
													<td>test</td>
													<td>test</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="center-pos"><a href="#"><button class="btn btn-info btn-lg">Кнопка</button></a></div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-xs-12">
						<div class="card">
							<div class="card-block">
								<h4 class="block-header">Ссылка на статистику от Google: <span style="color:#666;">/* Link will be there */</span></h4>
							</div>
						</div>
				</div>
            </div>
<?php $footer_type = "first"; require_once 'common/footer.php'; ?>