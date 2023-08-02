<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";

defineProps<{
		canLogin?: boolean;
		canRegister?: boolean;
}>();
</script>

<template>
	<Head title="Welcome" />

	<main class="bg-[#D7F9FF] h-screen flex items-center justify-center">
		<div class="card w-96 bg-[#F37925] text-primary-content">
			<div class="card-body">
				<h2 class="card-title justify-center">Lost Pet Finder</h2>
				<p class="flex justify-center mb-6">Please log in or register to continue</p>
				<div class="card-actions justify-center">
					<div
						v-if="canLogin"
					>
						<Link
							v-if="$page.props.auth.user"
							:href="route('dashboard')"
							class="btn"
							>Dashboard</Link
						>
						<template v-else>
							<Link
								:href="route('login')"
								class="btn mx-2"
							>
								Log in
							</Link>

							<Link
								v-if="canRegister"
								:href="route('register')"
								class="btn mx-2"
								>
									Register
								</Link>
						</template>
					</div>
					<!-- <button class="btn">Login</button>
					<button class="btn">Register</button> -->
				</div>
			</div>
		</div>
	</main>
</template>

<style>
	.header-height {
		height: 25vh;
	}

	.main-height {
		height: 70vh;
	}
</style>
