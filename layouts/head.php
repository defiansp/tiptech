<?php
$base_url = '/tiptech';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/logo-yellow.svg">

    <title><?php echo isset($title) ? $title : "XFOCUS"; ?></title>

    <!-- CSS -->
    <link href="css/output.css" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ec706e8b15.js" crossorigin="anonymous"></script>

    <!-- Script Dark Mode -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body class="font-sans antialiased bg-white dark:bg-neutral-800 scroll-smooth">

    <!-- Loading Screen -->
    <div id="loading"
        class="fixed inset-0 bg-primary dark:bg-neutral-800 flex items-center justify-center z-50 opacity-100 scale-100
            transition-all duration-500 ease-in-out will-change-opacity will-change-transform">
        <div class="wave-container">
            <h1 class="wave-text text-7xl font-extrabold text-white">
                <span>t</span><span>i</span><span>p</span><span>t</span><span>e</span><span>c</span><span>h</span>
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <div id="content" class="opacity-0 transition-opacity duration-300 delay-300">

        <!-- Navbar -->
        <?php include 'layouts/navbar.php'; ?>

        <!-- Content -->
        <main>
            <?= $content ?? '' ?>
        </main>

        <!-- Footer -->
        <?php include 'layouts/footer.php'; ?>

    </div>

    <!-- Script -->
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="js/loading.js"></script>
    <script src="js/theme.js"></script>


</body>

</html>