<template>
    <div style="display: flex; flex-direction: column; align-items: center" >
        <div class="flex">
            <Button label="Создание акта комиссионного разбора" @click.prevent="createAct" class="mb-5 mr-5 w-30rem" />
            <Button label="Автоматизированный анализ надежности" class="mb-5 w-30rem" />
        </div>
        <div class="flex">
            <Button label="Поиск актов" class="mb-5  mr-5 w-30rem" />
            <Button label="Создание акта комиссионного разбора ТМС и СУ" class="mb-5 w-30rem" />
        </div>
<!--        <DataTable :value="table" responsiveLayout="scroll" class="w-full">-->
        <DataTable v-model:selection="selectedRow" :value="table" dataKey="id" showGridlines scrollable scrollHeight="40rem" class="w-full mb-5" @row-select="rowSelect">
            <Column selectionMode="single" headerStyle="width: 5rem" bodyStyle="text-align:center"></Column>
            <Column field="id" header="№" style="width: 10%" bodyStyle="text-align:center"></Column>
            <Column field="name" header="Подразделение" style="width: 20%"></Column>
            <Column field="field" header="Месторождение" style="width: 20%"></Column>
            <Column field="cluster" header="Куст" style="width: 10%"></Column>
            <Column field="well" header="Скважина" style="width: 10%"></Column>
            <Column field="created_at" header="Дата создания" style="width: 15%"></Column>
            <Column field="updated_at" header="Дата изменения" style="width: 15%"></Column>
        </DataTable>
        <div class="flex align-self-start gap-3 ml-6">
            <router-link :to="{name: 'layout.act', params: { id: +selectedRow.id }}">
                <Button label="Открыть акт" :disabled="disabled" />
            </router-link>
            <Button label="Удалить акт" @click="deleteAct(selectedRow.id)" :disabled="disabled" />
        </div>


    </div>
</template>

<script>
import Button from 'primevue/button';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
export default {
    components: { Button, DataTable, Column },
    data() {
        return {
            table: [],
            columns: null,
            selectedRow: [],
            disabled: true,
        }
    },
    methods: {
        loadData() {
            axios.get('./api/input_data')
                .then(res => {
                    let count = 0;
                    for (const record of res.data.data) {
                        count++;
                        const obj = {};
                        obj.id = record.id;
                        obj.name = record.op;
                        obj.field = record.field;
                        obj.cluster = record.cluster;
                        obj.well = record.well;
                        obj.created_at = new Date(record.created_at).toLocaleString();
                        obj.updated_at = new Date(record.updated_at).toLocaleString();
                        this.table.push(obj);
                    }
                })
        },
        rowSelect() {
            this.disabled = false;
            //console.log(this.selectedRow);
        },
        createAct() {
            this.$router.push({ name: 'layout.act', params: { id: 0 } })
        },
        deleteAct(id) {
            axios.delete(`../api/input_data/${id}`)
                .then(res => {
                    //console.log(res.data.data);
                    this.table = [],
                    this.loadData();
                });
            //console.log('delete', id);
        }
    },
    mounted() {
      this.loadData();
    },
}
</script>

<style scoped>

:deep(.p-datatable .p-datatable-thead > tr > th) {
    font-weight: 400;
    color: #ffb900;
    padding: 12px;
}

:deep(.p-datatable .p-datatable-tbody > tr > td) {
    padding: 7px;
}
</style>
