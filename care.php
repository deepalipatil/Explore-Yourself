<?php include('master.php');
include('connect.php');
include('log.php');
?>
<HTML> 
<HEAD> 
<TITLE>Career Test</TITLE> 
<script language="javascript"> 

var Quest = new Array(6);  //this sets up an array for all of the answers that are given 
for(i=0;i<6;i++){
Quest[i]=new Array(7);}
var q;
var R=new Array();
var k,l,m;
var r1=0,r2=0,r3=0,r4=0,r5=0,r6=0;
var max1,max2,max3;
var myContents;

function goBack() {
    window.history.go(-1);
}

function populate() { 
// alert("function populate started"); 
// this function gives each of the answers 0 points so if someone doesn't answer a question 
// the whole thing will continue to work 
  for(var i=0; i<6; i++)
  {		for(var j=0; j<7; j++)
		 { Quest[i][j]=0; } }
} 

function total() { 
// alert("function total started"); 
// this function adds the number of points each answer is worth together 
//R[0]=0;
  for(var i=0; i<6; i++){
 		 if(i==0){
  			for(var j=0; j<7; j++){
				 r1=Quest[i][j]+r1;}
 		}
  		else if(i==1){
  			for(var j=0; j<7; j++){
				 r2=Quest[i][j]+r2;}
 		}
  		else if(i==2){
  			for(var j=0; j<7; j++){
				 r3=Quest[i][j]+r3;}
 		}
  		else if(i==3){
  			for(var j=0; j<7; j++){
				 r4=Quest[i][j]+r4;}
 		}
  		else if(i==4){
  			for(var j=0; j<7; j++){
				 r5=Quest[i][j]+r5;}
 		}
  		else if(i==5){
  			for(var j=0; j<7; j++){
				 r6=Quest[i][j]+r6;}
 		}
 }
  R=[r1,r2,r3,r4,r5,r6];
		  function sortWithIndeces(toSort) {
		 		 for (var i = 0; i < toSort.length; i++) {
					toSort[i] = [toSort[i], i];
		 		 }
				  toSort.sort(function(left, right) {
						return left[0] < right[0] ? 1 : -1;
		 		 });
				  toSort.sortIndices = [];
				  for (var j = 0; j < toSort.length; j++) {
						toSort.sortIndices.push(toSort[j][1]);
						toSort[j] = toSort[j][0];
				  }
		 
				  return toSort;
			}
		sortWithIndeces(R);
		 k=R.sortIndices[0];
		 l=R.sortIndices[1];
		 m=R.sortIndices[2];
  analyzer(k,l,m); 
  goBack();
} 

  myContents = "<h1><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></h1>"+"<h1><strong><center>YOUR INTEREST PROFILE</center></strong></h1>"; 

