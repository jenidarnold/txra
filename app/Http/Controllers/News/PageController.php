<?php namespace App\Http\Controllers\News;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Post;
use App\User;
use App\PostCategory;

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
        $categories = \DB::table('post_categories')->lists('category', 'id');

        $author = new User;

        if(\Auth::check()){
            $author = \Auth::user();        
        } else {
            \Session::flash('message', 'You must be logged in to create Post!');
            return \Redirect::to('news/');
        }


        return View('blog.create', compact('categories' ,'author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        //dd($_FILES["images"]); //->getClientOriginalName());

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
        //
        //
        //
            // store
            $post = new Post;
            $post->title       = \Input::get('title');
            $post->content     = \Input::get('editor1');
            $post->author_id   = \Input::get('author_id');

            $post->image       = '0_'. $_FILES["images"]["name"][0];            

            $post->public      = 1;
            $post->save();

            $category_id = \Input::get('category');

            \DB::table('post_category')->insert(
                [
                    'post_id'   => $post->id,
                    'category_id' =>$category_id 
                ]
            );

            // http://php.net/manual/en/features.file-upload.post-method.php
            $i = 0;
            foreach ($_FILES["images"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    
                    //append display order numner
                    $order = $i.'_';
                    $name = $order . basename($_FILES["images"]["name"][$key]);

                    if (!file_exists("images/blog/$post->id")) {
                        mkdir("images/blog/$post->id", 0777, true);
                    }
                    move_uploaded_file($tmp_name, "images/blog/$post->id/$name");
                    $i++;
                }
            }

            // redirect
            \Session::flash('message', 'Successfully created Post!');
            return \Redirect::to('news/');
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
        $post = Post::find($id);
        
        $categories = \DB::table('post_categories')->lists('category', 'id');

        // show the edit form and pass the post
        return View('blog.edit',compact('post', 'categories'));
    }
}
