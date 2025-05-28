<?php
$title = "Product Tiga Inti Perkasa Tech";

ob_start();
include 'content/banner.php';
include 'content/product-list.php';
$content = ob_get_clean();

include 'layouts/main.php';
