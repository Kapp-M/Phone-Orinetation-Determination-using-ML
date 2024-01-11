<?php
$cn=$_POST['contact_name'];
$ce=$_POST['contact_email'];
$cp=$_POST['contact_place'];
$cm=$_POST['contact_message'];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"project");
$qur="insert into contact_us(name,email,place,message)values('".$cn."','".$ce."','".$cp."','".$cm."')";
$res=mysqli_query($con,$qur);
if($res)
{
echo "Record inserted";
}
mysqli_close($con);
?>