<?php
     session_start();

?>
<DOCTYPE html>
<html lang="PT-PT">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Encontre emprego em arquitetura no SPV" />
	<meta name="format-detection" content="telephone=no">
	<title>SPV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<link rel="stylesheet" href="css/style-input.css">
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
    <header class="site-header mo-left header fullwidth">
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <div class="logo-header ">
						<!-- <a href="index.html"> -->
							 <img class="img-logo" src="images/logo/arq-soft-circle.svg">
							 
						<!-- </a> -->
					</div>
                    <button style="outline: 0;" class="btn-item navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav">
                        <div class="extra-cell">
						<?php
						 if(isset( $_SESSION['nome_usuario'])) {
						 echo  $_SESSION['nome_usuario'];
						 echo " <a href='logout.php' class='site-button'><i class='fa fa-lock'></i> Logout</a>"; }
						 else{

						 

						?>
                            <a href="registro.php" class="site-button"><i class="fa fa-user"></i> Cadastrar</a>
                            <a href="login.php" class="site-button"><i class="fa fa-lock"></i> Login</a>
							<?php
						}
							
							?>
                        </div>
                    </div>
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php" style="background: brown;">ÍNICIO</a>
							</li>

							<li>
								<a href="sobre.php">SOBRE <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="contactos.php" class="dez-page"> CONTACTE-NOS</a></li>
								</ul>
							</li>
							<li>
								<a href="empresas.php">EMPRESAS </a>
							</li>
							<li>
								<a href="login.php">SIGNIN </a>
							</li>
							<li>
								<a href="registro.php">SIGNUP </a>
							</li>
							
							
							<li>
								<a href="vagas.php">VAGAS</a>
							</li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content">
		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(images/arquit/bn.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m ">
					<div class="find-job-bx">
						<p class="site-button button-sm" style="background: brown">Encontre empregos e oportunidades para sua carreira de arquiteto</p>
						<h2 style="color:brown;"background: brown">Aqui terás oportunidades e facilidades de encontar o melhor emprego de sua vida <br/> <span class="text-primary"></span></h2>
						<form class="dezPlaceAni">
							<div class="row col-md-12">
								<div class="col-lg-10 col-md-12">
									<div class="form-group">
										<label id="title">Titulo da vaga e palavras chaves</label>
										<div class="input-group">
											<input type="text" id="inputTitle" class="form-control" placeholder="">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								
							
								<div class="col-lg-2 col-md-6">
									<button type="submit" class="site-button btn-block" style="background: brown">Procurar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="m-b5">Vagas disponíveis</h2>
						<h6 class="fw4 m-b0">+ de 04 vagas adicionadas</h5>
					</div>
					<div class="align-self-end">
						<a href="vagas.php" class="site-button button-sm" style="background: brown">Busque todas as vagas <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				
			</div>
		</div>
	    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                        	SPV	
							<p class="text-capitalize m-b20">Subscreve na nossa newsletter para raceber notificaçôes sempre que tiver uma vaga nova</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="http://job-board.w3itexperts.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Insira o seu email" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl"style="background: brown">Subscrever</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12 perguntas-frequentes">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Perguntas frequentes</h5>
                            <div class="list-2 list-line">
                                <div>
									<a href="#">
										<p>O que um arquiteto faz?</p>
									</a>
								</div>
								<div>
									<a href="sobre.php">
										<p>Qual é o foco e a concentração de uma arquiteto?</p>
									</a>
								</div>
								<div>
									<a href="sobre.php">
										<p>O que um arquiteto deve ter noçâo?</p>
									</a>
								</div>
								
                            </div>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Encontre emprego</h5>
                            <div class="list-2 list-line">
                                <div>
									<a href="#">link</a>
								</div>
								<div>
									<a href="#">link</a>
								</div>
								<div>
									<a href="#">link</a>
								</div>
								<div>
									<a href="#">link</a>
								</div>
								<div>
									<a href="#">link</a>
								</div>
								
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="#">Todos os direitos reservados</a></span></div>
                </div>
            </div>
        </div>
    </footer>
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<script src="js/jquery.min.js"></script>
<script src="plugins/wow/wow.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="plugins/magnific-popup/magnific-popup.js"></script>
<script src="plugins/counter/waypoints-min.js"></script>
<script src="plugins/counter/counterup.min.js"></script>
<script src="plugins/imagesloaded/imagesloaded.js"></script>
<script src="plugins/masonry/masonry-3.1.4.js"></script>
<script src="plugins/masonry/masonry.filter.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/rangeslider/rangeslider.js" ></script>
<script src="js/custom.js"></script>
<script src="js/dz.carousel.js"></script>
<script src='js/recaptcha/api.js'></script>
<script src="js/dz.ajax.js"></script>
<script src="plugins/paroller/skrollr.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>