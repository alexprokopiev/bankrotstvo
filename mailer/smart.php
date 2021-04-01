<?php

if($_POST["phone"] == '') return 0;

$email = array('heatlead@yandex.ru', '9176977@mail.ru'); // Кому
$from = "zayavka@bankrotstvo-24.ru"; // от кого

$to = implode(",", $email);
$leadtype = trim($_POST["leadtype"]);
$sitename = trim($_POST["city"]);
$sitetype = trim($_POST["type"]);
$utm_source = trim($_POST["utm_source"]);
$utm_medium = trim($_POST["utm_medium"]);
$utm_campaign = trim($_POST["utm_campaign"]);
$utm_term = trim($_POST["utm_term"]);
$utm_content = trim($_POST["utm_content"]);
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$quest1 = trim($_POST['question_1']);
$quest2 = trim($_POST['question_2']);
$quest3 = trim($_POST['question_3']);
$quest4 = implode(', ', $_POST['question_4']);
$quest5 = trim($_POST['question_5']);
$quest6 = implode(', ', $_POST['question_6']);
$host = $_SERVER['SERVER_NAME'];

$subject = "Заявка (Кл. 131) - " .$sitetype. " - " .$sitename. "\r\n";
// $headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$message = "<html><body style='font-family:Arial,sans-serif;'>\r\n";
$message .= "<h2>Тип заявки: ".$leadtype."</h2>\r\n";

if(!empty($name)){
	$message .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
}
if(!empty($phone)){
	$message .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}
if(!empty($email)){
	$message .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
}

if(!empty($quest1)){
	$message .= "<p><strong>Какая общая сумма вашей задолженности? </strong> " . $quest1 . "</p>\r\n";
}

if(!empty($quest2)){
	$message .= "<p><strong>Вы работаете официально? </strong> " . $quest2 . "</p>\r\n";
}

if(!empty($quest3)){
	$message .= "<p><strong>Какова сумма вашего официального дохода в месяц? </strong> " . $quest3 . "</p>\r\n";
}

if(!empty($quest4)){
	$message .= "<p><strong>Укажите структуру вашей задолженности: </strong> " . $quest4 . "</p>\r\n";
}

if(!empty($quest5)){
	$message .= "<p><strong>Были ли у вас просрочки по платежам по кредитам? </strong> " . $quest5 . "</p>\r\n";
}


if(!empty($quest6)){
	$message .= "<p><strong>С чем из перечисленного ниже вы уже столкнулись? </strong> " . $quest6 . "</p>\r\n";
}

if(!empty($utm_source)){
	$message .= "<p><strong>Источник перехода:</strong> " .$utm_source. " " .$utm_medium. " " .$utm_campaign. " " .$utm_term. " " .$utm_content."</p>\r\n";
}

$message .= "<p><strong>Адрес сайта: </strong> " .$host. "</p>\r\n";
$message .= "</body></html>\r\n";




mail($to, $subject, $message, $headers);
?>



