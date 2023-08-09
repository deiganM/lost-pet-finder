<script setup lang="ts">
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';

  const props = defineProps({
    lostPet: Object
  })
</script>

<template>
  <Head title="Pet Profile" />

  <AuthenticatedLayout> 
    <div>
      <main v-if="props.lostPet">
        <h1 class="text-center text-2xl p-6">{{ props.lostPet.name }}</h1>
        <div class="flex justify-center flex-wrap pb-16">
          <div v-if="lostPet" class="card rounded-none w-80 h-80 m-4">
            <figure><img src="/images/orange_cat.jpg" alt="Pet Image" /></figure>
          </div>
        </div>

        <!-- TODO: This may be better as a grid -->
        <div class="flex justify-center">
          <ul class="flex justify-between flex-wrap max-w-lg">
            <li class="m-6">Species: {{ props.lostPet.species }}</li>
            <li class="m-6">Sex: {{ props.lostPet.sex }}</li>
            <li class="m-6">age: {{ props.lostPet.age }}</li>
            <li class="m-6">Description: {{ props.lostPet.physical_description }}</li>
            <li class="m-6">Message: {{ props.lostPet.message }}</li>
            <li class="m-6">Date Last Seen: {{ props.lostPet.last_seen_date }}</li>
            <li class="m-6">Last Known Location: {{ props.lostPet.last_known_location }}</li>
          </ul>
        </div>
      </main>

    </div>
  </AuthenticatedLayout>
</template>
