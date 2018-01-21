<?php
session_start();
?>
<!DOCTYPE html>
 <html lang="en">
<head>
       <title>Form-6</title>
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
    td{color:black;padding:8px;margin:auto;text-align:left;font-weight:500; }
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
    <script>
function place_check()
{
			
var alphaExp = /^[a-z A-Z]+$/;
if(pname.value.match(alphaExp))
{
return true;
    }
else
     {
    alert("Enter Valid Place Name");
    document.form1.pname.value="";
    document.form1.pname.focus();
			
    }
    }
    function fname_check()
{
			
var alphaExp = /^[a-z A-Z]+$/;
if(fname.value.match(alphaExp))
{
return true;
    }
else
     {
    alert("Enter Valid Father Name");
    document.form1.fname.value="";
    document.form1.fname.focus();		
    }
    }
        function lname_check()
{
			
var alphaExp = /^[a-z A-Z]+$/;
if(lname.value.match(alphaExp))
{
return true;
    }
else
     {
    alert("Enter Valid Father LastName");
    document.form1.lname.value="";
    document.form1.lname.focus();
			
    }
    }
    function d_check()
    {
    var z=document.form1.dname.value;
    var alphaExp = /^[a-z A-Z]+$/;
    if(dname.value.match(alphaExp))
    {
    return true;
    }
else
    {
    alert("Enter Valid District Name");
    document.form1.dname.value="";
    document.form1.dname.focus();
			
    }
}
function color_check()
{
var alphaExp = /^[a-z A-Z]+$/;
if(color1.value.match(alphaExp))
{
return true;
    }
else
     {
    alert("Enter Valid color Name");
    document.form1.color1.value="";
    document.form1.color1.focus();
			
    }
}
function city_check()
    {
	var z=document.form1.city.value;
	var alphaExp = /^[a-z A-Z]+$/;
    if(city.value.match(alphaExp))
    {
    return true;
    }
else
        {
    alert("Enter Valid City");
    document.form1.city.focus();
    document.form1.city.value="";
    return false;
	}

    }
    function mobile()
    {
var z=document.form1.mobno.value;
if(z.length!=10)
	{
	alert("Enter Valid Mobile Number\n [ Exactly 10 Digits ]");
	document.form1.mobno.value="";
	document.form1.mobno.focus();

	}

	if (z.charAt(i) < "0" || z.charAt(i) > "9") 
	{
	alert("Mobile Number must only contain numbers");
	document.form1.mobno.value="";
	document.form1.mobno.focus();
	}
	}
function house_check()
    {
var z=document.form1.hno.value;
if(z.length<=10)
{
alert("Enter Valid house Number");
document.form1.hno.value="";
document.form1.hno.focus();
}
}
function state_check()
    {
var z=document.form1.state.value;
var alphaExp = /^[a-z A-Z]+$/;
	if(state.value.match(alphaExp))
        {
		return true;
	}
else
        {
		alert("Enter Valid State name!!");
		document.form1.state.value="";
		document.form1.state.focus();
		return false;
	}

    }
 function zip_check()
    {
    var p1=document.form1.pin.value;
if(p1.length!=6)
{
alert("Enter Valid Pincode\n[ Exact 6 Digits ]");
document.form1.pin.value="";
document.form1.pin.focus();
}
    for (i=0; i<p1.length; i++)
{
  if (p1.charAt(i) < "0" || p1.charAt(i) > "9") 
{
    alert("Pin Code must only contain numbers");
    document.form1.pin.value="";
    document.form1.pin.focus();
}
}}
 </script>
</head>

<body onload="startTime()">
    <div class="first">
<a href="index.php" target=""><img src="photos/login/home.png" alt="home"/>Back to Home page</strong></a>
 </div>
<marquee align=middle behavior=alternate direction=right bgcolor="pink" hspace=100 id="mr">
<font color="blue" size=6 face="Liberation Sans Narrow">Online Electoral Roll Form Registration...</font>
</marquee>
<br><br>
*Fill details in capitals.
may left blank unnecessary fields..

<form action="http://localhost/voters/php/form6Insert.php" method="POST" name="form1">
   <script>function startTime()
{
    var d=new Date();
    document.getElementById('sdate').value=d.toLocaleString();
    t=setTimeout(function(){startTime()},500);
}

