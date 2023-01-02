<template>
    <div v-for="(post, index) in posts" :key="index">
        <Link :href="route('post.show', { id: post.id })" class="font-bold leading-tight text-2xl mt-0 mb-2">
        {{ post.title }}
        </Link>

    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    posts: Array
});



</script>
