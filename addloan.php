<?php
session_start();
?>
<html>
<head>
<?php
include("file.php");
include("form_css.php");
?>
    
</head>
<?php
include("config.php");
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$Area = $_POST['Area'];

$DOB = $_POST['DOB'];
$phone = $_POST['phone'];


//print_r($_POST);
if($_POST['submit'])
{

$Ins = "insert into account set FName='$FName',MName='$MName',LName='$LName',Address1='$Addr1',Address2='$Addr2',City='$City',PinCode='$Pincode',Area='$Area',DOJ='$DOJ',DOB='$DOB',PhoneNumber='$phone',Salary='$Sal'";
$Rsc = mysqli_query($con,$Ins) or die(mysqli_error());

header("location:account.php?msg=succ");

}
?>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
<?php
include('navbar.php');
?>

                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

<center>
<div class="boxed">
Apply for loan</div>
  <br>
<div class="col-md-1">
  <div class="col-md-10 text-center"> <br>
    <hr>
  </div>
</div>
  <div class="col-md-1"></div>
</div>
<?php
if($Id=='')
{
?>

<form method="post">
<div class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> Apply for loan</legend>
<input type="text" name="Fname" placeholder="First Name *">
<input type="text" name="MName" placeholder="Middle Name *">

<input type="text" name="Lname" placeholder="Last Name *">
<input type="text" name="Addr1" placeholder="First address *">
<input type="text" name="Addr2" placeholder="Second Address *">
<input type="text" name="City" placeholder="City *">
<input type="text" name="Pincode" placeholder="Pincode *">
<input type="text" name="field1" placeholder="Area *">
<input type="text" name="field1" placeholder="Phone *">
<input type="text" name="field1" placeholder="Loan Amount">

<input type="text" name="field1" placeholder="Bank account no">


<input type="email" name="field2" placeholder="Enter email id *">
<input type="submit" name="submit" value="Submit" onClick="validation();">


</form>
</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="accountID">
    <?php if($_GET['msg']=='succ') { echo " save successfuly";}?>
    </label>
  </div>
      
    </div>
  </div>
</form>
<?php
 } 
 else { ?>
<form class="form-horizontal" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="accountID">
    <?php if($_GET['msg']=='succ') { echo " save successfuly";}?>
    </label>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="Modify" value="Modify">
    </div>
  </div>
</form>
<?php } ?>
