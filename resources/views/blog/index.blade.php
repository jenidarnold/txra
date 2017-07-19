@extends('layouts.news')
@section('body')
  
                    @foreach($last as $post)
                    <!-- POST ITEM -->
                    <div class="blog-post-item">

                        <!-- OWL SLIDER 
                        <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
                            <div>
                                <img class="img-responsive" src="assets/images/demo/content_slider/23-min.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="assets/images/demo/content_slider/21-min.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="assets/images/demo/content_slider/3-min.jpg" alt="">
                            </div>
                        </div>
                        /OWL SLIDER -->
                        <figure class="margin-bottom-20 ">
                            <img class="img-responsive"  src="uploads/{{$post['image']}}" alt="{{$post['title']}} " >
                        </figure>

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
                                <a href="#">
                                    <i class="fa fa-user"></i> 
                                    <span class="font-lato">{{$post['author']}}</span>
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