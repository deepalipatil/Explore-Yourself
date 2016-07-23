<?php include('master.php');?>
<html>
<head>
<title>
IQ TEST
</title>
<script language=JavaScript>
var i=1, num_Of_Question=10;
questions = new Array() 
questions[1]="A person has 14 red socks and 14 white socks in a drawer. What is the minimum number of socks that he should take to get a correct pair?";
questions[2] ="A person has  certain number of cows and birds. They have 172 eyes and 344 legs. How many  cows and birds does he have?";
questions[3] ="When asked in an  exam how much time is left, the teacher answered that the amount of time left  is 1/5 of the time already completed. How much time is left?";
questions[4] ="My successor’s  father is my father’s son. and i don’t have any brothers or sons. Who is my  successor?";
questions[5] ="A person has 14  red socks and 14 white socks in a drawer. What is the minimum number of socks  that he should take to get a correct pair?";
questions[6] ="A man builds a house with  four sides of rectangular construction, each a southern exposure. A big bear  comes along. What color is the bear ?";
questions[7] ="2 + 2 x 2  =...&nbsp;&nbsp;&nbsp;&nbsp;What do you get ?";
questions[8] ="What is the number that is one half of one quarter of one tenth of 480?";
questions[9] ="A spy is trying to send a secret message, we're trying to decode his message, we need your help!";
questions[10] ="Finish the sentence, Gym is to Healthy as Book is to ?";

answerA=new Array()
answerA[1]="14 miles & 14 miles";
answerA[2]="0 birds 86 cows";
answerA[3]="20 minutes";
answerA[4]="Niece";
answerA[5]="4";
answerA[6]="White";
answerA[7]="6";
answerA[8]="6";
answerA[9]="Mission";
answerA[10]="Intelligent";

answerB=new Array()
answerB[1]="10 miles & 10 miles";
answerB[2]="86 birds 0 cows";
answerB[3]="5 minutes";
answerB[4]="Daughter";
answerB[5]="3";
answerB[6]="Black";
answerB[7]="8";
answerB[8]="12";
answerB[9]="Dangerously";
answerB[10]="Fluent";


answerC=new Array()
answerC[1]="6 miles & 6 miles";
answerC[2]="0 birds 0 cows";
answerC[3]="10 minutes";
answerC[4]="Myself";
answerC[5]="2";
answerC[6]="Any one";
answerC[7]="Any of them";
answerC[8]="16";
answerC[9]="Executed";
answerC[10]="Good";


answerD=new Array()
answerD[1]="12 miles & 12 miles";
answerD[2]="86 birds 86 cows";
answerD[3]="15 minutes";
answerD[4]="Nephew";
answerD[5]="5";
answerD[6]="None of above";
answerD[7]="None";
answerD[8]="24";
answerD[9]="Abort";
answerD[10]="Knowledgeble";


rightAnswer=new Array()
rightAnswer[1]=2;
rightAnswer[2]=1;
rightAnswer[3]=3;
rightAnswer[4]=2;
rightAnswer[5]=2;
rightAnswer[6]=1;
rightAnswer[7]=1;
rightAnswer[8]=1;
rightAnswer[9]=2;
rightAnswer[10]=4;
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
		//getOptionD();
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

<tr><td ><script language=JavaScript>
//var i=1;
document.write(i + ".       ");
</script>
</td>
<td>
<script language=JavaScript>
document.write(questions[i]+'<br>');
</script></td></tr>

<tr><td><input type = "radio" value="1" name = "quiz"></td>
<td>
<script language=JavaScript>
document.writeln(answerA[i]);
</script></td></tr>

<tr><td><input type = "radio" value ="2" name = "quiz">
</td><td>
<script language=JavaScript>
document.writeln(answerB[i]);
</script></td></tr>

<tr><td>
<input type = "radio" value ="3" name = "quiz"></td>
<td>
<script language=JavaScript>
document.writeln(answerC[i] );
</script></td></tr>

<tr><td>
<input type = "radio" value ="4" name = "quiz"></td>
<td>
<script language=JavaScript>
document.writeln(answerD[i]);
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




