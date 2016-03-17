<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Thumbnail;

class ThumbnailController extends Controller
{



public function create()
{
    return view('thumbnailForm');
}

public function store(){
   $file = Input::file('image');
   //Creamos una instancia de la libreria instalada   
   $image = \Image::make(\Input::file('image'));
   //Ruta donde queremos guardar las imagenes
   $path = public_path().'/thumbnails/';

   // Guardar Original
   $image->save($path.$file->getClientOriginalName());
   // Cambiar de tamaño
   $image->resize(240,200);
   // Guardar
   $image->save($path.'thumb_'.$file->getClientOriginalName());
   
   //Guardamos nombre y nombreOriginal en la BD
   $thumbnail = new Thumbnail();
   $thumbnail->name = Input::get('name');
   $thumbnail->image = $file->getClientOriginalName();
   $thumbnail->save();
   
   return view('thumbnailForm');
}
}
