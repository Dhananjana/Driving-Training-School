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
								<li role="presentation"><a href="<?php echo base_url().'customer/registration';?>">Profile</a></li>
								<li role="presentation"><a href='<?php echo base_url().'customer/signout'; ?>'>Sign Out</a></li>
													
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>
				
	</header>