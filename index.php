<?php


//commons

require_once "common/function.php";
//models

//controller
require_once "controllers/HomeController.php";



$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    //admin
    
    //client
    '' => (new HomeController)->index(),
    'checkout' => (new HomeController)->checkout(),
    'blank' => (new HomeController)->blank(),
    'product' => (new HomeController)->product(),
    'store' => (new HomeController)->store(),
    
    
    default => "Không tìm thấy file"
};