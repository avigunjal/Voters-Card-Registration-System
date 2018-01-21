 <!DOCTYPE html>
 <html lang="en">
<head>
       <title>Adhar card registratuion form</title>
 <style>
    .first{
        color: red;
	line-height: 24px;
	font-size: 11px;
	background: rgba(0, 0, 0, 0.05);
	text-transform: uppercase;
	z-index: 9999;
	position: relative;
	box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
}
.first a{
	padding: 0px 10px;
	letter-spacing: 1px;
	color:green;
	text-shadow: 0px 1px 1px #fff;
	display: block;
	float: left;
}
.first a:hover{
	background: #fff;
}
input[type="text"],[type="radio"]{padding:6px;margin:6px; border-radius:10px;border:2px black groove; width: 250px;font-size:15px;
	font-weight:500;color:blue;text-transform:uppercase;font-family: Verdana, Arial, Helvetica, sans-serif;}

	select{padding:2px;margin:5px;color:blue;text-transform:uppercase;}
	input[type=""]{padding:2px;margin:6px; border-radius:10px;border:2px black groove; width: 250px;font-size:15px;
	font-weight:500;color:blue;text-transform:uppercase;font-family: Verdana, Arial, Helvetica, sans-serif;}
     body{margin:5px 30px; background:gray;}
        table{box-shadow: 0px 0px 50px rgba(4, 129, 177, 0.5) }
  th{text-align:center;}
	table{width:900px;}
    td{color:green;padding:8px 20px;margin:auto;text-align:left;font-weight:500;font-family:Linux Libertine Display; }
    table,th,td{border-bottom:1px inset green; border-radius:10px;padding:05x;margin-top:5px;margin:10px;background:#f5fcfe;}
    input{padding:2px;margin: 5px; border-radius:8px;border:1px black groove; width: 300px;font-weight:600;color:black;}
    input:focus{box-shadow:0px 0px 20px rgba(4, 129, 177, 0.5);
        opacity:3.5; font-weight:600; color:black;}
	input:disabled{color:red;font-family:  monospace;}
	input:focus{background:lightgray;color:black;}
#sdate,input{padding:5px;margin: 10px; border-radius:8px;border:1px black groove; width: 400px;font-weight:600;color:red;text-transform:capitalize;text-align:center;font-size:15px;}
    #sdate,input:focus{box-shadow:0px 0px 20px rgba(4, 129, 177, 0.5);
        opacity:3.5; font-weight:600; color:red;background:black;}
	input:disabled{color:red;font-family:  monospace;}
	input:focus{background:lightgray;color:black;}
	#mr{border-radius: 20px;padding:12px;margin:10px;}
    textarea {
        padding:3px;
        width:50%;
        height:100px;
        color:black;
        font-size:15px;
	font-weight:500;color:blue;text-transform:uppercase;font-family: Verdana, Arial, Helvetica, sans-serif;
    }
    input[type="submit"]
    {
    background: #4b8df9; display:inline-block; padding: 5px 10px 6px; color: #fbf7f7;
    text-decoration: none; font-weight: bold; line-height: 1;text-align:center;margin:20px 200px 10px;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;text-transform:capitalize;
    }
    .form input.sub:hover{ background-color: #2a78f6;}
    <!--back to home-->      
</style>
<body  onload="startTime()">
    <div class="first">
<a href="index.php" target=""><img src="photos/login/home.png" alt="home"/>Back to Home page</strong></a>
 </div>
<marquee align=middle behavior=alternate direction=right bgcolor="pink" hspace=100 id="mr">
<font color="blue" size=6 face="Liberation Sans Narrow">Online Adhar Card  Form Registration...</font>
</marquee>
<br><br>
*Fill details in capitals.
may left blank unnecessary fields..

<form action="http://localhost/voters/php/Aadhar.php" name="aadhar" onsubmit="return Validate()" method="POST">
<br>
   <script>function startTime()
{
    var d=new Date();
    document.getElementById('sdate').value=d.toLocaleString();
    t=setTimeout(function(){startTime()},500);
}
</script>
<b>Form submission Date:</b><font color="red"><input id="sdate" type="text" placeholder="" name="sdate" ></font>
<fieldset><legend><blink>Part A: Primary Details</blink></b></legend>
Details of applicant:
<table>
<tr><td>No.</td><td>Questions</td><td>Ans</td><tr>
    <td>1</td><td>LoginID:</td><td><input style="color:red;" id="loginid" type="text" name="login_id" readonly="readonly"
				maxlength="30" value="<?php session_start();echo $_SESSION['login_id']?>" onblur="window.alert('Do not change your login_id')"></td></tr> 
<tr> <td>a</td><td>First name</td><td><input type=text name="AFName" readonly="readonly" value="<?php echo $_SESSION['fname']?>"></td></tr><tr> <td>b</td><td>Last name</td><td><input type=text name="ALName" readonly="readonly"  value="<?php echo $_SESSION['lname']?>"></td>
</tr>
</tr></table>
<table>
<tr>
<td>2.</td>
<td>Date of Birth:</td>

<td>
<table>
<tr>
<td>Day</td><td>Month</td><td>Year</td></tr>
<tr>
<td><select name=BDay>
<option value="1" selected>01
<option value="2">02
<option value="3">03
<option value="4">04
<option value="5">05
<option value="6">06
<option value="7">07
<option value="8">08
<option value="9">09
<option value="10">10
<option value="11">11
<option value="12">12
<option value="13">13
<option value="14">14
<option value="15">15
<option value="16">16
<option value="17">17
<option value="18">18
<option value="19">19
<option value="20">20
<option value="21">21
<option value="22">22
<option value="23">23
<option value="24">24
<option value="25">25
<option value="26">26
<option value="27">27
<option value="28">28
<option value="29">29
<option value="30">30
<option value="31">31
</select></td>

<td ><select name=BMonth>
<option value="1" selected>January
<option value="2">Febuary
<option value="3">March
<option value="4">April
<option value="5">May
<option value="6">June
<option value="7">July
<option value="8">August
<option value="9">September
<option value="10">October
<option value="11">November
<option value="12">December
</select></td>

<td ><select name=BYear>
<option value="2015">2015
<option value="2014" selected>2014
<option value="2013">2013
<option value="2012">2012
<option value="2011">2011
<option value="2010">2010
<option value="2009">2009
<option value="2008">2008
<option value="2007">2007
<option value="2006">2006
<option value="2005">2005
<option value="2004">2004
<option value="2003">2003
<option value="2002">2002
<option value="2001">2001
<option value="2000">2000
<option value="1999">1999
<option value="1998">1998
<option value="1997">1997
<option value="1996">1996
<option value="1995">1995
<option value="1994">1994
<option value="1993">1993
<option value="1992">1992
<option value="1991">1991
<option value="1990">1990
<option value="1989">1989
<option value="1988">1988
<option value="1987">1987
<option value="1986">1986
<option value="1985">1985
<option value="1984">1984
<option value="1983">1983
<option value="1982">1982
<option value="1981">1981
<option value="1981">1980
</select></td>
</tr>
</table>
</tr>

<tr>
<td>3.</td>
<td>Gender:</td>
<td colspan=2>
<table>
<tr><td><input type=radio name=gender value=Male>Male</td></tr>
<tr><td><input type=radio name=gender value=Female>Female</td></tr>
<tr><td><input type=radio name=gender value=Transgender>Transgender</td></tr>
</table>
</td>
</tr>

<tr>
<td>4.</td>
<td>Full Address:</td>
<td><textarea name=Address rows=3 cols=10></textarea> </td>
</tr>

<tr>
<td>5.</td>
<td>House No. and Name:</td>
<td><input type=text name=House size=40></td>
</tr>

<tr>
<td>6.</td>
<td>Street No. and Name:</td>
<td><input type=text name=Street size=40></td>
</tr>

<tr>
<td>7.</td>
<td>Landmark:</td>
<td><input type=text name=Landmark size=40></td>
</tr>


<tr>
<td>8.</td>
<td>Village/Town/City:</td>
<td><input type=text name=Village></td>
</tr>


<tr>
<td>9.</td>
<td>District:</td>
<td><input type=text name=District></td>
</tr>


<tr>
<td>10.</td>
<td>State:</td>
<td><input type=text name=State></td>
</tr>

<tr>
<td>11.</td>
<td>Pin Code:</td>
<td><input type=text name=Pincode></td>
</tr>

</table>
</fieldset>

<fieldset><legend><blink>Part B: Relation Details</blink>(compulsory for children less than 5 years of age)</legend>

Details of Parents:
<table>
<tr>
<td >No.</td>
<td >Questions</td>
<td >Ans.</td>
</tr>


<tr>
<td >1.</td>
<td >Full Name:</td>
<td>
<table>
<tr>
<td >First name</td><td >Middel name</td><td >Last name</td></tr>
<tr>
<td><input type=text name="PFName"></td>
<td><input type=text name="PMName"></td>
<td><input type=text name="PLName"></td>
</tr></table>
</td>
</tr>

<tr>
<td >2.</td>
<td >Relationship:</td>
<td ><select name=Relation>
<option value="Mother" selected>Mother
<option value="Father">Father
<option value="Wife">Wife
<option value="Husband">Husband
<option value="Guardian">Guardian
</select>
</td>
</tr>

<tr>
<td >3.</td>
<td >Aadhar/Enrolment Number:</td>
<td ><input type=text name=Eno></td>
</tr>
</table>
</fieldset>

<fieldset><legend><blink>Part C: Additional Information</blink></legend>
<table>
<tr>
<td >No.</td>
<td >Questions</td>
<td >Ans.</td>
</tr>


<tr>
<td >1.</td>
<td >Mobile No.:</td>
<td><input type=text name="mobno"></td>
</tr>

<tr>
<td >2.</td>
<td >Email:</td>
<td ><input type=text name=email size=30></td>
</tr>
</table>
</fieldset>

<fieldset><legend><blink>Part D: Financial Information</blink>(optional)</legend>

Details of Bank 
<table>
<tr>
<td >1.</td>
<td >You want to link your existing<br> bank A/c to Aadhar:</td>
<td >
<table><tr><td><input type=radio name=bank>Yes</td></tr>
<tr><td><input type=radio name=bank>No</td></tr></table>
</td>
</tr>

<tr>
<td >2.</td>
<td >Bank Branch:</td>
<td><input type=text name=Branch></td>
</tr>

<tr>
<td >3.</td>
<td >Bank A/c No.:</td>
<td><input type=text name=Accno></td>
</tr>

<tr>
<td >4.</td>
<td >Bank Name:</td>
<td><input type=text name=BName></td>
</tr>

<tr>
<td >5.</td>
<td >Bank IFSC Code:</td>
<td><input type=text name=IFSC></td>
</tr>


</table>
<input type=submit value="Save" class="first">
<input type="reset" style="background:#ff88cc;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:capitalize;
        color:#eee;
        cursor: pointer;
        font-size: 15px;
        font-weight:600;" name="reset" value="reset">

</form>
</body>
</html> 
