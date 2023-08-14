<script setup lang="ts">
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';

  const props = defineProps({
    lostPet: Object
  })
</script>

<template>
  <Head title="Pet Profile" />

  <h1>FoundPet/Show</h1>
  <p>lostPet: {{ props.lostPet }}</p>
</template>
