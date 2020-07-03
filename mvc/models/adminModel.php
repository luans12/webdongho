<?php
class adminModel extends DB{
    public function getadmin(){
        $qr = "SELECT * FROM  quan_tri_vien  ";
        return mysqli_query($this->con, $qr);
    }
    // Lấy sản phẩm
    public function getsanpham(){
        $qr = "SELECT * FROM danh_muc, san_pham where san_pham.id_danh_muc = danh_muc.id_danh_muc";
        return mysqli_query($this->con, $qr);

    }
    // Đăng nhập admin
    public function loginModel($username, $password){
       $qr = mysqli_query($this->con, "select * from admin where username = '$username'");
       return $qr;
    }
    // Đăng nhập người dùng
    public function loginuserModel($username, $password){
        $qr = mysqli_query($this->con, "select * from user where username = '$username'");
        return $qr;
     }
    //  Thêm sản phẩm
    public function them($id,$ten,$gia,$mota,$anh,$danhmuc ){
        $qr = "INSERT INTO san_pham (id_san_pham, ten_san_pham, gia, thong_tin, anh_san_pham, id_danh_muc)
        VALUES('".$id."','".$ten."','".$gia."','".$mota."','".$anh."','".$danhmuc."')";
        return mysqli_query($this->con, $qr);
        
    }
    // Lấy danh mục
    public function getdanhmuc(){
        $qr = "SELECT * FROM danh_muc";
        return mysqli_query($this->con, $qr);
    }
    // Thêm danh mục
    public function themdanhmuc($iddanhmuc,$tendanhmuc){
        $qr = "INSERT INTO danh_muc (id_danh_muc, ten_danh_muc)
        VALUES('".$iddanhmuc."','".$tendanhmuc."')";
        return mysqli_query($this->con, $qr);
        
    }
    // Sửa sản phẩm
    public function suasanpham($id,$ten,$gia,$mota){
        $qr = "UPDATE san_pham SET ten_san_pham = '".$ten."', gia = '".$gia."', thong_tin = '".$mota."' where id_san_pham = '".$id."'  ";
        return mysqli_query($this->con,$qr);
    }
    // Xóa sản phẩm
    public function xoaSanPham($id){
        $qr = "DELETE FROM san_pham WHERE id_san_pham = '$id' ";
        return mysqli_query($this->con, $qr);
    }
    public function laySanPham($id){
        $qr = "SELECT * FROM san_pham where id_san_pham = '$id' ";
        return mysqli_query($this->con, $qr);
    }
    // Xóa danh mục
    public function xoadanhmuc($iddanhmuc){
        $qr = "DELETE FROM danh_muc WHERE id_danh_muc = '$iddanhmuc' ";
        return mysqli_query($this->con, $qr);
    }
    // Lấy danh mục
    public function laydanhmuc($id){
        $qr = "SELECT * FROM danh_muc where id_danh_muc = '$id' ";
        return mysqli_query($this->con, $qr);
    }
    // Sửa danh mục
    public function suadanhmuc($iddanhmuc,$tendanhmuc){
        $qr = "UPDATE danh_muc SET ten_danh_muc = '".$tendanhmuc."' WHERE id_danh_muc = '".$iddanhmuc."' "; 
        return mysqli_query($this->con,$qr);
    }
    // Tìm sản phẩm
    public function timsanpham($tensanpham){
        $qr = "SELECT * FROM san_pham WHERE ten_san_pham LIKE '%".$tensanpham."%'";
        return mysqli_query($this->con, $qr);
    }
    public function loadsanphamtheoten($tensanpham){
        $qr = "SELECT * FROM san_pham where ten_san_pham = '$tensanpham' ";
        return mysqli_query($this->con, $qr);
    }
    
}
