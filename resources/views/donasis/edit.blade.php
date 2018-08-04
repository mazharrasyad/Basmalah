@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Donasi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($donasi, ['route' => ['donasis.update', $donasi->id], 'method' => 'patch']) !!}

                        @include('donasis.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
