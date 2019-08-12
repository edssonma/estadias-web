@extends('content.home')

@section('title', 'Crear cuenta')

@section('menu')
<main-menu activeitem="databases"></main-menu>
@endsection

@section('main')
     <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Bases de datos</a>
            <span class="breadcrumb-item active">Administrar bases de datos</span>
          </nav>
        </div>
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Administrar bases de datos</h4>
          <p class="mg-b-0">Panel administrador para las bases de datos del servidor.</p>
        </div>

        <div class="br-pagebody">

            <el-tabs type="border-card">
                <el-tab-pane label="Bases de datos">
                        <databases-module></databases-module>
                </el-tab-pane>
              <el-tab-pane label="Usuarios">
                       <db-users></db-users> 
              </el-tab-pane>    
            </el-tabs>

           
        </div>

        <main-footer></main-footer>
  
      </div>
@endsection

@section('scripts')
@endsection