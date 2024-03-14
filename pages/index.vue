<script setup>
  const perPage = 3;
  
  const { data } = await useFetch(
    `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
  );
</script>
<template>
  <main class="min-h-[100vh]">
  <div class="max-w-[1200px] container mx-auto pt-[100px] p-5">
    <h2 class="text-3xl">New Posts</h2>
    <div class="flex flex-col sm:flex-row gap-5 mt-10">
      <NuxtLink v-for="post in data" :to="`/posts/${post.id}`" class="w-full sm:w-1/3 rounded mt-5 block shadow hover:opacity-80">
          <img v-if="post.thumbnail_url" :src="post.thumbnail_url" :alt="post.title.rendered">
          <div class="p-4">
            <p class="text-xl">{{ post.title.rendered }}</p>
            <time :datetime="post.date" class="mt-2 block">{{ $formatDate(post.date) }} </time>
          </div>
      </NuxtLink>
    </div>
    <NuxtLink class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6 inline-block" to="/posts/">記事一覧へ</NuxtLink>
  </div>
  </main>
</template>