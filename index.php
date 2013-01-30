<?php
include ('db_connect.php');

if (isset($_COOKIE["user"]))
  $username = $_COOKIE["user"];
else
  include ('check_session.php');

?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>turtle8me8.com</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/landingPage.css" type="text/css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Unkempt|Bangers' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="test">
        <a href="bridge/m_bridge.php">The Bridge</a> 
	</div>
    <h3>Welcome to </h3>
	<h1>Turtle8me8.com</h1>
    <div id="portal">
        
	    <div href="javascript:void(0)" onclick="window.location.href='http://turtle8me8.com/bl0g/'" id="c104">        	
        </div>
        
    </div>
    
    <div id="portal">
    	<div id="xFiles"> 
        	<div class="ribbon-wrapper-green"><div class="ribbon-green">Work In Progress</div></div>       	
        </div>
    </div>
    <h2>"Many Bothans died to bring us this website."</h2>

    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
         
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
         
              <!-- Be sure to leave the brand out there if you want it shown -->
              <a class="brand" href="#">turtle8me8</a>
         
              <!-- Everything you want hidden at 940px or less, place within here -->
              <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
            </div>
         
        </div>
      </div>
    </div>
</body>

</html>
