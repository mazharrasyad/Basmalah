@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1 class="pull-left">Data Dewan Kemakmuran Masjid</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
          @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
        <div class="box-body">
                  @auth
                    @include('dkms.table')
                  @else
                    @include('dkms.table_pengunjung')
                  @endauth
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
