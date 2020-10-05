<?php

$valid = false;
$sent_to_email = "mikael@redox-prod.ch";
$order_url = "nous-contacter.php";

if (isset($_POST) && $_POST["email"] != null) {
	$text_fields = [
		"last_name",
		"first_name",
		"email",
		"project",
		"message"
	];

	if (are_text_fields_valid($text_fields, $_POST) && isset($_POST["email"]) && is_email($_POST["email"])) {
		$valid = true;
	}
}

if ($valid && $_POST['nonono'] == '') { // L'input doit être vide, sinon spam
	$from_email = clean($_POST["email"]);
	$from_name = clean($_POST["first_name"]." ".$_POST["last_name"]);

	$additional_infos = "";
	$additional_infos .= (isset($_POST["telephone"]) && $_POST["telephone"] != null) ? ("Tel : $_POST[telephone]<br/>") : ("");
	$additional_infos .= (isset($_POST["project"]) && $_POST["project"] != null) ? ("Type de projet : $_POST[project]<br/>") : ("");
	$additional_infos .= (isset($_POST["website"]) && $_POST["website"] != null) ? ("Site concerné : $_POST[website]<br/>") : ("");
	
	$message = clean($_POST["message"]);

	$object = "redox-prod.ch - Message de $from_name";

	$content = format_email($message, $from_name, $additional_infos);

	$is_email = send_email($object, $content, $from_email, $from_name, $sent_to_email);

	if ($is_email) {
		// ajouter l'envoi d'un mail de confirmation ?
		header("Location: /?state=success");
	} else {
		echo error_get_last()['message'];
		header("Location: " . $order_url . "?state=email_error");
	}
} else {
	echo error_get_last()['message'];
	header("Location: " . $order_url . "?state=error");
}

//
// Functions
//

function send_email($object, $content, $from_email, $from_name, $sent_to_email)
{

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';

	// En-têtes additionnels
	$headers[] = "To: Redox Mikael <$sent_to_email>";
	$headers[] = "From: $from_name <$from_email>";

	return mail($sent_to_email, $object, $content, implode("\r\n", $headers));
}

function clean($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function is_email($email)
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_length_under($str, $length)
{
	return strlen($str) > 0 && strlen($str) < $length;
}

function are_text_fields_valid($field_names, $field_values) {
	foreach ($field_names as $field) {
		if (!isset($field_values[$field]) || !is_length_under($field_values[$field], 120)) {
			return false;
		}
	}
	return true;
}

function format_email($message, $from_name, $additional_infos) {

	$html = "<h2>Nouveau message de $from_name</h2>";

	if($additional_infos != "") {
		$html .= "<h3>Informations supplémentaires</h3>";
		$html .= "<p>$additional_infos</p>";
	}
	
	$html .= "<h3>Message</h3>";
	$html .= "<p>$message</p>";

	return $html;

}