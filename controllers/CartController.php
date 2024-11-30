<?php

class CartController {
    // Thêm vào giỏ hàng
    public function addToCart() {
        // Tạo 1 giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        // Lấy sản phẩm theo id để add vào giỏ

        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if ($carts) {
            if (isset($carts[$id])) {
                $carts[$id]['quantity'] +-1;
            } else {
                $carts[$id] = [
                    'name' => $product['name'],
                    'image' => $product['image'],
                    'price' => $product['price'],
                    'quanty' => 1,
                ];
            }
            // Lưu giỏ hàng
            $_SESSION['cart'] = $carts;

            $url = $_SESSION['URI'];
            return header("location: " . $url );
        }
    }
}