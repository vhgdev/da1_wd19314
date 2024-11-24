<?php
class AuthController{
    //Đăng ký
    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data= $_POST;
            dd($data);
        }

        return view('clients.users.register'); 
    }
    //Đăng nhập
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data= $_POST;
            dd($data);
        }
    }
}