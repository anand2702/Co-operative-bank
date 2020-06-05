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
                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

<center>
<div class="boxed">
Open new account</div>
<div class="col-md-1">
  <div class="col-md-10 text-center">    <hr>
  </div>
</div>
  <div class="col-md-1"></div>
</div>
<?php
if($Id=='')
{
?>

<?php
include("navbar.php");
?>
<form  method="post">
<div class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> Open new account</legend>
<input type="text" name="Fname" placeholder="First Name *">
<input type="text" name="MName" placeholder="Middle Name *">

<input type="text" name="Lname" placeholder="Last Name *">
<input type="text" name="Addr1" placeholder="First address *">
<input type="text" name="Addr2" placeholder="Second Address *">
<input type="text" name="City" placeholder="City *">
<input type="text" name="Pincode" placeholder="Pincode *">
<input type="text" name="field1" placeholder="Area *">
<input type="text" name="field1" placeholder="Phone *">



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
    <label class="control-label col-sm-2" for="FName">First Name</label>
    <div class="col-sm-10">
      <input type="FName" class="form-control" id="FName" name="FName" placeholder="Enter your first name" value="<?php echo $Data['FName']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="MName">Middle Name</label>
    <div class="col-sm-10">
      <input type="MName" class="form-control" id="MName" name="MName" placeholder="Enter your middle name" value="<?php echo $Data['MName']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="LName">Last Name</label>
    <div class="col-sm-10">
      <input type="LName" class="form-control" id="LName" name="LName" placeholder="Enter your last name" value="<?php echo $Data['Lname']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Addr1">First Address</label>
    <div class="col-sm-10">
      <input type="Addr1" class="form-control" id="Addr1" name="Addr1" placeholder="Enter your first address" value="<?php echo $Data['Address1']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Addr2">Second Address</label>
    <div class="col-sm-10">
      <input type="Addr2" class="form-control" id="Addr2" name="Addr2" placeholder="Enter your second address"  value="<?php echo $Data['Address2']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="City">City</label>
    <div class="col-sm-10">
      <input type="City" class="form-control" id="City" name="City" placeholder="Enter your city"  value="<?php echo $Data['City']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Pincode">Pin Code</label>
    <div class="col-sm-10">
      <input type="Pincode" class="form-control" id="Pincode" name="Pincode" placeholder="Enter your pin code"   value="<?php echo $Data['PinCode']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Area">Area</label>
    <div class="col-sm-10">
      <input type="Area" class="form-control" id="Area" name="Area" placeholder="Enter your area"  value="<?php echo $Data['Area']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone number</label>
    <div class="col-sm-10">
      <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"  value="<?php echo $Data['PhoneNumber']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Sal">Salary(in thousend)</label>
    <div class="col-sm-10">
      <input type="Sal" class="form-control" id="Sal" name="Sal" placeholder="Enter your salaty"   value="<?php echo $Data['Salary']?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="DOJ">DOJ</label>
    <div class="col-sm-10">
      <div id="datetimepicker4" class="input-append">
        <input data-format="yyyy-MM-dd" class="form-control" type="date" id="DOJ" name="DOJ"  placeholder="Enter your date of join"  value="<?php echo $Data['DOJ']?>">
        </input>
        <span class="add-on"> <i data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span> </div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="DOB">DOB</label>
    <div class="col-sm-10">
      <div id="datetimepicker5" class="input-append">
        <input data-format="yyyy-MM-dd" class="form-control" type="date" id="DOB" name="DOB"  placeholder="Enter your date of birth"  value="<?php echo $Data['DOB']?>">
        </input>
        <span class="add-on"> <i data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span> </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="Modify" value="Modify">
    </div>
  </div>
</form>
<?php } ?>
