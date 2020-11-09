<?php
include('config.php');

$has_error= array();

if($_POST && $_POST['completo'] == 1){

	require_once 'libraries/Madmimi.php';

	function send_madmimi($params_email){
		global $config;

		$params_email['subject']="Solicita demo";

		$options = array(
            'promotion_name' => 'Notificaciones',
            'recipients'     => $config['email_admin'].",".$config['email_ejecutivo'],
            'subject'        => $params_email['subject'],
            'from'           => $params_email['name'] .' <'. $params_email['email'] .'>',
        );

		if(ENVIRONMENT == "DEVELOPMENT"){
			$options['recipients']= $config['email_testing'];
		}

        if(isset($params_email['bcc']) and $params_email['bcc']!=""){
            $options['bcc'] = $params_email['bcc'];
        }

		$body= "<p>Tipo de solicitud: ".$params_email['Tipo_de_solicitud']."</p>";
		$body.= "<p>Fecha y hora: ".$params_email['Fecha_y_hora']."</p>";
		$body.= "<p>Empresa: ".$params_email['company']."</p>";
		$body.= "<p>Contacto: ".$params_email['name']."</p>";
		$body.= "<p>E-mail: ".$params_email['email']."</p>";
		$body.= "<p>Teléfono: ".$params_email['phone']."</p>";
		$body.= "<p>Puesto: ".$params_email['puesto']."</p>";
		$body.= "<p>Cantidad de empleados: ".$params_email['company_size']."</p>";
		/*$body.= "<p>Soluciones: ".implode(",",$params_email['solutions'])."</p>";*/

		$body.= "<p>&nbsp;</p>";

        $body.= $params_email['message'];
        $mensaje = '<html><head><title>Notificaciones</title></head><body>[[tracking_beacon]] '. $body .'</body></html>';

		$madmimi= new MadMimi();
		$transaction_id = $madmimi->SendHTML($options, $mensaje);

		if(isset($transaction_id)){
			return 1;
		}

        return 0;
	}
//	"<pre>".print_r($_POST)."</pre>";die();

	if(trim($_POST['name'])==""){
		$has_error['name']= "Nombre es requerido";
	}
	if(trim($_POST['phone'])==""){
		$has_error['phone']= "Teléfono es requerido";
	}
	if(trim($_POST['puesto'])==""){
		$has_error['puesto']= "El puesto es requerido";
	}
	if(trim($_POST['email'])==""){
		$has_error['email']= "Email empresarial es requerido";
	}	
	if(trim($_POST['company'])==""){
		$has_error['company']= "Empresa es requerida";
	}

	if(trim($_POST['message'])==""){
		$has_error['message']= "Mensaje es requerido";
	}
	if(trim($_POST['g-recaptcha-response'])==""){
		$has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";
	}

	$ip = $_SERVER['REMOTE_ADDR'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $config['recaptcha_secretKey'] . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $ip);
	$responseKeys = json_decode($response, true);
	if (intval($responseKeys["success"]) !== 1) {
		$has_error['g-recaptcha-response']= "Por favor, confirma que no eres un robot";
	}

	if(count($has_error)<=0){
		$success= send_madmimi($_POST);
	}
}

