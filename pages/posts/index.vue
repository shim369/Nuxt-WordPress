<template>
  <main class="min-h-[100vh]">
  <div class="max-w-[1200px] container mx-auto pt-[100px] p-5">
    <h2 class="text-3xl">ブログ一覧ページ</h2>
    <div class="flex flex-col sm:flex-row gap-5 mt-10">
      <NuxtLink v-for="post in data" :to="`/posts/${post.id}`" class="w-full sm:w-1/3 shadow rounded hover:opacity-80">
          <img v-if="post.thumbnail_url" :src="post.thumbnail_url" :alt="post.title.rendered">
          <div class="p-4">
            <p class="text-xl">{{ post.title.rendered }}</p>
            <time :datetime="post.date" class="mt-2 block">{{ $formatDate(post.date) }} </time>
          </div>
      </NuxtLink>
    </div>
  </div>
  </main>
</template>

<script setup>
const perPage = 10;

const { data } = await useFetch(
  `http://localhost/wp01/wp-json/wp/v2/posts?per_page=${perPage}&page=1`
);
</script>
