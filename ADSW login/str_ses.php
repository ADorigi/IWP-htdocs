<?php

session_start();

$usn= $_POST["usn"];
$pas= $_POST["pas"];



if($usn=="ADSW" && $pas=="CXDYJC2") {
	$_SESSION['adsw']="on";
    $_SESSION['name']="ADSW";
    echo "<script> location.href='front.php'</script>";
}
else{
    echo "<script>window.alert('Credentials are wrong')</script>";
    echo "<script> location.href='adsw_login.html'</script>";
}

?>