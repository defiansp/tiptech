<?php
$currentScript = basename($_SERVER['SCRIPT_NAME']);
$currentPage = ($currentScript === 'index.php') ? ($_GET['page'] ?? 'home') : '';
?>

<nav class="bg-white dark:bg-neutral-800 sticky w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?= $base_url ?>/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <svg class="h-8 hidden dark:block text-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
            </svg>
            <img src="<?= $base_url ?>/image/logo-blue.png" class="h-8 dark:hidden rounded-full" alt="tiptech Logo">
            <span class="self-center text-2xl font-bold whitespace-nowrap text-primary dark:text-white">tiptech</span>
        </a>
        <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
            <button data-tooltip-target="tooltip" id="theme-toggle" type="button" class="cursor-pointer inline-block text-primary hover:text-gray-600 dark:text-secondary dark:hover:text-neutral-600">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-normal border-gray-100 shadow text-gray-700 bg-white rounded-lg opacity-0 tooltip dark:bg-gray-700 dark:text-white">
                <span class="text-green-600"><i class="fa-solid fa-circle-info"></i></span>&nbsp; Click for a surprise
            </div>
            <button onclick="window.open('https://wa.me/6287737416923?text=Halo,%20saya%20tertarik%20dengan%20produk%20Anda.', '_blank')" type="button" class="hidden sm:block text-white bg-primary hover:bg-secondary font-semibold rounded-full text-sm px-6 py-2 text-center dark:bg-secondary dark:text-neutral-800 dark:hover:text-white dark:hover:bg-neutral-700 dark:focus:ring-neutral-800 cursor-pointer">Coba Sekarang</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-4 lg:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-neutral-700 md:dark:bg-neutral-800 dark:border-gray-700">
                <li>
                    <a href="<?= $base_url ?>/index.php" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 <?php echo ($currentPage === 'home' ? 'text-white bg-primary dark:bg-neutral-600 md:text-secondary md:dark:text-secondary md:dark:bg-transparent' : 'text-gray-900 dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:dark:hover:text-secondary md:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-white'); ?>" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="<?= $base_url ?>/index.php?page=product" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 <?php echo ($currentPage === 'product' ? 'text-white bg-primary dark:bg-neutral-600 md:text-secondary md:dark:text-secondary md:dark:bg-transparent' : 'text-gray-900 dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:dark:hover:text-secondary md:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-white'); ?>">Product</a>
                </li>
                <li>
                    <a href="<?= $base_url ?>/index.php?page=pricing" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 <?php echo ($currentPage === 'pricing' ? 'text-white bg-primary dark:bg-neutral-600 md:text-secondary md:dark:text-secondary md:dark:bg-transparent' : 'text-gray-900 dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:dark:hover:text-secondary md:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-white'); ?>">Pricing</a>
                </li>
                <li>
                    <a href="<?= $base_url ?>/index.php?page=contact" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 <?php echo ($currentPage === 'contact' ? 'text-white bg-primary dark:bg-neutral-600 md:text-secondary md:dark:text-secondary md:dark:bg-transparent' : 'text-gray-900 dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:dark:hover:text-secondary md:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-white'); ?>">Contact</a>
                </li>
                <li>
                    <a href="<?= $base_url ?>/index.php?page=about" class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 <?php echo ($currentPage === 'about' ? 'text-white bg-primary dark:bg-neutral-600 md:text-secondary md:dark:text-secondary md:dark:bg-transparent' : 'text-gray-900 dark:text-white hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary md:dark:hover:text-secondary md:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-white'); ?>">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>