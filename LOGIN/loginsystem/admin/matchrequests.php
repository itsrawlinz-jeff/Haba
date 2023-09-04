<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Manage Users</title>
    <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href='mobile-style.css' />

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg" style="background-color:maroon !important;">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside style="background-color:white">
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Haba <?php echo $_SESSION['login'];?></h5>
              	  	
                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <!--<li class="sub-menu">-->
                  <!--    <a href="manage-users.php" >-->
                  <!--        <i class="fa fa-users"></i>-->
                  <!--        <span>Manage Users</span>-->
                  <!--    </a>-->
                   
                  </li>
                  <li class="sub-menu">
                      <a href="https://habadatingclub.com/LOGIN/loginsystem/admin/matchrequests.php" >
                          <i class="fa fa-users"></i>
                          <span>Match Requests</span>
                      </a>
                   
                  </li>
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Haba Match Requests</h3>
				<div class="row">
				<!--<input type="button" onclick="PrintTable();" value="Print Report"/>-->

                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <div id="dvContents" >

                          <table class="table">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Match Requests </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th scope="col">Sno.</th>
                                  <th scope="col" >Name</th>
                                  <th scope="col"> Email</th>
                                  <th scope="col"> Country</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Date Of Birth</th>
                                  <th scope="col">Gender</th>
                                  <th scope="col">Required Gender</th>
                                  <th scope="col">Relationship Status</th>
                                  <th scope="col">Smoke Status</th>
                                  <th scope="col">Drink Status</th>
                                  <th scope="col">Income Amount</th>
                                  <th scope="col">Partner Age</th>
                                  <!--<th>Partner Max Age</th>-->
                                  <th scope="col">Chronic Illness Status</th>
                                  <th scope="col">Partner Drink Status</th>

                                  <th>Plan</th>
                                  <th>Membership</th>
                                
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from matchrequests");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr scope="row">
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fullname'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['country'];?></td>
                                  <td><?php echo $row['contact'];?></td>
                                  <td><?php echo $row['dob'];?></td>
                                  <td><?php echo $row['gender'];?></td>
                                  <td><?php echo $row['pgender'];?></td>
                                  <td><?php echo $row['rstatus'];?></td>
                                  <td><?php echo $row['smoke'];?></td>
                                  <td><?php echo $row['drink'];?></td>
                                  <td><?php echo $row['income'];?></td>
                                  <td><?php echo $row['partnerage'];?></td>
                                  <td><?php echo $row['chronic'];?></td>
                                  <td><?php echo $row['pdrink'];?></td>
                                  <td><?php echo $row['plan'];?></td>
                                  <td><?php echo $row['membership'];?></td>

                                  <td>
                                     
                                     <!-- <a href="update-profile.php?uid=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-users.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a> -->
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
  <script type="text/javascript">
    function PrintTable() {
        var printWindow = window.open('', '', 'height=200,width=400');
        printWindow.document.write('<html><head><title>Table Contents</title>');
 
        //Print the Table CSS.
        var table_style = document.getElementById("table_style").innerHTML;
        printWindow.document.write('<style type = "text/css">');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');
 
        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("dvContents").innerHTML;
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');
 
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>