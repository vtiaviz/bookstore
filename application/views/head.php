!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookStore - A sua loja de livros</title>

   <!-- Bootstrap Core CSS -->
   <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=base_url()?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>admin/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?=base_url()?>admin/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?=base_url()?>admin/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>admin/css/custom.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="icon.ico">

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <!-- <a class="navbar-brand" href="#">BookStore</a> -->
            <a class="area" href="<?=base_url()?>livro"><i class="fa fa-cog"></i> Área Administrativa</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top navbar-top-links">
            <li><a href="<?=base_url()?>web"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>
        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <img src="<?=base_url()?>admin/img/logo.png" width="100%">
                    </li>
                    <li>
                        <a href="<?=base_url()?>livro" class=""><i class="fa fa-book fa-fw"></i> Livros</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>autor" class=""><i class="fa fa-male fa-fw"></i> Autores</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>editora" class=""><i class="fa fa-edit fa-fw"></i> Editoras</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>acesso/logout" class=""><i class="fa fa-times-circle fa-fw"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gestão de Livros - BookStore</h1>
                </div>
            </div>
            <?php if (isset($alert)) { ?>
                <div class="alert alert-<?php
                $a = explode('-', isset($alert) ? $alert : '');
                echo $a[0];
                ?>">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php
                    $a = explode('-', isset($alert) ? $alert : '');
                    echo $a[1];
                    ?>
                </div>
            <?php } ?>
