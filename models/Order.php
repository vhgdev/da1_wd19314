<?php

class Order extends BaseModel {

    
    // Tất cả hóa đơn
    // Retrieve all orders with user details
    public function all() {
        $sql = "SELECT o.*, fullname, email, address, phone 
                FROM orders o 
                JOIN users u ON o.user_id = u.id 
                ORDER BY o.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Retrieve a single order with details
    public function find($id) {
        $sql = "SELECT o.*, fullname, email, address, phone, od.price AS detail_price, od.quantity, p.name AS product_name, p.image 
                FROM orders o 
                JOIN users u ON o.user_id = u.id 
                JOIN order_details od ON od.order_id = o.id 
                JOIN products p ON od.product_id = p.id 
                WHERE o.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // Return a single order's details
    }

    // Create a new order
    public function create($data) {
        $sql = "INSERT INTO orders (user_id, status, payment_method, total_price) 
                VALUES (:user_id, :status, :payment_method, :total_price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':user_id' => $data['user_id'],
            ':status' => $data['status'],
            ':payment_method' => $data['payment_method'],
            ':total_price' => $data['total_price'],
        ]);

        return $this->conn->lastInsertId(); // Return the inserted order ID
    }

    // Update order status
    public function updateStatus($id, $status) {
        $sql = "UPDATE orders SET status = :status WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':status' => $status,
        ]);
    }

    // Add order details
    public function createOrderDetail($data) {
        $sql = "INSERT INTO order_details (order_id, product_id, price, quantity) 
                VALUES (:order_id, :product_id, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':order_id' => $data['order_id'],
            ':product_id' => $data['product_id'],
            ':price' => $data['price'],
            ':quantity' => $data['quantity'],
        ]);
    }
}
