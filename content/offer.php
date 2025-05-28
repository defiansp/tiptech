<!-- Card Blog -->
<div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-16 mx-auto" id="product">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Produk Kami</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Tingkatkan Performa dan Efisiensi Bisnis Anda dengan Produk Unggulan Kami.</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card -->
    <a  href="pages/detail.php?id=<?= urlencode('manufactur') ?>" class="group flex flex-col focus:outline-hidden" href="#">
      <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
        <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="image/mockup-1.png" alt="Blog Image">
        <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
          Popular
        </span>
      </div>

      <div class="mt-7">
        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
          Manufaktur Pro
        </h3>
        <p class="mt-3 text-gray-800 dark:text-neutral-200 line-clamp-3">
          Solusi terintegrasi untuk mengoptimalkan proses produksi dan pengelolaan sumber daya manufaktur, meningkatkan produktivitas, mengurangi biaya, dan menjaga kualitas produk secara konsisten.
        </p>
        <p class="mt-5 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
          Info Produk
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a  href="pages/detail.php?id=<?= urlencode('distribusi') ?>" class="group flex flex-col focus:outline-hidden" href="#">
      <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
        <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="image/mockup-2.png" alt="Blog Image">
      </div>

      <div class="mt-7">
        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
          Distribusi
        </h3>
        <p class="mt-3 text-gray-800 dark:text-neutral-200 line-clamp-3">
          Platform manajemen rantai pasokan yang efisien untuk mengontrol persediaan, mempercepat pengiriman, dan meningkatkan kepuasan pelanggan melalui visibilitas dan otomatisasi operasional.
        </p>
        <p class="mt-5 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
          Info Produk
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/product" class="group relative flex flex-col w-full min-h-60 bg-[url('https://images.unsplash.com/photo-1649520208876-34e14eb5a5c5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDk0fHx8ZW58MHx8fHx8')] bg-center bg-cover rounded-xl hover:shadow-lg focus:outline-hidden focus:shadow-lg transition" href="#">
      <div class="flex-auto p-4 md:p-6">
        <h3 class="text-xl text-white/90 group-hover:text-white"><span class="font-bold">PT Tiga Inti Perkasa Tech</span> menyediakan berbagai software untuk kebutuhan bisnis anda.</h3>
      </div>
      <div class="pt-0 p-4 md:p-6">
        <div class="inline-flex items-center gap-2 text-sm font-medium text-white group-hover:text-white/70 group-focus:text-white/70">
          Lihat semua produk
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </div>
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->