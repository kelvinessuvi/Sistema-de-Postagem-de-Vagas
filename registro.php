<?php

	require_once 'conexao.php';
	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telemovel = $_POST['telemovel'];
		$morada = $_POST['morada'];
		$sexo = $_POST['sexo'];
		$senha = $_POST['senha'];
		$datanasc = $_POST['dtnascimento'];
		$datadd = date('Y-m-d H-i-s');
		$cv ="";
		$pdo = new PDO('mysql:host='.$host.';dbname='.$name,$user,$pass);
		$sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario,senha,morada_usuario,sexo_usuario,datanasc_usuario,dataadd_usuario,cv) values (?,?,?,?,?,?,?,?,?)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$nome,$email,$telemovel,$senha,$morada,$sexo,$datanasc,$datadd,$cv]);
	}

?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
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
<div class="page-wraper">
    <header class="site-header mo-left header fullwidth">
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <div class="logo-header mostion">
						<a href="index.php">
							<img class="img-logo" src="images/logo/arq-soft-circle.svg" alt="">
						</a>
					</div>
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="login.php" class="site-button"><i class="fa fa-lock"></i> Login</a>
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
								<a href="sobre.php">SOBRE </a>
							</li>
							<li>
								<a href="empresas.php">EMPRESAS </a>
							</li>
							
							<li>
								<a href="vagas.php">VAGAS <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="vagas.php" class="dez-page">Procurar emprego</a></li>
									
								</ul>
							</li>
							
							<li>
								<a href="contactos.php">CONTACTE-NOS</a>
							</li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content bg-white">
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Registro</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Início</a></li>
							<li>Registro</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <div class="section-full content-inner shop-account">
                <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">CRIE UMA CONTA</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form method="POST" id="login" class="tab-pane active">
									<h4 class="font-weight-700">INFORMAÇÃO PESSOAL</h4>
									<p class="font-weight-600">Se você tem uma conta conosco, por favor faça o login .</p>
									<div class="form-group">
										<label class="font-weight-700">NOME *</label>
										<input name="nome" class="form-control" placeholder="Nome" type="text">
									</div>
									<div class="form-group">
										<label>Data de nascimento</label>
										<input name="dtnascimento" class="form-control" type="date">
									</div>
									<div>
										<label>Morada</label>
										<input type="text" class="form-control" name="morada" placeholder="Insira a sua morada">
									</div><br>
									<div class="form-group">
										<label>Sexo</label><br>
										<select name="sexo">
											<option>Masculino</option>
											<option>Femenino</option>
										</select>
									</div>
									<div class="form-group">
										<label>Telemóvel</label>
										<input type="tel" class="form-control" name="telemovel" placeholder="Insira o seu nº de telemóvel">
									</div>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="email" required="" class="form-control" placeholder="Seu Email " type="email">
									</div>
									<div class="form-group">
										<label class="font-weight-700">SENHA *</label>
										<input name="senha" required="" class="form-control " placeholder="Digite a Senha" type="password">
									</div>
									<div class="text-left">
										<button class="site-button button-lg outline outline-2">CRIAR</button>
									</div>

									<div class="text-left mt-2">
										<p>Já possui uma conta? <a href="login.php">Faça o login</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
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
    <button class="scroltop fa fa-chevron-up" ></button>
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
<script src="js/dz.ajax.js"></script>
 

</body>


</html>
