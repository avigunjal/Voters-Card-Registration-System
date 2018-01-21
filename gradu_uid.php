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
<style>
 .first{
        background:url("photos/login/graybk.jpg");
        margin:0px;
        color:red;font-weight:600;
        }
 .main{display:block;background:white;padding:10px;border:5px solid darkgray;margin:100px;box-shadow:0px 10px 15px green;
    border-radius:20px; }
 table{text-align:left;padding:20px;margin-left:400px;}td{padding-left:20px;padding-top:10px;}
 p{margin:0px;text-align:center;}
h5{text-align:center;color:white;text-shadow:1px 1px 20px red; text-transform:capitalize;font-size:50px;padding-top:30px;}
input[type="submit"]
    {
    background: #4b8df9; display:inline-block; padding: 10px 50px 6px; color: #fbf7f7;
    text-decoration: none; font-weight: bold; line-height: 1;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;
    }
    .form input.sub:hover{ background-color: #2a78f6; }
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
    </style>

 <script>function startTime()
{
    var today=new Date();
   today.toDateString();
    document.getElementById('tex').innerHTML=today;
 }

 </script>
</head>
<body onload="startTime()" style="background:-moz-linear-gradient(gray,white);margin:0px;">
<div id="container"  style="background:-moz-linear-gradient(red,white);">
<header  > 
<div class="width">
<h1><a href="http://localhost/voters/index.php"> 
VOTERS ID CARD<strong> REGISTRATION</strong> WEBSITE</a></h1>

  <ul id="nav" style="font-family:a song for jennifer;font-weight:800px;">
        <li class="current"><a href="http://localhost/voters/admin_index.html">Home</a></li>
        <li><a href="#">Service Team</a>
         <ul>
<li><a href="http://localhost/voters/teamreg.html ">Add Service team</a></li>
<li><a href="http://localhost/voters/deleteemp.html ">Delete Service team</a></li>
</ul>
</li>
       
        <li><a href="#">Reports</a>
<ul>
 <li><a href="usersignup_uid.php ">user Registration</a>
<ul>
<li><a href="http://localhost/voters/usersignup_uid.php ">Report by userid</a></li>
<li><a href="http://localhost/voters/php/user_signup_report.php ">All report</a></li>
</ul>
</li>
 <li><a href="newele_uid.php ">New Electoral Report</a>
<ul>
<li><a href="http://localhost/voters/newele_uid.php ">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/newElectoral_report.php ">All report</a></li>
</ul>
</li>
 <li><a href="form7_uid.html">Form7 Report</a>
<ul>
<li><a href="http://localhost/voters/form7_uid.html">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/form7_report_all.php ">All report</a></li>
</ul>
</li>
  <li><a href="form8_uid.php ">Form8 Report</a>
<ul>
<li><a href="http://localhost/voters/form8_uid.php ">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/form8_report.php ">All report</a></li>
</ul>
</li>
    <li><a href="form8A_uid.php ">Form8A Report</a>
<ul>
<li><a href="http://localhost/voters/form8A_uid.php ">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/form8A_report.php ">All report</a></li>
</ul>
</li>
 <li><a href="form18_uid.php">Graduate's Constituency Report</a>
<ul>
<li><a href="http://localhost/voters/form18_uid.php">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/form18_report.php ">All report</a></li>
</ul>
</li>
 <li><a href="form19_uid.php ">Teachers Constituency Report</a>
<ul>
<li><a href="http://localhost/voters/form19_uid.php">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/form19_report.php ">All report</a></li>
</ul>
</li>
 <li><a href="http://localhost/voters/php/upload_report.php ">Upload Documents</a>
<ul>
<li><a href="http://localhost/voters/upload_uid.php">Report by userid</a>
</li>
<li><a href="http://localhost/voters/php/upload_report_all.php ">All report</a></li>
</ul>
</li>
 <li><a href="status_report.php">Status</a>
<ul>
<li><a href="http://localhost/voters/status_uid.php">Report by userid</a>
</ul>
</li></ul>
        <li><a href="logout.php ">Log out</a></li>
    </ul>
</div>
<div class="clear" ></div>
</nav>

<div class="clear"></div>

<!--av!-- information section-->
</header>
<div class="first">
 <h5>Generate Report!!</h5>
    <form action="http://localhost/voters/php/reportbyuid.php" method="post">
  <div class="main">
    <table>
<tr><td>Enter userId:</td>
<td><input type="text" name="uid" required></td></tr>
    </table>
   </div>
<p><input type="submit" value="Generate report !" class="sub"/></p>
</div>
</div>
</div>

</body>
</html>
