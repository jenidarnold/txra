<?php namespace App\Http\Controllers\News;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Post;
use App\PostCategory;

class BlogController extends BaseController {


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
	 * Display a listing of the resource.
	 * GET /blog
	 *
	 * @return Response
	 */
	public function getIndex()
	{
            $mostRecommended = Post::mostRecommended();
            $last            = Post::lastPosts();
            $last = $last->paginate(5);

            $categories = PostCategory::all();

            return View('blog/index',
                array(
                    'title'=>"News",
                    'mostRecommended'=>$mostRecommended,
                    'last'=>$last,
                    'categories' => $categories
                    )
                );
	}

    /**
     * Display a listing of the resource.
     * GET /blog
     *
     * @return Response
     */
    public function getCategory($id, $category)
    {
            $mostRecommended = Post::mostRecommended();
            $last            = Post::lastPosts();
      
            $cat = new PostCategory;
            //Note: not filtered by
            $last = $cat->find($id)->posts()
                ->orderBy('created_at','desc')
                ->where('public', 1)
                ;

            $categories = PostCategory::all();

            $last = $last->paginate(3);

            return View('blog/index',
                array(
                    'title'=>"News",
                    'mostRecommended'=>$mostRecommended,
                    'last'=>$last,
                    'categories' => $categories,
                    'category' => $category
                    )
                );
    }


    public static function seoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
	/**
	 * Display the specified resource.
	 * GET /blog/{id}/title
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getPost($id)
	{

            $mostRecommended = Post::mostRecommended();
            $last            = Post::lastPosts();
            $categories = PostCategory::all();

            $post = Post::find($id);

            if($post == NULL){
               App::abort(404);
            }
            return View('blog/post',
                array(
                    'title'=>$post['title'],
                    'post'=>$post, 
                    'mostRecommended'=>$mostRecommended,
                    'last'=>$last,
                    'categories' => $categories
                    )   
                );
	}
        
    /**
     * Add the point to  
     * 
     * 
     */ 
    public function getShare($id,$social)
    {
        $url = '';
        $post = News::find($id);
        if($post == NULL){
            App::abort(404);
        }

        // add social point if it is not robot
        if (!isset($_SERVER['HTTP_USER_AGENT']) && !preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
            $post->socialPoint ++;
            $post->save();
        }
        switch ($social){
            case 'twitter' :
                $url  = 'https://twitter.com/home?status=';
                $url .= $post['title'] . ' ' . $post->getUrl();
            break;
            case 'facebook' :
                $url  = 'https://www.facebook.com/sharer/sharer.php?u=';
                $url .=  $post->getUrl();
            break;
            case 'googlePlus' :
                $url  = 'https://plus.google.com/share?url=';
                $url .= $post->getUrl();
            break;
            case 'linkedIn' :
                $url  = 'https://www.linkedin.com/shareArticle?mini=true&';
                $url .= 'url='.$post->getUrl().'&title='.$post['title'].'&summary=&source=';
            break;          
        }
        return \Redirect::to($url);
    }

}