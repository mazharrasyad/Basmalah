@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Pengangguran - {{ Auth::user()->name }}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pengangguran, ['route' => ['penganggurans.update', $pengangguran->id], 'method' => 'patch']) !!}
                   @if (Auth::user()->role_id == 1)
                        @include('penganggurans.fields_edit')
                   @elseif (Auth::user()->role_id == 2)
                        @include('penganggurans.fields_dkm')
                   @endif
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
