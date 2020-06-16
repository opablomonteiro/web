<?php
session_start();
$livros = $_SESSION["lista"];

?>
<!DOCTYPE html>
<html class="cadastro" lang="pt-br">
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
                
	<body class="cadastro">
		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="index.html">
								<img id = "logoT" src="images/avian_logo.png" alt="">
							</a>
						</div>

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">E-mail:</p>
											<p class="info-box-subtitle">Avion_contato@airline.com</p>
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
									<a class="btn btn-primary" href="login.html">Login</a>
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
										<li><a href="index.html">Home</a></li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sua Viagem <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="voos.html">Compre sua passagem</a></li>
												<li><a href="checkin.html">Faça seu checkin</a></li>
											</ul>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="servicos.html">Todos serviços </a></li>
												<li><a href="listaAlterarPassagem.html">Alterar passagem</a></li>
												<li><a href="cancelarPassagem.html">Cancelar passagem</a></li>
												<li><a href="reclamacao.html">Reclamação sobre bagagem</a></li>
											</ul>
										</li>

										<li><a href="perfil.html">Perfil</a></li>

										

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
       <section>
        <div class="container3">
                <h1>Cadastro de Clientes</h1>
        

           <div class="container2"> 
	     <form name="cadastro_cliente" method="post" action="..\controller\controller.php">
                <label for="nomec">Nome:</label>
                <input name="nome" id="nomec" required="required" type="text" placeholder="Digite seu nome completo"  maxlength="60"/>
            
                <label for="datanasc">Data de Nascimento:</label>
                <input name="data" id="datanasc" required="required" type="date" placeholder="Digite sua data de Nascimento" />
             
                <label for="email">E-mail:</label>
                <input name="email" id="email" required="required" type="email" placeholder="Digite o seu e-Mail" size="30"/>
         
                <label for="telefone">Telefone:</label>
				<input name="telefone" id="telefone" required="required" type="tel" placeholder="Ex: 12 12345-6789" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" size="30"/>

				<label for="cpf">CPF:</label>
				<input name="cpf" id="cpf" required="required" type="text" placeholder="Digite seu cpf.." size="11"/>
				
				<label for="psw1">Senha:</label>
				<input name="psw1" id="psw1" required="required" type="password" placeholder="Digite sua senha.." size="30"/>
				
				<label for="psw2">Repita a senha:</label>
				<input name="psw2" id="psw2" required="required" type="password" placeholder="Digite sua senha novamente.." size="30"/>
				
				<input type="hidden" name="acao" value="cadastrar" id="acao">
           
           
                
                <input type="submit" type="button" class="button" value="Cadastrar"/>
                <input type="submit" type="button" class="button" value="Login"/>
                



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