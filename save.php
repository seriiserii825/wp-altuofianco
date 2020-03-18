<?php



$txt = ""; 
 
$d = new DateTime("now", new DateTimeZone('Europe/Rome'));

$d = $d->format('d/m/Y, H:i:s');

				
							
 	

function webinardatais(){
	
	
};


if (isset($_REQUEST['register-btn'])) {
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		if (strlen($_POST['phone']) > 4) {
			
	$w1 = $webinar[$_POST['webinar']];
	$w11 = $_POST['webinar'];
	$w2 = $_POST['webdata']; 
	$w3 = $_POST['email'];
	$w4 = $_POST['phone'];
	$w5 = $_POST['name'];
	$w6 = $_POST['azienda'];
 	$w7 = $_POST['provincia'];
	$w8 = $_POST['messaggio'];
			
		if	($w11 == 0) {
				$webinar_date = array('webinar1 date1 Lunedi ','webinar1 date2 Giovedi');	

		
			}
				elseif ($w11 == 1) {
				$webinar_date = array('Venerdì 20 Marzo - ore 10.30',
						'Mercoledì 25 Marzo - ore 15.30'						
						 );		
							
			}
				elseif ($w11 == 2) {
				$webinar_date = array('webinar3 date1','webinar3 date2');
					
			
			}
				elseif ($w11 == 3) {
				$webinar_date = array('webinar4 date1','webinar4 date2');
					
			
			}
				elseif ($w11 == 4) {
				$webinar_date = array('webinar5 date1','webinar5 date2');
			}
			$w22 = $webinar_date[$w2];	
			$to = 'webmaster@bludelego.it';
			$subject = 'Nuova compilazione form webinar ' .$w1 . '  ' . $w22 ;
			$message = "Webinar " . $w1. "\r\n da " .$w22  . "\r\n Email " . $w3 . "\r\n Telefono " . $w4 . "\r\n Nominativo " . $w5 . "\r\n Azienda " . $w6 . "\r\n Provincia " . $w7 . "\r\n Messaggio " . $w8 . "\r\n";

		$header = "Data di applicazione;Webinar;Data Webinar;email;Telefono;Nominativo;Azienda;Provincia;Messaggio" ;

		$txt = $d . ';' . $w1 . ';' . $w22 . ';' . $w3 . ';' . $w4 . ';' . $w5 . ';' . $w6 . ';' . $w7 . ';' . $w8 . '';

		$file = "/home/u103857406/domains/altuofianco.it/public_html/webinar/logs/Webinar-" . $w1 . '-' . $w2 . ".csv";

		$filename = $file;

		if (file_exists($filename)) {   
				$filefound = '1';     //echo('File exist');                    
		} else {
				$myfile = file_put_contents($file, $header.PHP_EOL , FILE_APPEND | LOCK_EX);
				//echo('File absent');    
			}




			$headers = 'From: noreply@altuofianco.it' . "\r\n" .
				'Reply-To: noreply@altuofianco.it' . "\r\n" .
				'Bcc: f.cioni@altuofianco.it, radu@blueline.md' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
		
	

			$myfile = file_put_contents($file, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
			
			echo " <div id='test-popup' class='white-popup'>  <p color='darkblue'> Il form e stato inviato con successo </p>  </div>

			";
			
			
		}
	} else {
		echo "</br><p color='red'>  Campo email sbagliato  </p> </br>" . $_POST['email'];
	}
	if (strlen($_POST['phone']) > 6) {

	} else {
		echo "</br><p color='red'>  Campo telefono sbagliato </p> </br>" . $_POST['phone'];
	}
}




?>


