@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Data Pengajar</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @auth
                @include('pengajars.table')
              @else
                @include('pengajars.table_pengunjung')
              @endauth
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
