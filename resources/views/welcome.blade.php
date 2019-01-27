@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')
        <!-- LAYER SLIDER -->
{{--             <section id="slider">

                <div class="slider">

                    <div class="layerslider" style="height:800px; width:100%;">

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">

                            <!-- background image -->
                            <img src="{{ asset('images/landing/jansen kane.jpg')}} " class="ls-bg" alt="Slide background"/>

                            <span class="ls-l" style="top:250px;left:100px;font-weight: 300;height:100px; width:80px;padding-right:10px;padding-left:10px;vertical-align:center;font-size:30px;line-height:50px;color:#ffffff;background:#071935;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                TEXAS <br/>
                            </span>
                            <span class="ls-l" style="top:275px;left:100px;font-weight: 300;height:100px; width:80px;padding-right:10px;padding-left:10px;text-align:center;font-size:30px;line-height:50px;color:#ffffff;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="ls-l" style="top:250px;left:200px;font-weight: 300;height:50px; width:200px; padding-right:10px;padding-left:10px;font-size:30px;line-height:50px;color:#071935;background:#ffffff;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:1000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                RACQUETBALL
                            </span>
                            <span class="ls-l" style="top:300px;left:200px;font-weight: 300;height:50px;width:200px; padding-right:10px;padding-left:10px;font-size:30px;line-height:50px;color:#ffffff;background:#d80606;border-radius:0px;white-space: nowrap;" data-ls="durationin:1500;delayin:1700;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
                                ASSOCIATION
                            </span>
                            <!--p class="ls-l" style="top:350px;left:100px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
                                committed to excellence
                            </p>
                            <p class="ls-l" style="top:375px;left:100px;font-weight: 300;font-size:24px;color:#333;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
                                and service to our members
                            </p-->
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:1500;
                                delayin:3100;
                                easingin:easeOutElastic;rotatexin:90;
                                transformoriginin:50% top 0;
                                offsetxout:100;
                                durationout:1000;
                                rotatexout:90;
                                transformoriginout:50% bottom 0;"
                                style="top:370px;left:100px;font-weight: 300; text-align: center;width:310px;height:80px;padding-right:10px;font-size:22px;line-height:37px;color:#ffffff;background:#a57a18;white-space: nowrap;">
                                Developing and promoting<br/> 
                                the growth of racquetball
                            </p>
                        </div>

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;">

                            <!-- background image -->
                            <img src="{{ asset('images/landing/chase_lukas.jpg') }}" class="ls-bg" alt=" Photo courtesy of Joe Hall"/>

                            <p class="ls-l" style="top:30%;left:50%;font-weight: 300;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:1500;easingout:easeInBack;skewxout:50;">
                                participate in
                            </p>
                            <p class="ls-l" style="top:40%;left:50%;font-weight: 300;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:250;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:1800;easingout:easeInBack;skewxout:50;">
                                Sanctioned Tournaments
                            </p>
                            <p class="ls-l" style="top:50%;left:50%;font-weight: 300;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:500;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:2200;easingout:easeInBack;skewxout:50;">
                                One-Day Shootouts
                            </p>
                            <p class="ls-l" style="top:60%;left:50%;font-weight: 300;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:750;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:2400;easingout:easeInBack;skewxout:50;">
                                Leagues & Ladders
                            </p>
                            <!-- Photo Credit -->
                            <p class="ls-l text smaller" style="top:90%;left:15%;font-weight: 400;font-size:12px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:6000;easingout:easeInBack;skewxout:50;">
                            Photo courtesy of Joe Hall</p>
                           
                            <!--
                            <img class="ls-l" style="top:45%;left:585px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:right 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:right 50% 0;" src="asset('images/racquet.png') }}" alt="">
                            -->
                        </div>
                        <!-- /SLIDE- ->
                        
                         <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:4000;transition2d:21,105;timeshift:-1000;">

                            <!-- background -->
                            <img src="{{ asset('images/landing/tournament_players.jpg') }}" class="ls-bg" alt="Slide background"/>

                            
                            <!-- Can add images with the text to tile in smaller -->
                            <p class="ls-l" style="top:47%;left:690px;font-weight: 500;font-size:35px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:1500;rotateyin:-90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:90;transformoriginout:left 50% 0;">
                               OUTDOOR RACQUETBALL
                            </p>

                              <p class="ls-l" style="top:27%;left:490px;font-weight: 500;font-size:35px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:left 50% 0;">
                               MILITARY RACQUETBALL
                            </p>

                             <p class="ls-l" style="top:67%;left:290px;font-weight: 500;font-size:35px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:right 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:right 50% 0;">
                               MASTER'S RACQUETBALL
                            </p>

                           
                        </div>
                         <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:4000;transition2d:21,105;timeshift:-1000;">

                            <!-- background -->
                            <img src="{{ asset('images/landing/diva_players.jpg?v6') }}" class="ls-bg" alt="Slide background"/>

                            
                            <!-- Can add images with the text to tile in smaller -->
                               <p class="ls-l" style="top:70%;left:400px;font-weight: 500;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:500;rotateyin:-90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:3000;rotateyout:90;transformoriginout:left 50% 0;">
                               WOMEN'S RACQUETBALL
                            </p>
                           
                        </div>

                        <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;timeshift:-1000;">

                            <!-- background -->
                             <img src="{{ asset('images/landing/kids.png') }}" class="ls-bg" alt="Slide background"/>
                            
                            <!-- left -->
                            <p class="ls-l" data-ls="
                                offsetxin:0;
                                durationin:2500;
                                delayin:1000;
                                scalexin:0;
                                scaleyin:0;
                                offsetxout:0;
                                scalexout:0;
                                scaleyout:0;"
                                style="top:124px;left:156px;font-weight: 300; opacity: .4;font-size:200px;color:#fff;white-space: nowrap;">
                                &amp;
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:-50;
                                durationin:2000;
                                delayin:1000;
                                offsetxout:-50;
                                durationout:1000;"
                                style="top:320px;left:120px;font-weight: 300; background: white; background: rgba(255,255,255,.85); height:40px; padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#A94545;white-space: nowrap;">
                                JUNIORS PROGRAMS, CLINICS
                            </p>
                            <p class="ls-l" data-ls="
                                offsetxin:50;
                                delayin:2000;
                                skewxin:-60;
                                offsetxout:-50;
                                durationout:1000;
                                skewxout:-60;"
                                style="top:360px;left:273px;font-weight: 500;font-size:30px;color:#fff;white-space: nowrap;">
                                much more!
                            </p>                           
                        </div>
                         <!-- SLIDE -->
                        <div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;timeshift:-1000;">

                            <img src="{{ asset('images/landing/kane.jpg') }}" class="ls-bg" alt="Slide background"/>
                        </div>
                        <!-- /SLIDE-->
                    </div>
                    <script type="text/javascript">
                        var layer_options = {
                            responsive:         false,
                            responsiveUnder:    1280,
                            layersContainer:    1280,
                            hoverPrevNext:      true,
                            skinsPath:      'assets/plugins/slider.layerslider/skins/'
                        }
                    </script>

                </div>

            </section>
        
            <!-- /LAYER SLIDER --> 

            --}}
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe src="https://player.vimeo.com/video/313409692?autoplay=1&loop=1&title=0&byline=0&portrait=0" allow="autoplay" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        <div class='col-xs-12 alert alert-danger'>
                <h3 class="text-center">
                    <a href="http://www.r2sports.com/website/event-website.asp?TID=30330" target="_blank">2019 Texas State Singles Racquetball Championships (TSSRC), March 22-24</a></h4>
                  <center><div>The premiere singles tournament for racquetball, hosted at Texas A&M in College Station, Texas.  The deadline for this event will be Monday, March 18th @10pm.</div></center>
            {{-- <span class="small text-muted ">Match video credit: <a style="color:gray" href="https://www.youtube.com/watch?v=yonKP2b5gXU" target="_blank">Leo Vasquez</a></span> --}}
        </div>
    </div>
{{-- For autoplay on mobile but does not do fullscreen
<div style="padding:56.25% 0 0 0;position:relative;">
    <div id='tssrc' style='width:100%'></div>
</div>
--}}
    <script src="https://player.vimeo.com/api/player.js"></script>
            @if( Auth::guest())
            <!-- GUEST CALLOUT -->
            <div class="alert alert-transparent bordered-bottom">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 col-xs-12"><!-- left text -->
                            <h4>Support the Texas Racquetball Association in developing and promoting the growth of racquetball in our communities across the state of Texas.
                            </h4>
                        </div><!-- /left text -->
                    </div>
                    <div class="row margin-top-10">

                       {{--  <!-- Sweepstakes -->
                        <div class="col-sm-4 col-md-3">
                            @include('includes.promos.promo_box', array('show_link' => true))
                        </div>
                        <!-- /Sweepstakes--> --}}

                        <div class="col-sm-12 text-center margin-top-30">
                            <div class="col-sm-6 col-xs-12 text-center">                    
                                <a href="{{ url('/register')}}" rel="nofollow" class="btn btn-info btn-lg btn-block">JOIN FOR FREE</a>
                                <h5>Create a free TXRA account & profile 
                                {{-- & earn
                                    <a href="/rewards"> Rewards Points. </a> --}}
                                </h5>    
                            </div>                   
                            <div class="col-sm-6 col-xs-12 text-center">
                                <a href="{{ url('/members/membership')}}" rel="nofollow" class="btn btn-primary btn-lg btn-block">PAY TO PLAY</a> 
                                <h5>Get your USAR membership to play in sanctioned tournaments. </h5>               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /GUEST CALLOUT -->

            @else
            <!-- MEMBER CALLOUT -->
            <div class="alert alert-transparent bordered-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12"><!-- left text -->
                            <h3>{{ Auth::user()->first_name}}, thank you for supporting the Texas Racquetball Association. Is your USA Racquetball membership current?
                            </h3>
                        </div><!-- /left text -->
                        <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
                            <a href="{{ url('/members/membership')}}" rel="nofollow" class="btn btn-primary btn-lg btn-block">JOIN USA Racquetball</a>
                        </div><!-- /right btn -->
                    </div>
                </div>
            </div>
            <!-- /MEMBER CALLOUT -->
            @endif

        <!-- BLOG SLIDER-->

            <section>
                <div class="container">
                    <div class="row">
                       <!-- POST ITEM -->
                        <div class="blog-post-item col-md-4 col-sm-4 col-xs-12" style="margin-bottom:10px; padding-bottom:10px; border-bottom:none">
                            {{-- @include('includes.blogslider', array('title' => 'TIP OF THE DAY', 'icon'=>'fa-lightbulb-o text-warning', 'post' => $tip))  --}}
                            @include('includes.blogslider', array('title' => 'LATEST NEWS', 'icon'=>'fa-lightbulb-o text-warning', 'post' => $recent))
                        </div>                        
                        <!-- POST ITEM -->
                        <div class="blog-post-item col-md-4 col-sm-4 col-xs-12" style="margin-bottom:10px; padding-bottom:10px; border-bottom:none">
                            @include('includes.blogslider', array('title' => 'PLAYER SPOTLIGHT', 'icon'=>'fa-star-o text-info', 'post' => $spotlight))  
                        </div>
                         <!-- POST ITEM -->
                        <div class="blog-post-item col-md-4 col-sm-4 col-xs-12" style="margin-bottom:10px; padding-bottom:10px; border-bottom:none">
                            @include('includes.blogslider', array('title' => 'TRENDING', 'icon'=>'fa-line-chart text-success', 'post' => $trending))  
                        </div>
                    </div>
                </div>
            </section>

        <!-- EVENT SLIDER -->  
        @include('includes.eventslider', array('event_type' => 'LIVE', 'tournaments' => $tournaments["live"]))            
        <!-- EVENT SLIDER -->
        @include('includes.eventslider', array('event_type' => 'FUTURE', 'tournaments' => $tournaments["future"]))
        <!-- EVENT SLIDER-->
        @include('includes.eventslider', array('event_type' => 'RECENT', 'tournaments' => $tournaments["recent"]))  

}
@stop

{{-- //Cant get this to load full screen; but this code is supposed to autoplay on mobile; not verified
 <script>
        // This is the URL of the video you want to load
        var videoUrl = 'https://player.vimeo.com/video/313409692';
        // This is the oEmbed endpoint for Vimeo (we're using JSON)
        // (Vimeo also supports oEmbed discovery. See the PHP example.)
        var endpoint = 'https://www.vimeo.com/api/oembed.json';
        // Tell Vimeo what function to call
        var callback = 'embedVideo';
        // Put together the URL
        var url = endpoint + '?url=' + encodeURIComponent(videoUrl) + '&callback=' + callback + '&autoplay=1&loop=1&title=0&byline=0&portrait=0';
        // This function puts the video on the page
        function embedVideo(video) {
            document.getElementById('tssrc').innerHTML = unescape(video.html);
        }
        // This function loads the data from Vimeo
        function init() {
            var js = document.createElement('script');
            js.setAttribute('type', 'text/javascript');
            js.setAttribute('src', url);
            document.getElementsByTagName('head').item(0).appendChild(js);
        }
        // Call our init function when the page loads
        window.onload = init;

    </script>
--}}

@section('script')

@stop