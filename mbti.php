<?php include('master.php');
include('connect.php');
include('log.php');
?>
<HTML> 
<HEAD> 
<TITLE>Personality Quiz</TITLE> 


 
<SCRIPT type="text/javascript"> 
 var Quest = new Array(8);   
for(i=0;i<8;i++){
Quest[i]=new Array(6);}
var q;
var R1=new Array();
var R2=new Array();
var R3=new Array();
var R4=new Array();
var k,l,m;
var r1=0,r2=0,r3=0,r4=0,r5=0,r6=0,r7=0,r8=0;
var max1,max2,max3;
var myContents;

function goBack() {
    window.history.go(-2);
}

function populate() { 
// alert("function populate started"); 
// this function gives each of the answers 0 points so if someone doesn't answer a question 
// the whole thing will continue to work 
  for(var i=0; i<8; i++)
  {		for(var j=0; j<14; j++)
		 { Quest[i][j]=0; } }
} 

function total() { 

// alert("function total started"); 
// this function adds the number of points each answer is worth together 
//R[0]=0;
  for(var i=0; i<8; i++){
 		 if(i==0){
  			for(var j=0; j<14; j++){
				 r1=Quest[i][j]+r1;}
 		}
  		else if(i==1){
  			for(var j=0; j<14; j++){
				 r2=Quest[i][j]+r2;}
 		}
  		else if(i==2){
  			for(var j=0; j<14; j++){
				 r3=Quest[i][j]+r3;}
 		}
  		else if(i==3){
  			for(var j=0; j<14; j++){
				 r4=Quest[i][j]+r4;}
 		}
  		else if(i==4){
  			for(var j=0; j<14; j++){
				 r5=Quest[i][j]+r5;}
 		}
  		else if(i==5){
  			for(var j=0; j<14; j++){
				 r6=Quest[i][j]+r6;}
 		}
		else if(i==6){
  			for(var j=0; j<14; j++){
				 r7=Quest[i][j]+r7;}
 		}
  		else if(i==7){
  			for(var j=0; j<14; j++){
				 r8=Quest[i][j]+r8;}
 		}
 }
  R1=[r1,r2];
  R2=[r3,r4];
  R3=[r5,r6];
  R4=[r7,r8]; 
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
		sortWithIndeces(R1);
		sortWithIndeces(R2);
		sortWithIndeces(R3);
		sortWithIndeces(R4);
	
		 k=R1.sortIndices[0];
		 l=R2.sortIndices[0];
		 m=R3.sortIndices[0];
		 n=R4.sortIndices[0];
  analyzer(k,l,m,n); 
  goBack();
} 

  myContents = "<p><span >Dear,  &nbsp;&nbsp;&nbsp;<?= $_SESSION['user'] ?> </span></p>"+"<p><center>YOUR PERSONALITY PROFILE</center></p>" ; 

