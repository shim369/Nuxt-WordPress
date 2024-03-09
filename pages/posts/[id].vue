<template>
  <div class="container mx-auto pt-[100px]">
    <h1>ブログ記事詳細ページ</h1>
    <div v-if="post" class="mt-5">
      <h2>{{ post.title.rendered }}</h2>
      <div v-html="post.content.rendered"></div>
    </div>
  </div>
</template>

<script setup>

const id = Number(useRoute().params.id);

const { data: post } = useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts/${id}`
);
</script>