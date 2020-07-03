<?php
class news extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"news"
        ]);

    }
}
?>