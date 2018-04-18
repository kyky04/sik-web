@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pendaftar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pendaftar, ['route' => ['pendaftars.update', $pendaftar->id], 'method' => 'patch']) !!}

                        @include('pendaftars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection