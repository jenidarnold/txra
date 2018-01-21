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
        //$this->middleware('auth');
        $this->middleware('admin_user',  ['except' => ['create', 'store', 'update']]);
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
            $message = 'You must be logged in to submit an post.';
            return \Redirect::to('news/')
                ->with('alert-danger', $message)
                ;
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

            if ($_FILES["images"]["name"][0] != '') {
                $post->image   = '0_'. $_FILES["images"]["name"][0];            
            }else {
                $post->image   = "";
            }

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

            if (!file_exists("images/blog/$post->id")) {
                mkdir("images/blog/$post->id", 0777, true);
            }else {
                $post->image   = "";
            }

            if ($_FILES["images"]["name"][0] != '') {
                $post->image   = '0_'. $_FILES["images"]["name"][0];            
            }

            foreach ($_FILES["images"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    
                    //append display order numner
                    $order = $i.'_';
                    $name = $order . basename($_FILES["images"]["name"][$key]);
                   
                    move_uploaded_file($tmp_name, "images/blog/$post->id/$name");
                    $i++;
                    if ($i== $limit) {
                       break;
                    }
                }
            }


            $txra = new User;
            $txra->email = env('MAIL_TO_EMAIL'); 
            $txra->full_name = env('MAIL_TO_NAME');

            $subject = "TXRA: Article Submission";

            $author = User::find( $post->author_id);
            $post->author = $author;

            // Send to TXRA
            \Mail::send(
                        'emails.blog.send', 
                        ['subject' => $subject, 'post' => $post ], 
                        function ($m) use ($post, $txra, $subject)
                            {
                                $m->from(env('MAIL_FROM_EMAIL'), $post->author->full_name );
                                $m->to($txra->email, $txra->full_name)->subject($subject);
                            }
                        );

            //Reply Article Sent
            \Mail::send(
                        'emails.blog.reply', 
                        ['post' => $post], 
                        function($m) use ($post, $txra) 
                            {
                                $subject = 'Thank you for your article Submission!';
                                $m->from(env('MAIL_FROM_EMAIL'), $txra->full_name);
                                $m->to($post->author->email, $post->author->full_name)->subject($subject);
                            }
                        );

 

            // redirect
            $message = 'Thank you for your article. A confirmation has been emailed to you at the address we have on file for your account. We will contact you within 7 days with our decision to publish.';
            return \Redirect::to('news/')
                ->with('alert-success', $message)
                ;
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
            $post->author_id   = \Input::get('author_id');


            //Check that current user is Admni or Author
            if(\Auth::user()->id != 1) {
                if (!\Auth::check() || \Auth::user()->id != $post->author_id) {                         
                    abort(401, 'Unauthorized.');       
                }   
            }

            //$post->image       = '0_'. $_FILES["images"]["name"][0];            

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

            //todo get current # of images in folder
            //$i=count-1;
            $i = 0;
            $limit = 12; //Limit to 12 files
            if (isset ($_FILES["images"])) {
                foreach ($_FILES["images"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["images"]["tmp_name"][$key];
                        // basename() may prevent filesystem traversal attacks;
                        // further validation/sanitation of the filename may be appropriate
                        
                        //append display order numbner
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
            return \Redirect::to("news/post/$post->id/$post->title");
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
