 <img class="img-fluid" src = "{{ asset('/Bootstrap/images/banner.jpg')}}" />
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/soy/')}}">Quien soy</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/arbol/')}}">Mi Arbol Familiar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/hobbies/')}}">Mis Hobbies</a>
      </li><li class="nav-item active">
        <a class="nav-link " href="{{url('/experiencia/')}}">Experiencia Profesional</a>
      </li>
      </li><li class="nav-item active">
        <a class="nav-link " href="{{url('/contactame/')}}">Contacto</a>
      </li>
    </ul>
    </div>
</nav>