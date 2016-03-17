<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <p class="navbar-text"><a style="text-decoration: none; color: dimgray" href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a> </p>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Users</a></li>
                 <li><a href="{{ url('category') }}">Categorias</a></li>
                <li><a href="{{ url('post') }}">Noticias</a></li>
                <li><a href="#">Banners</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"></i>  <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="">Finalizar sesi&oacute;n</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>