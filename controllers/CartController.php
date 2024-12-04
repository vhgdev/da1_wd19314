<?php

class CartController
{
    // Thêm sản phẩm vào giỏ hàng
    public function addToCart()
    {
        // Giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        // Lấy id sản phẩm cần thêm vào giỏ hàng
        $id = $_GET['id'];
        // Lấy sản phẩm theo id
        $product = (new Product)->find($id);
        // Kiểm tra xem giỏ hàng có sản phẩm đó chưa
        if (isset($carts[$id])) {
            // Tăng số lượng lên 1
            $carts[$id]['quantity'] = (int) $carts[$id]['quantity'] + 1;  // Chuyển về số nguyên trước khi cộng
        } else {
            $carts[$id] = [
                'name'      => $product['name'],
                'image'     => $product['image'],
                'price'     => $product['price'],
                'quantity'  => 1,  // Sửa 'quantitity' thành 'quantity'
            ];
        }
        // Gán lại giỏ hàng cho session
        $_SESSION['cart'] = $carts;

        // Tính tổng số lượng
        $_SESSION['totalQuantity'] = $this->totalQuantityInCart();

        // Lấy lại URI trước đó
        $uri = $_SESSION['URI'];

        return header("Location: " . $uri);
    }

    // Tính tổng số lượng sản phẩm trong giỏ hàng
    public function totalQuantityInCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += (int) $cart['quantity'];  // Chuyển về số nguyên trước khi cộng
        }
        return $total;
    }

    // Tính tổng giá trong giỏ hàng
    public function totalPriceInCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += (int) $cart['price'] * (int) $cart['quantity'];  // Chuyển về số nguyên
        }
        return $total;
    }

    // Hàm hiển thị chi tiết giỏ hàng
    public function viewCart()
    {
        $carts = $_SESSION['cart'] ?? [];

        $categories = (new Category)->all();

        $totalPrice = $this->totalPriceInCart();

        return view('clients.carts.cart', compact('carts', 'categories', 'totalPrice'));
    }

    // Xóa sản phẩm trong giỏ hàng
    public function deleteProductInCart()
    {
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);

        // Tính tổng số lượng
        $_SESSION['totalQuantity'] = $this->totalQuantityInCart();
        return header("location: " . ROOT_URL_ . "?ctl=view-cart");
    }

    // Cập nhật giỏ hàng
    public function updateCart()
    {
        $quantities = $_POST['quantity'];
        // Cập nhật số lượng
        foreach ($quantities as $id => $qty) {
            $_SESSION['cart'][$id]['quantity'] = (int) $qty;  // Chuyển về số nguyên trước khi lưu
        }
        return header("Location: " . ROOT_URL_ . "?ctl=view-cart");
    }
}
