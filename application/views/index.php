<!doctype html>
<html lang="pt-br">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>BookStore - A sua loja de livros</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=base_url()?>site/css/animate.css">
        <link rel="stylesheet" href="<?=base_url()?>site/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>site/css/media-queries.css">
        <link rel="stylesheet" href="<?=base_url()?>site/css/carousel.css">
		
		<link rel="stylesheet" href="<?=base_url()?>admin/css/custom.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="icon.ico">
    </head>

    <body>
		<!-- Top menu -->
		<nav class="navbar navbar-dark fixed-top navbar-expand-md">
			<div class="container">
				<a class="navbar-brand head" href="<?= base_url('web') ?>">BookStore</a>
                <a class="link" href="<?= base_url('entrar') ?>"><i class="fa fa-cog"></i> Área Administrativa</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link scroll-link" href="#top-content">Destaques</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll-link" href="#section-1">Categorias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll-link" href="#section-2">Autores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll-link" href="#section-3">Editoras</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll-link" href="#section-4">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Top content -->
		<div class="top-content">
			<div class="container-fluid">
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner row w-100 mx-auto" role="listbox">
						<?php $i = 0 ?>
						<?php foreach ($livros as $row): ?>
							<?php 
								if($i == 0) { 
									$active = 'active';
								} else $active = '';

								if($row->categoria_livro == 1) { 
									$img = 'img';
								}elseif($row->categoria_livro == 2) { 
									$img = 'img1';
								}elseif($row->categoria_livro == 3) { 
									$img = 'img2';
								}elseif($row->categoria_livro == 4) { 
									$img = 'img3';
								}elseif($row->categoria_livro == 5) { 
									$img = 'img4';
								}
							?>
							<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 <?= $active ?>">
								<span class="livro <?= $img ?>">
									<div class="row">
										<div class="autor"><div class="label">Autor:</div><?= $row->nome_autor; ?></div>
										<div class="titulo"><?= $row->titulo_livro; ?></div>
										<div class="editora"><div class="label">Editora:</div><?= $row->nome_editora; ?></div>
									</div>
								</span>
							</div>
							<?php $i++ ?>
						<?php endforeach; ?>
					<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
		</div>
		<hr>
		<!-- Section 1 -->
		<div class="section-1-container section-container">
			<div class="container">
				<div class="row">
					<div class="col section-1 section-description wow fadeIn">
						<h1>BookStore - Categorias</h1>
						<p>
							Há 25 anos no mercado literario a <strong>BookStore</strong> sempre oferta os livros <strong>mais Buscados</strong> na internet. Em nossa loja você pode ter a certeza que está na melhor  e maior loja de livros do Brasil!
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 section-1-box wow fadeInUp">
						<div class="row">
							<div class="col-md-4 cor1">
								<div class="section-1-box-icon">
									<i class="fas fa-book"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Ação</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 section-1-box wow fadeInDown">
						<div class="row">
							<div class="col-md-4">
								<div class="section-1-box-icon">
									<i class="fas fa-jedi"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Ficção Cientifica</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 section-1-box wow fadeInUp">
						<div class="row">
							<div class="col-md-4">
								<div class="section-1-box-icon">
									<i class="fa fa-heart"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Romance</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 section-1-box wow fadeInUp">
						<div class="row">
							<div class="col-md-4">
								<div class="section-1-box-icon">
									<i class="fas fa-cog"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Técnico</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 section-1-box wow fadeInDown">
						<div class="row">
							<div class="col-md-4">
								<div class="section-1-box-icon">
									<i class="fas fa-motorcycle"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Aventura</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 section-1-box wow fadeInUp">
						<div class="row">
							<div class="col-md-4">
								<div class="section-1-box-icon">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h3>Desenvolvimento Pessoal</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Section 2 -->
		<div class="section-2-container section-container section-container-gray-bg">
			<div class="container">
				<div class="row">
					<div class="col section-2 section-description wow fadeIn">
					</div>
				</div>
				<div class="row">
					<div class="col section-2-box wow fadeInLeft">
						<h3>Autores</h3>
						<p class="medium-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
							Ut wisi enim ad minim veniam, quis nostrud. 
							Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
							Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
							Ut wisi enim ad minim veniam, quis nostrud. 
							Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Section 3 -->
		<div class="section-3-container section-container">
			<div class="container">
				
				<div class="row">
					<div class="col section-3 section-description wow fadeIn">
						<h2>Editoras</h2>
						<div class="divider-1 wow fadeInUp"><span></span></div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 section-3-box wow fadeInLeft">
						<div class="row">
							<div class="col-md-3">
								<div class="section-3-box-icon">
									<i class="fas fa-paperclip"></i>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Ut wisi enim ad minim</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
									Ut wisi enim ad minim veniam, quis nostrud.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 section-3-box wow fadeInLeft">
						<div class="row">
							<div class="col-md-3">
								<div class="section-3-box-icon">
									<i class="fas fa-pencil-alt"></i>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Sed do eiusmod tempor</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
									Ut wisi enim ad minim veniam, quis nostrud.
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 section-3-box wow fadeInLeft">
						<div class="row">
							<div class="col-md-3">
								<div class="section-3-box-icon">
									<i class="fas fa-cloud"></i>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Quis nostrud exerci tat</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
									Ut wisi enim ad minim veniam, quis nostrud.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 section-3-box wow fadeInLeft">
						<div class="row">
							<div class="col-md-3">
								<div class="section-3-box-icon">
									<i class="fab fa-google"></i>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Minim veniam quis nostrud</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
									Ut wisi enim ad minim veniam, quis nostrud.
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Section 4 -->
		<div class="section-4-container section-container section-container-image-bg">
			<div class="container">
				<div class="row">
					<div class="col section-4 section-description wow fadeInLeftBig">
						<h2>Contato</h2>
						<p>
							Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
							aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
						</p>
					</div>
				</div>
			</div>
		</div>
        <!-- Footer -->
        <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	Desenvolvido por Victor Aviz &copy; 2021
                    </div>
					<div class="col">
                    	<a href="<?= base_url('entrar') ?>"><i class="fa fa-cog"></i> Área Administrativa</a>
                    </div>
                    
                </div>
	        </div>
                	
        </footer>

        <!-- Javascript -->
		<script src="<?=base_url()?>site/js/jquery-3.3.1.min.js"></script>
		<script src="<?=base_url()?>site/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>site/js/jquery.backstretch.min.js"></script>
        <script src="<?=base_url()?>site/js/wow.min.js"></script>
        <script src="<?=base_url()?>site/js/scripts.js"></script>

    </body>

</html>