<?php
require $_SERVER['DOCUMENT_ROOT'].'qr/system/db.php';
unset($_SESSION['user']);

header('Location: index.php');

?>
