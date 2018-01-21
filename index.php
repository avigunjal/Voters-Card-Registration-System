<!doctype html>
    <?php
    session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index page</title>

<link rel="stylesheet" href="css/style_menu.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />


 <script>function startTime()
{
    var today=new Date();
   today.toDateString();
    document.getElementById('tex').innerHTML=today;
 }

 </script>
</head>
<body onload="startTime()">
<div id="container">
<header> 
<div class="width">
<h1><a href="http://localhost/voters/index.php"> <!--<marquee align=middle behavior="scroll" direction=left>-->
Voters ID card<strong> Registration</strong> Website...</a></h1>
<img style="float:right;height:40%;width:16%;margin-top:5px;display:block;padding:5px;background:white;border-radius:20px;" src="photos/voter-registration.jpg" alt="register to vote"/>
    <ul id="nav">
        <li class="current"><a href="http://localhost/voters/index.php">Home</a></li>
        <li><a href="#">Application</a>
            <ul>
                <li><a href="#">form-6</a>
            <ul>
                <li><a href="form6info.html">Application for inclusion of name</a></li>
                <li><a href="form6info.html">How to fill up</a></li></li></ul>
                <li><a href="#">form-6A</a>
                    <ul>
                        <li><a href="form6Ainfo.html">Application for inclusion of name in electoral roll by an overseas elector</a></li>
                        <li><a href="form6Ainfo.html">how to fill up</a></li>
                    </ul>
                </li>
                <li><a href="#">form-7</a>
                   <ul>
                        <li><a href="form7info.html">application for deletion of name in electoral roll</a></li>
                        <li><a href="form7info.html">how to fill up</a></li></ul>

                <li><a href="#">form-8</a>
                     <ul>
                        <li><a href="form8info.html">Application for correction to particulars entered in electoral roll</a></li>
                        <li><a href="form8info.html">how to fill up</a></li></ul>

                 <li><a href="#">form-8A</a>
                     <ul>
                        <li><a href="form8Ainfo.html">Application for transposition of entry in electoral roll</a></li>
                        <li><a href="form8Ainfo.html">how to fill up</a></li></ul>

               <li><a href="#">Graduates constituency</a>
                     <ul>
                        <li><a href="http://localhost/voters/Form18.php">Application for Graduates constituency</a></li>
                        </ul>
<li><a href="#">Teachers constituency</a>
                     <ul>
                        <li><a href="http://localhost/voters/Form19.php">Application for Teachers constituency</a></li>
                       </ul> 
                        <li><a href="http://localhost/voters/Aadhar.php">Application for Adhar Card</a></li>
                     
            </ul>
        </li>
        <li><a href="#">service status</a>
            <ul>
               <li><a href="http://localhost/voters/complaint.php">Complaint</a>
                   <li><a href="http://localhost/voters/Enquiry.php">Enquiry</a></li>
                   </ul>
        </li>
        <li><a href="http://localhost/voters/print.php">Print form</a>
 <ul>
               <li><a href="http://localhost/voters/print.php">Form-6</a>
                   <li><a href="http://localhost/voters/print2.php">Form-6A</a></li>
 <li><a href="http://localhost/voters/print3.php">Form-7</a>
                   <li><a href="http://localhost/voters/print4.php">Form-8</a></li>

                   <li><a href="http://localhost/voters/print5.php">Form-8A</a></li>

                   <li><a href="http://localhost/voters/print6.php">Form-18</a></li>

                   <li><a href="http://localhost/voters/print7.php">Form-19</a></li>
<li><a href="http://localhost/voters/printadhar.php">Adhar</a></li>
                   </ul></li>
        <li><a href="http://localhost/voters/edoc.php">E-documents</a>
          <ul><li><a href="http://localhost/voters/edoc.php">Upload Document</a></li> 
              <li><a href="http://localhost/voters/php/downloadDoc.php">Use E-Document</a></li> 
</ul></li>
		<li><a href="Pmlist.html">Information</a></li>
		<li><a href="aboutus.html">About us</a></li>
		<li><a href="logout.php ">Log out</a></li>
    </ul>
</div>
<div class="clear"></div>
</nav>

<div class="clear"></div>

<!--av!-- information section-->
</header>

<div id="intro">
<div class="width">
<div class="intro-content">
	<h2 style="display:block;box-shadow:0px 0px 25px purple;border-radius:10px;">Hello Welcome <b style="color:blue;text-transform:capitalize;"><?php echo $_SESSION['fname']; echo " ".$_SESSION['lname']; ?></b> </h2>
	
 <p style="opacity:5.8";><marquee align=middle behavior="scroll" direction=up scrollamount="1.9">
<font color="#000000" size=5 face="Liberation Sans Narrow">
<font size=10>O</font>nline Voters id card registration Website provide easy services for you
Please read form related information
<center> carefully and fill the Application forms
and get your voters id card within time</center> <br>
<center>"BE VOTER OF INDIA"<br>THANK YOU!!!</center></font></marquee></p>
 
<p><a href="#" class="button button-slider"><i class="fa fa-gbp">Candidates Information</i></a>
<a href="#" class="button button-reversed button-slider"><i class="fa fa-info">
    
</i> News of Election</a></p>
</div>
 </div>
</div>
<div id="body" class="width">
<section id="content" class="two-column with-right-sidebar">
<article>
				
			
<h5 style="font-family:Earwig Factory;">Who Can Vote in India</h5>
 <a href="http://www.elections.in" title="election">http://www.elections.in/</a>.</p>
