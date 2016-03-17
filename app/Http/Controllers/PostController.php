<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image;
use File;
use Input;
use Validator;
use Redirect;
use Session;


/**
 * Class PostController
 *
 * @author  The scaffold-interface created at 2016-03-15 09:16:29pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('post.index')->with('posts', $posts)->with('categories', $categories);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::lists('name', 'id');
         return view('post.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        
            $input = Request::except('_token');
            $post = new Post();
 
  if(Input::file())
        {
  
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('thumbnails/' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $post->image = $filename;
            $post->name = $input['name'];
            $post->slug = $input['slug'];
            $post->description = $input['description'];
            $post->category_id = $input['category_id'];
            $post->save();
            return redirect('post');

        }
   }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('post/'.$id);
        }

        $post = Post::findOrfail($id);
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {


        if(Request::ajax())
        {
            return URL::to('post/'. $id . '/edit');
        }

        
        $post = Post::findOrfail($id);
        $post->category;
        $categorias = Category::lists('name', 'id');
        return view('post.edit')->with('post', $post)->with('categorias', $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id)
    {


        $input = Request::except('_token');

        $post = Post::findOrfail($id);
        
        $post->name = $input['name'];
        
        $post->slug = $input['slug'];
        
        $post->description = $input['description'];

        
         if(Input::file())
        {
  
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('thumbnails/' . $filename);
 
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $post->image = $filename;
         
         
         $post->category_id = $input['category_id'];

        
        $post->save();

        return redirect('post');
    }
 }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/post/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$post = Post::findOrfail($id);
     	$post->delete();
        return redirect('post');

    }

}
