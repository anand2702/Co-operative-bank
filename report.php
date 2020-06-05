<html>
<head>
<?php
include("file.php");
include("form_css.php");

?>
</head>
<?php
session_start();

include("config.php");
$Id = $_GET['id'];
$amnt = $_POST['amnt'];
$accno = $_POST['accno'];
$dptype = $_POST['dptype'];
if($_POST['submit'])
{
$sel = "select * from report set amnt='$amnt',acno='$accno',cname='$name',dtype='$dptype'";
$Rsc = mysqli_query($con,$Ins) or die(mysqli_error());
header("location:report.php?msg=succ");
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


<div class="boxed">
  report 
</div>
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

<form  method="post">
<div class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> report</legend>
<input type="text" name="cname" placeholder="Customer name *">

<input type="text" name="accno" placeholder="Account No. *">

<input type="text" name="dptype" placeholder="report type *">

<input type="text" name="rprt" placeholder="Report detail *">

<input type="submit" name="submit" value="Submit" onClick="validation();">


</form>
</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="reportID">
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
    <label class="control-label col-sm-2" for="reportID">
    <?php if($_GET['msg']=='succ') { echo " save successfuly";}?>
    </label>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!--<button type="submit" class="btn btn-default">Submit</button>-->
      <input type="submit" name="Modify" value="Modify">
    </div>
  </div>
</form>
<?php } ?>
