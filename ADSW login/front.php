<?php
	session_start();
    $con = mysqli_connect("localhost", "root", "", "EVENT") or die(mysqli_error());
    
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../front.css" rel="stylesheet" type="text/css">
	<style>
		table,th,td{
	    border: 1px solid black;
	    border-collapse: collapse;
	    padding: 15px;

		}
		td{
			background-color: #f2f2f2;
	    text-align: center;
		}
		th {
	    background-color: blue;
	    color: white;
		}
    td a {
        display:block;
        width:100%;
        height: 100%;
        color: black;
    }
	</style>
</head>

<body style="margin: 0px;">

  <ul>
    <li id="home"><a href="../ADSW login/front.php">Home</a></li>

    <li style="float:right"><a href="../logout.php">Logout</a></li>
  
  </ul> 

  <?php 


echo "<h1 style=\"color: white; text-align: center\">Welcome ". $_SESSION['name']. "</h1>";

?>
<table style="width:70%; " align="center">
 		<tr>
    		<th>Event name</th>
    		<th>Event Date</th> 
    		<th>Event Description</th>
    		<th>Venue Requirements</th>
    		<th>Approval</th>
  		</tr>   

  		<?php
  		
        $sql= "select * from evnt;";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
      	
        for ($i=0; $i < $count; $i++) {
        $row = mysqli_fetch_assoc($res);
		  ?>
  		<tr>
    		<?php
        echo "<td><a href=\"../evdet.php/?evname=".$row['evname']."\">";
      		echo $row['evname'];
      	?>
    		</td>
    		<td>
        <?php
          echo $row['stdt'];
        ?>
        </td>
    		<td style="width: 50%">
        <?php
          echo $row['evdesc'];
        ?>
        </td>
    		<td>
        <?php
          echo $row['ven'];
        ?>
        </td>
    		<td>
        <?php
	    		if($row['adsw']=="Pending"){
	    	?>	
	    		<form method="post" action=approve.php>
	    			<input type='hidden' name='evname' value=<?php echo "'".$row['evname']."'"; ?>>
					<input type='hidden' name='EMPID' value=<?php echo "'".$row['EMPID']."'"; ?>>
					<input type="submit" value="Approve Event">
	    		</form>
	    	<?php
	    		}
          else if($row['adsw']=="Approved")
              echo "APPROVED";
	    	?>
        </td>
  		</tr>
      <?php
  		}
  		?> 
</table>


</body>

</html>





