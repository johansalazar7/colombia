@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                 
                <i class="fa fa-pencil"></i>
                CATEGORIAS <br>
                <a href="http://localhost:8000/category/create" class="button button-3d-highlight button-rounded">Crear</a>
            </h1>
        </div>
        <div class="page">
            <div class="table-responsive" style="text-align:center !important;">
                <table class="table">
                    <thead>
                    <tr class="info">
                        <th><center>Editar</center></th>
                        <th><center>Eliminar</center></th>
                        <th><center>Nombre Categoria</center></th>
                        <th><center>Slug</center></th>
                        <th><center>Descripción</center></th>
                        <th><center>Date Create</center></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $value)
                        <tr >
                            <td style="padding-top: 3.5%;">
                                <a href="{{ route('category.edit', $value->id) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td style="padding-top: 3.5%;">
                                {!! Form::open(['route' => ['category.destroy', $value->id]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}


                            </td>
                            <td style="padding-top: 3.5%;">{{ $value->name }}</td>
                            <td style="padding-top: 3.5%;" >{{ $value->slug }}</td>
                            <td style="padding-top: 3.5%;" >{{ $value->description }}</td>
                            <?php $date = \Carbon\Carbon::parse($value->created_at)?>
                            <td style="padding-top: 3.5%;">{{ date('l jS \of F Y h:i A',strtotime( $date))}}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
<?php echo $categories->render(); ?>
        </div>
    </div>
@stop
