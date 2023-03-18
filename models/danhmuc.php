<?php 
    function insert_danhmuc($tenhang) {
        $sql = "INSERT INTO category(`name`) VALUES ('$tenhang')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id) {
        $sql = "DELETE FROM category WHERE id = $id";
        pdo_execute($sql);
    }
    function loadDanhmucWidth($number) {
        $sql = "SELECT * FROM category
        ORDER BY id DESC
        LIMIT $number";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadListAll_danhmuc() {
        $sql = "SELECT * FROM category ORDER BY id DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadListOne_danhmuc($id) {
        $sql = "SELECT * FROM category WHERE id =$id";
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }
?>
