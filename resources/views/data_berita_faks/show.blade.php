@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Berita Fak
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('data_berita_faks.show_fields')
                    <a href="{!! route('dataBeritaFaks.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
