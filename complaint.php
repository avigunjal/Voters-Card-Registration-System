<!DOCTYPE html>

<html>
<head>
    <title>complaint</title>
    <style type="text/css">
    body {
        background:url("photos/login/graybk.jpg");
        margin: 0px 0px;
        color:black;font-weight:600;
        }
    
    input,
    textarea {
        color: black;
        background: #fff;
        border: 2px solid #CCCCCC;
        padding:8px;
        color:black;
        font-size: 14px;
        line-height: 1.6em;
        margin-bottom:20px;
   text-transform:uppercase;
        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-top-color: pink;
        border-radius:9px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }    
    input[type="text"]:focus
    {
background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: blue;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
        font-size: 12px;font-weight: 700;}
  

    textarea {
        padding:5px;
        width:100%;
        height:100px;
        color:black;
   text-transform:capitalize;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: blue;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
        font-size: 16px;font-weight: 700;
    }
    h1{text-align:center;color:green;text-shadow:0px 0px 10px white; text-transform:uppercase;font-size:50px;margin:40px 400px;}
    table{text-align:left;padding:20px;margin:20px;}
    .main{display:block;background:white;padding:10px;border:5px solid black;margin:20px 400px;box-shadow:0px 10px 15px red;
    border-radius:20px; }
    p{margin:10px 400px;}
    input[type="image"]{padding:1px;border-radius:20px;margin:10px;}
 

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
	float: left;margin:10px 20px;
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

</style>
<body>
<div class="first">
 <a href="index.php">
<img src="photos/login/home.png" alt="home"/>Back to the Home</strong>
  </a>
</span>
 </div>
      <h1>Your Complaint!</h1>
    <form action="http://localhost/voters/php/complaint_confirm.php" method="post" onsubmit="window.alert('Your complaint submitted successfully!!')">
  <div class="main">
    <table>
<td>Login_Id:</td>
<td><input style="color:red;font-weight:600;" type="text" name="login_id" value="<?php session_start(); echo $_SESSION['login_id'];?>"
onblur="window.alert('Do not change your Login_Id')" /></td></tr>
<tr><td>Enter your complaint:</td>
<td><textarea name="complaint" placeholder="complaint"></textarea></td></tr>
    </table>
   </div>
<p><input type="image" src="http://localhost/voters/photos/complaint.png"/></p>
</body>
</html>
