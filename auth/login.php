<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: /index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Document</title>
</head>


<body class="bg-gradient-to-r from-green-600 to-gray-800 font-sans text-gray-700">
    <div class="container mt-32 mx-auto p-8 flex items-center">
        <div class="max-w-md w-full mx-auto">
            <div class="container flex flex-col justify-center items-center">
                <h1 class="text-4xl text-center mb-12 font-bold text-white">Login</h1>
            </div>

            <div class="container flex justify-center">
                <div class="w-fit flex items-center justify-center">
                    <div class="w-96 h-72 flex justify-center flex-col bg-white rounded-s-lg overflow-hidden shadow-2xl">
                        <div class="p-8">
                            <h3 class="mb-5 text-gray-400">Sign In<span class="text-red-800">*</span></h3>
                            <form method="POST" action="../utils/auth.php">
                                <div class="mb-5">
                                    <input placeholder="Username" type="text" name="username" class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                                </div>

                                <div class="mb-5">
                                    <input placeholder="*********" type="password" name="password" class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                                </div>

                                <button type="submit" name="login" class="w-full p-3 mt-4 rounded-lg text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login</button>
                            </form>
                        </div>

                        <?php
                        if (isset($_GET['notification'])) {
                            echo $_GET['notification'];
                        }
                        ?>
                    </div>

                    <div class="w-96 h-72 flex justify-center flex-col bg-gradient-to-l from-green-800 to-green-600 rounded-e-lg text-white overflow-hidden shadow-2xl">
                        <div class="p-8 flex justify-center items-center flex-col">
                            <h1 class="font-bold text-xl">Welcome To Helathcare</h1>
                            <p class="text-center">Jika kamu ingin membuat laporan keluhan Login terlebih dahu👌</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>