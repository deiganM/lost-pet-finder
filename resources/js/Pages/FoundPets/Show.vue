<script setup lang="ts">
  // @ts-ignore 
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';

  const props = defineProps({
    foundPet: Object
  })
</script>

<template>
  <Head title="Found Pet Profile" />

  <AuthenticatedLayout> 
    <div>
      <main v-if="props.foundPet">
        <h1 class="text-center text-2xl p-6">{{ props.foundPet.name }}</h1>
        <div class="flex justify-center flex-wrap pb-16">
          <div v-if="foundPet" class="card rounded-none w-80 h-80 m-4">
            <figure><img src="/images/orange_cat.jpg" alt="Pet Image" /></figure>
          </div>
        </div>

        <!-- TODO: This may be better as a grid -->
        <div class="flex justify-center">
          <ul class="flex justify-between flex-wrap max-w-lg">
            <li class="m-6">Species: {{ props.foundPet.species }}</li>
            <li class="m-6">Sex: {{ props.foundPet.sex }}</li>
            <li class="m-6">age: {{ props.foundPet.age }}</li>
            <!-- <li class="m-6">Description: {{ props.foundPet.physical_description }}</li> -->
            <li class="m-6">Message: {{ props.foundPet.message }}</li>
            <!-- <li class="m-6">Date Last Seen: {{ props.foundPet.last_seen_date }}</li> -->
            <!-- <li class="m-6">Last Known Location: {{ props.foundPet.last_known_location }}</li> -->
          </ul>
        </div>
      </main>

    </div>
  </AuthenticatedLayout>
</template>
