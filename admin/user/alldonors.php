<?php	
	
	include ('include/header.php'); 

?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>


<?php

include "conn.php";

$qry="select * from donor";
$result=mysqli_query($connection,$qry);


echo"<table border='2' id='donor' align='center'>
<tr>
    <th>Full Name</th>
    <th>Gender</th>
    <th>D.O.B</th>
    <th>Last Donated Date</th>
    <th>Contact</th>
    <th>Blood Group</th>
    <th>City</th>
    <th>State</th>
</tr>";

while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['name']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['dob']."</td>
  <td>".$row['save_life_date']."</td>
  <td>".$row['contact_no']."</td>
  <td>".$row['blood_group']."</td>
  <td>".$row['city']."</td>
  <td>".$row['state']."</td>

</tr>";
}

?>

<div class="container" style="padding: 60px 0;">
	<div class="row data">
		


	</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>

<?php	

	include ('include/footer.php'); 

?>
