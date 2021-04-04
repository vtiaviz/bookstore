<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BookStore - A sua loja de livros.</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?=base_url()?>admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?=base_url()?>admin/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?=base_url()?>admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="<?=base_url()?>admin/css/custom.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="icon.ico">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3>Acesso Restrito:</h3>
                        </div>
                        <div class="logo">
                            <img src="<?=base_url()?>admin/img/logo.png" width="70%">
                        </div>
                        <hr>
                        <div class="panel-body">
                            <form action="<?= base_url('acesso/logar') ?>" method="post" name="login">
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
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuário" name="username" id="username" type="name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="password" id="password" type="password" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="button" onclick="valida_login()" class="btn btn-lg btn-primary btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <p class="logo">
                        <span>Desenvolvido por Victor Aviz &copy; 2021</span>-<a href="<?=base_url()?>web"> <i class="fa fa-home fa-fw"></i> Website</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?=base_url()?>admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?=base_url()?>admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?=base_url()?>admin/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?=base_url()?>admin/js/startmin.js"></script>

        <!-- Validação JavaScript -->
        <script src="<?=base_url()?>admin/js/validar.js"></script>

    </body>
</html>
