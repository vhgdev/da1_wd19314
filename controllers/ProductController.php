<?php

class ProductController
{
    public function index()
    {
        //lấy id
        $id = $_GET['id'];
        //lấy sản phẩm theo danh mục id
        $products = (new Product)->listProductInCategory($id);

        //Lấy tên danh mục
        $title = $products[0]['cate_name'] ?? '';

        $categories = (new Category)->all();

        return view(
            'clients.category.category',
            compact('products', 'categories', 'title')
        );
    }
    
    //Chi tiết sản phẩm
    public function show() {
        $id = $_GET['id']; //d sản phẩm

        $product = (new Product)->find($id);

        $categories = (new Category)->all();

        $title = $product['name'] ?? "";

        //Danh sách ản phẩm
        $productReleads = (new Product)->listProductReload($product['category_id'], $id);
        
        //Lưu thông tin uri
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        return view(
            'clients.product.detail',
            compact('product','categories','title','productReleads')
        );
    }
}