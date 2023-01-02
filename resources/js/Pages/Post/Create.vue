<template>
  <div class="">

    <form @submit.prevent="submit">
      <div class="flex flex-col">

        <label for="title"> Título</label>
        <input v-model="form.title" type="text" name="title" id="title">
        <label for="subtitle"> Subtítulo</label>
        <input v-model="form.subtitle" type="text" name="title" id="title">
        <label for="content"> Título</label>
        <textarea v-model="form.content" name="content" id="content" cols="30" rows="10"></textarea>
        <button :disabled="form.processing" type="submit">Salvar</button>
      </div>
    </form>
  </div>
</template>

<script setup >
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'


defineProps({
  user: Object,
});


const form = reactive({
  title: null,
  subtitle: null,
  content: null,
})

async function submit () {
  await Inertia.post(route('post.store'), form, {
    onSuccess: (page) => {
      console.log("chegou a qui");
      console.log(page);
    }
  });

}




</script>
