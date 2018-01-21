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
body{background:gray;margin:0;}
table{border:10px groove red;background:black;height:200px;width:700px;}
td{text-align:center;color:white;padding:20px;font-weight:500;}
p{color:green;font-size:30px;text-transform:capitalize;font-weight:500;text-align:center;}
 .first{
        background:url("photos/login/graybk.jpg");
        margin: 60px 0%;
        color:red;font-weight:600;
        }
 input[type="submit"]
    {
    background:green; display:inline-block; padding: 10px 200px 6px; color: #fbf7f7;
    text-decoration: none; font-weight: bold; line-height: 1;text-transform:capitalize;
    -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 10px; -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222;
    border: none; position: relative; cursor: pointer; font-size: 18px; font-family:Verdana, Geneva, sans-serif;
    }
    input[type="text"]{color:blue;font-weight:600}

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

<div class="first">
         <form action="http://localhost/voters/php/status.php" method="post">
  <div class="main">
    <center><table>
<td>Employee Id:</td>
<td><input style="color:red;" type="text" name="emp_id" readonly="" value="<?php session_start(); echo $_SESSION['emp_id'];?>"
onblur="window.alert('Do not change your Employee Id')" /></td></tr>
<tr><td>Request Id:</td><td><input type="text" name="req_id" placeholder="Request_Id" required=></td></tr>
                 <tr>
                <td>Service Date</td>
                            <br><td>
                              <select name="year" size="1"  >
                                <option selected>Year</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                              </select>
                           
                              <select name="month" size="1">
                                <option selected>Month</option>
                                <option value="January">January</option>
                                <option value="Febrary">Febrary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                              </select>
                              
                              <select name="day" size="1" >
                                <option selected>Day</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                              </select>
                             </td>
                          </tr>
<tr><td>Service status:</td><td><input type="radio" name="status" value="accepted" required=>Accepted<input type="radio" name="status" value="rejected">Rejected</td></tr>

    </table></center>
   </div>
<p><input type="submit" value="submit"/></p>
</div>
</form>
</body>
</html>
