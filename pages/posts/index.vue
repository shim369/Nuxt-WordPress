<script setup>
const perPage = 1;

const { data } = await useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
);

console.log(data)
</script>

<template>
  ブログ一覧ページ
</template>