</script>
<b>Form submission Date:</b><input id="sdate" type="text" placeholder="" name="sdate" >
<br><fieldset><legend><font color="black"><b><blink>Applicant's
details: <img src="photos/applicants.png" alt="applicant"/ ></blink></b></font></legend>
<center><table>
<tr>
    <td>LoginID:</td><td><input style="color:red;" id="loginid" type="text" name="login_id" readonly="readonly"
				maxlength="30" value="<?php session_start();echo $_SESSION['login_id']?>" onblur="window.alert('Do not change your login_id')"></td></tr>
<tr>
    <td>Name:</td><td><input style="color:red;" type="text" name="fname" readonly="readonly" maxlength="30" value="<?php echo $_SESSION['fname']?>"></td></tr>
<tr><td>Surname(if any): </td><td><input style="color:red;" type="text" name="lname" readonly="readonly" value="<?php echo $_SESSION['lname']?>"></td></tr><br><br>
<tr><td>Ditrict:</td><td><SELECT id=state name="district" ><OPTION selected value="Select One">Select One</OPTION>
							<OPTION value="Ahemadnagar">Ahemadnagar</OPTION>
							<OPTION value="thane">thane</OPTION>
							<OPTION value="pune">pune</OPTION>
							<OPTION value="Mumbai">Mumbai</OPTION>
							<OPTION value="nagpur">nagpur</OPTION>
							<OPTION value="solapur">solapur</OPTION>
							<OPTION value="jalgon">jalgon</OPTION>
							<OPTION value="kolhapur">kolhapur</OPTION>
							<OPTION value="aurangabad">aurangabad</OPTION>
							<OPTION value="nanded">nanded</OPTION>
							<OPTION value="mumbai city">mumbai city</OPTION>
							<OPTION value="satara">satara</OPTION>
							<OPTION value="amravati">amravati</OPTION>
							<OPTION value="sangli">sangli</OPTION>
							<OPTION value="yavatmal">yavatmal</OPTION>
							<OPTION value="raigarh">raigarh</OPTION>
							<OPTION value="buldana">buldana</OPTION>
							<OPTION value="bid">bid</OPTION>
							<OPTION value="latur">latur</OPTION>
							<OPTION value="dhule">dhule</OPTION>
							<OPTION value="jalna">jalna</OPTION>
							
						</SELECT></td></tr>
<tr><td>Age as on 1st january:</td><td>Years:<select name="years" size=1><option>18<option>19<option>20<option>21<option>22
<option>23<option>24<option>25<option>26<option>27<option>28<option>29<option>30</select>
&nbsp&nbsp&nbsp;Months:<select name="months" size=1>
<option value=jan> jan(1)<option>Feb(2)<option>Mar(3)<option>April(4)<option>May(5)<option>June(6)
<option>July(7)<option>Aug(8)<option>Sep(9)<option>Oct(10)<option>Nov(11)<option>Dec(12)</select></td></tr>
<tr ><td>
    Gender: </td><td><input type=radio name="gender"  value="Male" checked>Male
    <input type=radio name="gender"  value="Female" checked>Female</td></tr>
<tr><td rowspan=3>Date Of Birth:</td><td>
Day:</td><td><select name="day" size=1><option value="1">1<option>2<option>3<option>4<option>5<option>6
<option>7<option>8<option>9<option>10<option>11<option>12<option>13<option>14<option>15<option>16<option>17<option>18<option>19
<option>20<option>21<option>22<option>23<option>24<option>25<option>26<option>27<option>28<option>29<option>30<option>31</option></select></td>
<tr><td>Month:</td><td><select name="month" size=1>
<option value="jan">jan(1)<option>Feb(2)<option>Mar(3)<option>April(4)<option>May(5)<option>June(6)
<option>July(7)<option>Aug(8)<option>Sep(9)<option>Oct(10)<option>Nov(11)<option>Dec(12)</select></td></tr>
<tr><td>Year:</td><td><select name="year" size=1>
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
</select></td></td></tr>
<tr>
    <td rowspan=4>Place of Birth:</td>
    <td><input type=radio placeholder="birth place" name="birthplace"  value="village" checked>Village
<input type=radio name="birthplace" value="town" checked>Town</td>
   <tr><td> 
Place Name:</td><td><input type="text" placeholder="Place Name" name="place_name" id="pname" onblur="place_check()" required= size="20"></td>
   <tr><td>
