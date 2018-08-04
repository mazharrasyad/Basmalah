@if(Auth::user()->role_id == 1)
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pengguna, ['route' => ['penggunas.update', $pengguna->id], 'method' => 'patch']) !!}

                        @include('penggunas.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@endif
