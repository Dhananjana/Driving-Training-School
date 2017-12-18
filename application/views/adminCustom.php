<?php echo $this->session->flashdata("error");?>
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
            </div>