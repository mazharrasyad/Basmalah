@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Dewan Kemakmuran Masjid
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  @auth
                    @include('dkms.show_fields')
                  @else
                    @include('dkms.show_fields_pengunjung')
                  @endauth
                    <a href="{!! route('dkms.index') !!}" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
