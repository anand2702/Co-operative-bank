<?php
include("config.php");
$id=$_POST['id'];
$query="Select * from loan where id='$id'";
$res=mysqli_query($con,$query);

?>
<html>
<head>
<?php
include("file.php");
?>
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
   ?>
<br><br><br>
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" ALIGN="CENTER">View loan details by loan id<span class="text-primary"></span> </a></h1>
          
    <form method="POST" action="singleloan.php">Eter loan id:<input type="text" name="id"><br><input type="button" name="submit" value="Click Here"></form>
          </div>

        <br><br><br><br><br>
        <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Address</th>
          <th>Status</th>
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
<td><?php echo $Data['status']?></td>
</tr>
<?php } ?>
      <tbody>
      </tbody>
    </table>
      
</body>
</html>