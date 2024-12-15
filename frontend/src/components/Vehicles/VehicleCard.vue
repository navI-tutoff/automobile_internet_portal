<script setup>
defineProps({
    vehicle: {}
})
</script>

<template>
    <div class="advertise-block">
        <div>
            <div><h1>⭐ Продажа {{ vehicle.name }} {{ vehicle.year }} в г.{{ vehicle.city }}</h1></div>
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
                </div>
            </div>
        </div>
    </div>
</template>