<?php
require $_SERVER['DOCUMENT_ROOT'].'/system/db.php';
unset($_SESSION['user']);

header('Location: index.php');

?>
