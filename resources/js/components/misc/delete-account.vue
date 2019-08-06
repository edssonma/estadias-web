<template>
    <div class="br-section-wrapper" v-loading="loadingForm" element-loading-text="Eliminando cuenta...">
        <div class="row">
        <div class="col-md-10 ">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Formulario</h6>
            <p class="mg-b-30 tx-gray-600">Si son varios usuarios a eliminar puede separarlos por comas, ejemplo: juan,misael,alejandra...</p>
        </div>
        </div>

        <div class="form-layout form-layout-6">
        <div class="row no-gutters">
            <div class="col-5 col-sm-4">
            Usuario(s):
            </div>
            <div class="col-7 col-sm-8">
                <input class="form-control" type="text" placeholder="Ingresar nombre de usuario(s)" v-model="user">
            </div>
        </div>
        <!-- <div class="row no-gutters">
            <div class="col-5 col-sm-4">
            Correo electrónico:
            </div>
            <div class="col-7 col-sm-8">
                <input class="form-control" type="text" placeholder="Ingresar correo electrónico" v-model="email">
            </div>
        </div> -->
        <button 
            class="btn btn-primary mg-b-10 text-center" 
            style="float: right; clear: right; margin-top:30px; cursor:pointer;"
            @click="deleteAccount()">
            Eliminar cuenta(s)
        </button>
        <div class="clearfix"></div>
    </div>
</div>
</template>
<script>
export default {
    components:{},
    props:[],
    data() {
        return {
            user: null,
            email: null,
            loadingForm: false,
        }
        },
        mounted() {
        
        },
        methods: {
            deleteAccount()
            {
            this.loadingForm = true;
            axios.post('deleteAccount',{'users': this.user}).then(response =>{
                 if(response.data != null)
                this.$message({
                    message: 'Usuario(s) eliminado(s) con éxito.',
                    type: 'success'
                });
                else
                this.$message.error(response.data.msj)

                
                this.loadingForm = false;
            });
            }
        },
}
</script>