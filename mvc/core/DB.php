<?php
class DB{
    public $con;
    public $severname = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "do_an_2";

    function __construct(){
        $this->con = mysqli_connect($this->severname, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    
}
?>