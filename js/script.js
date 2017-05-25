$(function() {
	//GET/READ -- az oldal első betöltésekor kell, hogy megjelenjenek a már beírt üzenetek
	// pollingal megoldott ajax GET kérés
	// setTimeout-al megvalosított polling
	/*(function poll() {
		setTimeout(function() { 
			$.ajax({	
				url: 'messages.php',
				contentType: 'application/json',
				success:  function(response_get) {
					var contentP = $('#content');
					contentP.html('');			
					for(var i = 0; i <= response_get.length-1; i++){
						contentP.append('<li id="content">' + response_get[i].username + ': ' + response_get[i].messages + '</li>');
					}
					poll();
				},
			});
		},3000);
	})();*/
	// setInterval-al megvalosított polling
	setInterval(function() {
		$.ajax({
			url: 'php/messages_get.php',
			//contentType: 'application/json; charset=utf-8',	//contentType-ot akkor használunk, ha adatot küldünk a szerver felé, itt a karakter készletet is be lehet állítani
			dataType: 'JSON',	//dataType-ot akkor használunk ha a szevertől várjuk az adatot
			success:  function(response_get) {
				console.log(response_get);
				//console.log(response_get[0].username);
				console.log(response_get.length);
				var contentP = $('#content');
				contentP.html('');		//ha ez nem lenne itt akkor a setTimeout által beállított 3 mp enkénti GET kérésre kapott választ minden 3. másodpercben kiírná egymás alá			
				for(var i = 0; i <= response_get.length-1; i++){
					contentP.append('<li id="content">' + response_get[i].username + ': ' + response_get[i].messages + '</li>');
				}
			},
		});
	},3000);	//3 másodpercenként végrehajtja a setInterval-on belül leírt kódot
	
	//POST/CREAT
	$('#create-form').on('submit', function(event) {
		event.preventDefault();	//"az alapértelmezett működési mechanizmus mgakadályozása"???

		var createUsername = $('#create-username').val();
		var createMessage = $('#create-message').val();
		var response_post;

		$.ajax({
			url: 'php/messages_post.php',
			method: 'POST',
			//dataType:  "JSON",
			//contentType: 'application/json; charset=utf-8',
			type: 'json',
			data: {username:createUsername, messages:createMessage},
			success: function(response_post) {
							console.log(response_post);
                            console.log('success');
							var contentP = $('#content');
							contentP.append('<li id="content">' + response_post + '</li>');
            },
            error: function() {
        					console.log('Cannot retrieve data.');
    		}
		});
	});
});