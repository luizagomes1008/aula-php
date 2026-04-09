<?php 
    $nome= $_GET['nome']

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="/aula06/template/css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/aula06/template/index.html">PrateleiraVirtual</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/aula06/template/guia.html">Guia</a></li>
                        <li class="nav-item"><a class="nav-link" href="/aula06/template/galeria.html">Clássicos</a></li>
                        <li class="nav-item"><a class="nav-link" href="/aula06/template/formulario.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">bem vindo <?php echo $nome; ?> a sua area restrita</p></h1>
                    
                
                </div>
            </div>
           
        </header>
        <h2 class="display-4 text-center">Seu histórico de leitura</h2>
        <!-- On tables -->
        <table class="table">
  <thead>
    <tr>
      <th scope="col">.</th>
      <th scope="col">livro</th>
      <th scope="col">tempo que leu</th>
      <th scope="col">nota final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">janeiro</th>
      <td>Saboroso Cadáver</td>
      <td>3 semanas</td>
      <td>7/10</td>
    </tr>
    <tr>
      <th scope="row">fevereiro</th>
      <td>A metamorfóse</td>
      <td>2 dias</td>
      <td>9/10</td>
    </tr>
    <tr>
      <th scope="row">março</th>
      <td>drácula</td>
      <td>2 semanas</td>
      <td>9/10</td>
    </tr>
  </tbody>
</table>
 
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
