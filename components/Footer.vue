<template>
<footer class="w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2024 Nuxt WordPress
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <NuxtLink to="/" class="hover:underline me-4 md:me-6">Home</NuxtLink>
        </li>
        <li>
            <NuxtLink to="/posts/" class="hover:underline me-4 md:me-6">Blog</NuxtLink>
        </li>
    </ul>
</footer>
</template>