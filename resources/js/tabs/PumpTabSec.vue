<template>
    <div>
    <Toolbar class="mb-3 px-3" >
        <template #start>
            <div class="flex justify-content-end align-items-center">
                <div class="mr-5">
                    <div class="mb-1">Наименование</div>
                    <InputText v-model="well" @input="" placeholder="Введите наименование" :class="{'p-invalid': false}"/>
                </div>
                <div class="mr-5">
                    <div class="mb-1">Серийный номер</div>
                    <InputText v-model="well" @input="" placeholder="Введите серийный номер" :class="{'p-invalid': false}"/>
                </div>
                <div style="margin-right: 500px">
                    <div class="mb-1">Производитель</div>
                    <InputText v-model="well" @input="" placeholder="Введите производителя" :class="{'p-invalid': false}"/>
                </div>
                <div class="">
                    <Checkbox v-model="checked" inputId="ingredient1" name="pizza" value="Cheese" />
                    <label for="ingredient1" class="ml-2"> Ремонтный </label>
                </div>
            </div>
        </template>
    </Toolbar>
    <div class="flex">
        <div class="flex flex-column align-items-stretch pump-units mr-3">
            <Button label="Рабочее колесо" severity="secondary" outlined />
            <Button label="Направляющий аппарат" severity="secondary" outlined />
            <Button label="Корпус" severity="secondary" outlined />
            <Button label="Вал" severity="secondary" outlined />
            <Button label="Соединительные элементы" severity="secondary" outlined />
            <Button label="Втулки защитные вала" severity="secondary" outlined />
        </div>
        <ScrollPanel class="mr-3" style="width: 100%; height: 54vh">
            <div class="flex flex-column" style="width: 98%;">
                <div class="flex pump-checkout mb-3">
                    <img src="../../js/img/1.Износ%20верхней%20шайбы.png" style="width: 200px">
                    <div>
                        <div class="div-cb">
                            <Checkbox v-model="checked" inputId="ingredient1" name="pizza" value="Cheese" />
                            <label for="ingredient1" class="ml-2">Износ верхней шайбы </label>
                        </div>
                        <p>
                            Видимые риски на поверхности  верхней шайбы.
                            Уменьшение толщины шайбы относительно первоначальной.
                            Вплоть до ее полного отсутствия.
                        </p>
                        <Button label="Возможные причины" text raised severity="secondary" @click="display = true" />
                        <Dialog v-model:visible="display" modal header="Возможные причины" :style="{ width: '50vw' }">
                            <p>
                                Фреттинг-коррозия;
                                Абразивный износ;
                                Общая коррозия;
                                Срез шпонки и проворот РК
                                Износ радиальных подшипников;
                                Эксплуатация в зоне повышенной кривизны (контакт РК и НА);
                                Гидроабразивный износ.
                            </p>
                        </Dialog>
                    </div>
                </div>
                <div class="flex pump-checkout mb-3">
                    <img src="../../js/img/2.Износ%20внутреннего%20диаметра%20ступицы%20РК.png" style="width: 200px">
                    <div>
                        <div class="div-cb">
                            <Checkbox v-model="checked" inputId="ingredient1" name="pizza" value="Cheese" />
                            <label for="ingredient1" class="ml-2">Износ внутреннего диаметра ступицы РК</label>
                        </div>
                        <p>
                            Видимые риски на поверхности  верхней шайбы.
                            Уменьшение толщины шайбы относительно первоначальной.
                            Вплоть до ее полного отсутствия.
                        </p>
                        <Button label="Возможные причины" text raised severity="secondary" @click="display = true" />
                        <Dialog v-model:visible="display" modal header="Возможные причины" :style="{ width: '50vw' }">
                            <p>
                                Работа за правой границей рабочей зоны;
                                Гидроабразивный износ  из-за межступенчатых утечек (более интенсивно для ступеней ВНН)
                                Высокое содержание КВЧ
                            </p>
                        </Dialog>
                    </div>
                </div>
                <div class="flex pump-checkout mb-3">
                    <img src="../../js/img/3.1.Износ%20наружного%20диаметра%20ступицы%20РК.png" style="width: 200px">
                    <div>
                        <div class="div-cb">
                            <Checkbox v-model="checked" inputId="ingredient1" name="pizza" value="Cheese" />
                            <label for="ingredient1" class="ml-2">Износ наружного диаметра ступицы РК</label>
                        </div>
                        <p>
                            Видимые риски, трещины, сколы, неровности на наружной поверхности, сопровождающиеся уменьшением толщины втулки.
                        </p>
                        <Button label="Возможные причины" text raised severity="secondary" @click="display = true" />
                        <Dialog v-model:visible="display" modal header="Возможные причины" :style="{ width: '50vw' }">
                            <p>
                                Износ радиальных подшипников;
                                Эксплуатация в зоне повышенной кривизны (контакт РК и НА);
                                Гидроабразивный износ.
                            </p>
                        </Dialog>
                    </div>
                </div>
            </div>
        </ScrollPanel>

        <div class="w-5">
            <Panel header="Прикрепленные фото" style="height: 50vh">
                <p class="m-0">

                </p>
            </Panel>
        </div>
    </div>
    </div>
</template>

<script>
import Toolbar from 'primevue/toolbar';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Checkbox from 'primevue/checkbox';
import InputNumber from 'primevue/inputnumber';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';
import Dialog from 'primevue/dialog';
import ScrollPanel from 'primevue/scrollpanel';
import Panel from 'primevue/panel';
export default {
    name: "PumpTab",
    props: ['secNum'],
    components: { Toolbar, Button, InputText, Checkbox, InputNumber, TabView, TabPanel, Accordion, AccordionTab, Dialog, ScrollPanel, Panel },
    data() {
        return {
            checked: false,
            sections: 2,
            activeTab: 0,
            display: false
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
            //setTimeout(() => { this.activeTab = Number(this.sections) - 1; console.log('input', Number(this.sections)); }, 1000)
            if (this.activeTab == this.sections) {
                this.activeTab = Number(this.sections) - 1
            }
        }
    }
}
</script>

<style scoped>
.div {
    border: 1px solid red;
}
.pump-units {
    width: 50%;
}
.pump-units button {
    margin-bottom: 0.3rem;
}
.pump-checkout {
    width: 100%;
}
.pump-checkout img {
    margin-right: 5px;
}
.div-cb {
    margin-bottom: 10px;
}
.pump-checkout p {
    padding: 3px;
    border: 1px solid lightgrey;
}
:deep(.p-scrollpanel-wrapper) {
    z-index: 0;
}
:deep(.p-toggleable-content) {
   height: 100%;
}

:deep(.p-panel-content) {
    height: 100%;
}

</style>
