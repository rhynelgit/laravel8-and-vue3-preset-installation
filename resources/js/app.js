import { createApp } from 'vue'
import Main from './Main'
import store from './store'
import router from './router'

const app = createApp(Main)

app.use(store)
app.use(router)
app.mount("#app")