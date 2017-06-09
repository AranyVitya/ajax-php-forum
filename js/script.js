$(function() {
	//GET/READ -- az oldal első betöltésekor kell, hogy megjelenjenek a már beírt üzenetek
	// pollingal megoldott ajax GET kérés
	// setInterval-al megvalosított polling
	//setInterval(function() {
		$.ajax({
			url: 'php/messages_get.php',
			dataType: 'JSON',	//dataType-ot akkor használunk ha a szevertől várjuk az adatot
			success:  function(response_get) {
				console.log(response_get);
				console.log(response_get.length);
				$('#default-panel').html('');		//ha ez nem lenne itt akkor a setTimeout által beállított 3 mp enkénti GET kérésre kapott választ minden 3. másodpercben kiírná egymás alá			

				for(var i = 0; i <= response_get.length-1; i++){
					$('#default-panel').append('<div class="panel panel-default">\
        											<div class="panel-heading" id="name-content">\
          												<div class="container-fluid">\
              													<div class="row">\
              														<div class="col-xs-4" id="name-content">' + response_get[i].username + '</div>\
              														<div class="col-xs-8" id="date-content">' + response_get[i].currentdate + '</div>\
              													</div>\
          												</div>\
        											</div>\
        											<div class="panel-body" id="message-content">' + response_get[i].messages + '</div>\
    											</div>');		
				}
			},
		});
	//},3000);	//3 másodpercenként végrehajtja a setInterval-on belül leírt kódot
	
	//POST/CREAT
	$('#create-form').on('submit', function(event) {
		event.preventDefault();	//"az alapértelmezett működési mechanizmus mgakadályozása"???

		var createUsername = $('#create-username').val();
		var createMessage = $('#create-message').val();

		$.ajax({
			url: 'php/messages_post.php',
			method: 'POST',
			type: 'json',
			data: {username:createUsername, messages:createMessage},
			success: function(response_post) {
							console.log(response_post);
                            console.log('success');
							$('#default-panel').append(response_post);
            },
            error: function() {
        					console.log('Cannot retrieve data.');
    		}
		});
	});
});