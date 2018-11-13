<?php
session_start();

$evname= $_POST['evname'];
$empid= $_POST['EMPID'];
$cls=$_POST['classrm'];
if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
}
$sql="update evnt set dean='Approved' where evname='".$evname."' and EMPID='".$empid."';";
$res= mysqli_query($link,$sql);

$sql="update evnt set classrm='".$cls."' where evname='".$evname."' and EMPID='".$empid."';";
$res= mysqli_query($link,$sql);


echo "<script> location.href='front.php'</script>";

?>