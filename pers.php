<?php include('master.php');
include('connect.php');
include('log.php');
?>
<HTML> 
<HEAD> 
<TITLE>Personality Quiz</TITLE> 
<script language="javascript"> 

var Quest = new Array(10);  //this sets up an array for all of the answers that are given 

function populate() { 
// alert("function populate started"); 
// this function gives each of the answers 0 points so if someone doesn't answer a question 
// the whole thing will continue to work 
  for(var i=0; i<10; i++) { Quest[i]=0; } 
} 

function goBack() {
    window.history.go(-2);
}

function total() { 
// alert("function total started"); 
// this function adds the number of points each answer is worth together 
  myScore=0; 
  for (var i=0; i<10; i++) { myScore=myScore+Quest[i]; } 
  analyzer(myScore); 
  goBack();
} 

myContents = new Array(); 
myContents[0] = "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+"<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>"+ "<p></p>" + "<p></p>"+ "<p></p>"+ "<h3><strong>Others see you as someone they should handle with care You\'re seen as vain, self centered," 
 + " and who is extremely dominant. Others may admire you, wishing they could be more like you, but don\'t always trust you," 
 + " hesitating to become too deeply involved with you.</strong></h3>"; 
myContents[1] =  "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+"<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>"+ "<p></p>" + "<p></p>"+ "<p></p>"+ "<h3><strong>Others see you as an exciting, highly volatile, rather impulsive personality; a natural leader," 
 + " who\'s quick to make decisions, though not always the right ones. They see you as bold and adventuresome," 
 + " someone who will try anything once; someone who takes chances and enjoys an adventure." 
 + " They enjoy being in your company because of the excitement you radiate.</strong></h3>"; 
myContents[2] =  "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+"<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>"+ "<p></p>" + "<p></p>"+ "<p></p>"+ "<h3><strong>Others see you as fresh, lively, charming, amuzing, practical, and always interesting;" 
 + " someone who\'s constantly in the center of attention, but sufficiently well balanced not to let it go their head." 
 + " They also see you as kind, considerate, and understanding; someone who will always cheer them up and help them out.</strong></h3>"; 
myContents[3] = "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+"<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>" + "<p></p>" + "<p></p>"+ "<p></p>"+ "<h3><strong>Others see you as sensible, cautious, careful and practical. They see you as clever, gifted," 
 + " or talented, but modest...Not a person who makes friends too quickly or easily, but someone who\'s extremely loyal" 
 + " to friends you do make and who expect the same loyalty in return. Those who really get to know you realize" 
 + " it takes a lot to shake your trust in yoru friends, but eqally that it takes you a long time to get over it" 
 + " if that trust is ever broken.</strong></h3>"; 
myContents[4] =  "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+"<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>" + "<p></p>" + "<p></p>"+ "<p></p>"+ "<h3><strong>Your friends see you as painstaking and fussy. They see you as very cautious, extremely careful," 
 + " a slow and steay plodder. It would really suprise them if you ever did something impulsively or on the spur" 
 + " of the moment, expecting you to examine everything carefully from every angle and then, usally against it." 
 + " They think this reaction is caused partly by your careful nature.</strong></h3>"; 
myContents[5] = "<h2><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h2>"+ "<h2><center><strong>YOUR PERSONALITY RESULT</center></strong></h2>" + "<p></p>" + "<p></p>" + "<p></p>"+ "<p></p>"+  "<h3><strong>People think you are shy, nervous, and indecisive, someone who needs looking after," 
 + " who always wants someone else to make the decisions and who does not want to get involved with anyone or anything." 
 + " They see you as a worrier who always sees problems that dont exist. SOme people think you are boring." 
 + " Only those who know you well know that you are not.</strong></h3>" ;

function analyzer (myScore) { 
// this function uses the total calculated score to figure out which personality type they are 
  if (myScore>60) { myContentsPtr = 0; } 
  else { if (myScore > 50) { myContentsPtr = 1; } 
    else { if(myScore>40)  { myContentsPtr = 2; }  
      else { if(myScore>30) { myContentsPtr = 3; } 
        else { if(myScore>20) { myContentsPtr = 4; } 
          else { if(myScore>0){ myContentsPtr = 5; } 
		   else { alert("Please choose answers"); }
       	  }	
	    } 
      } 
    } 
  } 
  myDisplay(myContents[myContentsPtr]) 
} 

function myDisplay(myContents) { 
//This function will open a new window and show the results calculated 
  
  newwindow = window.open( "new.php",  'Test Result',"height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes" );
				newwindow.document.title = "Test Result";
				newdocument=newwindow.document;
				newdocument.write(myContents);
				newdocument.close();
				
} 

