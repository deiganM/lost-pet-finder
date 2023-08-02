<script setup lang="ts">
import {Link} from '@inertiajs/vue3'
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
  <!-- <MLayout> -->
    <div>Show page</div>
    <Link href="/">Show Home</Link>
  <!-- </MLayout> -->
</template>