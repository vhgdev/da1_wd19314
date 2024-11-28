<?php


class Order extends BaseModel {
    // Tất cả hóa đơn
    public function all() {
        $sql = "SELECT o.*, fullname, email, address, phone FORM order o JOIN users u ON o.user_id=u.id ORDER BY o.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Chi tiết hóa đơn
    public function find($id) {
        $sql = "SELECT o.*, fullname, email, address, phone, od.price, od.quantity, name,image FROM order o JOIN users u ON o.user_id=u.id ON order_details od ON od.order_id"
    }




}