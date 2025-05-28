<?php
$title = "About Tiga Inti Perkasa Tech";

ob_start();
include 'content/company.php';
include 'content/about.php';
$content = ob_get_clean();

include 'layouts/main.php';
