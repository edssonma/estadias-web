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

            <div class="br-section-wrapper">
              <div class="row">
                <div class="col-md-10 ">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Formulario de registro</h6>
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

              {{-- <div class="form-layout form-layout-6">
                <div class="row no-gutters">
                  <div class="col-5 col-sm-4">
                    Dominio:
                  </div><!-- col-4 -->
                  <div class="col-7 col-sm-8">
                    <input class="form-control" type="text" name="fullname" placeholder="Ingresar dominio">
                  </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                  <div class="col-5 col-sm-4">
                    Usuario:
                  </div><!-- col-4 -->
                  <div class="col-7 col-sm-8">
                    <input class="form-control" type="text" name="firstname" placeholder="Ingresar usuario">
                  </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Correo Electrónico:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar correo electrónico">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Contraseña:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="password" name="fullname" placeholder="Ingresar contraseña">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Package:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar package">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Inode:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar inode">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Process Limit:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar process limit">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Open Files Limit:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar open files limit">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-4">
                      Server IP:
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-8">
                      <input class="form-control" type="text" name="fullname" placeholder="Ingresar server ip">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <button 
                  class="btn btn-primary mg-b-10 text-center" 
                  style="float: right; clear: right; margin-top:30px; cursor:pointer;">
                  Crear cuenta
                </button>
                <div class="clearfix"></div>
              </div><!-- form-layout --> --}}
              
            </div>
        </div>

        <main-footer></main-footer>
  
      </div>
@endsection

@section('scripts')
@endsection