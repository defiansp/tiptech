<?php
$title = "Harga Produk Tiga Inti Perkasa Tech";

ob_start();
include 'content/pricing.php';
include 'content/pricing-detail.php';
$content = ob_get_clean();

include 'layouts/main.php';
