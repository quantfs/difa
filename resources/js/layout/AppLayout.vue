<template>
    <div class="layout-wrapper">
        <app-topbar></app-topbar>
        <div class="layout-main-container px-0 main">
            <router-view></router-view>
<!--            <MainPage />-->
            <form>
<!--                <Button type="submit" :class="{ 'invisible': invisible }" label="Классификатор отказов" severity="Primary" text raised class="w-15rem h-6rem" @click.prevent="onClassifier"/>-->
            </form>


            <div class="layout-main">
<!--                <router-view></router-view>-->
<!--                <MainPage />-->
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
import AppTopbar from '../layout/AppTopbar.vue';
import MainPage from '@/pages/MainPage.vue';
import AppFooter from './AppFooter.vue';
import Button from 'primevue/button';
export default {
    data() {
        return {
            invisible: false,
        }
    },
    components: { AppTopbar, MainPage, AppFooter, Button },
    methods: {
        onClassifier() {
            this.invisible = true;
            console.log('onClassifier');
            this.$router.push({name: 'layout'})
        }
    }
}
</script>

<style scoped>
.main {
    padding: 7rem;
    //color: red;
}
.classifier {
    display: inline-block;
    padding: 10px;
    font-size: 20px;
    font-weight: 700;
    cursor: pointer;
}
.invisible {
    display: none;
}
</style>
