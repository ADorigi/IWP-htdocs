<?php
session_start();

$evname= $_POST['evname'];
$empid= $_POST['EMPID'];
if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
}
$sql="update evnt set adsw='Approved' where evname='".$evname."' and EMPID='".$empid."';";
$res= mysqli_query($link,$sql);

echo "<script> location.href='front.php'</script>";

?>