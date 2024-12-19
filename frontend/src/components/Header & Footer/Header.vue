<template>
    <header>
        <div class="window-restrict row vertical-center space-between">
            <div class="row vertical-center">
                <div class="drom">Дром</div>
            </div>

            <div>Белгородская область</div>

            <nav>
                <ul>
                    <li><router-link to="/auto" class="header-router-link">Автомобили</router-link></li>
                    <li><router-link to="/auto" class="header-router-link">Запчасти</router-link></li>
                </ul>
            </nav>

            <div><router-link to="/create_ad" class="header-router-link">Подать объявление</router-link></div>

            <div><router-link to="/login" class="header-router-link">Вход и регистрация</router-link></div>
        </div>
    </header>
</template>

<style>
    .header-router-link {
        text-decoration: none;
    }
</style>
