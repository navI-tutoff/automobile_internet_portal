<script setup lang="ts">
import '@/assets/css/vehicle_card.css'
import VehicleCard from '@/components/vehicles/VehicleCard.vue';
import axios from "axios"
import {ref} from "vue"
import { useRoute } from 'vue-router';

const id = useRoute().params.id
const vehicle = ref({})

axios.get('auto/' + id)
    .then((response) => vehicle.value = response.data)


</script>
<template>
    <main>
        <div class="window-restrict">
            <VehicleCard :vehicle="vehicle"/>
        </div>
    </main> 
</template>