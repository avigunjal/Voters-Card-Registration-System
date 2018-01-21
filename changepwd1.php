<html><head>
<style>
body{background:#CCCCFF;}
#ch{margin:60px;font-family:BatmanForeverAlternate;text-align:center;background:green;padding:50px;border-radius:10px;font-size:30px;}
#nch{margin:60px;font-family:BatmanForeverAlternate;text-align:center;background:white;padding:50px;border-radius:10px;font-size:30px;}
#inv{margin:60px;font-family:BatmanForeverAlternate;text-align:center;background:red;padding:50px;border-radius:10px;font-size:30px;}
p{text-align:center;margin:20px 300px;}
</style>
<body>
<?php
$emp_id=$_POST['emp_id'];
$oldpwd=$_POST['oldpwd'];
$newpwd=$_POST['newpwd'];
$cnfrmpwd=$_POST['cnfrmpwd'];

//Donnection to mysql
$con=mysql_connect("localhost","root","");
if(!$con)
	echo "<center><h1><font color=red>Can Not Connect To the DATABASE</font></h1><br>";

//Database selection
$status=mysql_select_db("voters",$con);
if(!$status)
	echo "<center><h1><font color=red>Problem While Selecting the DATABASE</font></h1><br>";

$query=("select password from s_team where emp_id='$emp_id'");

$result=mysql_query($query);
$n=mysql_result($result,0,0); 
if($n)
{
if($n==$oldpwd)
{
	if($newpwd!=$cnfrmpwd)
		echo "<h1><font color=red>Please enter the correct combination of passwords</font></h1>";
	else
	{
		$query1=("update s_team set password='$newpwd' where emp_id='$emp_id';") or die(mysql_error());
		$result1=mysql_query($query1);
		if($result)
		echo "<p id=ch>Password successfully changed</p><p><img src=http://localhost/voters/photos/loginicon.gif></p>";
		header("refresh:2; url=http://localhost/voters/changepwd1.html");
	}
}
else{
echo "<p id=nch><img src=http://localhost/voters/photos/wrong.GIF>&nbsp&nbsp;your old password is incorrect</p>";
header("refresh:3; url=http://localhost/voters/changepwd1.html");
}
}
else
{
	echo "<p id=inv>your login_id is invalid</p>";
	header("refresh:3; url=http://localhost/voters/changepwd1.html");
}
?>
</head>
</body>
</html>