District:</td><td><input type="text"  placeholder="District" id="dname" onblur="d_check()" name="birth_district" required=/></td><tr><td>
State:</td><td><SELECT id=district name="state" ><OPTION selected value="Select One">Select One</OPTION>
							<OPTION value="Andman &amp; Nicobar Islands">Andman &amp; Nicobar Islands</OPTION>
							<OPTION value="Andhra Pradesh">Andhra Pradesh</OPTION>
							<OPTION value="Assam">Assam</OPTION>
							<OPTION value="Bihar">Bihar</OPTION>
							<OPTION value="Chandigarh">Chandigarh</OPTION>
							<OPTION value="Chattisgarh">Chattisgarh</OPTION>
							<OPTION value="Delhi">Delhi</OPTION>
							<OPTION value="Daman &amp; Diu">Daman &amp; Diu</OPTION>
							<OPTION value="Goa">Goa</OPTION>
							<OPTION value="Gujarat">Gujarat</OPTION>
							<OPTION value="Haryana">Haryana</OPTION>
							<OPTION value="Himachal Pradesh">Himachal Pradesh</OPTION>
							<OPTION value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</OPTION>
							<OPTION value="Jharkhand">Jharkhand</OPTION>
							<OPTION value="Karnataka">Karnataka</OPTION>
							<OPTION value="kerela">kerela</OPTION>
							<OPTION value="Lakshadweep">Lakshadweep</OPTION>
							<OPTION value="Madhya Pradesh">Madhya Pradesh</OPTION>
							<OPTION value="Maharashtra">Maharashtra</OPTION>
							<OPTION value="Meghalay">Meghalay</OPTION>
							<OPTION value="Mizoram">Mizoram</OPTION>
							<OPTION value="Nagaland">Nagaland</OPTION>
							<OPTION value="Orrisa">Orrisa</OPTION>
							<OPTION value="Punjab">Punjab</OPTION>
							<OPTION value="Rajasthan">Rajasthan</OPTION>
							<OPTION value="Tamil Nadu">Tamil Nadu</OPTION>
							<OPTION value="Tripura">Tripura</OPTION>
							<OPTION value="Uttar Pradesh">Uttar Pradesh</OPTION>
							<OPTION value="Uttranchal">Uttranchal</OPTION>
							<OPTION value="West Bengal">West Bengal</OPTION></td></SELECT></td>
</td></tr>
<tr>
    <td rowspan=2>Father/Mother/Husband Name:</td>
    <td>Name:</td><td><input type="text" placeholder="Anyone of them" name="ffname" id="fname" onblur="fname_check()" size=12></td>
<tr><td>
Surname:</td><td><input type="text" placeholder="surname" name="flname" id="lname" onblur="lname_check()" size=12></td>
</td></tr>
</table></center></fieldset>

<!--address details -->

<fieldset><legend><font color="black"><b><blink><center>Address Details:<img src="photos/location.GIF" alt="location"/>
</center></blink></b></font></legend>
<center><table >
    <tr><td>Full address:</td><td><textarea name="address" placeholder="full address"></textarea></td>
    <tr><td>House No:</td><td><input style="color:red;" type="text" readonly="readonly" value="<?php echo $_SESSION['houseno']?>" name="houseno" size="10"></td>
    <tr><td>Area/Mohalla/Road:</td><td><input type="text" placeholder="Area/Mohalla/Road" name="area" size="20"></td>
    <tr><td>City/Village:</td><td><input style="color:red;" type="text" readonly="readonly"  value="<?php echo $_SESSION['city']?>" name="city" size="10"></td>
    <tr><td>Pin Code:</td><td><input id="pin" type="text" placeholder="Pin code" name="pincode" onblur="zip_check()" size="10"></td>
    <tr><td>Tehasil/Taluka/Mandal/Thane:</td><td><input type="text" placeholder="Tehasil/Taluka/Mandal/Thane" name="tahasil" size="10"></td></tr>
                 </table></center></fieldset></font>

<!--family members details-->

<br><fieldset><legend><font color="black"><b><blink>Details of member(s) of applicant family already included in current electoral roll of the Constituency
</blink></b></font></legend>
<center>
<table >
    <tr>
        <th><font color="dark blue">Name</font></th><th><font color="dark blue">Relationship with applicant</font></th>
        <th><font color="dark blue">Electors Identity no</font></th></tr>
        <tr><td><center>1:&nbsp;<input id="name" type="text" name="rname" size="20"></center></td>
        <td><center>&nbsp;<input type="text" name="relation" size="10"></center></td>
        <td><center>&nbsp;<input type="text" name="eidNo" size="10"></center></td>
        </table></center></fieldset>
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
