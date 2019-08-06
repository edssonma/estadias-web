@extends('content.home')

@section('title', 'Eliminar cuenta')

@section('menu')
<main-menu activeitem="cuentas"></main-menu>
@endsection

@section('main')
     <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Cuentas</a>
            <span class="breadcrumb-item active">Eliminar cuenta</span>
          </nav>
        </div>
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Eliminar cuenta</h4>
          <p class="mg-b-0">Eliminar cuenta por nombre de usuario.</p>
        </div>
        <div class="br-pagebody">

          <delete-account></delete-account>

        </div>

        <main-footer></main-footer>
  
      </div>
@endsection

@section('scripts')
@endsection