<?php
session_start();
if (isset($_SESSION['loginu'])==true) {
  //echo '<script>alert("Session Active");</script>';

//echo $_SESSION['uname'];
//echo $_SESSION['uid'];

 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>home page</title>
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
  <body background="login5.png" style="background-repeat:no-repeat;background-size:cover ">
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
  <nav class="navbar navbar-default sidebar" role="navigation"  style="background:rgba(100,1,1,0.5);">
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
      <ul class="nav navbar-nav">
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
        <li ><a href="availableservice.php">Available Services<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="logoutu.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-sm-10" >

<form action="service-machine.php" method="post" > 
  <div class="form-group">
    <label for="sname">service name</label>
    <input name="sname" type="text" class="form-control" id="sname">
  </div>
  <div class="form-group">
    <label for="stype">vahicle</label>
    <input name="vehicle" type="text" class="form-control" id="vehicle">
  </div>
   <div class="form-group">
    <label for="stypr">service on home or service center</label>
    <input name="stype" type="text" class="form-control" id="stypr">
  </div>
   <div class="form-group">
    <label for="pd">problem description</label>
    <input name="pd" type="text" class="form-control" id="pd">
  </div>
   <div class="form-group">
    <label for="date">date</label>
    <input name="date" type="date" class="form-control" id="date">
  </div>
   <div class="form-group hidden">
      <input name="uid" value="<?php echo $_SESSION['uid']?>" type="hidder" class="form-control" id="uid" >
   </div> 
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" name="service" class="btn btn-default">Submit</button>
</form>	
</center>
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
