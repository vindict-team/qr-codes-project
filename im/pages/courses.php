<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/system/function.php';

if( isset($_POST['edit_courses'])) {
edit_course($_POST);
header('Location: courses.php');
}

if(!isset($_SESSION['user'])) {
	header('Location: ../admin/index.php');
}
$header_type = "page";
$page_name = "Список курсов";
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/header.php';

if(!isset($_GET['id'])) {
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Курсы</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Курсы</li>
                        </ol>
					<a id="#download-btn" href="new.php?type=course"><button type="button" class="btn btn-success btn-md"><i class="fa fa-plus m-r-10" aria-hidden="true"></i> Добавить курс</button></a>
                    </div>
                </div>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/db-config.php';
$num = 15; 
	$rows_till_sign = strlen($_SERVER['REQUEST_URI']) - strlen(strstr($_SERVER['REQUEST_URI'],'?'));
	$module = substr($_SERVER['REQUEST_URI'], $rows_till_sign+1, strlen($_SERVER['REQUEST_URI']));
	$rows_till_sign = strlen($module) - strlen(strstr($module,'='));
	if(!$module) {
		$page = 0;
	} else {
		$pos = strripos($module, '=');
		if($pos === false) {
				exit('URL is broken.');
			} else {
				$page = intval(substr($module, $rows_till_sign+1, strlen($module)));
			} 
	}
	$sqlTable = 'SELECT COUNT(id) FROM courses';
	if ($result =  mysqli_query($connection, $sqlTable)) {
		if($res = mysqli_fetch_assoc($result)) {
			$posts = $res['COUNT(id)'];
		}
	} else {
		echo "ERROR: ".mysqli_error();
		die();
	}
	// Находим общее число страниц 
	$total = intval(($posts - 1) / $num) + 1; 
	// Определяем начало сообщений для текущей страницы 
	$page = intval($page); 
	// Если значение $page меньше единицы или отрицательно 
	// переходим на первую страницу 
	// А если слишком большое, то переходим на последнюю 
	//echo "page: ".$page."<br>";
	if(empty($page) or $page < 0) $page = 1; 
	  if($page > $total) $page = $total; 
	// Вычисляем начиная к какого номера 
	// следует выводить сообщения 
	$start = $page * $num - $num; 
	// Выбираем $num сообщений начиная с номера $start 
	$sqlTable = "SELECT * FROM courses
        ORDER BY id LIMIT $start, $num"; // Запрос на получение всех данных с LIMIT
	if ($res = mysqli_query($connection, $sqlTable)) {
		if($posts > $num) {
			$rounds = $num;
		} else {
			$rounds = $posts;
		}
		$i = 0;
	   while ($rounds != $i) {
		$postrow[] = mysqli_fetch_assoc($res);
		$i++;
	   }
	} else {
		echo "ERROR: ".mysqli_error();
		die();
	}
?>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
							<?php 
							//$people = show_customers();
							if($postrow != NULL) { ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
												<th>Название</th>
												<th>Дата начала</th>
                                                <th style="text-align:center;">Подробнее</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												for($i = 0; $i < $rounds; $i++) {
													$date = explode(' ', $postrow[$i]['date']);
													if(strlen($postrow[$i]['title']) > 69) {
														$line = substr($postrow[$i]['title'],0,69)."...";
													} else {
														$line = $postrow[$i]['title'];
													}
													echo '<tr>';
														echo '<td>'.$line.'</td>';
														echo '<td>'.$date[0].'</td>';
														echo '<td style="text-align:center;"><a id="edit-link" href="?id='.$postrow[$i]['id'].'"><i class="fa fa-pencil"></i></a></td>';
													echo '</tr>';
												}
											?>
                                        </tbody>
                                    </table>
                                </div>
							<?php } else {echo '<p class="text-field-customer">К сожалению, база спикеров пуста.</p>';} ?>
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
<div class="footerist" align="center">
<?php 
// Проверяем нужны ли стрелки назад, тут /edit - страница, где загружается контент
if ($page != 1) {
	$pervpage = '<span id="footer_num"> <a title="В начало" href= ./courses.php?page=1> << </a></span> 
				<span id="footer_num"> <a title="Назад" href= ./courses.php?page='. ($page - 1) .'> < </a></span> '; 
} else {
	$pervpage = '';
}
// Проверяем нужны ли стрелки вперед 
if ($page != $total) {
	$nextpage = ' <span id="footer_num"><a title="Вперед" href= ./courses.php?page='. ($page + 1) .'> > </a></span> 
				<span id="footer_num"><a title="В конец" href= ./courses.php?page=' .$total. '> >> </a></span>';
} else {
	$nextpage = '';
}
// Находим две ближайшие станицы с обоих краев, если они есть 
if($page - 2 > 0) {
	$page2left = ' <span id="footer_num"><a href= ./courses.php?page='. ($page - 2) .'>'. ($page - 2) .'</a></span> ';
} else {
	$page2left = '';
} 
if($page - 1 > 0) {
	$page1left = '<span id="footer_num"><a href= ./courses.php?page='. ($page - 1) .'>'. ($page - 1) .'</a></span> ';
} else {
	$page1left = '';
}  
if($page + 2 <= $total) {
	$page2right = ' <span id="footer_num"><a href= ./courses.php?page='. ($page + 2) .'>'. ($page + 2) .'</a></span>'; 
} else {
	$page2right = '';
}
if($page + 1 <= $total) {
	$page1right = ' <span id="footer_num"><a href= ./courses.php?page='. ($page + 1) .'>'. ($page + 1) .'</a></span>';
} else {
	$page1right = '';
} 
// Вывод меню 
echo $pervpage.$page2left.$page1left.'<span id="footer_num"><b>'.$page.'</b></span>'.$page1right.$page2right.$nextpage; 
?>
</div>
<?php } else { $customer = get_course($_GET['id']);?>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Подробнее о курсе</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Подробнее о курсе</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30" style="margin:0 !important;"> 
								<div class="center-pos">
								<i class="fa fa-users m-r-10" aria-hidden="true"></i> <?php $all = get_customers_num($_GET['id']); echo 'Всего участников: '.$all[0]['COUNT(id)']; ?>
								<?php if($all[0]['COUNT(id)'] != 0) { ?>
									<a href="list.php?course=<?php echo $_GET['id']; ?>"><button class="btn btn-info btn-lg" style="margin-bottom:10px;">Список участников</button></a>
								<?php } ?>
								</div>
								<?php if($customer['photo'] != NULL) { ?>
								<img style="margin-bottom: 10px;" src="<?php echo '/'.$customer['photo']; ?>" width="100%" />
								<?php } else { ?>
								<img style="margin-bottom: 10px;" src="<?php echo '/img/estate/courses/placeholder.png'; ?>" width="100%" />
								<?php } ?>
								<form class="user-info" method="POST" enctype="multipart/form-data">
								  <input id="img" name="course_photo" type="file">
								  <hr/>
								  <span class="attach"><i class="fa fa-file m-r-10" aria-hidden="true"></i> Приложение</span>
								  <?php if($customer['attach'] != NULL) { ?>
									<p><a href="<?php echo '/'.$customer['attach']; ?>" target="_blank">Скачать файл</a></p>
								  <?php } else { ?>
									<p><i>Приложение отсутствует.</i></p>
								  <?php } ?>
								  <input id="file" name="course_attach" type="file">
                                </center>
                            </div>
                        </div>
					</div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
								<input name="course_id" type="text" style="display:none" value="<?php echo $_GET['id']; ?>" class="form-control form-control-line">
                                    <div class="form-group">
                                        <label class="col-md-12">Название</label>
                                        <div class="col-md-12">
                                            <input name="course_name" type="text" placeholder="Введите название..." value="<?php echo $customer['title']; ?>" class="form-control form-control-line" required>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="example-email" class="col-md-12">Дата начала</label>
                                        <div class="col-md-12">
										<?php $date = explode(' ', $customer['date']); ?>
                                           <input name="date_start" value="<?php echo $date[0]; ?>" type="date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Описание</label>
                                        <div class="col-md-12">
                                            <textarea name="course_description" class="form-control" rows="8" id="about-course"><?php echo $customer['desc']; ?></textarea>
                                        </div>
                                    </div>
									
                                    <div class="form-group">  
                                        <div class="col-md-12">
                                            <label class="form-check-label"><input name="course_status" <?php if($customer['active'] == 1) { echo 'checked'; } ?> type="checkbox" class="checkbox"> Отображать на сайте?</label>
                                        </div>
                                    </div>
									
									<hr/>
								
                                    <div class="form-group">
                                        <label class="col-md-12">Спикеры, читающие курс:</label>
                                        <div class="col-md-12">
                                            <p class="text-field-customer">
											<?php 
												if($customer['id_speakers'] != NULL) {
													$list = explode(",", $customer['id_speakers']);
													echo '<ul>';
													foreach($list as $item) {
														$string = speaker_id2name($item);
														echo '<li><a id="speaker-name" href="speakers.php?id='.$item.'">'.$string['name'].'</a></li>';
													}
													echo '</ul>';
												} else {
													echo 'У этого курса пока нет спикеров.';
												}
											?>
											</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="text-align:right;">
                                            <button name="edit_courses" type="submit" class="btn btn-success">Обновить курс</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php } ?>

<?php $footer_type = "main"; $speakers = true; require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/footer.php'; ?>