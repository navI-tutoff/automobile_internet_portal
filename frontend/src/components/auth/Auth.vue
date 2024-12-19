<script setup>
import { useRoute } from 'vue-router';
import { ref } from 'vue';
import axios from 'axios';

const statusInfo = ref('')
const statusBlock = ref(null)

const route_path = useRoute().path;

const auth = (event) => {
    const request_url = route_path === '/reg' ? 'reg' : 'login'

    const formData = new FormData(event.target)

    if (request_url === 'reg') {
        axios.post('reg', {
                login: formData.get('login'),
                password: formData.get('password')
            })
            .then((response) => {
                statusInfo.value = 'Вы успешно зарегистрировались'
                statusBlock.value.classList.remove('hidden')
            })
            .catch((response) => {
                alert("Error\n" + response)
            })
    } else {
        axios.post('login', {
            login: formData.get('login'),
            password: formData.get('password')
            })
            .then((response) => {
                if (response.data["status"] === 'success') {
                    statusInfo.value = 'Вы успешно авторизовались'
                } else {
                    statusInfo.value = 'error'
                }
                statusBlock.value.classList.remove('hidden')
            })
            .catch((response) => {
                alert("Error\n" + response)
            })
    }    
}

</script>

<template>
    <div class="auth-window">
        <div class="auth-text">{{ route_path === '/reg' ? 'Регистрация' : 'Авторизация' }}</div>

        <form class="auth-form" @submit.prevent="auth">
            <div ref="statusBlock" class="status-info hidden">{{ statusInfo }}</div>
            <div class="auth-input">
                <input name="login" type="text" placeholder="Логин">
            </div>
            <div class="auth-input">
                <input name="password" type="password" placeholder="Пароль">
            </div>
            <br/>
            <div class="auth-input">
                <button class="btn-login">{{ route_path === '/reg' ? 'Зарегистрироваться' : 'Войти' }}</button>
            </div>
        </form>
        <router-link :to="route_path === '/reg' ? '/login' : '/reg'" class="router-link">
            <div class="auth-ask-status">{{ route_path === '/reg' ? 'Уже зарегистрированы?' : 'Зарегистрироваться' }}</div>
        </router-link>
    </div>
</template>

<style>
    .status-info {
        color: rgb(0, 0, 0);
        font-size: 17px;
        text-align: center;
        padding: 7px 7px;
        background-color: rgb(183, 255, 183);
        border-radius: 5px;
        margin: 15px;
    }

    .hidden {
        display: none;
    }
</style>