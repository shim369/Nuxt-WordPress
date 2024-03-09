<template>
  <div class="container mx-auto pt-[100px] p-5">
    <h2 class="text-3xl">New Posts</h2>
    <div class="grid grid-cols-3 gap-4">
      <NuxtLink v-for="post in data" :to="`/posts/${post.id}`">
        <div class="p-4 border border-gray-200 rounded mt-5">
          {{ post.title.rendered }}
        </div>
      </NuxtLink>
    </div>
    <NuxtLink class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6 inline-block" to="/posts/">記事一覧へ</NuxtLink>
  </div>
</template>
  
<script setup>
  const perPage = 3;
  
  const { data } = await useFetch(
    `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
  );
</script>  