<?php
session_start();
require_once('views/header.php');
require_once('views/banner.php');
// require_once ('views/sanpham/list.php');
      

if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
switch ($act) {
    case 'sanpham':
        include './views/sanpham/list.php';
        break;
        case 'login':
            include 'views/auth/login.php';
            break;
    case 'register':
            include 'views/auth/register.php';
            break;
    }
}
require_once('views/footer.php');
?>