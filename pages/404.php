<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="image/logo-blue.png">
    <title>404</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


    <!-- Styles / Scripts -->
    <?php if ($_SERVER['SERVER_NAME'] === 'localhost'): ?>
        <!-- Saat development -->
        <link rel="stylesheet" href="http://localhost:5173/css/app.css">
    <?php else: ?>
        <!-- Saat production -->
        <link rel="stylesheet" href="/dist/assets/app.css">
    <?php endif; ?>

</head>

<body class="font-sans bg-white flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">


    <div class="max-w-3xl flex flex-col mx-auto size-full">
        <header class="mb-auto flex justify-center z-50 w-full py-4">
            <nav class="px-4 sm:px-6 lg:px-8">
                <a href="https://tigaintiperkasa.co.id/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="h-8 hidden dark:block text-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
                    </svg>
                    <img src="image/logo-blue.png" class="h-8 dark:hidden rounded-full" alt="tiptech Logo">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-primary dark:text-white">tiptech</span>
                </a>
            </nav>
        </header>

        <main id="content">
            <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                <h1 class="block text-7xl font-bold text-gray-800 sm:text-9xl dark:text-white">404</h1>
                <p class="mt-3 text-gray-600 dark:text-neutral-400">Oops, something went wrong.</p>
                <p class="text-gray-600 dark:text-neutral-400">Sorry, we couldn't find your page.</p>
                <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                    <a class="w-full sm:w-auto py-3 ps-4 pe-5 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-primary text-white hover:bg-neutral-700" href="index.php">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Back to homepage
                    </a>
                </div>
            </div>
        </main>

        <footer class="mt-auto text-center py-5">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-sm text-gray-500 dark:text-neutral-500">© All Rights Reserved. 2025.</p>
            </div>
        </footer>
    </div>

</body>

</html>