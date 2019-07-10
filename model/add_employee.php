<?php
//include '../database/dbconnection.php';  
include '../controller/controller.php';  
$insertdata=new Employee();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$skills=$_POST['skills'];
$salary=$_POST['salary'];
$sql=$insertdata->insert($name,$email,$address,$phone_no,$skills,$salary);
if($sql)

{
echo "<script>alert('Data inserted');</script>";
header("location:/view/employee.php", 301);
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>
