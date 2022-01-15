<?php
    // $host = "localhost";
    // $user = "root";
    // $pass = "";
    // $db = "b74";
    
    // define("host", "localhost");
    // define("user", "root");
    // define("pass", "");
    // define("db", "b74");

    // $conn = mysqli_connect("localhost", "root", "", "b74");
    // $conn = mysqli_connect($host, $user, $pass, $db);

    // $conn = mysqli_connect(host, user, pass, db);

    // if ($conn) {
    //     echo "Connected";
    // }else{
    //     echo "Something went wrong";
    // }


    // class Database{
    //     public $connection;
    //     public $hostName="localhost";
    //     public $dbName="ctg_todo";
    //     public $dbUserName="root";
    //     public $dbPassWord="";
    
    //     public function __construct(){
    //         $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->dbName", $this->dbUserName , $this->dbPassWord);
    //         if($this->connection){
    //             //echo 'Connected';
    //         }else{
    //             echo 'error';
    //         }
    //     }
    // }

    $conn = new PDO("mysql:host=localhost; b74", "root", "");
    if ($conn) {
        echo "Connected";
    }else{
        echo "Something went wrong";
    }
?>