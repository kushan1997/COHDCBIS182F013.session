<html>
<head> <title> Log In </title> </head>
<body>
<form name="frmlogin" method="post" action="#">
usename : <input type="text" name="txtun"/>
password : <input type="password" name="txtpw"/>
use type : <select name="cmbtype">
<option value="user"> user </option>
<option value="admin"> admin </option>
</select> <br />
<input type="submit" name="btnsubmit" value="Login"/> </form>
</body> </html>
<?php
if(isset($_POST["txtun"]))
{ $un= $_POST["txtun"];
  $pw= $_POST["txtpw"];
  $type= $_POST["cmbtype"];
  $con = mysqli_connect("localhost","username","password");
  mysqli_select_db($con,"studentdb");
 $sql="select * from tblusers";
$result= mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result))
  {if($un==$row[1] && $pw=$row[2] && $type==$row[3])
    { $valid=1; }
   }
if($valid==1)
{ SESSION_START();
  $_SESSION["uname"]= $un
 $_SESSION["LAT"]=time();
  header("loacation:welcome.php");
}
else
{ echo"Invalid Login";
}
mysqli_close($con);
?> 