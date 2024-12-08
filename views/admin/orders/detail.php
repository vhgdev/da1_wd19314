

<?php
if (!isset($order) || empty($order)) {
    echo "Dữ liệu đơn hàng không khả dụng.";
    exit;
}
$orderDate = !empty($order['created_at']) ? date('d-m-Y H:i:s', strtotime($order['created_at'])) : "Không xác định";
$stt = 0;
$total = 0;
?>

<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4>Chi tiết đơn hàng</h4>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <h5>Mã đơn hàng: #<?= $order['id'] ?></h5>
                <p><strong>Ngày đặt hàng: </strong> <?= $orderDate ?></p>
            </div>
            <div class="mb-4">
                <h5>Thông tin khách hàng</h5>
                <p><strong>Họ tên: </strong> <?= $order['fullname'] ?? 'Không xác định' ?></p>
                <p><strong>Email: </strong> <?= $order['email'] ?? 'Không xác định' ?></p>
                <p><strong>Điện thoại: </strong><?= $order['phone'] ?? 'Không xác định' ?></p>
                <p><strong>Địa chỉ: </strong> <?= $order['address'] ?? 'Không xác định' ?></p>
            </div>
            <div class="mb-4">
                <h5>Danh sách sản phẩm</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order_details as $detail): ?>

                            <?php
                                $totalPrice = $detail['price'] * $detail['quantity'];
                                $total += $totalPrice;
                            ?>

                            <tr>
                                <td><?= $stt + 1 ?></td>
                                <td><?= $detail['name'] ?></td>
                                <td>
                                    <img src="<?= ROOT_URL_ . $detail['image']  ?>" width="60" alt="">
                                </td>
                                <td><?= number_format($detail['price']) ?></td>
                                <td><?= $detail['quantity'] ?></td>
                                <td><?= number_format($totalPrice) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-end">Tổng cộng: </th>
                            <th><?= number_format($total) ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="mb-4">
                <h5>Cập nhật trạng thái đơn hàng</h5>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="orderStatus" class="form-label">Trạng thái đơn hàng</label>
                        <select name="status" id="orderStatus" class="form-select">
                            <?php foreach ($status as $key => $value) : ?>
                                <option value="<?= $key ?>"
                                    <?= $order['status'] == $key ? 'selected' : '' ?>>
                                    <?= $value ?>
                                </option>

                            <?php endforeach ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>

