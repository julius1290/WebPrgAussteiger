@extends('layout')
@section('content')
    <style>
        .form-radio > input {
            display: none;
        }

        .form-radio > label {
            display: inline-block;
            height: 50px;
            line-height: 1.22em;
            margin: 2px;
            padding: 6px 0;
            text-align: center;
            width: 50px;
            border: 1px solid #0065a8;
            color: #0065a8;
            border-radius: 100px;
        }

        .form-radio > input:checked + label, .form-radio > input + label:hover {
            color: #fff;
            background-color: #0065a8;
        }
    </style>
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
      <img class="d-block w-100" src="bilder/1.jpg?auto=yes&bg=777&fg=555&text=1" alt="1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/2.jpg?auto=yes&bg=666&fg=444&text=2" alt="2">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/3.jpg?auto=yes&bg=555&fg=333&text=3" alt="3">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/4.jpg?auto=yes&bg=555&fg=333&text=4" alt="4">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/5.jpg?auto=yes&bg=555&fg=333&text=5" alt="5">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/6.jpg?auto=yes&bg=555&fg=333&text=6" alt="6">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/7.jpg?auto=yes&bg=555&fg=333&text=7" alt="7">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bilder/8.jpg?auto=yes&bg=555&fg=333&text=8" alt="8">
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
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Wie funktioniert die Auswahl des Ausstieglandes?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Ein komplexer Algorithmus gleicht die von Ihnen eingegebenen Daten mit unserer Datenbank ab. Anschlißend werden die besten Länder vorgeschlagen.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Was passiert mit den von mir angegebenen Daten?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Die von Ihnen angegeben Daten werden ausschließlich für die Berechnung des Landes genutzt und nicht gespeichert.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
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
    <div style="padding-top: 15px">
        <div id="example-basic">
            <h3>Angaben zur Person</h3>
            <section>
                <div class="form-group">
                    <label>Geschlecht</label>
                    <fieldset class="form-radio">
                        <input id="maennlich" name="geschlecht" value="1" type="radio" required>
                        <label for="maennlich" title="Männlich"><i class="fas fa-male fa-2x"></i></label>
                        <input id="weiblich" name="geschlecht" value="2" type="radio" required>
                        <label for="weiblich" title="Weiblich"><i class="fas fa-female fa-2x"></i></label>
                        <input id="geschlechtslos" name="geschlecht" value="2" type="radio" required>
                        <label for="geschlechtslos" title="Geschlechtslos"><i class="fas fa-genderless fa-2x"></i></label>
                        <input id="transgender" name="geschlecht" value="2" type="radio" required>
                        <label for="transgender" title="Transgender"><i class="fas fa-transgender fa-2x"></i></label>
                    </fieldset>
                </div>
            </section>
            <h3>Angaben zur Religion und Regierung</h3>
            <section>
                <div class="form-group">
                    <label for="religion">Religion</label>
                    <div class="input-group">
                        <select class="form-control" id="religion" name="religion" required>
                            <option value="">Bitte wählen</option>
                            <option value="0">egal</option>
                            <option value="Christentum">Christentum</option>
                            <option value="Islam">Islam</option>
                            <option value="Buddhismus">Buddhismus</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Atheist">Atheist</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-cross"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="regierungsform">Regierungsform</label>
                    <div class="input-group">
                        <select class="form-control" id="regierungsform" name="regierungsform" required>
                            <option value="">Bitte wählen</option>
                            <option value="0">egal</option>
                            <option value="Monarchie">Monarchie</option>
                            <option value="Demokratie">Demokratie</option>
                            <option value="Diktatur">Diktatur</option>
                            <option value="Kommunismus">Kommunismus</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-landmark"></i></span>
                        </div>
                    </div>
                </div>
            </section>
            <h3>Klima, Infrastruktur, Gesundheit</h3>
            <section>
                <div class="form-group">
                    <label for="klima">Klima</label>
                    <div class="input-group">
                        <select class="form-control" id="klima" name="klima" required>
                            <option value="">Bitte wählen</option>
                            <option value="0">egal</option>
                            <option value="Warm">Warm</option>
                            <option value="Kalt">Kalt</option>
                            <option value="Gemäßigt">Gemäßigt</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-sun"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gesundheit">Gesundheitsindex</label>
                    <div class="input-group">
                        <input type="range" class="custom-range" min="0" max="10" name="gesundheit" id="gesundheit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="infrastruktur">Infrastrukturindex</label>
                    <div class="input-group">
                        <input type="range" class="custom-range" min="0" max="10" name="infrastruktur"
                               id="infrastruktur">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <button type="reset" class="btn btn-danger">Abbrechen</button>
    <button type="submit" class="btn btn-success">Suchen</button>
    <script src=" {{asset('js/jquery.steps.js') }} "></script>
    <script src=" {{asset('js/aussteiger_js.js') }} "></script>
@stop
