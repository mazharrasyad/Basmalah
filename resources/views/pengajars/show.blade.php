@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Pengajar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  @auth
                    @include('pengajars.show_fields')
                  @else
                    @include('pengajars.show_fields_pengunjung')
                  @endauth
                    <a href="{!! route('pengajars.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
