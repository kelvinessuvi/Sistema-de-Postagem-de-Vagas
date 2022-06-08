<?php
    
	session_start();
	require 'conexao.php';
	$idusuario = $_SESSION['id_usuario'];
	$id = $_GET['id'];
	$titulo = $_GET['titulo'];
	$descricao = $_GET['descricao'];
	$experiencia = $_GET['experiencia'];
	$data = $_GET['data'];
	$idempresa = $_GET['idempresa'];
	$salario = $_GET['salario'];
	$query2 = "select * from empresa WHERE idempresa=$idempresa";
    $dados1 = mysqli_query($connection,$query2);
	if($dados1){
		$total = mysqli_num_rows($dados1);
		if($total > 0){
			while($linha = mysqli_fetch_assoc($dados1)){
				$morada = $linha['morada_empresa'];
			}
		}
	}
	if(isset($_POST['candidatar'])){
		$userr = $_SESSION['id_usuario'];
		$query1 = "select * from candidatura WHERE usuario_idusuario=$user";
    	$dados2 = mysqli_query($connection,$query1);
		if($dados2){
			$total1 = mysqli_num_rows($dados2);
			if($total1 > 0){
				echo "
				<script>
					alert('Você já se candidatou a esta vaga.');
					window.location.href='vaga.php';
				</script>
				";
			}
		}
		else{
			$vaga = $_POST['vaga'];
			$empresa = $_POST['idempresa'];
			$estado = "ENVIADA";
			$dataa = date("Y-m-d H:i:s");
			$pdo = new PDO('mysql:host='.$host.';dbname='.$name,$user,$pass);
			$sql = "INSERT INTO candidatura (dataadd_candidatura,estado_candidatura,usuario_idusuario,vaga_id_vaga,vaga_empregador_idempregador) values (?,?,?,?,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$dataa,$estado,$userr,$vaga,$empresa]);
			echo "<script>alert('A sua candidatura foi enviada com sucesso!Aguarde pelo contacto de empresa.')</script>";
		}
	}	


	 
?>
<!DOCTYPE html>
<html lang="pt-PT">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<title>spv</title>
	
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
<div id="loading-area"></div>
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
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Informações da vaga</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Informações da Vaga</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <div class="content-block">
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="images/blog/grid/pic1.jpg" alt="">
										</div>
									</div>
									<form method="POST">
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Informações da vaga</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Endereço</strong><span class="text-black-light"><?=$morada?></span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salário Inicial</strong> <?=number_format($salario)?> KZ</li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experiência Requerida</strong><?=$experiencia?></li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30"><?=$titulo?></a>
								</h3>
								
								<h5 class="font-weight-600">Descrição da Vaga</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0">
									  <input type="hidden" name="idempresa" value="<?=$idempresa?>">
									  <input type="hidden" name="idusuario" value="<?=$idusuario?>">
									  <input type="hidden" name="vaga" value="<?=$id?>">
									  <?=$descricao?>

								</div>
								
								<button name="candidatar" class="site-button">Candidatar-se</button>
								</form>
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
								<form class="dzSubscribe" action="" method="post">
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
    <button class="scroltop fa fa-chevron-up"></button>
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
</body>


</html>
