<?php  
require_once 'dbconnect.php';  
//session_start();  
    class dbFunction {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();
            $db->main();
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function UserRegister($emailid, $password,$fname,$lname,$flatename,$district,$address,$phone,$pin,$state){  
            
            $password = md5($password); 
              $db = new dbConnect();
               
              $sql="INSERT INTO users(emailid, password,fname,lname,flatename,district,address,phone,pin,state) values('".$emailid."','".$password."','".$fname."','".$lname."','".$flatename."','".$district."','".$address."','".$phone."','".$pin."','".$state."')";
                $qr = mysqli_query($db->main(),$sql);  
                if($qr==true)
                {    
                return 1;
                }
        }  
        public function CreatorRegister($emailid, $password,$fname,$lname,$company,$gst,$size,$address,$phone,$pin,$state){  
            
            $password = md5($password); 
              $db = new dbConnect();
               
              $sql="INSERT INTO creators(mailid, password,fname,lname,company,gst,size,address,phone,pin,state) values('".$emailid."','".$password."','".$fname."','".$lname."','".$company."','".$gst."','".$size."','".$address."','".$phone."','".$pin."','".$state."')";
                $qr = mysqli_query($db->main(),$sql);  
                if($qr==true)
                {    
                return 1;
                }
        }  
        public function Login($emailid, $password){  
           $db = new dbConnect();
            $res = mysqli_query($db->main(),"SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
                session_id('users');
                session_start();
                $_SESSION['loginu'] = true;  
                $_SESSION['uid'] = $user_data['id'];  
                $_SESSION['uname'] = $user_data['fname']." ".$user_data['lname'];  
                 
                $_SESSION['email'] = $user_data['emailid'];  
                $_SESSION['flatename'] = $user_data['flatename'];  
                $_SESSION['district'] = $user_data['district'];  
                $_SESSION['address'] = $user_data['address'];  
                $_SESSION['phone'] = $user_data['phone'];  
                $_SESSION['pin'] = $user_data['pin'];  
                $_SESSION['state'] = $user_data['state'];  
               
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }  
        public function LoginC($emailid, $password){  
           $db = new dbConnect();
            $res = mysqli_query($db->main(),"SELECT * FROM creators WHERE mailid = '".$emailid."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
                session_id('creator');
                session_start();
                $_SESSION['loginc'] = true;  
                $_SESSION['cid'] = $user_data['id'];  
                $_SESSION['cname'] = $user_data['fname']." ".$user_data['lname'];  
                 
                $_SESSION['cemail'] = $user_data['mailid'];  
                $_SESSION['company'] = $user_data['company'];  
                $_SESSION['gst'] = $user_data['gst'];  
                $_SESSION['address'] = $user_data['address'];  
                $_SESSION['state'] = $user_data['state'];  
                $_SESSION['phone'] = $user_data['phone'];  
                $_SESSION['pin'] = $user_data['pin'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }  
        public function isUserExist($emailid){  
            $db = new dbConnect();  
            $qr = mysqli_query($db->main(),"SELECT * FROM users WHERE emailid = '".$emailid."'");  
            echo $row = mysqli_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
        public function isCreatorExist($mailid){  
            $db = new dbConnect();  
            $qr = mysqli_query($db->main(),"SELECT * FROM creators WHERE mailid = '".$mailid."'");  
            echo $row = mysqli_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }
        public function try1() {
            echo 'heloo';
            
        }
        public function logout() {
			session_start();
           unset($_SESSION['creator']);
		   session_destroy();
        }
        public function logoutu() {
            //session();
			//$_SESSION['login']=0;
           //session_unset();
            //session_write_close(users);
			session_start();
			unset($_SESSION['users']);
			session_destroy();
            
        }
        public function isJobPosted($cid) {
            $db=new dbConnect();
            $qr= mysqli_query($db->main(),"SELECT `id`, `c_id`, `j_type`, `vacancy`, `ldate`, `salary` FROM `recruitment` WHERE `c_id`=".$cid."");
            $row = mysqli_num_rows($qr);
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }
        }
        public function postJob($cid,$jtype,$vacancy,$ldate,$salary) {
            $db=new dbConnect();
			$filled=0;
            $query="INSERT INTO `recruitment`(`c_id`, `j_type`, `vacancy`, `ldate`, `salary`,`filled`) VALUES ('".$cid."','".$jtype."','".$vacancy."','".$ldate."','".$salary."','".$filled."')";
            //return $query;
            $qr= mysqli_query($db->main(),$query);
            //return $qr; 
            //return $jtype." ".$vacancy." ".$ldate." ".$salary;/*
            
            if($qr==TRUE)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
    }  
?>  