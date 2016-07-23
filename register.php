<?php
	include('connect.php');
	
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) ){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 		$age= $_POST['age'];
        $query = "INSERT INTO `user` (username, email, password,age) VALUES ('$username', '$email', '$password', '$age' )";
        $result = mysqli_query($connection, $query);
        if($result){
            $msg = "User Created Successfully.";
        }
		unset($_POST['username']);
		unset($_POST['email']);
		unset($_POST['password']);
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>user registration Script</title>
<link rel="stylesheet" type="text/css" href="js/style.css" />
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
.style2 {color: #999999}
.style3 {color: #CCCCCC}
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
.style4 {font-size: 36px}
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
          <p>&nbsp;</p>
          <div class="register-form">
            <?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
          <h1>&nbsp;</h1>
<form action="" method="POST">
    <p><label> <strong><br>
          <span class="style4">Register</span><br>
          <br>
          <br>
          User Name : </strong></label>
	  <strong>
	  <input id="username" type="text" name="username" required placeholder="username" />
      </strong></p>
	
	<p><strong>
	  <label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	  <input id="password" type="email" name="email" required placeholder="xyz@email.com" />
	</strong></p>
 
     <p><strong>
      <label>Password&nbsp;&nbsp; : </label>
      <input id="password" type="password" name="password" required placeholder="password" />
     </strong></p>
 
 	  <p><strong>
      <label>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
      <input id="age" type="text" name="age" required placeholder="age" />
 	  </strong></p>
 	  <p><a href="login.php" class="btn"><strong>Login</strong></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 	        <input class="btn register" type="submit" name="submit" value="Register" style="font-weight:bold"  />
      </p>
</form>
          </div>
          <p>&nbsp;</p>
        </header>
        <span class="style2">
        <!-- / header-->
        <!-- content -->
        </span></div>
  </div>
</div>
  <span class="style2">
  <article class="grid_3">  </article>
  </span><span class="style3">
        <article class="grid_3">        </article>
        </span><span class="style3">
        <!-- / content -->
        </span>
        <div class="main">
  
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    $('#myRoundabout').roundabout({
        shape: 'square',
        minScale: 0.93, // tiny!
        maxScale: 1, // tiny!
        easing: 'easeOutExpo',
        clickToFocus: 'true',
        focusBearing: '0',
        duration: 800,
        reflect: true
    });
});
</script>
<div align=center></div>

</body>
</html>