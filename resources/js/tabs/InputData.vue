<template>
<div>
    <div class="flex justify-content-between mb-5">
       <Toast />
       <Fieldset legend="Общая информация" class="my-flex mr-3">
           <div class="mb-3">
               <div class="mb-1">Обособленное подразделение</div>
               <div>
                   <Dropdown v-model="selectedOp" @change="changeOp" :options="ops" optionLabel="name" optionValue="name" placeholder="Выберите ОП" class="w-full md:w-14rem" :class="{'p-invalid': errorOp}"/>
               </div>
           </div>
           <div class="mb-3">
               <div class="mb-1">Город</div>
               <div>
                   <Dropdown v-model="selectedCity" @change="changeCity" :options="cities" optionLabel="name" optionValue="name" placeholder="Выберите город" class="w-full md:w-14rem" :class="{'p-invalid': errorCity}"/>
               </div>
           </div>
           <div class="mb-3">
               <div class="mb-1">Компания</div>
               <div>
                   <Dropdown v-model="selectedCompany" @change="changeCompany" :options="companies" optionLabel="name" optionValue="name" placeholder="Выберите компанию" class="w-full md:w-14rem" :class="{'p-invalid': errorCompany}"/>
               </div>
           </div>
           <div class="mb-3">
               <div class="mb-1">Месторождение</div>
               <div>
                   <Dropdown v-model="selectedField" @change="changeField" :options="fields" optionLabel="name" optionValue="name" placeholder="Выберите месторождение" class="w-full md:w-14rem" :class="{'p-invalid': errorField}"/>
               </div>
           </div>
           <div class="mb-3">
               <div class="mb-1">Куст</div>
               <InputText v-model="cluster" @input="changeCluster" placeholder="Введите куст" :class="{'p-invalid': errorCluster}"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Скважина</div>
               <InputText v-model="well" @input="changeWell" placeholder="Введите скважину" :class="{'p-invalid': errorWell}"/>
           </div>
       </Fieldset>
       <Fieldset legend="Этапы эксплуатации" class="my-flex mr-3">
           <div class="mb-3">
               <div class="mb-1">Дата монтажа</div>
               <Calendar v-model="installationDate" @date-select="changeInstallationDate" dateFormat="dd.mm.yy" :minDate="minDate" :maxDate="maxDate" :manualInput="false" :locale="en" class="w-full" :class="{'p-invalid': errorInstallationDate}" placeholder="Выберите дату монтажа"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Дата запуска</div>
               <Calendar v-model="startDate"  @date-select="changeStartDate" dateFormat="dd.mm.yy" :minDate="minDate" :maxDate="maxDate" :manualInput="false" :locale="en" class="w-full" :class="{'p-invalid': errorStartDate}" placeholder="Выберите дату запуска"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Дата остановки</div>
               <Calendar v-model="stopDate" @date-select="changeStopDate" dateFormat="dd.mm.yy" :minDate="minDate" :maxDate="maxDate" :manualInput="false" :locale="en" class="w-full" :class="{'p-invalid': errorStopDate}" placeholder="Выберите дату остановки"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Дата демонтажа</div>
               <Calendar v-model="dismantlingDate" @date-select="changeDismantlingDate" dateFormat="dd.mm.yy" :minDate="minDate" :maxDate="maxDate" :manualInput="false" :locale="en" class="w-full" :class="{'p-invalid': errorDismantlingDate}" placeholder="Выберите дату демонтажа"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Наработка</div>
               <InputNumber v-model="operatingTime" @input="changeOperatingTime" inputId="minmax" :min="0" :max="10000" suffix=" сут"  :class="{'p-invalid': errorOperatingTime}" placeholder="Введите наработку"/>
           </div>
       </Fieldset>
       <Fieldset legend="Дополнительная информация" class="my-flex mr-3">
           <div class="mb-3">
               <div class="mb-1">Причина остановки</div>
               <Dropdown v-model="selectedStopReason" @change="changeStopReason" :options="stopReasons" optionLabel="name" optionValue="name" placeholder="Выберите причину" class="w-full md:w-14rem" :class="{'p-invalid': errorStopReason}"/>
           </div>
           <div class="mb-3">
               <div class="mb-1">Режим работы</div>
               <Dropdown v-model="selectedMode" @change="changeMode" :options="modes" optionLabel="name" optionValue="name" placeholder="Выберите режим" class="w-full md:w-14rem" :class="{'p-invalid': errorMode}"/>
           </div>
       </Fieldset>
       <Fieldset legend="Документация" class="my-flex-doc">
           <ScrollPanel style="width: 100%; height: 60vh;" >
               <p>
<!--                   <div class="mb-1">Опросный лист</div>-->
<!--                   <FileUpload name="demo[]" :disabled="disableQuestionnaire" chooseLabel="Прикрепить" url="./upload.php" @change="onChangeQuestionnaire" @remove="onRemoveQuestionnaire" :multiple="false" accept=".doc,.docx" :maxFileSize="1000000">-->
<!--                       <template #empty>-->
<!--                           <p></p>-->
<!--                       </template>-->
<!--                       <Button label="Submit" />-->
<!--                   </FileUpload>-->
                   <div v-for="doc in listDocuments" class="mb-3">
                       <div class="mb-1">{{ doc }}</div>
                       <FileUpload name="demo[]" :customUpload="true" chooseLabel="Прикрепить" uploadLabel="Загрузить" cancelLabel="Отменить" url="/api/add_file" accept=".doc,.docx" :maxFileSize="1000000" @remove="onFileRemove" @select="onFileSelect(doc)" @before-upload="onFileBeforeUpload" @upload="onFileUpload" @onChange="onFileChange" @uploader="onFileUploader">
                           <template #empty>
                               <p></p>
                           </template>
                       </FileUpload>
                   </div>
               </p>
           </ScrollPanel>
       </Fieldset>
   </div>
    <div class="flex gap-3">
        <Button label="<- к списку актов" @click="this.$router.push('/')" />
        <Button label="Сохранить" @click="store" />
    </div>
</div>

</template>


<script>
import Toast from 'primevue/toast';
import { useToast } from "primevue/usetoast";
import Fieldset from 'primevue/fieldset';
import Dropdown from 'primevue/dropdown';
import InputText from 'primevue/inputtext';
import Calendar from 'primevue/calendar';
import InputNumber from 'primevue/inputnumber';
import FileUpload from 'primevue/fileupload';
import Button from 'primevue/button';
import ScrollPanel from 'primevue/scrollpanel';
import axios from "axios";

