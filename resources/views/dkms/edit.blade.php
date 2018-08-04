@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Dewan Kemakmuran Masjid
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dkm, ['route' => ['dkms.update', $dkm->id], 'method' => 'patch']) !!}

                        @include('dkms.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
