<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Mokhammad Iqbal - 19.01.63.0004 - PEMROGRAMAN WEB MOBILE</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

	<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"  crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

	<!-- Custom styles for this template -->
	<link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">NorthWind DB</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url('customers'); ?>">Customers <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('employees'); ?>">Employees</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('products'); ?>">Products</a>
				</li>
<!-- 				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="<?php //echo base_url('customers'); ?>">Customers</a>
						<a class="dropdown-item" href="<?php //echo base_url('employees'); ?>">Employees</a>
						<a class="dropdown-item" href="<?php //echo base_url('products'); ?>">Products</a>
					</div>
				</li>
 -->			</ul>
			<!-- <form class="form-inline my-2 my-lg-0"> -->
				<!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
				<a href="<?php echo base_url('logout'); ?>" class="btn btn-danger my-2 my-sm-0" type="submit">Logout</a>
			<!-- </form> -->
		</div>
	</nav>

	<main role="main" class="container">
		<div class="alert alert-info" role="alert">
	  		Selamat Datang, <b><?php echo $this->session->userdata('username'); ?></b>
		</div>
		<?php $this->load->view('alert'); ?>
		<?php $this->load->view($content); ?>
		<br>
		<p align="center">by Mokhammad Iqbal<br> NIM 19.01.63.0004</p>

	</main>
	<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	    $(document).ready( function () {
	      $('#myTable').DataTable();
	    } );
	</script>
</body>
</html>
