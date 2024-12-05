<?php include_once "views/clients/header.php" ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Checkout</h3>
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li class="active">Checkout</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<div class="container">
		<form action="<?= ROOT_URL_ . '?ctl=checkout' ?>" method="POST">
			<div class="row">

							<!-- Order Details -->
							<div class="col-md-12 order-details">
					<div class="section-title text-center">
						<h3 class="title">Đơn hàng của bạn</h3>
					</div>
					<div class="order-summary">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Hình ảnh</th>
									<th scope="col">Tên sản phẩm</th>
									<th scope="col">Giá</th>
									<th scope="col">Số lượng</th>
									<th scope="col">Thành tiền</th>
									<th scope="col">Hành động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($carts as $id => $cart) : ?>
									<tr>
										<th scope="row"><?= $id ?></th>
										<td>
											<img src="<?= $cart['image'] ?>" alt="<?= $cart['name'] ?>" class="img-thumbnail" style="width: 80px; height: auto;">
										</td>
										<td><?= $cart['name'] ?></td>
										<td><?= number_format($cart['price']) ?> VNĐ</td>
										<td>
											<input type="number" name="quantity[<?= $id ?>]" class="form-control" value="<?= $cart['quantity'] ?>" min="1" style="width: 80px;">
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
						</table>
					</div>
					<div class="order-col">
						<div><h4><strong>Tổng tiền</strong></h4></div><br>
						<div><h2 style="color: #D9534F"><?= number_format($sumPrice) ?> VNĐ</h2><strong class="order-total"></strong></div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment-method" id="payment-bank" value="bank" required>
							<label for="payment-bank">
								<span></span>
								Chuyển khoản ngân hàng
							</label>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment-method" id="payment-zalopay" value="zalopay" required>
							<label for="payment-zalopay">
								<span></span>
								Chuyển khoản ZALOPAY
							</label>
						</div>
					</div>
					<button type="submit" class="primary-btn order-submit">Thanh toán</button>
				</div>
				<!-- /Order Details -->


				<!-- Billing Details -->
				<div class="col-md-12">
					<div class="billing-details">
						<div class="section-title">
							<br><h3 class="title">Billing Address</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Họ và tên" required>
						</div>
						<div class="form-group">
							<input class="input" type="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="address" placeholder="Địa chỉ" required>
						</div>
						<div class="form-group">
							<input class="input" type="tel" name="tel" placeholder="Số điện thoại" required>
						</div>
					</div>
				</div>
				<!-- /Billing Details -->


			</div>
		</form>
	</div>
</div>
<!-- /SECTION -->

<?php include_once "views/clients/footer.php" ?>
