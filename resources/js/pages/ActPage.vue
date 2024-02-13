<template>
    <div class="col-12 md:col-12">
        <div class=" main">
            <TabView class="tabview-custom" style="min-width: 1300px">
                <TabPanel>
                    <template #header>
                        <i class="pi pi-calendar mr-2"></i>
                        <span>Исходные данные</span>
                    </template>
                    <InputData class="pt-5"></InputData>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-trash mr-2"></i>
                        <span>ПУ</span>
                    </template>
                    <p>
                        Вкладка в работе
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <svg class="mr-2 w-5 h-5" x="0px" y="0px" viewBox="0 0 24 24" style="fill: currentcolor;"><g><path d="M12,2C6.5,2,2,6.5,2,12c0,5.5,4.5,10,10,10c5.5,0,10-4.5,10-10C22,6.5,17.5,2,12,2z M20.8,10.3c-1.2-0.8-4.1-2.5-6.5-2.1 c-0.7-0.4-1.5-0.7-2.4-0.7c-0.3,0-0.5,0-0.7,0.1c1.4-2,4.7-3.5,4.7-3.5C16,4.1,16.1,4,16.1,4C18.5,5.3,20.3,7.6,20.8,10.3z  M12,15.5c-1.9,0-3.5-1.6-3.5-3.5s1.6-3.5,3.5-3.5s3.5,1.6,3.5,3.5S13.9,15.5,12,15.5z M14.9,3.5c-1.3,0.7-4.2,2.3-5.1,4.6 c-1,0.5-1.7,1.3-2.1,2.4C6.7,8.2,7.2,4.6,7.2,4.6c0-0.1,0-0.1,0-0.2C8.5,3.5,10.2,3,12,3C13,3,14,3.2,14.9,3.5z M6.1,5.2 C6,6.7,6,10,7.5,11.9c0,0,0,0.1,0,0.1c0,1.1,0.4,2.1,1.1,2.9c-2.5-0.2-5.4-2.3-5.4-2.4c0,0-0.1-0.1-0.1-0.1c0-0.1,0-0.3,0-0.4 C3,9.3,4.2,6.9,6.1,5.2z M3.2,13.7c1.1,0.7,3.6,2.2,5.8,2.2c0.2,0,0.5,0,0.7-0.1c0.7,0.4,1.5,0.7,2.4,0.7c0.3,0,0.5,0,0.7-0.1 c-1.4,2-4.7,3.5-4.7,3.5C8,19.9,7.9,20,7.9,20C5.5,18.7,3.7,16.4,3.2,13.7z M9.1,20.5c1.3-0.7,4.2-2.3,5.1-4.6 c1-0.5,1.7-1.3,2.1-2.4c1.1,2.2,0.6,5.8,0.6,5.8c0,0.1,0,0.1,0,0.2C15.5,20.5,13.8,21,12,21C11,21,10,20.8,9.1,20.5z M17.9,18.8 c0.1-1.5,0.1-4.8-1.4-6.6c0,0,0-0.1,0-0.1c0-1.1-0.4-2.1-1.1-2.9c2.5,0.2,5.4,2.3,5.4,2.4c0,0,0.1,0,0.1,0c0,0.1,0,0.3,0,0.4 C21,14.7,19.8,17.1,17.9,18.8z"></path><circle cx="12" cy="12" r="1.5"></circle></g></svg>
                        <span>Насос</span>
                    </template>
                    <PumpTab class="pt-5"></PumpTab>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <svg class="mr-2 w-5 h-5" x="0px" y="0px" viewBox="0 0 24.03623 24" enable-background="new 0 0 24.03623 24" xml:space="preserve"><g id="Icons"><circle fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" cx="4.54468" cy="6.49328" r="3.99005"></circle><circle fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" cx="21.05901" cy="2.98025" r="2.47723"></circle><circle fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" cx="15.04747" cy="16.99606" r="2.47723"></circle><circle fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" cx="15.04747" cy="16.99606" r="6.48857"></circle><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="21.07381" y1="2.98025" x2="21.05901" y2="2.98025"></line><circle fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" cx="4.54468" cy="6.49328" r="1.04198"></circle><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="15.04747" y1="14.51884" x2="15.04747" y2="12.54263"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="15.04747" y1="21.4495" x2="15.04747" y2="19.47329"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="16.79913" y1="15.2444" x2="18.19652" y2="13.84701"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="11.89841" y1="20.14512" x2="13.29581" y2="18.74773"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="17.52469" y1="16.99606" x2="19.5009" y2="16.99606"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="10.59403" y1="16.99606" x2="12.57024" y2="16.99606"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="16.79913" y1="18.74773" x2="18.19652" y2="20.14512"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="11.89841" y1="13.84701" x2="13.29581" y2="15.2444"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,2" x1="4.54468" y1="2.50322" x2="21.05901" y2="0.50302"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,2" x1="23.53623" y1="2.98025" x2="21.53603" y2="16.99606"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0,2" x1="1.61859" y1="9.19979" x2="9.942" y2="20.99715"></line></g></svg>
                        <span>Двигатель</span>
                    </template>
                    <MotorTab class="pt-5"></MotorTab>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <svg class="mr-2 w-5 h-5" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" style="fill: currentcolor;"><g><path d="M10.5,0C10.22,0,10,0.23,10,0.51v22.98c0,0.28,0.22,0.51,0.5,0.51s0.5-0.23,0.5-0.51V0.51C11,0.23,10.77,0,10.5,0z"></path><path d="M13.5,0C13.22,0,13,0.23,13,0.51v22.98c0,0.28,0.22,0.51,0.5,0.51s0.5-0.23,0.5-0.51V0.51C14,0.23,13.78,0,13.5,0z"></path><path d="M19.47,3.45C17.93,2.09,18,0.55,18,0.53c0.02-0.28-0.19-0.51-0.47-0.53c-0.3-0.01-0.51,0.19-0.53,0.47 C17,0.55,16.9,2.52,18.8,4.2C19.99,5.24,20,6.66,20,6.68v10.65c0,0.01,0,1.44-1.19,2.48C16.9,21.48,17,23.45,17,23.53 c0.02,0.28,0.23,0.48,0.53,0.47c0.28-0.02,0.49-0.25,0.47-0.53c0-0.02-0.08-1.56,1.46-2.92C21,19.21,21,17.39,21,17.32V6.68 C21,6.61,21,4.79,19.47,3.45z"></path><path d="M5.2,4.2C7.1,2.52,7,0.55,7,0.47C6.98,0.19,6.76-0.01,6.47,0C6.19,0.02,5.98,0.25,6,0.53c0,0.02,0.08,1.56-1.46,2.92 C3,4.79,3,6.61,3,6.68v10.64c0,0.07,0,1.89,1.53,3.23C6.07,21.91,6,23.45,6,23.47C5.98,23.75,6.19,23.98,6.47,24 c0.3,0.01,0.51-0.19,0.53-0.47C7,23.45,7.1,21.48,5.2,19.8C4.01,18.76,4,17.34,4,17.32V6.68C4,6.66,4.01,5.24,5.2,4.2z"></path></g></svg>
                        <span>Гидрозащита</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <svg class="mr-2 w-5 h-5" x="0px" y="0px" viewBox="0 0 24.01044 24" enable-background="new 0 0 24.01044 24" xml:space="preserve"><g id="Icons"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M23.46829,4.79748 c-0.45547,1.09861-2.10891,2.08446-4.17158,2.5237c-2.84851,0.60674-5.24431-0.50554-7.4573-1.41115 c-2.2295-0.912-4.60585-1.87911-7.209-1.32852C2.61018,4.92841,1.005,5.91258,0.5,6.995"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M23.46829,10.79748 c-0.45547,1.09861-2.10891,2.08446-4.17158,2.5237c-2.84851,0.60674-5.24431-0.50554-7.4573-1.41115 c-2.2295-0.912-4.60585-1.87911-7.209-1.32852C2.61018,10.92841,1.005,11.91258,0.5,12.995"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M23.46829,16.79748 c-0.45547,1.09861-2.10891,2.08446-4.17158,2.5237c-2.84851,0.60674-5.24431-0.50554-7.4573-1.41115 c-2.2295-0.912-4.60585-1.87911-7.209-1.32852C2.61018,16.92841,1.005,17.91258,0.5,18.995"></path></g></svg>
                        <span>Фильтр</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <svg class="mr-2 w-5 h-5" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" style="fill: currentcolor;"><path d="M15.57,22.19"></path><path d="M8.1,22.19"></path><path d="M19.51,10L19.51,10l-0.01-2c0-0.02-0.01-0.03-0.01-0.04c0.09-0.79-0.52-1.63-1.61-2.11c-0.44-0.2-0.88-0.3-1.29-0.3 c-0.74,0-1.3,0.35-1.52,0.93C15.02,6.63,15,6.8,15,6.96l-0.01,0V10h-0.74V5.62c0-0.01-0.01-0.02-0.01-0.03 c0.02-0.76-0.58-1.54-1.61-2c-0.44-0.2-0.88-0.3-1.29-0.3c-0.74,0-1.3,0.35-1.52,0.93C9.77,4.37,9.75,4.52,9.75,4.67l-0.01,0V10 H9.01V3.5C9.01,3.48,9,3.47,9,3.46c0.09-0.79-0.52-1.63-1.61-2.11c-0.44-0.2-0.88-0.3-1.29-0.3c-0.74,0-1.3,0.35-1.52,0.93 C4.52,2.13,4.5,2.29,4.5,2.45l-0.01,0V10H4.49C4.22,10,4,10.22,4,10.49v12.03C4,22.78,4.22,23,4.49,23h15.03 c0.27,0,0.49-0.22,0.49-0.49V10.49C20,10.22,19.78,10,19.51,10z M16.6,6.55c0.26,0,0.57,0.07,0.88,0.21 c0.68,0.3,1.13,0.83,1.01,1.17C18.42,8.11,18.2,8.2,17.9,8.2c-0.26,0-0.57-0.07-0.88-0.21c-0.68-0.3-1.13-0.83-1.01-1.17 C16.08,6.64,16.3,6.55,16.6,6.55z M15.99,8.54c0.19,0.13,0.39,0.26,0.62,0.36c0.44,0.2,0.88,0.3,1.29,0.3c0.22,0,0.42-0.04,0.6-0.1 V10h-2.51V8.54z M11.35,4.3c0.26,0,0.57,0.07,0.88,0.21c0.68,0.3,1.13,0.83,1.01,1.17c-0.07,0.18-0.29,0.27-0.58,0.27 c-0.26,0-0.57-0.07-0.88-0.21c-0.68-0.3-1.13-0.83-1.01-1.17C10.83,4.39,11.05,4.3,11.35,4.3z M10.74,6.29 c0.19,0.13,0.39,0.26,0.62,0.36c0.44,0.2,0.88,0.3,1.29,0.3c0.22,0,0.42-0.04,0.6-0.1V10h-2.51V6.29z M6.1,2.05 c0.26,0,0.57,0.07,0.88,0.21c0.68,0.3,1.13,0.83,1.01,1.17C7.92,3.61,7.7,3.7,7.4,3.7c-0.26,0-0.57-0.07-0.88-0.21 c-0.68-0.3-1.13-0.83-1.01-1.17C5.58,2.14,5.8,2.05,6.1,2.05z M5.49,4.04C5.68,4.17,5.88,4.3,6.11,4.4C6.55,4.6,7,4.7,7.4,4.7 c0.22,0,0.42-0.04,0.6-0.1V10H5.49V4.04z M19,22H5v-2h14V22z M19,19H5v-2h14V19z M19,16H5v-2h14V16z M19,13H5v-2h14V13z"></path></svg>
                        <span>Кабель</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-box mr-2"></i>
                        <span>СУ</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-th-large mr-2"></i>
                        <span>Доп.устр.</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-file-edit mr-2"></i>
                        <span>Результат разбора</span>
                    </template>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </TabPanel>
            </TabView>
        </div>
    </div>
