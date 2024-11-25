<?php
class AuthController{
    //Đăng ký
    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data= $_POST;
            //Mã hóa mật khẩu
            $password=$_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);

            //Đưa vào data
            $data['password']=$password;

            //insert vào database
            (new User)->create($data);

            //Thông báo
            $_SESSION['message']= 'Đăng ký thành công';
            header("location: " .ROOT_URL_ ."?ctl=login");
            die;
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