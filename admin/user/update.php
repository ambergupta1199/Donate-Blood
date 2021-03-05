<?php 
	include 'include/header.php';
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

  if(isset($_POST['up'])){	
  	    if(isset($_POST['name']) && !empty($_POST['name']))
  	    {
  	    	$n=$_POST['name'];
  	    }
  	    else
  	    {
  	    	$n=$_SESSION['name'];
  	    }
  	    if(isset($_POST['gender']) && !empty($_POST['gender']))
  	    {
  	    	$g=$_POST['gender'];
  	    }
  	    else
  	    {
  	    	$g=$_SESSION['gender'];

  	    }
        if(isset($_POST['email']) && !empty($_POST['email']))
        {

             $e=$_POST['email'];
        }
        else
        {
              $e=$_SESSION['email'];
        }
        if(isset($_POST['contact_no']) && !empty($_POST['contact_no']))
        {
                $c=$_POST['contact_no'];
        }
        else
        {
                 $c=$_SESSION['contact_no'];
        }
        if(isset($_POST['weight']) && !empty($_POST['weight']))
        {
                $w=$_POST['weight'];
        }
        else
        {
                 $w=$_SESSION['weight'];
        }
        if((isset($_POST['day']) && !empty($_POST['day'])) && (isset($_POST['month']) && !empty($_POST['month'])) && (isset($_POST['year']) && !empty($_POST['year'])))
        {
                 $day=$_POST['day'];
                 $month=$_POST['month'];
                 $year=$_POST['year'];
                 $dob=$day.'-'.$month.'-'.$year;
        }
        else
        {
                 $dob=$_SESSION['dob'];
        }
    	if(mysqli_query($connection,"UPDATE admin set name='$n',gender='$g',email='$e',contact='$c',weight='$w',dob='$dob' where id=".$_SESSION['id']))
    	{
              $message= ' <div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Profile Updated</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div> ';        
?>
 <script>
			function myFunction(){
				location.reload();
			}
			</script>
            
<?php
}
else
{
	 $message= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Data not Updated</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div> ';
}
}
  $sql= "SELECT * FROM admin WHERE id=".$_SESSION['id'];
  $result=mysqli_query($connection,$sql);
  if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
  $_SESSION['name']=$row['name'];
  $_SESSION['gender']=$row['gender'];
  $_SESSION['email']=$row['email'];
  $_SESSION['contact']=$row['contact']; 
  $_SESSION['weight']=$row['weight'];
  $_SESSION['dob']=$row['dob'];
  $date =explode("-",$_SESSION['dob']);
  $dbPassword=$row['password'];
  }
  }
  if(isset($_POST['update_pass'])){

	if(isset($_POST['old_password'])&&!empty($_POST['old_password'])&& isset($_POST['c_password'])&&!empty($_POST['c_password']) && isset($_POST['new_password'])&&!empty($_POST['new_password'])){
		$oldpassword=md5($_POST['old_password']);
		if($oldpassword==$dbPassword){
			if($_POST['new_password']==$_POST['c_password']){
					$password=md5($_POST['new_password']);
					if(isset($password)){
		$sql="UPDATE admin SET password='$password' WHERE id=".$_SESSION['id'];
	if(mysqli_query($connection,$sql)){
		$dbPassword=$password;
		$passwordError= ' <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Password Updated</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ';
		?>
		<script>
		function myFunction(){
			location.reload();
		}
		</script>
<?php
	}
	else {
		$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Password Not updated</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ';
	}
	}
				}
			else
			{
				$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Password should be same</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div> ';
			}
		}
		else
		{
			$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Please Enter Correct Current Password</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div> ';
		}
	}
	else
	{
		$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Please Enter Password</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div> ';
	}
}

if(isset($_POST['delete_account'])){
	if(isset($_POST['account_password'])&&!empty($_POST['account_password'])){
		$account_password=md5($_POST['account_password']);	
		if($account_password==$dbPassword){
			$showform ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Do you want to delete your account?</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="userID" value="'.$_SESSION['id'].'">
			<button type="submit" name="updateSave" class="btn btn-info ">Yes</button>

			<button type="submit" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true">Oops! No </span>
			</button>      
		</form>
 </div>';
		}
else {
	$showform= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please Enter Correct Password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ';
}
		
	}
	else {
		$showform= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please Enter Password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ';
	}
}
if(isset($_POST['updateSave'])){

	$userID= $_SESSION['id'];
$sql ="DELETE FROM admin WHERE id=".$userID;
if(mysqli_query($connection,$sql)){
	header("Location:logout.php");

}
else {
	$showform= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Account not deleted</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div> ';
}

}
include 'include/sidebar.php';
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
					
					<div><?php if(isset($message))  echo $message;  ?>
					</div>


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text"  name="name" class="form-control" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>">
							</div>
							<div class="form-group">
					              <label for="name">Gender</label><br>
					              <select class="form-control demo-default"  id="Gender" name="gender" >
					                
					                <option value="Male">Male</option>
					                <option value="Female">Female</option>
				
					              </select>
					        </div>
							
				    		<div class="form-group">
				    		<label for="email">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control"  value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="<?php if(isset($_SESSION['contact'])) echo $_SESSION['contact'];?>" class="form-control"  pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
				            </div>
				            <div class="form-group">
				              <label for="weight">Weight</label>
				              <input type="numeric" name="weight" value="<?php if(isset($_SESSION['weight'])) echo $_SESSION['weight'];?>" class="form-control"  >
				            </div>
				            <div class="form-inline">
              <label for="dob">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
			  <?php if(isset($date['0'])) echo '<option selected="" value="'.$date['0'].'">'.$date['0'].'</option>';?>
              <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option>
				
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                
				<option value="">---Month---</option>
				<?php if(isset($date['1'])) echo '<option selected="" value="'.$date['1'].'">'.$date['1'].'</option>';?>

                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if(isset($date['2'])) echo '<option selected="" value="'.$date['2'].'">'.$date['2'].'</option>';?>
				<option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
               
              </select>
            </div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="up">Update</button>
							</div>
						</form>
					</div>
				</div>

				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

						<div><?php if(isset($passwordError))  echo $passwordError; ?>
					</div>

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<?php if(isset($showform)) echo $showform; 
				
				?>

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
}
else
{
	header('location:../index.php');
}
include 'include/footer.php'; 
?>