<script setup lang="ts">
  import { Link } from '@inertiajs/vue3';

  defineProps({
    // 'message' is being sent as a prop from IndexController::index
    message: { type: String, required: false}
  })
</script>

<!-- 
 - This script is for Inertia's Persistent Layout 
 - It will automatically use the <slot>, don't need to use <MLayout> in template
-->
<script lang="ts">
import MLayout from '@/Layouts/MLayout.vue';
export default {
  layout: MLayout
}
</script>

<template>
  <div>Index page</div>
  <Link href="/hello">Show Page</Link>
  <p>{{ message }}</p>
</template>