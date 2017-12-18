<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" width='16' height='16' href="<?php echo base_url().'./asset/images/logo.png';?>">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap/dist/css/bootstrap.min.css';?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/font-awesome/css/font-awesome.min.css';?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/Ionicons/css/ionicons.min.css';?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/AdminLTE.min.css';?>">
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/AdminLTE.css';?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/skins/skin-blue.min.css';?>">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function()
  {
      refresh();
  });

  function refresh()
  {
      setTimeout(function()
      {
          $('#tableID').load('<?php echo base_url()?>main/load');
          refresh();
      }, 1000);
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
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
    
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">dash</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Dashboard</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        
        <ul class="nav navbar-nav">
          

          <!-- Notifications Menu -->
          <!--<li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <!--<ul class="menu">
                  <li><!-- start notification -->
                    <!--<a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members request to join+ today
                    </a>
                  </li>
                  <!-- end notification -->
                <!--</ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>-->
          
                        
            
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Dhananjana</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>main/logout" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Dhananjana Milinda</p>          
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="#user"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="#shedule"><i class="fa  fa-list"></i> <span>Shedule</span></a></li>
        <!--<li><a href="#email"><i class="fa fa-envelope-o"></i><span>Quick Email</span></a></li>-->
          
        <li><a href="<?php echo base_url().'customer/home';?>"><i class="fa fa-users"></i><span>Customer</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--<h1>
        Page Header
        <small>Optional description</small>

      </h1>-->
      <center><img src="dist/img/logo.png" alt="logo" width="200" height="120"></center>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- TABLE: USERS -->
          <div class="box box-info" id="user">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Customer</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <?=$table?>
            <!-- /.box-header -->
            <!--<?php echo $this->session->flashdata("error");?>
            <div class="box-body pre-scrollable" id="tableID">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Classes</th>
                    <th>Joined Date</th>
                    <th>Exam Date</th>
                    <th>Trial Date</th>
                    <th>Phone Number</th>
                    <th>Payment Details</th>
                    <th>Upadte user</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($customer_data as $row) {
                        $id = $row->customerNIC;
                        $name = $row->name;
                        $classes = $row->classes;
                        $jdate = $row->joinedDate;
                        $edate = $row->examDate;
                        $tdate = $row->trialDate;
                        $pnumber = $row->phoneNumber;
                        $pdetails = $row->paymentDetails;
                        echo "<tr>";
                        echo "<td id='id$id'>";
                        echo $id;
                        echo "</td>";
                        echo "<td id='name$id'>";
                        echo $name; 
                        echo "</td>";
                        echo "<td id='classes$id'>";
                        echo $classes;
                        echo "</td>";
                        echo "<td id='jdate$id'>";
                        echo $jdate;
                        echo "</td>";
                        echo "<td id='edate$id'>";
                        echo $edate;
                        echo "</td>";
                        echo "<td id='tdate$id'>";
                        echo $tdate;
                        echo "</td>";
                        echo "<td id='pnumber$id'>";
                        echo $pnumber;
                        echo "</td>";
                        echo "<td id='pdetails$id'>";
                        echo $pdetails;
                        echo "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-block btn-primary btn-xs' onclick='passData($id)'>Edit</button>";
                        echo "<button class='btn btn-block btn-danger btn-xs' onclick='deletebtn($id)'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                     
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            <!--</div>-->
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>

            
          <!-- Shedule -->
          <div class="box box-primary" id="shedule">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Shedule</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                
                  <?php
                    foreach ($h->result() as $row) {
  
                      ?>
                      <li>
                      <!-- drag handle -->
                      <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                      <!-- checkbox --> 
                      <input type="checkbox" value="">
                      <!-- todo text -->
                     
                        <span class="text"> <?php echo $row->eventTitle;?></span>
                        <span class="text"><?php echo $row->Date; ?> </span>
                     
                      
                      
                    <?php }
                    ?>
                  
                  
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right" data-toggle="modal"  data-target="#modal-aditem"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Pass And Fail</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <?php echo form_open("trial_controller/insert_data"); ?>
                <div class="form-group">
                  <label>Date:</label>
                  <input type="date" class="form-control" id="email" placeholder="Date" name="date">
                  
                </div>
                <div class="form-group">
                  <label>Type:</label>
                  <label class="checkbox-inline"><input type="checkbox" value="trial" name="checktype">Trial</label>
                <label class="checkbox-inline"><input type="checkbox" value="exam" name="checktype">Exam</label>
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Participation:</label>
                  <input type="number" class="form-control" id="email"  placeholder="No of participants" name="participation">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fail Number:</label>
                  <input type="number" class="form-control" id="email" placeholder="No of fails" name="fail_count">
                  
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <?php echo form_close(); ?>
            
          </div>
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Add Admin</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <?php echo form_open("main/registration"); ?>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name">
                  <span><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                  <label>NIC</label>
                  <input type="number" class="form-control" placeholder="Enter NIC" name="id" id="num" required onkeyup="checkID(); return false;">
                  <span><?php echo form_error('id'); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  <span><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <span><?php echo form_error('password'); ?></span>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <?php echo form_close(); ?>
            
          </div>

          <!--modal for user table-->
          <div class="modal modal-default fade" id="Editmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Customer</h4>
              </div>
              <div class="modal-body">
               <!-- general form elements -->
          
            <div class="box-header with-border">
              <h3 class="box-title">Customer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open("main/updateCustomer"); ?>
              <div class="box-body">
                <div class="form-group">
                  <label>NIC number</label>
                  <input type="number" name="customernic" readonly id="customernic" class="form-control">
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="customername" readonly id="customername" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Classes</label>
                  <input type="text" name="customerclasses" id="customerclasses" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Joined Date</label>
                  <input type="date" name="customerjdate" id="customerjdate" class="form-control">
                </div>
                <div class="form-group">
                  <label>Exam Date</label>
                  <input type="date" name="customeredate" id="customeredate" class="form-control">
                </div>
                <div class="form-group">
                  <label>Trial Date</label>
                  <input type="date" name="customertdate" id="customertdate" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="number" name="customerpnumber" id="customerpnumber" class="form-control">
                </div>
                <div class="form-group">
                  <label>Payment Details</label>
                  <input type="text" name="customerpayment" id="customerpayment" class="form-control">
                </div>
                
              </div>
              <!-- /.box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <?php echo form_close(); ?>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
          
        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>Do you want to delete the customer ID?</p>
                <?php echo form_open("Main/deleteCust"); ?>
              </div>
              <div class="form-group">
                    <label>ID</label>
                    <input name='idnumber' class="form-control" type="text"  id="del_id" readonly>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
                <?php echo form_close(); ?>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!--logo-->
        
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Group project 
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Kumarasiri Driving Training School</a>.</strong> All rights reserved.
  </footer>

<script type="text/javascript">
function passData(id){
        var id = document.getElementById('id'+id).innerText;
        var name = document.getElementById('name'+id).innerText;
        var classes = document.getElementById('classes'+id).innerText;
        var jdate = document.getElementById('jdate'+id).innerText;
        var edate = document.getElementById('edate'+id).innerText;
        var tdate = document.getElementById('tdate'+id).innerText;
        var pnumber = document.getElementById('pnumber'+id).innerText;
        var pdetails = document.getElementById('pdetails'+id).innerText;
        $("#Editmodal").modal("show");

        document.getElementById('customernic').value = id;
        document.getElementById('customername').value = name;
        document.getElementById('customerclasses').value = classes;
        document.getElementById('customerjdate').value = jdate;
        document.getElementById('customeredate').value = edate;
        document.getElementById('customertdate').value = tdate;
        document.getElementById('customerpnumber').value = pnumber;
        document.getElementById('customerpayment').value = pdetails;
    
    }
function deletebtn(id){
        //console.log(id);
        var id = document.getElementById('id'+id).innerText;
        //console.log(id);
        $("#modal-danger").modal("show");
        document.getElementById('del_id').value = id;           
    }
</script>  
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'bower_components/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'bower_components/bootstrap/dist/js/bootstrap.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'dist/js/adminlte.min.js';?>"></script>


</body>
</html>