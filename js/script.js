
 
 		var webinar1_date= ['01 marzo 2020 10:00',
						'03 marzo 2020 11:00',
						'03 marzo 2020 15:00',
						'03 marzo 2020 18:00'							
						 ];			
 		var webinar2_date= ['02 marzo 2020 10:00',
						'07 marzo 2020 11:00',
						'08 marzo 2020 15:00',
						'11 marzo 2020 18:00'							
						 ];		
 		var webinar3_date= ['03 marzo 2020 10:00',
						'04 marzo 2020 11:00',
						'23 marzo 2020 15:00',
						'05 marzo 2020 18:00'							
						 ];
			
function removeselect() {
	document.getElementById("webdata").options.length = 0;
}
    jQuery(document).on("change",function(){

var _getValue = document.getElementById('webdata');
console.log(_getValue.value)

	});


// Changing date and time by changing webinar
			
 jQuery(document).on("change","#webinar",function(){
        webinar = jQuery("#webinar").val(); 
		console.log(webinar);

	
	if (webinar==0) {
		removeselect();
		webinar1_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = element;
				opt.innerHTML = element;
				select.appendChild(opt);
		}
		);

	}
	
	
		
	if (webinar==1) {
		removeselect();
		webinar2_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = element;
				opt.innerHTML = element;
				select.appendChild(opt);
		}
		);
	}
	
		
		
	if (webinar==2) {
		removeselect();
		webinar3_date.forEach(element => {
					console.log(element)
				select = document.getElementById('webdata');
		
				var opt = document.createElement('option');
				opt.value = element;
				opt.innerHTML = element;
				select.appendChild(opt);
		}
		);
	}


 });
 
 jQuery(document).ready(function($) {
	 $('select').styler();
 });

 
 
(function($) {

 
})(jQuery);

