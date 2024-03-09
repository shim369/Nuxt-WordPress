<template>
  <div class="container mx-auto pt-[100px]">
    <h2>New Posts</h2>
    <ul class="mt-2">
      <li v-for="post in data">
        <NuxtLink :to="`/posts/${post.id}`">{{ post.title.rendered }}</NuxtLink>
      </li>
    </ul>
    <NuxtLink class="btn" to="/posts/">記事一覧へ</NuxtLink>
  </div>
</template>
  
<script setup>
  const perPage = 3;
  
  const { data } = await useFetch(
    `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
  );
</script>  