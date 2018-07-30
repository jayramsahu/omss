<?php  
    class dbConnect {  
        function main() {  
            require_once('config.php');  
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABSE);  
            $c=mysqli_select_db($conn,DB_DATABSE);  
            if(!$conn)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }   
            return $conn;  
        }  
        public function Close(){  
            mysqli_close();  
        }  
    }  
?>  