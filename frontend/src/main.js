import './assets/css/index.css'
import './assets/css/login.css'
import './assets/css/car-ad.css'
import './assets/css/auxiliary_selects.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
