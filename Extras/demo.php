<?php include('master.php');?>
<html>
<HEAD>

<script LANGUAGE="JavaScript">

var ans = new Array;
var done = new Array;
var yourAns = new Array;
var explainAnswer = new Array;


var score = 0;
ans[1] = "b";
ans[2] = "d";
ans[3] = "b";
ans[4] = "d";
ans[5] = "c";

explainAnswer[1]="John's brother is 4. In 4 years the brother will be 8, and John will be 16 or twice as old.";
explainAnswer[2]="Brother and sister, and niece and nephew are all opposites.";
explainAnswer[3]="A tree comes up out of the ground, just as a chimney comes up out of a house.";
explainAnswer[4]="Without more information it is impossible to tell. We only know that both Peter and Bill are shorter than Jack.";
explainAnswer[5]="Example: A $1.00 item reduced 20% will sell for 80cent. To sell it at $1 .00 again, you must increase the price 20%. 20cent is 25% of 80cent.";

function Engine(question, answer) {
yourAns[question]=answer;
}

function Score()
{var answerText = "How did you do?\n------------------------------------\n";
for(i=1;i<=5;i++){
answerText=answerText+"\nQuestion :"+i+"\n";
if(ans[i]!=yourAns[i]){
answerText=answerText+"\nThe correct answer was "+ans[i]+"\n"+explainAnswer[i]+"\n";
}
else{
answerText=answerText+" \nCorrect! \n";
score++;
}
}

answerText=answerText+"\n\nYour total score is : "+score+"\n";

//now score the user
answerText=answerText+"\nComment : ";
if(score<=0){
answerText=answerText+"You need to learn some more";
}
if(score>=1 && score <=2){
answerText=answerText+"bit more practice";
}
if(score>=3 && score <=3){
answerText=answerText+"doing ok";
}
if(score>4){
answerText=answerText+"You are one hot java babe!";
}

alert(answerText);

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
<h1>Java Quiz</h1>
<b>Test your knowledge of Java!</b>
<hr>
<FORM  style=" width:700px; height:500px; margin-left:100px; margin-top:-420px; " class="style37">
<p>1. John, twelve years old, is three times as old as his brother. How old will John be when he is twice as old as his brother?</p>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)"> 15<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)"> 16<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)"> 18<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)"> 20<p>
<br> 
<br> 
<p>2. Which one of the four makes the best comparison?</p>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)"> Mother<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)"> Daughter<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)"> Uncle<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)"> Nephew<p>
<br> 
<br> 
<p>3. Which one of the four makes the best comparison? Tree is to ground as chimney is to:</p>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)"> Smoke<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)"> House<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)"> Sky<br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)"> Brick<p>
<br> 
<br> 
<p>4. Jack is taller than Peter, and Bill is shorter than Jack. Which of the following statements would be most accurate? 
</p>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)"> Bill is taller than Peter.<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)"> Bill is shorter than Peter<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)"> Bill is as tall as Peter<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)"> It is impossible to tell whether Bill or Peter is taller. <p>
<br> 
<br> 
<p>5. The price of an article was cut 20% for a sale. By what percent must the item be increased to again sell the article at the original price? </p>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)"> 15%<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)"> 20%<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)"> 25%<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)"> 30%<p>
<br> 
<br> 
<CENTER>
<input type=button  class="btn" onClick="Score()" value="Well... How did I do?">
</CENTER>
</FORM>
</DIV> 

</body>
</html>