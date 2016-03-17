@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> MY LARAVEL STORE - DASHBOARD</h1>
        </div>

        <h2>Bienvenido(a)  al Panel de administración  en línea.</h2><hr>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">Usuarios</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-desktop  icon-home"></i>
                    <a href="{{ route('category.index') }}" class="btn btn-warning btn-block btn-home-admin">Categorias</a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-tag  icon-home"></i>
                    <a href="{{ route('post.index') }}" class="btn btn-warning btn-block btn-home-admin">Noticias</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-picture-o  icon-home"></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">Banners</a>
                </div>
            </div>

        </div>


    </div>
    <hr>

@stop