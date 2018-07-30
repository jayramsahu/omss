<?php
session_start();
if (isset($_SESSION['loginu'])==true) {
  //echo '<script>alert("Session Active");</script>';

//echo $_SESSION['uname'];
//echo $_SESSION['uid'];

//print_r($_SESSION);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>customer profile</title>
  </head>
  <!--<link href="{{URL::asset('resources/assets/custom/css/main.css')}}" rel="stylesheet" >
  <link href="{{URL::asset('resources/assets/custom/css/newstyle_t.css')}}" rel="stylesheet" >
  -->
  <link href="custom/css/font-awesome.min.css" rel="stylesheet" >
  <link href="custom/css/datatables.css" rel="stylesheet" >
  <link href="custom/css/bootstrap.min.css" rel="stylesheet" >
  <link href="custom/css/bootstrap.css" rel="stylesheet" >
  <link href="https://raw.githubusercontent.com/samrayner/bootstrap-side-navbar/gh-pages/assets/stylesheets/navbar-fixed-side.css" rel="stylesheet" >
  <link href="custom/css/page.css" rel="stylesheet" >
  <script src="custom/js/page.js" ></script>
  <!--<link href="{{URL::asset('resources/assets/custom/css/bootstrap-theme.min.css')}}" rel="stylesheet" >
  --><link href="custom/css/bootstrap-switch.min.css" rel="stylesheet" >
   <body background="login6.png" style="background-repeat:no-repeat;background-size:cover ">
      <style>
                 body,html{
    height: 100%;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  .main{
    padding: 10px 10px 0 10px;
  }

 @media (min-width: 765px) {

    .main{
      position: absolute;
      width: calc(100% - 40px); 
      margin-left: 40px;
      float: right;
    }

    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }
    
    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
  }
   
  @media (min-width: 1330px) {

    .main{
      width: calc(100% - 200px);
      margin-left: 200px;
    }

    nav.sidebar{
      margin-left: 0px;
      float: left;
    }

    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }
  
 
      </style>
  <nav class="navbar sidebar" role="navigation" style="background:rgba(100,1,1,0.5);">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav" >
        <li ><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="profile.php">My Profile <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <!--<ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Reportar</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">Informes</a></li>
          </ul>-->
        </li>          
        <li ><a href="#">Available service<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="logoutu.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


		<div class="col-sm-10 col-xs-10">
    <ul class="breadcrumb">
        <li><a href="http://localhost/php_oop/seeker-panel.php">Home</a></li>
        <li class="active">MyProfile</li>        
    </ul>
</div>

<?php //foreach($details as $row):?>


<div class="col-sm-8 col-xs-8">
    <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> Details</a>
            </li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
            </li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-envelope-o" aria-hidden="true"></i> Change Email</a>
            </li>
            <li><a data-toggle="tab" href="#menu3"><i class="fa fa-picture-o" aria-hidden="true"></i> Change Avatar</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <div class="container-fluid">
                    <h2></h2>
                    
                    <form action="">
                        <div class="form-group" >
                            <label for="email" class="text-success">Email Id           :</label><label class="text-info"><?php echo $_SESSION['email'];?></label>   

                        </div>
                        <div class="form-group">
                            <label for="name" class="text-success">Full Name      :</label><label class="text-info"><?php echo $_SESSION['uname'];?></label>

                        </div>
                      

                      
                        <div class="form-group">
                            <label for="address" class="text-success">Address    :</label><label class="text-info"><?php echo $_SESSION['address'];?></label>

                        </div>
                         <div class="form-group">
                            <label for="f" class="text-success">Flatname   :</label><label class="text-info"><?php echo $_SESSION['flatename'];?></label>

                        </div>
                        <div class="form-group">
                            <label for="d" class="text-success">distric    :</label><label class="text-info"><?php echo $_SESSION['district'];?></label>  </div>

                        <div class="form-group">
                            <label for="pin" class="text-success">Pin    :</label><label class="text-info"><?php echo $_SESSION['pin'];?></label>

                        </div>
                        <div class="form-group">
                            <label for="state" class="text-success">State    :</label><label class="text-info"><?php echo $_SESSION['state'];?></label>

                        </div><!-- //
                        <div class="form-group">
                            <label for="quali" class="text-success">    :</label><label class="text-info"><?php //echo $_SESSION['quali'];?></label>

                        </div>
                 /*      <div class="form-group">
                            <label for="exp" class="text-success">Experience    :</label><label class="text-info"><?php //echo $_SESSION['exp'];?></label>

                        </div>
                        <div class="form-group">
                            <label for="skills" class="text-success">Skills    :</label><label class="text-info"><?php //echo $_SESSION['skills'];?></label>

                        </div>*/

-->
                        <div class="form-group">
                            <label for="phn" class="text-success">Contact Number    :</label><label class="text-info"><?php echo $_SESSION['phone'];?></label>

                        </div>
                        <?php //endforeach;?>


                    </form>
                </div>
                <div class="help col-sm-4 col-sm-offset-4">
                    <button class="btn btn-danger btn-lg" type="button" onclick="contact();" style="font-family: 'Monda', sans-serif;"> <i class="fa fa-phone" aria-hidden="true"></i> Contact Admin </button>
                </div>
                
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php //form_open('home/changepass')?>
                <form class="form-inline" action="" method="post">
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="current">Current Password : </label>
                        <input for="current" id="current" type="password" name="current" required/>
                    </div>
                    <div class="form-group">
                        <label for="new">New Password : </label>
                        <input for="new" id="new" type="password" name="new" required/>
                    </div>
                    <div class="form-group">
                        <label for="confirm">Confirm Password : </label>
                        <input for="confirm" id="confirm" type="password" name="confirm" required/>
                    </div>


                    <br/>
                    <br/>
                    <div>
                        <input type="button" class="btn btn-info" onclick="password()" value="update"/>
                    </div>




                </form>

            </div>
            <div id="menu2" class="tab-pane fade">
                <form class="form-inline"  name="email_form" method="post">
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="new">New Email : </label>
                        <input for="new" id="new_mail" type="email" required/>
                    </div>


                    <br/>
                    <br/>
                    <div>
                        <button type="submit" class="btn btn-info" onclick="email();">Verify & Update</button>

                    </div>




                </form>
            </div>
            <div id="menu3" class="tab-pane fade">
                <style>
                    #my-awesome-dropzone{
                        width:400px;
                        margin-left: 23%;
                        margin-top: 70px;
                        height:350px;
                        border-style: dashed;
                        border-color: #0086b3;
                    }     

                </style>
                <form action="/file-upload"
                      class="dropzone"
                      id="my-awesome-dropzone"><div class="dz-message"><i class="fa fa-picture-o" aria-hidden="true"></i> Drop files to upload (or click)</div></form>


            </div>
        </div>
    </div>	
</div>

<div class="col-sm-2 col-xs-12 text-center" >
    <h2>    </h2>
    <div style=" border:0px solid gray;	margin: 0 ;">
        <img style="max-width:200px;max-height:200px;" alt="" src="custom/image/first.jpg" class="avatar">                </div>
    <h4><?php echo $_SESSION['uname'];//$row->name;?></h4>	


</div>

      
      <!-- Fixed navbar -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="custom/js/jquery.js"></\script>')</script>
    <script src="custom/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
<?php
}
else{
    header("location:index.php");
    //echo 'Hellp';
}
?>
</html>
