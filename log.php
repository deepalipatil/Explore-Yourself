<?php
if(empty($_SESSION)) // if the session not yet started 
   session_start();

include('connect.php');

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
	
 
$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password'  and active=0";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
	$_SESSION['user'] = $username;
	
  header('Location:menu.php');
echo "<a href='logout.php'>Logout</a>";
}else {
   // echo "Login Failed";
	 
            $msg = "Login Failed!!";
       
	//header('Location:register.php');
}
}
?>