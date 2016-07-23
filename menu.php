<?php include('master.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HomePage</title>

<style type="text/css">

#apDiv1 {
	position: absolute;
	left: 471px;
	top: 229px;
	width: 390px;
	height: 278px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 42px;
	top: 229px;
	width: 377px;
	height: 278px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 20px;
	top: 36px;
	width: 416px;
	height: 45px;
	z-index: 3;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv4 {
	position: absolute;
	left: 83px;
	top: 191px;
	width: 181px;
	height: 48px;
	z-index: 4;
}
#apDiv5 {
	position: absolute;
	left: 516px;
	top: 191px;
	width: 184px;
	height: 56px;
	z-index: 5;
}
#apDiv6 {
	position: absolute;
	left: 917px;
	top:231px;
	width: 386px;
	height: 277px;
	z-index: 6;
}
#apDiv7 {
	position: absolute;
	left: 964px;
	top: 193px;
	width: 185px;
	height: 35px;
	z-index: 7;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>



<div id="apDiv1"><a href="pertests.php"><img src="images/p1.jpg" width="394" height="278" alt="p"></a></div>
<div id="apDiv2"><a href="no.php"><img src="images/500456467_padscreen0480x320.jpg" width="375" height="277" alt="iq"></a></div>
<div id="apDiv4">
  <ul id="MenuBar3" class="MenuBarHorizontal">
    <li><a href="no.php">IQ Test</a>    </li>
</ul>
</div>
<div id="apDiv5">
  <ul id="MenuBar2" class="MenuBarHorizontal">
    <li><a href="pertests.php">Personality Test</a>    </li>
</ul>
</div>
<div id="apDiv6"><a href="care.php"><img src="images/177831_Education-Wallpapers_1100x734.jpg" width="386" height="277"></a></div>
<div id="apDiv7">
  <ul id="MenuBar4" class="MenuBarHorizontal">
    <li><a href="care.php">Career Test</a></li>
  </ul>
</div>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar4 = new Spry.Widget.MenuBar("MenuBar4", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>


</body>
</html>
