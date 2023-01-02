<template>
    <div>
        <h1>{{ post.title }}</h1>
        <h2>{{ post.subtitle }}</h2>
        <div v-html="post.content"></div>

    </div>
</template>
<script setup>

defineProps({
    post: Object
});



</script>
<style>
h1,
h2 {
    font-weight: bolder;
}

h2 {}
</style>
