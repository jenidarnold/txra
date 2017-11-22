
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

@section('style')
    <style>
    .tabs {
    }
    .list-group-item {
        font-size: 12pt !important;
    }
    .list-group-item-text{
        font-size: 12pt !important;
    }
    .blog-post-info{
        font-size: 10pt !important;
    }
    .blog-post-item{
        margin-bottom: 20px;
        padding-bottom: 40px;
    }

    </style>

@stop
@section('content')
  <section class="page-header page-header-xs hidden-xs">        
        <div class="container">
            <h1><i class="et-newspaper"></i> NEWS
            @if(isset($category)) 
                <i class="fa fa-chevron-right fa-sm"></i> {{$category}}
            @endif
            </h1>                   
        </div>
    </section>

    <!-- -->
    <section>
        <div class="container">

            <!--h3 class="text-muted">{!! Html::link('/blog',\Config::get('blog.title')) !!}</h3-->
            <div class="row">

                <!-- LEFT -->
                <div class="col-sm-4 col-md-3">
                    
                    <!-- INLINE SEARCH 
                    <div class="inline-search clearfix margin-bottom-30">
                        <form action="" method="get" class="widget_search">
                            <input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <hr />
                    -->
                    <!-- /INLINE SEARCH -->


                    <!-- side navigation -->
                    <div class="side-nav margin-bottom-60 margin-top-0">

                        <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                            <h4>CATEGORIES</h4>
                        </div>

                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item"><a href="{{ route('news.index')}}">LATEST</a></li>                            
                             @foreach($categories as $c)                             
                                <li class="list-group-item"><a href="{{ route('news.category' , array('id' => $c->id, 'category' => $c->category)) }}">
                                    <!--span class="size-11 text-muted pull-right">({{$c->count}})</span--> 
                                    {{$c->category}}   
                                    <span class="badge">{{$c->posts()->count()}}</span> 
                                    </a>
                                </li>
                             @endforeach
                             @if(Auth::check() && Auth::user()->id = 1) 
                             <li class="list-group-item"><a href="{{ route('news.drafts')}}">DRAFTS <span class="badge ">{{$drafts->count()}}</span></a> 
                             </li>
                             @endif
                        </ul>
                        <!-- /side navigation -->                    
                    </div>
               </div>


                <!-- RIGHT -->
                <div class="col-sm-8 col-md-9">
      
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