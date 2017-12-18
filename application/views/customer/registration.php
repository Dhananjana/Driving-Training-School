<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" width='16' height='16' href="<?php echo base_url().'./asset/images/logo.png';?>">
    <title>Kumarasiri Driving School</title>

    <!-- Bootstrap -->
   <link href="<?php echo base_url().'asset/css/bootstrap.min.css';?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/font-awesome.min.css';?>">
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/animate.css';?>">
  <link href="<?php echo base_url().'asset/css/prettyPhoto.css';?>" rel="stylesheet">
  <link href="<?php echo base_url().'asset/css/style.css';?>" rel="stylesheet" />

  
   <?=$menu?>

	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php echo base_url().'customer/home';?>">Home</a></li>
				<li>Registration</li>
        <div><a href="" data-toggle='modal' data-target='#modal-default'>Get Profile</a></div>			
			</div>		
		</div>	
	</div>
	<div class="container">
    <h1 class="well">Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>ID Type</label></t><br>
                <input type="radio" name="idtype" value="nic"> <b>NIC</b> </t></t>
                <input type="radio" name="idtype" value="passport"> <b>Passport</b>
              </div>
              <div class="col-sm-6 form-group">
                <label>ID/Passport Number</label>
                <input name="idnumber" type="text" placeholder="Enter ID Number Here..." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Surname</label>
                <input name="surname" type="text" placeholder="Enter Surname Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Other Name</label>
                <input name="othername"type="text" placeholder="Enter Other Name Here.." class="form-control">
              </div>
              <div class="col-sm-12 form-group">
                <label>Full Name</label>
                <input name="fullname"type="text" placeholder="Enter Full Name Here.." class="form-control">
              </div>

              <div class="col-sm-4 form-group">
                <label>Gender</label></t><br>
                <input type="radio" name="gender" value="male"> <b>Male</b> </t></t>
                <input type="radio" name="gender" value="female"> <b>Female</b>
              </div>
              
              <div class="col-sm-4 form-group">
                <label>Date of Birth</label>
                <input name="dob" type="text" placeholder="Enter DOB Here.." class="form-control">
              </div>

              <div class="col-sm-4 form-group">
                <label>Age</label>
                <input name="age" type="text" placeholder="Enter age Here.." class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label>Permanent Address</label>
              <textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input name="pnumber" type="text" placeholder="Enter phone number Here.." class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label>Division</label>
                <input name="division" type="text" placeholder="Enter division Here.." class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label>Old License Number</label>
                <input name="oldnumber" type="text" placeholder="Enter Old License Number Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Old License Issue Date</label>
                <input name="issueDate" type="text" placeholder="Enter old license issue date Here.." class="form-control">
              </div>    
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <label>Police Station</label>
                <input name="policeStation" type="text" placeholder="Enter nearest police station Here.." class="form-control">
              </div>    
            </div>
            <label>Vehicle Classes</label>            
          <div class="checkbox">
            <div class="row">
          <div class="col-sm-1">
            <label><input type="checkbox" value="A1">A1</label>
            <label><input type="checkbox" value="A">A</label>
            <label><input type="checkbox" value="B1">B1</label>
            <label><input type="checkbox" value="B">B</label>
            <label><input type="checkbox" value="C1">C1</label>
            <label><input type="checkbox" value="C">C1</label>
          </div>
          
          <div class="col-sm-1">
            <label><input type="checkbox" value="CE">CE</label>
            <label><input type="checkbox" value="D1">D1</label>
            <label><input type="checkbox" value="D">D</label>
            <label><input type="checkbox" value="DE">DE</label>
            <label><input type="checkbox" value="G1">G1</label>
            <label><input type="checkbox" value="G">G</label>
          </div>
        </div>
          </div><br>
          <button type="button" class="btn btn-lg btn-info">Submit</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>


</body>
</html>