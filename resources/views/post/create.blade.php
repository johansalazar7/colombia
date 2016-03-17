
@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Blog <small>[Agregar Noticia]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
  {!! Form::open(array('url'=>'http://localhost:8000/post','method'=>'POST', 'enctype' => 'multipart/form-data', 'files'=>true)) !!}  
                    
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            
                      <div class="form-group">
                        <label for="name">Titulo Noticia:</label>

                        {!!
                            Form::text(
                                'name',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa el nombre...',
                                    'autofocus' => 'autofocus'
                                )
                            )
                        !!}
                    </div>
<br>
                   <div class="input-field col s6">
                <span class="input-group-addon" style="width: 132px;"><font color="#C91C1C" size=5 style="position:absolute; top:10px;left:7px;"></font>Categoria de la Noticia: </span>
                {!! Form::select('category_id', $categorias, null, ['class' => 'form-control', 'id' => 'categorias','style' => 'width: 387px', 'data-value' => old('category_id')]) !!}
                </div>


                     <div class="form-group">
                     <span class="input-group-addon">Slug: </span>
                     {!! Form::text('slug', null, ['class' => 'form-control', 
                     'placeholder' => 'Digite segundo apellido']) !!}
                     </div>

                    <div class="form-group">
                        <label for="description">Descripción:</label>

                        {!!
                            Form::textarea(
                                'description',
                                null,
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