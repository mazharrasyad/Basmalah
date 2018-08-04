@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Belajar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($belajar, ['route' => ['belajars.update', $belajar->id], 'method' => 'patch']) !!}

                   @if (Auth::user()->role_id == 1)
                         @include('belajars.fields_edit')
                   @elseif (Auth::user()->role_id == 3)
                         @include('belajars.fields_pengajar')
                   @endif

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
