<?php

$recepient = "info@web-clique.com";
$sitename = "Providence";

$email = trim($_POST["email"]);
$message = "E-mail: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");