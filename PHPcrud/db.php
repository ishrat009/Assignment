<?php
// Create connection
$con = mysqli_connect("localhost","root","","student_result");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//class DB {
//    private $db_row;
//    private $db;
//    
//    function __construct($db_row, $db) {
//        $this->db_row = $db_row;
//        $this->db = $db;
//    }
//    
//    public function get_db_row() {
//        return $this->db_row;
//    }
//
//    public function get_db() {
//        return $this->db;
//    }
//
//    public function set_db_row($db_row) {
//        $this->db_row = $db_row;
//    }
//
//    public function set_db($db) {
//        $this->db = $db;
//    }
//
//}