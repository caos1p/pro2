<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/start/jquery-ui.css" type="text/css" media="all" /> 
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css"> 

<!-- Font Awesome -->
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



   
  </head>
<title>H.salud</title>

  <body>

    <nav class=" navbar-light  " style="background-color: rgb(255, 255, 255)">
    
      <div class="container-fluid">
 
    
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header" style="background-color: rgb(8, 8, 8)">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="text-align: center;color: white;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Bienvenido 
              :   {{auth()->user()->name}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <h1 style="text-align: center">.................................</h1>

          <div class="offcanvas-body" style="font-size: 20px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;background-color: rgb(247, 241, 241)">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        

 
         
            
              <li class="nav-item dropdown dropend" >
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuario
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown" style="text-align: center">
                  <li><a class="dropdown-item" href="/admin/usuario">Usuario</a> </li>  
                  <li><a class="dropdown-item"  href="/admin/paciente">Paciente</a></li>
                  <li ><a class="dropdown-item"   href="/admin/personal">Personal</a></li>          
                  <li ><a class="dropdown-item"   href="/admin/horario">Horario</a></li>   
                  <li ><a class="dropdown-item"   href="/admin/horario">Horario De Atencion</a></li>            
         
      
        
                </ul>
              </li>

              <li class="nav-item dropdown dropend">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios y especialidades
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown" style="text-align: center">
                  <li><a class="dropdown-item" href="/admin/especialidad">Especialidad</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown dropend">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Consulta medica
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown"style="text-align: center">
                  <li><a class="dropdown-item"   href="/admin/agenda">Agenda</a></li>  
                </ul>
              </li>

              <li class="nav-item dropdown dropend">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Control y Seguridad
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown"style="text-align: center">
                  <li ><a class="dropdown-item" href="/admin/rol">Rol</a></li>  
                  <li ><a class="dropdown-item"   href="/admin/bitacora">Bitacora</a></li>                  

                </ul>
              </li>
              <li > <a   class="nav-link"  href="/admin/usuario/configuracion" ><i class="bi bi-gear"></i> Configuracion </a> </li>                  

              <br>
              <br>
<hr>
         
       <li class="nav-item" >
        <a class="dropdown-item"  href="/logout ">Cerrar Sesion</a>
      </li>  
            </ul>
           
          </div>
        </div>
      </div>
    </nav>     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=" https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>


   
    <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales/ar-kw.js"></script>

<!-- JQuery -->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


   @yield('contenido')
  </body>
</html>