@extends('master')
   @section('content')
        <h1>Bienvenidos a Ferretería J&J</h1> 
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> 
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li> 
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>         
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ url('/imagenes/ferre2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">                
                <p>
                    
                </p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ url('/imagenes/ferre4.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
                <p>
                    
                </p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ url('/imagenes/ferre5.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
                <p>
                    
                </p>
            </div>
            </div>   
            <div class="carousel-item">
            <img src="{{ url('/imagenes/ferre6.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
                <p>
                    
                </p>
            </div>
            </div> 
            <div class="carousel-item">
            <img src="{{ url('/imagenes/ferre8.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                
                <p>
                    
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