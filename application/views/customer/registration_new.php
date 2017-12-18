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
   <br><br><br>
   <script type="text/javascript">
  function check()
      {

        var pass1 = document.getElementById('mobile');
        var goodColor = "#ffffff";
        var badColor = "#FF9B37";

        if(mobile.value.length!=10){//validate for ten numbers
        mobile.style.backgroundColor = badColor;//if the input worng this colour
        }
        else{
          mobile.style.backgroundColor = goodColor;//if the input correct this colour
        }
     }
  function checkID()
      {

        var pass1 = document.getElementById('num');
        var goodColor = "#ffffff";
        var badColor = "#FF9B37";

        if(num.value.length!=9){//validate for nine numbers
        num.style.backgroundColor = badColor;
        }
        else{
          num.style.backgroundColor = goodColor;
        }
     }
     function validateDate(){
      var date=document.getElementById('dob').value;//validate when adding user age larger than 18
      var Cnow=new Date();//current Date
      var goodColor = "#ffffff";
      var badColor = "#FF9B37";
      //console.log(date);
      var parts =date.split('-');
     
      var mydate = new Date(parts[0],parts[1]-1,parts[2]);
      console.log(mydate);

      if(Cnow.getFullYear()- mydate.getFullYear()<18){//if age less than 18 show badcolour
        dob.style.backgroundColor = badColor;
        
     }
      else if(Cnow.getFullYear()- mydate.getFullYear()>150){//if age larger than or equal to 150 years show bad colour
        dob.style.backgroundColor = badColor;
     
    }
      else if(Cnow.getFullYear()- mydate.getFullYear()==150){
        dob.style.backgroundColor = badColor;
      }
      else{
       dob.style.backgroundColor = goodColor;
    }


     }
  </script>
  <div id="breadcrumb">
    <div class="container"> 
      <div class="breadcrumb">              
        <li><a href="<?php echo base_url().'customer/home';?>">Home</a></li>
        <li>Registration</li>     
      </div>    
    </div>  
  </div>
  
	<div class="container">
     
    <h1 class="well">Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
     <?php echo form_open('customer/register_customer')?>
         <!-- <form action="<?php base_url();?>customer/register_customer" method="post"> --> 
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>NIC Number</label>
                <input name="nic" required type="number" id="num" onkeyup="checkID(); return false;"  class="form-control">
              </div>
              <div class="col-sm-12 form-group">
                <label>Full Name</label>
                <input name="fullname" required type="text" placeholder="Enter Full Name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Gender</label></t><br>
                <input type="radio" name="gender" value="male"> <b>Male</b> </t></t>
                <input type="radio" name="gender" value="female"> <b>Female</b>
              </div>
              
              <div class="col-sm-6 form-group">
                <label>Date of Birth</label>
                <input name="dob" onfocusout="validateDate();" required id="dob" type="date" placeholder="Enter DOB Here.." class="form-control">
              </div>         
            <div class="col-sm-12 form-group">
              <label>Permanent Address</label>
              <textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input  name="pnumber" id="mobile" onkeyup="check(); return false;" type="text" placeholder="Enter phone number Here.." class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label>Division</label>
                <input name="division" required type="text" placeholder="Enter division Here.." class="form-control">
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
                <input name="policeStation" required type="text" placeholder="Enter nearest police station Here.." class="form-control">
              </div>    
            </div>
            <!-- check boxes -->
            <label>Vehicle Classes</label>            
          <div class="checkbox">
            <div class="row">
          <div class="col-sm-1">
            <label><input type="checkbox" name="vehicle_class" value="A1">A1</label>
            <label><input type="checkbox" name="vehicle_class" value="A">A</label>
            <label><input type="checkbox" name="vehicle_class" value="B1">B1</label>
            <label><input type="checkbox" name="vehicle_class" value="B">B</label>
            <label><input type="checkbox" name="vehicle_class" value="C1">C1</label>
            <label><input type="checkbox" name="vehicle_class" value="C">C1</label>
          </div>
          
          <div class="col-sm-1">
            <label><input type="checkbox" name="vehicle_class" value="CE">CE</label>
            <label><input type="checkbox" name="vehicle_class" value="D1">D1</label>
            <label><input type="checkbox" name="vehicle_class" value="D">D</label>
            <label><input type="checkbox" name="vehicle_class" value="DE">DE</label>
            <label><input type="checkbox" name="vehicle_class" value="G1">G1</label>
            <label><input type="checkbox" name="vehicle_class" value="G">G</label>
          </div>
        </div>
          </div><br>
          <button type="submit" class="btn btn-lg btn-info">Request</button>         
          </div>
          </div>
         <!-- </form> --> 
        </div>
  </div>
  </div>
<!-- jQuery 3 -->
<script src="<?php echo base_url().'bower_components/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'bower_components/bootstrap/dist/js/bootstrap.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'dist/js/adminlte.min.js';?>"></script>

</body>
</html>