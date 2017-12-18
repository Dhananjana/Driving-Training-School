</head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo base_url().'customer/home';?>"><h1><span>KUMARASIRI</span>Driving School</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url().'customer/home';?>">Home</a></li>
								<li role="presentation"><a href="<?php echo base_url().'customer/about';?>" >About Us</a></li>
								<li role="presentation"><a href="<?php echo base_url().'customer/service';?>">Services</a></li>								
								<li role="presentation"><a href="<?php echo base_url().'customer/registration_new';?>">Registration</a></li>
								<li role="presentation"><a href="" data-toggle='modal' data-target='#modal-default'>Search Profile</a></li>
							  <li role="presentation"><a href='<?php echo base_url().'customer/signout'; ?>'>Sign Out</a></li>       
                  
              </ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>
		<div class="container">
        <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                        <div class="login-box">
                          
                      <div class="login-logo">
                        <h3><b>Kumarasiri</b>Driving Training School</h3>
                      </div>
  <!-- /.login-logo -->
                      <div class="login-box-body">
                          <p class="login-box-msg"><h4>Enter the user NIC</h4></p>

                          <form action="<?php echo base_url().'profile_con';?>" method="post">
                            <div class="form-group has-feedback">
                            <input type="number" class="form-control" name="NICnumber">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            
                            </div>
                            
                        <div class="row">
                          <div class="col-xs-4">
                              <input 
                                type="submit" 
                                class="btn btn-default pull-left" 
                                name="Sign_button" 
                                style="margin-left: 20px" 
                                value="Search" >
                                <?php echo $this->session->flashdata("error");?>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button 
                              type="button" 
                              class="btn btn-default pull-left" 
                              data-dismiss="modal" 
                              style="margin-left: 720px ; margin-top: -60px">Close</button>
                              <?php echo form_close(); ?>
                        </div>


    </form>

    
  </div>
  <!-- /.login-box-body -->
</div>
                      

             
                        </div>
                      
                  </div>
                </div>
                  <!-- /.modal-content -->
                
          <!-- /.modal-dialog -->
            </div>
          </div>		
	</header>