@extends('master')
   @section('content')
     

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>           
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ url('/imagenes/ferre4.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>HISTORIA</h5>
                <p>
                
                Ferretería J&J nace en el año 2019.
             Fue creada por Johan Sebastian Bravo y José A. Lopez. 
             nació la visión de ofrecer productos ferreteros de calidad.

            Con el tiempo y el esfuerzo impuesto por ambos, continuo creciendo gradualmente dando soluciones efectivas 
            a sus clientes que cada vez eran más y nos vimos en la necesidad de extendernos ampliando nuestro stock de productos, 
            y adaptándonos a las tendencias del mercado ferretero.

            Ferretería J&J cuenta con más de 10 colaboradores quienes dan una atención de calidad a nuestros
            clientes quienes han sido la razón principal de nuestro crecimiento y con quienes mantenemos una excelente relación 
            comercial.
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