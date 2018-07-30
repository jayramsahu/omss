<?php 
require_once 'dbfunction.php';
    //echo (isset($_POST['form1'])) ;
    //echo "helki" ;
   
    //if(isset($_POST['form1'])){
        
        $cid = $_POST['cid'];
        $jname = $_POST['jname'];
        $vacancy = $_POST['vacancy'];
        $ldate = $_POST['ldate'];
        $salary = $_POST['salary'];
          $db = new dbFunction;
            //echo $db->postJob($cid, $jname, $vacancy, $ldate, $salary);
          if($db->postJob($cid, $jname, $vacancy, $ldate, $salary)==1)
            {
                echo "<script>alert('Job Posted Successfully');window.location='creator-panel.php';</script>";
                //header("location:creator-panel.php");
            }
            else{
                echo "<script>alert('Unable to Post The Job!!!');window.location='post-a-job.php';</script>";
                //header("location:post-a-job.php");
            }
      
      
    