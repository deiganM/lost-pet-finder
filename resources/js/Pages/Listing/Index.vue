<script setup lang="ts">
  import { Link } from '@inertiajs/vue3'
  import ListingAddress from '../../Components/ListingAddress.vue'

  defineProps({
    listings: Object
  })
</script>

<!-- Common Layout section -->
<script lang="ts">
// import MLayout from '@/Layouts/MLayout.vue';
import MLayout from '../../Layouts/MLayout.vue'
export default {
  layout: MLayout
}
</script>

<template>
  <div v-for="listing in listings" :key="listing.id">
    <!-- Each link is a link to it's own 'show' page -->
    <Link
      :href="`/listing/${listing.id}`"
    >
      <!-- Passing the second listing (parent) into child as second 'listing' -->
      <ListingAddress :listing="listing"/>
    </Link>
  </div>
</template>