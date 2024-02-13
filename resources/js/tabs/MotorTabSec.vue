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
                    <Checkbox v-model="isRepair" :binary="true" />
                    <label for="ingredient1" class="ml-2"> Ремонтный </label>
                </div>
            </div>
        </template>
    </Toolbar>
    <div class="flex">
        <div v-if="details" class="flex flex-column align-items-stretch pump-units mr-3 w-5">
            <div v-for="detail in details" :key="detail.id">
                <Button :label="detail.name" severity="secondary" outlined class="w-full" @click="getDetailDefects(detail.id)"/>
            </div>
            <Button label="temp" @click="getImage"/>
        </div>
        <ScrollPanel class="mr-3" style="width: 100%; height: 54vh">
            <div v-if="detailDefects" class="flex flex-column" style="width: 98%;">
                <div v-for="defect in detailDefects" :key="defect.id" class="flex pump-checkout mb-3">
<!--                    <img src="../../js/img/1.Износ%20верхней%20шайбы.png" style="width: 200px">-->
                    <img src="../../../storage/app/public/esp/Motor/1. Масло/1.1.Черное, потемневшее масло.png" style="width: 200px">
<!--                    <img :src="images" style="width: 200px">-->
<!--                    <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAAUA-->
<!--AAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO-->
<!--    9TXL0Y4OHwAAAABJRU5ErkJggg==" alt="Red dot" style="width: 100px"/>-->
                    <img :src="`data:image/png;base64,${images}`" style="width: 200px"/>

<!--                    <img :src="images.path" style="width: 200px">-->

                    <div>
                        <div class="div-cb">
                            <Checkbox :id="defect.id" name="defect" :value="defect" v-model="selectedDefects" @input="updateDefect(defect.id, $event)"/>
                            <label :for="defect.id" class="ml-2">{{defect.defect}}</label>
<!--                            <Checkbox v-model="checked" binary="true" />-->
<!--                            <label for="ingredient1" class="ml-2">{{ defect.defect }}</label>-->
                        </div>
                        <p>
                            {{ defect.description }}
                        </p>
                        <Button label="Возможные причины" text raised severity="secondary" @click="display = true" />
                        <Dialog v-model:visible="display" modal header="Возможные причины" :style="{ width: '50vw' }">
                            <p>
                                {{ defect.reason }}
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
import Dialog from 'primevue/dialog';
import ScrollPanel from 'primevue/scrollpanel';
import Panel from 'primevue/panel';
import axios from "axios";
import { Buffer } from 'buffer';
//import * as url from "url";
//import { atob } from 'https://cdn.jsdelivr.net/npm/buffer@^6.0.3/';
export default {
    name: "PumpTab",
    props: ['secNum'],
    components: { Toolbar, Button, InputText, Checkbox, Dialog, ScrollPanel, Panel },

    data() {
        return {
            details: [],
            defects: [],
            detailDefects: [],
            checked: [],
            display: false,
            isRepair: false,
            selectedDefects: [],
            images: {},
        }
    },

    mounted() {
        this.getMotorDetails();
        this.getMotorDefects();
        this.images = 'http://172.16.30.36:8000/storage/esp/Motor/1.png';
        this.getImage();
        //this.images = Storage::url('esp/Motor/1.png');
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
        },
        updateDefect(id, event) {
            console.log(this.selectedDefects);
        },
        getImage_() {
            console.log('temp');
            axios
                .get("https://example.com/image.jpg", { responseType: "blob" })
                .then((response) => {
                    if (response.status === 200) {
                        let blob = new Blob([response.data]);
                        let url = URL.createObjectURL(blob);
                        this.imageUrl = url;
                    } else {
                        console.error("Error in request");
                    }
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        getImage__() {
             axios.get(`/api/motor/get_file`, {
                responseType: 'arraybuffer',
            })
                .then(res => {
                    console.log(res);
                    const fileName = res.headers['content-disposition'].split('=')[1];
                    const file = new Blob([res.data], {
                        type: 'application/octet-stream'
                    });
                    const link = document.createElement('a');
                    link.href = window.URL.createObjectURL(file);
                    link.download = fileName;
                    link.click();
                })
                .catch(err => {
                    console.log(`Error - get_file: ${err}`);
                });
        },
        getImage() {
            // получаем данные base64
//             const base64Data = "�PNG  IHDR\b�o&�IDAT\b�c���?� � ��1�X��5�юIEND�B�";
//
// // декодируем данные
//             var buffer = Buffer.from(base64Data, 'base64');
//             var arrayBuffer = buffer;
//             var blob = new Blob([arrayBuffer], {type: 'image/png'});
//
// // Создаем URL для Blob объекта
//             var imageUrl = window.URL.createObjectURL(blob);
//             this.images = imageUrl;
//             console.log(imageUrl);



            const rnd = Math.random();
            axios.get(`/api/motor/get_file?a=${rnd}`)
                .then(res => {
                    this.images = res.data.image;
                    console.log('buffer');


                })
                .catch(err => {
                    console.log(`Error - get_file: ${err}`);
                });
        }
    }

}
</script>

<style scoped>



:deep(.p-toggleable-content) {
    height: 100%;
}

:deep(.p-panel-content) {
    height: 100%;
}

</style>
