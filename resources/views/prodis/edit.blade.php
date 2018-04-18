@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prodi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prodi, ['route' => ['prodis.update', $prodi->id], 'method' => 'patch']) !!}

                        @include('prodis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection