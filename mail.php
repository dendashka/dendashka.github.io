<?php

$recepient = "d-dashkevich@mail.ru";
$siteName = "party-shot";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$data = trim($_POST["data"]);
$message = "Имя: $name \nТелефон: $phone \Дата: $data";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>