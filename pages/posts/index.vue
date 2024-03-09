<template>
  ブログ一覧ページ
  <ul>
    <li v-for="post in data" :key="post.id">
      <h2>{{ post.title.rendered }}</h2>
      <NuxtLink :to="`/posts/${post.slug}`">記事詳細へ</NuxtLink>
      <div v-html="post.content.rendered"></div>
    </li>
  </ul>
</template>

<script setup>
const perPage = 10;

const { data } = await useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
);
</script>
