@extends('layouts.profile')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('profile_header')
	<!-- breadcrumbs -->
	<ol class="breadcrumb breadcrumb-inverse">
		<li><a href="{{ route('members.listing')}} ">Members</a></li>
		<li><a href="{{ route('members.show', array('id' => $user->id)) }} ">{{ $user->first_name }} {{ $user->last_name }}</a></li>
		<li class="active">EDIT PROFILE</li>

	</ol><!-- /breadcrumbs -->
	
@stop
@section('profile_content')
	<!-- RIGHT -->
					
	<ul class="nav nav-tabs nav-top-border">
		<li class="active"><a href="#info" data-toggle="tab">Personal Info</a></li>
		<li><a href="#avatar" data-toggle="tab">Avatar</a></li>
		<li><a href="#password" data-toggle="tab">Password</a></li>
		<li><a href="#privacy" data-toggle="tab">Privacy</a></li>
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
					<input type="text" placeholder="{{$user->first_name}}" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Last Name</label>
					<input type="text" placeholder="{{$user->last_name}}" class="form-control">
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
							$profile->gender,
							array(
								'class' => 'form-control',
								'id' => 'gender'
							)
						) 
					}}
				</div>
				<div class="form-group">
					<label class="control-label">City/Town</label>
					<input type="text" name="city" value="{{$profile->city}}" class="form-control">
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
					<input type="text" name="racquet" value="{{$profile->racquet}}" class="form-control">
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
							$profile->dominant_hand,
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
					<textarea class="form-control" name="bio" rows="3" placeholder="Tell us about yourself">{{$profile->bio}}</textarea>
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

			<form class="clearfix" action="#" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">

					<div class="row">

						<div class="col-md-3 col-sm-4">

							<div class="thumbnail">
								@if((true)) 	
									<img src='{{ asset('images/members/'. $user->id  . '/profile.png')}}' alt="" />
								@else
									@if($profile->gender == 'female')
										<i class="ico-lg ico-color et-profile-female" style="background-color:#D8BFD8"></i>
									@else
										<i class="ico-lg ico-color et-profile-male" style="background-color:#1E8BC3"></i>
									@endif
								@endif
							</div>

						</div>

						<div class="col-md-9 col-sm-8">

							<div class="sky-form nomargin">
								<label class="label">Select File</label>
								<label for="file" class="input input-file">
									<div class="button">
										<input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse
									</div><input type="text" readonly>
								</label>
							</div>

							<a href="#" class="btn btn-danger btn-xs noradius"><i class="fa fa-times"></i> Remove Avatar</a>

							{{-- <div class="clearfix margin-top-20">
								<span class="label label-warning">NOTE! </span>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet!
								</p>
							</div>
 --}}
						</div>

					</div>

				</div>

				<div class="margiv-top10">
					<a href="#" class="btn btn-primary">Save Changes </a>
					<a href="#" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /AVATAR TAB -->

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