<script setup>
const perPage = 10;

const { data } = await useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
);
</script>

<template>
  ブログ一覧ページ
  <ul>
  <li v-for="post in data">
    <h2>{{ post.title.rendered }}</h2>
    <p v-html="post.content.rendered"></p>
  </li>
</ul>
</template>