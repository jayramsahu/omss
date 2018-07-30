<?php
require_once 'dbfunction.php';

$obj = new dbFunction();

if(isset($_POST['register']))
{
$mailid = $_POST['email'];
$password = $_POST['pwd'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$flatename = $_POST['flatename'];
$district = $_POST['district'];
$address = $_POST['address'];
$phone = $_POST['phn'];
$pin = $_POST['pin'];
$state = $_POST['state'];



$mailcheck=$obj->isUserExist($mailid);
if(!$mailcheck)
{
  

$status = $obj->UserRegister($mailid, $password, $fname, $lname, $flatename, $district, $address, $phone, $pin, $state);
if($status)
{
    
    echo "<script>alert('Registration Successful')</script>";
    header("location:index.php");
}
else{
    echo "<script>alert('Registration Not Successful')</script>";

}

}
else{
    echo "<script>alert('Mail ID Already Exist!!')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>REGISTRATION</title>
    </head>
    <!--<link href="{{URL::asset('resources/assets/custom/css/main.css')}}" rel="stylesheet" >
    <link href="{{URL::asset('resources/assets/custom/css/newstyle_t.css')}}" rel="stylesheet" >
    --><link href="custom/css/font-awesome.min.css" rel="stylesheet" >
    <link href="custom/css/datatables.css" rel="stylesheet" >
    <link href="custom/css/bootstrap.min.css" rel="stylesheet" >
    <link href="custom/css/bootstrap.css" rel="stylesheet" >
    <link href="custom/css/page.css" rel="stylesheet" >
    <script src="custom/js/page.js" ></script>
    <!--<link href="{{URL::asset('resources/assets/custom/css/bootstrap-theme.min.css')}}" rel="stylesheet" >
    --><link href="custom/css/bootstrap-switch.min.css" rel="stylesheet" >
    <body background="login8.png" style="background-repeat:no-repeat;">
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
                    <a class="navbar-brand navbar-left" href="INDEX.PHP">Registration </a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                    <li class=""><a href="#">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="col-sm-6 col-sm-offset-3" style="margin-top: 70px;">
                    <h2>Fill Up Your Details: <i class="fa fa-file-text-o" aria-hidden="true"></i></h2>
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" style="margin-bottom:15px;">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" id="email" data-validation="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">New Password:</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" autocomplete="off" data-validation="length alphanumeric" data-validation-length="min6">
                        </div>
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" class="form-control" id="fname"  data-validation="length alphanumeric" data-validation-length="min4">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" class="form-control" id="lname" data-validation="length alphanumeric" data-validation-length="min4">
                        </div>
                       
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control" id="address" data-validation="length alphanumeric" data-validation-length="min10">
                        </div>
						 <div class="form-group">
                            <label for="fathername">FLATE NAME:</label>
                            <input type="text" name="flatename" class="form-control" id="flatename" data-validation="length alphanumeric" data-validation-length="min4">
                        </div>

                        <div class="form-group">
                            <label for="mothername">DISTRICT:</label>
                            <input type="text" name="district" class="form-control" id="district" data-validation="length alphanumeric" data-validation-length="min4">
                        </div>
                        <div class="form-group">
                            <label for="phn">Contact Number:</label>
                            <input type="text" name="phn" class="form-control" id="phn" data-validation="number">
                        </div>
                        <div class="form-group">
                            <label for="pin">Pin:</label>
                            <input type="text"  name="pin" class="form-control" id="pin" data-validation="number">
                        </div>

                        <div class="form-group">
                            <label for="state">State:</label>
                            <select class="form-control" name="state" id="state">
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chattisgarh</option>
                                <option>Goa</option>
                                <option>Gujrat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerla</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisa</option>
                                <option>Punjab</option>
                                <option>Rajashthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option>Tripura</option>
                                <option>Uttarakhand</option>
                                <option>Uttar Pradesh</option>
                                <option>West Bengal</option>
                            </select>

                        </div>
                       
                       
                      
                       
                        <button type="submit" name="register" class="btn btn-block">Register <i class="fa fa-user-plus" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
        lang: 'es'
        });</script>


    <style>
        .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }
        .social {
            -webkit-transform: scale(0.8);
            /* Browser Variations: */

            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
        }

        /*
            Multicoloured Hover Variations
        */

        #social-fb:hover {
            color: #3B5998;
        }
        #social-tw:hover {
            color: #4099FF;
        }
        #social-gp:hover {
            color: #d34836;
        }
        #social-em:hover {
            color: #f39c12;
        }
    </style>

    <div class="text-center center-block " style="background:#111;color:whitesmoke; ">
        <br>
        <p class="txt-railway">- REGISTRATION-</p>
        <br />
        <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
        <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
        <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="custom/js/jquery.js"><\/script>')</script>
<script src="custom/js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
