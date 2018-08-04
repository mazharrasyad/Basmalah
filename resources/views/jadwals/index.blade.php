@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Data Jadwal - {{ Auth::user()->name }}</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if(Auth::user()->role_id == 1)
                  @include('jadwals.table')
                @elseif(Auth::user()->role_id == 2)
                  @include('jadwals.table_dkm')
                @else
                  @include('jadwals.table_pengajar')
                @endif
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