export default {
    name: "InputData",
    components: { Fieldset, Dropdown, InputText, Calendar, InputNumber, FileUpload, Button, ScrollPanel, Toast },
    data() {
        return {
            id: null,
            en: 'en_en',
            toast: useToast(),
            selectedOp: '',
            selectedCity: '',
            selectedCompany: '',
            selectedField: '',
            selectedStopReason: { name: 'Выберите причину' },
            selectedMode: { name: 'Выберите режим' },
            ops: [
                {name: 'Новомет-Ноябрьск', code: 'NYB'},
                {name: 'Новомет-Нефтеюганск', code: 'NFG'},
                {name: 'Новомет-Нижневартовск', code: 'NVR'},
                {name: 'Новомет-Стрежевой', code: 'STR'},
                {name: 'Новомет-Юг', code: 'UG'},
                {name: 'Новомет-Казахстан', code: 'KZT'},
                {name: 'Новомет-Азербайджан', code: 'AZB'},
            ],
            cities: [
                {name: 'Ноябрьск', code: 'NYB'},
                {name: 'Нефтеюганск', code: 'NFG'},
                {name: 'Нижневартовск', code: 'NVR'},
                {name: 'Стрежевой', code: 'STR'},
                {name: 'Юг', code: 'UG'},
                {name: 'Казахстан', code: 'KZT'},
                {name: 'Азербайджан', code: 'AZB'},
            ],
            companies: [
                {name: 'Лукойл', code: 'NYB'},
                {name: 'Сургут', code: 'NFG'},
                {name: 'МНКТ', code: 'NVR'},
                {name: 'Новомет', code: 'NVR'},
            ],
            fields: [
                {name: 'Ярактинское', code: 'NYB'},
                {name: 'Висовое', code: 'NFG'},
                {name: 'Тестовое', code: 'NVR'},
                {name: 'Новое', code: 'NYB'},
                {name: 'Старое', code: 'NFG'},
                {name: 'Средиземное', code: 'NVR'},
                {name: 'Прованьское', code: 'NVR'},
            ],
            stopReasons: [
                {name: 'ГТМ', code:'gtm'},
                {name: 'Нет подачи', code:'nfr'},
                {name: 'Смена УЭЦН', code:'cesp'},
                {name: 'Перевод в ППД', code:'ppd'},
                {name: 'R-0', code:'r0'},
                {name: 'Нет притока', code:'nwfl'},
                {name: 'Извлечение', code:'ext'},
                {name: 'ППР, оптимизация', code:'ppr'},
            ],
            modes: [
                {name: 'Постоянный', code:'cnst'},
                {name: 'Периодический', code:'temp'},
            ],
            cluster: '',
            well: '',
            installationDate: '',
            startDate: '',
            stopDate: '',
            dismantlingDate: '',
            operatingTime: null,
            errorOp: false,
            errorCity: false,
            errorCompany: false,
            errorField: false,
            errorCluster: false,
            errorWell: false,
            errorInstallationDate: false,
            errorStartDate: false,
            errorStopDate: false,
            errorDismantlingDate: false,
            errorOperatingTime: false,
            errorStopReason: false,
            errorMode: false,
            listDocuments: [
                'Опросный лист',
                'Шахматка',
                'Архив',
                'Протокол подбора',
                'КВЧ',
                'Химсостав',
                'Акт монтажа',
                'Акт демонтажа',
                'Акт отбраковки кабеля',
            ],
            disableQuestionnaire: false,
            doc: ''
        }
    },
    computed: {
        minDate() {
            let dt = new Date();
            dt.setDate(1);
            dt.setMonth(0);
            dt.setFullYear(1950);
            return dt;
        },
        maxDate() {
            let dt = new Date();
            dt.setDate(1);
            dt.setMonth(0);
            dt.setFullYear(3000);
            return dt;
        }
    },
    methods: {
        changeOp() { this.errorOp = false; },
        changeCity() { this.errorCity = false; },
        changeCompany() { this.errorCompany = false; },
        changeField() { this.errorField = false; },
        changeCluster() { this.errorCluster = false; },
        changeWell() { this.errorWell = false; },
        changeInstallationDate() { this.errorInstallationDate = false; this.operatingTimeCount();},
        changeStartDate() { this.errorStartDate = false; },
        changeStopDate() { this.errorStopDate = false; },
        changeDismantlingDate() { this.errorDismantlingDate = false; this.operatingTimeCount();},
        changeOperatingTime() { this.errorOperatingTime = false; },
        changeStopReason() { this.errorStopReason = false; },
        changeMode() { this.errorMode = false; console.log('changeMode', this.errorMode) },
        operatingTimeCount() {
            if (this.dismantlingDate && this.installationDate) {
                this.operatingTime = (new Date(this.dismantlingDate) - new Date(this.installationDate)) / (1000 * 60 * 60 * 24);
                if (this.operatingTime < 0) {
                    this.warning();
                }
                this.errorOperatingTime = false;
            }
        },
        onFileSelect(doc) {
            this.doc = doc;
            // axios.post('/api/add_file', {})
            //     .then(res => {
            //         console.log(res);
            //     })
            //     .catch(err => {
            //         console.log(err);
            //     });
            console.log('onFileSelect', doc);
        },
        onFileBeforeUpload(e) {
            console.log('onFileBeforeUpload');
            console.log(e.target);
        },
        onFileUpload() {
            console.log('onFileUpload');
        },
        onFileChange() {
            console.log('onFileChange');
        },
        onFileUploader(e) {
            const fileUp = e.files[0];
            //console.log(doc);

            const body = new FormData();
            body.append("id", this.id);
            body.append("folder", this.doc);
            body.append("file", fileUp);

            axios.post(`/api/add_file`,
                body,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(res => {
                    console.log(res);
                })
                .catch(err => {
                    console.log(`Error - add_file: ${err}`);
                });

            console.log('onFileUploader');
        },



        onChangeQuestionnaire() {
            this.disableQuestionnaire = true;
        },
        onRemoveQuestionnaire() {
            this.disableQuestionnaire = false;
        },
        createButtonOpen() {
            const els = document.querySelectorAll('.p-fileupload');
            for (const el of els) {
                const btn = document.createElement('button');
                btn.textContent = 'Открыть';
                btn.classList.add('btn-open');
                el.appendChild(btn);
            }
        },
        store() {
            //console.log('this.id', this.id);
            if(!+this.id) {
                //console.log('New', this.id);
                axios.post('/api/input_data', {
                    op:  this.selectedOp,
                    city: this.selectedCity,
                    company:  this.selectedCompany,
                    field: this.selectedField,
                    cluster:  this.cluster,
                    well: this.well,
                    installation_date_at: this.installationDate,
                    start_date_at: this.startDate,
                    stop_date_at: this.stopDate,
                    dismantling_date_at: this.dismantlingDate,
                    operating_time: this.operatingTime,
                    stop_reason: this.selectedStopReason,
                    mode: this.selectedMode,
                }).then(res => {
                    this.id = res.data.data.id;
                    this.$router.push({ name: 'layout.act', params: { id: this.id } });
                    this.toast.add({ severity: 'success', summary: 'Отправка на сервер', detail: 'Данные успешно сохранены на сервере', life: 5000 });
                    //console.log(res);
                }).catch(res => {
                    //console.log(res);
                    this.toast.add({ severity: 'error', summary: 'Отправка на сервер', detail: 'Ошибка: не все поля заполнены', life: 5000 });
                    this.errorsFields(res.response.data.errors);
                    //console.log(res.response.data.errors.stop_reason);
                });
            } else {
                //console.log('Update', this.id);
                //console.log('this.selectedCity.name = ', this.selectedCity.name);
                axios.put(`../api/input_data/${this.id}`, {
                    op:  this.selectedOp,
                    city: this.selectedCity,
                    company:  this.selectedCompany,
                    field: this.selectedField,
                    cluster:  this.cluster,
                    well: this.well,
                    installation_date_at: this.installationDate,
                    start_date_at: this.startDate,
                    stop_date_at: this.stopDate,
                    dismantling_date_at: this.dismantlingDate,
                    operating_time: this.operatingTime,
                    stop_reason: this.selectedStopReason,
                    mode: this.selectedMode,
                }).then(res => {
                    //console.log(res);
                    this.toast.add({ severity: 'success', summary: 'Отправка на сервер', detail: 'Данные успещно изменены на сервере', life: 5000 });
                }).catch(res => {
                    this.toast.add({ severity: 'error', summary: 'Отправка на сервер', detail: 'Ошибка: не все поля заполнены', life: 5000 });
                    this.errorsFields(res.response.data.errors);
                });
            }
        },
        warning () {
            this.toast.add({ severity: 'warn', summary: 'Предупреждение', detail: 'Наработка отрицательная', life: 5000 });
        },
        errorsFields(err) {
            err.hasOwnProperty('stop_reason') ? this.errorStopReason = true : this.errorStopReason = false;
            err.hasOwnProperty('mode') ? this.errorMode = true : this.errorMode = false;
            err.hasOwnProperty('op') ? this.errorOp = true : this.errorOp = false;
            err.hasOwnProperty('city') ? this.errorCity = true : this.errorCity = false;
            err.hasOwnProperty('company') ? this.errorCompany = true : this.errorCompany = false;
            err.hasOwnProperty('field') ? this.errorField = true : this.errorField = false;
            err.hasOwnProperty('cluster') ? this.errorCluster = true : this.errorCluster = false;
            err.hasOwnProperty('well') ? this.errorWell = true : this.errorWell = false;
            err.hasOwnProperty('installation_date_at') ? this.errorInstallationDate = true : this.errorInstallationDate = false;
            err.hasOwnProperty('start_date_at') ? this.errorStartDate = true : this.errorStartDate = false;
            err.hasOwnProperty('stop_date_at') ? this.errorStopDate = true : this.errorStopDate = false;
            err.hasOwnProperty('dismantling_date_at') ? this.errorDismantlingDate = true : this.errorDismantlingDate = false;
            err.hasOwnProperty('operating_time') ? this.errorOperatingTime = true : this.errorOperatingTime = false;
        }
    },
    mounted() {
         this.id = this.$route.params.id;
         //console.log('this.id', this.id);
         if(+this.id) {
            axios.get(`../api/input_data/${this.id}`)
                .then(res => {
                    //console.log(res.data.data.id);
                    //this.selectedOp = 'testOp';
                    this.selectedOp = res.data.data.op,
                    this.selectedCity = res.data.data.city,
                    this.selectedCompany = res.data.data.company,
                    this.selectedField = res.data.data.field,
                    this.cluster = res.data.data.cluster,
                    this.well = res.data.data.well,
                    this.installationDate = new Date(res.data.data.installation_date_at);
                    this.startDate = new Date(res.data.data.start_date_at);
                    this.stopDate = new Date(res.data.data.stop_date_at);
                    this.dismantlingDate = new Date(res.data.data.dismantling_date_at);
                    this.operatingTime = res.data.data.operating_time;
                    this.selectedStopReason = res.data.data.stop_reason;
                    this.selectedMode = res.data.data.mode;
                    //this.changeMode();
                    console.log(this.selectedCity);
                    this.toast.add({ severity: 'success', summary: 'Загрузка данных с сервера', detail: `Данные успешно загружены, id ${res.data.data.id}`, life: 5000 });
                });
        }
        //this.createButtonOpen();
        this.selectedCity1 = 'Rome';
    }
}
</script>

<style scoped>
:deep(.p-fieldset-legend) {
    display: flex;
    height: 35px;
    margin-left: 10px;
    padding: 5px 10px;
    font-size: 16px;
}
:deep(.p-dropdown) {
    width: 100% !important;
}
:deep(.p-inputnumber) {
    width: 100%;
}
:deep(.p-inputtext) {
    width: 100%;
}
:deep(.p-fileupload-file-thumbnail) {
    display: none;
}
:deep(.p-fileupload-file-details) {
    display: flex;
}
:deep(.p-fileupload .p-fileupload-content) {
    padding: 10px;
}
:deep(.p-fileupload .p-fileupload-file) {
    padding: 5px;
}
:deep(.p-fileupload .p-fileupload-buttonbar) {
    padding: 5px;
}
:deep(.p-scrollpanel-wrapper) {
    z-index: 0;
}
:deep(.p-button) {
    padding: 0.4rem 1rem;
}


.my-flex {
    flex-grow: 1;
}
.my-flex-doc {
    flex-grow: 3;
}

</style>

//https://codesandbox.io/s/primevue-fileuploader-custom-q2dqhh?file=/src/FileUploadDemo.vue:989-1009
