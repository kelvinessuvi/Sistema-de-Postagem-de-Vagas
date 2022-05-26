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
						<a href="index.html">
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
                            <a href="registro_empresa.php" class="site-button"><i class="fa fa-user"></i> Cadastrar Empresa</a>
                            <a href="dashboard_empresa/index.php" class="site-button"><i class="fa fa-lock"></i> Login</a>
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
								<a href="index.php">ÍNICIO</a>
							</li>
							<li>
								<a href="sobre.php">SOBRE <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="contactos.php" class="dez-page"> CONTACTE-NOS</a></li>
								</ul>
							</li>
							<li  class="active">
								<a href="empresas.php" style="background: brown;">EMPRESAS </a>
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
                    <h1 class="text-white">Empresas</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Início</a></li>
							<li>EmpresaS</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <div class="content-block">
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="site-filters clearfix center  m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>A</span></a> 
							</li>
							<li data-filter="web" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>B</span></a> 
							</li>
							<li data-filter="advertising" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>C</span></a> 
							</li>
							<li data-filter="branding" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>D</span></a> 
							</li>
							<li data-filter="design" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>E</span></a> 
							</li>
							<li data-filter="photography" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>F</span></a> 
							</li>
							<li data-filter="" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>G</span></a> 
							</li>
							<li data-filter="web" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>H</span></a> 
							</li>
							<li data-filter="advertising" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>I</span></a> 
							</li>
							<li data-filter="branding" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>J</span></a> 
							</li>
							<li data-filter="design" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>K</span></a> 
							</li>
							<li data-filter="photography" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>L</span></a> 
							</li>
							<li data-filter="" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>M</span></a> 
							</li>
							<li data-filter="web" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>N</span></a> 
							</li>
							<li data-filter="advertising" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>O</span></a> 
							</li>
							<li data-filter="branding" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>P</span></a> 
							</li>
							<li data-filter="design" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>Q</span></a> 
							</li>
							<li data-filter="photography" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>R</span></a> 
							</li>
							<li data-filter="" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>S</span></a> 
							</li>
							<li data-filter="web" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>T</span></a> 
							</li>
							<li data-filter="advertising" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>U</span></a> 
							</li>
							<li data-filter="branding" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>V</span></a> 
							</li>
							<li data-filter="design" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>W</span></a> 
							</li>
							<li data-filter="photography" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>X</span></a> 
							</li>
							<li data-filter="" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>Y</span></a> 
							</li>
							<li data-filter="web" class="btn">
								<input type="radio">
								<a href="#" class="site-button-secondry radius-sm"><span>Z</span></a> 
							</li>
						</ul>
					</div>
					<ul id="masonry" class="dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
						<li class="web card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo1.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="advertising card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo2.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="branding card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic3.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo3.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="design card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic4.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo4.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="photography card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic5.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo1.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="web card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic6.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo2.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="advertising card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic7.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo3.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="web card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic8.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo1.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="branding card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic9.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo2.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="design card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo3.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="web card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo4.png" alt="">
									</div>
								</div>
							</div>
						</li>
						<li class="photography card-container col-lg-3 col-md-4 col-sm-4">
							<div class="dez-gallery-box">
								<div class="dez-media overlay-black-light">
									<a href="javascript:void(0);"> <img src="images/gallery/pic3.jpg"  alt=""> </a>
									<div class="overlay-icon overlay-logo">
										<img src="images/logo/logo/logo1.png" alt="">
									</div>
								</div>
							</div>
						</li>
					</ul>
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
										<input name="dzEmail" required="required"  class="form-control" placeholder="seu email" type="email">
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
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="https://www.templateshub.net">Todos os direitos reservados</a></span></div>
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
<script type="text/javascript">

			$("#exp-slider-range").slider({
				range: true,
				min: 0,
				max: 10,
				//values: [0, 10],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val( min + " year - " + max + " year");
				}
			});
			
			$("#salary-slider-range").slider({
				range: true,
				min: 10,
				max: 100,
				//values: [10, 1000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val(min + "K - " + max + "K");
				}
			});
		
</script>
</body>


</html>
