<template>
    <div class="w-96 mx-auto">
        <Toast />
        <!--
        <div>
            <input v-model="email" type="email" placeholder="email" class="w-96 p-1 mb-2 border border-inherit rounded-lg">
        </div>
        <div>
            <input v-model="password" type="password" placeholder="password" class="w-96 p-1 mb-2 border border-inherit rounded-lg">
        </div>
        <div>
            <input @click.prevent="login" type="submit" value="login" class="block float-right mx-auto w-32 p-1 bg-sky-400 text-white rounded-lg">
        </div>

        <Button label="Submit" />
        -->


        <div class="flex justify-content-center pt-8">
            <form style=" display: flex; flex-direction: column; align-items: center;">
                <div class="w-8 mb-6">
                    <img src="../../img/novomet-logo.png">
                    <span class="block text-600 font-medium text-base">Программа анализа надежности "Novomet DIFA"</span>
                </div>
                <div class="card">
                    <span class="p-float-label mb-5">
                        <InputText id="login" type="text" v-model="email" class="w-25rem" :class="{ 'p-invalid': errorLogin }"/>
                        <label for="username">Логин</label>
                    </span>
                    <span class="p-float-label">
                        <InputText  id="password" type="password" v-model="password" class="w-25rem" :class="{ 'p-invalid': errorPassword }"/>
                        <label for="username">Пароль</label>
                    </span>
                </div>
                <Button label="Войти" @click.prevent="login" type="submit" class="w-15rem"/>
            </form>
        </div>
    </div>
</template>

<script>
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import LogoImg from '../../img/novomet-logo.png';
import Toast from 'primevue/toast';
import { useToast } from "primevue/usetoast";


export default {
    name: "Login",
    components: { InputText, Button, Toast },

    data() {
        return {
            email: null,
            password: null,
            errorLogin: false,
            errorPassword: false,
            toast: useToast(),
        }
    },

    methods: {
        login(value) {
            const inputLogin = document.getElementById('login');
            if(inputLogin.value === '') {
                this.errorLogin = true;
            }
            const inputPassword = document.getElementById('password');
            if(inputPassword.value === '') {
                this.errorPassword = true;
            }
            if(inputLogin.value === '' || inputPassword.value === ''){
                this.toast.add({ severity: 'error', summary: 'Вход в систему', detail: 'Не все поля заполнены', life: 5000 });
                return;
            }

            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                    axios.post('/login', {email: this.email, password: this.password})
                        .then(r => {
                            localStorage.setItem('x_xsrf_token', r.config.headers['X-XSRF-TOKEN'])
                            //this.$router.push({name: 'user.personal'})
                            this.$router.push({name: 'layout'})
                        })
                        .catch(err => {
                            //console.log('Пользователь с таким логином и паролем не найден');
                            this.toast.add({ severity: 'error', summary: 'Вход в систему', detail: 'Пользователь с таким логином и паролем не найден', life: 5000 });
                            // this.errorPassword = true;
                            // this.errorLogin = true;
                        })
                })
        }
    },

    watch: {
        email() {
            this.errorLogin = false;
        },
        password() {
            this.errorPassword = false;
        }
    }
}
</script>

<style scoped>

</style>
