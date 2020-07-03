<?php
class cart extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"cart"
        ]);

    }
}
?>