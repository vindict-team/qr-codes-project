<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/system/function.php';

if(!isset($_SESSION['user'])) {
	header('Location: ../admin/index.php');
}
$header_type = "main";
$page_name = "Главная";
require_once 'common/header.php';

$nearest_course = get_nearest_course();
$last_five = get_last_five();
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
									<h3 class="block-header">Ближайший курс</h3>
									<center class="m-t-30"> 
										<h4 class="calendar"><i class="fa fa-calendar m-r-10" aria-hidden="true"></i> <?php $date = explode(' ', $nearest_course[0]['date']); $view = date_create($date[0]); echo date_format($view, 'd.m.Y'); ?></h4>
										<a class="header-link" href="pages/courses.php?id=<?php echo $nearest_course[0]['id']; ?>"><h4 class="card-title m-t-10"><?php echo $nearest_course[0]['title']; ?></h4></a>
										<div class="center-pos">
											<div class="counter"><i class="fa fa-users m-r-10" aria-hidden="true"></i> <?php $all = get_customers_num($nearest_course[0]['id']); echo 'Всего участников: '.$all[0]['COUNT(id)']; ?></div>
											<a href="pages/list.php?course=<?php echo $nearest_course[0]['id']; ?>"><button class="btn btn-info btn-lg">Список участников</button></a>
										</div>
									</center>
								</div>
							</div>
					</div>
					<div class="col-md-7 col-xs-12">
							<div class="card">
								<div class="card-block">
									<h3 class="block-header">Последние участники</h3>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Фамилия</th>
													<th>Имя</th>
													<th style="text-align:center;">Подробнее</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													for($i = 0; $i < count($last_five); $i++) {
														echo '<tr>';
															echo '<td>'.$last_five[$i]['firstname'].'</td>';
															echo '<td>'.$last_five[$i]['lastname'].'</td>';
															echo '<td style="text-align:center;"><a id="edit-link" href="pages/customers.php?id='.$last_five[$i]['id'].'"><i class="fa fa-search"></i></a></td>';
														echo '</tr>';
													}
												?>
											</tbody>
										</table>
									</div>
									<div class="center-pos"><a href="pages/customers.php"><button class="btn btn-info btn-lg">Посмотреть всех</button></a></div>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php $footer_type = "first"; require_once 'common/footer.php'; ?>