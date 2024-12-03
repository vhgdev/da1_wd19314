<?php
session_start();
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/User.php";
//Controller
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/CartController.php";

$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    // 'category' => (new ProductController)->list(),
    // 'detail' => (new ProductController)->show(),
    'register' => (new AuthController)->register(),
    'login' =>( new AuthController)->login(),
    // 'logout' => (new AuthController)->logout(), 
    // 'add-cart' => (new CartController)->addToCart(),

    // 'register' =>(new AuthController)->register(),
    // 'login' =>(new AuthController)->login(),
    'detail' => (new ProductController)->show(),
    'add-cart' => (new CartController)->addToCart(),
    'view-cart' => (new CartController)->viewCart(),
    'delete-cart' => (new CartController)->deleteProductInCart(),
    'update-cart' => (new CartController)->updateCart(),
    default => view( 'errors.404'),
};