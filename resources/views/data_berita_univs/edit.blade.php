@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Berita Univ
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dataBeritaUniv, ['route' => ['dataBeritaUnivs.update', $dataBeritaUniv->id], 'method' => 'patch']) !!}

                        @include('data_berita_univs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection