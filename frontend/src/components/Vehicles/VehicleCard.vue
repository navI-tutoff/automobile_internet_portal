<script setup>
import { useRoute } from 'vue-router';
import { ref } from 'vue';
import axios from 'axios';

defineProps({
    vehicle: {}
})

const id = useRoute().params.id

const deleteVeh = (event) => {
    axios.delete('auto/' + id)
        .then((response) => {
            alert(response.data.message)
        })
        .catch((response) => {
            alert("Error\n" + response)
        })
}
</script>

<template>
    <div class="advertise-block">
        <div>
            <div><h1>⭐ Продажа {{ vehicle.name }} {{ vehicle.year }} в г.{{ vehicle.selling_city }}</h1></div>
            <div class="row">
                <div class="ads-photos">
                    <img v-bind:src=vehicle.photo>
                </div>

                <div class="ads-info">
                    <div class="ads-price">{{ vehicle.price }} ₽</div>

                    <section>
                        <div class="row">
                            <div class="car-param-description">Двигатель</div>
                            <div class="param-value">{{ vehicle.engine }}</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Мощность</div>
                            <div class="param-value">{{ vehicle.power }}</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Коробка передач</div>
                            <div class="param-value">{{ vehicle.gearbox }}</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Привод</div>
                            <div class="param-value">{{ vehicle.drive }}</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Цвет</div>
                            <div class="param-value">{{ vehicle.color }}</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Пробег</div>
                            <div class="param-value">{{ vehicle.mileage }} км</div>
                        </div>
                        <div class="row">
                            <div class="car-param-description">Руль</div>
                            <div class="param-value">{{ vehicle.wheel }}</div>
                        </div>
                    </section>
                    
                    <section class="selling-info">
                        <div>{{ vehicle.seller_nick }}</div>
                        <div>{{ vehicle.selling_city }}</div>
                        <div>{{ vehicle.selling_date }}</div>
                        <div>{{ vehicle.seller_phone }}</div>
                    </section>

                    <button class="delete-button" @click="deleteVeh">Удалить</button>
                </div>
            </div>
        </div>
    </div>
</template>