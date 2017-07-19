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
            $post = new News;
            $post->title       = \Input::get('title');
            $post->content     = \Input::get('editor1');
            $post->author      = \Input::get('author');
            //$post->image       = \Input::get('image');
            $post->image       = $_FILES["images"]["name"][0];
            $post->public      = 0;
            $post->save();

            $category_id = \Input::get('category');

            \DB::table('blog_category')->insert(
                [
                    'blog_id'   => $post->id,
                    'category_id' =>$category_id 
                ]
            );

            // TODO Save images 
            foreach ($_FILES["images"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    $name = basename($_FILES["images"]["name"][$key]);
                    move_uploaded_file($tmp_name, "data/$name");
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
        $post = News::find($id);
        
        $categories = \DB::table('blog_categories')->lists('category', 'id');

        // show the edit form and pass the post
        return View('blog.edit',compact('post', 'categories'));
    }
}
