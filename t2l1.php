<?php include('master.php');
include('connect.php');
include('log.php');
?>
<html>
<HEAD>

<script LANGUAGE="JavaScript">

var ans = new Array;
var done = new Array;
var yourAns = new Array;
var explainAnswer = new Array;


var score = 0;
ans[1] = "d";
ans[2] = "a";
ans[3] = "b";
ans[4] = "b";
ans[5] = "b";
ans[6] = "a";
ans[7] = "b";
ans[8] = "c";
ans[9] = "a";
ans[10] = "d";

explainAnswer[1]="Boats travel through the water and water goes through a boat's engine, therefore what do planes travel through and what goes through the engine?  The Air.";
explainAnswer[2]="there are 5 days in a working week, so you divide 15 by 5 = 3";
explainAnswer[3]="Particular generally means to be quite specific and exact about what you want, therefore being vague would be the opposite.";
explainAnswer[4]="to work this out you multiple each dimension of the cube by the others.  5x5 = 25; 25*5=125";
explainAnswer[5]="Given Betty sells more than Jodie, and Sally sells more the Betty, therefore Sally must sell more than Jodie";
explainAnswer[6]="Take the number of kms 120 and divide by the number of hours, then you get the kilometres per hour";
explainAnswer[7]="this is the sequence of the squares of the natural numbers 1x1, 2x2, 3x3, 4x4, 5x5, 6x6,..";
explainAnswer[8]="17 is the only odd number.";
explainAnswer[9]="3+5=8, 5+8=13 and so on.";
explainAnswer[10]="[30/(1/2)]=[30/0.5]=60+10=70*3=210+6=216";

function goBack() {
    window.history.go(-3);
}

function Engine(question, answer) {
yourAns[question]=answer;
}

function Score()
{
if(yourAns.length==11)
{
var answerText =  "<p><strong><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></strong><p>"+"<strong><p>How did you do?</p></strong>";
for(i=1;i<=10;i++){
answerText=answerText+"<strong><p>Question :"+i+"</p></strong>";
if(ans[i]!=yourAns[i]){
answerText=answerText+"<strong><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The correct answer was &nbsp;&nbsp;&nbsp;"+ans[i]+"&nbsp;&nbsp;Because&nbsp;&nbsp;&nbsp;"+explainAnswer[i]+"</p></strong>";
}
else{
answerText=answerText+"<strong><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct! \n";
score++;
}
}

answerText=answerText+"<strong><p>Your total score is : "+score+"<strong><p>";

//now score the user
answerText=answerText+"<strong><p>Comment :</p></strong> ";
if(score<=0){
answerText=answerText+"<strong><p>Very Poor</p></strong>";
}
if(score>=1 && score <=5){
answerText=answerText+"<strong><p>Poor</p></strong>";
}
if(score>=5 && score <=7){
answerText=answerText+"<strong><p>Good</p></strong>";
}
if(score>9){
answerText=answerText+"<strong><p>Excellent!</p></strong>";
}
	goBack();
    newwindow = window.open( "new.php",  'Test Result',"height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes" );
	newwindow.document.title = "Test Result";
	newdocument=newwindow.document;
	newdocument.write(answerText);
	newdocument.close();
	
	}
		else{ alert("Ansew all questions first!!!");
		}
	
	
}
// End -->
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
</HEAD>
<!-- STEP TWO: Copy this code into the BODY of your HTML document -->
<BODY>
<DIV >
<h></h1>
<b></b>
<hr>
<FORM  style=" width:700px; height:500px; margin-left:100px; margin-top:-420px; " class="style37" >
<div><span >Welome, &nbsp;&nbsp;&nbsp; "<?= $_SESSION['user'] ?>"    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Here is your test..... Enjoy!!!</span><br />
</br>
<p>1. "Boat is to water" therefore "Plane is to____"</p>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)"> Fly<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)"> Sky<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)"> Float<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)"> Air<p>
<br> 
<br> 
<p>2. If Bob sold 15 apples in a working week, what is the average number of apples he sells each day?</p>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)"> 3<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)"> 2<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)"> 5<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)"> 1<p>
<br> 
<br> 
<p>3. The word PARTICULAR is opposite of ?</p>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)"> Distinct<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)"> Vague<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)"> Exacting<br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)"> Fussy<p>
<br> 
<br> 
<p>4. If you have a cube which is 5m x 5m x 5m, what is the cubic metres this container would hold?</p>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)"> 25<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)"> 125<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)"> 5<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)"> 15<p>
<br> 
<br> 
<p>5. If Sally sells more tickets than Betty and Betty sells more tickets than Jodie, who sells the most if we compare Sally and Jodie?</p>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)"> Jodie<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)"> Sally<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)"> Betty<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)"> Both a and b<p>
<br> 
<br> 
<p>6. If it takes 2 hour to drive to City A and the City is 120km away, what speed was the vehicle travelling at?</p>
<input type=radio name="q6" value="a" onClick="Engine(6, this.value)"> 60km/hr<br>
<input type=radio name="q6" value="b" onClick="Engine(6, this.value)"> 120km/hr<br>
<input type=radio name="q6" value="c" onClick="Engine(6, this.value)"> 240km/hr<br>
<input type=radio name="q6" value="d" onClick="Engine(6, this.value)"> None of above<p>
<br> 
<br> 
<p>7. Which number should come next in this series? 1,4,9,16,25,..</p>
<input type=radio name="q7" value="a" onClick="Engine(7, this.value)"> 30<br>
<input type=radio name="q7" value="b" onClick="Engine(7, this.value)"> 36<br>
<input type=radio name="q7" value="c" onClick="Engine(7, this.value)"> 29<br>
<input type=radio name="q7" value="d" onClick="Engine(7, this.value)"> 45<p>
<br> 
<br> 
<p>8. 	Which number does not belong? 4 32 144 , 17 28 122 , 18 64 188 , 322 14 202 </p>
<input type=radio name="q8" value="a" onClick="Engine(8, this.value)"> 202<br>
<input type=radio name="q8" value="b" onClick="Engine(8, this.value)"> 122<br>
<input type=radio name="q8" value="c" onClick="Engine(8, this.value)"> 17<br>
<input type=radio name="q8" value="d" onClick="Engine(8, this.value)"> 28<p>
<br> 
<br> 
<p>9. Which number should come next in this series? 3,5,8,13,21,..</p>
<input type=radio name="q9" value="a" onClick="Engine(9, this.value)"> 34<br>
<input type=radio name="q9" value="b" onClick="Engine(9, this.value)"> 25<br>
<input type=radio name="q9" value="c" onClick="Engine(9, this.value)"> 36<br>
<input type=radio name="q9" value="d" onClick="Engine(9, this.value)"> 40<p>
<br> 
<br> 
<p>10. Divide 30 by half. Add 10. Multiply by 3. Add 6. What is does this equal?</p>
<input type=radio name="q10" value="a" onClick="Engine(10, this.value)"> 81<br>
<input type=radio name="q10" value="b" onClick="Engine(10, this.value)"> 80<br>
<input type=radio name="q10" value="c" onClick="Engine(10, this.value)"> 126<br>
<input type=radio name="q10" value="d" onClick="Engine(10, this.value)"> 216<p>
<br> 
<br> 
<CENTER>
<input type=button  class="btn" onClick="Score()" value="Result">
</CENTER>
</FORM>
</DIV> 
</body>
</html>