<?php
	class sendMail{
		function __construct(){

		}
		function send($to,$subject,$message,$from)
		{
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from."\r\n".
		    'Reply-To: '.$from."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		    // Compose a simple HTML email message
			$message = '<html><body>';
			$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
			$message .= '<p style="color:#080;font-size:18px;">'.$message.'</p>';
			$message .= '</body></html>';
						if(mail($to, $subject, $message, $headers)){
			    return true;
			} else{
			    return false;
			}
					}
			function hello(){
				echo "hello";
			}		
	} 
?>