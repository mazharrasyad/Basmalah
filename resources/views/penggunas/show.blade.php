@if(Auth::user()->role_id == 1)
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data User
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('penggunas.show_fields')
                    <a href="{!! route('penggunas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif
