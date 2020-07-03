<?php
class home extends Controller{
    function Load(){
    $sanpham = $this->model("adminModel");
    $data1 = $sanpham->getsanpham();
     $this->views("index",
        [
            "layout"=>  "home",
            "data1"=> $data1
        ]);
    }
  
}
?>