<?php

use Framework\Session;
?>

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">

        <div class="flex items-center gap-4">
            <h1 class="text-3xl font-semibold m-0 p-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <span class="leading-none">JobSeek</span>
                </a>
            </h1>

            <?php if (Session::has('user')) : ?>
                <div class="text-sm border-l border-gray-400 pl-4 h-5 flex items-center font-medium opacity-90 leading-none">
                    Welcome, <?= Session::get('user')['name'] ?? '' ?>!
                </div>
            <?php endif; ?>
        </div>

        <nav class="space-x-4">
            <?php if (Session::has('user')) : ?>
                <div class="flex items-center gap-4">
                    <form method="POST" action="/auth/logout" class="m-0">
                        <button type="submit" class="text-white inline hover:underline focus:outline-none">Logout</button>
                    </form>
                    <a href="/listings/create"
                        class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300 flex items-center gap-2">
                        <i class="fa fa-edit"></i>
                        <span>Post a Job</span>
                    </a>
                </div>
            <?php else : ?>
                <a href="/auth/login" class="text-white hover:underline">Login</a>
                <a href="/auth/register" class="text-white hover:underline">Register</a>
            <?php endif; ?>
        </nav>
    </div>
</header>