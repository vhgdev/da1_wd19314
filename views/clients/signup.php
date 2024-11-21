<?php include_once "views/clients/header.php" ?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%; border-radius: 10px;">
        <h3 class="text-center mb-4" style="color: #D10024;">Đăng ký</h3>
        <form>
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example1">Họ và tên</label>
                <input type="text" id="form3Example1" class="form-control" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example2">Email</label>
                <input type="email" id="form3Example2" class="form-control" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Mật khẩu</label>
                <input type="password" id="form3Example3" class="form-control" />
            </div>

            <!-- Confirm Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Xác nhận mật khẩu</label>
                <input type="password" id="form3Example4" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="background-color: #D10024;">
                <span>Đăng ký</span>
            </button>

            <!-- Login redirect -->
            <div class="text-center">
                <p>Đã có tài khoản? <a href="index.php?ctl=signin">Đăng nhập</a></p>
                
            </div>
        </form>
    </div>
</div>

<?php include_once "views/clients/footer.php" ?>
