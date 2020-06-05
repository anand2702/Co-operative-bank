<?php
include("config.php");
$id=$_POST['id'];
$query="Select * from account where acc='$id'";
$res=mysqli_query($con,$query);

?>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

    </style>
</head>

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
   include("navbar.php");
   ?>                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
<br><br><br>
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" ALIGN="CENTER">View loan details by loan id<span class="text-primary"></span> </a></h1>
          
    <form method="POST" action="viewsingleacc.php">Enter account:<input type="text" name="id"><br><input type="button" name="submit" value="Click Here"></form>
          </div>

        <br><br><br><br><br>
        <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Address</th>
          <th>Type</th>
        </tr>
      <thead>

        <?php 
while($Data = mysqli_fetch_array($res))
  { 
?>  
<tr>
<td><?php echo $Data['id']?></td>
<td><?php echo $Data['name']?></td>
<td><?php echo $Data['amount']?></td>
<td><?php echo $Data['address']?></td>
<td><?php echo $Data['type']?></td>
</tr>
<?php } ?>
      <tbody>
      </tbody>
    </table>
      
</body>
</html>