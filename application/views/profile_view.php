<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'asset/css/bootstrap.min.css';?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/font-awesome.min.css';?>">
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/animate.css';?>">
  <link href="<?php echo base_url().'asset/css/prettyPhoto.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'asset/css/style.css';?>" rel="stylesheet" />
    
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<?=$menu?>

    
		
			<!-- <div class="col-md-9"> -->
<br><br><br>	
<div class="container">
            <div class="col-md-6">
						<h4>UPDATE DETAILS</h4>
						<small>You can only update following details only</small>
            <div class="container">
  
            <?php if ($this->session->flashdata('success_msg')) { ?>
              <div class="alert alert-success">
              <h5 class="text-success"><?php echo $this->session->flashdata('success_msg');?></h5>

              </div>
            <?php }?>
            <?php if($this->session->flashdata('error_msg')){?>
              
              <div class="alert alert-danger">
              <h5 class="text-danger"><?php echo $this->session->flashdata('error_msg');?></h5>

              </div>
              <?php } ?>

    
						 <form action="<?php echo base_url('profile_con/update/');?>" method="post">
                            <div class="form-group disable">
                                <br/>
   								 <label for="lname">NIC No</label>
   								 <input type="text" class="form-control" value="<?php echo $user->nic_number?>" name="nic_number" required readonly>  
  							</div>  
                <div class="form-group">
  						      
   								<label for="fname">Full Name</label>
   								<input type="text" class="form-control" value="<?php echo $user->full_name?>" name="full_name" required>
  							</div>
  							<div class="form-group">
   								 <label for="lname">Date of Birth</label>
   								 <input type="text" class="form-control" value="<?php echo $user->dob?>" name="dob" required>  
                            </div>
                            <div class="form-group">
   								 <label for="lname">Address</label>
   								 <input type="text" class="form-control" value="<?php echo $user->address?>" name="address" required>  
  							</div>
  							<div class="form-group">
   								<label for="pwd">Phone Number</label>
    							<input type="text" class="form-control" value="<?php echo $user->phone_no?>" name="phone_no" required>
  							</div>
  		
  							<button type="submit" class="btn btn-default">Update</button>
							</form> 
						
					</div>
          <div>

</div>
</div>
   
	
	
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>