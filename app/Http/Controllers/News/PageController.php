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
        $this->middleware('admin_user');
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
     * Delete a post.
     *
     * @return Response
     */
    public function delete($id)
    {
         $post = Post::find($id);
         $post->delete();

         // redirect
        \Session::flash('message', 'Successfully deleted Post');
        return \Redirect::to('news/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

            // store
            $post = new Post;
            $post->title       = \Input::get('title');
            $post->content     = \Input::get('editor1');
            $post->author_id   = \Input::get('author_id');

            $post->image       = '0_'. $_FILES["images"]["name"][0];            

            $post->public      = 0;
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
            $limit = 12; //Limit to 12 files
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
                    if ($i== $limit) {
                       break;
                    }
                }
            }

            // redirect
            \Session::flash('message', 'Successfully created Post!');
            return \Redirect::to('news/');
        //}
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function update($id)
    {

            // update
            $post = Post::find($id);
        
            $post->title       = \Input::get('title');
            $post->content     = \Input::get('editor1');
            //$post->author_id   = \Input::get('author_id');


            //$post->image       = '0_'. $_FILES["images"]["name"][0];            

            $post->public      = 1;
            $post->save();

            $category_id = \Input::get('category');

            //Delete previous category
            $pc =\DB::table('post_category')
                ->where('post_id', '=', $id )
                ->delete();

            //Insert new category
            \DB::table('post_category')->insert(
                [
                    'post_id'   => $post->id,
                    'category_id' =>$category_id 
                ]
            );

            // http://php.net/manual/en/features.file-upload.post-method.php
            $i = 0;
            $limit = 12; //Limit to 12 files
            if (isset ($_FILES["images"])) {
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
                        if ($i== $limit) {
                           break;
                        }
                    }
                }
            }

            // redirect
            \Session::flash('message', 'Successfully updated Post!');
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
        

        if (!isset($post['author'])) {
            $author = New User;
            $author->id =0;
            $author->full_name='';
            $post['author'] = $author;
        }


        $categories = \DB::table('post_categories')->lists('category', 'id');

        //dd($post->categories()->first()->id);
        // show the edit form and pass the post
        return View('blog.edit',compact('post', 'categories'));
    }

     /**
     * Publish/Unpbulish the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function publish($id, $public)
    {
        // get the post
        $post = Post::find($id);
        $post->public = $public;

        $post->save();


         // redirect
        \Session::flash('message', 'Successfully updated Post!');
        return \Redirect::to("news/post/$id/".$post->title);
    }
}
