
<!DOCTYPE html>
<html>
<head>
	<link href="../front.css" rel="stylesheet" type="text/css">
	<style>
		table,th,td{
			margin-top: 20px;
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
    <li id="home"><a href="../front.php">Home</a></li>
    
    <li style="float:right"><a href="../logout.php">Logout</a></li>
  
  </ul> 

  
<table style="width:70%; " align="center">
 		<tr>
    		<th colspan="2">Event Details</th>
    		
  		</tr> 
  		<?php
			session_start();
		    $con = mysqli_connect("localhost", "root", "", "EVENT") or die(mysqli_error());

		  	$evname=$_GET['evname'];

		?>  

  		<?php
  		
        $sql= "select * from evnt where evname='".$evname."';";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
		  ?>
  		<tr>
  			<th>
  				Event name
  			</th>
  			<td>
  		<?php
      	
      		echo $row['evname'];
      	?>
    		</td>
    	</tr>
    	<tr>
    		<th>
  				Start Date
  			</th>
    		<td>
        <?php
          echo $row['stdt'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Start Time
  			</th>
    		<td>
        <?php
          echo $row['stti'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				End Time
  			</th>
    		<td>
        <?php
          echo $row['endti'];
        ?>
        </td>
    	</tr>
      <tr>
    		<th>
  				Event Description
  			</th>
    		<td style="width: 70%">
        <?php
          echo $row['evdesc'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Expected Participants
  			</th>
    		<td>
        <?php
          echo $row['exppar'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Venue Requirement
  			</th>
    		<td>
        <?php
          echo $row['ven'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				ADSW Approval
  			</th>
    		<td>
        <?php
          echo $row['adsw'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Classroom Alloted
  			</th>
    		<td>
        <?php
          echo $row['classrm'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				DEAN Approval
  			</th>
    		<td>
        <?php
          echo $row['Dean'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Faculty Coordinator Name 
  			</th>
    		<td>
        <?php
	        $sql= "select * from fac where EMPID='".$row['EMPID']."';";
	        $res = mysqli_query($con,$sql);
	        $row = mysqli_fetch_assoc($res);
          	echo $row['Name'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Mobile Number
  			</th>
    		<td>
        <?php
          echo $row['mobno'];
        ?>
        </td>
    	</tr>
    	<tr>
    		<th>
  				Email ID
  			</th>
    		<td>
        <?php
          echo $row['email'];
        ?>
        </td>
    	</tr>


</table>


</body>

</html>


