@extends('layouts.app')

@section('content')
   {{--  <section class="page-header page-header-xs hidden-xs">
        <div class="container">

            <h1><i class="fa fa-sign-in"></i> LOGIN</h1>
           
            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="/welcome">Home</a></li>
                <li class="active">Login</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section> --}}
    <!-- /PAGE HEADER -->

    <!-- -->
    <section>
        <div class="container">
            <div class="row">
            <!-- LOGIN EMAIL-->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                   <form class="nomargin sky-form boxed" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <header class="text-center text-primary h3">
                        Log Into Your Account
                        </header>

                        <fieldset class="nomargin"> 
                             @if($errors->count() > 0)                            
                            <div class="alert alert-danger"> 
                                @foreach ($errors->all() as $error)
                                    <span class="help-blockX">
                                        <i class="fa fa-exclamation-circle"></i> <strong>{{ $error }}</strong><br/>
                                    </span>
                                @endforeach
                            </div>
                            @endif
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-envelope"></i>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address">
                                <b class="tooltip tooltip-bottom-right">Your email address will be used to login</b>
                                </label>
                               {{--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif --}}
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-lock"></i>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                </label>
                               {{--  @if ($errors->has('password'))
                                    <div class="alert alert-danger text-center"> 
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    </div>
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="nomargin btn btn-primary btn-block">
                                    Log In
                                </button>
                            </div>

                            
                            <div class="clearfix note margin-bottom-30 text-center">
                                <a  class="text-primary" href="{{ url('/password/reset') }}">Forgot Password?</a>
                            </div>

                         {{--   <div class="form-group"> 
                                <h4 class="text-center">OR</h4>                 
                                <a class="btn btn-block btn-social btn-facebook margin-top-10 fb_iframe_widget" 
                                scope="public_profile, publish_actions, email,user_friends, user_about_me" data-show-faces="false" data-auto-logout-link="true" >
                                    <i class="fa fa-facebook"></i> Sign in with Facebook
                                </a>
                                <div class="fb-login-button fb_iframe_widget btn-block margin-top-10" data-max-rows="1" data-size="large" login_text="Login with Facebook" 
                                    scope="public_profile, publish_actions, email,user_friends, user_about_me" data-show-faces="false" data-auto-logout-link="true">        
                                </div>
                            </div> 
 --}}

                            <div class="clearfix note margin-bottom-30 text-center">
                                <h5> Don't have an account? <a class="text-danger" href="{{ url('/register') }}">Sign Up</a></h5>
                            </div>

                           {{--  <label class="checkbox weight-300">
                                <input type="checkbox" name="checkbox-inline">
                                <i></i> Keep me logged in
                            </label> --}} 

                        </fieldset>

                        
                    </form>

                  

                </div>
                <!-- \LOGIN EMAIL -->
               
{{--                  <!-- LOGIN R2SPORTS -->
                <div class="col-md-4 col-sm-12 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                   <form class="nomargin sky-form boxed" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <header>
                        <img class="" style="height:30px" src="{{ asset('images/logos/r2sports.gif') }}" ></i> Login with your USAR account
                        </header>

                        <fieldset class="nomargin"> 

                            <div class="form-group{{ $errors->has('usar_id') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <input id="usar_id" type="text" class="form-control" name="usar_id" value="{{ old('usar_id') }}" placeholder="USAR User ID">
                                <b class="tooltip tooltip-bottom-right">Your USAR userID will be used to login</b>
                                </label>
                                @if ($errors->has('usar_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usar_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="input margin-bottom-10">
                                    <i class="ico-append fa fa-lock"></i>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                    <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                </label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </fieldset>

                        <div class="row margin-bottom-20">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>
                        </div>
                      
                    </form>
                                   
                </div>  --}}
               
                  
            </div>
        </div>
    </div>
</div>
@endsection
