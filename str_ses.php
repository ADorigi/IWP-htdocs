<?php

session_start();

$empid= $_POST["empid"];
$pas= $_POST["pas"];

if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
}

$sql="SELECT * from fac where EMPID='".$empid."' and pass='".$pas."';";

$res= mysqli_query($link,$sql);

if(mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['name']=$row["Name"];
    $_SESSION['empid']=$empid;
    echo "<script> location.href='front.php'</script>";
}
else{
    echo "NOT PRESENT";
}

?>