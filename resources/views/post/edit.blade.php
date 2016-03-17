
@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Blog <small>[Editar Noticia]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    <form method = 'get' action = 'http://localhost:8000/post'>
                    <button class = 'btn blue'>Noticia Index</button>
                    </form>
                    <br>
 
                {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'files'=>true]) !!}

                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                               
                <div class="form-group">
                    <label for="name">Titulo Noticia:</label>
                    <input id="name" name = "name" type="text" class="form-control" autofocus="autofocus" value="{{$post->name}}" style="background-color: #E0DFDF;">
                </div>
                
                <br> 
                   <div class="input-field col s6">
                <span class="input-group-addon" style="width: 132px;"><font color="#C91C1C" size=5 style="position:absolute; top:10px;left:7px;"></font>Categoria de la Noticia: </span>
                {!! Form::select('category_id', $categorias, $post->category->id, ['class' => 'form-control', 'id' => 'categorias','style' => 'width: 387px; background-color: #E0DFDF;', 'data-value' => old('category_id')]) !!}
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Slug:</label>
                    <input id="slug" name = "slug" type="text" class="form-control" autofocus="autofocus" value="{{$post->slug}}" style="background-color: #E0DFDF;">
                </div>
                
                   
                     <div class="form-group">
                        <label for="description">Descripción:</label>

                        {!!
                            Form::textarea(
                                'description',
                                $post->description,
                                array(
                                    'class'=>'form-control'
                                )
                            )
                        !!}
                    </div>

               
                    <div class="form-group">
                        <label for="image">Imagen:</label>
                        <label for="input-file-now">Image</label>
                        <input type="file" id="input-file-now" name="image" class="dropify" />
                    </div>



                <br/>
                    <div class="form-group">
                        {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                        <a href="{{ route('post.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                {!! Form::close() !!}

                </div>

            </div>
        </div>


    </div>

@stop