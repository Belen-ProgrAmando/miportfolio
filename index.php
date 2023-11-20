<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--Style titulo h1-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Portfolio Belen barrientos</title>
</head>
<body>
<header>
    <?php 
    include("menu_colores.html");
    ?>
</header>    
<main>
    <div class="foto">
    <img src="img/foto.png" class="foto_inicio" >
    </div>
    <div id="inicio">
        <h1>Belén Barrientos</h1>
        <h3> Web Developer </h3>
        <hr>
        <h2>Perfil Profesional</h2>
        <h4>Soy una apasionada de la programacion comprometida con el aprendizaje constante.Estoy 
            emocionada por la oportunidad de contribuir al éxito 
            de proyectos desafiantes y seguir creciendo como profesional 
            en el campo del desarrollo web.
        </h4>
        </div>  
        <div class="boton">
        <button id="descargarPDF">Descargar CV</button>

        <a id="enlacePDF" href="img/CV_Belén Barrientos_2023.pdf" download="CV_Belén Barrientos_2023.pdf" style="display:none">Descargar CV</a>

       <script>
    document.getElementById('descargarPDF').addEventListener('click', function() {
      var enlacePDF = document.getElementById('enlacePDF');
      enlacePDF.click();
    });
  </script>
  <a href="https://github.com/Belen-ProgrAmando" target="_blanc">
  <img  src="img/github-mark.png"  class="img-github">
  </a>
        </div>
    
    <div id="contenedor_banner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores de carrusel (Opcionales) -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        
    </ol>
    
    <!-- Diapositivas de carrusel -->
    <div class="carousel-inner" id="certificados">
        <div class="carousel-item active">
            <img src="img/1.png" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="img/2.png" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="img/3.png" alt="Slide 3">
        </div>
        <div class="carousel-item">
            <img src="img/4.png" alt="Slide 4">
        </div>
        <div class="carousel-item">
            <img src="img/5.png" alt="Slide 5">
        </div>
        
    </div>
    
    <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div id="logos">

    <h1 class="skills"> Mis Skills </h1>

        <img src="img/HTML5_Logo_256.png" class="animated-element">
        <img src="img/css.png" class="animated-element">
        <img src="img/Javascript_badge.svg.png" class="animated-element">
        <img src="img/wordpress-logo-square-256x256.png" class="animated-element">
        <img src="img/sql.png" class="animated-element">
        <img src="img/logo-github.png" class="animated-element">
        <br>
        <img src="img/1_To2H39eauxaeYxYMtV1afQ.png" class="animated-element">
        <img src="img/bootstrap-logo.png" class="animated-element">
        <img src="img/free-nodejs-2-226035.png" class="animated-element"> 

    </div>
    </div>
    <div id="proyectos">

     <h1 class="h1_proyectos" > Mis proyectos </h1>
     <hr>


        <div class="container">
        <div class="d-inline-block">
            <div class="card">
                <img src="img/logo_1.png" class="card-img-top" alt="Descripción de la imagen">
                <div class="card-body">
                    <h5 class="card-title">Mi Portfolio</h5>
                    <br>
                    <a href="#" class="mi-boton">Ver Muestra</a>
                </div>
            </div>
        </div>
        <div class="d-inline-block">
            <div class="card">
                <img src="img/Sistema_LyR.png" class="card-img-top" alt="Descripción de la imagen">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Login y Registro</h5>
                    <br>
                    <a href="https://webregister1234.000webhostapp.com/" target="_blank" class="mi-boton">Ver Muestra</a>
                </div>
            </div>
        </div>
        <div class="d-inline-block">
            <div class="card">
                <img src="img/Xemeneies.png" class="card-img-top" alt="Descripción de la imagen">
                <div class="card-body">
                    <h5 class="card-title">Escura Xemeneies</h5>
                    <br>
                    <a href="https://webnetejaxemeneies.000webhostapp.com/" target="_blank" class="mi-boton">Ver Muestra</a>
                </div>
            </div>
        </div>
        <div class="d-inline-block">
            <div class="card">
                <img src="img/FullColorWeb.png" class="card-img-top" alt="Descripción de la imagen">
                <div class="card-body">
                    <h5 class="card-title">Full Color Web</h5>
                    <br>
                    <a href="https://websitefullcolor.000webhostapp.com/#inicio" target="_blank" class="mi-boton">Ver Muestra</a>
                </div>
            </div>
        </div>
        <div class="d-inline-block">
            <div class="card">
                <img src="img/G.Inmobiliaria.png" class="card-img-top" alt="Descripción de la imagen">
                <div class="card-body">
                    <h5 class="card-title">Gestion Inmobiliaria Integral</h5>
                    <br>
                    <a href="https://gestioninmobiliariaintegralsalamanca.000webhostapp.com/"  target="_blank" class="mi-boton">Ver Muestra</a>
                </div>
            </div>
        </div>
    </div> 
    </div> 

</main>        
 <footer>
 <a class="rotate" target="new" href="https://wa.me/message/WVQCF3XHSUCHH1"><img src="img/whatsapp.png" alt="whatsapp" width="100%" height="auto"></a>
<?php
include("footer.html");
?>

 </footer>   
</body>
</html>