<script setup lang="ts">
// @ts-ignore
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
// To help submit the form
import { useForm } from '@inertiajs/vue3';
// Variable holding the form data
// Like ref(), but reactive is used for objects
// These items will all remain reactive, unless you redeclare it
const form: any = useForm({
  name: '',
  species: '',
  sex: '',
  // physical_description: '',
  message: '',
  // last_seen_date: '',
  // last_known_location: '',
  age: ''
})

const create = () => form.post('/found-pets')

// const form: LostPetForm = useForm({
//   name: '',
//   species: '',
//   sex: '',
//   physicalDescription: '',
//   message: '',
//   lastSeenDate: '',
//   lastKnownLocation: ''
// })


interface FoundPetForm {
  name: string,
  species: string,
  sex: string,
  physical_description: string,
  message: string,
  last_seen_date: string,
  last_known_location: string
  age: string|number
}
</script>

<template>
  <AuthenticatedLayout>

    <form @submit.prevent="create">
      <div>
        <div>
          <label>Name of Pet</label>
          <input
            type="text" 
            v-model.trim="form.name"
          />
        </div>

        <div>
          <label>Age of Pet</label>
          <input
            type="text" 
            v-model.trim="form.age"
          />
        </div>
  
        <div>
          <label>Species</label>
          <input 
            type="text" 
            v-model.trim="form.species"  
          />
        </div>
  
        <div>
          <!-- TODO: Make into a checkbox -->
          <label>Sex</label>
          <input 
            type="text"
            v-model.trim="form.sex" 
          />
        </div>
  
        <div>
          <!-- TODO: Make into a text area -->
          <label>Physical Description</label>
          <input 
            type="text"
            v-model.trim="form.physicalDescription"  
          />
        </div>
        
        <div>
          <!-- TODO: Make into a text area -->
          <label>Message</label>
          <input 
            type="text"
            v-model.trim="form.message"  
          />
        </div>
  
        <div>
          <!-- TODO: Make into a date -->
          <label>Date Last Seen</label>
          <input 
            type="text"
            v-model.trim="form.lastSeenDate"  
          />
        </div>
  
        <div>
          <!-- TODO: Make into a text area -->
          <label>Last Known Location</label>
          <input
            type="text" 
            v-model.trim="form.lastKnownLocation"  
          />
        </div>
  
        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </form>
  </AuthenticatedLayout>
</template>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>