function renderPage () {

	$.post('./assets/php/requests.php', {action : "getEvents", test : 'test'}, function (data) {
		
		var d = JSON.parse (data);
		console.log(d);
	});

}

function renderEvents (events) {
	var accordion = $('#accordion');
	var txt = '';
	for (var i = 0; i < events.length; ++i) {
		txt = '<div class="card">\
                    <div id="headingThree" + i +  >\
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">\
                        <div class="images-box">\
                          <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">\
                        </div>\
                        <span class="time">10am - 12:30pm</span>\
                        <h4>Getting Started With SketchApp</h4>\
                        <h5 class="name">David Warner</h5>\
                      </div>\
                    </div>\
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">\
                      <div class="card-body">\
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>\
                        <div class="location">\
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica\
                        </div>\
                      </div>\
                    </div>\
                  </div>';
		$(accordion).append(txt);
	}
}