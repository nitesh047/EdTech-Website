<?php
 
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'thedot');
$namee=$_POST['name'];
$phoneNo = $_POST['phoneNo'];
$guardianNo = $_POST['guardianNo'];
$batch = $_POST['batch'];
$address = $_POST['address'];


$reg = "INSERT INTO admission(namee,phone,GuardianNo,batch,addresss) VALUES ('$namee','$phoneNo','$guardianNo','$batch','$address') ";

$result = mysqli_query($con, $reg);
?>
<script type="text/javascript">alert("You have successfully submit your data.");location="index.php";</script>;
// header('location:customerProfile.php');

