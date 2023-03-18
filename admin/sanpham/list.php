<?php 

    $keyword = '';
    $iddm = 0;
    if (isset($_POST['loc'])) {
        $keyword = $_POST['keyword'];
        $iddm = $_POST['iddm'];
    }
    $listSanPham = loadListAll_sanpham($keyword, $iddm);
?>

    <h2>Lọc sản phẩm</h2>


    <div class="input-group mb-3 row w-50">
    <input type="text" name="keyword" class="form-control w-50" placeholder="Nhập tên sản phẩm cần tìm">

    <select class="form-select" name="iddm">
    <option selected value="0">Tất cả</option>
    <?php 
        foreach($listdanhmuc as $danhmuc):
            extract($danhmuc);
    ?>
        <option value="<?php echo $id?>"><?php echo $name?></option>
    <?php endforeach?>
    </select>


    <button class="btn btn-primary" name="loc">Lọc</button>
    </div>

</form>

<table class="table table-striped">
    <thead>
        <tr>
            <td><input type="checkbox" id="all-checkbox"></td>
            <td>ID</td>
            <td class="text-nowrap">Tên Sản Phẩm</td>
            <td>Giá</td>
            <td>Ảnh Sản Phẩm</td>
            <td>Mô Tả Sản Phẩm</td>
            <td class="text-nowrap">Số lượng</td>
            <td>Hãng</td>
            <td class="text-nowrap">Lượt xem</td>
            <td>Trạng thái</td>
            <td>Ngày khởi tạo</td>
            <td>Ngày update</td>
            <td colspan="2"><a href="index.php?act=addsp" class="btn btn-info text-nowrap">Nhập thêm</a></td>
        </tr>
    </thead>
    <tbody>
        <?php
         foreach ($listSanPham as $sanpham):
            extract($sanpham);
            $suadm = "index.php?act=updatesp&id=$id";
            $xoadm = "index.php?act=deletesp&id=$id";
            if (is_file($image)) {
                $img = "<img src='$image' width='150px' height='150px' alt=''>";
            } else {
                $img ="<img src='' width='200px' height='100px' alt='Không tìm thấy ảnh'>";
            }
        ?>
        <tr>
            <td><input type="checkbox" name="<?php echo $id?>"></td>
            <td><?php echo $id?></td>
            <td><?php echo $tensp?></td>
            <td><?php echo $price?></td>
            <td><div style="height: 95px; overflow:hidden;"><?php echo $img?></div></td>
            <td><?php echo $description?></td>
            <td><?php echo $quantity?></td>
            <td><?php echo $loai?></td>
            <td><?php echo $view?></td>
            <td>
                <a href="<?php echo $suadm?>" class="btn btn-success w-100 mt-2">Sửa</a>
                <a href="<?php echo $xoadm?>" class="btn btn-danger w-100 mt-2" onclick="return confirm('Xac nhan xoa')">Xóa</a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>

</table>
