@extends('layouts.news')

@section('body')
    @if ($post->image_count() > 1)
        <!-- OWL SLIDER -->
        <div style="max-height:200px" class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": {{$post->image_count()}}, "autoPlay": 6000, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>

            @foreach(new \DirectoryIterator("images/blog/$post->id") as $fileinfo)
                @if (!$fileinfo->isDot())
                    <div>
                        <img class="img-responsive"  style="max-height:200px" src="{{ asset($fileinfo->getPathname()) }}" alt="">
                    </div>
                @endif
            @endforeach                             
        </div>
        <!-- /OWL SLIDER -->
    @else
        <figure class="margin-bottom-20 ">
            <img class="thumbnail img-responsive1"  style="max-height:200px" src="{{asset('images/blog/'.$post['id'].'/'.$post['image'])}}" alt="{{$post['title']}} " >
        </figure>
    @endif

    
    <h1 class="blog-post-title" style="color:{{$post['color']}}">{{$post['title']}}</h1>   
    <ul class="blog-post-info list-inline">
            <li>
                <a href="#">
                    <i class="fa fa-clock-o"></i> 
                    <span class="font-lato">{{$post['created_at']}}</span>
                </a>
            </li>
            <!--li>
                <a href="#">
                    <i class="fa fa-comment-o"></i> 
                    <span class="font-lato">28 Comments</span>
                </a>
            </li-->
            <li>
                <i class="fa fa-folder-open-o"></i> 
                @foreach($post->categories as $c)
                    <a class="category" href="{{ route('news.category', array('id' => $c->id, 'category' => $c->category))}}">
                        <span class="font-lato">{{ $c->category}}</span>
                    </a>
                @endforeach
            </li>
            <li>
                <a href="{{ route('members.show', array('id' => $post['author']->id))}}">
                    <i class="fa fa-user"></i> 
                    <span class="font-lato">{{$post['author']->full_name}}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-share-alt"></i> 
                    <span class="font-lato">{{$post['socialPoint']}} shared</span>
                </a>
            </li>
             <li>
                <a href="{{ route('news.edit', array('id' => $post['id'], 'title' => $post['title']))}}">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>


        <!-- article content -->
        <p class="dropcap">{!! $post['content'] !!}</p>

       {{--  <section class="related">
            <p>If you enjoyed this post, share it on social networks :</p>
            <p>  <a target="_blank" href="{{ '/news/share/'. $post['id']}}/facebook"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                <a target="_blank" href="{{ '/news/share/'. $post['id']}}/twitter"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                <a target="_blank" href="{{ '/news/share/'. $post['id']}}/googlePlus"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                <a target="_blank" href="{{ Config::get('app.url')  .'/news/share/'. $post['id']}}/linkedIn"><i id="social" class="fa fa-linkedin-square fa-3x social-gp"></i></a>
            </p>
            <p class="post-button">

                @if($post->nextPost())
                <a class="pull-right btn btn-default" href="{{$post->nextPost()->getUrl()}}">Next : {{$post->nextPost()['title']}}

                    <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                @endif

                @if($post->previousPost())
                <a class="pull-left btn btn-default" href="{{$post->previousPost()->getUrl()}}">Previous : {{$post->previousPost()['title']}}
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                </a>
                @endif
            </p>
        </section>
 --}}
</div><!-- /news -->





{!! Html::script('js/classie.js') !!}
<script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/0.4.3/mobile-detect.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.header').css('height',$(window).height());
</script>


<!-- Include required JS files -->
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shCore.js")}}"></script>
<!--
    At least one brush, here we choose JS. You need to include a brush for every 
    language you want to highlight
-->

<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shAutoloader.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushJScript.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushCss.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushPhp.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushXml.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushPlain.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushSql.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shBrushBash.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/news/libs/syntaxhighlighter/scripts/shLegacy.js")}}"></script>
 

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>

@stop