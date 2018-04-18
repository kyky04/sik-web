@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Berita Jur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dataBeritaJur, ['route' => ['dataBeritaJurs.update', $dataBeritaJur->id], 'method' => 'patch']) !!}

                        @include('data_berita_jurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection