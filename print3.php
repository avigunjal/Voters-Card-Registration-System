<!doctype html>
    <?php
    session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index page</title>


<link rel="stylesheet" href="css/style_menu.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style1.css" type="text/css" />
   <style type="text/css">
    .first{
        background:url("photos/login/graybk.jpg");
        margin: 60px 0%;
        color:red;font-weight:600;
        }
    
    input[type="text"] {
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
        font-size: 14px;font-weight: 700;text-transform:capitalize;}
h5{text-align:center;color:blue;text-shadow:1px 1px 20px red; text-transform:uppercase;font-size:50px;padding-top:30px;}
    table{text-align:left;padding:20px;margin:20px;}td{padding:5px;}
    .main{display:block;background:white;padding:10px;border:5px solid darkgray;margin:20px 400px;box-shadow:0px 10px 15px green;
    border-radius:20px; }
    p{margin:10px 400px;}
    input[type="image"]{padding:1px;border-radius:20px;margin:10px;}
 input[type="submit"]
    {
    background: #4b8df9; display:inline-block; padding: 5px 10px 6px; color: #fbf7f7;
    text-decoration: none; font-weight: bold; line-height: 1;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;
    }
    .form input.sub:hover{ background-color: #2a78f6; }
 
</style>
</head>
<body>
<body>
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
<div class="first">
      <h5>Print Section!!</h5>
    <form action="http://localhost/voters/php/form7print.php" method="post">
  <div class="main">
    <table>
<td>Login_Id:</td>
<td><input style="color:red;" type="text" name="login_id" value="<?php session_start(); echo $_SESSION['login_id'];?>"
onblur="window.alert('Do not change your Login_Id')" /></td></tr>
<tr><td>Enter your Request_Id:</td>
<td><input type="text" name="req_id"></td></tr>
    </table>
   </div>
<p><input type="submit" value="Okay submit" class="sub"/></p>
</div>
</body>
</html>
