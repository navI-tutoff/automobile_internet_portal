<script setup>
defineProps({
    vehicle: {}
})
</script>

<template>
    <div>
        <div>{{ vehicle }}</div>
        <router-link :to="{name: 'vehicle-card', params: {id: vehicle.id}}" class="router-link">
            <div class="selling_car row">
                <div class="car-photo"><img v-bind:src="vehicle.photo"></div>
                <div class="car-selling-info row">
                    <div class="car-description">
                        <div class="car-name">{{ vehicle.name }}</div>
                        <div class="car-equipment">{{ vehicle.equipment }}</div>    
                        <div class="car-characteristics">{{ vehicle.power }}, {{ vehicle.engine }}, 
                            {{ vehicle.gearbox }}, {{ vehicle.drive }}, {{ vehicle.mileage }} км
                        </div>
                    </div>
                    <div>
                        <div class="car-price">{{ vehicle.price }} ₽</div>
                        <div class="car-pre-rating">{{ vehicle.pre_rating }}</div>
                        <section class="car-seller-info">
                            <div class="seller-nick">{{ vehicle.seller_nick }}</div>
                            <div class="seller-city">{{ vehicle.selling_city }}</div>
                            <div class="sell-date">{{ vehicle.selling_date }}</div>
                        </section>
                    </div>
                </div>
            </div>
        </router-link>
        <div class="separating-line"></div>
    </div>
</template>