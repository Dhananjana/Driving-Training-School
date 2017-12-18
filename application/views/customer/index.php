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
	<?php echo $this->session->flashdata("error");?>
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url().'asset/images/slider/img1.jpg';?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Welcome To<span> Kumarasiri Driving School</span></h2>
                                    <p class="animation animated-item-2">Better place to learn Driving...</p>
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                               
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>about us</h2>
				<img src="<?php echo base_url().'asset/images/about.jpg';?>" class="img-responsive"/>
				
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>The things you should Know about us.</h2>
				<p>Kumarasiri Learners is a leading driving trainnig school in Gampaha.We help people to get their driving licene by leagally.</p>
				<p>We have well trained Staff to traine beginners,to teach all about the road signals and to train for the government examination.</p>
				
			</div>
		</div>
	</div>
	
	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Lates News</h2>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="<?php echo base_url().'asset/images/indoor.jpg';?>" class="img-responsive"/>
				<h3>Indoor Training</h3>
				<p>For the complete begginers,we do a couple of indoor sessions to introduce the main parts(Steering wheel,Break padals,Cluch padal,Accerlarator,Gear system) that every driver must know.
				</p>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="<?php echo base_url().'asset/images/certificate.jpg';?>" class="img-responsive"/>
				<h3>Certificates for service excellance</h3>
				<p>For our great service to train begginers for driving,Kumarasiri Driving School has awarded by Srilanka Transport Board.
				</p>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<img src="<?php echo base_url().'asset/images/news.jpg';?>" class="img-responsive"/>
				<h3>Special Packages</h3>
				<p>We facilitate Special packages for our customers.They can choose their own package.There are New packages for specially for ladies.
				</p>
			</div>
		</div>
	</div>
	
	
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Please contact us.Always we are there to help you. 0714404760</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy;  All Rights Reserved.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                           
                        </div>
					</div>
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>

	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url().'asset/js/jquery-2.1.1.min.js';?>"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'asset/js/bootstrap.min.js';?>"></script>
	<script src="<?php echo base_url().'asset/js/jquery.prettyPhoto.js';?>"></script>
    <script src="<?php echo base_url().'asset/js/jquery.isotope.min.js';?>"></script>  
	<script src="<?php echo base_url().'asset/js/wow.min.js';?>"></script>
	<script src="<?php echo base_url().'asset/js/functions.js';?>"></script>
	
</body>
</html>