<script setup lang="ts">
import VehicleCard from '@/components/Vehicles/VehicleCard.vue';

const vehicle = {
        name: "Tesla Model S",
        year: 2022,
        city: "Строитель",
        photo: "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/2021_Tesla_Model_S_P2_Long_Range_front_right_view.jpg/1200px-2021_Tesla_Model_S_P2_Long_Range_front_right_view.jpg",
        price: 4000000,
        engine: "электро, 100 kWh",
        power: "765 л.с.",
        gearbox: "автомат",
        drive: "полный",
        color: "белый",
        mileage: 24000,
        wheel: "левый"
    }


</script>

<template>
    <main>
        <div class="window-restrict">
            <VehicleCard :vehicle="vehicle"/>
        </div>
    </main> 
</template>