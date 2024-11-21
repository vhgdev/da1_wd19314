<?php


//commons

require_once "common/function.php";
//models
require_once "model/BaseModel.php";
require_once "model/Category.php";
//controller
require_once "controllers/HomeController.php";



$ctl = $_GET['ctl'] ?? "";

//Demo lớp category
$cate = new Category;

//dữ liệu 
$data = [
    'cate_name'=>'msi lỏ',
    'type' => 0 // type =1 là thú cưng type=0 là sản phẩm
];
//Thêm dữ liệu
// $cate->create($data);
// cập nhật 
$cate->update(4 , $data);
//hiển thị dữ liệu
echo "<pre>";
var_dump($cate->all());

match ($ctl) {
    //admin
    
    //client
    '' => (new HomeController)->index(),
    'checkout' => (new HomeController)->checkout(),
    'blank' => (new HomeController)->blank(),
    'product' => (new HomeController)->product(),
    
    default => "Không tìm thấy file"
};