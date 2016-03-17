
@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Blog <small>[Editar Categoria]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    <form method = 'get' action = 'http://localhost:8000/category'>
                    <button class = 'btn blue'>Categoria Index</button>
                    </form>
                    <br>
 
                {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'patch']) !!}

                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                               
                <div class="form-group">
                    <label for="name">Nombre Categoria:</label>
                    <input id="name" name = "name" type="text" class="form-control" autofocus="autofocus" value="{{$category->name}}" style="background-color: #E0DFDF;">
                </div>
                
                <br> 
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input id="slug" name = "slug" type="text" class="form-control" autofocus="autofocus" value="{{$category->slug}}" style="background-color: #E0DFDF;">
                </div>
                <br>

                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <input id="description" name = "description" type="text" class="form-control" autofocus="autofocus" value="{{$category->description}}" style="background-color: #E0DFDF;">
                </div>
                
                 <br/>
                    <div class="form-group">
                        {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                        <a href="{{ route('category.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                {!! Form::close() !!}

                </div>

            </div>
        </div>


    </div>

@stop