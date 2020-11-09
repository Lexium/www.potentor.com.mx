<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('config.php');

	require_once 'libraries/Madmimi.php';

	function send_madmimi($params_email){
		global $config;

		$params_email['subject']="Promo 3 meses grátis";

		$options = array(
            'promotion_name' => 'Notificaciones',
            'recipients'     => $config['email_admin'].",".$config['email_ejecutivo'],
            'subject'        => $params_email['subject'],
            'from'           => $params_email['email'],
        );

		if(ENVIRONMENT == "DEVELOPMENT"){
			$options['recipients']= $config['email_testing'];
		}

        if(isset($params_email['bcc']) and $params_email['bcc']!=""){
            $options['bcc'] = $params_email['bcc'];
        }

		$body= "<p>E-mail: ".$params_email['email']."</p>";
		$body.= "<p>Tel&eacute;fono: ".$params_email['phone']."</p>";

        $mensaje = '<html><head><title>Notificaciones</title></head><body>[[tracking_beacon]] '. $body .'</body></html>';

		$madmimi= new MadMimi();
		$transaction_id = $madmimi->SendHTML($options, $mensaje);

		if(isset($transaction_id)){
			return 1;
		}

        return 0;
	}

	$success = false;
	if($_POST['message'] == ''){
		$success= send_madmimi($_POST);
	}

	session_start();
    $_SESSION['popup'] = false;
    header('Location:'.$_SERVER['HTTP_REFERER']);
    exit();
?>