<br>
<p><h4>Voting System in India</h4>
<div id="voting">
The Indian Constitution confers voting rights on any individual who is a citizen of the country and is above 18 years of age. This minimum-age limit came into effect from March 28, 1989, prior to which it was 21 years. The Constitution does not differentiate between male and female voters,
bestowing on them equal rights, thus making their votes carry equal weight. On the same lines, no distinctions is made on the basis of colour, race, cast, etc., as long as the said individual is a bonafide citizen of India.
</div>
<h4>Process of voting registration</h4>
<div id="voting">
In order to be allotted a polling booth at the time of elections, citizens over 18 years of age are required to register themselves as voters. They can do the same by filling up and submitting <strong> Form-6 </strong> to the Electoral Registration Officer of their constituency. Voters are not allowed to enrol at more than one place. Further, the voting rights are restricted to the current place of work and residence. For example, if someone is native to Gujarat but happens to be working in Mumbai, he or she is eligible to vote only for that constituency of Mumbai.
</div>
<h4>Voting rights of criminals</h4>
<div id="voting">
Convicted criminals and prisoners are banned from participating in the elections as voters. On the same note, those with unstable mental condition are refrained from voting. That said, lobbying efforts are ongoing from various states that argue for greater human rights for prisoners. According to them, prisoners too are citizens of the country—and therefore, part of the Republic—and thus deserve equal participation in elections. However, the cause has not found widespread support yet.
</div>
<h4>Non-Resident Indians (NRI)</h4>
<div id="voting">
In order to qualify as a voter, the person must reside in the particular constituency. Thus, NRIs are prohibited from participating in the voting process, except in one case. If the NRI happens to be an Indian citizen employed under Government of India and is currently posted overseas, he or she may get registered as a voter.
</div>
<h4>Use of Electronic Voting Machines (EVMs)</h4>
<div id="voting">
EVMs were introduced by the Election Commission in 1981 in a small district of Kerala. The machines require only a single press of button to cast the vote, reducing manifold both the time taken to conduct the poll and the time required to process and declare results. Their use has brought about a sea change in the way elections are conducted in India. However, as various Public Interest Litigations (PILs) have argued, the machines are not tamper-proof and may be easily manipulated.

To overcome these limitations, the Voter-Verified Paper Audit Trail (VVPAT) system has been adopted, which shows a printout of the vote just cast by the voter, confirming that the vote was counted in favour of the party intended. This paper trail can later be used to verify the data obtained through the machines, should a case of suspicion arise.</div> </p>	
<ul class="styledlist">
        <li><a href="www.elections.in" target=_blank>www.elections.in</a></li>
        <li><a href="www. eci.nic.in" target=_blank>www. eci.nic.in</a></li>
 	<li><a href="www.ceo.maharashtra.gov.in" target=_blank>www.ceo.maharashtra.gov.in</a></li>
         <li>Toll Free Number "1950"</li>
</div>
</article>
	
<article class="expanded">

<h2 style="color:green;background:#FFFFCC; text-decoration:none;padding:20px;margin:0px 10px;border-radius:20px;">Importance of Elections in India</h2>
<div class="article-info">Posted on <i id="tex"></i> by <a href="#" rel="author">Gunjal Avi</a></div>
 <p>
Elections form the bedrock of the largest democracy in the world - India. Since Independence, as many as 15 Lok Sabhas have been formed through elections, the first one being held in 1951-52. The methodology of election is through universal adult suffrage, whereby every citizen of India over 18 years of age is an eligible
voter in the eyes of the Constitution.

The importance of elections in India—and for that matter, in any democracy—is as follows:
</p><p><i style="color:red;text-decoration:underline;">Choice of leadership:</i> Elections provide a way for the citizens of India to choose their leaders. They do so by casting their vote in favour of the candidate or party whose views appeal to them. This ensures that the will of the people is reflected in the elected candidates.
<br>
<i style="color:red;text-decoration:underline;">Change of leadership:</i> Elections in India are also a platform for the public to voice their resentment against a ruling party. By voting for other parties and helping elect a different government, citizens demonstrate that they possess ultimate authority.
<br>
<i style="color:red;text-decoration:underline;">Political participation:</i> Elections open the door for new issues to be raised in public. If a citizen of India wishes to introduce reforms that are not the agenda of any of the parties, he or she is free to contest the elections either independently or by forming a new political party.
<br>
<i style="color:red;text-decoration:underline;">Self-corrective system:</i> Because elections are a regular exercise, occurring every five years in India, the ruling parties are kept in check and made to consider the demands of the public. This works as a self-corrective system whereby political parties review their performance and try to appease the voters.

With a population of over 1.2 billion (according to the 2011 census) spread across 28 states and 7 union territories, India has a system of elections that is both daunting and praiseworthy.
</p>
 
<a href="#" class="button">Read more</a>

</article></section>
        
 <aside class="sidebar big-sidebar right-sidebar">
<img style="width:300px;height:300px;padding:10px;display:block;background:black;border:2px inset black;border-radius:10px;" src="http://localhost/voters/photos/vot.png" alt="vote photo"/>	
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
    <div class="clear"></div>
</div>
<div class="footer-bottom" style="display:block;box-shadow:5px -10px 30px blue;">
<p style="color:white;font-size:15px;font-weight:500;">&copy; Dept. of Computer Science,Sangamner College,Sangamner.</p>
</div>
</footer>
</div>
</body>
</html>
