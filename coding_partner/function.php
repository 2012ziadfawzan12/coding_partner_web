<?php

class contact{
    public function __construct(){
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = 'coding_partner';
    
    // Create connection
    $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    // Check connection
    if (!$this->conn) {
      die("Connection failed: " . $conn->connect_error);
    }
    }
    public function info($data){
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        //$message = $data['message'];
        
  
        
  
        $query = "INSERT INTO info_get(name, email, phone) VALUE('$name',' $email','$phone')";
  
        if(mysqli_query($this->conn, $query)){
         return "you will get this course at march 4.<br>(Please check the email or phone message in march 4 to get the course)";
          
       }
  
      }
    }


?>






