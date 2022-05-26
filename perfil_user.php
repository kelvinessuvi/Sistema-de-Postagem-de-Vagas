<?php
     session_start();

?>
<!DOCTYPE html>
<html lang="PT-PT">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Encontre emprego em arquitetura no SPV" />
	<meta name="format-detection" content="telephone=no">
	<title>Perfil de usuario</title>
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
                    <div class="logo-header mostion">
						<a href="index.php">
							<img class="img-logo" src="images/logo/arq-soft-circle.svg" alt="">
						</a>
					</div>
                    <button style="outline: 0;" class="btn-item navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                                    <ul class="nav navbar-nav">
                                        <li class="item-user">
                                            <a href="sobre.php">Osvaldo Cariege<img class="imagem_usuario ml-2" src="images/author-4.jpg" alt="foto de usuario"> <i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
												<li><a href="index.php" class="dez-page"> TERMINAR SESSÃO</a></li>
                                            </ul>
                                        </li>
										<li class="item-user">
											<span class="item-editar">
												<a href="#">
													<img class="" src="images/sett.png" alt="">
												</a>
											</span>
										</li>
                                    </ul>			
                                </div>
                           
                            <!--<a href="login.html" class="site-button"><i class="fa fa-lock"></i> Login</a>-->
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
								<a href="vagas.php">VAGAS</a>
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
                <div class="dez-bnr-inr-entry user-info">
					<div class="user-imgaes col-md-6">
						<img src="images/author-4.jpg" alt="">
						<h4>Osvaldo Cariege</h4>
						<p>Endereço: Luanda - Angola</p>
						<p>osvaldocariege06@gmail.com</p>
					</div>
					<div class="col-md-6 user-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur ullam, suscipit doloribus ipsa sapiente quas! Obcaecati nesciunt officiis provident, nam accusantium exercitationem itaque sit eligendi rem iusto distinctio molestiae velit nisi minus adipisci. Quod voluptatem eum libero.</p>
						<div class="user-sociais">
							<a href="#" class="item-redes">
								<img src="images/facebook.png" alt="">
							</a>
							<a href="#" class="item-redes">
								<img src="images/whatsapp.png" alt="">
							</a>
							<a href="#" class="item-redes">
								<img src="images/instagram.png" alt="">
							</a>
							<a href="#" class="item-redes">
								<img src="images/twitter.png" alt="">
							</a>
						</div>
					</div>
                </div>
            </div>
        </div>
<script src="js/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="plugins/imagesloaded/imagesloaded.js"></script>
<script src="js/custom.js"></script>
<script src="js/dz.carousel.js"></script>
<script src="js/script.js"></script>
</body>
</html>