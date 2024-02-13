<template>
    <div>
        <Accordion :activeIndex="1">
            <AccordionTab header="Схема">
                <div class="flex justify-content-around align-items-center mb-5">
                    <div>
                        <h5 class="ml-2">Число секций</h5>
                        <InputNumber v-model="sections" showButtons buttonLayout="horizontal" inputStyle="width: 3rem"
                                     decrementButtonClassName="p-button-secondary" incrementButtonClassName="p-button-secondary"
                                     incrementButtonIcon="pi pi-plus" decrementButtonIcon="pi pi-minus" class="mb-5"
                                     :min="1" :max="5" @input="input"/>
                    </div>
                    <img src="../img/Motor.png" alt="logo" class="w-9 ml-9" style="margin: 0 0 0 0"/>
                </div>
            </AccordionTab>
        </Accordion>

        <Toolbar>
            <template #start>
                <TabView :activeIndex="activeTab" @tabChange="tabChange">
                    <TabPanel v-for="tab in tabs" :key="tab.title" :header="tab.title">
                        <MotorTabSec :secNum="tab.content"/>
                    </TabPanel>
                </TabView>
            </template>
        </Toolbar>
    </div>
</template>

<script>
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';
import MotorTabSec from '../tabs/MotorTabSec.vue';
import Toolbar from 'primevue/toolbar';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import InputNumber from 'primevue/inputnumber';


export default {
    name: "MotorTab",
    components: { Accordion, AccordionTab, InputNumber, Toolbar, TabView, TabPanel, MotorTabSec },

    data() {
        return {
            checked: false,
            sections: 2,
            activeTab: 0,
        }
    },

    computed: {
        tabs() {
            let tabs = [
                { title: 'Секция 1', content: 'Tab 1 Content' },
                { title: 'Секция 2', content: 'Tab 2 Content' },
                { title: 'Секция 3', content: 'Tab 3 Content' },
                { title: 'Секция 4', content: 'Tab 4 Content' },
                { title: 'Секция 5', content: 'Tab 5 Content' },
            ];
            return tabs.slice(0, this.sections);
        },
    },

    methods: {
        tabChange(e) {
            this.activeTab = e.index;
        },
        input() {
            if (this.activeTab == this.sections) {
                this.activeTab = Number(this.sections) - 1
            }
        }
    }

}
</script>

<style scoped>
:deep(.p-inputnumber) {
    color: red;
    text-align: center !important;
}

:deep(.p-inputnumber) {
    padding-left: 5px;
}
:deep(.p-inputnumber-input.p-inputtext ) {
    text-align: center;
}
:deep(.p-tabview) {
    padding: 2px;
    width: 100%;
}
:deep(.p-accordion-content .p-toolbar) {
    padding: 1rem;
    width: 100%;
}
:deep(.p-toolbar) {
    padding: 1px;
    width: 100%;
}
:deep(.p-tabview .p-tabview-panels) {
    padding: 0 !important;
}
:deep(.p-tabview-panel) {
    padding: 1rem;
}

:deep(.p-toolbar-group-start.p-toolbar-group-left) {
    width: 100%;
}

</style>
