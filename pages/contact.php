<?php
$title = "Contact Tiga Inti Perkasa Tech";

ob_start();
include 'content/contact.php';
$content = ob_get_clean();

include 'layouts/main.php';
