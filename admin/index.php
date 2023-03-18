<?php
session_start();

require_once('../models/pdo.php');
// include(dirname(__FILE__) . '/models/danhmuc.php');
require_once '../models/danhmuc.php';
require_once '../models/sanpham.php';
require_once('header.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'listdm':
            $listdanhmuc = loadListAll_danhmuc();
            include 'danhmuc/list.php';
            break;

        case 'adddm': 
            $listdanhmuc = loadListAll_danhmuc();
            include 'danhmuc/add.php';
            break;
        case 'updatedm':
            $id = $_GET['id'];
            $listdanhmuc = loadListAll_danhmuc();

            $danhmuc = loadListOne_danhmuc($id);
            include 'danhmuc/update.php';
            break;
        
        case 'deletedm':
            $id = $_GET['id'];
            delete_danhmuc($id);
            $listdanhmuc = loadListAll_danhmuc();
            include 'danhmuc/list.php';
            break;    

        //  product
        case 'addsp':
            $listdanhmuc = loadListAll_danhmuc();
            $listSanPham  = loadListAll_sanPham();
            include 'sanpham/add.php';
            break;

        case 'listsp':
            $listdanhmuc = loadListAll_danhmuc();
            $listSanPham  = loadListAll_sanPham();
            include 'sanpham/list.php';
            break;

        case 'updatesp':
            $id = $_GET['id'];
            // $listdanhmuc = loadListAll_danhmuc();
            // $sanpham = loadListOne_sanpham($id);
            
            include 'sanpham/update.php';
            break;

        case 'deletesp':
            $id = $_GET['id'];
            // delete_sanpham($id);
            $listSanPham = loadListAll_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        }
        
    }       
        