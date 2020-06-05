<?php
include("config.php");
$query="Select * from user";
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
include('navbar.php');
?>

                  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
<br><br><br>
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" ALIGN="CENTER">View User details<span class="text-primary"></span> </a></h1>
          </div>

        <br><br><br><br><br>
        <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Account No.</th>
          <th>Address</th>
          <th>Pin code</th>
          <th>Phone No.</th>
        </tr>
      <thead>

      	<?php 
while($Data = mysqli_fetch_array($res))
	{ 
?>	
<tr>
<td><?php echo $Data['id']?></td>
<td><?php echo $Data['name']?></td>

<td><?php echo $Data['acc']?></td>
<td><?php echo $Data['address']?></td>
<td><?php echo $Data['pin']?></td>

<td><?php echo $Data['phone']?></td>
</tr>
<?php } ?>
      <tbody>
      </tbody>
    </table>
      
</body>
</html>