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
ans[2] = "b";
ans[3] = "c";
ans[4] = "c";
ans[5] = "d";
ans[6] = "a";
ans[7] = "b";
ans[8] = "b";
ans[9] = "d";
ans[10] = "c";

explainAnswer[1]="The day before the day before yesterday is 3 days ago, and 3 days before 3 days ago was Saturday, so Saturday was 6 days ago, therefore today is Friday.";
explainAnswer[2]="9+8+7+6+5+4+3+2+1=45; the first guy shakes the next 9 people(9 shakes); the next shakes the next 8 people (8 shakes) and so on and add them all up";
explainAnswer[3]="By rearranging \"FADLOFDI\", we get \"DAFFODIL\" which is a flower.";
explainAnswer[4]="Cater";
explainAnswer[5]="Beginning with 3, each number in the series is a square of the succeeding no. plus 1.  3^2 +1 = 10    4^2 +1 = 17    5^2 +1 = 26    6^2 +1 = 37    7^2 +1 = 50 (missing no.)";
explainAnswer[6]="The following numeral is always the previous numeral multiplied by an integer. This numeral increases by 1 with each step. Example: 3 x 2 = 6; 6 x 3 = 18; 18 x 4 = 72; 72 x 5 = 360; 360 x 6 = 2160";
explainAnswer[7]="Please compare all statements with their respective solutions.";
explainAnswer[8]="0 * X = 0";
explainAnswer[9]="Given word converts to reverse order.";
explainAnswer[10]="17 bottles/3 = 5.67, so he needs minimum 6 times to move the bottles.";

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
				answerText=answerText+"<strong>Comment :</strong> ";
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
			
				newwindow = window.open( "new.php",  'Test Result',"height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes" );
				newwindow.document.title = "Test Result";
				newdocument=newwindow.document;
				newdocument.write(answerText);
				newdocument.close();
		}
		else{ alert("Ansew all questions first!!!");
		}
		goBack();
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
<FORM  style=" width:700px; height:500px; margin-left:100px; margin-top:-420px; " class="style37">
<div ><span >Welome, &nbsp;&nbsp;&nbsp; "<?= $_SESSION['user'] ?>"    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Here is your test..... Enjoy!!!</span><br />
</br>
<p>1. The day before the day before yesterday is three days after Saturday. What day is it today?</p>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)"> Monday<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)"> Tuesday<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)"> Thursday<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)"> Friday<p>
<br> 
<br> 
<p>2. At the end of a banquet 10 people shake hands with each other. How many handshakes will there be in total?</p>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)"> 100<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)"> 45<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)"> 20<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)"> 90<p>
<br> 
<br> 
<p>3. Rearrange the following letters to make a word and choose the category in which it fits. "FADLOFDI"</p>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)"> City<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)"> Fruit<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)"> Flower<br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)"> Vegetable<p>
<br> 
<br> 
<p>4. Which one of the sets of letters below can be arranged into a five letter English word.</p>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)"> a t r u n<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)"> p o d e b<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)"> t e c a r<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)"> m o h a t<p>
<br> 
<br> 
<p>5. Which number should come next in this series? 10, 17, 26, 37, ?</p>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)"> 46<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)"> 52<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)"> 56<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)"> 50<p>
<br> 
<br> 
<p>6. Please enter the missing figure: 3, 6, 18, 72, 360, ...</p>
<input type=radio name="q6" value="a" onClick="Engine(6, this.value)"> 2160<br>
<input type=radio name="q6" value="b" onClick="Engine(6, this.value)"> 1260<br>
<input type=radio name="q6" value="c" onClick="Engine(6, this.value)"> 6210<br>
<input type=radio name="q6" value="d" onClick="Engine(6, this.value)"> 3226<p>
<br> 
<br> 
<p>7. Which lamp is the brightest? Lamp A is less bright than Lamp B, Lamp B is brighter than Lamp C, Lamp C is as bright as Lamp D, Lamp B is brighter than Lamp D, Lamp D is brighter than Lamp </p>
<input type=radio name="q7" value="a" onClick="Engine(7, this.value)"> A<br>
<input type=radio name="q7" value="b" onClick="Engine(7, this.value)"> B<br>
<input type=radio name="q7" value="c" onClick="Engine(7, this.value)"> C<br>
<input type=radio name="q7" value="d" onClick="Engine(7, this.value)"> D<p>
<br> 
<br> 
<p>8. What is the result of multiplying all figures from 0 to 25?</p>
<input type=radio name="q8" value="a" onClick="Engine(8, this.value)"> 2432902008176640000<br>
<input type=radio name="q8" value="b" onClick="Engine(8, this.value)"> 0<br>
<input type=radio name="q8" value="c" onClick="Engine(8, this.value)"> 25<br>
<input type=radio name="q8" value="d" onClick="Engine(8, this.value)"> 125<p>
<br> 
<br> 
<p>9. If APPLE converts to ELPPA then 256478 would be?</p>
<input type=radio name="q9" value="a" onClick="Engine(9, this.value)"> 648725<br>
<input type=radio name="q9" value="b" onClick="Engine(9, this.value)"> 845267<br>
<input type=radio name="q9" value="c" onClick="Engine(9, this.value)"> 467825<br>
<input type=radio name="q9" value="d" onClick="Engine(9, this.value)"> 874652<p>
<br> 
<br> 
<p>10. Michel bought 17 bottle of soft drink from the shop. He wants to move these bottles to his car. He can carry only 3 bottles at a time. What is the minimum number of trips he needs to carry these bottles?</p>
<input type=radio name="q10" value="a" onClick="Engine(10, this.value)"> 5<br>
<input type=radio name="q10" value="b" onClick="Engine(10, this.value)"> 5.5<br>
<input type=radio name="q10" value="c" onClick="Engine(10, this.value)"> 6<br>
<input type=radio name="q10" value="d" onClick="Engine(10, this.value)"> 7<p>
<br> 
<br> 
<CENTER>
<div id="results">
<input type=button  class="btn" onClick="Score()" value="Result"></div>
</CENTER>
</FORM>
</DIV> 
</body>
</html>