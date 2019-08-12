<template>
    <div v-loading="loading">

        <table class="table table-striped mg-b-0" v-show="users">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Host</th>
                    </tr>
                </thead>
                <tbody style="overflow-y:auto; max-height:50px;">
                    <tr v-for="bd in users" :key="bd.user">
                        <td>{{bd.user}}</td>
                        <td>{{bd.host}}</td>
                    </tr>
                </tbody>
        </table>
        <br>
         <el-alert
            v-show="!users"
            title="No hay usuarios"
            type="error"
            center
            show-icon>
        </el-alert>

        <button class="btn btn-dark">Agregar nuevo usuario</button>


    </div>
</template>
<script>
export default {
    props:[],
    data() {
        return {
            users:[],
            loading: false,
        }
    },
    mounted() {
        this.getUsers();
    },
    methods: {
        getUsers()
        {
            axios.get('getUsers/tics').then(response =>{
                if(response.data.status == 'OK')
                    this.users = response.data.msj;
            });
        },
    },
    computed: {
        
    },
    watch: {
        
    },
}
</script>