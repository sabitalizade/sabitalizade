<?php
$baglan = new mysqli('eu-cdbr-west-02.cleardb.nett', 'b7e14db0301a4e', '3e585f29', 'sabitalizade');
$baglan->set_charset("utf8");
if ($baglan->connect_errno) {
 die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);
}

