<template>
  <main class="min-h-[100vh]">
    <div class="max-w-[1200px] container mx-auto pt-[100px] p-5">
      <h2 class="text-3xl">ブログ記事詳細ページ</h2>
      <div v-if="post" class="p-6 mt-10 shadow rounded">
        <h2 class="text-3xl mb-5">{{ post.title.rendered }}</h2>
        <time class="mb-5 block">{{ formatDate(post.date) }} </time>
        <div><img v-if="post.thumbnail_url" :src="post.thumbnail_url" :alt="post.title.rendered" class="w-full h-auto"></div>
        <div v-html="post.content.rendered" class="mt-4"></div>
      </div>
    </div>
  </main>
</template>

<script setup lang="ts">
import { useRuntimeConfig, useFetch, useRoute } from '#app';
import type { Wpdata } from '@/types/wpdata';
const config = useRuntimeConfig();
const apiUrl = config.public.API_BASE_URL;

const id: number = Number(useRoute().params.id);

const { data: post } = await useFetch<Wpdata[]>(
  `${apiUrl}/${id}`
);

const formatDate = (dateString: Date) => {
  const date = new Date(dateString);
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const day = String(date.getDate()).padStart(2, '0');

  return `${year}.${month}.${day}`;
};
</script>