<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div>
    <form action="<?= ADMIN_URL . '?ctl=storedm' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Tên sản danh mục</label>
            <input type="text" name="cate_name" id="" class="form-control">

        </div>

        <div class="mb-3">
            <label for="">Loại sản phẩm</label> <br>
            <input type="radio" name="type" value="1" checked id=""> Thú cưng
            <input type="radio" name="type" value="0" id=""> Sản phẩm cho thú
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "views/admin/footer.php" ?>