<?php

$recepient = "sashaherasymchuk@gmail.com";
$sitename = "Чехли";

$name = trim($_POST["client_name"]);
$phone = trim($_POST["nomer"]);
$text = trim($_POST["gmail"]);
$cheh = trim($_POST["cheh"]);
$message = "Имя: $name \nТелефон: $phone \nGmail: $text \nНомер чехла: $cheh";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>