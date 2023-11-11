<template>
  <div class="container">
    <PostListItem v-for="post in state.postsData.posts.data" :post="post" />
    <PostPagination :paginator-info="state.postsData.posts.paginatorInfo" />
  </div>
</template>

<script setup lang="ts">
import PostListItem from '@/components/posts/PostListItem.vue';
import PostPagination from '@/components/posts/PostPagination.vue';

const { data } = await useAsyncGql({
  operation: 'posts',
});

const state = reactive({
  postsData: data.value,
});
</script>
