<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
    <div class="border border-gray-200 shadow bg-white rounded-lg h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full border rounded-lg shadow bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="font-normal text-gray-300 text-xl">
                Laporan masuk
            </p>
        </a>
    </div>
    <div class="border rounded-lg shadow border-gray-200 bg-white h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full border rounded-lg shadow bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_solved[0]['status'] ?>

            </h5>
            <p class="font-normal text-gray-300 text-xl">
                Laporan Selesai
            </p>
        </a>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
</div>
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4 mb-4">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div>
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div>