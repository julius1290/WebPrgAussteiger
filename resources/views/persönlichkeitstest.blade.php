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
    <div class="container" style="padding-top: 65px">
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
                        <input id="geschlechtslos" name="geschlecht" value="0" type="radio" required>
                        <label for="geschlechtslos" title="Geschlechtslos"><i class="fas fa-genderless fa-2x"></i></label>
                        <input id="transgender" name="geschlecht" value="0" type="radio" required>
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
                            <option value="monarchy">Monarchie</option>
                            <option value="democracy">Demokratie</option>
                            <option value="communist">Kommunismus</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-landmark"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="klima">Klima</label>
                    <div class="input-group">
                        <select class="form-control" id="klima" name="klima" required>
                            <option value="">Bitte wählen</option>
                            <option value="0">egal</option>
                            <option value="warm">Warm</option>
                            <option value="kalt">Kalt</option>
                            <option value="mittel">Gemäßigt</option>
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-sun"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gesundheit">Gesundheitsindex</label>
                    <div class="input-group">
                        <input type="range" class="custom-range" min="0" max="9.9" step="0.1" name="gesundheit" id="gesundheit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="infrastruktur">Infrastrukturindex</label>
                    <div class="input-group">
                        <input type="range" class="custom-range" min="0" max="5"  name="infrastruktur"
                               id="infrastruktur">
                    </div>
                </div>
                <button type="reset" class="btn btn-danger">Abbrechen</button>
                <button type="submit" class="btn btn-success" onclick="sendData()">Suchen</button>
            </section>
        </div>
        <div id="alert"></div>
        <div id="results" class="row" style="margin: 20px 0"></div>
        <style>
      #map {
        height: 500px; 
        width: 100%;
       }
    </style>
        <div id="map"></div>
        <script>
            function initMap(latitude, longitude) {
                // var country = {lat: -25.344, lng: 131.036};
              var country = {lat: latitude, lng: longitude};
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 4, center: country});
              var marker = new google.maps.Marker({position: country, map: map});
            }
        </script>
    </div>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5dtYryMno4iD8ILlVIIkUgzRCaVq2rCM&callback=initMap" -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5dtYryMno4iD8ILlVIIkUgzRCaVq2rCM"
    async defer></script>
    <script src=" {{asset('js/jquery.steps.js') }} "></script>
    <script src=" {{asset('js/aussteiger_js.js') }} "></script>

@stop
