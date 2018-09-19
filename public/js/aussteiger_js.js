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
 * Validieren und Senden der Daten
 */
function sendData() {
    let error = false;

    let feld = $('#feld').val();
    if (feld1 == '' || feld2 == '') error = true;

    if (error === false) {
        $.ajax({
            type: "POST",
            url: "ajax.php",
            cache: false,
            timeout: 5000,
            data: {action: 'getData', feld1: feld},
            success: function(data) {
                if (data.status.toLowerCase() === "ok") {
                	// TODO: Daten anzeigen
                    // createAlert("#alert", "success", "Erfolgreich gespeichert!");
                } else {
                    createAlert("#alert", "warning", "Fehler beim Senden der Daten: " + data.message);
                }
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



