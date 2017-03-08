<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/bootstrap.min.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/font-awesome.min.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/alertifyjs/css/alertify.min.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/jquery-ui-1.12.1/jquery-ui.min.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/estilo.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/jquery.orgchart.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/toastr-master/toastr-master/build/toastr.min.css')?>" />
	

	<script type="text/javascript" src="<?=base_url('includes/js/jquery-1.12.3.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/jquery-ui-1.12.1/jquery-ui.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/js/jquery.easing.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/js/jquery.mask.min.js')?>"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
	<script type="text/javascript" src="<?=base_url('includes/alertifyjs/alertify.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/js/tag-it.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/toastr-master/toastr-master/build/toastr.min.js')?>"></script>
	
	<title><?=$title?></title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url('')?>">Organograma</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url('pessoa/cadastro')?>">Cadastro</a></li>
        <li><a href="<?=base_url('pessoa/lista')?>">Lista</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>