function analyzer (k,l,m) { 
// this function uses the total calculated score to figure out which personality type they are 
  if((k==0)||(l==0)||(m==0)) { myContents = myContents + "<h3><strong><center>Your Personality is R (REALISTIC)</center></strong></h3>" 
 + "<h4><strong> realistic people are DOERS. They are often good at mechanical or athletic jobs. They like to work with things like machines, tools or plants and they like to work with their hands. They are often practical and good at solving problems.</h4></strong>" + "<h4><strong>R-Realistic :</br> Agriculture </br> Arch. & Construction </br> Arts & Communications </br> Health Science </br> Hospitality & Tourism </br> Information Technology </br> Law & Public Safety </br>  Manufacturing </br> Science, Tech & Math </br> Transportation </h4></strong> "; 
}
  if((k==1)||(l==1)||(m==1)) {myContents = myContents + "<h3><strong><center>Your Personality is I (INVESTIGATIVE)</center></strong></h3>" 
 + "<h4><strong> investigative people are THINKERS. They like to watch, learn, analyze and solve problems. They often like to work independently, tend to be good at math and science and enjoy analyzing data.</h4></strong>" + "<h4><strong>I-Investigative : </br> Health Science </br>Information Technology  </br>Science, Tech & Math  </h4></strong> "  ; 
}
  if((k==2)||(l==2)||(m==2)) {myContents = myContents + "<h3><strong><center>Your Personality is A (ARTISTIC)</center></strong></h3>" 
 + "<h4><strong> artistic people are CREATORS. They like to work in unstructured situations where they can use their creativity and come up with new ideas. They enjoy performing (theater or music) and visual arts.</h4></strong> " + "<h4><strong>A-Artistic : </br> Arts & Communications  </br> Education & Training  </h4></strong> " ;
 }
  if((k==3)||(l==3)||(m==3)) {myContents = myContents + "<h3><strong><center>Your Personality is S (SOCIAL)</center></strong></h3>" 
 + " <h4><strong>social people are HELPERS. They like to work directly with people rather than things. They enjoy training, instructing, counseling or curing others. They are often good public speakers with helpful, empathetic personalities.</h4></strong>"  + "<h4><strong>S-Social : </br> Education & Training </br> Government </br> Health Science </br> Human Service </br> Law & Public Safety </br> Marketing & Sales </h4></strong> " ; 
}
  if((k==4)||(l==4)||(m==4)) {myContents = myContents + "<h3><strong><center>Your Personality is E (ENTERPRISING)</center></strong></h3>" 
 + "<h4><strong> Enterprising people are PERSUADERS. They like to work with other people; they particularly enjoy influencing, persuading and performing. They like to lead and tend to be assertive and enthusiastic.</h4></strong>" + "<h4><strong>E-Enterprising : </br> Arts & Communications </br> Business & Management </br> Finance </br> Hospitality & Tourism </br> Law & Public Safety </br> Marketing & Sales </br> Government  </h4></strong> " ; 
}
  if((k==5)||(l==5)||(m==5)) { myContents = myContents + "<h3><strong><center>Your Personality is C (CONVENTIONAL)</center></strong></h3>" 
 + "<h4><strong>conventional people are ORGANIZERS. They are very detail oriented and like to work with data. They have good organizational and numerical abilities and are good atfollowing instructions. Conventional people also like working in structured situations.</h4></strong>"  + "<h4><strong>C-Conventional : </br> Arch. & Construction </br> Business & Management </br> Finance </br> Health Science </br> Manufacturing </br> Marketing & Sales </br> Transportation  </h4></strong> " ;
} 	
 myContents = myContents + "<p></p><p></p><h2><center>Other Combinations :</center> </h2><h4><strong>R and I : </br>Health Science </br>Information Technology </br>Science, Tech & Math </br><p></p>R and A : </br>Arts & Communication </br><p></p>R and S : </br>Health Science </br>Human Service </br>Law & Public Safety </br><p></p>R and E : </br>Arts & Communications </br>Hospitality & Tourism </br><p></p>R and C : </br>Arch. & Construction </br>Manufacturing </br>Transportation </br><p></p>I and S : </br>Health Science </br><p></p>A and S : </br>Education & Training </br><p></p>A and E : </br>Arts & Communications </br><p></p>S and E : </br>Government </br>Law & Public Safety </br>Marketing & Sales </br><p></p>E and C : </br>Business & Management </br>Finance </h4></strong> " ;
 myDisplay(myContents) ;
} 


function myDisplay(myContents) { 
//This function will open a new window and show the results calculated 

   newwindow = window.open( "new.php",  'Test Result',"height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes" );
				newwindow.document.title = "Test Result";
				newdocument=newwindow.document;
				newdocument.write(myContents);
				newdocument.close();
} 

