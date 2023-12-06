<!DOCTYPE html>
<html lang="en">
<form action="" method="POST">
  <label for="na">
  <b >insert name of the tutor</b><br></label>
  <input  id="na" placeholder="search..." name="name"><br>
  <input type="submit" value="search">
  </form >
<hr>

</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST["name"];
if(!$name)
echo "<script>alert(\"please enter the name\");</script>";
else{
$con="";
try{
$con=mysqli_connect("localhost","root","","teacher");}
catch(mysqli_sql_exception){
echo"cann't connect to db";
}
if($con){
try{
$quer="select * from tutor where name=\"{$name}\"";
if(!$quer) echo"there is no similar data";

$req=mysqli_query($con,$quer);
while($data=mysqli_fetch_assoc($req)){
echo "name: {$data['name']} <br>";
echo "Phone no: {$data["pno"]} <hr>";
}  }
catch(mysqli_sql_exception)
{echo"there is no similar data";}
}
}
}



?>