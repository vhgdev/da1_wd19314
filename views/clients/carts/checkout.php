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
										<td><?= $cart['quantity'] ?></td>
										<td><?= number_format($cart['price'] * $cart['quantity']) ?> VNĐ</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="order-col">
						<div>
							<h4><strong>Tổng tiền</strong></h4>
						</div><br>
						<div>
							<h2 style="color: #D9534F"><?= number_format($sumPrice) ?> VNĐ</h2><strong class="order-total"></strong>
						</div>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment_method" id="bank" value="bank" required>
							<label for="bank">
								<span></span>
								Chuyển khoản ngân hàng
							</label>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment_method" id="cod" value="cod" required>
							<label for="cod">
								<span></span>
								Thanh toán khi nhận hàng (COD)
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
							<br>
							<h3 class="title">Billing Address</h3>
						</div>
						<input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">
						<div class="form-group">
							<label for="fullName" class="form-label">Họ và tên</label>
							<input class="input" type="text" name="fullname" placeholder="Họ và tên" value="<?= htmlspecialchars($user['fullname'] ?? '') ?>" required>
						</div>
						<div class="form-group">
							<label for="email" class="form-label">Email</label>
							<input class="input" type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
						</div>
						<div class="form-group">
							<label for="address" class="form-label">Địa chỉ</label>
							<input class="input" type="text" name="address" placeholder="Địa chỉ" value="<?= htmlspecialchars($user['address'] ?? '') ?>" required>
						</div>
						<div class="form-group">
							<label for="phone" class="form-label">Số điện thoại</label>
							<input class="input" type="tel" name="phone" placeholder="Số điện thoại" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" required>
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
