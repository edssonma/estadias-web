<template>
    <div>
            <div class="br-sideleft overflow-y-auto">
                <label class="sidebar-label pd-x-15 mg-t-20">Menú</label>
                <div class="br-sideleft-menu">
                <a href="home" :class="[ activeitem == 'inicio' ? 'active' : '' , 'br-menu-link']">
                    <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Inicio</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="databasesView" :class="[ activeitem == 'databases' ? 'active' : '' , 'br-menu-link']">
                    <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-database tx-22"></i>
                    <span class="menu-item-label">Bases de datos</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <a href="#"  :class="[ activeitem == 'cuentas' ? 'active' : '' , 'br-menu-link']">
                    <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-person-add tx-24"></i>
                    <span class="menu-item-label">Cuentas</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="createAccountView" class="nav-link">Crear</a></li>
                    <li class="nav-item"><a href="deleteAccountView" class="nav-link">Eliminar</a></li>
                </ul>
                </div><!-- br-sideleft-menu -->
                <!------------------------------------------------------------------------------------------------------------------------------>

                <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Información opcional</label>

                <div class="info-list">
                <div class="d-flex align-items-center justify-content-between pd-x-15">
                    <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Uso de memoria</p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
                    </div>
                    <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
                </div><!-- d-flex -->

                <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
                    <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Tráfico</p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
                    </div>
                    <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
                </div><!-- d-flex -->
                </div><!-- info-lst -->
                <!------------------------------------------------------------------------------------------------------------------------------>
                <br>
            </div><!-- br-sideleft -->
            <!-- ########## END: LEFT PANEL ########## -->
    </div>
</template>
<script>
export default {
    components:{},
    props:["activeitem"],
    data() {
        return {
            
        }
    },
    mounted() {
        
    },
    methods: {
        
    },
    watch: {
        
    },
    delimiters:['${','}']
}
</script>