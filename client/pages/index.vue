<template>
  <div class="container">
    <PostListItem v-for="post in state.postsData.posts.data" :post="post" />
  </div>
</template>

<script setup lang="ts">
import PostListItem from '@/components/posts/PostListItem.vue';

const { data } = await useAsyncGql({
  operation: 'posts',
  variables: {
    limit: 5,
  },
});

const state = reactive({
  postsData: data.value,
});
</script>
