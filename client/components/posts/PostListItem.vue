<template>
  <article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">
      <NuxtLink :to="postLink"> {{ post.title }} </NuxtLink>
    </h2>
    <p class="blog-post-meta">{{ post.created_at }}</p>

    <p>
      This blog post shows a few different types of content that’s supported and
      styled with Bootstrap. Basic typography, lists, tables, images, code, and
      more are all supported as expected.
    </p>
  </article>
</template>

<script lang="ts" setup>
import { computed } from 'vue';

const props = defineProps({
  post: {
    type: Object,
  },
});

const postLink = computed(() => {
  return `/blog/${props.post.slug}`;
});
</script>
