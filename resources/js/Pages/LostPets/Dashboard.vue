<!-- 
    - This page should eventually display all lost pets in the user's area
    - For now, display all lost pets
 -->

<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
	lostPets: Object,
})

</script>

<template>
  <Head title="Dashboard" />

	<AuthenticatedLayout>
		<div class="flex justify-center flex-wrap py-16">
			<div v-for="lostPet in lostPets" class="card w-80 h-80 bg-base-100 shadow-xl m-4">
				<!-- dm: Linking to LostPetController::show -->
				<!-- TODO: 	Image is outside of the Link, have to find a way to make it work -->
				<figure><img src="/images/orange_cat.jpg" alt="Pet Image" /></figure>
				<Link :href="`/lost-pets/${lostPet.id}`">
					<div class="card-body h-1/2">
						<h2 class="card-title">{{ lostPet.name }}</h2>
						<p>If a dog chews shoes whose shoes does he choose?</p>
					</div>
				</Link>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
