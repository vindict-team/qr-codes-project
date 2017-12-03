<?php
date_default_timezone_set('Europe/Kiev');
function auth($data) {
	require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';

	$data2 = $_POST;
	if( isset($data2['do_login'])) {
		$errors = array();
		$user = R::findOne('admin_accounts', 'username = ?', array($data2['login']));
		if($user){
			if ( password_verify($data2['password'], $user->password)) {
				$_SESSION['user'] = $user;
				header('Location: main.php');
			} else {
				$errors[] = 'Неверно введены учётные данные.';
			}
		} else {
			$errors[] = 'Неверно введены учётные данные.';
		}
		if (!empty($errors)) {
			return '<div class="alert alert-danger" style="margin: 0;">
	             <div class="container-fluid">
					 <div class="alert-icon">
						<i class="material-icons">error_outline</i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
	                <b>Ошибка: </b> '.array_shift($errors).'</div></div>';
		}
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$ip = get_client_ip();
	R::freeze(true);
	 R::ext('xdispense', function($table_name) {
	  return R::getRedBean()->dispense($table_name);
	 });
	$model = R::xdispense('admin_logs');
	if(!empty($agent)) {
		$model->agent = $agent;
	}
	if(!empty($ip)) {
		$model->ip = $ip;
	}
	$id = R::store( $model );
	}
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>