<?php
session_start();
require_once('views/header.php');
require_once('views/banner.php');
require_once ('views/sanpham/list.php');
      

if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
switch ($act) {
    case 'sanpham':

        include './views/sanpham/list.php';
        break;
    }
}
require_once('views/footer.php');
?>