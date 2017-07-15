@extends('blog::master')

@section('body')

    <h1 class="blog-post-title" style="color:{{$post['color']}}">{{$post['title']}}</h1>   
    <ul class="blog-post-info list-inline">
            <li>
                <a href="#">
                    <i class="fa fa-clock-o"></i> 
                    <span class="font-lato">{{$post['created_at']}}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-comment-o"></i> 
                    <span class="font-lato">28 Comments</span>
                </a>
            </li>
            <li>
                <i class="fa fa-folder-open-o"></i> 

                <a class="category" href="#">
                    <span class="font-lato">Board</span>
                </a>
                <a class="category" href="#">
                    <span class="font-lato">Elections</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i> 
                    <span class="font-lato">{{$post['author']}}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-share-alt"></i> 
                    <span class="font-lato">{{$post['socialPoint']}} shared</span>
                </a>
            </li>
        </ul>
        <figure class="margin-bottom-20 ">
            <img class="img-responsive"  src="uploads/{{$post['image']}}" alt="{{$post['title']}} " >
        </figure>

        <!-- article content -->
        <p class="dropcap">{!! $post['content'] !!}</p>

    <section class="related">
        <p>If you enjoyed this post, share it on social networks :</p>
        <p>  <a target="_blank" href="{{ '/blog/share/'. $post['id']}}/facebook"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
            <a target="_blank" href="{{ '/blog/share/'. $post['id']}}/twitter"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
            <a target="_blank" href="{{ '/blog/share/'. $post['id']}}/googlePlus"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
            <a target="_blank" href="{{ Config::get('app.url')  .'/blog/share/'. $post['id']}}/linkedIn"><i id="social" class="fa fa-linkedin-square fa-3x social-gp"></i></a>
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
    <section class="content">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '{{\Config::get('blog.disqus')}}'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
    </section>


</div><!-- /blog -->





{!! Html::script('js/classie.js') !!}
<script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/0.4.3/mobile-detect.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.header').css('height',$(window).height());
</script>


<!-- Include required JS files -->
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shCore.js")}}"></script>
<!--
    At least one brush, here we choose JS. You need to include a brush for every 
    language you want to highlight
-->

<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shAutoloader.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushJScript.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushCss.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushPhp.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushXml.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushPlain.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushSql.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shBrushBash.js")}}"></script>
<script type="text/javascript" src="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/scripts/shLegacy.js")}}"></script>
 

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>

@stop