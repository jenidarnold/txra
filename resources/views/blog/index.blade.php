@extends('layouts.news')
@section('body')
  
                    @foreach($last as $post)
                    <!-- POST ITEM -->
                    <div class="blog-post-item">

                    @if ($post->image_count() > 1)
                        <!-- OWL SLIDER -->
                        <div style="max-height:200px" class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": {{$post->image_count()}}, "autoPlay": 6000, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>

                            @foreach(new \DirectoryIterator("images/blog/$post->id") as $fileinfo)
                                @if (!$fileinfo->isDot())
                                    <div>
                                        <img class="thumbnail img-responsive1"  style="max-height:200px" src="{{ asset($fileinfo->getPathname()) }}" alt="">
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

                        <h2><a href="{{$post->getUrl()}}">{{$post['title']}}</a></h2>

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
                                <a href="{{ route('members.show', array('id' => $post['author_id']))}}">
                                    <i class="fa fa-user"></i> 
                                    <span class="font-lato">{{ \App\Post::find($post['id'])->author()->first()["full_name"] }}</span>
                                </a>
                            </li>
                        </ul>

                        <p class="list-group-item-text"> {{substr(strip_tags($post['content']), 0, 150)}}... </p>

                        <a href="{{$post->getUrl()}}" class="btn btn-reveal btn-default">
                            <i class="fa fa-plus"></i>
                            <span>Read More</span>
                        </a>

                    </div>
                    <!-- /POST ITEM -->

                    @endforeach

                    <!-- PAGINATION -->
                    <div class="text-left">
                        <!-- Pagination Default -->
                        <ul class="pagination nomargin">
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                        <!-- /Pagination Default -->
                    </div>
                    <!-- /PAGINATION -->

@stop