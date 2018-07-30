<?php 
echo "<html><body bgcolor='#699988'><font size='10' color='#FF1493' ><h1  style='position: fixed;  width:100%; text-align: center'>hello, welcome to our service </h1></font></body></html>";

if(isset($_POST['service']))
{
$sname = $_POST['sname'];
$stype = $_POST['stype'];
$vehicle=$_POST['vehicle'];
$date = $_POST['date'];
$pd=$_POST['pd'];
$uid=$_POST['uid'];
include_once('dbConnect.php');

$db = new dbConnect();
$sql="INSERT INTO serviceorder(sname, stype,vehicle,date,pd,uid) values('".$sname."','".$stype."','".$vehicle."','".$date."','".$pd."','".$uid."')";
$qr = mysqli_query($db->main(),$sql);  
                if($qr==true)
                {    
                
				echo "<script>alert('Welcome to our service!!!')</script>";
                }
                             
			   


}


else
{
    echo "<script>alert('Incorrect please try again!!!')</script>";
}








?>




