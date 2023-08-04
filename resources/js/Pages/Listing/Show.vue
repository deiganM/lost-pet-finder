<script setup lang="ts">
  defineProps({
    listing: Object
  })
</script>

<script lang="ts">
import MLayout from '../../Layouts/MLayout.vue'
import ListingAddress from '../../Components/ListingAddress.vue'
export default {
  layout: MLayout
}
</script>

<!-- 
  "listing" will be the single item clicked on from the last page, 
  I believe this is due to Route Model Binding in ListingController::show?
-->
<template>
  <div>
    <ListingAddress :listing="listing"/>
  </div>
</template>
