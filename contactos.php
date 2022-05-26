<?php
     session_start();

?>
<!DOCTYPE html>
<html lang="en">


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
							<li>
								<a href="index.php" >ÍNICIO</a>
							</li>
							<li>
								<a href="sobre.php">SOBRE <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li class="active">
                                        <a href="contactos.php" class="dez-page"> CONTACTE-NOS</a>
                                    </li>
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
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contacte-nos</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Início</a></li>
							<li>Contacte-nos</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">

					<div class="col-lg-4 col-md-6 d-lg-flex d-md-flex">
                        <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch radius-sm">
							<h4 class="m-b10">Contato rápido</h4>
							<p>Se você tiver alguma dúvida, basta usar os seguintes detalhes de contacto.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Morada:</h6>
                                        <p> Rua lest, Victoria Brava 3000 Angola</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                        <p>info@exemplo.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Telefone</h6>
                                        <p>949319139</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dez-social-icon dez-social-icon-lg">
									<li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
								</ul>
							</div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-6">
                        <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
							<h4>Envie-nos uma mensagem</h4>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="http://job-board.w3itexperts.com/xhtml/script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Seu Namo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Seu Email " >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Sua Mensagem ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Enviar</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-12 d-lg-flex m-b30">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:350px;" allowfullscreen></iframe>
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
                            spv
							<p class="text-capitalize m-b20">Subscreve na nossa newsletter para raceber notificaçôes sempre que tiver uma vaga nova</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="http://job-board.w3itexperts.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl" style="background: brown">Subscrever</button>
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
									<p>O que um arquiteto faz?</p>
								</div>
								<div>
									<p>Qual é o foco e a concentração de uma arquiteto?</p>
								</div>
								<div>
									<p>O que um arquiteto deve ter noçâo?</p>
								</div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Encontre emprego</h5>
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
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="https://www.templateshub.net">Todos os direitos resarva</a></span></div>
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
<script src='js/recaptcha/api.js'></script> 
<script src="js/dz.ajax.js"></script>
</body>

</html>
