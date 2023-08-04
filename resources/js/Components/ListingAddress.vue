<script setup lang="ts">
defineProps({
    listing: Object
  })  
</script>

<template>
  <span v-if="listing">
    {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }} for ${{ listing.price }}
  </span>
</template>