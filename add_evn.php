<?php

	session_start();
	
	$evnm=$_POST["evname"];
	$stdt=$_POST["stdate"];
	$stti=$_POST["sttime"];
	$endti=$_POST["endtime"];
	$evdesc=$_POST["evdesc"];
	$expar=$_POST["par"];
	$ven=$_POST["loc"];
	$empid=$_SESSION['empid'];

	if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
	}

	$query = "insert into evnt values(\"$evnm\", \"$stdt\",\"$stti\",\"$endti\",\"$evdesc\",\"$expar\",\"$ven\",\"Pending\",\"NULL\",\"Pending\", \"$empid\")";

	//echo $query;
	echo mysqli_query($link,$query) or die(mysqli_error($link)."occurs");

	echo "<script> location.href='front.php'</script>";

?>