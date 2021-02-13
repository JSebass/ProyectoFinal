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
            <img src="{{ url('/imagenes/ferre4.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>NUESTRA MISIÓN</h5>
                <p>
                
                FERRETERIA J&J, es una empresa nariñense comprometida en proporcionar productos y servicios 
                con alta calidad y con excelentes precios, a través de la gestión eficiente y eficaz de un selecto 
                equipo de colaboradores entrenados para satisfacer las expectativas y necesidades de los clientes.
                </p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ url('/imagenes/ferre3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>NUESTRA VISIÓN</h5>
                <p>
                
                    Para el 2021 FERRETERIA J&J busca consolidarse como líder en la región, 
                    captando nuevos segmentos del mercado, mediante la comercialización de nuevos productos y prestación de nuevos servicios.
                    Esto lo lograremos basándonos en nuestro personal y en el apoyo permanente de las principales fábricas del país, 
                    y a través del mejoramiento continuo de nuestros procesos y de nuestra capacidad de adaptarnos a los cambios 
                    del entorno desarrollando un crecimiento permanente.
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