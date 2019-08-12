@extends('content.home')

@section('title', 'Crear cuenta')

@section('menu')
<main-menu activeitem="cuentas"></main-menu>
@endsection

@section('main')
     <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Cuentas</a>
            <span class="breadcrumb-item active">Crear cuenta</span>
          </nav>
        </div>
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Crear cuenta</h4>
          <p class="mg-b-0">Puede crear una cuenta manualmente ó importar un archivo excel para crear multiples cuentas.</p>
        </div>

        <div class="br-pagebody">

            <el-tabs type="border-card">
            <!-- CUENTA DE ALUMNO ----------------------------------------------------------------------------->  
                <el-tab-pane label="Cuenta de alumno">
                  <div class="row">
                    <div class="col-md-10 ">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Formulario de registro para cuenta de alumno</h6>
                        <p class="mg-b-30 tx-gray-600">Llenar todos los campos solicitados.</p>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-teal mg-b-10" data-toggle="modal" data-target="#excelModal"><i class="fas fa-file-upload"></i> Importar excel</button>
                    </div>
                  </div>
                  
                  <register-form
                    fieldsname="newAccountFields"
                    registerbuttontext="Crear cuenta"
                    registerurl="registerNewAccount"
                    loadingtext="Registrando cuenta...">
                  </register-form>
      
                  <excel-accounts-modal
                  id="excelModal"
                  loadingtext="Registrando cuentas...">
                  </excel-accounts-modal>
                </el-tab-pane>
            <!-- CUENTA DEL SERVIDOR ----------------------------------------------------------------------------->  

            @if (Auth::user()->role_id == 1)               
              <el-tab-pane label="Cuenta del servidor">
                  <div class="row">
                      <div class="col-md-10 ">
                          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Formulario de registro para cuenta del servidor</h6>
                          <p class="mg-b-30 tx-gray-600">Llenar todos los campos solicitados.</p>
                      </div>
                    </div>
                    
                    <register-form
                      fieldsname="newServerAccountFields"
                      registerbuttontext="Crear cuenta"
                      registerurl="registerNewServerAccount"
                      loadingtext="Registrando cuenta...">
                    </register-form>
              </el-tab-pane>
            @endif
            </el-tabs>

              
           
        </div>

        <main-footer></main-footer>
  
      </div>
@endsection

@section('scripts')
@endsection