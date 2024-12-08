<?php include_once ROOT_DIR . "views/clients/header.php" ?>


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

										<a href="<?= ROOT_URL_ . '?ctl=detail&id=' . $laptop['id'] ?>" class="btn btn-outline-success">Chỉ tiết sản phẩm</a>
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
											<span class="product-price"><?= number_format($pro['price'])  ?></span>
										</div>
										<div class="product-buttons">
											<a href="<?= ROOT_URL_ . '?ctl=detail&id=' . $pro['id'] ?>" class="btn btn-outline-success">Chi tiết sản phẩm</a>
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