<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>DISBRALENT C.A.</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"></script>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="description" name="Pagina web" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---- animated-css ---->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/progressBar.css">
		<link rel="shortcut icon" href="images/iconos/favicon.ico" />
		<script type="text/javascript" src="js/progressBar.js"></script>
		<script type="text/javascript" src="js/jquery.corner.js"></script> 
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='font/font.css' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body> <!--oncontextmenu="return false" onkeydown="return false"> Codigo para bloquear el boton de click derecho.-->
		<div class="bg">
		<!----- start-header---->
		<div class="container">
			
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><img src="images/logo2.png"></li>						
								<li><a href="#about" class="scroll">Nosotros</a></li>
								<li><a href="#process" class="scroll">Tiendas</a></li>
								<li><a href="#servicios" class="scroll">Servicios</a></li>
								<li><a href="#blog" class="scroll">Noticias</a></li>								
								<li><a href="#port" class="scroll">Catálogo</a></li>
								<li class="page-scroll"><a href="#team" class="scroll">Equipo</a></li>
								<li class="page-scroll" class="page-scroll"><a href="#contact" class="scroll">Contácto</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- banner-info ---->
			<div class="banner-info">
				<div class="container">
				<br><br><br><br><br><br><br>
					<a href="index.php" class="wow fadeIn" data-wow-delay="0.5s" ><img src="images/logo.png"></a>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
			<!---- banner-info ---->
			<!---- about ---->
			<div id="about" class="about">
				<div class="head-section">
					<div class="container">
						<h3><span>Acerca de </span><label>DISBRALENT C.A.</label></h3>
					</div>
				</div>
					<!--- about-grids ---->
					<div class="about-grids">
						<div class="col-md-4 about-grid about-grid1 wow fadeInLeft" data-wow-delay="0.4s">
							<div class="about-grid-info">
								<h4><a href="#">Misión</a></h4>
								<p style="text-align:justify;">DISBRALENT C.A.  es un empresa dedicada a la distribucion y comercializacion del ramo optico a nivel nacional siendo nuestro objetivo el brindar y garantizar nuestras monturas oftalmicas, equipos y demas accesorios relacionados, ofreciendo calidad e innovacion en todos nuestros productos.</p>
							</div>
							<div class="about-grid-pic">
							<img src="images/about-pic1.jpg" title="" />
							</div>
						</div>
						<div class="col-md-4 about-grid about-grid2 wow fadeInUp" data-wow-delay="0.4s">
							<div class="about-grid-pic">
							<img src="images/about-pic2.jpg" title="" />
							</div>
							<div class="about-grid-info">
								<h4><a href="#">DISBRALENT C.A.</a></h4>
								<p style="text-align:justify;"><br>
								Distribuidores al mayor y detal de monturas, lentes de sol, exhibidores, miscelaneas, pinzas para ópticas.

								 Marcas como daisy fuentes, randy jackson, coleman, sophia lorens, 4u, capri, dicaprio, cadillac, además de equipos optométricos, cristales, entre otros.
								</p>
							</div>
						</div>
						<div class="col-md-4 about-grid about-grid1 wow fadeInRight" data-wow-delay="0.4s">
							<div class="about-grid-info">
								<h4><a href="#">Visión</a></h4>
								<p style="text-align:justify;">DISBRALENT C.A.  es un empresa vanguardista donde lo mas importante  es la atencion y exigencia de nuestros clientes, por esta razon estamos orientados en todo momento a lograr colocar en sus manos productos de alta calidad, presentacion, modernismo y la exclusividad que usted se merece.</p>
							</div>
							<div class="about-grid-pic">
							<img src="images/about-pic3.jpg" title="" />
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--- /about-grids ---->
				</div>
			</div>
			<!---- about ----> 
			
			<!--- process --->
			<div id="process" class="process">
				<div class="head-section">
					<div class="container">
						<h3><span>Nuestras</span><label>Tiendas</label></h3>
					</div>
				</div>
				<div class="container">
					<div class="process-grids text-center wow bounce" data-wow-delay="0.4s">
						<div class="col-md-6 wow bounceInUp" data-wow-delay="0.4s">														
							<img src="images/optica_lamarron.png" style="align:center;"/>
							<h4> Esquina La Marrón, Centro Doral, Mezzanina, Local M-7, Caracas.</h4>
						</div>
						<div class="col-md-6 wow bounceInDown" data-wow-delay="0.4s">							
							<img src="images/optileader.png" style="align:center;"/>
							<h4>Esquina de Salas, Avenida Norte 4, Caracas. Distrito Capital.</h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--- process --->
			<!---- top-grids ---->
			<div id= "servicios" class="top-grids text-center">	
			<div class="head-section">
					<div class="container">
						<h3><span></span><label>Servicios</label></h3>
					</div>
				</div>
				<br><br><br>		
				<div class="container">				
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<img class="p-img" src="images/bb1.jpg" />
							<h3><a href="#">Exámen de la Vista Gratis</a></h3>
							<label> </label>
							<p>En DISBRALENT puedes realizarte el examen de la vista sin ningún costo, en cualquiera de nuestras tiendas podrás disfrutar de este beneficio que tenemos para ti.</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<img class="p-img" src="images/bb2.jpg" />
							<h3><a href="#">Monturas al Mayor y Detal</a></h3>
							<label> </label>
							<p>Distribuidores al mayor y detal de monturas, lentes de sol y cristales.</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<img class="p-img" src="images/bb3.jpg" />
							<h3><a href="#">Financiamiento para Ti</a></h3>
							<label> </label>
							<p>DISBRALENT le ofrece a todos sus clientes el servicio de pago financiado de sus lentes.
							Con la compra de tus lentes cancelas el 50% de inicial y 3 cuotas iguales consecutivas.</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<img class="p-img" src="images/bb4.jpg" />
							<h3><a href="#">Equipos Optométricos</a></h3>
							<label> </label>
							<p>Distribuidores al mayor y detal de exhibidores, miscelaneas, pinzas para ópticas, entre otros.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="container">
					<div class="col-md-12 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<img class="p-img" src="images/bb5.jpg" />
							<h3><a href="#">Jornadas</a></h3>
							<label> </label>
							<p>DISBRALENT ofrece un servicio</p>
							<p>de operativos de atención visual</p>
							<P>para tu empresa. Contáctanos.</p>
						</div>
					</div>								
					<div class="clearfix"> </div>
				</div>
			</div>
			<!---- top-grids ---->
			<!--- blog ---->
			<div id="blog" class="blog">
				<div class="head-section">
					<div class="container">
						<h3><span></span><label>Noticias</label></h3>
					</div>
				</div>
				<!---- blog-grids ---->
				<div class="blog-grids">
					<div class="container"> 
					<div class="blog-grids-left">
							<div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
								<div class="blog-art-pic">
									<img src="images/b1.jpg" title="Seminario" />
								</div>
								<div class="blog-art-info">
									<h3><a href="https://twitter.com/disbralentca/media" target="_blank">Seminario</a></h3>
									<p>7mo Seminario de marketing para ópticas.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>24.01.2014</span></li>
										
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
							<div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
								<div class="blog-art-pic">
									<img src="images/b2.jpg" title="I-test" />
								</div>
								<div class="blog-art-info">
									<h3><a href="https://www.instagram.com/p/3lwZd0jjyT/?taken-by=disbralentca" target="_blank">Innovamos</a></h3>
									<p>Rápida y fácilmente detecta visión con la nueva I-test de mano ™ Phoropter Vision Screener. Lente rango 4,00 a -4,00 dioptrías en incrementos de 0,50 dioptrías.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span></span></li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
						<div class="clearfix"> </div>
						<!---- ---->
						<div class="blog-grid-left-big wow bounceIn" data-wow-delay="0.4s">
							<div class="blog-grid-left-big-info">
								<div class="blog-art-info">
									<h3><a href="http://www.nexdu.com/ve/es/Disbralent-C-A--Caracas" target="_blank">Somos</a></h3>
									<p style="text-align:justify;">DISBRALENT C.A. Nace de una meta y un sueño, siempre creí en seguir los pasos de mi padre. Un día me decidí a emprender mi propio camino, me fue muy fácil a pesar de todas las dificultades. En 1997 se inicia esta meta, con el nombre de Brave`s lentes c.a. A los pocos días se le realiza la modificación a DISBRALENT C.A.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span></span></li>
										
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
							<div class="blog-grid-left-big-pic">
								<div class="blog-art-pic">
									<img src="images/b4.jpg" title="Daisy Fuentes" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="blog-grids-right wow bounceIn" data-wow-delay="0.4s">
						<div class="blog-grid-left blog-grid-right">
								<div class="blog-art-pic">
									<img src="images/b3.jpg" title="Edward Valiente" />
								</div>
								<div class="blog-art-info">
									<h3><a href="http://www.vision-actual.com/site/edward-valiente/" target="_blank">Entrevista</a></h3>
									<p>Entrevista al optometrista Edward Valiente para la revista Visión Actual.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
										
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- blog-grids ---->
				</div>
			</div>
			<!--- blog ---->
			<!--- Catálogo ---->
			<div id="port" class="portfolio">
				<div class="head-section">
					<div class="container">
						<h3>Catálogo</h3>
					</div>
				</div>
				<!--- Portfolio --->
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
							<!-- Portfolio Ends Here -->
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Monturas de Sol</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Monturas Correctivas</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Lentes de Contacto</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Equipos de Optometría</span></li><br><br>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Promociones</span></li>
									  <div class="clearfix"></div>
								  </ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab_img">
												<div class="col-md-4 img-top ">
												  	<a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_cadillac.php" class="b-link-stripe b-animate-go  thickbox">
															 <img class="p-img" src="images/marcas/sunglasses/cadillac_muestra.jpg" /><div class="b-wrapper">
																<h2 class="b-animate b-from-left    b-delay03 ">
																<div class="caption">
																	<h4>Cadillac</h4>
																	<p>Para ver el catálogo presione click.</p>
																</div>
																</h2>
															</div></a>
												</div>
												<div class="col-md-4 img-top ">
												   <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_daisyfuentes.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/daisy_fuentes.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
															<div class="caption">
															<h4>Daisy Fuentes</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_coleman.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/sunglasses/coleman_muestra.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Coleman</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top ">
												 <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_everlast.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/everlast_logo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Everlast</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top ">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_daisyfuentes.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/sunglasses/daisyF_muestra.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
															<div class="caption">
															<h4>Daisy Fuentes</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_prorx.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/proRx.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>ProRx</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>
												<div class="col-md-4 img-top ">
												   <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_cadillac.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/cadillac.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
															<div class="caption">
															<h4>Cadillac</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>
												<div class="col-md-4 img-top ">
												 <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_everlast.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/sunglasses/everlast_muestra.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
															<div class="caption">
															<h4>Everlast</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>
												<div class="col-md-4 img-top ">
												   <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/sol/sol_coleman.php" class="b-link-stripe b-animate-go  thickbox">
													 <img class="p-img" src="images/marcas/coleman.jpg" /><div class="b-wrapper">
														<h2 class="b-animate b-from-left    b-delay03 ">
															<div class="caption">
															<h4>Coleman</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
														</h2>
													</div></a>
												</div>

												<div class="clearfix"></div>	
										</div>
																			 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="tab_img">
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_4u.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/4u.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>4U</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_cadillac.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/eyerwear/CadEye300.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Cadillac</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_dc.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/dicaprio.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>DiCaprio</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_sophialoren.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/eyerwear/sophialoren_muestra.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Sophia Loren</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_cadillac.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/cadillac.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Cadillac</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_everlast.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/everlast_logo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Everlast</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_daisyfuentes.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/daisy_fuentes.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Daisy Fuentes</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_randyjackson.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/eyerwear/Randy-Jackson-nuestra.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Randy Jackson</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>								
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_coleman.php" class="b-link-stripe b-animate-go  thickbox">
												    <img class="p-img" src="images/marcas/coleman.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Coleman</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="clearfix"></div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="tab_img">
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft1.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft1.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft2.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft3.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/soft2.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Disbrasoft</h4>
															<p>Lentes de Contacto Correctivos para ti.</p>
														</div>
													</h2>
												</div></a>
												</div>
												
												<div class="clearfix"></div>
										</div>		        					 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
										<div class="tab_img">
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/eo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/ojo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/plant1.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/plant1.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/ojo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/equipo/equipos.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/eo.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Equipos de Optometría</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												
												<div class="clearfix"></div>
										</div>	
											
									</div>	

									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
										<div class="tab_img">
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_retro.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/retro.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Retro</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_cadora.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/cm.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Cadore Moda</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_cristinac.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/cc.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Cristina Collection</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_nba.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/nba.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas NBA</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_sevenv.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/sv.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Seven Visión</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>										
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_legge.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/l.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Legge</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_marcolin.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/mv.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Marcollin Village</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_portaromana.php" class="b-link-stripe b-animate-go  thickbox">
												 <img class="p-img" src="images/marcas/pr.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas Porta Romana</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>								
												<div class="col-md-4 img-top">
												  <a data-toggle="modal" data-target=".bs-example-modal-md" href="catalogo/correctivos/correctivos_otros.php" class="b-link-stripe b-animate-go  thickbox">
												    <img class="p-img" src="images/marcas/etc.jpg" /><div class="b-wrapper">
													<h2 class="b-animate b-from-left    b-delay03 ">
														<div class="caption">
															<h4>Monturas de Otras Marcas</h4>
															<p>Para ver el catálogo presione click.</p>
														</div>
													</h2>
												</div></a>
												</div>
												<div class="clearfix"></div>
										</div>	
											
									</div>										
								</div>	
							</div>
						</div>
			</div>
			<!--- portfolio ---->
			<!---- Team ----->
			<div id="team" class="team">
				<div class="head-section">
					<div class="container">
						<h3><span>Nuestro</span><label>equipo de trabajo</label></h3>
					</div>
				</div>
				<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 3,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel text-center">
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member3.png" alt="name">
					                	<h5><span>Daniel</span> Grazianni</h5>
					                	<label>Contador</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member2.png" alt="name">
					                	<h5><span>Edward</span> Valiente</h5>
					                	<label>Presidente</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member1.png" alt="name">
					                	<h5><span>Yurby</span> Rodríguez</h5>
					                	<label>Administradora</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member1.png" alt="name">
					                	<h5><span>Morjori</span> Inojosa</h5>
					                	<label>Administradora</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member1.png" alt="name">
					                	<h5><span>Lusibel</span> Rangel</h5>
					                	<label>Administradora</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="images/team-member3.png" alt="name">
					                	<h5><span>Alex</span> Cordero</h5>
					                	<label>Mensajero</label>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->
			<!---- work-with-us---->
			<div class="work-with-us text-center">
				<div class="container">
					<h4>¿Te gustaria trabajar con nosotros?</h4>
					<p>Envía tu curriculum a nuestro correo y nosotros con gusto lo contactaremos.</p>
					<a class="catch-me wow shake" data-wow-delay="0.3s" href="contacto.php" target="_blank">Contactanos</a>
				</div>
			</div>
			<!---- work-with-us---->
			</div>
			</div>
			<!---- Team ----->
			<!---- map ---->
			<div id="contact" class="map">
				<div class="map-location">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="1000" height="500" src="https://www.google.com/maps/embed/v1/place?q=Edificio+PROTEXO,+Av.+Urdaneta+ruta&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
				</div>
				<div class="contact-info text-center wow fadeInLeft" data-wow-delay="0.3s">
					<h4><span>DISBRALENT</span>C.A</h4>
					<p><span class="map-icon1"> </span>Av.Urdaneta, Torre Protexo <br> Piso 4, oficina 41 <br> Urb. Altagracia</p>
					<p><span class="map-icon2"> </span>disbralentca@hotmail.com</p>
					<p><span class="map-icon3"> </span>(0212) 561.14.02</p>
					<p><span class="map-icon3"> </span>(0212) 563.05.46</p>
					Siguenos en:<br>
					<a href="https://www.facebook.com/DISBRALENT-CA-121695221186438/?fref=ts" target="_blank"><img alt="siguenos en facebook" height="32" src="images/iconos/face.png" title="siguenos en facebook" width="32" /></a>
					<a href="https://twitter.com/disbralentca" target="_blank"><img alt="siguenos en Twitter" height="32" src="images/iconos/Twitter.png" title="siguenos en Twitter" width="32" /></a>
					<a href="https://www.instagram.com/disbralentca/" target="_blank"><img alt="sígueme en Instagram" height="32" src="images/iconos/instagram.png" title="sígueme en Instagram" width="32" /></a>
				</div>
			</div>
			<!---- map ---->
			<div class="clearfix"> </div>
			<!---- footer --->
			<div class="footer text-center">
				<div class="container">
					<div class="footer-inner wow zoomIn" data-wow-delay="0.3s">
						<ul>
							<a href="#"><img width="213" heigth="142" src="images/iconos/Disbralent-C-A-_44862.jpg" title="logo empresa"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><a href="#"><img src="images/footer-logo.png" title="footer-logo"/></a></li>
						</ul>
					</div>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<br>
				Derechos reservados&copy; 2016.&nbsp;&nbsp;&nbsp;&nbsp; Diseñado por: <a href="#">E&I</a>
				</div>		
			</div>
			<!---- footer --->
		</div>
	</body>
</html>

