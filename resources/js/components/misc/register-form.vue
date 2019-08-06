<template>
    <div class="form-layout form-layout-6" v-loading="loadingForm" :element-loading-text="loadingtext">
        <div class="row no-gutters" v-for="field in fields" :key="field.field.name">
            <div class="col-5 col-sm-4">
                {{field.field.name}}
            </div>
            <div class="col-7 col-sm-8">
                <input 
                    class="form-control" 
                    :type="field.type"  
                    :placeholder="field.placeholder" 
                    v-model="field.field.value">
            </div>
        </div>                  
        <button 
            class="btn btn-primary mg-b-10 text-center" 
            style="float: right; clear: right; margin-top:30px; cursor:pointer;"
            @click="register()">
            {{registerbuttontext}}
        </button>
        <div class="clearfix"></div>
    </div>
</template>
<script>
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/es';
Vue.use(ElementUI, { locale });

//--------------------------------------------------------------------->
import newAccountFields from "../../fields/newAccount.js";
//Importar aqui nuevos campos para otros tipos de formulario de registro

export default {
    components:{},
    props:
    [
        "fieldsname",
        "registerurl",
        "registerbuttontext",
        "loadingtext"
    ],
    data() {
        return {
            fields:[],
            data:{},
            loadingForm: false,
        }   
    },
    mounted() {
        switch (this.fieldsname) {
            case 'newAccountFields':
                this.fields = newAccountFields;
                break;
            //Añadir otros cases para otros tipos de formulario de registro
        }
    },
    methods: {
        register()
        {   
            this.loadingForm = true;

            this.fields.forEach(element =>{
                this.data[element.field.name] = element.field.value;
            });

            axios.post(this.registerurl,{'data': this.data}).then(response =>{
                if(response.data.status == 'OK')
                this.$message({
                    message: 'Usuario creado con éxito.',
                    type: 'success'
                });
                else
                this.$message.error(response.data.msj)
                this.loadingForm = false;
            });
        }
    },
    watch: {
        
    }
}
</script>