@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Banner</div>
 
                <div class="panel-body">
 
                        {!! Form::open(['route' => 'thumbnail.store', 'method' => 'POST', 'files' => 'true']) !!}
                        <div class="form-group">
                            {!! form::label('name','Nombre')!!}
                            {!! form::text('name',null,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! form::label('image','Imagen')!!}
                            {!! form::file('image',null,['class' => 'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Guardar Banner</button>
                        {!! Form::close() !!}
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
