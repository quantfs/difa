import { createRouter, createWebHistory } from 'vue-router';
import LoginPage from '@/pages/user/LoginPage.vue';
import RegistrationPage from '@/pages/user/RegistrationPage.vue';
import PersonalPage from '@/pages/user/PersonalPage.vue';

import MainPage from '@/pages/MainPage.vue';
import NotFoundPage from '@/pages/NotFoundPage.vue';
import ActPage from '@/pages/ActPage.vue';

import Dashboard from '@/views/Dashboard.vue';

import AppLayout from '@/layout/AppLayout.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        { name: 'layout', component: AppLayout, path: '/', children: [
                {
                    name: 'layout',
                    path: '/',
                    component: MainPage
                },
                {
                    name: 'layout.act',
                    path: '/act/:id',
                    component: ActPage,
                    children: [
                        {
                            path: '/act/:id/input',
                            component: () => import('@/pages/InputDataPage.vue')
                        },
                        {
                            path: '/act/:id/uikit/menu/seat',
                            component: () => import('@/views/uikit/menu/SeatDemo.vue')
                        },
                        {
                            path: '/act/:id/uikit/menu/payment',
                            component: () => import('@/views/uikit/menu/PaymentDemo.vue')
                        },
                        {
                            path: '/act/:id/uikit/menu/confirmation',
                            component: () => import('@/views/uikit/menu/ConfirmationDemo.vue')
                        }
                    ]
                },


        ] },


        { name: 'user.login', component: LoginPage, path: '/user/login' },
        { name: 'user.registration', component: RegistrationPage, path: '/user/registration' },
        // { name: 'user.personal', component: PersonalPage, path: '/user/personal' },
        // { name: 'main', component: MainPage, path: '/main' },
        // { name: 'notFound', component: NotFoundPage, path: '/:pathMatch(.*)*' },
    ]
});

router.beforeEach((to, from, next) => {

    axios.get('/api/user')
        .catch(e => {
            if (e.response.status === 401) {
                localStorage.key('x_xsrf_token') ? localStorage.removeItem('x_xsrf_token') : ''
            }
        })

    const token = localStorage.getItem('x_xsrf_token')

    if (!token) {
        if (to.name === 'user.login' || to.name === 'user.registration') {
            return next()
        } else {
            return next({
                name: 'user.login'
            })
        }
    }

    if (to.name === 'user.login' || to.name === 'user.registration' && token) {
        return next({
            //name: 'user.personal'
            name: 'layout'
         })
    }

    next()
})

export default router;
