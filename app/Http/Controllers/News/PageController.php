<?php namespace App\Http\Controllers\News;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\News;
use App\BlogCategory;

class PageController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = \DB::table('blog_categories')->lists('category', 'id');

        return View('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        //$rules = array(
        //    'name'       => 'required',
        //    'email'      => 'required|email',
        //    'nerd_level' => 'required|numeric'
        //);
        //$validator = Validator::make(Input::all(), $rules);

        // process the login
        //if ($validator->fails()) {
        //    return Redirect::to('news/create')
        //        ->withErrors($validator)
        //        ->withInput(Input::except('password'));
        //} else {
            // store
            $post = new News;
            $post->title       = Input::get('title');
            $post->content      = Input::get('content');
            $post->author      = Input::get('author');
            //$post->category = Input::get('category');
            $post->save();

            // redirect
            Session::flash('message', 'Successfully created Post!');
            return Redirect::to('blog/index');
        //}
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the post
        $post = News::find($id);
        
        $categories = \DB::table('blog_categories')->lists('category', 'id');

        // show the edit form and pass the post
        return View('blog.edit',compact('post', 'categories'));
    }
}
