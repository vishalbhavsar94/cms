<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('vendors/iconfonts/mdi/css/materialdesignicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/css/vendor.bundle.base.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('vendors/css/vendor.bundle.addons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/loading.css');?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<?php
		if(!empty($pagecss) || isset($pagecss)){
		
			foreach($pagecss as $css)
			print_r("<link rel='stylesheet' href='".base_url('assets/css/'.$css)."'>\n");
		}
	?>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" />
	<script src="<?php echo base_url('vendors/js/jquery-3.3.1.min.js');?>"></script>
</head>

<body>
<div class="container-scroller">
