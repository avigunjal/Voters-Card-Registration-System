<?php
session_start();
?>
<!DOCTYPE html>
 <html lang="en">
<head>
       <title>Form-18</title>
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
        width:96%;
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
<script src="http://localhost/voters/script/Form18.js"></script>
</head>
<body onload="startTime()">
    <div class="first">
<a href="index.php" target=""><img src="photos/login/home.png" alt="home"/>Back to Home page</strong></a>
 </div>
<marquee align=middle behavior=alternate direction=right bgcolor="pink" hspace=100 id="mr">
<font color="blue" size=6 face="Liberation Sans Narrow">Online Electoral Roll Form Registration for Graduate's Constituency </font>
</marquee>
<br><br>
*Fill details in capitals.
may left blank unnecessary fields..

<form action="http://localhost/voters/php/Form18.php" name="Form18" onsubmit="return Validate()" method="POST">
   <script>function startTime()
{
    var d=new Date();
    document.getElementById('sdate').value=d.toLocaleString();
    t=setTimeout(function(){startTime()},500);
}

</script>
<b>Form submission Date:</b><input id="sdate" type="text" placeholder="" name="sdate" >
<fieldset><legend><b><h3><blink><font color=pink>Part A:Applicant Details</font></blink></h3></b></legend>
<table>
<tr>
<td ><h3>No.</h3></td>
<td ><h3>Questions</h3></td>
<td ><h3>Ans.</h3></td>
</tr>
<tr><td>0.</td>
    <td>LoginID:</td><td><input style="color:red;" id="loginid" type="text" name="login_id" readonly="readonly"
				maxlength="30" value="<?php session_start();echo $_SESSION['login_id']?>" onblur="window.alert('Do not change your login_id')"></td></tr>
<tr>
<td ><b>1.</td>
<td ><b>Full Name :</td>
<td>
<table>
<tr>
<td ><b>First name</td><td ><b>Last name</td></tr>
<tr>
<td><input type=text name="F_Name" readonly="readonly" value="<?php echo $_SESSION['fname']?>"></td>
<td><input type=text name="L_Name" readonly="readonly"  value="<?php echo $_SESSION['lname']?>"></td>
</tr></table>
</td>
</tr>

<tr>
<td ><b>2.</td>
<td ><b>Date of Birth :</td>

<td >
<table>
<tr>
<td ><b>Day</td><td ><b>Month</td><td ><b>Year</td><td >Age</td></tr>
<tr>
<td ><select name=BDay>
<option value=0 selected>Select
<option value="01">01
<option value="02">02
<option value="03">03
<option value="04">04
<option value="05">05
<option value="06">06
<option value="07">07
<option value="08">08
<option value="09">09
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
<option value=0 selected>Select
<option value="January">January
<option value="Febuary">Febuary
<option value="March">March
<option value="April">April
<option value="May">May
<option value="June">June
<option value="July">July
<option value="August">August
<option value="September">September
<option value="October">October
<option value="November">November
<option value="December">December
</select></td>

<td ><select name=BYear>
<option value=0 selected>Select
<option value="2015">2015
<option value="2014">2014
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
<option value="1980">1980
<option value="1979">1979
<option value="1978">1978
<option value="1977">1977
<option value="1976">1976
<option value="1975">1975
<option value="1974">1974
<option value="1973">1973
<option value="1972">1972
<option value="1971">1971
<option value="1970">1970
<option value="1969">1969
<option value="1968">1968
<option value="1967">1967
<option value="1966">1966
<option value="1965">1965
<option value="1964">1964
<option value="1963">1963
<option value="1962">1962
<option value="1961">1961
<option value="1960">1960
<option value="1959">1959
<option value="1958">1958
<option value="1957">1957
<option value="1956">1956
<option value="1955">1955
<option value="1954">1954
<option value="1953">1953
<option value="1952">1952
<option value="1951">1951
<option value="1950">1950
</select></td>
<td><input type=text name=Age size=5></td>
</tr>
</table>
</tr>

<tr>
<td ><b>3.</td>
<td ><b>Gender:</td>
<td  colspan=2>
<table>
<tr><td><input type=radio name=Gender value=Male checked>Male</td></tr>
<tr><td><input type=radio name=Gender value=Female>Female</td></tr>
<tr><td><input type=radio name=Gender value=Transgender>Transgender</td></tr>
</table>
</td>
</tr>


<tr>
<td ><b>4.</td>
<td ><b>Father's/ Mother's/ Husband's<br> Name:</td>
<td ><table>
<tr>
<td ><b>First name</td><td ><b>Middel name</td><td ><b>Last name</td></tr>
<tr>
<td><input type=text name="F_F_Name"></td>
<td><input type=text name="F_M_Name"></td>
<td><input type=text name="F_L_Name"></td>
</tr></table></td>
</tr>


<tr>
<td ><b>5.</td>
<td ><b>House address<br> (Place of ordinary residence)  :</td>
<td ><input type=text name="House_Address" size=60></td>
</tr>

<tr>
<td ><b>6.</td>
<td ><b>Occupation :</td>
<td ><input type=text name="Occupation"></td>
</tr>


<tr>
<td ><b>7.</td>
<td ><b>Qualification :</td>
<td ><input type=text name="Qualification"></td>
</tr>

<tr>
<td ><b>8.</td>
<td ><b>House No :</td>
<td ><input type=text name="House_No"></td>
</tr>

<tr>
<td ><b>9.</td>
<td ><b>Street/Mohalla :</td>
<td ><input type=text name="Street_noName"></td>
</tr>

<tr>
<td ><b>10.</td>
<td ><b>Town/Village :</td>
<td ><input type=text name="Village"></td>
</tr>

<tr>
<td ><b>11.</td>
<td ><b>Post Office :</td>
<td ><input type=text name="Post_Office"></td>
</tr>

<tr>
<td ><b>12.</td>
<td ><b>Police Station/Tehsil/Taluka :</td>
<td ><input type=text name="Tehasil"></td>
</tr>

<tr>
<td ><b>13.</td>
<td ><b>District:</td>
<td ><input type=text name="District"></td>
</tr>

<tr>
<td ><b>14.</td>
<td ><b>Pin Code:</td>
<td ><input type=text name="Pin_code" size=8></td>
</tr>

</table>
<input type="submit" name="submit" value="submit" class="sub" onclick="validate()"> <input type="reset" style="background:#ff88cc;
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
