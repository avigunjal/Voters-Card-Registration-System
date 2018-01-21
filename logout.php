<?php 
session_start();?>
<html>
<body bgcolor=darkgray onload="visit()">
<script> function visit(){window.alert("Thank you for visiting our website");}</script>
<?php
echo "<div style='text-align:center;font-weight:400;color:white;margin:50px 150px;background:black;padding:40px 10px;border-radius:20px;font-size:70px;font-family:Earwig Factory;border:2px solid gray;box-shadow:0px 0px 20px purple;'>";
echo"<marquee hspace=10 direction=up scrollamount=2.2 style='text-align:center;' >Thank you for Visiting our Website!!</marquee>";
session_unset();

?>
</div>
<p style="color:blue;font-size:30px;text-decoration:none;display:block;
background:#4c86d3;border-radius:10px;padding:10px;margin:20px 800px 10px 250px;text-align:center;padding:10px;"><a style="color:white;font-weight:600px;text-decoration:none;font-family: monospace" href=http://localhost/voters/Homepage.html>HOME PAGE</a>
</body>
<html>
