<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>My Laravel - Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.css"/>
    

<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="{{ asset('js/buttons.js') }}"></script>




</head>
<body>

@include('admin.partials.nav')

@include('admin.partials.message')

@yield('content')

@include('admin.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('admin/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/js/trumbowyg.min.js') }}"></script>
<script src="{{ asset('admin/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.js"></script>
<script src='{{ asset('admin/js/jquery.elevatezoom.js') }}'></script>

<script>
    $('#select').select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
    $('textarea').trumbowyg({
        duration: 1000
    });
    $('.img-thumbnail').elevateZoom({
        cursor: "crosshair",
        zoomWindowPosition: 10,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750,
        tint:true,
        tintColour:'#fff',
        tintOpacity:0.5
    });
    $('#tablePost').DataTable();
    var drEvent = $('#input-file-now').dropify();

</script>
</body>
</html>