<?php include_once ROOT_DIR . "views/clients/header.php" ?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="images/product01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="images/product03.png" alt="" >
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="images/product02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Laptops</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
							<li><a data-toggle="tab" href="#tab1">Phụ kiện</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Sản phẩm -->

			<div class="container mt-5">
				<div class="row g-4">
					<?php foreach ($laptops as $laptop) : ?>
						<!-- Box Sản Phẩm -->
						<div class="col-md-3">
							<div class="product-box">
								<div class="product-img">
									<img src="<?= ROOT_URL_ . $laptop['image'] ?>" alt="Product Image" >
								</div>
								
								<div class="product-body">
									<a href="<?= ROOT_URL_ . '?ctl=detail&id=' . $laptop['id'] ?>">
										<h5 class="product-name"><?= $laptop['name'] ?></h5>
									</a>
									<div>
										<span class="product-price"><?= number_format($laptop['price'])?></span>

									</div>
									<div class="product-buttons">

										<button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- HOT DEAL SECTION -->
	<div id="hot-deal" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="hot-deal">
						<ul class="hot-deal-countdown">
							<li>
								<div>
									<h3>02</h3>
									<span>Ngày</span>
								</div>
							</li>
							<li>
								<div>
									<h3>10</h3>
									<span>Tiếng</span>
								</div>
							</li>
							<li>
								<div>
									<h3>34</h3>
									<span>Phút</span>
								</div>
							</li>
							<li>
								<div>
									<h3>60</h3>
									<span>Giây</span>
								</div>
							</li>
						</ul>
						<h2 class="text-uppercase">SALE SẬP SÀN</h2>
						<p>Săn voucher lên đến 50%</p>
						<a class="primary-btn cta-btn" href="#">Mua hàng ngay</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">PHỤ KIỆN</h3>
						<div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab2">Phụ kiện</a></li>
								<li><a data-toggle="tab" href="#tab2">Laptops</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<!-- Sản phẩm -->

				<div class="container mt-5">
					<div class="row g-4">
						<?php foreach ($products as $pro) : ?>
							<!-- Box Sản Phẩm -->
							<div class="col-md-3">
								<div class="product-box">
									<div class="product-img">
                        				<img src="<?= $pro['image'] ?>" alt="Product Image" >
                    				</div>       
									<div class="product-body">
										<a href="<?= ROOT_URL_ . '?ctl=detail&id=' . $pro['id'] ?>">
											<h5 class="product-name"><?= $pro['name'] ?></h5>
										</a>
										<div>
											<span class="product-price"><?= $pro['price'] ?></span>
										</div>
										<div class="product-buttons">
											<button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<!-- /Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
 

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Đăng ký để nhận thông tin <strong>khuyến mãi</strong></p>
						<form>
							<input class="input" type="email" placeholder="Nhập email của bạn">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng ký</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->
	<?php include_once ROOT_DIR . "views/clients/footer.php" ?>