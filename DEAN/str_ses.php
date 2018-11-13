<?php

session_start();

$dep= $_POST["dep"];
$pas= $_POST["pas"];

if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
}

$sql="SELECT * from dean where DEP='".$dep."' and pass='".$pas."';";

$res= mysqli_query($link,$sql);

if(mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['build']=$row['Build'];
    $_SESSION['dep']=$dep;
    echo "<script> location.href='front.php'</script>";
}
else{
    echo "NOT PRESENT";
}

?>