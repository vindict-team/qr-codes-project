<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';
require $_SERVER['DOCUMENT_ROOT'].'/system/function.php';
if(!isset($_SESSION['user'])) {
	header('Location: ../admin/index.php');
}
$header_type = "page";
$page_name = "Клиенты";
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Список участников</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Список участников</li>
                        </ol>
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
	$sqlTable = 'SELECT COUNT(id) FROM customers';
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
	$sqlTable = "SELECT id,firstname,lastname,email,id_courses FROM customers
        ORDER BY lastname LIMIT $start, $num"; // Запрос на получение всех данных с LIMIT
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
												<th>Фамилия</th>
                                                <th>Имя</th>
                                                <th>Email</th>
												<th style="text-align:center;">Подробнее</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												for($i = 0; $i < $rounds; $i++) {
													echo '<tr>';
														echo '<td>'.$postrow[$i]['lastname'].'</td>';
														echo '<td>'.$postrow[$i]['firstname'].'</td>';
														echo '<td>'.$postrow[$i]['email'].'</td>';
														echo '<td style="text-align:center;"><a id="edit-link" href="?id='.$postrow[$i]['id'].'"><i class="fa fa-search"></i></a></td>';
													echo '</tr>';
												}
											?>
                                        </tbody>
                                    </table>
                                </div>
							<?php } else {echo '<p class="text-field-customer">К сожалению, база клиентов пуста.</p>';} ?>
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
	$pervpage = '<span id="footer_num"> <a title="В начало" href= ./edit?page=1> << </a></span> 
				<span id="footer_num"> <a title="Назад" href= ./edit?page='. ($page - 1) .'> < </a></span> '; 
} else {
	$pervpage = '';
}
// Проверяем нужны ли стрелки вперед 
if ($page != $total) {
	$nextpage = ' <span id="footer_num"><a title="Вперед" href= ./edit?page='. ($page + 1) .'> > </a></span> 
				<span id="footer_num"><a title="В конец" href= ./edit?page=' .$total. '> >> </a></span>';
} else {
	$nextpage = '';
}
// Находим две ближайшие станицы с обоих краев, если они есть 
if($page - 2 > 0) {
	$page2left = ' <span id="footer_num"><a href= ./edit?page='. ($page - 2) .'>'. ($page - 2) .'</a></span> ';
} else {
	$page2left = '';
} 
if($page - 1 > 0) {
	$page1left = '<span id="footer_num"><a href= ./edit?page='. ($page - 1) .'>'. ($page - 1) .'</a></span> ';
} else {
	$page1left = '';
}  
if($page + 2 <= $total) {
	$page2right = ' <span id="footer_num"><a href= ./edit?page='. ($page + 2) .'>'. ($page + 2) .'</a></span>'; 
} else {
	$page2right = '';
}
if($page + 1 <= $total) {
	$page1right = ' <span id="footer_num"><a href= ./edit?page='. ($page + 1) .'>'. ($page + 1) .'</a></span>';
} else {
	$page1right = '';
} 
// Вывод меню 
echo $pervpage.$page2left.$page1left.'<span id="footer_num"><b>'.$page.'</b></span>'.$page1right.$page2right.$nextpage; 
?>
</div>
<?php } else { $customer = get_customer($_GET['id']);?>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Клиентский профиль</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Клиентский профиль</li>
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
                                <center class="m-t-30"> <img src="../assets/img/profile_default.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $customer['firstname']." ".$customer['lastname']; ?></h4>
                                    <h6 class="card-subtitle">
									<?php 
									if($customer['agency'] != NULL) {
										echo 'Агенство: '.$customer['agency'];
									} else {
										echo 'Агентство недвижимости не указано';
									}
									?>
									</h6>
                                    <div class="row text-center justify-content-md-center">
									<?php 
									if($customer['exp'] != NULL) {
										$year = get_year_word($customer['exp']);
										echo 'Опыт работы: <font class="font-medium">'.$customer['exp'].' '.$year.'</font>';
									} else {
										echo 'Опыт работы: не указан';
									}
									?>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email:</label>
                                        <div class="col-md-12">
                                            <p class="text-field-customer"><?php echo $customer['email']; ?></p>
											<a id="email-button" class="btn btn-success" href="mailto:<?php echo $customer['email']; ?>">Написать</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Номер телефона</label>
                                        <div class="col-md-12">
                                            <p class="text-field-customer"><?php echo $customer['phone']; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Регион</label>
                                        <div class="col-md-12">
                                            <p class="text-field-customer">
											<?php 
												if($customer['region'] != NULL) {
													echo $customer['region'];
												} else {
													echo 'Регион проживания не указан';
												}
											?>
											</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Клиент записан на курсы:</label>
                                        <div class="col-md-12">
                                            <p class="text-field-customer">
											<?php 
												if($customer['id_courses'] != NULL) {
													$list = explode(",", $customer['id_courses']);
													echo '<ul>';
													foreach($list as $item) {
														$string = course_id2name($item);
														echo '<li><a id="course-name" href="courses.php?id='.$string['id'].'">'.$string['title'].'</a></li>';
													}
													echo '</ul>';
												} else {
													echo 'Клиент не записан ни на один из курсов';
												}
											?>
											</p>
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

<?php $footer_type = "main"; require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/footer.php'; ?>