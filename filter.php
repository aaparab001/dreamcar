	<?php include 'database.php';
	$sql="SELECT * FROM cars";

    $result = mysqli_query($conn, $sql);
?>
<html>
<head>
<title>Cars</title>	
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/panel.css" rel="stylesheet">

	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(img/Preloader_1.gif) center no-repeat #fff;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
		
</head> 

<body style="margin:0;"> 
<div class="se-pre-con"></div>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
				<a class="navbar-brand" href="index.html">DreamCar</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="filter.php">Cars</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html">Team</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html">About DreamCar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.jpg" alt="" width="250px" height="300px">
                    <div class="intro-text">
                        <span class="name">DreamCar</span>
						<h4>We believe in your Dreams</h4>
                        <hr class="star-light">
                        <span class="skills">
						</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<br><br><br><br>

<div data-role="main" class="ui-content">
<div class="row">
							<div class="col-sm-3">
								</div>
								<div class="col-sm-6 search responsive">
								<form>
									<input type="text" id="filterTable-input1" data-type="search" placeholder="Type Brand name or Model name">
								</form>
								</div>
								<div class="col-sm-3">
								</div>
<br><br><br><br>
<div class="row">
  <div class="panel panel-default text-center">
  <div class="panel-body">
    <p><h3><b>Brands Currently Available</b></h3><br><hr>
    <h5>Honda, Hyundai, Mahindra, Maruti, Nissan, Renault, Rolls-Royce, Skoda, Toyota, Volkswagen</h5></p>
  </div>
  </div>  

</div>
</div>
								<br>


	<div class="row slideanim" data-filter="true" data-input="#filterTable-input1">

	
<?php	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result))
		{         
?>
		<div class="col-sm-6 col-xs-12">
			<div class="panel-heading responsive">
				<h1><?php echo $row['brand']; ?> <?php echo $row['model']; ?></h1>
			</div>
		<a href="product.php?iname=<?php echo $row['brand'].$row['model'];?>&id=<?php echo $row['ID'];?>">
    		<div class="panel panel-default text-center">
			<div class="panel-body">
				<img class="image-responsive" src="Images/front/<?php echo $row['brand'].$row['model'];?>.jpg" width="350" height="250"/><br> 
			</div>
			<div class="panel-footer">
			<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
		    <form action="product.php" method="post" >
				<input type="submit" name="<?php echo $row['brand'].$row['model'];?>" value="Click to see more..." class="btn btn-danger">
			</form>
			</div>
			<div class="col-sm-3"></div></div>
			</div>
			</div>
		</a>
		</div>     
	<?php
        }
    ?>
	</div>
</div>
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
	} 
	?>	
		</div>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; DreamCar 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


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
	
	
	
	
	
	
			