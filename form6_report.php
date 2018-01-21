<html>
<head>
<style>
body{background:gray;text-transform:capitalize;}
table{border:1px solid green;display:block;background:black;padding:10px;border-radius:20px;margin:0px;
text-align:left;box-shadow:0px 0px 20px purple;}
th{color:white;font-weight:bold;padding:1.2px;border:1px solid white;font-size:16px;}
td{color:lightgreen;padding:1px; font-size:13px;border:1px solid white;}
 h1{text-align:center;color:green;text-shadow:0px 0px 10px white; text-transform:uppercase;font-size:50px;margin:40px 200px;font-family:ChockABlockNF;font-weight:100;}
 #back	
    {
    background: #4b8df9; display:inline-block; padding: 10px 70px; color: #fbf7f7;
    text-decoration:none ; font-weight: bold; line-height: 1;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;margin:0 200px;
    }
a:hover,img:hover{background:lightgreen;}
</style>
<head><body>
<h1>User Signup Details</h1>
<?php
session_start();
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("voters")or die(mysql_error());

$query = "SELECT *from newElectoral";

$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) == 0)

{

echo "Database is empty <br>";

}

else

{

echo "<table>

<tr>
<th>App id</th>
<th>uid</th>
<th>req_id</th>
<th>Name</th>
<th>lname</th>
<th>District</th>
<th>AgeYears</th>
<th>Gender</th>
<th>Bday</th>
<th>Birthplace</th>

<th>Address</th>
<th>house no</th>
<th>Area</th>
<th>City</th>
<th>Pin code</th>

<th>submission date</th>
<th>login_id</th>

</tr>";

while($row  = mysql_fetch_array($result))

{

echo "<tr>";

 echo "<td>" .$row['app_id'] . "</td>";
 echo "<td>" . $row['uid'] . "</td>";
 echo "<td>" . $row['req_id'] . "</td>";
 echo "<td>" . $row['fname'] . "</td>";
 echo "<td>" . $row['lname'] . "</td>";
 echo "<td>" . $row['district'] . "</td>";
 echo "<td>" . $row['ageyears'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['bdate'] . "</td>";
echo "<td>" . $row['birthplace'] . "</td>";

echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['home_no'] . "</td>";
echo "<td>" . $row['area'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['pincode'] . "</td>";

echo "<td>" . $row['sdate'] . "</td>";
echo "<td>" . $row['login_id'] . "</td>";
 
 echo "</tr>";
 
 }//while

echo "</table>";

}//else

mysql_close();

?>
<p>
<a id="back" href=http://localhost/voters/admin_index.html>Back to Home !</a></p>

</body>
</html>
