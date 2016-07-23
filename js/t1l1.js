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

function Engine(question, answer) {
yourAns[question]=answer;
}

function Score()
{
if(yourAns.length==11)
{
var answerText = "<strong><p>How did you do?</p></strong>";
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
		else{ alert("Please Ansew all questions first!!!");
		}

    window.location.reload();
	window.scrollTo(0,0);
}
// End -->