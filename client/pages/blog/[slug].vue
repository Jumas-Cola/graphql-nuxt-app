<template>
  <div class="container">
    <article class="blog-post">
      <h2 class="display-5 link-body-emphasis mb-1">
        {{ state.post.title }}
      </h2>
      <p class="blog-post-meta">{{ state.post.created_at }}</p>

      <p v-html="state.post.content"></p>
    </article>
  </div>
</template>

<script setup lang="ts">
const { data } = await useAsyncGql({
  operation: 'post',
  variables: {
    slug: useRoute().params.slug,
  },
});

const state = reactive({
  post: data.value.post,
});

console.log(state.post);
</script>
