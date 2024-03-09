<template>
  ブログ記事詳細ページ
  <div v-if="post">
    <h2>{{ post.title.rendered }}</h2>
    <div v-html="post.content.rendered"></div>
  </div>
</template>

<script setup>

const id = Number(useRoute().params.id);

const { data: post } = useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts/${id}`
);
</script>