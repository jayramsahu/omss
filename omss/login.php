
<?php

require_once 'dbfunction.php';

$obj = new dbFunction();

if(isset($_POST['seeker']))
{
$mailid = $_POST['mail'];
$password = $_POST['pwd'];

//echo "<script>alert('".$mailid."')</script>";

$s=$obj->Login($mailid, $password);

if($s){
    echo "<script>alert('Welcome!!!')</script>";
    session_start();
    header("location:seeker-panel.php");
}
else
{
    echo "<script>alert('Incorrect email/password!!!')</script>";
}
}
if(isset($_POST['creator']))
{
$mailid = $_POST['mail'];
$password = $_POST['pwd'];

//echo "<script>alert('".$mailid."')</script>";
$s=$obj->LoginC($mailid, $password);
if($s){
    //echo "<script>alert('Welcome!!!')</script>";
    session_start();
    header("location:creator-panel.php");
}
else
{
    echo "<script>alert('Incorrect email/password!!!')</script>";
}
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CUSTOMER LOGEIN</title>
  </head>
  <!--<link href="{{URL::asset('resources/assets/custom/css/main.css')}}" rel="stylesheet" >
  <link href="{{URL::asset('resources/assets/custom/css/newstyle_t.css')}}" rel="stylesheet" >
  --><link href="custom/css/font-awesome.min.css" rel="stylesheet" >
  --><link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css" rel="stylesheet" >
  
  <link href="custom/css/datatables.css" rel="stylesheet" >
  <link href="custom/css/bootstrap.min.css" rel="stylesheet" >
  <link href="custom/css/bootstrap.css" rel="stylesheet" >
  <link href="custom/css/page.css" rel="stylesheet" >
  
  <script src="custom/js/jquery.js" ></script>
  <script src="custom/js/page.js" ></script>
  <script src="custom/js/bootstrap.js" ></script>
  <script src="custom/js/bootstrap.min.js" ></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js" ></script>
  
  <!--<link href="{{URL::asset('resources/assets/custom/css/bootstrap-theme.min.css')}}" rel="stylesheet" >
  --><link href="custom/css/bootstrap-switch.min.css" rel="stylesheet" >
  <body background="login4.png" style="background-repeat:no-repeat;background-size:cover ">
         <!-- Fixed navbar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand navbar-left" href="index.php">Customer login</a>
        </div>
        
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
            <li class=""><a href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
             
 
   <!-- /container -->
   
   
   
<div class="container">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 70px;">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Customer Login</a></li>
   
    

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
        <style>
            form-elegant .font-small {
  font-size: 0.8rem; }

.form-elegant .z-depth-1a {
  -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
  box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
  -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
  box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
                
        </style> 
        <section class="form-elegant">

    <!--Form without header-->
    <div class="card">

        <div class="card-body mx-4">

            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>&nbsp;</strong></h3>
            </div>

            <!--Body-->
            <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
            <div class="md-form">
                <input type="text" name="mail" id="Form-email1" class="form-control">
                <label for="Form-email1">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" name="pwd" id="Form-pass1" class="form-control">
                <label for="Form-pass1">Your password</label>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-3">
                <button type="submit" name="seeker" class="btn btn-info btn-block btn-rounded z-depth-1a">login</button>
            </div>
            </form>
        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
            <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="jobseeker.php" class="blue-text ml-1">Sign up</a></p>
        </div>

    </div>
    <!--/Form without header-->

</section>
            
      
    </div>
    <div id="menu1" class="tab-pane fade">
              <section class="form-elegant">

    <!--Form without header-->
    <div class="card">

        <div class="card-body mx-4">

            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>&nbsp;</strong></h3>
            </div>

            <!--Body-->
            <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
            <div class="md-form">
                <input type="text" name="mail" id="Form-email1" class="form-control">
                <label for="Form-email1">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" name="pwd" id="Form-pass1" class="form-control">
                <label for="Form-pass1">Your password</label>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-3">
                <button type="submit" name="creator" class="btn btn-info btn-block btn-rounded z-depth-1a">login</button>
            </div>
            </form>
        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
            <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="jobcreator.php" class="blue-text ml-1">Sign up</a></p>
        </div>

    </div>
    <!--/Form without header-->

</section>

    </div>
    
  </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    


    </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <script src="custom/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  
  </body>

</html>
