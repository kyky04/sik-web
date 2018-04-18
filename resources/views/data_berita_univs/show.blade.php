@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Berita Univ
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('data_berita_univs.show_fields')
                    <a href="{!! route('dataBeritaUnivs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
