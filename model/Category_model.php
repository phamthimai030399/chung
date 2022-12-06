<?php
require_once('core/MY_model.php');
class Category_model extends MY_model {

    function get_all_categories(){
        $sql = "SELECT * FROM `danh_muc_san_pham`";
        $danh_muc_san_pham = $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $danh_muc_san_pham;
    }
    
    function get_category($id){
        $sql = "SELECT * FROM `danh_muc_san_pham` WHERE `id` = " . $id;
        $this_category = $this->conn->query($sql)->fetch_array(MYSQLI_ASSOC);
        return $this_category;
    }

    function get_categories($search){
        // ôn lại bài sql luôn
        // em viết 1 câu lệnh SQL lấy danh sách các danh mục có tên chứ từ thực
        // sau khi viết xong với từ thực cố định thì mình đổi, thay từ thực cụ thể đó bằng phép cộng chuỗi với biến search ở trên là giá trị

        //khi đó nếu search mà mình nhập ở bên ngoài
        
        $sql = "SELECT * FROM `danh_muc_san_pham` WHERE `ten_danh_muc` LIKE '%" . $search . "%' OR `ma_danh_muc` LIKE '%" . $search . "%'";
        $cac_danh_muc_tim_thay = $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $cac_danh_muc_tim_thay;
    }

}
?>