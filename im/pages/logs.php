<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';

if(!isset($_SESSION['user'])) {
	header('Location: ../admin/index.php');
}
$header_type = "page";
$page_name = "Логи авторизации";
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/header.php';
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Логи авторизации</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Домой</a></li>
                            <li class="breadcrumb-item active">Логи авторизации</li>
                        </ol>
                    </div>

                </div>	
				<div class="alert alert-warning">
				  <strong><i class="fa fa-warning m-r-10" aria-hidden="true"></i> Обратите внимание!</strong> 
				  Указано серверное время в часовом поясе +3. Все данные конфиденциальны.
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
	$sqlTable = 'SELECT COUNT(id) FROM admin_logs';
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
	$sqlTable = "SELECT * FROM admin_logs
        ORDER BY log_date LIMIT $start, $num"; // Запрос на получение всех данных с LIMIT
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
												<th>Дата</th>
												<th>IP адрес</th>
												<th>Агент</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												for($i = 0; $i < $rounds; $i++) {
													echo '<tr>';
														echo '<td>'.$postrow[$i]['log_date'].'</td>';
														echo '<td>'.$postrow[$i]['ip'].'</td>';
														echo '<td>'.$postrow[$i]['agent'].'</td>';
													echo '</tr>';
												}
											?>
                                        </tbody>
                                    </table>
                                </div>
							<?php } else {echo '<p class="text-field-customer">К сожалению, база логов авторизации пуста.</p>';} ?>
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
<?php $footer_type = "main"; require_once $_SERVER['DOCUMENT_ROOT'].'/admin/common/footer.php'; ?>