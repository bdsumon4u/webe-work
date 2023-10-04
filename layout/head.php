<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotashTech</title>
    <link href="/assets/dst/tw.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- Page Container -->
    <div x-data="{ userDropdownOpen: false, mobileNavOpen: false }" id="page-container" class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-slate-50">
        <?php require_once 'inc/header.php' ?>

        <!-- Page Content -->
        <main id="page-content" class="flex flex-col flex-auto max-w-full">
            <?php require_once 'inc/heading.php' ?>

            <?php if (isset($_SESSION['success'])) : ?>
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 1500)" class="container p-4 mx-auto lg:p-8 xl:max-w-7xl">
                    <div class="px-5 py-4 font-bold text-white bg-blue-500 font-roboto-mono">
                        <?= $_SESSION['success'] ?>
                    </div>
                </div>
            <?php unset($_SESSION['success']); endif; ?>