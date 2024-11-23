<?php

//Lớp tương tác với bảng categories
class Category extends BaseModel{
    //Phương thức lấy toàn bộ bản ghi
    public function all(){
        /**
         * @soft_delte=0: không xóa
         * @soft_delete=1: đã xóa
         */
        $sql = "SELECT * FROM categories WHERE soft_delete=0";
        //chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //thực thi lệnh truy vấn
        $stmt->execute();
        //lấy dữ liệu trả về cho hàm
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm bản ghi mới
    /**
     * @data là mảng dữ liệu cần thêm gồm có key là tên cột 
     */
    public function create($data){
        $sql = "INSERT INTO categories(cate_name, type) VALUES(:cate_name, :type)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    /**
     * Cập nhật dữ liệu 
     * @id : mã danh mục cần cập nhật 
     * @data: mảng dữ liệu cần cập nhật     
     */
    public function update($id,$data)
    {
        $sql = "UPDATE categories SET cate_name , type=:type WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        //Thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    /**
     * Hàm xóa , là xoa mềm dữ liệu chỉ chuyển đổi trạng thái chứ không xóa khỏi cơ sở dữ liệu
     * @id: mã danh cần xóa 
     */
    public function delete($id){
        $sql = "UPDATE categories SET soft_delete=1 WHERE id=:id";
        $sttm = $this->conn->prepare($sql);
        $sttm->execute(['id' => $id]);
    }

    /**
     * Hàm lấy 1 bản ghi theo id
     */
    public function find($id){
        $sql ="SELECT * FROM categories WHERE id = :id" ;
        $sttm = $this->conn->prepare($sql);
        $sttm->execute(['id'=> $id]);
        //Lấy ra một bản ghi
        return $sttm->fetch(PDO::FETCH_ASSOC);
    }
}