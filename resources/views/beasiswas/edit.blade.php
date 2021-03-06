@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Beasiswa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($beasiswa, ['route' => ['beasiswas.update', $beasiswa->id], 'method' => 'patch']) !!}

                        @include('beasiswas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection