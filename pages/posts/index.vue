<template>
  <div class="container mx-auto pt-[100px]">
  <h2>ブログ一覧ページ</h2>
  <ul class="mt-5">
    <li v-for="post in data" class="mt-3">
      <h2>{{ post.title.rendered }}</h2>
      <div v-html="post.content.rendered" class="mt-3"></div>
      <NuxtLink :to="`/posts/${post.id}`">記事詳細へ</NuxtLink>
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
