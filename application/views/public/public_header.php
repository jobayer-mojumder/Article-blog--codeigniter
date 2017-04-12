<!DOCTYPE html>
<html>
<head>
	<title>Article list</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
	<script src="<?= base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
	<script src="<?= base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 15px;">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo base_url('index'); ?>">My Blog</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
	      <li><a href="<?php echo base_url('all_article'); ?>">All Article</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="<?php echo base_url('newuser'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      <li><a href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container">