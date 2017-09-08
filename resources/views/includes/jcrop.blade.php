	{{-- <form class="clearfix" action="{{ route('members.update_avatar', $user->id)}}" method="post" enctype="multipart/form-data"> --}}
<form id="{{$form}}" name="$form" class="clearfix" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	
	<input type="hidden" name="x" id="x" style="width:30px"  />
	<input type="hidden" name="y" id="y" style="width:30px"  />
	<input type="hidden" name="w" id="w"  style="width:30px" />
	<input type="hidden" name="h" id="h"  style="width:30px" />
	
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<div class="sky-form nomargin">
					<label class="h5">Select an Image, then Crop</label> 
					<label for="{{$file}}" class="input input-file">
						<div class="button">
							<input id="{{$file}}" type="file" name="{{$images}}" id="images"  /> Browse
						</div><input type="text" readonly>
					</label>
				</div>												
			</div>						
		</div>
	</div>

	<!-- Preview Image -->	
	<div class="row" >	
		<div class="col-md-6 col-sm-6">
			<div class="sky-form nomargin">		
				<div id="{{$cropbox}}" name="{{$cropbox}}"></div>
			</div>
		</div>
	</div>	
</form>

@section('script')
	<script type="text/javascript">
	var crop_max_width = 200;
	var crop_max_height = 200;
	var jcrop_api[];
	var canvas[];
	var context[];
	var image[];
	var prefsize;
	$("{{"#$form"}}").change(function() {
	  loadImage(this);
	});
	function loadImage(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    canvas[index] = null;
	    reader.onload = function(e) {
	      image[index] = new Image();
	      image[index].onload = validateImage(index);
	      image[index].src = e.target.result;
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
	function validateImage(index) {
	  if (canvas[index] != null) {
	    image[index] = new Image();
	    image[index].onload = restartJcrop(index);
	    image[index].src = canvas[index].toDataURL('image/png');

	  } else restartJcrop();
	}
	function restartJcrop(index) {
	  if (jcrop_api[index] != null) {
	    jcrop_api[index].destroy();
	  }
	  $("{{"#$cropbox"}}").empty();
	  $("{{"#$cropbox"}}").append("<canvas id=\"canvas[" + index + ""]\">");
	  canvas[index] = $(("{{"#$canvas"}}")[0];
	  context[index] = canvas[index].getContext("2d");
	  canvas[index].width = image[index].width;
	  canvas[index].height = image[index].height;
	  context[index].drawImage(image[index], 0, 0);
	  $("{{"#$canvas"}}").Jcrop({
	  	onChange: showPreview,
	    onSelect: showPreview,
	    onRelease: clearcanvas,
	    boxWidth: 400,
	    boxHeight: 400,
	    trueSize: [image[index].width,image[index].height],
	    aspectRatio: 1
	  }, function() {
	    jcrop_api[index] = this; 
	    jcrop_api[index].setOptions({allowMove: true});
	    jcrop_api[index].setOptions({allowResize: false});

	    jcrop_api[index].setSelect(
			[0, 0,crop_max_width, crop_max_height]
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
	      var src = $("#imgProfile").attr('src');
	      $("#imgProfile").attr('src', src + '?' + new Date().getTime());
	      $(".user-avatar").attr('src', src + '?' + new Date().getTime());
	    },
	    error: function(data) {
	      alert("Unable to update profile picture");
	      console.log(data.responseText);
	    },
	    complete: function(data) {}
	  });
	});
	</script>
@stop