@extends('layouts.profile')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('profile_header')

	<h1>CREATE MY PROFILE</h1>
	
@stop
@section('profile_content')
	<!-- RIGHT -->
					
	<ul class="nav nav-tabs nav-top-border">
		<li class="active"><a href="#info" data-toggle="tab">Personal Info</a></li>
		<li><a href="#avatar" data-toggle="tab">Avatar</a></li>
		<li><a href="#accounts" data-toggle="tab">Link Accounts</a></li>
		<li><a href="#password" data-toggle="tab">Password</a></li>
		{{-- <li><a href="#privacy" data-toggle="tab">Privacy</a></li> --}}
	</ul>

	<div class="flash-message">
	    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
	      @if(Session::has('alert-' . $msg))

	      <div class="alert alert-{{ $msg }}">
	      	{{ Session::get('alert-' . $msg) }} 	      	
	      	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	      	@if($errors->has())
	      		<ul>
			   	@foreach ($errors->all() as $error)
			      	<li>{{ $error }}</li>
			  	@endforeach
			  	</ul>
			@endif
	      </div>
	      @endif
	    @endforeach
  	</div> <!-- end .flash-message -->

	<div class="tab-content margin-top-20">

		<!-- PERSONAL INFO TAB -->
		<div class="tab-pane fade in active" id="info">
			<form role="form" action="{{route('members.update', $profile->id)}}" method="post">
				{{ csrf_field() }}			  
				<div class="form-group">
					<label class="control-label">First Name</label>
					<input type="text" value="{{$user->fist_name}}" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Last Name</label>
					<input type="text" value="{{$user->last_name}}" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Gender</label>
					{{ Form::select(
							'gender', 
							[
								'none' => '', 
								'male' => 'Male', 
								'female' => 'Female'
							],
							null,
							array(
								'class' => 'form-control',
								'id' => 'gender'
							)
						) 
					}}
				</div>
				<div class="form-group">
					<label class="control-label">Hometown</label>
					<input type="text" name="city" value="" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Skill</label>
					{{ Form::select(
							'skill', 
							[
								'none' 	=>	'', 
								'pro'	=>	'Pro', 
								'open'	=>	'Open', 
								'elite'	=>	'Elite', 
								'a'		=>	'A',
								'b'		=>	'B', 
								'c'		=>	'C', 
								'd'		=>	'D', 
								'novice'=>	'Novice', 
								'junior'=>	'Junior'
							],
							$profile->skill,
							array(
								'class' => 'form-control',
								'id' => 'skill'
							)
						) 
					}}
				</div>	
				<div class="form-group">
					<label class="control-label">Racquet</label>
					<input type="text" name="racquet" value="" class="form-control">
				</div>	
				<div class="form-group">
					<label class="control-label">Dominant Hand</label>
					{{ Form::select(
							'hand', 
							[
								'none' 	=>	'', 
								'left' 	=>	'Left', 
								'right'	=>	'Right', 
								'both'	=>	'Both'
							],
							null,
							array(
								'class' => 'form-control',
								'id'	=> 'gender'
							)
						) 
					}}
				</div>	
				{{-- <div class="form-group">
					<label class="control-label">Interests</label>
					<input type="text" placeholder="{{$user->interests}}" class="form-control">
				</div>	 --}}			
				<div class="form-group">
					<label class="control-label">Who Am I?</label>
					<textarea class="form-control" name="bio" rows="3" placeholder="Tell us about yourself"></textarea>
				</div>				
				<div class="margiv-top10">
					<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes </button>
					<a href="#" class="btn btn-default">Cancel </a>
				</div>
			</form>
		</div>
		<!-- /PERSONAL INFO TAB -->

		<!-- AVATAR TAB -->
		<div class="tab-pane fade" id="avatar">

			<form class="clearfix" action="{{ route('members.update_avatar', $user->id)}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">

					<div class="row">

						<div class="col-md-3 col-sm-4">

							<div class="thumbnail">
								<img src='{{ asset('images/members/'. $user->id  . '/profile.png')}}' alt="avatar" />
							</div>

						</div>

						<div class="col-md-9 col-sm-8">

							<div class="sky-form nomargin">
								<label class="label">Select File</label>
								<label for="file" class="input input-file">
									<div class="button">
										<input type="file" name="avatar[]" id="avatar" onchange="this.parentNode.nextSibling.value = this.value">Browse
									</div><input type="text" readonly>
								</label>
							</div>

							<a href="{{route('members.delete_avatar', $user->id)}}" class="btn btn-danger btn-xs noradius"><i class="fa fa-times"></i> Remove Avatar</a>
						</div>

					</div>

				</div>

				<div class="margiv-top10">
					<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes </button>
					<a href="#" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /AVATAR TAB -->

		<!-- ACCOUNTS TAB -->		
		<div class="tab-pane fade" id="accounts">
			<div class="container">
				<div class="row">		
					<div class="col-md-8 col-md-offset-0">						
						{!! Form::model($user, array('route' => array('members.link_usar', $user->id), 'role' => 'form', 'class'=> 'form-horizontal','method' => 'POST')) !!}
							{!! Form::hidden ('_token', csrf_token()) !!}
							<div class="form-group">
								<label class="col-md-3 control-label">USAR Login:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="username" value="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">USAR Password:</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>						
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									{!!  Form::submit('Link Accounts', array('class' => 'btn btn-success')) !!}
								</div>
							</div>
							<div class="form-group"> 
								<div class="alert alert-info col-sm-9 col-sm-offset-1"><i class="fa fa-info-circle"></i> We do not store your USAR username and password</div>
							</div>
						{!! Form::close() !!}							
					</div>
						
				</div>
			</div>
		</div>
		<!-- /ACCOUNTS TAB -->

		<!-- PASSWORD TAB -->		
		<div class="tab-pane fade" id="password">

			<form action="{{route('members.update_pwd', $user->id)}}" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label class="control-label">Current Password</label>
					<input type="password" name="current_password" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Re-type New Password</label>
					<input type="password" name="password_confirmation" class="form-control">
				</div>

				<div class="margiv-top10">
					<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Change Password </button>					
					<a href="#" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /PASSWORD TAB -->

		<!-- PRIVACY TAB -->
		<div class="tab-pane fade" id="privacy">

			<form action="#" method="post">
				{{ csrf_field() }}
				<div class="sky-form">

					<table class="table table-bordered table-striped">
						<tbody>						
							<tr>
								<td>Publish my cell phone number</td>
								<td>
									<div class="inline-group">
										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radPhone" checked=""><i></i> Yes
										</label>

										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radPhone" checked=""><i></i> No
										</label>
									</div>
								</td>
							</tr>							
							<tr>
								<td>Publish my E-mail</td>
								<td>
									<div class="inline-group">
										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radEmail" checked=""><i></i> Yes
										</label>

										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radEmail" checked=""><i></i> No
										</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Publish my Facebook Username</td>
								<td>
									<div class="inline-group">
										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radFacebook" checked=""><i></i> Yes
										</label>

										<label class="radio nomargin-top nomargin-bottom">
											<input type="radio" name="radFacebook" checked=""><i></i> No
										</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="margin-top-10">
					<a href="#" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes </a>
					<a href="#" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /PRIVACY TAB -->

	</div>

@stop
@section('scripts')
	
	<script>
		alert('hi');
		$('#ifR2Sports').load('https://www.r2sports.com/membership/login.asp #content');
	</script>
@stop