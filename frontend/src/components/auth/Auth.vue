<script setup>
import { useRoute } from 'vue-router';
import { ref } from 'vue';
import axios from 'axios';

const login = ref('')
const password = ref('')

const route_path = useRoute().path;

const auth = (event) => {
    axios.get('login', {login: login.value, password: password.value})
        .then((response) => {
            login.value = response.login;
            password.value = response.password;
        })
}

</script>

<template>
    <div class="auth-window">
        <div class="auth-text">{{ route_path === '/reg' ? 'Регистрация' : 'Авторизация' }}</div>

        <form class="auth-form" @submit="auth">
            </br>   
            <div class="auth-input">
                <input name="login" type="text" placeholder="Логин" v-model="login">
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