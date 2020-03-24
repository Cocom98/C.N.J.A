<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
<!-----------------BootstrapCDN------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/css/bootstrap.css') }}">
  <!---<script src="{{ asset('Bootstrap/js/bootstrap.js') }}"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="{{ asset('/Bootstrap/images/perfil.ico')  }}">

</head>

<body>
   <div>
  
   @include('Include.nav')

  </div>
  <!-----------------Header con barra de menu------------------------------>
	
<!-----------------Seccion de contenido------------------------------>
	<div class="container">
		@yield('contenido')

	</div>
  @yield('TP')  
  <br><br><br><br>
<!-----------------Footer de pagina------------------------------>

  <nav   class="fixed-bottom navbar-light bg-light">
      <div class="text-center">
        <div class="socials">
          <div class="socials-inner">
            <h5>Redes sociales</h5>
            
              <a href="#" class="facebook-ico"><span></span>Facebook</a>
              <a href="#" class="twitter-ico"><span></span>Twitter</a>
              <a href="#" class="rss-feed-ico"><span></span>Rss-feed</a>
              <a href="#" class="myspace-ico"><span></span>myspace</a>
              
            </ul>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
       © Derechos reservados
      </div>
  </nav>

</body>
</html>