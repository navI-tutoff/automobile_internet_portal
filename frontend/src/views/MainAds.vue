<script setup lang="ts">
import VehicleAd from '@/components/vehicles/VehicleAd.vue';

const vehicles = [
    {
        id: 1,
        name: "Tesla Model S",
        photo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAVwklhrhjLGI7vfdvEhGoCCzIJv4ofT9KTw&s",
        equipment: "P100D kWh Performance",
        characteristics: "765 л.с., электро, АКПП, 4WD, 24 000 км",
        price: 5000000,
        pre_rating: "Нормальная цена",
        seller_nick: "Данил Rake",
        seller_city: "Строитель",
        sell_date: "6 часов назад"
    },
    {
        id: 1,
        name: "Tesla Model S",
        photo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAVwklhrhjLGI7vfdvEhGoCCzIJv4ofT9KTw&s",
        equipment: "P100D kWh Performance",
        characteristics: "765 л.с., электро, АКПП, 4WD, 24 000 км",
        price: 5000000,
        pre_rating: "Нормальная цена",
        seller_nick: "Данил Rake",
        seller_city: "Строитель",
        sell_date: "6 часов назад"
    },
    {
        id: 1,
        name: "Tesla Model S",
        photo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAVwklhrhjLGI7vfdvEhGoCCzIJv4ofT9KTw&s",
        equipment: "P100D kWh Performance",
        characteristics: "765 л.с., электро, АКПП, 4WD, 24 000 км",
        price: 5000000,
        pre_rating: "Нормальная цена",
        seller_nick: "Данил Rake",
        seller_city: "Строитель",
        sell_date: "6 часов назад"
    },
]

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
