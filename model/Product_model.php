<?php
require_once('core/MY_model.php');
class Product_model extends MY_model {

    function get_all_products()
    {
        $sql = "SELECT * FROM `san_pham`";
        $san_pham = $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $san_pham;
    }

    function get_products_by_category($id, $search)
    {
        $sql = "SELECT * FROM `san_pham` WHERE id_danh_muc_san_pham = " . $id . " AND ( `ten_san_pham` LIKE '%" . $search . "%' OR `ma_san_pham` LIKE '%" . $search . "%')";
        $san_pham = $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $san_pham;
    }

}
?>