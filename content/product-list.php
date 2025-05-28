<?php
// Mendapatkan path ke file JSON di folder public
$jsonFile = __DIR__ . '/../data/product.json';

// Memeriksa apakah file JSON ada
if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
} else {
    $data = [];
}
?>

<!-- Card Blog -->
<div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card Product -->
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $item): ?>
                <?php
                // Fallback jika gambar kosong
                $gambar = !empty($item['gambar-1']) ? $item['gambar-1'] : 'image.jpg';
                ?>
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="h-52 rounded-t-xl">
                        <img class="size-full object-cover rounded-t-xl" src="image/<?php echo htmlspecialchars($gambar); ?>" alt="Cover Image">
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex gap-3">
                            <i class="py-2.5 w-12 text-center text-2xl rounded-lg text-white dark:text-neutral-800 bg-primary dark:bg-secondary <?= htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                            <div>
                                <span class="block text-xs font-semibold uppercase text-neutral-400">
                                    Best for Enterprise Business
                                </span>
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    <?= htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8'); ?>
                                </h3>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-500 dark:text-neutral-500 overflow-hidden line-clamp-3">
                            <?= htmlspecialchars($item['deskripsi'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <div class="mt-3">
                            <p class="text-sm text-gray-400 dark:text-gray-200">Fitur</p>
                            <p class="text-gray-500 dark:text-neutral-500 line-clamp-1">
                                <?= htmlspecialchars($item['fitur'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>
                        <div class="mt-3">
                            <p class="text-sm text-gray-400 dark:text-gray-200">Harga Spesial</p>
                            <p class="flex items-center gap-2 text-xl font-extrabold text-gray-900 dark:text-white">
                                Rp<?= number_format($item['harga'], 0, ',', '.'); ?>
                                <span class="me-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                    <?= htmlspecialchars($item['promo'], ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                        <a href="https://wa.me/6287737416923?text=Halo,%20saya%20tertarik%20dengan%20produk%20<?php echo urlencode($item['judul']); ?>." target="_blank" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            Coba Sekarang
                        </a>
                        <a href="pages/detail.php?id=<?= urlencode($item['id']) ?>" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            Info Produk
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center col-span-2 md:col-span-4">Tidak ada data tersedia.</p>
        <?php endif; ?>
        <!-- End Card Product -->

    </div>
    <!-- End Grid -->
</div>
<!-- End Card Blog -->