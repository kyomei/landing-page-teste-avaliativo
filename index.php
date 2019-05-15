<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Teste Avaliativo</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
   </head>
   <body> 
      <!-- Start .\ header principal -->
      <header id="topo">
         <nav id="navbar">
            <div class="container">            
               <!-- Brand and toggle mobile display -->
               <div class="navbar-header">
                  <a href="#">D.L.B</a>
                  <button type="button" class="navbar-toggle swing">
                     Menu <i class="fa fa-bars"></i>
                  </button>
               </div> 
               <!-- navbar-itens -->
               <ul>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <li><a href="#" title="SEÇÃO UM">SEÇÃO UM</a></li>
                  <li><a href="#" title="SEÇÃO DOIS">SEÇÃO DOIS</a></li>
                  <li><a href="#" title="SEÇÃO TRÊS">SEÇÃO TRÊS</a></li>
               </ul>             
            </div>
         </nav>
         <div class="logo d-flex-center">
            <img src="assets/images/logo.png">
         </div>
         <div class="header-info">
            <div class="container text-center">
               <h1>LOREM IPSUM</h1>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br />accusantium doloremque laudantium.</p>
               <div class="header-buttons">
                  <a href="#" class="btn">LOREM IPSUM</a>
                  <a href="#" class="btn btn-outline">LOREM IPSUM</a>
               </div>
            </div>
         </div>
      </header>
      <!-- End .\ header principal -->

      <!-- Start .\ Carousel -->
      <section class="carousel">
         <div class="d-flex-center">
            <div class="carousel-item">
               <p>
                  1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="carousel-item">
               <p>
                  1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="carousel-item">
               <p>
                  2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="carousel-item">
               <p>
                  3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="carousel-item">
               <p>
                  4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
         </div>
         <div class="carousel-controls">
            <div class="controls-item"></div>
            <div class="controls-item active"></div>
            <div class="controls-item"></div>
            <div class="controls-item"></div>      
         </div>
      </section>
      <!-- End .\ Carousel -->


      <!-- Start .\ Contato -->
      <section id="contato" class="d-flex-center">
         <div class="contato-left">
            <div>
               <h2>Contato</h2>
               <form method="POST">
                  <input type="text" name="nome" placeholder="Nome" required="required"><br /><br />
                  <input type="tel" name="telefone" placeholder="Telefone" required="required"><br /><br />
                  <input type="email" name="email" placeholder="E-mail" required="required"><br /><br />
                  <select name="assunto">
                     <option>Assunto 1</option>
                     <option>Assunto 2</option>
                     <option>Assunto 3</option>
                     <option>Assunto 4</option>
                  </select><br /><br />
                  <textarea name="mensagem" placeholder="Mensagem" row="8" col="15"></textarea><br /><br />
                  <input type="submit" value="Enviar" />
               </form>
            </div>
         </div>
         <div class="contato-right">fasdfdas<br>fdafds</div>
      </section>
      <!-- End .\ Contato -->


      <!-- Start .\ Footer -->
      <footer id="footer" class="d-flex-center">
         <div class="container">      
            <!-- Copyright -->
            <p>© 2016 SA365®. Todos os direitos reservados.</p>

            <!-- Icons Redes sociais -->      
            <div class="icons-redes-sociais d-flex">
               <a href="default.asp" class="icon-facebook"></a>
               <a href="css_intro.asp" class="icon-instagram"></a>
               <a href="css_syntax.asp" class="icon-youtube"></a>
            </div>
         </div>
      </footer>
      <!-- End .\ Footer -->
      
      <!-- scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
</html>