<?php
$valid = false;
$sent_to_email = "ruffieux.mikael@gmail.com";
$order_url = "index.html";

if (isset($_POST["contact"])) {
  $text_fields = ["name"];
  $numeric_fields = ["phone"]

  if(are_text_fields_valid($text_fields, $_POST)
    && are_numeric_fields_valid($numeric_fields, $_POST)
    && isset($_POST["email"]) && is_email($_POST["email"]))
  {
    $valid = true;
  }
}

if($valid) {
  $reply_to = clean($_POST["email"]);
  $name = clean($_POST["name"]);
  $comment = clean($_POST["message"]);
  $phone = clean($_POST["phone"]);
  $object = "redox-prod.ch - Message de ${name}";

  $content = <<<EOT
<h3>Nouveau message de $name</h3>

<b>$subject</b><br>
$comment
<br>
Tel : $phone

EOT;

  


  $is_email = send_email($object, $content, $reply_to, $sent_to_email);

  if($is_email) {
    header("Location: ".$order_url."?state=success");
  } else {
    header("Location: ".$order_url."?state=email_error");
  }
} else {
  header("Location: ".$order_url."?state=error");
}

//
// Functions
//

function send_email($object, $content, $reply_to, $sent_to_email) {

  $headers	= "From: Redox Prod. <".$sent_to_email.">\r\n".
              "Reply-To: ".$reply_to."\r\n".
              "X-Mailer: PHP/".phpversion()."\r\n".
              "Content-type: text/html; charset=UTF-8\r\n";
  return mail($sent_to_email, $object, $content, $headers);
}

function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function is_email($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_length_under($str, $length) {
  return strlen($str) > 0 && strlen($str) < $length;
}

function are_text_fields_valid($field_names, $field_values) {
  foreach($field_names as $field) {
    if(!isset($field_values[$field]) || !is_length_under($field_values[$field], 60)) {
      return false;
    }
  }
  return true;
}

function are_numeric_fields_valid($field_names, $field_values) {
  foreach($field_names as $field) {
    if(!isset($field_values[$field]) || !is_numeric($field_values[$field])) {
      return false;
    }
  }
  return true;
}

?>
