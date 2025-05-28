<?php
$title = "Tiga Inti Perkasa Tech";

ob_start();
include 'content/hero.php';
include 'content/product.php';
include 'content/pricing.php';
include 'content/offer.php';
$content = ob_get_clean();

include 'layouts/head.php';
