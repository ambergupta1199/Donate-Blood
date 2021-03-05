<?php
ob_start();
?>
<?php 
 	include ('include/header.php');
	    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		if((isset($_POST['search']))){
		if((isset($_POST['blood_group'])&& !empty($_POST['blood_group'])) && (isset($_POST['amount'])&& !empty($_POST['amount'])))
		{
			$blood_group=$_POST['blood_group'];
			$amount=$_POST['amount'];
			$sql= "SELECT * FROM blood_details where  blood='$blood_group'";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
				while( $row=mysqli_fetch_assoc($result))
                                 {
                                 	$_SESSION['amount']=$row['amount'];
                                 }
                 if($_SESSION['amount']>$amount)
                 {
      				$a=$_SESSION['amount'];
     			 	$a=$a-$amount;
	 				$sql1="UPDATE blood_details set amount='$a' where blood='$blood_group'";
	  				if(mysqli_query($connection,$sql1))
            		{ 
					header('location:addreceivers.php');
					ob_end_flush();
					}
				 }
			else
			{
				$error= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Enough Blood Not Available</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
			}
			
}
else{
$error=' <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>No donor available</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div-->';
}
}
else
{
$error= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please Fill details</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
}
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
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Blood Required</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
			<?php if(isset($error)) echo $error;?>
			<form action="" method="post" novalidate="">
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px " >
									<option value="">---Select Blood Group---</option>
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
								<select name="amount" id="amount" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px " >
									<option value="">---Amount---</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
			

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" name ="search" class="btn btn-danger btn-lg center-aligned" id="search" >Search</button>
							</div>
						</div>
						</form>
		</div>
	</div>
</div>

<?php 
}
else
{echo '<h1>rgjr</h1>';
	include('include/navigation.php');
}
	include ('include/footer.php');
?>