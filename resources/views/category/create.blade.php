
@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Blog <small>[Agregar Categoria]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
  {!! Form::open(array('url'=>'http://localhost:8000/category','method'=>'POST')) !!}  
                    
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            
                      <div class="form-group">
                        <label for="name">Nombre Categoria:</label>

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
                
                 <div class="form-group">
                        <label for="slug">Slug:</label>

                        {!!
                            Form::text(
                                'slug',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa el slug...',
                                    'autofocus' => 'autofocus'
                                )
                            )
                        !!}
                    </div>



                    <div class="form-group">
                        <label for="description">Descripción:</label>

                        {!!
                            Form::text(
                                'description',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa una descripción...',
                                    'autofocus' => 'autofocus'
                                )
                            )
                        !!}
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