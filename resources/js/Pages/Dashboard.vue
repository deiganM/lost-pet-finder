<!-- 
    - This page should eventually display all lost pets in the user's area
    - For now, display all lost pets
 -->

<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
	lostPets: Object,
})
console.log(props.lostPets ? props.lostPets[0] : '')
</script>

<template>
    <Head title="Dashboard" />

		<!-- <Link
			v-if="$page.props.auth.user"
			:href="route('home')"
			class="btn"
		> -->

	<AuthenticatedLayout>
		<div class="flex justify-center flex-wrap py-16">
			<div v-for="item in props.lostPets" class="card w-80 h-80 bg-base-100 shadow-xl m-4">
				<figure><img src="/images/orange_cat.jpg" alt="Shoes" /></figure>
				<div class="card-body h-1/2">
					<h2 class="card-title">{{ item.name }}</h2>
					<p>If a dog chews shoes whose shoes does he choose?</p>
				</div>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
