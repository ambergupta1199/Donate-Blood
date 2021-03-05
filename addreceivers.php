<?php
ob_start();
?>
<?php 
	include 'include/header.php';
	
		if(isset($_POST['add'])){
		  if(isset($_POST['name'])&&!empty($_POST['name'])){
			  if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
				  $name_receiver=$_POST['name'];
			  }
			  else{
				  $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Only lower and upper case and space characters are allow</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div> ';
			  }
		  }
		  else {
			  $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please fill the name field</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['gender'])&&!empty($_POST['gender'])){
			  $gender_receiver=$_POST['gender'];
		  }
		  else {
			  $genderError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please select your gender</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }

		  if(isset($_POST['day'])&&!empty($_POST['day'])){
			  $day_receiver=$_POST['day'];
		  }
		  else {
			  $dayError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please select day</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['month'])&&!empty($_POST['month'])){
			  $month_receiver=$_POST['month'];
		  }
		  else {
			  $monthError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please select month</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['year'])&&!empty($_POST['year'])){
			  $year_receiver=$_POST['year'];
		  }
		  else {
			  $yearError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please select year</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['blood_group'])&&!empty($_POST['blood_group'])){
			  $blood_group_receiver=$_POST['blood_group'];
		  }
		  else {
			  $blood_groupError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please select Blood Group</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['state'])&&!empty($_POST['state'])){
			  if(preg_match('/^[A-Za-z\s]+$/',$_POST['state'])){
				  $state_receiver=$_POST['state'];
			  }
			  else{
				  $stateError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Only lower and upper case and space characters are allow</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div> ';
			  }
		  }
		  else {
			  $stateError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please fill the state</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }
		  if(isset($_POST['city'])&&!empty($_POST['city'])){
			  if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
				  $city_receiver=$_POST['city'];
			  }
			  else{
				  $cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Only lower and upper case and space characters are allow</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div> ';
			  }
		  }
		  else {
			  $cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please fill the city</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }

		  if(isset($_POST['contact_no'])&&!empty($_POST['contact_no'])){
			  if(preg_match('/\d{10}/',$_POST['contact_no'])){
				  $contact_receiver=$_POST['contact_no'];
			  }
			  else{
				  $contactError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Please Enter Valid Contact Number!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div> ';
			  }
		  }
		  else {
			  $contactError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Enter Contact Number</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div> ';
		  }

		  
		   if(isset($_POST['email'])&&!empty($_POST['email'])){
			$pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
			if(preg_match($pattern,$_POST['email'])){
			  $email_receiver=$_POST['email'];
	  }
	  else{
		  $emailError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Please Enter valid Email address</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div> ';
	  }
  }
  else {
	  $emailError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Please fill the Email</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div> ';
  }
if(isset($_POST['password'])&&!empty($_POST['password'])){
		$account_password=md5($_POST['password']);
	}
	else
		{
			$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Please fill the Pssword</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div> ';
		}
  if(isset($name_receiver) && isset($blood_group_receiver)&&isset($gender_receiver)&&isset($city_receiver)&&isset($state_receiver)&&isset($contact_receiver)&&isset($day_receiver)&&isset($month_receiver)&&isset($year_receiver)&&isset($email_receiver)&&isset($account_password) ){
	  $ReceiverDOB=$day_receiver.'-'.$month_receiver.'-'.$year_receiver;    
                 $sql = "INSERT INTO `receiver` (name, gender, email, city, dob,contact_no,password,blood_group,state) VALUES ('$name_receiver','$gender_receiver','$email_receiver','$city_receiver','$ReceiverDOB','$contact_receiver','$account_password','$blood_group_receiver','$state_receiver')";
                     if(mysqli_query($connection,$sql))
                           {
                $adderror= '<div class="alert alert alert-dismissible fade show" >
			<strong>Data added</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="userID">
			<button type="submit" name="updateSave" class="btn btn-info ">OK</button>
		</form>
 </div>';
                                    }
                                    else
                                    {
                                    	$adderror= ' <div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data not added</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div> ';
                                    }
                             	
}
  else
  {
  	$adderror= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Something went wrong</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div> ';
  }
}
if(isset($_POST['updateSave'])){
	header("location:bloodrequired.php");
	ob_end_flush();

}
?>
<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
						<form action="" method="post" class="form-group form-container" >
							<?php if(isset($adderror))  echo $adderror;?>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control"required >
								<?php if(isset($nameError))  echo $nameError;  ?>
							</div>

							<div class="form-group">
					              <label for="name">Gender</label><br>
					              <select class="form-control demo-default"  id="Gender" name="gender" required>
					                
					                <option value="Male">Male</option>
					                <option value="Female">Female</option>
				
					              </select>
					              <?php if(isset($genderError))  echo $genderError;  ?>
					        </div>
	
				    		<div class="form-group">
				    		<label for="email">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required>
				    			<?php if(isset($emailError))  echo $emailError;?>
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no"  class="form-control"  pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" required>
				              <?php if(isset($contactError))  echo $contactError;  ?>
				            </div>
				            <div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O+">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
              <?php if(isset($blood_groupError))  echo $blood_groupError;  ?>
            </div>

	            <div class="form-inline">
              <label for="dob">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
              	<option value="">---Year---</option>
              <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                
				<option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
				<option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
               
              </select>
              <?php if(isset($dayError))  echo $dayError;  ?>
              <?php if(isset($monthError))  echo $monthError;  ?>
              <?php if(isset($yearError))  echo $yearError;  ?>
            </div>
            <div class="form-group">
			<input type="hidden" name="country" id="countryId" value="IN"/>
			<label for="state">State</label>
			  <select name="state" class="states order-alpha form-control demo-default" id="stateId">
    <option value="">-- Select --</option>
</select>
			
		
              <label for="city">City</label>
			  <select name="city" class="cities order-alpha form-control demo-default" id="cityId">
    <option value="">Select City</option>
</select>
</div>	
	<?php if(isset($cityError))  echo $cityError;  ?>


	                <div class="form-group">
					<label for="password">Password</label>
					<input type="password"  name="password" placeholder="Password" class="form-control" required></input>
					<?php if(isset($passwordError))  echo $passwordError;  ?>
					</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="add">Add Receiver</button>
							</div>
						</form>
					</div>
				</div>
	
