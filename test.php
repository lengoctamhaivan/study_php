<?php
include ('../../Controller/trangchu/trang_chu.php');
use Controller\TrangChu\TrangChu;

$trangChu = new TrangChu();

var_dump($trangChu->exportProduct());