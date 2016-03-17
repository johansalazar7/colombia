<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Category;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CategoryController
 *
 * @author  The scaffold-interface created at 2016-03-15 09:12:16pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderBy('id','ASC')->paginate(4);
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('category.create'
                );
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

        $category = new Category();

        
        $category->name = $input['name'];

        
        $category->slug = $input['slug'];

        
        $category->description = $input['description'];

        
        
        $category->save();

        return redirect('category');
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
            return URL::to('category/'.$id);
        }

        $category = Category::findOrfail($id);
        return view('category.show',compact('category'));
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
            return URL::to('category/'. $id . '/edit');
        }

        
        $category = Category::findOrfail($id);
        return view('category.edit',compact('category'
                )
                );
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

        $category = Category::findOrfail($id);
    	
        $category->name = $input['name'];
        
        $category->slug = $input['slug'];
        
        $category->description = $input['description'];
        
        
        $category->save();

        return redirect('category');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/category/'. $id . '/delete/');

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
     	$category = Category::findOrfail($id);
     	$category->delete();
        return redirect('category');

    }

}
