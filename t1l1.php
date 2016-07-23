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
ans[2] = "d";
ans[3] = "b";
ans[4] = "d";
ans[5] = "c";
ans[6] = "c";
ans[7] = "d";
ans[8] = "c";
ans[9] = "b";
ans[10] = "d";

explainAnswer[1]="John's brother is 4. In 4 years the brother will be 8, and John will be 16 or twice as old.";
explainAnswer[2]="Brother and sister, and niece and nephew are all opposites.";
explainAnswer[3]="A tree comes up out of the ground, just as a chimney comes up out of a house.";
explainAnswer[4]="Without more information it is impossible to tell. We only know that both Peter and Bill are shorter than Jack.";
explainAnswer[5]="Example: A $1.00 item reduced 20% will sell for 80cent. To sell it at $1 .00 again, you must increase the price 20%. 20cent is 25% of 80cent.";
explainAnswer[6]="23-1 = 22. 1/2 of 22 ='l 1. 1 1 -1 = 10. 1/2 of 10 = 5, the number of cookies Mary had left.";
explainAnswer[7]="Elros = Danger, Aldarion = Explosion, therefore Elendil must mean Rocket.";
explainAnswer[8]="9 divided by 2 = 41/2, but it takes 5 trips even though John will only get one can on one of the trips.";
explainAnswer[9]="There are 12 students lower and 12 students higher, plus Mary is 25.";
explainAnswer[10]="The head is 9\". the Tail is 18\" + 9\" = 27\". The body is 9\" + 18\" + 9\" = 36\". 91, + 27\" + 36\" = 72\" -This maybe solved algebraically as well";

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
var answerText = "<p><strong><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></strong><p>"+"<strong><p>How did you do?</p></strong>";
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

answerText=answerText+"<strong><p>Your total score is : </strong></p>"+score;

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
		else{ alert("Please Ansew all questions first!!!");
		}

    goBack();
}
// End -->

</script>

<style type="text/css" >
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
<p>6. Mary had a number of cookies. After eating one, she gave half the remaining to her sister.After eating another cookie, she gave half of what was left to her brother.Mary now had only five cookies left.How many cookies did she start with? 
</p>
<input type=radio name="q6" value="a" onClick="Engine(6, this.value)"> 11<br>
<input type=radio name="q6" value="b" onClick="Engine(6, this.value)"> 22<br>
<input type=radio name="q6" value="c" onClick="Engine(6, this.value)"> 23<br>
<input type=radio name="q6" value="d" onClick="Engine(6, this.value)"> 45<p>
<br> 
<br> 
<p>7. "A spaceship received three messages in a strange language from a distant planet. The astonauts studied these messages and found that "Elros Aldarion Elendil" means "Danger Rocket Explosion" and "Edain Mnyatur Elros" means "Danger spaceship Fire" and "Aldarion Gimilzor Gondor" means "Bad Gas Explosion".What does "Elendil" mean?</p>
<input type=radio name="q7" value="a" onClick="Engine(7, this.value)"> Danger<br>
<input type=radio name="q7" value="b" onClick="Engine(7, this.value)"> Explosion<br>
<input type=radio name="q7" value="c" onClick="Engine(7, this.value)"> Gas<br>
<input type=radio name="q7" value="d" onClick="Engine(7, this.value)"> Rocket<p>
<br> 
<br> 
<p>8. "John's mother sent him to the store to get 9 large cans of peaches. John could only carry 2 cans at a time. How many trips to the store did John have to make?</p>
<input type=radio name="q8" value="a" onClick="Engine(8, this.value)"> 4<br>
<input type=radio name="q8" value="b" onClick="Engine(8, this.value)"> 4 & 1/2<br>
<input type=radio name="q8" value="c" onClick="Engine(8, this.value)"> 5<br>
<input type=radio name="q8" value="d" onClick="Engine(8, this.value)"> 1/2<p>
<br> 
<br> 
<p>9. Mary was both 13th highest and 13th lowest in a spelling contest. How many people were in the contest? 
</p>
<input type=radio name="q9" value="a" onClick="Engine(9, this.value)"> 13<br>
<input type=radio name="q9" value="b" onClick="Engine(9, this.value)"> 25<br>
<input type=radio name="q9" value="c" onClick="Engine(9, this.value)"> 26<br>
<input type=radio name="q9" value="d" onClick="Engine(9, this.value)"> 28<p>
<br> 
<br> 
<p>10. "A fish has a head 9" long. The tail is equal to the size of the head plus one-half the size of the body. The body is the size of the head plus the tail." How long is the fish? </p>
<input type=radio name="q10" value="a" onClick="Engine(10, this.value)"> 27"<br>
<input type=radio name="q10" value="b" onClick="Engine(10, this.value)"> 54"<br>
<input type=radio name="q10" value="c" onClick="Engine(10, this.value)"> 63"<br>
<input type=radio name="q10" value="d" onClick="Engine(10, this.value)"> 72"<p>
<br> 
<br> 
<CENTER>
<input type=button  class="btn"  value="Result" onClick="Score()">
</CENTER>
</FORM>
</DIV> 
</body>
</html>