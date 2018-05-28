@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Houses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($houses, ['route' => ['backend.houses.update', $houses->id], 'method' => 'patch']) !!}

                        @include('backend.houses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection