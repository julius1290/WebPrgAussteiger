@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height"  id="firstTextBox">
        <div class="container">
            <div class="title m-b-md" id="firstText">
                Weg von Technik
            </div>
        </div>
    </div>
    <div class="container-fluid" id="picSlider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                            Wie funktioniert die Auswahl des Ausstieglandes?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Ein komplexer Algorithmus gleicht die von Ihnen eingegebenen Daten mit unserer Datenbank ab.
                        Anschlißend werden die besten Länder vorgeschlagen.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            Was passiert mit den von mir angegebenen Daten?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Die von Ihnen angegeben Daten werden ausschließlich für die Berechnung des Landes genutzt und nicht
                        gespeichert.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            Warum sollte man sich von der Technik distanzieren?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Heutzutage möchten sich immer mehr Menschen von der Technik distanzieren.
                        Die am häufigsten genannten Gründe sind:
                        - Internet- und Social Media-Abhängikeit
                        - Druck der ständigen Erreichbarkeit
                        - Stärkung der Naturverbundenheit
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                            Gibt es Unterstützung für die Durchführung des Ausstiegs?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Nein. Diese Seite unterstützt ausschließlich bei der Entscheidungsfindung.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/welcome2.css')}}">
    <script src=" {{asset('js/welcome2.js') }} "></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>


@stop
