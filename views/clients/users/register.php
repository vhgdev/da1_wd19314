<?php include_once "views/clients/header.php" ?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%; border-radius: 10px;">
        <h3 class="text-center mb-4" style="color: #D10024;">Đăng ký</h3>
        <form action="<?= ROOT_URL_ . '?ctl=register'?>" method="POST">
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="fullname">Họ và tên</label>
                <input type="text" id="fullname" class="form-control" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Mật khẩu</label>
                <input type="password" id="password" class="form-control" />
            </div>

            <!-- Confirm Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="phone">Số điện thoại:</label>
                <input type="number" id="phone" class="form-control" />
            </div>

            <!-- address -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="address">Địa chỉ:</label>
                <input type="text" id="address" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="background-color: #D10024;">
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
