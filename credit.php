<html>
<head>
  <?php
include("file.php");
?>
  
  <style type="text/css">
    .boxed {
  background-color: black;
  border: 1px solid white ;
  font-family: "Times New Roman", Times, serif;
    font-size: 30px;
    color: red;
    text-align: center;
}
.form-style-5{
  max-width: 500px;
  padding: 10px 20px;
  background: #f4f7f8;
  margin: 10px auto;
  padding: 20px;
  background: #f4f7f8;
  border-radius: 8px;
  font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
  border: none;
}
.form-style-5 legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}
.form-style-5 label {
  display: block;
  margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
  font-family: Georgia, "Times New Roman", Times, serif;
  background: rgba(255,255,255,.1);
  border: none;
  border-radius: 4px;
  font-size: 15px;
  margin: 0;
  outline: 0;
  padding: 10px;
  width: 100%;
  box-sizing: border-box; 
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box; 
  background-color: #e8eeef;
  color:#8a97a0;
  -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
  background: #d2d9dd;
}
.form-style-5 select{
  -webkit-appearance: menulist-button;
  height:35px;
}
.form-style-5 .number {
  background: #1abc9c;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
  position: relative;
  display: block;
  padding: 19px 39px 18px 39px;
  color: #FFF;
  margin: 0 auto;
  background: #1abc9c;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  width: 100%;
  border: 1px solid #16a085;
  border-width: 1px 1px 3px;
  margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
  background: #109177;
}
  </style>
</head>
<?php
session_start();

include("config.php");
$Id = $_GET['id'];
$amnt = $_POST['amnt'];
$accno = $_POST['accno'];
$dptype = $_POST['dptype'];

//print_r($_POST);
if($_POST['submit'])
{

$Ins = "insert into credit set amnt='$amnt',acno='$accno',LName='$LName',dtype='$dptype'";
$Rsc = mysqli_query($con,$Ins) or die(mysqli_error());

header("location:credit.php?msg=succ");

}

if($Id!='')
{
  $Del = "select * from credit where id='$Id'";
  $Rsc1 = mysqli_query($con,$Del);
  $Data = mysqli_fetch_array($Rsc1);
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
  credit amount
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
<legend><span class="number">1</span> credit amount</legend>
<input type="text" name="accno" placeholder="Account No. *">
<input type="text" name="dptype" placeholder="credit type *">

<input type="text" name="amnt" placeholder="Amount *">
<input type="submit" name="submit" value="Submit" onClick="validation();">


</form>
</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="creditID">
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
    <label class="control-label col-sm-2" for="creditID">
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
