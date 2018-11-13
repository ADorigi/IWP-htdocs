<?php
	session_start();
    $con = mysqli_connect("localhost", "root", "", "EVENT") or die(mysqli_error());
    
?>
<!DOCTYPE html>
<html>
<head>
	<link href="front.css" rel="stylesheet" type="text/css">
	<style>
		table,th,td{
		margin-top: 10%;
	    border: 1px solid black;
	    border-collapse: collapse;
	    padding: 15px;

		}
		td{
			background-color: #f2f2f2;
	    text-align: center;
		}

		td a {
		    display:block;
		    width:100%;
		    height: 100%;
		    color: black;
		}
		th {
	    background-color: blue;
	    color: white;
		}
	</style>
</head>

<body style="margin: 0px;">

  <ul>
    <li id="home"><a href="front.html">Home</a></li>
    <li ><a href="add_event.html">New Event</a></li>
    <li ><a href="">Cancel Event</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  
  </ul> 

  <?php 


echo "<h1 style=\"color: white; text-align: center\">Welcome ". $_SESSION['name']. "</h1>";

?>
<table style="width:70%; " align="center">
 		<tr>
    		<th>Event name</th>
    		<th>Event Date</th> 
    		<th>ADSW Approval</th>
    		<th>Classroom Allotted</th>
    		<th>Dean Approval</th>
  		</tr>   

  		<?php
  		
        $sql= "select * from evnt where EMPID='".$_SESSION['empid']."';";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
      	
        for ($i=0; $i < $count; $i++) {
        $row = mysqli_fetch_assoc($res);
		  ?>
  		<tr>
  		<?php
    		echo "<td><a href=\"evdet.php/?evname=".$row['evname']."\">";
      	
      		echo $row['evname'];
      	?>
    		</td>
    		<td>
        <?php
          echo $row['stdt'];
        ?>
        </td>
    		<td>
        <?php
          echo $row['adsw'];
        ?>
        </td>
    		<td>
        <?php
          if($row['classrm']=="NULL")
          	echo "-";
          else
          	echo $row['classrm'];
        ?>
        </td>
    		<td>
        <?php
          echo $row['Dean'];
        ?>
        </td>
  		</tr>
      <?php
  		}
  		?> 
</table>


</body>

</html>





