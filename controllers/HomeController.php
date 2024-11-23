<?php

class HomeController
{
    public function index()
    {
        //lấy các sản phẩm là laptopgaming
        $laptops = (new Product)->listProductLapGaming();
        //Lấy các sản phẩm không phải laptopgaming
        $products = (new Product)->listProductOtherLaptop();

        //lấy danh mục
        $categories = (new Category)->all();

        return view("clients.home", compact('laptops', 'products', 'categories'));
    }
}