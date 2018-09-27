@extends("layout") @section("content")
<div class="container" style="padding-top: 65px">

    <div class="row">
        <div class="col-sm">
            <h1>Das sind wir!</h1>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Jan Bednarski</h4>
                    <p class="card-text">Creative</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text" style="font-size: 20px";>Konstantin Goldbach</h4>
                    <p class="card-text">Creative</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Lisa Kraus</h4>
                    <p class="card-text">Scout</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Estelle Gräf</h4>
                    <p class="card-text">Scout</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Miguel Wolf</h4>
                    <p class="card-text">Technologe</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem;">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Rico Kraft</h4>
                    <p class="card-text">Technologe</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem; margin-bottom: 2rem">
                <img class="card-img-top" style="padding-top: 10px" src="{{asset('bilder/profilbild.png?auto=yes&bg=777&fg=555&text=1')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Julius Schinschke</h4>
                    <p class="card-text">Technologe</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
