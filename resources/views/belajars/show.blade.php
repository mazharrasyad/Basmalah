@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Data Belajar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @if (Auth::user()->role_id == 1)
                          @include('belajars.show_fields')
                    @else
                          @include('belajars.show_fields_belajar')
                    @endif
                    <a href="{!! route('belajars.index') !!}" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection
