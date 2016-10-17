<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'database.php';
  $id = $_GET['id'];
  $iname=$_GET['iname'];
  $sql="SELECT * FROM cars WHERE ID='$id'";

  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result))
    {         
?>

  <title><?php echo $row['brand']; ?>&nbsp;&nbsp;<?php echo $row['model']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="css/product.css">
	<link rel="stylesheet" href="panel.css">
     <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
    <nav id="mainNav" class="container navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="index.html">DreamCar</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
<br><br><br><br><br><br>
<div class="container">
<div class="row">
  <div class="panel panel-default text-center">
  <div class="panel-heading">
    <p><h3><b><?php echo $row['brand']; ?>&nbsp;&nbsp;<?php echo $row['model']; ?></b></h3>
    <h4></h4></p>
  </div>
  </div>  
</div>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm">
  <div class="mydiv">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
		      <img class="img-responsive center-block" src="Images/front/<?php echo $iname;?>.jpg" width="600px" height="400px">
        </div>
        <div class="item">
		      <img class="img-responsive center-block" src="Images/Interior1/<?php echo $iname;?>.jpg" width="600px" height="400px">
        </div>
        <div class="item">
          <img class="img-responsive center-block" src="Images/Interior2/<?php echo $iname;?>.jpg" width="600px" height="400px">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
  </div>
  <br><hr><br><br>
  
<div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
		<h4 align="left"><b>Car Description</b></h4>
		<div class="panel panel-default text-center">
		<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
			<table width="750" style="table-layout: auto;">
				<thead>
				<tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
				  <th style="padding-left: 25px;"><h4>Property</h4></th>
				  <th><h4>Description</h4></th>
				</tr>
				</thead>
				<tbody>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Brand</td>
				  <td><?php echo $row['brand']; ?></td>
				</tr>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Model</td>
				  <td><?php echo $row['model']; ?></td>
				</tr>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Version</td>
				  <td><?php echo $row['version']; ?></td>
				</tr>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Price</td>
				  <td>&#8377; <?php echo $row['price']; ?></td>
				</tr>
				<tr style="line-height: 250%;" style="line-height: 250%;">
				  <td style="padding-left: 25px;">EMI</td>
				  <td>&#8377; <?php echo $row['emi']; ?></td>
				</tr>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Insurance</td>
				  <td>&#8377; <?php echo $row['insurance']; ?></td>
				</tr>
				<tr style="line-height: 250%;">
				  <td style="padding-left: 25px;">Service Cost</td>
				  <td>&#8377; <?php echo $row['service_cost']; ?></td>
				</tr>
				</tbody>  
			</table>
		</div>
	</div>
    </div>
    <div class="col-sm-2"></div>  
</div><hr>

<div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
		<h4 align="left"><b>Engine Description</b></h4>
		<div class="panel panel-default text-center">
		<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
			<table width="750" style="table-layout: fixed;">
				<thead>
					<tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
					  <th style="padding-left: 25px;"><h4>Property</h4></th>
					  <th><h4>Description</h4></th>
					</tr>
				</thead>
				<tbody>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Engine Type</td>
					  <td><?php echo $row['engine_type']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Engine Description</td>
					  <td><?php echo $row['engine_description']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Engine Displacement</td>
					  <td><?php echo $row['engine_displacement']; ?></td>
					</tr>
					<tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
					  <td style="padding-left: 25px;">Number of Cylinders</td>
					  <td><?php echo $row['num_cylinders']; ?></td>
					</tr>
					<tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
					  <td style="padding-left: 25px;">Maximum Power</td>
					  <td><?php echo $row['max_power']; ?></td>
					</tr>
					<tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
					  <td style="padding-left: 25px;">Maximum Torque</td>
					  <td><?php echo $row['max_torque']; ?></td>
					</tr>
					<tr style="line-height: 250%;" style="line-height: 250%;">
					  <td style="padding-left: 25px;">Valves per Cylinder</td>
					  <td><?php echo $row['valves_per_cylinder']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Valve Configuration</td>
					  <td><?php echo $row['valve_config']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Fuel Supply System</td>
					  <td><?php echo $row['fuel_supp_system']; ?></td>
					</tr>
					<tr style="line-height: 250%;" style="line-height: 250%;">
					  <td style="padding-left: 25px;">Bore Stroke</td>
					  <td><?php echo $row['bore_stroke']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Compression Ratio</td>
					  <td><?php echo $row['comp_ratio']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Turbo Charger</td>
					  <td><?php echo $row['turbo_charger']; ?></td>
					</tr>
					<tr style="line-height: 250%;">
					  <td style="padding-left: 25px;">Super Charger</td>
					  <td><?php echo $row['super_charger']; ?></td>
					</tr>
				</tbody>  
			</table>
		</div></div>
    </div>
    <div class="col-sm-2"></div>  
</div><hr>

<div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
		<h4 align="left"><b>Transmission System</b></h4>
		<div class="panel panel-default text-center">
		<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
			   <table width="750" text-align="center" style="table-layout: fixed;">
			  <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
     <tbody>
        <tr style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Transmission Type</td>
          <td><?php echo $row['trans_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Gear Box</td>
          <td><?php echo $row['gear_box']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Drive Type</td>
          <td><?php echo $row['drive_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Clutch Type</td>
          <td><?php echo $row['clutch_type']; ?></td>
        </tr>
      </tbody>  
 </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Suspension System</b></h4>
<div class="panel panel-default text-center">
 	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
     <tbody>
        <tr style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Front Suspension</td>
          <td><?php echo $row['f_suspension']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Rear Suspension</td>
          <td><?php echo $row['r_suspension']; ?></td>
        </tr>
      </tbody>  
    </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Steering System</b></h4>
 <div class="panel panel-default text-center">
	<div class="panel-body"></div>
 		<div class="x" style="overflow-x:auto">
    <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
      <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Steering Type</td>
          <td><?php echo $row['steer_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Steering Column</td>
          <td><?php echo $row['steer_column']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Steering Gear Type</td>
          <td><?php echo $row['steer_gear_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Turning Radius</td>
          <td><?php echo $row['turn_radius']; ?></td>
        </tr>
      </tbody>  
       </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Brakes System</b></h4>
<div class="panel panel-default text-center">
 	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
     <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Front Brake Type</td>
          <td><?php echo $row['front_brake_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Rear Brake Type</td>
          <td><?php echo $row['rear_brake_type']; ?></td>
        </tr>
      </tbody>  
     </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Performance</b></h4>
<div class="panel panel-default text-center">
 	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
     <tbody>
        <tr style="line-height: 250%;" style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Top Speed</td>
          <td><?php echo $row['top_speed']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Acceleration (0-100 kmph)</td>
          <td><?php echo $row['acceleration']; ?></td>
        </tr>
      </tbody>  
     </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Fuel System</b></h4>
<div class="panel panel-default text-center">
<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
 	     <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Mileage (city)</td>
          <td><?php echo $row['mileage_city']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Mileage (highway)</td>
          <td><?php echo $row['mileage_highway']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Fuel Type</td>
          <td><?php echo $row['fuel_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Fuel Tank Capacity(in Litres)</td>
          <td><?php echo $row['fuel_tank_cap']; ?></td>
        </tr>
        <tr style="line-height: 250%;" style="line-height: 250%;">
          <td style="padding-left: 25px;">Emission Norm Compliance</td>
          <td><?php echo $row['emission_norm_comp']; ?></td>
        </tr>
      </tbody>  
     </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Tyres</b></h4>
<div class="panel panel-default text-center">
  	<div class="panel-body"></div>
 		<div class="x" style="overflow-x:auto">
     <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
    <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Tyre Size</td>
          <td><?php echo $row['tyre_size']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Tyre Type</td>
          <td><?php echo $row['tyre_type']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Wheel Size</td>
          <td><?php echo $row['wheel_Size']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Alloy Wheel Size</td>
          <td><?php echo $row['alloy_wheel_size']; ?></td>
        </tr>
      </tbody>  
      </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Other Specifications</b></h4>
<div class="panel panel-default text-center">
	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
      <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Seating Capacity</td>
          <td><?php echo $row['seating_cap']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">No. of Doors</td>
          <td><?php echo $row['num_doors']; ?></td>
        </tr>
      </tbody>  
     </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Warranty Details</b></h4>
 <div class="panel panel-default text-center">
	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
     <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
      <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Warranty Time</td>
          <td><?php echo $row['warranty_time']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Warranty Distance</td>
          <td><?php echo $row['warranty_distance']; ?></td>
        </tr>
      </tbody>  
     </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Exterior Dimensions</b></h4>
 <div class="panel panel-default text-center">
	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
     <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
      <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Length</td>
          <td><?php echo $row['length']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Width</td>
          <td><?php echo $row['width']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Height</td>
          <td><?php echo $row['height']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Ground Clearance</td>
          <td><?php echo $row['ground_clearance']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Wheel Base</td>
          <td><?php echo $row['wheel_base']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Gross Weight</td>
          <td><?php echo $row['gross_weight']; ?></td>
        </tr>
      </tbody>  
 </table></div>
    </div></div>
    <div class="col-sm-2"></div>  
  </div>
  <hr>

  <div class="row"> 
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 align="left"><b>Standard Features</b></h4>
 <div class="panel panel-default text-center">
	<div class="panel-body"></div>
		<div class="x" style="overflow-x:auto">
      <table width="750" text-align="center" style="table-layout: fixed;">
      <thead>
        <tr style="background-color: #4CAF50;color:#E0FFE0;line-height: 300%;">
          <th style="padding-left: 25px;"><h4>Property</h4></th>
          <th><h4>Description</h4></th>
        </tr>
      </thead>
     <tbody>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Air Conditioner</td>
          <td><?php echo $row['air_conditioner']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">CD Player</td>
          <td><?php echo $row['cd_player']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Anti-Lock Braking System</td>
          <td><?php echo $row['antilock_braking']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Power Steering</td>
          <td><?php echo $row['power_steering']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Power Windows</td>
          <td><?php echo $row['power_windows']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Leather Seats</td>
          <td><?php echo $row['leather_seats']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Central Locking</td>
          <td><?php echo $row['central_locking']; ?></td>
        </tr>
        <tr style="line-height: 250%;">
          <td style="padding-left: 25px;">Parking Sensors</td>
          <td><?php echo $row['parking_sensors']; ?></td>
        </tr>
      </tbody>  
   </table></div></div>
    </div>
    <div class="col-sm-2"></div>  
  </div><hr>
</div>
<!--
<div class="container text-center">    
<div class="col-sm-4">
<div class="col-sm-6">
<a href="index.html"><button type="button" class="btn btn-success">GO HOME</button></a>  
</div>
<div class="col-sm-6"></div>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="col-sm-7"></div>
<div class="col-sm-5">
<a href="filter.php"><button type="button" class="btn btn-success">GO BACK</button></a>  
</div>
</div>
</div>-->
<div class="container">
  <ul class="pager">
    <li class="previous"><a href="filter.php">Back</a></li>
  </ul>
</div>

<br>
  <?php
        }
    ?>
  <?php 
  }
    else
    {
  ?>
        <div class="row">
            <div class="col-sm-12">
        <div class="alert alert-warning">
                <h4>Error Fetching Records
                </div>
            </div>
    <?php 
  } ?>  
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</h4>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>
</html>
