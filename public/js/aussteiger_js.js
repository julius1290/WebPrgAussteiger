"use strict";


$( document ).ready(function() {
	$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
});


/**
 * Generieren einer Meldung
 * @param  {String}  outputElement [description]
 * @param  {String}  cssClass      [description]
 * @param  {String}  text          [description]
 * @param  {Boolean} append        [description]
 */
 function createAlert(outputElement, cssClass, text, append = false) {
    if (append === false) $(outputElement).empty();
    let icon = null;
    switch (cssClass) {
        case "success": 
        icon = '<i class="fa fa-check-circle"></i> '; 
        break;
        case "danger": 
        icon = '<i class="fa fa-exclamation-circle"></i> '; 
        break;
        case "warning": 
        icon = '<i class="fa fa-exclamation-triangle"></i> '; 
        break;
        case "info": 
        icon = '<i class="fa fa-info-circle"></i> '; 
        break;
    }
    $(outputElement).append('<div class="alert alert-' + cssClass + ' alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>' + icon + ' ' + text + '</div>');
}

/**
 * Zeigt Ergebnisse an
 */
 function showData(results) {
    $("#results").empty();
    let html;
    if (results.length >= 1) {
        $("#alert").empty();
        for (let i = 0; i < results.length; i++) {
            let regierungDE;
            let nr = i+1 + '. ';
            let top = '';
            if (i === 0) {
                top = ' <span class="badge badge-secondary">TOP</span>';
                initMap(parseFloat(results[i].latitude), parseFloat(results[i].longitude));
            }
            switch(results[i].regierungsform) {
                case 'democracy':
                regierungDE = 'Demokratie';
                break;
                case 'monarchy':
                regierungDE = 'Monarchie';
                break;
                case 'communist':
                regierungDE = 'Kommunismus';
                break;
            }
            html = '<div class="entry col-4"><div class="card"><div class="card-body"><h5 class="card-title">' + nr + results[i].land + top + '</h5><p class="card-text">Religion: ' + results[i].religion + '</p><p class="card-text">Regierung: ' + regierungDE + '</p><p class="card-text">Temperatur: ' + results[i].durchschnittstemperatur + '°C</p></div></div>';
            $("#results").append(html);
        }
    }
    else {
        createAlert("#alert", "info", "Es wurden keine Ergebnisse gefunden.");
    }

}

/**
 * Validieren und Senden der Daten
 */
 function sendData() {
    let error = false;
    let geschlecht = $("input[name='geschlecht']").val();;
    let religion = $('#religion').val();
    let regierungsform = $('#regierungsform').val();
    let klima = $('#klima').val();
    let gesundheit = $('#gesundheit').val();
    let infrastruktur = $('#infrastruktur').val();
    if (geschlecht == '' || gesundheit == '' || infrastruktur == '' || religion == '' || regierungsform == '' || klima == '') error = true;

    if (error === false) {
        createAlert("#alert", "info", "Daten werden geladen...");
        $.ajax({
            type: "POST",
            url: "/calculate",
            cache: false,
            timeout: 5000,
            data:JSON.stringify({geschlecht: geschlecht, regierungsform: regierungsform, klima: klima, gesundheit: gesundheit, infrastruktur: infrastruktur, religion: religion}),
            success: function(data) {
                data = JSON.parse(data);
                showData(data);
            },
            error: function() {
                createAlert("#alert", "warning", "Fehler beim Senden der Daten: Fehler bei der Übertragung!");
            }
        });
    }
    else {
        createAlert("#alert", "warning", "Bitte alle Felder ausfüllen!");
    }
}



