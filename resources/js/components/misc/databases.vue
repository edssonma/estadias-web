<template>
    <div v-loading="loading">
        <!-- <select class="form-control select2" data-placeholder="Seleccionar usuario" v-model="selectedUser" @change="searchDB()">
            <option v-for="user in users" :key="user.user" :value="user.user">{{user.user}}</option>
        </select> -->

        <table class="table table-striped mg-b-0" v-show="databases.length > 0">
                <thead>
                    <tr>
                        <th>Base de datos</th>
                        <th>Usuario</th>
                        <th>Host</th>
                    </tr>
                </thead>
                <tbody style="overflow-y:auto; max-height:50px;">
                    <tr v-for="bd in databases" :key="bd.user">
                        <td>{{bd.database}}</td>
                        <td>{{bd.user}}</td>
                        <td>{{bd.host}}</td>
                    </tr>
                </tbody>
        </table>
        <br>
         <el-alert
            v-show="databases.length == 0"
            title="No hay bases de datos"
            type="error"
            center
            show-icon>
        </el-alert>

        <button class="btn btn-dark" data-toggle="modal" data-target="#dbModal">Agregar nueva base de datos</button>

        <div id="dbModal" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <div class="row">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fas fa-database"></i> Crear nueva base de datos</h6>
                        </div>
                    </div>
                    <div class="modal-body pd-25">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
export default {
    props:[],
    data() {
        return {
            users:[],
            databases:[],
            selectedUser: null,
            loading: false,
        }
    },
    mounted() {
        this.getUsers();
        this.searchDB();
    },
    methods: {
        getUsers()
        {
            axios.get('getUsers/tics').then(response =>{
                if(response.data.status == 'OK')
                    this.users = response.data.msj;
            });
        },
        searchDB()
        {
            this.loading = true;
             axios.get('getDatabases/tics').then(response =>{
                this.value = response.data.length;
                this.databases = response.data.collection;
                this.loading = false;
            });
        }
    },
    computed: {
        
    },
    watch: {
        
    },
}
</script>