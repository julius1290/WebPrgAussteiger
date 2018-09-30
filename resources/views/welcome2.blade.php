@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height" id="firstTextBox">
        <div class="container">
            <div class="title m-b-md" id="firstText">
                Weg von Technik
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="pictureCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#pictureCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#pictureCarousel" data-slide-to="1"></li>
                <li data-target="#pictureCarousel" data-slide-to="2"></li>
                <li data-target="#pictureCarousel" data-slide-to="3"></li>
                <li data-target="#pictureCarousel" data-slide-to="4"></li>
                <li data-target="#pictureCarousel" data-slide-to="5"></li>
                <li data-target="#pictureCarousel" data-slide-to="6"></li>
                <li data-target="#pictureCarousel" data-slide-to="7"></li>
                <li data-target="#pictureCarousel" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('bilder/1.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/2.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/3.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="3">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/4.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="4">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/5.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="5">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/6.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="6">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/7.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="7">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('bilder/8.jpg?auto=yes&bg=777&fg=555&text=1')}}" alt="8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#pictureCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pictureCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="{{asset('/css/welcome2.css')}}">
    <script src=" {{asset('js/welcome2.js') }} "></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>


@stop
