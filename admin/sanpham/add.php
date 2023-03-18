<?php

if (isset($_POST['themmoi']) && $_POST['themmoi']) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $description  = $_POST['description'];
    $quantity = $_POST['quantity'];
    $danhmuc = $_POST['danhmuc'];

    $error = [];
    $messageEmpty = "Trường này không được để trống";
    if (empty($name)) {
        $error['name'] = $messageEmpty;
    }

    if (empty($price)) {
        $error['price'] = $messageEmpty;
    } else {
        if (!is_numeric($price)) {
            $error['price'] = "Vui lòng nhập số";
        } else if ($price <= 0) {
            $error['price'] = "Giá sản phẩm phải lớn hơn 0";
        }
    }
    if (empty($quantity)) {
        $error['quantity'] = $messageEmpty;
    } else {
        if (!is_numeric($quantity)) {
            $error['quantity'] = "Vui lòng nhập số";
        } else if ($quantity <= 0) {
            $error['quantity'] = "số lượng sản phẩm phải lớn hơn 0";
        }
    }
    $allow_img = ['png', 'jpg', 'jpeg', 'gif'];
    if (empty($_FILES['image']['name'])) {
        $error['image'] = $messageEmpty;
    } else {
        if (!in_array(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION), $allow_img)) {
            $error['image'] = "Định dạng ảnh không đúng";
        } else if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
            $error['image'] = "Dung lượng không được vượt quá 2MB";
        }
    }
    if (empty($description)) {
        $error['description'] = $messageEmpty;
    }
    $image = "../uploads/images/" . $_FILES['image']['name'];
    $isUploadfile = move_uploaded_file($_FILES['image']['tmp_name'], $image);
    if (!($isUploadfile)) {
        $error['image'] = $messageEmpty;
    }

    if (empty($danhmuc)) {
        $error['danhmuc'] = $messageEmpty;
    }

    if (empty($error)) {
        $sanpham = [
            "name" => $name,
            "price" => $price,
            "quantity" => $quantity,
            "image" => $image,
            "description" => $description,
            "danhmuc" => $danhmuc

        ];
        insert_sanpham($sanpham);
        $thongbao = "Thêm sản phẩm thành công";
    }
}
?>

<div class="container">
    <h1 class="row ">Thêm Sản Phẩm</h1>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col">
                <label class="form-label">Mã Sản Phẩm</label>
                <input type="text" class="form-control" placeholder="Mã sản phẩm" disabled>
            </div>
            <div class="col">
                <label class="form-label">Tên Sản Phẩm</label>
                <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm">
                <span class="text-danger"><?php echo $message = isset($error['name']) && !empty($error['name']) ? $error['name'] : "" ?></span>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label for="formFile" class="form-label">Ảnh Sản Phẩm</label>
                <input class="form-control" type="file" name="image">
                <span class="text-danger"><?php echo $message = isset($error['image']) && !empty($error['image']) ? $error['image'] : "" ?></span>
            </div>
            <div class="col">
                <label class="form-label">Số lượng sản phẩm</label>
                <input type="number" name="quantity" class="form-control" placeholder="Số lượng sản phẩm">
                <span class="text-danger"><?php echo $message = isset($error['quantity']) && !empty($error['quantity']) ? $error['quantity'] : "" ?></span>
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col">
                <label class="form-label">Giá sản phẩm</label>
                <input type="number" name="price" class="form-control" placeholder="Giá sản phẩm">
                <span class="text-danger"><?php echo $message = isset($error['price']) && !empty($error['price']) ? $error['price'] : "" ?></span>
            </div>
            <div class="col">
                <label for="form-lable">Danh mục</label>
                <select name="danhmuc" class="form-select">
                    <option value="">Chọn</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) :
                        extract($danhmuc);
                    ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php endforeach ?>
                </select>
                <span class="text-danger"><?php echo $message = isset($error['danhmuc']) && !empty($error['danhmuc']) ? $error['danhmuc'] : "" ?></span>
            </div>

            <div class="mb-3">
                <label class="form-label">Mô Tả Sản Phẩm</label>
                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                <span class="text-danger"><?php echo $message = isset($error['description']) && !empty($error['description']) ? $error['description'] : "" ?></span>
            </div>
            <div class="row mb10">
                <div>
                    <input class="btn btn-primary" type="submit" name="themmoi" value="Thêm Mới">
                    <input class="btn btn-danger" type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp" class="btn btn-info">Danh sách</a>
                </div>
            </div>
        </div>
        <?php
        if (isset($thongbao) && !empty($thongbao)) {
            echo $thongbao;
        }
        ?>
    </form>


</div>
</div>