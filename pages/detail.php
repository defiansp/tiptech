<?php
$base_url = '/tiptech';

// Ambil data produk dari JSON
$jsonFile = __DIR__ . '/../data/product.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
} else {
    $data = [];
}

// Contoh: dapatkan produk berdasarkan id dari query string (sesuaikan kebutuhan)
$id = $_GET['id'] ?? null;
$product = null;
if ($id) {
    foreach ($data as $item) {
        if ($item['id'] === $id) {
            $product = $item;
            break;
        }
    }
}
if (!$product) {
    die('Produk tidak ditemukan.');
}

// Fungsi fallback gambar
function gambar($filename)
{
    $path = __DIR__ . '/../image/' . $filename;
    if (!empty($filename) && file_exists($path)) {
        // Sesuaikan URL dengan base URL kamu
        return '/tiptech/image/' . $filename;
    }
    return '/tiptech/image/image.jpg';
}

// Set judul halaman (bisa dipakai di layout)
$title = $product['judul'] . ' | Tiga Inti Perkasa Tech';

ob_start();
?>

<!-- Blog Article -->
<div class="max-w-screen-xl px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="gap-y-8 lg:gap-y-0 lg:gap-x-6">
        <!-- Content -->
        <div>
            <div class="py-8 lg:pe-8">
                <div class="space-y-5 lg:space-y-8">
                    <a href="<?= $base_url ?>/index.php?page=product" class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-neutral-300">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Kembali ke Daftar Produk
                    </a>

                    <!-- Gambar Produk -->
                    <div class="grid lg:grid-cols-2 gap-3">
                        <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                            <figure class="relative w-full h-60">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="<?= gambar($product['gambar-3'] ?? '') ?>" alt="Gambar Produk 3">
                            </figure>
                            <figure class="relative w-full h-60">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="<?= gambar($product['gambar-2'] ?? '') ?>" alt="Gambar Produk 2">
                            </figure>
                        </div>
                        <figure class="relative w-full h-72 sm:h-96 lg:h-full">
                            <img class="size-full absolute top-0 start-0 object-cover rounded-xl" src="<?= gambar($product['gambar-1'] ?? '') ?>" alt="Gambar Produk 1">
                        </figure>
                    </div>

                    <!-- Nama Produk -->
                    <h2 class="text-3xl font-bold lg:text-5xl dark:text-white"><?= htmlspecialchars($product['judul']) ?></h2>

                    <div class="flex items-center gap-x-5">
                        <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700" href="#">
                            Detail Produk
                        </a>
                    </div>

                    <!-- Highlight -->
                    <blockquote>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($product['deskripsi']) ?></p>
                    </blockquote>

                    <!-- Penjelasan -->
                    <p class="text-lg text-gray-800 dark:text-neutral-200"><?= nl2br(htmlspecialchars($product['penjelasan'])) ?></p>

                    <!-- Fitur -->
                    <div class="space-y-3">
                        <h3 class="text-2xl font-semibold dark:text-white">Fitur</h3>
                        <p class="text-lg text-gray-800 dark:text-neutral-200">Berikut adalah fitur-fitur yang akan anda dapatkan dengan menggunakan produk <?= htmlspecialchars($product['judul']) ?> dari kami.</p>
                    </div>

                    <!-- Daftar fitur -->
                    <ul class="list-disc list-outside space-y-3 ps-5 text-lg text-gray-800 dark:text-neutral-200">
                        <?php foreach (explode(',', $product['fitur']) as $fitur): ?>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-green-600 dark:text-secondary shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <?= htmlspecialchars(trim($fitur)) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <p class="text-lg text-gray-800 dark:text-neutral-200">
                        Saatnya melangkah lebih jauh. Gunakan <span class="font-bold"><?= htmlspecialchars($product['judul']) ?></span> untuk mempercepat proses bisnis, meningkatkan kualitas layanan, dan memperluas jangkauan pasar Anda, hanya dengan <span class="font-bold">Rp<?= number_format($product['harga'], 0, ',', '.') ?></span>. Wujudkan visi bisnis Anda dengan teknologi terbaik.
                    </p>

                </div>
            </div>
        </div>
        <!-- End Content -->

    </div>
</div>
<!-- End Blog Article -->

<?php include __DIR__ . '/../content/cta.php'; ?>

<?php
$content = ob_get_clean();

include __DIR__ . '/../layouts/detail.php';
