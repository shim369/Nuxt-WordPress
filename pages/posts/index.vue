<template>
  <div class="container mx-auto pt-[100px]">
  <h2 class="text-3xl">ブログ一覧ページ</h2>
  <ul class="mt-5">
    <li v-for="post in data" class="mt-3">
      <h3 class="text-2xl">{{ post.title.rendered }}</h3>
      <NuxtLink :to="`/posts/${post.id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">記事詳細へ</NuxtLink>
    </li>
  </ul>
  </div>
</template>

<script setup>
const perPage = 10;

const { data } = await useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
);
</script>
