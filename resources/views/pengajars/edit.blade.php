@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Pengajar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pengajar, ['route' => ['pengajars.update', $pengajar->id], 'method' => 'patch']) !!}

                        @include('pengajars.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