function saver(q,an, points) { 
// this function puts the points that each answer is worth into the array  
  q=q-1;
  an=an-1;
  Quest[q][an]=points; 
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
<p>&nbsp;&nbsp;&nbsp;You like to......</p>
<INPUT TYPE="checkbox" NAME="q1" onClick="saver(2,1,1)" >do puzzles<br> 
<INPUT TYPE="checkbox" NAME="q2" onClick="saver(1,1,1)">work on cars<br> 
<INPUT TYPE="checkbox" NAME="q3" onClick="saver(3,1,1)">attend concerts, theaters or art exhibits<br> 
<INPUT TYPE="checkbox" NAME="q4" onClick="saver(4,1,1)" >work in teams<br> 
<INPUT TYPE="checkbox" NAME="q5" onClick="saver(6,1,1)">organize things like files, offices or activities<br> 
<INPUT TYPE="checkbox" NAME="q6" onClick="saver(5,1,1)">set goals for myself<br> 
<INPUT TYPE="checkbox" NAME="q7" onClick="saver(1,2,1)">build things<br> 
<INPUT TYPE="checkbox" NAME="q8" onClick="saver(3,2,1)">read fiction, poetry or plays<br>   
<INPUT TYPE="checkbox" NAME="q9" onClick="saver(6,2,1)">have clear instructions to follow<br> 
<INPUT TYPE="checkbox" NAME="q10" onClick="saver(5,2,1)">influence or persuade people<br> 
<INPUT TYPE="checkbox" NAME="q11" onClick="saver(2,2,1)">do experiments<br> 
<INPUT TYPE="checkbox" NAME="q12" onClick="saver(4,2,1)">teach or train people<br> 
<INPUT TYPE="checkbox" NAME="q13" onClick="saver(4,3,1)">help people solve their problems<br> 
<INPUT TYPE="checkbox" NAME="q14" onClick="saver(1,3,1)">take care of animals<br> 
<INPUT TYPE="checkbox" NAME="q15" onClick="saver(6,3,1)">have my day structured<br> 
<INPUT TYPE="checkbox" NAME="q16" onClick="saver(5,3,1)">sell things<br> 
<INPUT TYPE="checkbox" NAME="q17" onClick="saver(3,3,1)">do creative writing<br> 
<INPUT TYPE="checkbox" NAME="q18" onClick="saver(2,3,1)">work on science projects<br> 
<INPUT TYPE="checkbox" NAME="q19" onClick="saver(5,4,1)">take on new responsibilities<br> 
<INPUT TYPE="checkbox" NAME="q20" onClick="saver(4,4,1)">heal people<br> 
<INPUT TYPE="checkbox" NAME="q21" onClick="saver(2,4,1)">figure out how things work<br> 
<INPUT TYPE="checkbox" NAME="q22" onClick="saver(1,4,1)">put things together or assemble models<br> 
<INPUT TYPE="checkbox" NAME="q23" onClick="saver(3,4,1)">be creative<br> 
<INPUT TYPE="checkbox" NAME="q24" onClick="saver(6,4,1)">pay attention to details<br> 
<INPUT TYPE="checkbox" NAME="q25" onClick="saver(6,5,1)">do filing or typing<br> 
<INPUT TYPE="checkbox" NAME="q26" onClick="saver(4,5,1)">learn about other cultures<br> 
<INPUT TYPE="checkbox" NAME="q27" onClick="saver(2,5,1)">analyze things like problems, situations or trends<br> 
<INPUT TYPE="checkbox" NAME="q28" onClick="saver(3,5,1)" >play instruments or sing<br> 
<INPUT TYPE="checkbox" NAME="q29" onClick="saver(5,5,1)" >dream about starting my own business<br> 
<INPUT TYPE="checkbox" NAME="q30" onClick="saver(1,5,1)" >cook<br> 
<INPUT TYPE="checkbox" NAME="q31" onClick="saver(3,6,1)" >act in plays<br> 
<INPUT TYPE="checkbox" NAME="q32" onClick="saver(1,6,1)" >think things through before making decisions<br> 
<INPUT TYPE="checkbox" NAME="q33" onClick="saver(2,6,1)" >work with numbers or charts<br> 
<INPUT TYPE="checkbox" NAME="q34" onClick="saver(4,6,1)" >have discussions about issues like politics or current events<br> 
<INPUT TYPE="checkbox" NAME="q35" onClick="saver(6,6,1)" >keep records of my work<br> 
<INPUT TYPE="checkbox" NAME="q36" onClick="saver(5,6,1)" >be a leader<br> 
<INPUT TYPE="checkbox" NAME="q37" onClick="saver(1,7,1)" >work outdoors<br> 
<INPUT TYPE="checkbox" NAME="q38" onClick="saver(6,7,1)" >work in an office<br> 
<INPUT TYPE="checkbox" NAME="q39" onClick="saver(2,7,1)" >work on math problems<br> 
<INPUT TYPE="checkbox" NAME="q40" onClick="saver(4,7,1)" >help people<br> 
<INPUT TYPE="checkbox" NAME="q41" onClick="saver(3,7,1)" >draw<br> 
<INPUT TYPE="checkbox" NAME="q42" onClick="saver(5,7,1)" >give speeches<br> 

 <br> 
 <br> 

<br> 
<INPUT TYPE="button" class="btn" NAME="result" Value="Result" onClick="total()"> 
<span> 

</FORM> 
</BODY> 
</HTML>  