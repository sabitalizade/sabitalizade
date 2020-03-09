<?php
$baglan = new mysqli('localhost', 'root', '', 'sabitalizade');
$baglan->set_charset("utf8");
if ($baglan->connect_errno) {
 die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);
}


$dsn = "mysql:host=localhost;dbname=sabitalizade";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

//echo $version[0] . PHP_EOL;
?>