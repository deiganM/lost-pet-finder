<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
	<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#D7F9FF]">
		<div>
			<Link href="/">
					<ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
			</Link>
		</div>

		<div class="card w-96 bg-[#F37925] text-primary-content">
			<div class="card-body">
				<slot />
			</div>
		</div>
	</div>
</template>
