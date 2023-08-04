<script setup lang="ts">
  import { Head } from '@inertiajs/vue3';
  defineProps({
    lostPet: Object
  })
</script>

<template>
  <Head title="Dashboard" />
  Lost Pet:{{ lostPet }}
</template>