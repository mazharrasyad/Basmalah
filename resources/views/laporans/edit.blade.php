@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Laporan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($laporan, ['route' => ['laporans.update', $laporan->id], 'method' => 'patch']) !!}

                        @include('laporans.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
