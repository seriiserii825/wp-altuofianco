
 
 		var webinar1_date= [							
						 ];			
 		var webinar2_date= ['Venerdì 20 Marzo - ore 10.30',
						'Mercoledì 25 Marzo - ore 15.30'						
						 ];		
 		var webinar3_date= [			
						 ];
		var webinar4_date= [			
						 ];
		var webinar5_date= [			
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


 });
 
 // jQuery(document).ready(function($) {
	//  $('select').styler();
 // });

 
 
(function($) {

 
})(jQuery);

