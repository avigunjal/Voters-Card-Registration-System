<!doctype html>
    <?php
    session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index page</title>

<link rel="stylesheet" href="css/style_menu1.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style1.css" type="text/css" />
<style>
table{border:10px inset green;background:black;height:200px;width:700px;}
td{text-align:center;color:white;padding:10px;font-weight:500;}
h2{color:blue;text-decoration:none;}
p{color:green;font-size:30px;text-transform:capitalize;font-weight:500;text-decoration:blink;}
i{color:red;font-size:20px;text-transform:capitalize;font-weight:500;text-shadow:0px 0px 20px white;margin-top:10px;display:block;}
img{margin-bottom:20px;}
</style>

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
<div class="width" >
<h1><a href="http://localhost/voters/index.php"> 
VOTERS ID CARD<strong> REGISTRATION</strong> WEBSITE</a></h1>

    <ul id="nav">
        <li class="current"><a href="http://localhost/voters/team_index.php">Home</a></li>
           
        <li><a href="http://localhost/voters/Servicestatus.php">status</a>

        <li><a href="logout.php ">Log out</a></li>
    </ul>
</div>


<!--av!-- information section-->
</header>

<div style="display:block;border-radius:20px;border:1px solid black;padding:10px;margin:50px;background:gray;box-shadow:0px 0px 15px green;">

<center><table><tr><td><h2>Hello welcome,</h2>
<?php echo "<p>"; echo  $_SESSION['efname'] ; echo "  ".$_SESSION['elname']; echo "</p>";
echo "<center><img src=http://localhost/voters/photos/emp.GIF></center>";
echo "check out your service status <br>
your working area is:<br>";echo "<i>";  echo $_SESSION['ecity'] ; echo "-".$_SESSION['ezipcode']; echo " , ".$_SESSION['edistrict'].".";echo "</i>";?></td></tr></table></center>
<img style=" margin:10px 450px;;padding:10px;display:block;border-radius:20px;background:green;padding:10px;box-shadow:0px 0px 10px red;" src="http://localhost/voters/photos/employe.jpg" alt="emp portal" width=300px height=100px>
    
</div>
 </div>
</div>
</body>
</html>
