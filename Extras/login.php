<?php
if(empty($_SESSION)) // if the session not yet started 
   session_start();

include('connect.php');

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password' and active=0";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
  header('Location:menu.php');
echo "<a href='logout.php'>Logout</a>";
}else {
   // echo "Login Failed";
	 
            $msg = "Login Failed!!";
       
	//header('Location:register.php');
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script src="js/roundabout.js" type="text/javascript"></script>
<script src="js/roundabout_shapes.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.bg {behavior:url("js/PIE.htc")}</style>
<![endif]-->
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:213px;
	top:707px;
	width:212px;
	height:202px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:538px;
	top:707px;
	width:253px;
	height:245px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:931px;
	top:705px;
	width:220px;
	height:208px;
	z-index:3;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
<body id="page1">
  
<div class="body2">
  <div class="body3">
      <div class="main">
        <!-- header -->
        <header>
          <div class="wrapper">
            <h1><a href="index.html" id="logo"></a></h1>
            <form id="search" action="#" method="post">
              <div></div>
            </form>
            <nav>
              <ul id="menu">
                <li><a href="home.php">HOME</a></li>
                <li id="active"><a href="register.php">TESTS</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="contacts.php">CONTACT</a></li>
              </ul>
            </nav>
          </div>
          
          <div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>&nbsp;</h1>
<form action="" method="POST">
    <p>&nbsp;</p>
    <p class="style1">Login</p>
    <p>&nbsp;</p>
    <p>
      <label><strong>User Name : </strong></label>
      <strong>
      <input id="username" type="text" name="username" placeholder="username" />
        </strong></p>
    <p><strong>
      <label>Password&nbsp;&nbsp; : </label>
	 </strong>
      <input id="password" type="password" name="password" placeholder="password" /></p>
    <p>&nbsp;</p>
    <a href="register.php" class="btn"><strong>Register</strong></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input class="btn register" type="submit" name="submit" value="Login" style="font-weight:  bolder"/>
    </form>
</div>

</body>
</html>