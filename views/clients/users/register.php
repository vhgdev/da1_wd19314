<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>LAPTOP 8386</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"> +868882950</a></li>
					<li><a href="#"></i> fptedu@email.com</a></li>
					<li><a href="#"></> Trịnh Văn Bô</a></li>
				</ul>
				<ul class="header-links pull-right" style="color: white">
					<?= $_SESSION['user']['fullname'] ?? ''  ?>
					<?php if (isset($_SESSION['user'])) : ?>
						<li><a href="<?= ROOT_URL_ . '?ctl=logout' ?>"></i> Đăng xuất</a></li>
						<li><a href="<?= ROOT_URL_ . '?ctl=list-order' ?>"></i> Lịch sử đơn hàng</a></li>
					<?php else : ?>

						<li>
							<a href="<?= ROOT_URL_ . '?ctl=login' ?>"></i> Đăng nhập</a>
						</li>

						<li><a href="<?= ROOT_URL_ . '?ctl=register' ?>"></i> Đăng ký</a>
						</li>

					<?php endif	?>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="<?= ROOT_URL_ ?>" class="logo">
								<img src="images/logo-removebg-preview (1).png" alt="" width="290px" height="65px">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">

						<div class="header-search">
							<form>
								<input class="input" type="search" aria-label="Search" placeholder="Tìm kiếm sản phẩm" id="keyword">
								<button class="search-btn" type="button" id="btnSearch">Tìm kiếm</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">


							<div class="dropdown">
								<a class="dropdown-toggle" aria-expanded="true" href="<?= ROOT_URL_ . '?ctl=view-cart' ?>">
									<i class="fa fa-shopping-cart"></i>
									<span>Giỏ hàng</span>
									<div class="qty"><?= $_SESSION['totalQuantity'] ?? '0' ?></div>
								</a>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%; border-radius: 10px;">
        <br><h3 class="text-center mb-4" style="color: #D10024;">Đăng ký</h3>
        <form action="<?= ROOT_URL_ . '?ctl=register'?>" method="POST">
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="fullname">Họ và tên</label>
                <input type="text" name="fullname" class="form-control" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" />
            </div>

            <!-- Confirm Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="phone">Số điện thoại:</label>
                <input type="number" name="phone" class="form-control" />
            </div>

            <!-- address -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="address">Địa chỉ:</label>
                <input type="text" name="address" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="background-color: #D10024;">
                <span>Đăng ký</span>
            </button>

            <!-- Login redirect -->
            <div class="text-center">
                <p>Đã có tài khoản? <a href="index.php?ctl=login">Đăng nhập</a></p>
                
            </div>
        </form>
    </div>
</div>

<?php include_once "views/clients/footer.php" ?>
