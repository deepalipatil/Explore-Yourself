<?php include('master.php');?>
<html>
<head>
<title>
IQ TEST
</title>
<script language=JavaScript>
var i=1, num_Of_Question=10;
questions = new Array() 
questions[1]="\"Boat is to water\" therefore \"Plane is to____\"";
questions[2] ="If Bob sold 15 apples in a working week, what is the average number of apples he sells each day?";
questions[3] ="The word PARTICULAR is opposite of ?";
questions[4] ="If you have a cube which is 5m x 5m x 5m, what is the cubic metres this container would hold?";
questions[5] ="If Sally sells more tickets than Betty and Betty sells more tickets than Jodie, who sells the most if we compare Sally and Jodie?";
questions[6] ="If it takes 2 hour to drive to City A and the City is 120km away, what speed was the vehicle travelling at?";
questions[7] ="Which number should come next in this series? 1,4,9,16,25,";
questions[8] ="Which number does not belong? 4 32 144 , 17 28 122 , 18 64 188 , 322 14 202";
questions[9] ="Which number should come next in this series? 3,5,8,13,21,";
questions[10] ="Insert the missing number 16(27)43 , 29(?)56";

answerA=new Array()
answerA[1]="Fly";
answerA[2]="3";
answerA[3]="Distinct";
answerA[4]="25";
answerA[5]="Jodie";
answerA[6]="60km/hr";
answerA[7]="30";
answerA[8]="202";
answerA[9]="34";
answerA[10]="27";

answerB=new Array()
answerB[1]="Sky";
answerB[2]="2";
answerB[3]="Vague";
answerB[4]="125";
answerB[5]="Sally";
answerB[6]="120km/hr";
answerB[7]="36";
answerB[8]="122";
answerB[9]="25";
answerB[10]="16";


answerC=new Array()
answerC[1]="Float";
answerC[2]="5";
answerC[3]="Exacting";
answerC[4]="5";
answerC[5]="Betty";
answerC[6]="240km/hr";
answerC[7]="29";
answerC[8]="17";
answerC[9]="36";
answerC[10]="38";


answerD=new Array()
answerD[1]="Air";
answerD[2]="1";
answerD[3]="Fussy";
answerD[4]="15";
answerD[5]="Both a and b";
answerD[6]="None of above";
answerD[7]="45";
answerD[8]="28";
answerD[9]="40";
answerD[10]="78";


rightAnswer=new Array()
rightAnswer[1]=4;
rightAnswer[2]=1;
rightAnswer[3]=2;
rightAnswer[4]=2;
rightAnswer[5]=2;
rightAnswer[6]=1;
rightAnswer[7]=2;
rightAnswer[8]=3;
rightAnswer[9]=1;
rightAnswer[10]=1;
var score=0;
function preQuestion()
{
var radios = document.getElementsByName("quiz");
var option;

    for (var j = 0; j < radios.length; j++) {       
        if (radios[j].checked) {
           option=radios[j].value;
		radios[j].checked=false;
            break;
        }
    }

	if(option==rightAnswer[i])
	{
		score=score+1;
		
	}
	
	i--;	
	if(i==0)
	{
	alert("This is first Question");
	i++;
	}
	
	var x=document.getElementById('myTable').rows
    	var y=x[0].cells
    	y[0].innerHTML=i + ".\t";
	y[1].innerHTML=questions[i];
	getOptionA();
}
function nextQuestion()
{

var radios = document.getElementsByName("quiz");
var option;

    for (var j = 0; j < radios.length; j++) {       
        if (radios[j].checked) {
           	option=radios[j].value;
		radios[j].checked=false;
            	break;
        }
    }

	if(option==rightAnswer[i])
	{
		score=score+1;
		
	}
	i++;
	if(i>num_Of_Question)
	{
	alert("This is last Question");
	i--;
	}	
	var x=document.getElementById('myTable').rows
    	var y=x[0].cells
    	y[0].innerHTML=i + ".\t";
	y[1].innerHTML=questions[i];
	getOptionA();
}
function getOptionA()
{
var x=document.getElementById('myTable').rows
    	var y=x[1].cells
    	y[1].innerHTML=answerA[i];
getOptionB();
}
function getOptionB()
{
var x=document.getElementById('myTable').rows
    	var y=x[2].cells
    	y[1].innerHTML=answerB[i];
getOptionC();
}
function getOptionC()
{
var x=document.getElementById('myTable').rows
    	var y=x[3].cells
    	y[1].innerHTML=answerC[i];
		getOptionD();
}
function getOptionD()
{
var x=document.getElementById('myTable').rows
    	var y=x[4].cells
    	y[1].innerHTML=answerD[i];
}
function showScore() //score is updated only after clicking next or previous button not by clicking the answer and checking in order to know whether your answer is correct or not.
{
var radios = document.getElementsByName("quiz");


for (var j = 0; j < radios.length; j++) {       
        
           
		radios[j].checked=false;
        
    }
 alert("Your score is "+ score);
}
</script>
<style type="text/css">
.style37 {
	color: #FFFFFF;
	font-size: medium;
	font-weight:bold;
}
.btn{background: #999999;
padding: 7px;
border-radius: 5px;
text-decoration: none;
width: 80px;
height:35px;
margin-top:15px;
display: inline-block;
font-weight:bold;
font-size:15px;
color: #FFF;}
</style>
</head>
<body>
<form  name="first" method="post" style=" width:700px; height:500px; margin-left:100px; margin-top:-420px; " class="style37" >
<fieldset>
<legend align=center></legend>
<table id=myTable style=" color: #FFFFFF" style="border:double">
<tr>
<td ><script language=JavaScript>
//var i=1;
document.write(i + ".\t");
</script>
</td>
<td>
<script language=JavaScript>
document.write(questions[i]);
</script>

</td>
</tr>
<tr><td>
<input type = "radio" value="1" name = "quiz"></td>
<td>
<script language=JavaScript>
document.write(answerA[i]);
</script></td></tr>
<tr><td>
<input type = "radio" value ="2" name = "quiz">
</td><td>
<script language=JavaScript>
document.write(answerB[i]);
</script></td></tr>
<tr>
<td>
<input type = "radio" value ="3" name = "quiz"></td>
<td>
<script language=JavaScript>
document.write(answerC[i]);
</script></td></tr>
<tr>
<td>
<input type = "radio" value ="4" name = "quiz"></td>
<td>
<script language=JavaScript>
document.write(answerD[i]);
</script></td></tr>
<tr>
<!__<input type=button value=Quit onclick=quit()>
</tr>
<p &nbsp;></p>
<p &nbsp;></p>
</table>
<p &nbsp;></p>
<p &nbsp;></p>
<a href=javascript:preQuestion();><input type="button" class="btn" value="previous" style="position:relative; left:150px;" width=50 height=100 ></a>
<a href=javascript:showScore();><input type="button" class="btn" value="answer"  style="position:relative; left:200px" width=50 height=50></a>								
<a href=javascript:nextQuestion();><input type="button" class="btn" value="next"  style="position:relative; left:250px" width=50 height=50></a>											

</fieldset>
</form>
</body>
</html>




