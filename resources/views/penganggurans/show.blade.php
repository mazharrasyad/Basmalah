@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Pengangguran - {{ Auth::user()->name }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  @if (Auth::user()->role_id == 1)
                       @include('penganggurans.show_fields')
                  @elseif (Auth::user()->role_id == 2)
                       @include('penganggurans.show_fields_dkm')
                  @endif
                    <a href="{!! route('penganggurans.index') !!}" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
