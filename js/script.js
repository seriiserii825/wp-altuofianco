
 
 		var webinar1_date= ['webinar1 date1 Lunedi ','webinar1 date2 Giovedi'];			
 		var webinar2_date= ['Mercoledì 25 Marzo - ore 15.30','Venerdì 27 Marzo - ore 10.30'];		
 		var webinar3_date= ['Mercoledì 25 Marzo - ore 10.30','Venerdì 27 Marzo - ore 15.30'];
		var webinar4_date= ['Martedì 24 Marzo - ore 10.30','Giovedì 26 Marzo - ore 15.30'];
		var webinar5_date= ['webinar5 date1 Lunedi ','webinar5 date2 Giovedi'];
			
function removeselect() {
		document.getElementById("webdata").options.length = 0;
}


jQuery(document).on("change",function(){

		var _getValue = document.getElementById('webdata');
		console.log(_getValue.value)

	});
	
var url='';

$.get(url)
    .done(function() { 
        // exists code 
				
console.log("EXIST");

    }).fail(function() { 
        // not exists code
    })


// Changing date and time by changing webinar
			
 jQuery(document).on("change","#webinar",function(){
        webinar = jQuery("#webinar").val(); 
		console.log(webinar);

let count = 0;
	
	if (webinar==0) {
		removeselect();
		webinar1_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = count;
				opt.innerHTML = element;
				select.appendChild(opt);
				count++;
		}
		);

	}
	
	
		
	if (webinar==1) {
		removeselect();
		webinar2_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = count;
				opt.innerHTML = element;
				select.appendChild(opt);
				count++;
		}
		);
	}
	
		
		
	if (webinar==2) {
		removeselect();
		webinar3_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = count;
				opt.innerHTML = element;
				select.appendChild(opt);
				count++;
		}
		);
	}
	
	if (webinar==3) {
		removeselect();
		webinar4_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = count;
				opt.innerHTML = element;
				select.appendChild(opt);
				count++;
		}
		);
	}
	
		if (webinar==4) {
		removeselect();
		webinar5_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = count;
				opt.innerHTML = element;
				select.appendChild(opt);
				count++;
		}
		);
	}

 });
 
 jQuery(document).ready(function($) {
 	$('#js-button').on('click', function () {
 		$('body').toggleClass('fixed');
 		$(this).toggleClass('menu-opened');
 		$('#js-navigation').toggleClass('open');
	});
 });

 
 
(function($) {

 
})(jQuery);

