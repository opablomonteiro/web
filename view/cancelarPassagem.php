

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<title>Avian - companhia aérea</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>  
	<script type="text/javascript" src="js/custom.js"></script>
	

</head>

<body>

		
		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="index.php">
								<img id = "logoT" src="images/avian_logo.png" alt="">
							</a>
						</div>

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">E-mail:</p>
											<p class="info-box-subtitle">contato@avian.com</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Central de vendas:</p>
											<p class="info-box-subtitle">0300 115 2121</p>
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">SAC:</p>
											<p class="info-box-subtitle">0800 704 0465</p>
										</div>
									</div>
								</li>
								<li class="header-get-a-quote">
									<a class="btn btn-primary" href="login.php">Login</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										<li><a href="index.php">Home</a></li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sua Viagem <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="voos.php">Compre sua passagem</a></li>
												<li><a href="checkin.php">Faça seu checkin</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="servicos.php">Todos serviços </a></li>
												<li><a href="AlterarPassagem.php">Alterar passagem</a></li>
												<li><a href="cancelarPassagem.php">Cancelar passagem</a></li>
												<li><a href="reclamacao.php">Reclamação sobre bagagem</a></li>
											</ul>
										</li>

										<li><a href="perfil.php">Perfil</a></li>

										

									</ul>
									
								</div>
								

							</div>

						</div>
						
					</div>
					

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div>

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Escreva o que deseja procurar">
						<span class="search-close">&times;</span>
					</div>
				</div>
				
			</nav>
			
        </header>

        <div id="banner-area" class="banner-area" style="background-image:url(images/serv.jpg)">
            <div class="banner-text">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="banner-heading">
                           <h1 class="banner-title" >Cancelar passagem</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section id="secdel">
            <div class="container3">
                    <h1>Cancelar passagem</h1>
            
    
               <div class="container2"> 
             <form action="/action_page.php" name="cancelar_passagem" method="POST" action="url para script aqui">
                
                <label for="passagens_ex">Passagem:</label>
                 <select id="passagens_ex">
                    <option value="1x">Passagem:21947</option>
                    <option value="2x">Passagem:64978</option>
                    <option value="3x">Passagem:30887</option>
                 </select><br>

                 <script>
                    function alertCancelar() {
                      alert("Passagem XXXXX cancelada com sucesso!");
                    }
                    </script>

                 <input id="btn-cancelar" type="submit" type="button" class="button" value="Cancelar" onclick="alertCancelar()"/>

                        </form>
                </div>
            </div>
    
        </section>
        
        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-4 col-sm-12 footer-widget footer-about">
                                    <h3 class="widget-title">Sobre a Avian</h3>
                                    <img class="footer-logo" src="images/avian_footer.png" alt="" />
                                    <p>A avian tem como proposito, levar você ao seu destino com agilidade e conforto, tudo isso com um preço que caiba no seu bolso..</p>
                                    <div class="footer-social">
										<ul>
											<li><a href="https://facebook.com/avian"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/avian"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://instagram.com/avian"><i class="fa fa-instagram"></i></a></li>
											<li><a href="https://github.com/avian"><i class="fa fa-github"></i></a></li>
									  </ul>
                                    </div>
                              </div>
      
                              <div class="col-md-4 col-sm-12 footer-widget">
                                    <h3 class="widget-title">Horario de atendimento</h3>
                                    <div class="horario-funcionamento">
                                          Nos trabalhamos todos os dias. Em caso de duvidas entre em contato conosco nos horarios:
                                          <br><br> Segunda - Sexta: <span class="text-right">07:00 - 20:00 </span>
                                          <br> Sabados: <span class="text-right">09:00 - 17:00</span>
                                          <br> Domingos: <span class="text-right">10:00 - 15:00</span>
                                    </div>
                              </div>
      
                              
      
      
                        </div>
                  </div>
            </div>
      
           
      
                     
      
                        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                              <button class="btn btn-primary" title="Back to Top">
                                    <i class="fa fa-angle-double-up"></i>
                              </button>
                        </div>
      
               
      </footer>
      
      </body>
      
      </html>