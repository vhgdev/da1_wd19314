<?php
class HomeController{
    public function index()
    {
        view("clients/home");
    }
    public function checkout()
    {
        view("clients/checkout");
    }
    public function blank()
    {
        view("clients/blank");
    }

    public function product()
    {
        view("clients/product");
    }

    public function store() 
    {
        view("clients/store");
    }
    
}
?>