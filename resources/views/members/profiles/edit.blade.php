@extends('layouts.profile')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('profile_header')
	<h1><i class="fa fa-edit"></i> {{$action}} MY PROFILE	</h1>
@stop
@section('profile_content')
	<!-- RIGHT -->
				
	@if(session()->has('tab'))	
		{{--*/ $tab = session('tab') /*--}}
	@endif

	<ul class="nav nav-tabs nav-top-border">

		<li class="{{$tab['info']}}">
			<a href="#info" data-toggle="tab">Personal Info</a>
		</li>
		<li class="{{$tab['avatar']}}">
			<a href="#avatar" data-toggle="tab">Picture</a>
		</li>

		@if($action != 'CREATE')
			<li class="{{$tab['password']}}">
				<a href="#password" data-toggle="tab">Password</a>
			</li>
		@endif
		{{-- <li><a href="#accounts" data-toggle="tab">Link USAR</a></li> --}}
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

	<div class="tab-content margin-top-0">

		<!-- PERSONAL INFO TAB -->
		<div class="tab-pane fade in {{$tab['info']}}" id="info">
			<form role="form" action="{{route('members.update', ['id' => $user->id, 'action' => $action])}}" method="post">
				{{ csrf_field() }}			  
				<div class="form-group col-sm-6">
					<label class="control-label text-primary">First Name</label>
					<input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
				</div>
				<div class="form-group col-sm-6">
					<label class="control-label text-primary">Last Name</label>
					<input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label class="control-label text-primary">Gender</label>
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
				<div class="form-group col-sm-8">
					<label class="control-label text-primary">City/Town</label>
					<input type="text" name="city" value="{{$profile->city}}" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label class="control-label text-primary">Skill</label>
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
				<div class="form-group col-sm-4">
					<label class="control-label text-primary">Racquet</label>
					<input type="text" name="racquet" value="{{$profile->racquet}}" class="form-control">
				</div>	
				<div class="form-group col-sm-4">
					<label class="control-label text-primary">Dominant Hand</label>
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
					<label class="control-label text-primary">Interests</label>
					<input type="text" placeholder="{{$user->interests}}" class="form-control">
				</div>	 --}}			
				<div class="form-group col-sm-12">
					<label class="control-label text-primary">Who Am I?</label>
					<textarea class="form-control" name="bio" rows="3" placeholder="Tell us about yourself">{{$profile->bio}}</textarea>
				</div>				
				<div class="col-sm-12 margiv-top10">
					@if($action == 'CREATE')
						<button type="submit" class="btn btn-primary">Next <i class="fa fa-chevron-right"></i></button>
					@else
						<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Save Changes </button>					
						<a href="{{ route('members.show', $user->id )}}" class="btn btn-default">Cancel </a>
					@endif
				</div>
			</form>
		</div>
		<!-- /PERSONAL INFO TAB -->

		<!-- AVATAR TAB -->
		<div class="tab-pane fade in {{$tab['avatar']}}" id="avatar">

			{{-- <form class="clearfix" action="{{ route('members.update_avatar', $user->id)}}" method="post" enctype="multipart/form-data"> --}}
			<form id="frmAvatar" name="frmAvatar" class="clearfix" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				<input type="hidden" name="x" id="x" style="width:30px"  />
				<input type="hidden" name="y" id="y" style="width:30px"  />
				<input type="hidden" name="w" id="w"  style="width:30px" />
				<input type="hidden" name="h" id="h"  style="width:30px" />
				
				<div class="form-group">
					{{-- <div class="row">
						<div class="col-md-6 col-sm-6">
							<a href="{{route('members.delete_avatar', $user->id)}}" class="btn btn-danger btn-xs noradius"><i class="fa fa-times"></i> Remove Current Picture</a>
						</div>
					</div> --}}
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="sky-form nomargin">
								<label class="h4 text-primary"><i class="ico-light ico-xs ico-color et-camera"></i> Upload an Image</label> 
								<label for="file" class="input input-file" style="margin-left:20px">
									<div class="button">
										<input id="file" type="file" name="avatar[]" id="avatar"  /> Browse
									</div><input type="text" readonly>
								</label>
							</div>												
						</div>						
					</div>
				</div>

				<!-- Crop Image -->	
				<div class="row hide" name="divCrop" id="divCrop">	
					<div class="col-md-6 col-sm-6">
							<div class="sky-form nomargin">
								<label class="h4 text-primary"><i class="ico-light ico-xs ico-color et-expand"></i> Select Area to Crop</label> 		
								<div id="cropbox" name="cropbox" style="margin-left:20px"></div>
							</div>
					</div>
				</div>	
				<!-- Save/Cancel Buttons -->
				<div class="hide sky-form margiv-top10" name="divSave" id="divSave">		
					<button type="submit" class="btn btn-primary">Save Crop </button>
					<a href="{{ route('members.show', $user->id)}}" id="btnDoneAvatar" name="btnDoneAvatar" class="btn btn-info disabled">I'm Finished </a>
					@if($action != 'CREATE')
						<a href="{{ route('members.show', $user->id)}}" class="btn btn-default">Cancel </a>	
					@endif		
				</div>	
				@if($action == 'CREATE')
					<div class= "sky-form margiv-top10" name="divSave" id="divSkip">
						<a href="{{ route('refer.show', $user->id)}}" class="btn btn-warning">Skip </a>	
					</div>
				@endif				
			</form>

		</div>
		<!-- /AVATAR TAB -->
		
		<!-- ACCOUNTS TAB -->		
		<div class="tab-pane fade in {{$tab['accounts']}}" id="accounts">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-0">						
						{!! Form::model($user, array('route' => array('members.link_usar', $user->id), 'role' => 'form', 'class'=> 'form-horizontal','method' => 'POST')) !!}
							{!! Form::hidden ('_token', csrf_token()) !!}
							<div class="form-group">
								<label class="col-md-3 control-label text-primary">USAR ID:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="password">
								</div>
							</div>		

							{{-- <div class="form-group">
								<label class="col-md-3 control-label text-primary">USAR Login:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="username" value="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label text-primary">USAR Password:</label>
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
							</div> --}}
						{!! Form::close() !!}							
					</div>
					
				</div>
			</div>
		</div>
		<!-- /ACCOUNTS TAB -->

		<!-- PASSWORD TAB -->		
		<div class="tab-pane fade in {{$tab['password']}}" id="password">

			<form action="{{route('members.update_pwd', $user->id)}}" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label class="control-label text-primary">Current Password</label>
					<input type="password" name="current_password" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label text-primary">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label text-primary">Re-type New Password</label>
					<input type="password" name="password_confirmation" class="form-control">
				</div>

				<div class="margiv-top10">
					<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Change Password </button>					
					<a href="{{ route('members.show', $user->id)}}" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /PASSWORD TAB -->

		<!-- PRIVACY TAB -->
		<div class="tab-pane fade in {{$tab['privacy']}}" id="privacy">

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
					<a href="{{ route('members.show', $user->id)}}" class="btn btn-default">Cancel </a>
				</div>

			</form>

		</div>
		<!-- /PRIVACY TAB -->
		
	</div>

@stop

@section('script')
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://jcrop-cdn.tapmodo.com/v2.0.0-RC1/js/Jcrop.js"></script>
<link rel="stylesheet" href="http://jcrop-cdn.tapmodo.com/v2.0.0-RC1/css/Jcrop.css" type="text/css">
--}}

<script type="text/javascript">

	var crop_max_width = 200;
	var crop_max_height = 200;
	var jcrop_api;
	var canvas;
	var context;
	var image;
	var prefsize;

	$("#file").change(function() {
	  loadImage(this);
	   $("#divCrop").removeClass('hide');
	   $("#divSave").removeClass('hide');
	   $("#divSkip").addClass('hide');
	});
	function loadImage(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    canvas = null;
	    reader.onload = function(e) {
	      image = new Image();
	      image.onload = validateImage;
	      image.src = e.target.result;

	     //Set Preview Image
	     $("#preview").attr('src', image.src);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}
	function dataURLtoBlob(dataURL) {
	  var BASE64_MARKER = ';base64,';
	  if (dataURL.indexOf(BASE64_MARKER) == -1) {
	    var parts = dataURL.split(',');
	    var contentType = parts[0].split(':')[1];
	    var raw = decodeURIComponent(parts[1]);
	    return new Blob([raw], {
	      type: contentType
	    });
	  }
	  var parts = dataURL.split(BASE64_MARKER);
	  var contentType = parts[0].split(':')[1];
	  var raw = window.atob(parts[1]);
	  var rawLength = raw.length;
	  var uInt8Array = new Uint8Array(rawLength);
	  for (var i = 0; i < rawLength; ++i) {
	    uInt8Array[i] = raw.charCodeAt(i);
	  }
	  return new Blob([uInt8Array], {
	    type: contentType
	  });
	}
	function validateImage() {
	  if (canvas != null) {
	    image = new Image();
	    image.onload = restartJcrop;
	    image.src = canvas.toDataURL('image/png');

	     $("#preview").src = image.src;
	  } else restartJcrop();
	}
	function restartJcrop() {
	  if (jcrop_api != null) {
	    jcrop_api.destroy();
	  }
	  $("#cropbox").empty();
	  $("#cropbox").append("<canvas id=\"canvas\">");
	  canvas = $("#canvas")[0];
	  context = canvas.getContext("2d");
	  canvas.width = image.width;
	  canvas.height = image.height;
	  context.drawImage(image, 0, 0);
	  $("#canvas").Jcrop({
	  	onChange: showPreview,
	    onSelect: showPreview,
	    onRelease: clearcanvas,
	    boxWidth: 400,
	    boxHeight: 400,
	    trueSize: [image.width,image.height],
	    aspectRatio: 1
	  }, function() {
	    jcrop_api = this; 
	    jcrop_api.setOptions({allowMove: true});
	    jcrop_api.setOptions({allowResize: false});

	    jcrop_api.setSelect(
			[50, 50,crop_max_width+50, crop_max_height+50]
			);

	  });
	  clearcanvas();
	}
	function clearcanvas() {
	  prefsize = {
	    x: 0,
	    y: 0,
	    w: canvas.width,
	    h: canvas.height,
	  };
	}
	function selectcanvas(coords) {
	  prefsize = {
	    x: Math.round(coords.x),
	    y: Math.round(coords.y),
	    w: Math.round(coords.w),
	    h: Math.round(coords.h)
	  };
	}

	function showPreview(coords)
	{
		var rx = crop_max_width / coords.w;
		var ry = crop_max_height / coords.h;

		var w = $('.jcrop-holder').width();
		var h =$('.jcrop-holder').height();

		$('#preview').css({
			width: Math.round(rx *  w) + 'px',
			height: Math.round(ry *  h) + 'px',
			marginLeft: '-' + Math.round(rx * coords.x) + 'px',
			marginTop: '-' + Math.round(ry * coords.y) + 'px'
		});

		$('#x').val(coords.x);
		$('#y').val(coords.y);
		$('#w').val(coords.w);
		$('#h').val(coords.h);
	}

	$("#btnUpdateAvatar").click(function() {
		 form = $("#frmAvatar");

		// formData = new FormData(form[0]);
	 //  	var blob = dataURLtoBlob(canvas.toDataURL('image/png'));
	 //  	//---Add file blob to the form data
	 //  	formData.append("cropped_image[]", blob);

	  	form.submit();
	  	clearcanvas();
	});
	
	$("#frmAvatar").submit(function(e) {
	  e.preventDefault();
	  formData = new FormData($(this)[0]);
	  //var blob = dataURLtoBlob(canvas.toDataURL('image/png'));
	  
	  //---Add file blob to the form data
	  //formData.append("cropped_image[]", blob);
	 // formData.append("id", 1);
	  $.ajax({
	    url: "avatar/upload",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    cache: false,
	    processData: false,
	    async: false,
	    success: function(data) {
	      var src = data;

	      $("#imgProfile").attr('src', src);
	      $(".user-avatar").attr('src', src);
	      $("#btnDoneAvatar").removeClass("disabled");
	    },
	    error: function(data) {
	      console.log(data.responseText);
	    },
	    complete: function(data) {}
	  });
	});


	
	</script>
@stop