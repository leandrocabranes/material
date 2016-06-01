<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <title>OMA</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue-grey lighten-5">
        <a href="#!" class="brand-logo blue-grey-text text-darken-2">OMA</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="active"><a href="" class="blue-grey-text text-darken-2">Inicio</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">¿Cómo participar?</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">Información para padres</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">Formularios</a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav">
          <li class="active"><a href="" class="blue-grey-text text-darken-2">Inicio</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">¿Cómo participar?</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">Información para padres</a></li>
          <li><a href="" class="blue-grey-text text-darken-2">Formularios</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="img/nexus.jpg" /></div>
  </div>

  <div class="container section">
    <h2 class="center-align">Cronograma</h2>
    <table class="bordered responsive-table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Fecha</th>
          <th>Horario</th>
          <th>Descripción</th>
          <th>Lugar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Instancia Zonal</td>
          <td>23/06/16</td>
          <td>14:20hs</td>
          <td>Segunda instancia, se necesitan 2 puntas para calificar</td>
          <td>Colegio Alemán</td>
        </tr>
        <tr>
          <td>Instancia Regional</td>
          <td>04/08/16</td>
          <td>09:15hs</td>
          <td>Competencia provincial, no relacionada a la Nacional</td>
          <td>Hotel Atlántico</td>
        </tr>
      </tbody>
    </table>
  </div>

  <footer class="page-footer blue-grey lighten-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Raíz Imaginaria</h5>
          <p class="grey-text text-lighten-4">Grupo de desarrollo de software</p>
        </div>
        <div class="col l4 offset-12 s12">
          <h5 class="white-text">Páginas asociadas</h5>
          <ul>
            <li><a href="">OMA Nacional</a></li>
            <li><a href="">Ñandú Nacional</a></li>
            <li><a href="">Camaleon</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
        <a href="#" class="grey-text text-lighten-4 right">Webmaster</a>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $(".parallax").parallax();
    });
  </script>
</body>
</html>
