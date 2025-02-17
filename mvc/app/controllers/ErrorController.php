<?php
// ../app/controllers/ErrorController.php
class ErrorController {
    public function notFound() {
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="' . BASE_URL . '/assets/img/logo.png" type="image/x-icon">
    <title>404 Not Found</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
        <p class="text-xl text-gray-600 mb-4">Oops! Page not found.</p>
        <a href="' . BASE_URL . '/" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Go Home</a>
    </div>
    <!-- Flowbite Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.js"></script>
</body>
</html>';
    }
}
?>
