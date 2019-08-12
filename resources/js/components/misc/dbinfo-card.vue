<template>
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0" style="cursor:pointer;">
        <div :class="[color , 'rounded overflow-hidden']" data-toggle="modal" data-target="#dbModal">
            <div class="pd-25 d-flex align-items-center">
                    <i :class="[icon , 'tx-60 lh-0 tx-white op-7']"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">{{title}}</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{value}}</p>
                    <span class="tx-11 tx-roboto tx-white-6">{{aditionalinformation}}</span>
                </div>
            </div>
        </div>


        <div id="dbModal" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <div class="row">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><i class="fas fa-database"></i> Bases de datos</h6>
                        </div>
                    </div>
                    <div class="modal-body pd-25">
                        
                        <table class="table table-striped mg-b-0" v-show="collection.length > 0">
                                <thead>
                                    <tr>
                                        <th>Base de datos</th>
                                        <th>Usuario</th>
                                        <th>Host</th>
                                    </tr>
                                </thead>
                                <tbody style="overflow-y:auto; max-height:50px;">
                                    <tr v-for="bd in collection" :key="bd.user">
                                        <td>{{bd.database}}</td>
                                        <td>{{bd.user}}</td>
                                        <td>{{bd.host}}</td>
                                    </tr>
                                </tbody>
                        </table>
                        <br>
                            <button class="btn btn-dark float-right" style="cursor:pointer;" @click="goToCreate()">
                                <i class="fas fa-plus"></i>
                            </button>
                         <div class="clearfix"></div>
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
    props:[
        'color',
        'icon',
        'title',
        'aditionalinformation',
        'url'
        ],
    data() {
        return {
            value: null,
            collection:[],
            createNew: false,
        }
    },
    mounted() {
        this.getInfo();
    },
    methods: {
        getInfo()
        {
            axios.get(this.url).then(response =>{
                this.value = response.data.length;
                this.collection = response.data.collection;
            });
        },
        goToCreate()
        {
            location.href = 'databasesView';
        }
    },
    watch: {
        
    },
}
</script>