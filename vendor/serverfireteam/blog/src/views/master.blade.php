
@extends('layouts.app')
@section('head')


  	{!! Html::style('packages/serverfireteam/blog/css/styles.css') !!}
    <!-- Include *at least* the core style and default theme -->
	<link href="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/styles/shCore.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{asset("packages/serverfireteam/blog/libs/syntaxhighlighter/styles/shThemeDefault.css")}}" rel="stylesheet" type="text/css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
@stop
@section('content')
  <section class="page-header page-header-xs">        
        <div class="container">
            <h1>TXRA NEWS</h1>                   
        </div>
    </section>

    <!-- -->
    <section>
        <div class="container">

            <!--h3 class="text-muted">{!! Html::link('/blog',\Config::get('blog.title')) !!}</h3-->
            <div class="row">

                <!-- LEFT -->
                <div class="col-md-3 col-sm-3">

                    <!-- INLINE SEARCH -->
                    <div class="inline-search clearfix margin-bottom-30">
                        <form action="" method="get" class="widget_search">
                            <input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- /INLINE SEARCH -->

                    <hr />

                    <!-- side navigation -->
                    <div class="side-nav margin-bottom-60 margin-top-30">

                        <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                            <h4>CATEGORIES</h4>
                        </div>
                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> MEDIA</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> JUNIORS</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> NEW</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(16)</span> RULES</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> TOURNAMENTS</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(1)</span> UNCATEGORIZED</a></li>

                        </ul>
                        <!-- /side navigation -->

                    
                    </div>


                    <!-- JUSTIFIED TAB -->
                    <div class="tabs nomargin-top hidden-xs margin-bottom-60">

                        <!-- tabs -->
                        <ul class="nav nav-tabs nav-bottom-border nav-justified">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab">
                                    Popular
                                </a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">
                                    Recent
                                </a>
                            </li>
                        </ul>

                        <!-- tabs content -->
                        <div class="tab-content margin-bottom-60 margin-top-30">

                            <!-- POPULAR -->
                            <div id="tab_1" class="tab-pane active">

                                <div class="row tab-post"><!-- post -->
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <a href="{{$mostRecommended->getUrl()}}">
                                            <img src="uploads/{{$mostRecommended['image']}}" class="img-responsive img-rounded col-xs-12 no-padding" alt="{{$mostRecommended['title']}}">
                                        </a>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <a href="{{$mostRecommended->getUrl()}}">{{$mostRecommended['title']}}</a>
                                        <small>June 29 2014</small>
                                    </div>
                                </div><!-- /post -->
                            </div>
                            <!-- /POPULAR -->


                            <!-- RECENT -->
                            <div id="tab_2" class="tab-pane">
                                @foreach($last as $post)
                                <div class="row tab-post"><!-- post -->
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <a href="{{$post->getUrl()}}">
                                             <img class="img-rounded img-responsive"  src="uploads/{{$post['image']}}" alt="{{$post['title']}} " >
                                        </a>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <a href="{{$post->getUrl()}}" class="tab-post-link">{{$post['title']}}</a>
                                        <p class="list-group-item-text"> {{substr(strip_tags($post['content']), 0, 50)}}... </p>
                                        <small>June 29 2014</small>
                                    </div>
                                </div><!-- /post -->
                                @endforeach
                                
                            </div>
                            <!-- /RECENT -->

                        </div>

                    </div>
                    <!-- JUSTIFIED TAB -->


                    <!-- TAGS 
                    <h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
                    <div class="hidden-xs margin-bottom-60">

                        <a class="tag" href="#">
                            <span class="txt">RESPONSIVE</span>
                            <span class="num">12</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">CSS</span>
                            <span class="num">3</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">HTML</span>
                            <span class="num">1</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">JAVASCRIPT</span>
                            <span class="num">28</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">DESIGN</span>
                            <span class="num">6</span>
                        </a>
                        <a class="tag" href="#">
                            <span class="txt">DEVELOPMENT</span>
                            <span class="num">3</span>
                        </a>
                    </div>
                    -->

                    <!-- TWIITER WIDGET 
                    <h3 class="hidden-xs size-16 margin-bottom-10">TWITTER FEED</h3>                            
                    <ul class="hidden-xs widget-twitter margin-bottom-60" data-php="php/twitter/tweet.php" data-username="stepofweb" data-limit="3">
                        <li></li>
                    </ul>
                    -->

                    <!-- FEATURED VIDEO 
                    <h3 class="hidden-xs size-16 margin-bottom-10">FEATURED VIDEO</h3>
                    <div class="hidden-xs embed-responsive embed-responsive-16by9 margin-bottom-60">
                        <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
                    </div>
                    -->

                    <!-- FACEBOOK 
                    <iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>
                    -->

                    <hr />


                    <!-- SOCIAL ICONS -->
                    <div class="hidden-xs margin-top-30 margin-bottom-60">
                        <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <!--a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a-->

                        <!--a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a-->

                        <!--a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a-->
                    </div>

                </div>


                <!-- RIGHT -->
                <div class="col-md-9 col-sm-9">
      
   					 @yield('body')
   					 
                </div>

            </div>


        </div>
    </section>
    <!-- / -->

<!--footer class="footer">
  <div class="container">
    <p class="text-muted">Powered by <a href="https://github.com/serverfireteam/panel">Serverfireteam/panel</a> .</p>
  </div>
</footer-->

@stop	