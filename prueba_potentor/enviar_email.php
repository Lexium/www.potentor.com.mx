<?php
//var_dump($_POST);die();
require_once 'libraries/Madmimi.php';
$mensaje = '[[tracking_beacon]]
	<pre>';
$enviar = true;

foreach ($_POST as $key => $value)
{
	if(is_array($value))
	{
		$valores = '';
		foreach ($value as $clave => $valor)
		{
			if($clave > 0)
			{
				$valores .= str_pad("", 22, " ", STR_PAD_LEFT) . $valor . '<br>';
			}
			else
			{
				$valores .= $valor . '<br>';
			}
		}
		$value = $valores;
	}
	if(substr($key, 0,1) != '_')
	{
		$variable = ucfirst($key);
		$variable =  str_replace("_", " ", $variable);
		$variable =  str_pad($variable, 20);
		$variable = '<b>' . $variable . '</b>';
		$mensaje .= ucfirst($variable) . ': ' . $value . '<br>';
	}
	else
	{
		if($value != '')
		{
			$no_enviar = true;
		}
	}
}
$mensaje .= '</pre>';

//var_dump($mensaje);die();
/*
CONFIGURACIÓN
*/
$options = array(
    'promotion_name' => 'Notificaciones Potentor',
    'recipients'     => 'andrea@potentor.com.mx',
    'bcc'     		 => 'miguel.cruz@potentor.com.mx',
    //'recipients'     => 'eloy@lexiumonline.com',
    'subject'        => 'Solicita demo',
    'from'           => 'no-reply@potentor.com.mx',
);
if(isset($_POST['email']))
{
	$options['from'] = $_POST['email'];
}

$madmimi= new MadMimi();
$transaction_id = $madmimi->SendHTML($options, $mensaje);

if(isset($transaction_id))
{
	header("Location: gracias.php"); /* Redirección del navegador */
}
else
{
	echo 'No lo envió';
}

?>