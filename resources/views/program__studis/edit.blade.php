@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Program  Studi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($programStudi, ['route' => ['programStudis.update', $programStudi->id], 'method' => 'patch']) !!}

                        @include('program__studis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection