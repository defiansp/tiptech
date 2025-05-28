<?php
$page = $_GET['page'] ?? 'home';

$allowedPages = ['home', 'product', 'product-detail', 'pricing', 'contact', 'about']; // daftar yang diizinkan

if (in_array($page, $allowedPages)) {
    include "pages/$page.php";
} else {
    include "pages/404.php"; // jika tidak ditemukan
}
