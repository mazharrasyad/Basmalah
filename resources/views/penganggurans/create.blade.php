@if(Auth::user()->role_id == 2)
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Daftar Pengangguran
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'penganggurans.store']) !!}

                        @include('penganggurans.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@endif
