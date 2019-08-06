<template>
    <div :id="id" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Importar cuentas desde excel</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-25" v-loading="loadingModal" :element-loading-text="loadingtext">
                    
                    <input type="file" id="excelAccounts">

                    <br><br>
                    <p class="mg-b-5">Los campos deben ir en orden correcto de derecha a izquierda.</p>
                    <br><br>

                     <table class="table table-striped mg-b-0" v-show="responses.length > 0">
                        <thead>
                            <tr>
                            <th>Usuario</th>
                            <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody style="overflow-y:auto; max-height:50px;">
                            <tr v-for="response in responses" :key="response.user">
                                <td>{{response.user}}</td>
                                <td v-show="response.response.status == 'OK'"><el-tag type="success">Registrado</el-tag></td>
                                <td v-show="response.response.status == 'Error'"><el-tag type="danger">{{response.response.msj}}</el-tag></td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                <div class="modal-footer">
                    <button v-show="responses.length == 0" type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" @click="uploadExcel()">Importar y Guardar</button>
                    <button v-show="responses.length == 0" type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancelar</button>
                    <button v-show="responses.length > 0" @click="responses = []" type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Aceptar</button>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/es';
Vue.use(ElementUI, { locale });

export default {
    components:{},
    props:['id','loadingtext'],
    data() {
        return {
            formData: new FormData(),
            loadingModal: false,
            responses:[]
        }
    },
    mounted() {
        
    },
    methods: {
        uploadExcel()
        {
            this.loadingModal = true;

            this.formData.append('excel', $('#excelAccounts').prop('files')[0]);

            axios.post('registerAccountsFromExcel', this.formData,
            {headers: {'Content-Type': 'multipart/form-data'}}).then(res =>{
                this.responses = res.data;
                this.loadingModal = false;
            });	
        }

    },
    watch: {
        
    }
}
</script>