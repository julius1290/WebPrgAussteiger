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
function showData(data) {
    let results = data;
    $("#results").empty();
    let html;
    if (results.length >= 1) {
        $("#alert").empty();
        for (let i = 0; i < results.length; i++) {
            // html = '<div class="entry"><div class="entry-card"><div class="card-body"><h5 class="card-title">' + complaints[i].customer.name + '</h5><h6 class="card-subtitle mb-2 text-muted"><time>' + complaints[i].compDate + '</time> von ' + complaints[i].user.firstname + ' ' + complaints[i].user.lastname + '</h6><p class="card-text">' + complaints[i].details.substr(0, 100) + '...</p>';
            // html += '</div><div id="card-footer-' + complaints[i].id + '" class="card-footer"><span class="card-link fas fa-edit" onclick="loadEditComplaint(' + complaints[i].id + ')" data-toggle="modal" data-target="#editComplaint"></span><span id="status-' + complaints[i].id + '" class="badge badge-pill badge-primary card-link" onclick="statusComplaint(' + complaints[i].id + ', ' + complaints[i].status + ')">' + statusName[complaints[i].status-1] + '</span></div></div>';
            // $("#results").append(html);
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
console.log('lel');
    let geschlecht = $("input[name='geschlecht']").val();;
    let religion = $('#religion').val();
    let regierungsform = $('#regierungsform').val();
    let klima = $('#klima').val();
    let gesundheit = $('#gesundheit').val();
    let infrastruktur = $('#infrastruktur').val();
    if (geschlecht == '' || gesundheit == '' || infrastruktur == '') error = true;

    if (error === false) {
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



