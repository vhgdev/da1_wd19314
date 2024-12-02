<?php

class CartController {
    //Thêm vào giỏ hàng
    public function addToCart() {
        //Tạo 1 giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        // Lấy sản phẩm theo id
        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if(isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
        } else {
            $carts[$id] = [
                'name'  => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1,
                
            ];
        }
        //Lưu giỏ hàng vào sesion
        $_SESSION['cart'] = $carts;

        $url = $_SESSION['URI'];

        return header("Location: " . $url);
    }
    //Tổng số lượng sp
    public function totalSumQuantity()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'];
        }
        return $total;
    }
    public function viewCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();
        $categories = (new Category)->all();

        return view("clients.carts.cart", compact('carts', 'categories', 'sumPrice'));
    }
    public function sumPrice()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'] * $cart['price'];
        }
        return $total;
    }

    //Xóa sản phẩm giỏ hàng
    public function deleteProductInCart()
    {
        //lấy id sản phẩm
        $id = $_GET['id'];
        //Hủy biến session chứa sản phẩm
        unset($_SESSION['cart'][$id]);
        //Chuyển hướng về giỏ hàng

        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();

        return header("Location: " . ROOT_URL_ . "?ctl=view-cart");
    }

    //Cập nhật giỏ hàng
    public function updateCart()
    {
        $quantities = $_POST['quantity'];
        //Cập nhật số lượng
        foreach ($quantities as $id => $qty) {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }
        return header("Location: " . ROOT_URL_ . "?ctl=view-cart");
    }
}

?>