<script setup lang="ts">
// @ts-ignore
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
  foundPets: Object,
})

</script>
 
<template>
  <Head title="Found Pets" />

  <AuthenticatedLayout>
    <div class="flex justify-center flex-wrap py-16">
      <div v-for="foundPet in props.foundPets" class="card w-80 h-80 bg-base-100 shadow-xl m-4">
        <!-- TODO: 	Image is outside of the Link, have to find a way to make it work -->
        <figure><img src="/images/orange_cat.jpg" alt="Pet Image" /></figure>
        <Link :href="`/found-pets/${foundPet.id}`">
          <div class="card-body h-1/2">
            <h2 class="card-title">{{ foundPet.name }}</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
          </div>
        </Link>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
 