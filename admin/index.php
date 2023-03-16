<?php
session_start();
require_once('header.php');

include '../models/pdo.php';
include '../models/danhmuc.php';
include(dirname(__FILE__) . '/models/danhmuc.php');

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            // $listdanhmuc = loadListAll_danhmuc();
            // $listdanhmuc = loadListAll_danhmuc();
            include 'danhmuc/list.php';
            break;
        }
    }       
        