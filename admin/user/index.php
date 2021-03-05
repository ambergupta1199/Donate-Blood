
<?php 

include 'include/header.php'; 
if(isset($_SESSION['email']) && !empty($_SESSION['email'])) 
{
      
?>


<style>
h1,h3{
    display: inline-block;
    padding: 10px;
}
</style>

        <div class="container" style="padding: 60px 0;">
        <div class="row">
            <div class="col-md-12 col-md-push-1">
                <div class="panel panel-default" style="padding: 20px;">
                    <div class="panel-body">
                        
                            <div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
                        
                                <strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
                            
                            <div class="buttons" style="padding: 20px 10px;">
                                <input type="text" value="" hidden="true" name="today">
                                <button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
                                <button class="btn btn-info" id="no" name="no">No</button>
                            </div>
                          </div>
                        <div class="heading text-center">
                            <h3>Welcome </h3> <h3><?php if(isset($_SESSION['name'])) echo $_SESSION['name']?></h3>
                        </div>
                        <p class="text-center">Here you can manage your account update your profile and check the details of the donors and receivers</p>							
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<?php

include 'include/footer.php'; 
}
else
{
    header('location:../index.php');
}
?>