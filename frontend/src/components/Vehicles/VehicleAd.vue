<script setup>
defineProps({
    vehicle: {}
})
</script>

<template>
    <div>
        <div class="selling_car row">
            <div class="car-photo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAVwklhrhjLGI7vfdvEhGoCCzIJv4ofT9KTw&s"></div>
            <div class="car-selling-info row">
                <div class="car-description">
                    <div class="car-name">{{ vehicle.name }}</div>
                    <div class="car-equipment">{{ vehicle.equipment }}</div>    
                    <div class="car-characteristics">{{ vehicle.characteristics }}</div>
                </div>
                <div>
                    <div class="car-price">{{ vehicle.price }} ₽</div>
                    <div class="car-pre-rating">{{ vehicle.pre_rating }}</div>
                    <section class="car-seller-info">
                        <div class="seller-nick">{{ vehicle.seller_nick }}</div>
                        <div class="seller-city">{{ vehicle.seller_city }}</div>
                        <div class="sell-date">{{ vehicle.sell_date }}</div>
                    </section>
                </div>
            </div>
        </div>
        <div class="separating-line"></div>
    </div>
</template>