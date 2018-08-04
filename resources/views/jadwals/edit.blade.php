@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Jadwal - {{ Auth::user()->name }}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jadwal, ['route' => ['jadwals.update', $jadwal->id], 'method' => 'patch']) !!}

                        @include('jadwals.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
