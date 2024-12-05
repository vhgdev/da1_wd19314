<?php include_once ROOT_DIR . "./views/clients/header.php" ?>
<div class="container mt-5"><br><br>
    <h1 class="mb-4">Giỏ hàng của bạn</h1>
    <form action="<?= ROOT_URL_ . '?ctl=update-cart' ?>" method="POST">
        <div class="table-responsive"><br>
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dòng sản phẩm -->
                    <?php foreach ($carts as $id => $cart) : ?>
                        <tr>
                            <td scope="col"><?= $id ?></td>
                            <td class="text-center align-middle">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="<?= $cart['image'] ?>" alt="<?= $cart['name'] ?>" class="img-thumbnail"
                                        style="width: 150px; height: auto;">
                                </div>
                            </td>
                            <td><?= $cart['name'] ?></td>
                            <td><?= number_format($cart['price']) ?></td>
                            <td>
                                <input type="number" name="quantity[<?= $id ?>]" class="form-control" value="<?= $cart['quantity'] ?>" min="1"
                                    style="width: 80px;">
                            </td>
                            <td><?= number_format($cart['price'] * $cart['quantity']) ?> VNĐ</td>
                            <td>
                                <a href="<?= ROOT_URL_ . '?ctl=delete-cart&id=' . $id ?>" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- Tổng tiền -->
                <tfoot class="table-light">
                    <tr>
                        <td colspan="5" class="text-end fw-bold">Tổng tiền:</td>
                        <td colspan="2" class="fw-bold text-danger"><?= number_format($totalPrice) ?> VNĐ</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- Nút hành động -->
        <div class="d-flex justify-content-between mt-4">
            <a href="<?= ROOT_URL_ ?>" class="btn btn-danger btn-sm">
                <i class="bi bi-arrow-clockwise"></i> Tiếp tục mua sắm
            </a>
            <div>
                <br><button type="submit" class="btn btn-warning">
                    <i class="bi bi-arrow-clockwise"></i> Cập nhật giỏ hàng
                </button>
                <a href="<?= ROOT_URL_ . '?ctl=view-checkout' ?>" type="button" class="btn btn-success">
                    <i class="bi bi-credit-card"></i> Thanh toán
                </a>
            </div><br>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "./views/clients/footer.php" ?>
