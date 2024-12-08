<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Chi tiết đơn hàng</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<h5><strong>Mã đơn hàng :#<?$order['id']?></strong></h5>
								<p><strong>Ngày đặt hàng</strong><?date('d-m-Y H:i:s' , strtotime($order['created_at']))?></p>
							</div>
                            <!-- Thông tin khách hàng -->
							<div class="mb-4">
								<h5>Thông tin khách hàng</h5>
                                <p><strong>Họ tên:</strong><?= $order['fullname']?></p>
                                <p><strong>Email:</strong><?= $order['email']?></p>
                                <p><strong>Điện thoại:</strong><?= $order['phone']?></p>
                                <p><strong>Địa chỉ:</strong><?= $order['address']?></p>
							</div>

                            <!-- Danh sách sản phẩm -->
							<div class="mb-4">
								<h5>Danh sách sản phẩm</h5>
								<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($order_details as $stt=>$detail): ?>
                                    <tr>
                                        <td><?=$stt+1?></td>
                                        <td><?=$detail['name']?></td>
                                        <td><?=number_format($detail['price'])?></td>
                                        <td><?=$detail['quantity']?></td>
                                        <td><?=number_format($detail['price'] * $detail['quantity'])?>VND</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-end">Tổng cộng:</th>
                                        <th><?=number_format($detail['total_price'])?>VND</th>
                                    </tr>
                                </tfoot>            

                                <?php endforeach ?>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>