function saver(q, points) { 
// this function puts the points that each answer is worth into the array 
  q=q-1; 
  Quest[q]=points 
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
width: 100px;
height:35px;
margin-top:15px;
margin-left:350px;
display: inline-block;
font-weight:bold;
font-size:15px;
color: #FFF;}
</style> 
</HEAD> 

<BODY onLoad="populate()"> 
<FORM NAME="personalityForm" style=" width:700px; height:500px; margin-left:100px; margin-top:-420px;" class="style37"> 
<div ><span >Welome, &nbsp;&nbsp;&nbsp; "<?= $_SESSION['user'] ?>"    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Here is your test..... Enjoy!!!</span><br />
</br>

<p>1.&nbsp;&nbsp;&nbsp;When do you feel your best?</p>
<INPUT TYPE="RADIO" NAME="q1" onClick="saver(1,2)">in the morning<br> 
<INPUT TYPE="RADIO" NAME="q1" onClick="saver(1,4)">during the afternoon & early evening<br> 
<INPUT TYPE="RADIO" NAME="q1" onClick="saver(1,6)">late at night<br> 
<br> 
<br> 

<p>2.&nbsp;&nbsp;&nbsp;You usually walk</p>
<INPUT TYPE="RADIO" NAME="q2" onClick="saver(2,6)" >fairly fast, with long steps<br> 
<INPUT TYPE="RADIO" NAME="q2" onClick="saver(2,4)">fairly fast, with short, quick steps<br> 
<INPUT TYPE="RADIO" NAME="q2" onClick="saver(2,7)">less fast head up, looking the world in the face<br> 
<INPUT TYPE="RADIO" NAME="q2" onClick="saver(2,2)">less fast, head down<br> 
<INPUT TYPE="RADIO" NAME="q2" onClick="saver(2,1)">very slowly<br> 
<br> 
<br> 

<p>3.&nbsp;&nbsp;&nbsp;When talking to people you</p>  
<INPUT TYPE="RADIO" NAME="q3" onClick="saver(3,4)">stand with your arms folder<br> 
<INPUT TYPE="RADIO" NAME="q3" onClick="saver(3,2)">have your hands clasped<br> 
<INPUT TYPE="RADIO" NAME="q3" onClick="saver(3,5)">have one or both your hands on your hips<br> 
<INPUT TYPE="RADIO" NAME="q3" onClick="saver(3,7)">touch or push the person to whom you are talking<br> 
<INPUT TYPE="RADIO" NAME="q3" onClick="saver(3,6)">play with your ear, touch your chin, or smooth your hair<br> 
<br>
<br>  

<p>4.&nbsp;&nbsp;&nbsp;When relaxing, you sit with</p> 
<INPUT TYPE="RADIO" NAME="q4" onClick="saver(4,4)">your knees bent with your legs neatly side by side<br> 
<INPUT TYPE="RADIO" NAME="q4" onClick="saver(4,6)">your legs crossed<br> 
<INPUT TYPE="RADIO" NAME="q4" onClick="saver(4,2)">your legs stretched out or straight<br> 
<INPUT TYPE="RADIO" NAME="q4" onClick="saver(4,1)">one leg curled under you<br> 
<br> 
<br> 

<p>5.&nbsp;&nbsp;&nbsp;When something really amuses you, you react with</p>
<INPUT TYPE="RADIO" NAME="q5" onClick="saver(5,6)">a big, appreciative laugh<br> 
<INPUT TYPE="RADIO" NAME="q5" onClick="saver(5,4)">a laugh, but not a loud one<br> 
<INPUT TYPE="RADIO" NAME="q5" onClick="saver(5,3)">a quiet chuckle<br> 
<INPUT TYPE="RADIO" NAME="q5" onClick="saver(5,5)">a sheepish smile<br> 
<br> 
<br> 

<p>6.&nbsp;&nbsp;&nbsp;When you go to a party or social gathering you</p> 
<INPUT TYPE="RADIO" NAME="q6" onClick="saver(6,6)">make a loud entrance so everyone notices you<br> 
<INPUT TYPE="RADIO" NAME="q6" onClick="saver(6,4)">make a quiet entrance, looking around for someone you know<br> 
<INPUT TYPE="RADIO" NAME="q6" onClick="saver(6,2)">make the quietest entrance, trying to stay unnoticed<br> 
<br> 
<br> 

<p>7.&nbsp;&nbsp;&nbsp;You're working very hard, concentrating hard, and you're interrupted. Do you..</p> 
<INPUT TYPE="RADIO" NAME="q7" onClick="saver(7,6)">welcome the break<br> 
<INPUT TYPE="RADIO" NAME="q7" onClick="saver(7,2)">feel extremely irritated<br> 
<INPUT TYPE="RADIO" NAME="q7" onClick="saver(7,4)">vary between these two extremes<br> 
<br> 
<br> 

<p>8.&nbsp;&nbsp;&nbsp;Which of the following colors do you like most?</p>
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,6)" >red or orange<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,7)" >black<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,5)" >yellow or light blue<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,4)" >green<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,3)" >dark blue or purple<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,2)" >white<br> 
<INPUT TYPE="RADIO" NAME="q8" onClick="saver(8,1)" >brown or gray<br> 
<br> 
<br> 

<p>9.&nbsp;&nbsp;&nbsp;When you are in bed at night, in those last few moments before going to sleep, you lie</p> 
<INPUT TYPE="RADIO" NAME="q9" onClick="saver(9,7)" >stretched out on your back<br> 
<INPUT TYPE="RADIO" NAME="q9" onClick="saver(9,6)" >stretched out face down on your stomach<br> 
<INPUT TYPE="RADIO" NAME="q9" onClick="saver(9,4)" >on your side, slightly curled<br> 
<INPUT TYPE="RADIO" NAME="q9" onClick="saver(9,2)" >with your head on one arm<br> 
<INPUT TYPE="RADIO" NAME="q9" onClick="saver(9,1)" >with your head under the covers<br> 
<br> 
<br> 

<p><br>10.&nbsp;&nbsp;&nbsp;You often dream that you are</p>
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,4)" >falling<br> 
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,2)" >fighting or struggling<br> 
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,3)" >searching for something or somebody<br> 
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,5)" >flying or floating<br> 
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,6)" >you usually have dreamless sleep<br> 
<INPUT TYPE="RADIO" NAME="q10" onClick="saver(10,1)" >your dreams are always pleasant.<br> 
 <br> 
 <br> 

<br> 
<INPUT TYPE="button" class="btn" NAME="result" Value="Result" onClick="total()"> 
<span> 

</FORM> 
</BODY> 
</HTML>  