function analyzer (k,l,m,n) { 
// this function uses the total calculated score to figure out which personality type they are 
  if((k==0)&&(l==0)&&(m==0)&&(n==0)) { myContents = myContents +      "<p><center><img src='images/ESTJ.png'  ></center></p>" +       "<p><center><img src='images/estj (2).png' ></center></p>" +       "<p><center><video width='400' controls><source src='images/ESTJ.mp4' type='video/mp4'></video></center></p>" +         "<p><strong>ESTJ in a Nutshell</p></strong>" +         "<h3>ESTJs are hardworking traditionalists, eager to take charge in organizing projects and people. Orderly, rule-abiding, and conscientious, ESTJs like to get things done, and tend to go about projects in a systematic, methodical way.</h3>"+          "<h3>ESTJs are the consummate organizers, and want to bring structure to their surroundings. They value predictability and prefer things to proceed in a logical order. When they see a lack of organization, the ESTJ often takes the initiative to establish processes and guidelines, so that everyone knows what's expected.</h3>"+         "<p><strong>What Makes the ESTJ Tick</p></strong>"+         "<h3>ESTJs are conventional, factual, and grounded in reality. For the ESTJ, the proof is in the past: what has worked and what has been done before. They value evidence over conjecture, and trust their personal experience. ESTJs look for rules to follow and standards to meet, and often take a leadership role in helping other people meet expectations as well. They concern themselves with maintaining the social order and keeping others in line.</h3>"+          "<h3>ESTJs often take on a project manager role at home as well as at work, and excel at setting goals, making decisions, and organizing resources to accomplish a task. The ESTJ wants to achieve efficient productivity and typically believes this is best accomplished when people and systems are well organized.</h3>"+         "<p><strong>Recognizing an ESTJ</p></strong>"+         "<h3>ESTJs command a situation, with the sense that they know how things should go and are ready to take charge to make sure that it happens. They are task-oriented and put work before play. Confident and tough-minded, the ESTJ appears almost always to be in control. ESTJs appreciate structure and often begin to organize as soon as they enter a room. They want to establish the ground rules and make sure everyone does what they're supposed to.</h3>"+          "<h3>ESTJs are often involved in institutions: clubs, associations, societies, and churches, where they usually take a leadership role. They typically connect with others through sharing ritual and routine. Social interaction for ESTJs often means following an established tradition to engage with others in a structured way. ESTJs tend to respect and seek out hierarchy. They want to know who's in charge, and will assign levels of responsibility if none exist. Once a structure is in place, ESTJs typically trust authority figures and expect obedience from people of lower rank.</h3>"+          "<p><strong>Famous ESTJs</p></strong>"+         "<h3>Famous ESTJs include Colin Powell, Judge Judy Sheindlin, Dr. Laura Schlessinger, George Washington, Sandra Day O'Connor, Mike Wallace, and Vince Lombardi.</h3>"+           "<p><strong>ESTJ in the Population</p></strong>"+           "<h3>ESTJ is the fifth most common type in the population, and the second most common among men. ESTJs make up:</h3>"+           "<h3>9% of the general population</br>11% of men</br>6% of women</h3>"+         "<p><strong>Popular Hobbies</strong></p>"+          "<h3>Popular hobbies for the ESTJ include building and repairing things around the home, gardening, volunteering, community service, and playing and watching sports.</h3>";}
  
  
  
  else if((k==1)&&(l==1)&&(m==1)&&(n==1)) {myContents = myContents + "<p><center><img src='images/INFP.png'  ></center></p>" +         "<p><center><img src='images/infp (2).png' ></center></p>" +         "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/c7leyardzk?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Finfp&canonicalTitle=The%20INFP%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='298'></iframe></center></p>" +          "<p><strong>INFP in a Nutshell</strong></p>"+        "<h3>INFPs are imaginative idealists, guided by their own core values and beliefs. To a Healer, possibilities are paramount; the realism of the moment is only of passing concern. They see potential for a better future, and pursue truth and meaning with their own individual flair.</br>INFPs are sensitive, caring, and compassionate, and and are deeply concerned with the personal growth of themselves and others. Individualistic and nonjudgmental, INFPs believe that each person must find their own path. They enjoy spending time exploring their own ideas and values, and are gently encouraging to others to do the same. INFPs are creative and often artistic; they enjoy finding new outlets for self-expression.</h3>"+         "<p><strong>What Makes the INFP Tick</strong></p>"+        "<h3>INFPs value authenticity and want to be original and individual in what they do. They are often concerned with a search for meaning and truth within themselves. Following tradition holds little appeal for the INFP; they prefer to do their own exploration of values and ideas, and decide for themselves what seems right. INFPs are often offbeat and unconventional, but they feel no desire to conform. The INFP would rather be true to themselves than try to fit in with the crowd.</br>INFPs are accepting and nonjudgmental in their treatment of others, believing that each person must follow their own path. They are flexible and accommodating, and can often see many points of view. It is important to the INFP to support other people; however, the INFP may react strongly if they feel their own values are being violated. They especially hate being steamrolled by people who insist there is one right way to do things. INFPs want an open, supportive exchange of ideas.</h3>"+         "<p><strong>Recognizing an INFP</strong></p>"+          "<h3>INFPs may initially seem cool, as they reserve their most authentic thoughts and feelings for people they know well. They are reflective and often spiritual, and often interested in having meaningful conversations about values, ethics, people, and personal growth. Typically curious and open-minded, the Healer continually seeks a deeper understanding of themselves and of the people around them. They are passionate about their ideals, but private as well; few people understand the depth of the INFP's commitment to their beliefs.</br>INFPs are sensitive and empathetic, and engage themselves in a lifelong quest for meaning and authenticity. The mundane aspects of life are of less interest to this type, and they are more excited by interesting ideas than by practical facts. They typically accept others without question, and may take special interest in offbeat points of view or alternative lifestyles. They often have a special affection for the arts, especially the avant garde, as they love experiencing new concepts in self-expression.</h3>" +          "<p></strong>Famous INFPs</strong></p>"+         "<h3>Famous INFPs include Princess Diana, Audrey Hepburn, Fred Rogers, John Lennon, Kurt Cobain, Tori Amos, Morrissey, Chloe Sevigny, William Shakespeare, Bill Watterson, A.A. Milne, Helen Keller, Carl Rogers, and Isabel Briggs Myers (creator of the Myers-Briggs Type Indicator).</h3>" +         "<p><strong>INFPs in the Population</strong></p>"+         "<h3>INFP is the ninth most common type in the population. They make up:</br>4% of the general population</br>5% of women</br>4% of men</h3>"+         "<p><strong>Popular Hobbies</strong></p>"+           "<h3>Popular hobbies for INFPs include poetry, creative writing, music, photography, theater, and visual art.</h3>";}
  
  
  
  else if((k==0)&&(l==1)&&(m==1)&&(n==0)) {myContents = myContents + "<p><center><img src='images/ENFJ.png'  ></center></p>"+         "<p><center><img src='images/enfj (2).png' ></center></p>" +             "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/1zj6o0uuxa?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Fenfj&canonicalTitle=The%20ENFJ%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='328'></iframe></center></p>"         +"<p><strong>ENFJ in a Nutshell</strong></p>"+         "<h3>ENFJs are idealist organizers, driven to implement their vision of what is best for humanity. They often act as catalysts for human growth because of their ability to see potential in other people and their charisma in persuading others to their ideas. They are focused on values and vision, and are passionate about the possibilities for people.</br>ENFJs are typically energetic and driven, and often have a lot on their plates. They are tuned into the needs of others and acutely aware of human suffering; however, they also tend to be optimistic and forward-thinking, intuitively seeing opportunity for improvement. The ENFJ is ambitious, but their ambition is not self-serving: rather, they feel personally responsible for making the world a better place.</h3>"+         "<p><strong>What Makes the ENFJ Tick</strong></p>"+          "<h3>ENFJs are driven by a deep sense of altruism and empathy for other people. They have an intuitive sense of the emotions of others, and often act as an emotional barometer for the people around them. However, their compassion not reserved for the people close to them: they are often humanitarian in nature, and may feel genuine concern for the ills of the entire human race. They tend to personally experience the feelings of others, and feel compelled to act when they see people suffering.</br>ENFJs want close, supportive connections with others, and believe that cooperation is the best way to get things done. They like to be liked and are very sensitive to feedback, both positive and negative. They expect the best not just from themselves, but from others as well, and may find themselves disappointed when others are not as genuine in their intentions as the ENFJ. ENFJs work hard to maintain strong relationships, and strive to be valuable members of their families, groups, and communities.</h3>"+            "<p><strong>Recognizing an ENFJ</strong></p>"+            "<h3>ENFJs are natural teachers, often found organizing people to take part in some educational activity. They tend to take charge of a situation, and guide a group towards those activities and experiences which will help them learn and grow. They intuitively see the potential in people, and with charisma and warmth, they encourage others to pursue greater development of their strengths. They are typically dynamic and productive, and are often visibly energized when leading others to discover new knowledge.</br>ENFJs are typically good communicators, talented at using words to connect with others. They are perceptive about people and enjoy talking about relationships. They often enjoy helping others solve personal problems and like to share their insights about people, their emotions, and their motivations. They are empathetic sometimes to the point of being overinvolved, and can become exhausted if they are surrounded by too much negative emotion.</h3>"+            "<p><strong>Famous ENFJs</strong></p>"+             "<h3>Famous ENFJs include Oprah Winfrey, Pope John Paul II, Margaret Mead, Ralph Nader, Abraham Maslow, Dr. Phil McGraw, and Martin Luther King.</h3>"+           "<p><strong>ENFJ in the Population</strong></p>"+            "<h3>ENFJ is one of the less common types in the population, especially for men. Among men, ENFJ is the second rarest type. ENFJs make up:</br>3% of the general population</br>3% of women</br>2% of men</h3>"+           "<p><strong>Popular Hobbies</strong></p>"+          "<h3>Popular hobbies for the ENFJ include organizing social events, reading, the arts, museums, storytelling, listening to music, writing, and gourmet cooking.</h3>";}
  
 
 
 	else if((k==0)&&(l==1)&&(m==0)&&(n==0)) {myContents = myContents + "<p><center><img src='images/ENTJ.png'  ></center></p>"+ "<p><center><img src='images/entj (2).png' ></center></p>"+                  "<p><center><video width='400' controls><source src='images/ENTJ.mp4' type='video/mp4'></video></center></p>" +                 "<p><strong>ENTJ in a Nutshell</strong></p>"+                 "<h3>ENTJs are strategic leaders, motivated to organize change. They are quick to see inefficiency and conceptualize new solutions, and enjoy developing long-range plans to accomplish their vision. They excel at logical reasoning and are usually articulate and quick-witted.</br>ENTJs are analytical and objective, and like bringing order to the world around them. When there are flaws in a system, the ENTJ sees them, and enjoys the process of discovering and implementing a better way. ENTJs are assertive and enjoy taking charge; they see their role as that of leader and manager, organizing people and processes to achieve their goals.</h3>"+                 "<p><strong>What Makes the ENTJ Tick</strong></p>"+               "<h3>ENTJs are often very motivated by success in their careers and enjoy hard work. They are ambitious and interested in gaining power and influence. To the ENTJ, decision-making is a vocation. They want to be in a position to make the call and put plans into motion.</br>ENTJs tend to be blunt and decisive. Driven to get things done, they can sometimes be critical or brusque in the pursuit of a goal. They are typically friendly and outgoing, although they may not pick up on emotional subleties in other people. They often love working with others toward a common goal, but may not find time to attend to their feelings. They are focused on results and want to be productive, competent, and influential.</h3>"+              "<p><strong>Recognizing an ENTJ</strong></p>"+            "<h3>ENTJs are natural leaders, and often take charge no matter where they are. They typically have a clear vision for the future, and intuitively understand how to move people and processes towards that goal. They tend to approach every situation with the attitude of an efficiency analyst, and are not shy about pointing out what could be done better. For the ENTJ, their ideas are a foregone conclusion: it's just a matter of time before they can move the players to get everything accomplished.</br>ENTJs are often gregarious, and seem to have an idea for how a person will fit into their grand scheme from the moment they are introduced. They are typically direct and may seem presumptuous or even arrogant; they size people and situations up very quickly, and have trouble being anything but honest about what they see. ENTJs are sensitive to issues of power, and seek positions and people of influence. They are characeristically ambitious, and often very engaged in their careers. More than any other type, ENTJs enjoy their work, and may even say that working is what they do for fun.</h3>"+                  "<p><strong>Famous ENTJs</strong></p>"+              "<h3>Famous ENTJs include Margaret Thatcher, Bill Gates, Napoleon Bonaparte, Carl Sagan, General Norman Schwarzkopf, David Letterman, Douglas MacArthur, Harrison Ford, and Quentin Tarantino.</h3>"+               "<p><strong>ENTJ in the Population</strong></p>"+              "<h3>ENTJ is one of the least common types in the population, and the rarest type among women (with INTJ). ENTJs make up:</br>2% of the general population</br>3% of men</br>1% of women</h3>"+                  "<p><strong>Popular Hobbies</strong></p>"+             "<h3>Popular hobbies for ENTJs include taking leadership positions in community groups, attending social gatherings or sporting events, and playing competitive sports. Because ENTJs are so often focused on their careers, they may have few interests outside of work, or they may participate in leisure activities that also help to further their careers.</h3>";}
  
  
  	else if((k==0)&&(l==1)&&(m==1)&&(n==1)) {myContents = myContents + "<p><center><img src='images/ENFP.png'  ></center></p>" +              "<p><center><img src='images/enfp (2).png' ></center></p>"+                   "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/3nitekdyy3?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Fenfp&canonicalTitle=The%20ENFP%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='328'></iframe></center></p>" +                   "<p><strong>ENFP in a Nutshell</strong></p>"+               "<h3>ENFPs are people-centered creators with a focus on possibilities and a contagious enthusiasm for new ideas, people and activities. Energetic, warm, and passionate, ENFPs love to help other people explore their their creative potential.</br>ENFPs are typically agile and expressive communicators, using their wit, humor, and mastery of language to create engaging stories. Imaginative and original, ENFPs often have a strong artistic side. They are drawn to art because of its ability to express inventive ideas and a create a deeper understanding of human experience.</h3>"+                "<p><strong>What Makes the ENFP Tick</strong></p>"+            "<h3>ENFPs tend to be curious about others and preoccupied with discovering the deeper meaning in people and ideas. They want authentic experience and often seek emotional intensity. ENFPs are easily bored by details and repetition and seek out situations that offer an escape from the mundane. Novelty is attractive to ENFPs, who often have a wide range of interests and friends from many backgrounds.</br>ENFPs prize individuality and often consider the pursuit of happiness to be the highest priority in life, both for themselves and for others. They place great importance on personal freedom and self-expression, and want to be able to go wherever inspiration leads.</h3>"+                  "<p><strong>Recognizing an ENFP</strong></p>"+                  "<h3>ENFPs love to talk about people: not just the facts, but what motivates them, what inspires them, and what they envision achieving in life. They'll often share their own aspirations freely, and want to hear others' in return. The ENFP is unlikely to judge anyone's dream, and will discuss the most imaginative and outlandish of fantasies with warm, enthusiastic intensity. They love to explore creative possibilities, and nothing deflates them faster than talking about dry facts or harsh reality.</br>ENFPs often seem unconventional, and may come off as scattered; they don't tend to be in touch with their physical surroundings. They often overlook the details, as they are more likely to focus on connecting with other people or on exploring their own imagination and self-expression. They have little patience for the mundane and want to experience life with intensity and flair. ENFPs often have an artistic streak, and may be artistic in appearance. Many have developed a distinctive and quirky personal style.</h3>"+                "<p><strong>Famous ENFPs</strong></p>"+                "<h3>Famous ENFPs include Bill Clinton, Phil Donahue, Mark Twain, Edith Wharton, Will Rogers, Carol Burnett, Dr. Seuss, Robin Williams, Drew Barrymore, Julie Andrews, Alicia Silverstone, Joan Baez, and Regis Philbin.</h3>"+               "<p><strong>ENFP in the Population</strong></p>"+         "<h3>ENFP is a moderately common personality type, and is the fifth most common among women. ENFPs make up:</br>8% of the general population</br>10% of women</br>6% of men</h3>"+            "<p><strong>Popular Hobbies</strong></p>"+           "<h3>Popular hobbies for the ENFP include writing, creating and appreciating art, playing musical instruments, listening to music, participating in community theater, and reading fiction.</h3>";}


  	else if((k==0)&&(l==1)&&(m==0)&&(n==1)) { myContents = myContents + "<p><center><img src='images/ENTP.png'  ></center></p>"+                "<p><center><img src='images/entp (2).png' ></center></p>"+                    "<p><center><video width='400' controls><source src='images/ENTP.mp4' type='video/mp4'></video></center></p>"  +                    "<p><strong>ENTP in a Nutshell</strong></p>"+                "<h3>ENTPs are inspired innovators, motivated to find new solutions to intellectually challenging problems. They are curious and clever, and seek to comprehend the people, systems, and principles that surround them. Open-minded and unconventional, Visionaries want to analyze, understand, and influence other people.</br>ENTPs enjoy playing with ideas and especially like to banter with others. They use their quick wit and command of language to keep the upper hand with other people, often cheerfully poking fun at their habits and eccentricities. While the ENTP enjoys challenging others, in the end they are usually happy to live and let live. They are rarely judgmental, but they may have little patience for people who can't keep up.</h3>"+              "<p><strong>What Makes the ENTP Tick</strong></p>"+                "<h3>ENTPs are energized by challenge and are often inspired by a problem that others perceive as impossible to solve. They are confident in their ability to think creatively, and may assume that others are too tied to tradition to see a new way. The Visionary relies on their ingenuity to deal with the world around them, and rarely finds preparation necessary. They will often jump into a new situation and trust themselves to adapt as they go.</br>ENTPs are masters of re-inventing the wheel and often refuse to do a task the same way twice. They question norms and often ignore them altogether. Established procedures are uninspiring to the Visionary, who would much rather try a new method (or two) than go along with the standard.</h3>"+                "<p><strong>Recognizing an ENTP</strong></p>"+                   "<h3>ENTPs are typically friendly and often charming. They usually want to be seen as clever and may try to impress others with their quick wit and incisive humor. They are curious about the world around them, and want to know how things work. However, for the ENTP, the rules of the universe are made to be broken. They like to find the loopholes and figure out how they can work the system to their advantage. This is not to say the Visionary is malicious: they simply find rules limiting, and believe there is probably a better, faster, or more interesting way to do things that hasn't been thought of before.</br>The ENTP is characteristically entrepreneurial and may be quick to share a new business idea or invention. They are confident and creative, and typically excited to discuss their many ingenious ideas. The ENTP's enthusiasm for innovation is infectious, and they are often good at getting other people on board with their schemes. However, they are fundamentally 'big-picture' people, and may be at a loss when it comes to recalling or describing details. They are typically more excited about exploring a concept than they are about making it reality, and can seem unreliable if they don't follow through with their many ideas.</h3>"+              "<p><strong>Famous ENTPs</strong></p>"+                 "<h3>Famous ENTPs include Steve Jobs, Walt Disney, Thomas Edison, Benjamin Franklin, Richard Feynman, Leonardo da Vinci, Niccolo Machiavelli, John Stuart Mill, Jon Stewart, 'Weird Al' Yankovic, and Conan O'Brien</h3>"+                 "<p><strong>ENTP in the Population</strong></p>"+                "<h3>ENTP is one of the rarer types in the population. ENTPs make up:</br>3% of the general population</br>4% of men</br>2% of women</h3>"+                "<p><strong>Popular Hobbies</strong></p>"+                "<h3>Popular hobbies for the ENTP include continuing education, writing, art appreciation, playing sports, computers and video games, travel, and cultural events.</h3>";}   
  
  
  	else if((k==0)&&(l==0)&&(m==1)&&(n==0)) { myContents = myContents + "<p><center><img src='images/ESFJ.png' ></center></p>"+                 "<p><center><img src='images/esfj (2).png' ></center></p>"+                     "<p><center><video width='400' controls><source src='images/ESFJ.mp4' type='video/mp4'></video></center></p>" +                 "<p><strong>ESFJ in a Nutshell</strong></p>"+               "<h3>ESFJs are conscientious helpers, sensitive to the needs of others and energetically dedicated to their responsibilities. They are highly attuned to their emotional environment and attentive to both the feelings of others and the perception others have of them. ESFJs like a sense of harmony and cooperation around them, and are eager to please and provide.</br>ESFJs value loyalty and tradition, and usually make their family and friends their top priority. They are generous with their time, effort, and emotions. They often take on the concerns of others as if they were their own, and will attempt to put their significant organizational talents to use to bring order to other people's lives.</h3>"+              "<p><strong>What Makes the ESFJ Tick</strong></p>"+              "<h3>ESFJs act according to a strict moral code, and look for others to do the same. They often see things in terms of black and white, right and wrong, and they are typically not shy about sharing their evaluations of others' behavior. ESFJs seek harmony and cooperation, and feel this is best accomplished when everyone follows the same set of rules. They have a sense of order in the way people relate to one another, and often take on roles that allow them to help enforce that social order.</br>ESFJs feel a sense of personal responsibility for other people's needs, and are usually eager to get involved and help out. They tend to be serious and practical, dutifully putting business before pleasure—especially the business of caring for others. They typically enjoy routine and often keep a regular schedule that allows them to be organized and productive.</h3>"+             "<p><strong>Recognizing an ESFJ</strong></p>"+            "<h3>ESFJs may often be found playing host or hostess. They tend to take on the role of organizer without hesitation, and want to be sure that everyone is taken care of. Roles such as committee leader, event planner, and church volunteer suit the ESFJ well. They are typically engaged with their communities and work hard to do their part in maintaining the social order. ESFJs are interested in other people and like to know the details of their lives. Gossip is a favorite pasttime of many ESFJs; they love to share stories about the people around them.</br>ESFJs have a clear moral code that guides their behavior and their expectations from others. They often have strong opinions about how people should behave and the proper thing to do. Manners and other codes of social interaction are often of great interest to ESFJs. They may think in terms of black and white, right and wrong. They can be judgmental of others who they do not think are acting appropriately, but they have the best of intentions: they simply want everyone to follow the rules so they can all get along. The ESFJ wants things to be all right with the people around them, and may become very involved with others' problems and concerns.</h3>"+              "<p><strong>Famous ESFJs</strong></p>"+             "<h3>Famous ESFJs include Martha Stewart, Dave Thomas, Sam Walton, Barbara Walters, William Howard Taft, JC Penney, Sally Field, Mary Tyler Moore, and Ray Kroc.</h3>"+                "<p><strong>ESFJ in the Population</strong></p>"+             "<h3>ESFJ is the second most common type in the population. ESFJs make up:</br>12% of the general population</br>17% of women</br>8% of men</h3>"+             "<p><strong>Popular Hobbies</strong></p>"+           "<h3>Popular leisure activities for ESFJs include volunteering in community, charity, or religious organizations; celebrating holidays and family traditions; cooking; entertaining; and social sports.</h3>";} 
  
  
  	else if((k==0)&&(l==0)&&(m==1)&&(n==1)) { myContents = myContents + "<p><center><img src='images/ESFP.png'  ></center></center></p>"+                 "<p><center><img src='images/esfp (2).png' ></center></p>"+                    "<p><center><video width='400' controls><source src='images/ESFP.mp4' type='video/mp4'></video></center></p>"  +"<p><strong>ESFP in a Nutshell</strong></p>"+                  "<h3>ESFPs are vivacious entertainers who charm and engage those around them. They are spontaneous, energetic, and fun-loving, and take pleasure in the things around them: food, clothes, nature, animals, and especially people.</br>ESFPs are typically warm and talkative and have a contagious enthusiasm for life. They like to be in the middle of the action and the center of attention. They have a playful, open sense of humor, and like to draw out other people and help them have a good time.</h3>"+                "<p><strong>What Makes the ESFP Tick</strong></p>"+              "<h3>ESFPs live in the moment, enjoying what life has to offer. They are especially tuned into their senses and take pleasure in the sights, sounds, smells, and textures around them. ESFPs like to keep busy, filling their lives with hobbies, sports, activities, and friends. Because they'd rather live spontaneously than plan ahead, they can become overextended when there are too many exciting things to do. An ESFP hates nothing more than missing out on the fun.</br>Although they are characteristically fun-loving, ESFPs are also typically practical and down-to-earth. They are grounded in reality and are usually keenly aware of the facts and details in their environment, especially as they pertain to people. They are observant of others and their needs, and responsive in offering assistance. ESFPs enjoy helping other people, especially in practical, tangible ways.</h3>"+               "<p><strong>Recognizing an ESFP</strong></p>"+                 "<h3>ESFPs are often the life of the party, entertaining and engaging others with humor and enthusiasm. They notice whether other people are having fun, and do their best to create a good time for all. Typically at home in their physical environment, ESFPs may take the lead in getting everyone involved in some active diversion. ESFPs are generally friendly and likable, but can be hard to get close to; although they tend to be very open, they are reluctant to be serious or to talk about anything negative.</br>ESFPs are tuned into their senses, and often gravitate towards pleasing colors and textures in their environments. They often carefully choose fabrics and decorations with which to surround themselves. This attention also often translates into their appearance; ESFPs are often dressed in sensuous fabrics or bright, dazzling colors. They are often up on the latest trends, and like to excite the people around them with new environments and experiences.</h3>"+                 "<p><strong>Famous ESFPs</strong></p>"+             "<h3>Famous ESFPs include Marilyn Monroe, Elizabeth Taylor, Judy Garland, Magic Johnson, Elvis Presley, Ronald Reagan, Paul McCartney, Bob Hope, and Goldie Hawn.</h3>"+                 "<p><strong>ESFP in the Population</strong></p>"+                 "<h3>ESFP is the third most common type among women, and the seventh most common among men. ESFPs make up:</br>9% of the general population</br>10% of women</br>7% of men</h3>"+                "<p><strong>Popular Hobbies</strong></p>"+           "<h3>Popular hobbies for ESFPs include socializing, team sports, home improvement projects, cooking, entertaining, games, and dance. ESFPs love big parties and gatherings and are quick to join any group or activity that sounds like fun.</h3>";} 
  
  
  	else if((k==0)&&(l==0)&&(m==0)&&(n==1)) { myContents = myContents + "<p><center><img src='images/ESTP.png'  ></center></p>"+                 "<p><center><img src='images/estp (2).png' ></center></p>"+                  "<p><center><video width='400' controls><source src='images/ESTP.mp4' type='video/mp4'></video></center></p>" +                   "<p><strong>ESTP in a Nutshell</strong></p>"+              "<h3>ESTPs are energetic thrillseekers who are at their best when putting out fires, whether literal or metaphorical. They bring a sense of dynamic energy to their interactions with others and the world around them. They assess situations quickly and move adeptly to respond to immediate problems with practical solutions.</br>Active and playful, ESTPs are often the life of the party and have a good sense of humor. They use their keen powers of observation to assess their audience and adapt quickly to keep interactions exciting. Although they typically appear very social, they are rarely sensitive; the ESTP prefers to keep things fast-paced and silly rather than emotional or serious.</h3>"+              "<p><strong>What Makes the ESTP Tick</strong></p>"+             "<h3>ESTPs are often natural athletes; they easily navigate their physical environment and are typically highly coordinated. They like to use this physical aptitude in the pursuit of excitement and adventure, and they often enjoy putting their skills to the test in risky or even dangerous activities.</br>The ESTP's focus is action in the moment. They are engaged with their environments and solve practical problems quickly. ESTPs are excellent in emergencies, when they can apply their logical reasoning to situations where immediate action is necessary. Long-term goals are less interesting to the ESTP, who prefers to see tangible results in the moment.</h3>"+                "<p><strong>Recognizing an ESTP</strong></p>"+              "<h3>The first thing you notice about the ESTP is likely to be their energy. They’re often chatting, joking, and flirting with friends and strangers alike. They enjoy engaging playfully with others and amusing everyone around them with their irrevent sense of humor. They tend to keep people on their toes, never quite knowing what the ESTP will poke fun at next. ESTPs are unabashedly gregarious with people, but their interest in individuals may not last long; they are more likely to work a room, having a laugh with everyone, than they are to engage in depth with any one person.</br>ESTPs are comfortable in their physical environment and always looking for some action or activity. They tend to be the most naturally coordinated of all the types and are often found playing sports or engaging in various physical activities, especially ones with an element of danger. They are the stereotypical 'adrenaline junkies' and may be found skydiving, motorcycle racing, or enjoying other extreme sports.</h3>"+              "<p><strong>Famous ESTPs</strong></p>"+              "<h3>Famous ESTPs include Donald Trump, George W. Bush, Winston Churchill, Mae West, Eddie Murphy, Bruce Willis, Madonna, and Evel Knievel.</h3>"+               "<p><strong>ESTP in the Population</strong></p>" +                     "<h3> ESTPs make up:</br>4% of the general population</br>6% of men</br>3% of women</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+                "<h3>Popular hobbies for an ESTP include all sorts of sports and athletic pursuits, especially team sports and risky or adventurous activities like race car driving, boxing, or flying.</h3>";} 


	else if((k==1)&&(l==1)&&(m==1)&&(n==0)) { myContents = myContents + "<p><center><img src='images/INFJ.png'  ></center></p>" +                   "<p><center><img src='images/infj (2).png' ></center></p>" +                  "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/wm5xofn9mx?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Finfj&canonicalTitle=The%20INFJ%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='328'></iframe></center></p>"  +                 "<p><strong>INFJ in a Nutshell</strong></p>"+             "<h3>INFJs are creative nurturers with a strong sense of personal integrity and a drive to help others realize their potential. Creative and dedicated, they have a talent for helping others with original solutions to their personal challenges.</br>The Counselor has a unique ability to intuit others' emotions and motivations, and will often know how someone else is feeling before that person knows it himself. They trust their insights about others and have strong faith in their ability to read people. Although they are sensitive, they are also reserved; the INFJ is a private sort, and is selective about sharing intimate thoughts and feelings.</h3>"+                "<p><strong>What Makes the INFJ Tick</strong></p>" +                "<h3>INFJs are guided by a deeply considered set of personal values. They are intensely idealistic, and can clearly imagine a happier and more perfect future. They can become discouraged by the harsh realities of the present, but they are typically motivated and persistent in taking positive action nonetheless. The INFJ feels an intrinsic drive to do what they can to make the world a better place.</br>INFJs want a meaningful life and deep connections with other people. They do not tend to share themselves freely but appreciate emotional intimacy with a select, committed few. Although their rich inner life can sometimes make them seem mysterious or private to others, they profoundly value authentic connections with people they trust.</h3>"+                  "<p><strong>Recognizing an INFJ</strong></p>"+             "<h3>INFJs often appear quiet, caring and sensitive, and may be found listening attentively to someone else's ideas or concerns. They are highly perceptive about people and want to help others achieve understanding. INFJs are not afraid of complex personal problems; in fact, they are quite complex themselves, and have a rich inner life that few are privy to. They reflect at length on issues of ethics, and feel things deeply. Because Counselors initially appear so gentle and reserved, they may surprise others with their intensity when one of their values is threatened or called into question. Their calm exterior belies the complexity of their inner worlds.</br>Because INFJs are such complex people, they may be reluctant to engage with others who might not understand or appreciate them, and can thus be hard to get to know. Although they want to get along with others and support them in their goals, they are fiercely loyal to their own system of values and will not follow others down a path that does not feel authentic to them. When they sense that their values are not being respected, or when their intuition tells them that someone's intentions are not pure, they are likely to withdraw.</h3>"+               "<p><strong>Famous INFJs</strong></p>"+              "<h3>Famous INFJs include Mohandas Gandhi, Eleanor Roosevelt, Emily Bronte, Carl Jung, Fyodor Dostoevsky, Florence Nightingale, Shirley MacLaine, Jimmy Carter, and Edward Snowden.</h3>"+               "<p><strong>INFJ in the Population</strong></p>"+               "<h3>INFJ is the rarest type in the population. It is the least common type among men, and the third least common among women (after INTJ and ENTJ). INFJs make up:</br>2% of the general population</br>2% of women</br>1% of men</h3>"+                    "<p><strong>Popular Hobbies</strong></p>"+                "<h3>Popular hobbies for the INFJ include writing, art appreciation, cultural events, reading, socializing in small, intimate settings, and playing or listening to music.</h3>";} 
  
  
  	else if((k==1)&&(l==1)&&(m==0)&&(n==0)) { myContents = myContents + "<p><center><img src='images/INTJ.png'  ></center></p>" +               "<p><center><img src='images/intj (2).png' ></center></p>"+                  "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/hdkgmt0r4z?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Fintj&canonicalTitle=The%20INTJ%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='328'></iframe></center></p>" +              "<p><strong>INTJ in a Nutshell</strong></p>"+            "<h3>INTJs are analytical problem-solvers, eager to improve systems and processes with their innovative ideas. They have a talent for seeing possibilities for improvement, whether at work, at home, or in themselves.</br>Often intellectual, INTJs enjoy logical reasoning and complex problem-solving. They approach life by analyzing the theory behind what they see, and are typically focused inward, on their own thoughtful study of the world around them. INTJs are drawn to logical systems and are much less comfortable with the unpredictable nature of other people and their emotions. They are typically independent and selective about their relationships, preferring to associate with people who they find intellectually stimulating.</h3>"+                "<p><strong>What Makes the INTJ Tick</strong></p>"+              "<h3>INTJs are perceptive about systems and strategy, and often understand the world as a chess board to be navigated. They want to understand how systems work, and how events proceed: the INTJ often has a unique ability to foresee logical outcomes. They enjoy applying themselves to a project or idea in depth, and putting in concentrated effort to achieve their goals.</br>INTJs have a hunger for knowledge and strive to constantly increase their competence; they are often perfectionists with extremely high standards of performance for themselves and others. They tend to have a keen interest in self-improvement and are lifelong learners, always looking to add to their base of information and awareness.</h3>"+                 "<p><strong>Recognizing an INTJ</strong></p>"+               "<h3>INTJs are typically reserved and serious, and seem to spend a lot of time thinking. They are curious about the world around them and often want to know the principle behind what they see. They thoroughly examine the information they receive, and if asked a question, will typically consider it at length before presenting a careful, complex answer. INTJs think critically and clearly, and often have an idea about how to do something more efficiently. They can be blunt in their presentation, and often communicate in terms of the larger strategy, leaving out the details.</br>Although INTJs aren't usually warm or particularly gregarious, they tend to have a self-assured manner with people based on their own security in their intelligence. They relate their ideas with confidence, and once they have arrived at a conclusion they fully expect others to see the wisdom in their perceptions. They are typically perfectionists and appreciate an environment of intellectual challenge. They enjoy discussing interesting ideas, and may get themselves into trouble because of their take-no-prisoners attitude: if someone's beliefs don't make logical sense, the Mastermind typically has no qualms about pointing that out.</h3>"+                "<p><strong>Famous INTJs</strong></p>"+               "<h3>Famous INTJs include Hillary Clinton, Al Gore, Bill Gates, Dwight Eisenhower, Alan Greenspan, Ulysses S. Grant, Stephen Hawking, John Maynard Keynes, Ayn Rand, Isaac Asimov, Lewis Carroll, Cormac McCarthy, and Sir Isaac Newton.</h3>"+                 "<p><strong>INTJ in the Population</strong></p>"+            "<h3>INTJ is the third rarest type in the population, and the rarest type among women (with ENTJ). INTJs make up:</br>2% of the general population</br>3% of men</br>1% of women</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+          "<h3>Popular hobbies for the INTJ include reading, cultural events, taking classes, appreciating art, computers and video games, and independent sports such as swimming, backpacking, or running marathons.</h3>";} 
  
  
  	else if((k==1)&&(l==1)&&(m==0)&&(n==1)) { myContents = myContents + "<p><center><img src='images/INTP.png'  ></center></p>" +               "<p><center><img src='images/intp (2).png' ></center></p>"+                  "<p><center><iframe class='wistia_embed' name='wistia_embed' src='http://fast.wistia.net/embed/iframe/x7ndtm781m?canonicalUrl=http%3A%2F%2Fwww.truity.com%2Fintp&canonicalTitle=The%20INTP%20Personality%20Type' allowtransparency='true' frameborder='0' scrolling='no' width='480' height='328'></iframe></center></p>"  +                "<p><strong>INTP in a Nutshell</strong></p>"+          "<h3>INTPs are philosophical innovators, fascinated by logical analysis, systems, and design. They are preoccupied with theory, and search for the universal law behind everything they see. They want to understand the unifying themes of life, in all their complexity.</br>INTPs are detached, analytical observers who can seem oblivious to the world around them because they are so deeply absorbed in thought. They spend much of their time focused internally: exploring concepts, making connections, and seeking understanding. To the Architect, life is an ongoing inquiry into the mysteries of the universe.</h3>"+              "<p><strong>What Makes the INTP Tick</strong></p>"+              "<h3>INTPs present a cool exterior but are privately passionate about reason, analysis, and innovation. They seek to create complex systems of understanding to unify the principles they've observed in their environments. Their minds are complicated and active, and they will go to great mental lengths trying to devise ingenious solutions to interesting problems.</br>The INTP is typically non-traditional, and more likely to reason out their own individual way of doing things than to follow the crowd. The INTP is suspicious of assumptions and conventions, and eager to break apart ideas that others take for granted. INTPs are merciless when analyzing concepts and beliefs, and hold little sacred. They are often baffled by other people who remain loyal to ideology that doesn't make logical sense.</h3>"+                "<p><strong>Recognizing an INTP</strong></p>"+                  "<h3>INTPs are often thoroughly engaged in their own thoughts, and usually appear to others to be offbeat and unconventional. The INTP’s mind is a most active place, and their inward orientation can mean that they neglect superficial things like home décor or appropriate clothing. They don't tend to bother with small talk but can become downright passionate when talking about science, mathematics, computers, or the larger theoretical problems of the universe. Reality is often of only passing interest to the Architect, as they are more interested in the theory behind it all.</br>INTPs are typically precise in their speech, and communicate complex ideas with carefully chosen words. They insist on intellectual rigor in even the most casual of conversations, and will readily point out inconsistencies of thought or reasoning. Social niceties may fall by the wayside for an INTP who is more interested in analyzing logic, and they may offend others by submitting their dearly held values and beliefs to logical scrutiny.</h3>"+              "<p><strong>Famous INTPs</strong></p>"+              "<h3>Famous INTPs include Albert Einstein, Thomas Jefferson, Rene Descartes, Charles Darwin, Marie Curie, C.G. Jung, Socrates, and Abraham Lincoln.</h3>"+                  "<p><strong>INTP in the Population</strong></p>"+              "<h3>INTP is one of the less common types in the population, especially for women. Among women, INTP is the fourth rarest type (after INTJ, ENTJ, and INFJ). INTPs make up:</br>3% of the general population</br>5% of men</br>2% of women</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+                 "<h3>Popular leisure activities for an INTP include reading, art and cultural events, chess and other strategy games, writing, taking classes, working with computers, backpacking, hiking, and meditation.</h3>";} 
  
  
  	else if((k==1)&&(l==0)&&(m==1)&&(n==0)) { myContents = myContents + "<p><center><img src='images/ISFJ.png'  ></center></p>" +              "<p><center><img src='images/isfj (2).png' ></center></p>"+                 "<p><center><video width='400' controls><source src='images/ISFJ.mp4' type='video/mp4'></video></center></p>" +                "<p><strong>ISFJ in a Nutshell</strong></p>"+               "<h3>ISFJs are industrious caretakers, loyal to traditions and organizations. They are practical, compassionate, and caring, and are motivated to provide for others and protect them from the perils of life.</br>ISFJs are conventional and grounded, and enjoy contributing to established structures of society. They are steady and committed workers with a deep sense of responsibility to others. They focus on fulfilling their duties, particularly when they are taking care of the needs of other people. They want others to know that they are reliable and can be trusted to do what is expected of them. They are conscientious and methodical, and persist until the job is done.</h3>"+               "<p><strong>What Makes the ISFJ Tick</strong></p>"+            "<h3>ISFJs are driven by their personal values, and are conscientious in their behavior. They typically want to work hard, get along with others, and make sure they do what is expected of them.</br>ISFJs value relationships highly and strive to cooperate and maintain harmony with others. They want stability and longevity in their relationships, and tend to maintain a deep devotion to family. They feel most connected with people they know they can rely upon over the long term.</br>ISFJs appreciate tradition and like knowing how things were done in the past. They are loyal to established methods and values, and want to observe the proper, accepted way of doing things. They place great importance on fitting in with established institutions and contributing what they can to maintain strong, stable social structures. In groups, they often take on the role of historian, ensuring that new members respect and value the established customs.</h3>"+                "<p><strong>Recognizing an ISFJ</strong></p>"+                "<h3>ISFJs are characteristically humble and unassuming, and rarely call attention to themselves. They can often be found offering assistance to others in a modest, understated way. They are loyal and hardworking, and often commit themselves to tasks and projects with the aim of being helpful to their families, friends, and communities. They are typically involved in social groups, but do not want the spotlight: they are more likely to be found behind the scenes, working diligently to fulfill their role.</br>ISFJs are oriented to relationships, but can be reserved with new people. They rarely disclose personal information quickly. They tend to be focused and aware of their surroundings, and relate details from their own personal experience. They often converse in terms of what has happened to them and what they have seen first-hand. They are compassionate listeners, and typically remember details about people. They often enjoy hearing the facts about others in the process of making a connection.</h3>"+                 "<p><strong>Famous ISFJs</strong></p>"+              "<h3>Famous ISFJs include Mother Teresa, George H.W. Bush, Laura Bush, King George VI, Kate Middleton, Rosa Parks, Princess Mary of Denmark, and Clara Barton.</h3>"+                 "<p><strong>ISFJ in the Population</strong></p>"+              "<h3>ISFJ is the most common type in the U.S. population, and the most common type among women. ISFJs make up:</br>14% of the general population</br>19% of women</br>8% of men</h3>"+                  "<p><strong>Popular Hobbies</strong></p>"+           "<h3>Popular leisure activities for ISFJs include cooking, gardening, painting, crafts, picnics, nature walks, and watching movies. They are also often found supporting their loved ones in their interests and activities.</h3>";} 
  
  
  	else if((k==1)&&(l==0)&&(m==1)&&(n==1)) { myContents = myContents + "<p><center><img src='images/ISFP.png' ></center></p>"+              "<p><center><img src='images/isfp (2).png' ></center></p>"+                  "<p><center><video width='400' controls><source src='images/ISFP.mp4' type='video/mp4'></video></center></p>" +                "<p><strong>ISFP in a Nutshell</strong></p>"+                "<h3>ISFPs are gentle caretakers who live in the present moment and enjoy their surroundings with cheerful, low-key enthusiasm. They are flexible and spontaneous, and like to go with the flow to enjoy what life has to offer. ISFPs are quiet and unassuming, and may be hard to get to know. However, to those who know them well, the ISFP is warm and friendly, eager to share in life's many experiences.</br>ISFPs have a strong aesthetic sense and seek out beauty in their surroundings. They are attuned to sensory experience, and often have a natural talent for the arts. ISFPs especially excel at manipulating objects, and may wield creative tools like paintbrushes and sculptor's knives with great mastery.</h3>"+            "<p><strong>What Makes the ISFP Tick</strong></p>"+               "<h3>ISFPs tend to be tolerant and nonjudgmental, but are deeply loyal to the people and causes that matter to them. They endeavor to accept and support other people, but are ultimately guided by their own core values. They will typically look for ways to be accommodating and may have difficulty dealing with others who are not willing to do the same.</br>ISFPs are typically modest and may underestimate themselves. They usually do not like to be in the spotlight, preferring instead to take a supporting role, and will avoid planning and organizing whenever possible. Sensitive and responsive, they step in to do what needs to be done and are satisfied by their personal sense of being helpful to others.</h3>"+                "<p><strong>Recognizing an ISFP</strong></p>"+           "<h3>ISFPs can be difficult to recognize because of their tendency to express themselves through action rather than words. They may initially appear distant or aloof, but if you watch closely, you can observe their caring in the thoughtful things they do for others. They are carefully observant of the practical needs of other people, and often step in with quiet, unassuming assistance at just the moment it is needed. ISFPs prefer to take a supportive role and are rarely assertive or demanding of attention. They are typically tolerant and accepting of others.</br>ISFPs typically have finely tuned artistic sensibilities. They are sensitive to color, texture, and tone, and often have an innate sense of what will be aesthetically pleasing. They are often naturals when it comes to arranging something artistically, and enjoy the process of taking in the sensations around them. ISFPs focus mostly on the experiences of the present moment, and are rarely ambitious, preferring instead to enjoy the simple pleasures of life: friends, family, and sensory delights such as food, music, and art.</h3>"+               "<p><strong>Famous ISFPs</strong></p>"+            "<h3>Famous ISFPs include Cher, Barbra Streisand, Jacqueline Kennedy Onassis, Bob Dylan, Wolfgang Amadeus Mozart, Jimi Hendrix, and Michael Jackson.</h3>"+            "<p><strong>ISFP in the Population</strong></p>"+             "<h3>ISFP is the fourth most common type in the population. ISFPs make up:</br>9% of the general population</br>10% of women</br>8% of men</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+                  "<h3>Popular hobbies for ISFPs are those that use their physical or artistic skills, including independent athletics like skiing or swimming, dance, and craft projects. ISFPs also enjoy entertaining in intimate groups and exploring art and nature.</h3>";} 
  
  
  	else if((k==1)&&(l==0)&&(m==0)&&(n==0)) { myContents = myContents + "<p><center><img src='images/ISTJ.png' ></center></p>"+                 "<p><center><img src='images/istj (2).png' ></center></p>"+                   "<p><center><video width='400' controls><source src='images/vid.mp4' type='video/mp4'></video></center></p>" +                   "<p><strong>ISTJ in a Nutshell</strong></p>"+                  "<h3>ISTJs are responsible organizers, driven to create and enforce order within systems and institutions. They are neat and orderly, inside and out, and tend to have a procedure for everything they do. Reliable and dutiful, ISTJs want to uphold tradition and follow regulations.</br>ISTJs are steady, productive contributors. Although they are Introverted, ISTJs are rarely isolated; typical ISTJs know just where they belong in life, and want to understand how they can participate in established organizations and systems. They concern themselves with maintaing the social order and making sure that standards are met.</h3>"+                  "<p><strong>What Makes the ISTJ Tick</strong></p>"+                   "<h3>ISTJs like to know what the rules of the game are, valuing predictability more than imagination. They rely on their past experience to guide them, and are most comfortable in familiar surroundings. ISTJs trust the proven method, and appreciate the value of dedicated practice to build confidence in their skills.</br>ISTJs are hardworking and will persist until a task is done. They are logical and methodical, and often enjoy tasks that require them to use step-by-step reasoning to solve a problem. They are meticulous in their attention to details, and examine things closely to be sure they are correct. With their straightforward logic and orientation to detail, ISTJs work systematically to bring order to their own small parts of the world.</h3>"+                 "<p><strong>Recognizing an ISTJ</strong></p>"+                  "<h3>ISTJs have a serious, conservative air about them. They want to know and follow the rules of the game, and typically seek out predictable surroundings where they understand their role. You may find the ISTJ doing something useful even in social situations (for instance, organizing coats and hats at a party) as they're often more comfortable taking charge of a task than they are chatting up strangers. When given something to do, they are highly dependable, and follow it through to the end.</br>ISTJs are practical and no-nonsense, and rarely call attention to themselves. Their clothes and possessions tend to be chosen based on utility rather than fashion, and they have an affection for the classics. ISTJs typically speak in a straightforward manner and have a good head for details. They are usually more enthusiastic about sharing factual information than exploring abstract concepts or unproven ideas.</h3>"+                 "<p><strong>Famous ISTJs</strong></p>"+                 "<h3>Famous ISTJs include Queen Elizabeth II, Harry Truman, Warren Buffett, Queen Victoria, George H.W. Bush, and J.D. Rockefeller.</h3>"+               "<p><strong>ISTJ in the Population</strong></p>"+                "<h3>ISTJ is the third most common type in the population and the most common type among men. ISTJs make up:</br>12% of the general population</br>16% of men</br>7% of women</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+                "<h3>Popular hobbies for the ISTJ include concentration games like chess and Trivial Pursuit, playing computer games, watching sporting events, pursuing physical fitness, and playing solitary sports such as golf.</h3>";} 
  
  
  	else if((k==1)&&(l==0)&&(m==0)&&(n==1)) { myContents = myContents + "<p><center><img src='images/ISTP.png'  ></center></p>"+               "<p><center><img src='images/istp (2).png' ></center></p>"+                 "<p><center><video width='400' controls><source src='images/ISTP.mp4' type='video/mp4'></video></center></p>" +                  "<p><strong>ISTP in a Nutshell</strong></p>"+                "<h3>ISTPs are observant artisans with an understanding of mechanics and an interest in troubleshooting. They approach their environments with a flexible logic, looking for practical solutions to the problems at hand. They are independent and adaptable, and typically interact with the world around them in a self-directed, spontaneous manner.</br>ISTPs are attentive to details and responsive to the demands of the world around them. Because of their astute sense of their environment, they are good at moving quickly and responding to emergencies. ISTPs are reserved, but not withdrawn: the ISTP enjoys taking action, and approaches the world with a keen appreciation for the physical and sensory experiences it has to offer.</h3>"+              "<p><strong>What Makes the ISTP Tick</strong></p>"+                 "<h3>ISTPs are curious about the mechanics of the world around them and typically have a unique ability to manipulate the tools in their environments. They tend to study how things work and often achieve mastery in the use and operation of machines, instruments, and equipment. They seek understanding, but in a practical sense: they like to be able to put their technical knowledge to immediate use and are quickly bored by theory.</br>ISTPs tend to be detached and prefer the logic of mechanical things to the complexity of human emotions. Independent and reserved, ISTPs treasure their personal space, and want to be free to be spontaneous and follow their own lead. ISTPs are selective about their relationships, and appreciate others who allow them plenty of freedom to do their own thing.</h3>"+               "<p><strong>Recognizing an ISTP</strong></p>"+                 "<h3>ISTPs are typically reserved and even aloof. Tolerant and nonjudgmental, the ISTP calmly takes in the details and facts of their surroundings, noticing sensory data and observing how things work. They often tune into what needs to be done, taking care of the immediate needs of the moment in a modest, inconspicuous way. They tend to prefer action to conversation, and are often private about their personal lives. ISTPs are unlikely to 'open up' to new people in a conventional way, but may connect with others by sharing an activity or working together to solve a practical problem.</br>ISTPs are good with their hands and often mechanical. They are typically attracted to hands-on hobbies like woodworking or crafts, and may be found tinkering with bicycles, computers, cars, or household appliances. They often have an intuitive understanding of machines and a remarkable ability to fix things. ISTPs have an appreciation for risk and action, and often enjoy thrilling leisure activities like extreme sports, motorcycling, or weaponry.</h3>"+                "<p><strong>Famous ISTPs</strong></p>"+               "<h3>Famous ISTPs include Lance Armstrong, Bruce Lee, Miles Davis, Tiger Woods, Chuck Yaeger, Katherine Hepburn, Clint Eastwood, and Amelia Earhart.</h3>"+               "<p><strong>ISTP in the Population</strong></p>"+             "<h3>The ISTP personality type is much more common among men than women. Among men, it is the third most common type in the population. Among women, it is the fourth rarest. ISTPs make up:</br>5% of the general population</br>9% of men</br>2% of women</h3>"+               "<p><strong>Popular Hobbies</strong></p>"+               "<h3>Popular hobbies for an ISTP include magic and comedy, archery, weaponry, hunting, scuba diving, rappelling, aviation, skydiving, motorcycles, and other extreme sports. They are often drawn to risky or thrilling activities and those that allow them to work with something mechanical.</h3>";} 
  
  else	{ myContents = myContents + "<p><strong>Please choose answers</strong></p>" ; }
 myDisplay(myContents) ;
} 


function myDisplay(myContents) { 
//This function will open a new window and show the results calculated 
  				newwindow = window.open( "mbtir.php",  'Test Result',"height=700,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes" );
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



</script>>
 
 
 
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

<BODY onLoad="populate();noBack();"> 
onpageshow="if (event.persisted) noBack();" onunload="">
<FORM NAME="personalityForm" style=" width:700px; height:500px; margin-left:100px; margin-top:-420px;" class="style37"> 
<div ><span >Welome, &nbsp;&nbsp;&nbsp; "<?= $_SESSION['user'] ?>"    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Here is your test..... Enjoy!!!</span><br />
</br>
<p>1. At a party do you:</p>
<INPUT TYPE="radio" NAME="q1" onClick="saver(1,1,1);" >a. Interact with many, including strangers<br> 
<INPUT TYPE="radio" NAME="q1" onClick="saver(2,1,1);">b. Interact with a few, known to you<br>
 </br> 
<p>2. Are you more:</p>
<INPUT TYPE="radio" NAME="q2" onClick="saver(3,1,1);">a. Realistic than speculative<br> 
<INPUT TYPE="radio" NAME="q2" onClick="saver(4,1,1);" >b. Speculative than realistic<br> 
 </br>
<p>3. Is it worse to:</p>
<INPUT TYPE="radio" NAME="q3" onClick="saver(3,2,1);">a. Have your “head in the clouds”<br> 
<INPUT TYPE="radio" NAME="q3" onClick="saver(4,2,1);">b. Be “in a rut”<br> 
 </br>
<p>4. Are you more impressed by:</p>
<INPUT TYPE="radio" NAME="q4" onClick="saver(5,1,1);">a. Principles<br> 
<INPUT TYPE="radio" NAME="q4" onClick="saver(6,1,1);">b. Emotions<br> 
 </br>
<p>5. Are more drawn toward the:</p>  
<INPUT TYPE="radio" NAME="q5" onClick="saver(5,2,1);">a. Convincing<br> 
<INPUT TYPE="radio" NAME="q5" onClick="saver(6,2,1);">b. Touching<br> 
 </br>
<p>6. Do you prefer to work:</p>
<INPUT TYPE="radio" NAME="q6" onClick="saver(7,1,1);">a. To deadlines<br> 
<INPUT TYPE="radio" NAME="q6" onClick="saver(8,1,1);">b. Just “whenever”<br> 
 </br>
<p>7. Do you tend to choose:</p>
<INPUT TYPE="radio" NAME="q7" onClick="saver(7,2,1);">a. Rather carefully<br> 
<INPUT TYPE="radio" NAME="q7" onClick="saver(8,2,1);">b. Somewhat impulsively<br>
 </br> 
<p>8. At parties do you:</p>
<INPUT TYPE="radio" NAME="q8" onClick="saver(1,2,1);">a. Stay late, with increasing energy<br> 
<INPUT TYPE="radio" NAME="q8" onClick="saver(2,2,1);">b. Leave early with decreased energy<br> 
 </br>
<p>9. Are you more attracted to:</p>
<INPUT TYPE="radio" NAME="q9" onClick="saver(3,3,1);">a. Sensible people<br> 
<INPUT TYPE="radio" NAME="q9" onClick="saver(4,3,1;)">b. Imaginative people<br> 
 </br>
<p>10. Are you more interested in:</p>
<INPUT TYPE="radio" NAME="q10" onClick="saver(3,4,1);">a. What is actual<br> 
<INPUT TYPE="radio" NAME="q10" onClick="saver(4,4,1);">b. What is possible<br> 
 </br>
<p>11. In judging others are you more swayed by:</p>
<INPUT TYPE="radio" NAME="q11" onClick="saver(5,3,1);">a. Laws than circumstances<br> 
<INPUT TYPE="radio" NAME="q11" onClick="saver(6,3,1);">b. Circumstances than laws<br> 
 </br>
<p>12. In approaching others is your inclination to be somewhat:</p>
<INPUT TYPE="radio" NAME="q12" onClick="saver(5,4,1);">a. Objective<br> 
<INPUT TYPE="radio" NAME="q12" onClick="saver(6,4,1);">b. Personal<br> 
 </br>
<p>13. Are you more:</p>
<INPUT TYPE="radio" NAME="q13" onClick="saver(7,3,1);">a. Punctual<br> 
<INPUT TYPE="radio" NAME="q13" onClick="saver(8,3,1);">b. Leisurely<br> 
 </br>
<p>14. Does it bother you more having things:</p>
<INPUT TYPE="radio" NAME="q14" onClick="saver(7,4,1);">a. Incomplete<br> 
<INPUT TYPE="radio" NAME="q14" onClick="saver(8,4,1);" >b. Completed<br> 
 </br>
<p>15. In your social groups do you:</p>
<INPUT TYPE="radio" NAME="q15" onClick="saver(1,3,1);" >a. Keep abreast of other’s happenings<br> 
<INPUT TYPE="radio" NAME="q15" onClick="saver(2,3,1);" >b. Get behind on the news<br> 
 </br>
<p>16. In doing ordinary things are you more likely to:</p>
<INPUT TYPE="radio" NAME="q16" onClick="saver(3,5,1);" >a. Do it the usual way<br> 
<INPUT TYPE="radio" NAME="q16" onClick="saver(4,5,1);" >b. Do it your own way<br> 
 </br>
<p>17. Writers should:</p>
<INPUT TYPE="radio" NAME="q17" onClick="saver(3,6,1);" >a. “Say what they mean and mean what they say”<br> 
<INPUT TYPE="radio" NAME="q17" onClick="saver(4,6,1);" >b. Express things more by use of analogy<br> 
 </br>
<p>18. Which appeals to you more:</p>
<INPUT TYPE="radio" NAME="q18" onClick="saver(5,5,1);" >a. Consistency of thought<br> 
<INPUT TYPE="radio" NAME="q18" onClick="saver(6,5,1);" >b. Harmonious human relationships<br> 
 </br>
<p>19. Are you more comfortable in making:</p>
<INPUT TYPE="radio" NAME="q19" onClick="saver(5,6,1);" >a. Logical judgments<br> 
<INPUT TYPE="radio" NAME="q19" onClick="saver(6,6,1);" >b. Value judgments<br> 
 </br>
<p>20. Do you want things:</p>
<INPUT TYPE="radio" NAME="q20" onClick="saver(7,5,1);" >a. Settled and decided<br> 
<INPUT TYPE="radio" NAME="q20" onClick="saver(8,5,1);" >b. Unsettled and undecided<br> 
 </br>
<p>21. Would you say you are more:</p>
<INPUT TYPE="radio" NAME="q21" onClick="saver(7,6,1);" >a. Serious and determined<br> 
<INPUT TYPE="radio" NAME="q21" onClick="saver(8,6,1);" >b. Easy-going<br> 
 </br>
<p>22. In phoning do you:</p>
<INPUT TYPE="radio" NAME="q22" onClick="saver(1,4,1);" >a. Rarely question that it will all be said<br> 
<INPUT TYPE="radio" NAME="q22" onClick="saver(2,4,1);" >b. Rehearse what you’ll say<br> 
 </br>
<p>23. Facts:</p>
<INPUT TYPE="radio" NAME="q23" onClick="saver(3,7,1);" >a. “Speak for themselves”<br> 
<INPUT TYPE="radio" NAME="q23" onClick="saver(4,7,1);" >b. Illustrate principles<br> 
 </br>
<p>24. Are visionaries:</p>
<INPUT TYPE="radio" NAME="q24" onClick="saver(3,8,1);" >a. somewhat annoying<br> 
<INPUT TYPE="radio" NAME="q24" onClick="saver(4,8,1);" >b. rather fascinating<br> 
 </br>
<p>25. Are you more often:</p>
<INPUT TYPE="radio" NAME="q25" onClick="saver(5,7,1);" >a. a cool-headed person<br> 
<INPUT TYPE="radio" NAME="q25" onClick="saver(6,7,1);" >b. a warm-hearted person<br> 
 </br>
<p>26. Is it worse to be:</p>
<INPUT TYPE="radio" NAME="q26" onClick="saver(5,8,1);" >a. unjust<br> 
<INPUT TYPE="radio" NAME="q26" onClick="saver(6,8,1);" >b. merciless<br> 
 </br>
<p>27. Should one usually let events occur:</p>
<INPUT TYPE="radio" NAME="q27" onClick="saver(7,7,1);" >a. by careful selection and choice<br> 
<INPUT TYPE="radio" NAME="q27" onClick="saver(8,7,1);" >b. randomly and by chance<br> 
 </br>
<p>28. Do you feel better about:</p>
<INPUT TYPE="radio" NAME="q28" onClick="saver(7,8,1);" >a. having purchased<br> 
<INPUT TYPE="radio" NAME="q28" onClick="saver(8,8,1);" >b. having the option to buy<br> 
 </br>
<p>29. In company do you:</p>
<INPUT TYPE="radio" NAME="q29" onClick="saver(1,5,1);" >a. initiate conversation<br> 
<INPUT TYPE="radio" NAME="q29" onClick="saver(2,5,1);" >b. wait to be approached<br> 
 </br>
<p>30. Common sense is:</p>
<INPUT TYPE="radio" NAME="q30" onClick="saver(3,9,1);" >a. rarely questionable<br> 
<INPUT TYPE="radio" NAME="q30" onClick="saver(4,9,1);" >b. frequently questionable<br> 
 </br>
<p>31. Children often do not:</p>
<INPUT TYPE="radio" NAME="q31" onClick="saver(3,10,1);" >a. make themselves useful enough<br> 
<INPUT TYPE="radio" NAME="q31" onClick="saver(4,10,1);" >b. exercise their fantasy enough<br> 
 </br>
<p>32. In making decisions do you feel more comfortable with:</p>
<INPUT TYPE="radio" NAME="q32" onClick="saver(5,9,1);" >a. standards<br> 
<INPUT TYPE="radio" NAME="q32" onClick="saver(6,9,1);" >b. feelings<br> 
 </br>
<p>33. Are you more:</p>
<INPUT TYPE="radio" NAME="q33" onClick="saver(5,10,1);" >a. firm than gentle<br> 
<INPUT TYPE="radio" NAME="q33" onClick="saver(6,10,1);" >b. gentle than firm<br> 
 </br>
<p>34. Which is more admirable:</p>
<INPUT TYPE="radio" NAME="q34" onClick="saver(7,9,1);" >a. the ability to organize and be methodical<br> 
<INPUT TYPE="radio" NAME="q34" onClick="saver(8,9,1);" >b. the ability to adapt and make do<br> 
 </br>
<p>35. Do you put more value on:</p>
<INPUT TYPE="radio" NAME="q35" onClick="saver(7,10,1);" >a. infinite<br> 
<INPUT TYPE="radio" NAME="q35" onClick="saver(8,10,1);" >b. open-minded<br> 
 </br>
<p>36. Does new and non-routine interaction with others:</p>
<INPUT TYPE="radio" NAME="q36" onClick="saver(1,6,1);" >a. stimulate and energize you<br> 
<INPUT TYPE="radio" NAME="q36" onClick="saver(2,6,1);" >b. tax your reserves<br> 
 </br>
<p>37. Are you more frequently:</p>
<INPUT TYPE="radio" NAME="q37" onClick="saver(3,11,1);" >a. a practical sort of person<br> 
<INPUT TYPE="radio" NAME="q37" onClick="saver(4,11,1);" >b. a fanciful sort of person<br>
 </br> 
<p>38. Are you more likely to:</p>
<INPUT TYPE="radio" NAME="q38" onClick="saver(3,12,1);" >a. see how others are useful<br> 
<INPUT TYPE="radio" NAME="q38" onClick="saver(4,12,1);" >b. see how others see<br> 
 </br>
<p>39. Which is more satisfying:</p>
<INPUT TYPE="radio" NAME="q39" onClick="saver(5,11,1);" >a. to discuss an issue thoroughly<br> 
<INPUT TYPE="radio" NAME="q39" onClick="saver(6,11,1);" >b. to arrive at agreement on an issue<br> 
 </br>
<p>40. Which rules you more:</p>
<INPUT TYPE="radio" NAME="q40" onClick="saver(5,12,1);" >a. your head<br> 
<INPUT TYPE="radio" NAME="q40" onClick="saver(6,12,1);" >b. your heart<br> 
 </br>
<p>41. Are you more comfortable with work that is:</p>
<INPUT TYPE="radio" NAME="q41" onClick="saver(7,11,1);" >a. contracted<br> 
<INPUT TYPE="radio" NAME="q41" onClick="saver(8,11,1);" >b. done on a casual basis<br>
 </br> 
<p>42. Do you tend to look for:</p>
<INPUT TYPE="radio" NAME="q42" onClick="saver(7,12,1);" >a. the orderly<br> 
<INPUT TYPE="radio" NAME="q42" onClick="saver(8,12,1);" >b. whatever turns up<br> 
 </br> 
<p>43. Do you prefer:</p>
<INPUT TYPE="radio" NAME="q43" onClick="saver(1,7,1);" >a. many friends with brief contact<br> 
<INPUT TYPE="radio" NAME="q43" onClick="saver(2,7,1);" >b. a few friends with more lengthy contact<br> 
 </br>
<p>44. Do you go more by:</p>
<INPUT TYPE="radio" NAME="q44" onClick="saver(3,13,1);" >a. facts<br> 
<INPUT TYPE="radio" NAME="q44" onClick="saver(4,13,1);" >b. principles<br> 
 </br>
<p>45. Are you more interested in:</p>
<INPUT TYPE="radio" NAME="q45" onClick="saver(3,14,1);" >a. production and distribution<br> 
<INPUT TYPE="radio" NAME="q45" onClick="saver(4,14,1);" >b. design and research<br> 
 </br>
<p>46. Which is more of a compliment:</p>
<INPUT TYPE="radio" NAME="q46" onClick="saver(5,13,1);" >a. “There is a very logical person.”<br> 
<INPUT TYPE="radio" NAME="q46" onClick="saver(6,13,1);" >b. “There is a very sentimental person.”<br> 
 </br>
<p>47. Do you value in yourself more that you are:</p>
<INPUT TYPE="radio" NAME="q47" onClick="saver(5,14,1);" >a. unwavering<br> 
<INPUT TYPE="radio" NAME="q47" onClick="saver(6,14,1);" >b. devoted<br> 
 </br>
<p>48. Do you more often prefer the</p>
<INPUT TYPE="radio" NAME="q48" onClick="saver(7,13,1);" >a. final and unalterable statement<br> 
<INPUT TYPE="radio" NAME="q48" onClick="saver(8,13,1);" >b. tentative and preliminary statement<br> 
 </br>
<p>49. Are you more comfortable:</p>
<INPUT TYPE="radio" NAME="q49" onClick="saver(7,14,1);" >a. after a decision<br> 
<INPUT TYPE="radio" NAME="q49" onClick="saver(8,14,1);" >b. before a decision<br> 
 <br> 
 <br> 

<br> 
<INPUT TYPE="button" class="btn" NAME="result" Value="Result" onClick="total()" > 
<span> 

</FORM> 
</BODY> 
</HTML>  