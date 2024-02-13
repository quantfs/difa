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
<!--        <Button label="Request" @click="getMotorDetails" />-->
<!--        <div class="flex my-div w-full">-->
<!--            <div class="my-div">-->

<!--            </div>-->
<!--            <div class="my-div">-->

<!--            </div>-->

<!--        </div>-->


        <div class="flex">
            <div v-if="details" class="flex flex-column align-items-stretch pump-units mr-3 w-3">
                <div v-for="detail in details" :key="detail.id">
                    <Button :label="detail.name" severity="secondary" outlined class="w-full" @click="getDetailDefects(detail.id)"/>
                </div>
                <Button label="temp" @click="getMotorDefects"/>
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
        </div>
<!--        <div class="my-div"></div>-->
    </div>



</template>

<script>
import Toolbar from 'primevue/toolbar';
import InputText from "primevue/inputtext";
import Checkbox from "primevue/checkbox";
import Button from "primevue/button"
import axios from "axios";

export default {
    name: "MotorTabSec",
    props: ['secNum'],
    components: { Toolbar, InputText, Checkbox, Button },
    //defects: {},

    data() {
      return {
          details: [],
          defects: [],
          detailDefects: [],
          checked: {}
      }
    },

    mounted() {
        this.getMotorDetails();
        this.getMotorDefects()
    },

    methods: {
        getMotorDetails() {
            axios.get('/api/motor/details/index')
                .then(res => {
                    this.details = res.data;
                    //console.log(this.details);
                })
        },
        getMotorDefects() {
            axios.get('/api/motor/defects/index')
                .then(res => {
                    this.defects = res.data.data;
                    //console.log(this.defects);
                })
        },
        getDetailDefects(detailId) {
            this.detailDefects = this.defects.filter(res => res.detail_id === detailId);
            console.log(detailDefects);
        }
    }
}
</script>

<style scoped>


</style>
