@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Berita Fak
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'dataBeritaFaks.store']) !!}

                        @include('data_berita_faks.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
