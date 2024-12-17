<script setup lang="ts">
import '@/assets/css/index.css'
import VehicleAd from '@/components/vehicles/VehicleAd.vue';
import axios from "axios"
import {ref} from "vue"

const vehicles = ref([])

axios.get('auto')
    .then((response) => vehicles.value = response.data)

</script>

<template>
    <main>
        <div class="window-restrict">
            <h1>Продажа автомобилей</h1>

            <section class="ads-list" v-for="vehicle in vehicles">
                <VehicleAd :vehicle="vehicle"/>
            </section>
        </div>
    </main>
</template>
