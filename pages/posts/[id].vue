<template>
  <div class="container mx-auto pt-[100px]">
    <h2 class="text-3xl">ブログ記事詳細ページ</h2>
    <div v-if="post" class="mt-5">
      <h2 class="text-3xl">{{ post.title.rendered }}</h2>
      <div v-html="post.content.rendered" class="mt-4"></div>
    </div>
  </div>
</template>

<script setup>

const id = Number(useRoute().params.id);

const { data: post } = useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts/${id}`
);
</script>