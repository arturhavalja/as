function renderPage () {

	$.post('./assets/php/requests.php', {action : "getEvents"}, function (data) {

		var d = JSON.parse (data);
		renderEvents (d);
	});

}

function renderEvents (events) {

	var accordion,
		txt,
		ev,
		timeStart,
		timeEnd
	;

	var contents = [
		'accordion7', // sunday
		'accordion',  // monday
		'accordion2',  // ...
		'accordion3',
		'accordion4',
		'accordion5',
		'accordion6'
	];

	for (var i = 0; i < events.length; ++i) {
		ev = events[i];

		timeStart = new Date(ev.date_start);
		timeEnd = new Date (ev.date_end);
		txt = 
			'<div class="card">\
                <div id="headingTh' + i +'">\
                  <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTh' + i +'" aria-expanded="false" aria-controls="collapseTh' + i +'">\
                    <div class="images-box">\
                      <img class="img-fluid" src="assets/img/events/' + ev.image_url + '" alt="">\
                    </div>\
                    <span class="time">' + formatAMPM(timeStart) + ' - ' + formatAMPM(timeEnd) + '</span>\
                    <h4>' + ev.title +'</h4>\
                    <h5 class="name">' + ev.autor +'</h5>\
                  </div>\
                </div>\
                <div id="collapseTh' + i +'" class="collapse" aria-labelledby="headingTh' + i +'" data-parent="#accordion">\
                  <div class="card-body">\
                    <p>' + ev.description +'</p>\
                    <div class="location">\
                      <span>Location:</span><a href="' +  'coordinates'+'">' + ev.address_name +'</a><span>    Ticket:</span> <a href="'+ ev.ticket_url +'"> my ticket </a>\
                    </div>\
                  </div>\
                </div>\
              </div>';

        accordion = $('#' + contents[timeStart.getDay()]);
		$(accordion).append(txt);
	}
}