<!DOCTYPE html>

<html>
<head>
    <title>E-Document upload</title>
    <style>

    body{background:gray;margin:20px 20px;}
    h1{color:black;text-shadow:0px 0px 20px black;text-align:center;text-transform:capitalize;margin:10px;display:block;
    background:-moz-linear-gradient(blue,red,green);padding:50px;border-radius:20px;font-family:A Love of Thunder;}
    input[type="file"]{background:white;padding:10px;border-radius:10px;border:2px solid green;color:red;font-weight:800;}
    .main{display:block;background:#4b8daa;padding:80px;margin:20px 200px;box-shadow:1px 1px 20px green;border-radius:10px;}
    input[type="submit"]
    {
    background: #4b7ef9; display:inline-block; padding: 5px 10px 6px; color: #fbf7f7;
    text-decoration: none; font-weight: bold; line-height: 1;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;
    }
    .form input.sub:hover{ background-color: #2a78f6; }
    p{margin-left:130px;}
    
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
	float: left;margin:10px 20px;font-size:15px;
}
.first a:hover{
	background: #fff;
}
.first span.right{
	float: right;
}
.first span.right a{
	float: left;
	display: block;
         
}
input[type="text"]{border-radius:10px;box-shadow:0px 0px 8px red;}


img{width:600px;
    height:300px;
padding:10px 10px;margin:1px 350px;border:2px solid black;display:block;background:green;
border-radius:40px;}
.aa{
    position: relative;
    
}
.aa .bb{position: absolute;width:283px;height:50px;bottom:130px;left:550px;color:white;font-weight:bold;
background:green;text-align:center;opacity:0.7;}
    </style>
</head>

<body>
 
    
<h1>E-Document Portal</h1>
<form method="post" action="http://localhost/voters/php/edocUpload.php" enctype="multipart/form-data">
<div class="main">
    <b>Your Login_Id:</b>
    <input style="color:red;font-weight:600;" type="text" name="login_id" value="<?php session_start(); echo $_SESSION['login_id'];?>"
onblur="window.alert('Do not change your Login_Id')" />
    <p>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
<input name="upload" type="submit" class="sub" id="upload" value=" Upload Document">
    </p>
</div><div class="aa">
<img src="http://localhost/voters/photos/edoc.png"/>

<div class="bb">Reduce paper<br>Use E-Documents</div>
</div>
    </form>
</body>
</html>
