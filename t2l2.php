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
ans[1] = "b";
ans[2] = "a";
ans[3] = "c";
ans[4] = "b";
ans[5] = "b";
ans[6] = "a";
ans[7] = "a";
ans[8] = "a";
ans[9] = "b";
ans[10] = "d";

explainAnswer[1]="Pythagoras Theorem. ";
explainAnswer[2]="Let the number of cows be x, and the number of birds be y. Since each of them has two eyes, cows have four legs, and birds have two legs, we can create a system o equations: 2x + 2y = 172;  4x + 2y = 344 Multiply by -1 the first equation; -2x - 2y = -172; 4x + 2y = 344 Add both equations;  2x = 172 Divide by 2 to both sides;  x = 86 Substitute 86 for x into the first equation;  2(86) + 2y = 172;  172 + 2y = 172;  y = 0;  Thus, the man has only 86 cows, and no birds.";
explainAnswer[3]="The total time was one hour and already 50 minutes are over.";
explainAnswer[4]="Daughter";
explainAnswer[5]="This is a classic probability puzzle and many puzzles are based on this logic. If the person picks up two socks then there is a possibility of them being different in colour. If he picks up three socks then they are guaranteed red or white. So the minimum number of socks required are three.";
explainAnswer[6]="If all 4 sides face south, the house is at the North Pole. In that region, the only bears are polar bears. Polar bears are white. ";
explainAnswer[7]="2x2=4; 2+4=6";
explainAnswer[8]="[1/2][1/4][1/10]0f 480=480/80 =6";
explainAnswer[9]="Based on the context, droppy means mission, groppy means executed";
explainAnswer[10]="Knowledgeble";

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
<p>1. Two people were  walking in opposite directions. Both of them walked 6 miles forward then took  right and walked 8 miles. How far is each from starting positions?</p>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)"> 14 miles & 14 miles<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)"> 10 miles & 10 miles<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)"> 6 miles & 6 miles<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)"> 12 miles & 12 miles<p>
<br> 
<br> 
<p>2. A person has certain number of cows and birds. They have 172 eyes and 344 legs. How many cows and birds does he have?</p>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)"> 0 birds 86 cows<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)"> 86 birds 0 cows<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)"> 0 birds 0 cows<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)"> 86 birds 86 cows<p>
<br> 
<br> 
<p>3. 	When asked in an exam how much time is left, the teacher answered that the amount of time left is 1/5 of the time already completed. How much time is left?</p>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)"> 20 minutes<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)"> 5 minutes<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)"> 10 minutes<br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)"> 15 minutes<p>
<br> 
<br> 
<p>4. My successor?s father is my father?s son. and i don?t have any brothers or sons. Who is my successor?</p>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)"> Niece<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)"> Daughter<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)"> Myself<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)"> Nephew<p>
<br> 
<br> 
<p>5. A person has 14 red socks and 14 white socks in a drawer. What is the minimum number of socks that he should take to get a correct pair?</p>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)"> 4<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)"> 3<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)"> 2<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)"> 5<p>
<br> 
<br> 
<p>6. A man builds a house with four sides of rectangular construction, each a southern exposure. A big bear comes along. What color is the bear ?</p>
<input type=radio name="q6" value="a" onClick="Engine(6, this.value)"> White<br>
<input type=radio name="q6" value="b" onClick="Engine(6, this.value)"> Black<br>
<input type=radio name="q6" value="c" onClick="Engine(6, this.value)"> Any one<br>
<input type=radio name="q6" value="d" onClick="Engine(6, this.value)"> None of above<p>
<br> 
<br> 
<p>7. 2 + 2 x 2 =...    What do you get ?</p>
<input type=radio name="q7" value="a" onClick="Engine(7, this.value)"> 6<br>
<input type=radio name="q7" value="b" onClick="Engine(7, this.value)"> 8<br>
<input type=radio name="q7" value="c" onClick="Engine(7, this.value)"> Any of them<br>
<input type=radio name="q7" value="d" onClick="Engine(7, this.value)"> None<p>
<br> 
<br> 
<p>8. What is the number that is one half of one quarter of one tenth of 480?</p>
<input type=radio name="q8" value="a" onClick="Engine(8, this.value)"> 6<br>
<input type=radio name="q8" value="b" onClick="Engine(8, this.value)"> 12<br>
<input type=radio name="q8" value="c" onClick="Engine(8, this.value)"> 16<br>
<input type=radio name="q8" value="d" onClick="Engine(8, this.value)"> 24<p>
<br> 
<br> 
<p>9. A spy is trying to send a secret message, we're trying to decode his message, we need your help!</p>
<input type=radio name="q9" value="a" onClick="Engine(9, this.value)"> Mission<br>
<input type=radio name="q9" value="b" onClick="Engine(9, this.value)"> Dangerously<br>
<input type=radio name="q9" value="c" onClick="Engine(9, this.value)"> Executed<br>
<input type=radio name="q9" value="d" onClick="Engine(9, this.value)"> Abort<p>
<br> 
<br> 
<p>10. Finish the sentence, Gym is to Healthy as Book is to ?</p>
<input type=radio name="q10" value="a" onClick="Engine(10, this.value)"> Intelligent<br>
<input type=radio name="q10" value="b" onClick="Engine(10, this.value)"> Fluent<br>
<input type=radio name="q10" value="c" onClick="Engine(10, this.value)"> Good<br>
<input type=radio name="q10" value="d" onClick="Engine(10, this.value)"> Knowledgeble<p>
<br> 
<br> 
<CENTER>
<input type=button  class="btn" onClick="Score()" value="Result">
</CENTER>
</FORM>
</DIV> 
</body>
</html>