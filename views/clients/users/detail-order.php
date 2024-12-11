<?php
if (!isset($order) || empty($order)) {
    echo "Dữ liệu đơn hàng không khả dụng.";
    exit;
}
$orderDate = !empty($order['created_at']) ? date('d-m-Y H:i:s', strtotime($order['created_at'])) : "Không xác định";
$stt = 0;
$total = 0;
?>

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
					<li><a href="#"></i> Trịnh Văn Bô</a></li>
				</ul>
				<ul class="header-links pull-right" style="color: white;">
					<?= $_SESSION['user']['fullname'] ?? ''  ?>
					<?php if (isset($_SESSION['user'])) : ?>
						<li><a href="<?= ROOT_URL_ . '?ctl=logout' ?>" style="margin-left: 30px"></i> Đăng xuất</a></li>
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


<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <br><h3>Chi tiết đơn hàng</h3>
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

                       <tbody>
                            <?php foreach ($order_details as $stt => $detail) : ?>
                                <tr>
                                    <td><?= $stt+1 ?></td> <!-- Tăng thứ tự sau mỗi vòng lặp -->
                                    <td><?= $detail['name'] ?></td>
                                    <td>
                                        <img src="<?= ROOT_URL_ . $detail['image'] ?>" width="60" alt="Hình sản phẩm">
                                    </td>
                                    <td><?= number_format($detail['price']) ?></td>
                                    <td><?= $detail['quantity'] ?></td>
                                    <td><?= number_format($detail['quantity'] * $detail['price']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-end">Tổng cộng: </th>
                            <th><?= number_format($order['total_price']) ?></th>
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

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>