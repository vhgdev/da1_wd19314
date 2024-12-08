<?php


class OrderController
{
    public function index()
    {
        $orders = (new Order)->all();
        return view("admin.orders.list", compact('orders'));
    }

    public function showOrder()
    {
        $id = $_GET['id'];
        // Thay đổi trạng thái
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $status = $_POST['status'];
            (new Order)->updateStatus($id, $status);
        }

        $order = (new Order)->find($id);

        $order_details = (new Order)->listOrderDetail($id);

        $status = (new Order)->status_details;

        return view("admin.orders.detail", compact('order', 'order_details', 'status'));
    }


    public function showOrderUser(){
        $user_id = $_SESSION['user']['id'];

        $orders = (new Order)->findOrderUser($user_id);

        $categories = (new Category)->all();

        return view("clients.users.list-order", compact('order', 'categories'));
    }
}