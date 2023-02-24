<?php

function deliver_mail() {
	// if the submit button is clicked, send the email
	if ( isset( $_POST['submitted']))  {
		// sanitize form values
		if(isset($_POST["first-name"])) {
			$name	= sanitize_text_field( $_POST["first-name"] ). ' ' . sanitize_text_field( $_POST["last-name"] );
		}
		$email = sanitize_email( $_POST["email"] );
		$phone_number = sanitize_text_field($_POST['phone']);
		$postcode = sanitize_text_field($_POST['postcode']);
		$form_message = sanitize_text_field( $_POST["message"] );
		if(isset($_POST['g-recaptcha-response'])) {
			$captcha=$_POST['g-recaptcha-response'];
		}
		// if(!isset($captcha)){
			// 	echo '<div><h3 class="all-products__subtitle c-dark">hiy</h3></div>';
			// 	exit;
			// }
			
			// get the blog administrator's email address
		$to = get_field('contact_email_address', 'option');
		$subject 	= get_field('email_subject', 'option');
		$message = 	"Name: " . $name . "\r\n" .
					"Email: " . $email . "\r\n" .
					"Phone Number: " . $phone_number . "\r\n" .
					"Postcode: " . $postcode . "\r\n" .
					"Message: \r\n\r\n". $form_message;
		$headers = "From: $name<$email>" . "\r\n";

		// $return = '<h3 class="all-products__subtitle c-dark"> message sent</h3>';
		// $response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . get_field('secret_key', 'options') . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
		// $response = json_decode($response);
		// If email has been process for sending, display a success message
		// if($response->success == true) {
			
			if ( wp_mail( $to, $subject, $message, $headers ) ) {
				echo get_field('email_success_message', 'option');
				die;
			} else {
				echo get_field('email_fail_message', 'option');
				die;
			}
		// } else {
		// 	echo '<div><h3 class="all-products__subtitle c-dark">captcha error</h3></div>';
		// }
		
	}
}
add_action('wp_ajax_contact', 'deliver_mail'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_contact', 'deliver_mail');

?>