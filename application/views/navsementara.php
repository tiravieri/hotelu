<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/footer.css">
		<style>
			.active a{
				color: white !important;
			}
			
			.nav-item > a:hover{
				color : white!important;
			}
			.nav-item a{
				color:#0BD3D5;
				font-weight:600;
				font-size:18px;
			}
			.navbar{
				background-color: black;
			}
		</style>
		
	</head>

	<body>
	<?php
		$hal = $this->uri->segment(1);
	?>
	<div class="container-fluid p-0 blkg">
			<nav class="navbar navbar-expand-lg fixed-top bg-transparent">			  
			  <div class="collapse navbar-collapse mr-3" id="navbarNav">
					<ul class="nav navbar-nav navbar-right ml-auto">
					
						<li class="nav-item">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item <?=($hal=='C_Profile')?'active':'';?>">
						<a class="nav-link" href="<?php echo site_url('C_Profile/index') ?>">Profile</a>
						</li>
						<!-- <li class="nav-item">
						<a class="nav-link" href="#">Pay</a>
						</li> -->
						<li class="nav-item <?=($hal=='C_Kamar')?'active':'';?>">
						<a class="nav-link" href="<?php echo site_url('C_Kamar/index') ?>">Kamar</a>
						</li>
						
					</ul>
			  </div>
			  <a href="<?php echo site_url('C_Akun/index') ?>"><button class="btn btn-sm btn-primary" type="button" style="font-weight:600; font-size:14px">LOGIN</button></a>
			</nav>
	</div>	

	<div class="container-fluid p-0">
            <img src="<?php echo base_url();?>assets/image/backhotel.png" width=100% height=500px>
	</div>
</body>
