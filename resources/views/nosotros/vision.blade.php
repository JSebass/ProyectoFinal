@extends('master')
   @section('content')
    <h1>Mision y Vision</h1>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>           
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ url('/imagenes/2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Mision</h5>
                <p>
                    Somos una empresa privada, líder en la prestación de servicios hoteleros, 
                    orientada principalmente a los sectores comercial y empresarial, que ofrece una atención personalizada y 
                    amable con calidad, desarrollando productos y servicios que garantizan la satisfacción y las expectativas 
                    del cliente. Contamos con un talento humano comprometido, en permanente desarrollo y mejoramiento continuo, 
                    que nos permite ampliar y mantener el mercado brindando total seguridad a empleados, clientes, proveedores, 
                    socios y comunidad en general.
                </p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ url('/imagenes/3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Vision</h5>
                <p>
                    Ser en el año 2021 el hotel mas reconocido en Pasto, tanto por su infrestructura como sus servicios.   
                    Brindando atención de excelente calidad, con unas instalaciones modernas dirigidas a clientes del sector 
                    comercial y empresarial que visitan la ciudad, contando con una alta ocupación a nivel nacional e internacional.
                </p>
            </div>
            </div>            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>        
@stop