<?php include_once ROOT_DIR . "./views/clients/header.php" ?>

<!-- Thêm CSS cho hiệu ứng pop-up, căn giữa và tạo khoảng cách với header, footer -->
<style>
    @keyframes popup {
        0% {
            transform: scale(0); /* Bắt đầu với kích thước 0 */
            opacity: 0;         /* Ẩn chữ */
        }
        50% {
            transform: scale(1.2); /* Phóng to hơn kích thước thật */
            opacity: 1;           /* Hiển thị chữ */
        }
        100% {
            transform: scale(1);  /* Trở về kích thước thật */
        }
    }

    /* Căn giữa nội dung */
    .center-content {
        display: flex;
        justify-content: center;  /* Căn giữa theo chiều ngang */
        align-items: center;      /* Căn giữa theo chiều dọc */
        height: 80vh;             /* Chiếm 80% chiều cao màn hình để tạo khoảng cách với header và footer */
        text-align: center;       /* Căn giữa chữ */
        padding: 10px;            /* Thêm khoảng cách giữa nội dung và biên màn hình */
    }

    .popup {
        display: inline-block;
        animation: popup 1s ease-out forwards; /* Hiệu ứng pop-up trong 1 giây */
    }

    /* Thêm khoảng cách cho footer và header */
    body {
        margin: 0;
    }

    .container {
        padding-top: 5px;   /* Khoảng cách giữa header và nội dung */
        padding-bottom: 5px; /* Khoảng cách giữa nội dung và footer */
    }
</style>

<div class="container mt-5">
    <div class="center-content">
        <div>
            <!-- Thêm lớp 'popup' vào tiêu đề h1 -->
            <h1 class="mb-4 popup">Thanh toán thành công</h1>
            <p>
                <a href="<?= ROOT_URL_ ?>">Quay trở lại trang chủ </a><br>
            </p>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "./views/clients/footer.php" ?>
