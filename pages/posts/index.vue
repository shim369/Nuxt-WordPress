<template>
  <main class="min-h-[100vh]">
  <div class="max-w-[1200px] container mx-auto pt-[100px] p-5">
    <h2 class="text-3xl">ブログ一覧ページ</h2>
    <div class="flex gap-[5%] mt-10 flex-col sm:flex-row sm:flex-wrap">
      <NuxtLink v-for="post in posts" :to="`/posts/${post.id}`" class="w-full sm:w-[30%] shadow rounded hover:opacity-80 mb-10">
          <img v-if="post.thumbnail_url" :src="post.thumbnail_url" :alt="post.title.rendered">
          <div class="p-4">
            <p class="text-xl">{{ post.title.rendered }}</p>
            <time class="mt-2 block">{{ formatDate(post.date) }} </time>
          </div>
      </NuxtLink>
    </div>
  </div>
  </main>
</template>

<script setup lang="ts">
import { useRuntimeConfig, useFetch } from '#app';
import type { Wpdata } from '@/types/wpdata';
const perPage = 10;
const config = useRuntimeConfig();
const apiUrl = config.public.API_BASE_URL;

const { data:posts } = await useFetch<Wpdata[]>(
  `${apiUrl}?per_page=${perPage}&page=1`
);

const formatDate = (dateString: Date) => {
  const date = new Date(dateString);
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const day = String(date.getDate()).padStart(2, '0');

  return `${year}.${month}.${day}`;
};
</script>
