<html>
<head>
	<title> My Story </title>
	<!-- <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/flatly/bootstrap.css"> -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script><!-- buat editor pas create article, y satu lagi taruh di footer-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-expand-md navbar-dark bg-secondary">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>posts">My Story</a>
		</div>
		<!-- <div class="navbar justify-content-start">
			<ul class="nav navbar-nav">
				<li><a href="">You've logged in</a></li>
			</ul>
		<div> -->
		<div class="navbar navbar-collapse collapse justify-content-end navbar-dark">
			<ul class="nav navbar-nav">
				<li class="nav-item"><a class="nav-link" style="color:white"  href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
				<li class="nav-item"><a class="nav-link" style="color:white" href="<?php echo base_url(); ?>logout">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
