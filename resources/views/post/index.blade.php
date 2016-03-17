@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-pencil"></i>
                 NOTICIAS <a href="http://localhost:8000/post/create" class="btn btn-warning"><i class="fa fa-plus-circle"></i> POST</a>
            </h1>
        </div>
        <div class="page">
            <div class="table-responsive" style="text-align:center !important;">
                <table  class="table">
                    <thead>
                    <tr class="info">
                        <th><center>Editar</center></th>
                        <th><center>Eliminar</center></th>
                        <th><center>Titulo</center></th>
                        <th><center>Descripción</center></th>
                        <th><center>Categoria</center></th>
                        <th><center>Date Create</center></th>
                        <th><center>Image</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr >
                            <td style="padding-top: 3.5%;">
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td style="padding-top: 3.5%;">
                                {!! Form::open(['route' => ['post.destroy', $post->id]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}


                            </td>
                            <td style="padding-top: 3.5%;">{{ $post->name }}</td>
                            <td style="padding-top: 3.5%;" >{{ $post->description }}</td>
                            <td style="padding-top: 3.5%;" >{{ $post->category->name }}</td>
                            <?php $date = \Carbon\Carbon::parse($post->created_at)?>
                            <td style="padding-top: 3.5%;">{{ date('l jS \of F Y h:i A',strtotime( $date))}}</td>
                            <td><img src="{{ asset('/thumbnails/'.$post->image) }}" class="mg-fluid img-thumbnail" width="150px" height="150px" alt=""></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@stop