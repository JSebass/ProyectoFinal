<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}" style="font: oblique bold 120% cursive;">Ferretería J&J</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('/') }}">Inicio<span class="sr-only">(current)</span></a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nosotros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/nosotros/historia') }}">Historia</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/nosotros/vision') }}">Mision Y Vision</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/nosotros/ubicacion') }}">Ubicación</a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<<<<<<< HEAD
<<<<<<< HEAD
=======
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/register') }}">Registrar</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/') }}">Iniciar Sesion</a>
                
=======
>>>>>>> 6d4790a748ee405400b3dccb3f93eade701b7c6f

                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/loginA') }}">Administrador</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/login') }}">Cliente</a>                

<<<<<<< HEAD
=======
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/register') }}">Registrar</a>
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/') }}">Iniciar Sesion</a>
                
>>>>>>> f6a8588398d6e7502785b953db725f63102196bb
=======
>>>>>>> 5a3c622fda5cb40c6e3481937232dc182089471b
>>>>>>> 6d4790a748ee405400b3dccb3f93eade701b7c6f
                </div>
            </li>
              
            
            
        </div>
        </nav>