</template>

<script>
import TabMenu from 'primevue/tabmenu';
import Button from 'primevue/button';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import InputData from "../tabs/InputData.vue";
import PumpTab from "../tabs/PumpTab.vue";
import MotorTab from "../tabs/MotorTab.vue";



export default {
    components: { TabMenu, Button, TabView, TabPanel, InputData, PumpTab, MotorTab },
    data() {
        return {
            activeIndex: 1,
        }
    },
    mounted() {

    },
    computed: {
            id() {
                return this.$route.params.id;
            },
            nestedRouteItems() { return [
            {
                label: 'Исходные данные',
                icon: 'pi pi-calendar',
                to: `/act/${this.id}/input`
            },
            {
                label: 'ПУ',
                icon: "pi custom-svg-icon",
                to: `/act/${this.id}/uikit/menu/seat`
            },
            {
                label: 'Payment',
                to: `/act/${this.id}/uikit/menu/payment`
            },
            {
                label: 'Confirmation',
                to: `/act/${this.id}/uikit/menu/confirmation`
            }
        ]}
    }
};
</script>

<style scoped>
    .main {
        margin-top: -2rem;
        color: red;
    }
    :deep(.p-tabview-nav-link:focus) {
        box-shadow: none !important;
    }
    :deep(.p-tabview .p-tabview-panels) {
        padding: 0 10px 25px 10px;
    }
    :deep(.p-tabview .p-tabview-panels) {
        //border: 1px solid red;
    }
</style>
