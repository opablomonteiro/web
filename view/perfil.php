<?php
session_start();
?>
<html>
    

<head>
    <title>Meu Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script>
        function myFunction1() {
            alert("Sua solicitação ja foi 'Concluída' ");
        }
        function myFunction2() {
            alert("Sua solicitação está 'Em andamento'");
        }
    </script>
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
                                    <li><a href="index.php">Home</a></li>

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
 <section id = "perfil_body">
<div class="container6 bootstrap snippet" >
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $_SESSION['nome_cliente'] ?> </h1></div>
    	
    </div>
    <div class="row">
  		<div class="col-sm-3">
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Envie uma foto diferente...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>
          
        </div>
    	<div class="col-sm-9">
            <ul class="nav nav-tabs" id="nav1">
                <li id="inicialb"class="active"><a data-toggle="tab" href="#home">Inicial</a></li>
                <li id="passb"><a data-toggle="tab" href="#passagens">Minhas Passagens</a></li>
                <li id="reporb"><a data-toggle="tab" href="#reclamacoes">Minhas Reclamações</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="first_name"><h4>Nome:</h4></label>
                            <h5> <?php echo $_SESSION['nome_cliente'] ?> </h5>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="first_name"><h4>Telefone:</h4></label>
                            <h5> <?php echo $_SESSION['telefone_cliente'] ?> </h5>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="first_name"><h4>CPF:</h4></label>
                        <h5><?php echo $_SESSION['cpf_cliente'] ?></h5>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="first_name"><h4>E-mail:</h4></label>
                            <h5><?php echo $_SESSION['email_cliente'] ?></h5>
                          </div>
                      </div>
                      
                      
              	</form>
              
              <hr>
              
             </div>
             <div class="tab-pane" id="passagens">
               
               <h2></h2>
               
               <hr>
                  
                                             
                            <table class="table" id="pass_trip1">
                                <tr>
                                    <th>Passagem Nº</th>
                                    <th>Origem</th>
                                    <th>Destino</th>
                                    <th>Data de Compra</th>
                                    <th>Data da Viagem</th>
                                    <th>Valor</th>
                                </tr>
                                
                                <tr>
                                    <td><a href = "passagem.html">#759632</a></td>
                                    <td><a href = "passagem.html">Salvador</a></td>
                                    <td><a href = "passagem.html">Paris</a></td>
                                    <td><a href = "passagem.html">12/11/2019</a></td>
                                    <td><a href = "passagem.html">13/11/2019</a></td>
                                    <td><a href = "passagem.html">R$ 1233,57</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href = "passagem.html">#236532</a></td>
                                    <td><a href = "passagem.html">Salvador</a></td>
                                    <td><a href = "passagem.html">Tokyo</a></td>
                                    <td><a href = "passagem.html">15/02/2021</a></td>
                                    <td><a href = "passagem.html">25/3/2021</a></td>
                                    <td><a href = "passagem.html">R$ 1533,27</a></td>
                                </tr>
                        
                    
                            </table>
                      
                      
              	
               
             </div>
             <div class="tab-pane" id="reclamacoes">
            		
               	
                  <hr>
                  
                    <table class="table">
                        <tr>
                            <th>Reclamação Nº</th>
                            <th>ID Passagem</th>
                            <th>Data de Reclamação</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>#759632</td>
                            <td>12563</td>
                            <td>12/11/2019</td>
                            <td onclick="myFunction1()">Concluída</td>
                        </tr>
                    
                        <tr>
                            <td><a href="reclamacaoRegistrada.html">#759632</a></td>
                            <td><a href="reclamacaoRegistrada.html">12563</a></td>
                            <td><a href="reclamacaoRegistrada.html">12/11/2019</a></td>
                            <td onclick="myFunction2()">Em Andamento</td>
                        </tr>
        
                        <tr>
                            <td>#759632</td>
                            <td>12563</td>
                            <td>12/11/2019</td>
                            <td onclick="myFunction1()">Concluída</td>
                        </tr>
                    </table>
              	
              </div>
               
              </div>
          </div>

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
                                      Nos trabalhamos todos os dias. Em caso de duvidas entre em contato conosco nos horrarios:
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
