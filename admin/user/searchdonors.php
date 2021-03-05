<?php 

	//include header file
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
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-4">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<form action="searchdonors.php">
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">

			<div class="form-group text-center center-aligned">
			<input type="hidden" name="country" id="countryId" value="IN"/>
			
		
			<select style="width: 220px; height: 45px;" name="state"  id="stateId" class=" states order-alpha form-control demo-default" required>
	<option value="">-- Select --</option></select>
			</div>
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="cityId" class="cities order-alpha form-control demo-default" required>
	<option value="">-- Select --</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
						</form>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<?php 
		if((isset($_GET['city'])&& !empty($_GET['city'])) &&(isset($_GET['blood_group'])&& !empty($_GET['blood_group'])))
		{$city=$_GET['city'];
			$blood_group=$_GET['blood_group'];
			$sql= "SELECT * FROM donor where city='$city' OR blood_group= '$blood_group'";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
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
			while($row = mysqli_fetch_array($result)){
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
}
else{
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>No donor with above specifications</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div-->';
}
		}
		?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
<script type="text/javascript">
$(function(){
$("#search").on('click',function(){
var city=$("#cityId").val();
var blood_group=$("#blood_group").val();
$.ajax({
type: 'GET',
url: 'ajaxsearch.php',
data:{city:city,blood_group:blood_group},
success:function(data){
	if(!data.error){
		$("#data").html(data);
	}
}
});
});
});
</script>