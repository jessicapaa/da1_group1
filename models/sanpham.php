<?php 
    function insert_sanpham($arr) {
        extract($arr);
        $sql = "INSERT INTO `product` 
        (`name`, `price`, `image`, `description`, `quantity`, `id_category`)
         VALUES 
         ('$name', '$price', '$image', '$description', '$quantity', '$danhmuc')";
        pdo_execute($sql);
    }
    
    function loadListAll_sanpham($key = '', $iddm = 0) {
        $sql = "SELECT sp.id, sp.name as tensp, sp.price, sp.quantity, sp.image, sp.description, sp.view, dm.name as loai, dm.id as iddm
        FROM product as sp 
        JOIN category as dm ON `sp`.`id_category` = `dm`.`id`
        WHERE 1";
        
        $sql .= !empty($key) ? " AND sp.name like '%$key%'" : "";
        $sql .= $iddm > 0 ? " AND id_category = $iddm" : "";

        $sql .= " ORDER BY `sp`.`id` DESC LIMIT 12";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    