<?php
require_once 'Mandrill.php';
echo "hello";

$mandrill = new Mandrill($config->mandrill->apikey);

$message = new stdClass();
$message->html = "Bando";
$message->text = "Will u sex me?";
$message->subject = "I wanna have sex";
$message->from_email = "dibyabhoidibya@gmail.com";
$message->from_name  = "Dibya Bhoi";
$message->to = array(array("email" => "hellboy.somresh@gmail.com"));
$message->track_opens = true;

$response = $mandrill->messages->send($message);
?>
