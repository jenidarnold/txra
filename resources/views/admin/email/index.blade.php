@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')	
	<div class="">		
		<h3>Email Users</h3>
		<!-- Flash Message -->
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
		<form action="{{route('admin.email.send')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<label class="control-label" for="view">Send To:</label>
				<div class="col-sm-8">
					<textarea rows="3" name="recipients" value="" class="col-sm-12 input input-sm"></textarea>
				</div>
				<div class="">
					<button type="button" id="btnRecipients" class="btn btn-default" data-toggle="modal" data-target="#modUsers" >Add Recipients</button>
				</div>
			</div>
			<div class="row">
				<label class="control-label" for="view">Page:</label>
				<div class="col-sm-8">
					{!! Form::select('pages', $pages ,null, ['class' => 'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<label class="control-label" for="subject">Subject:</label>
				<div class="col-sm-10">
					<input type="text" name="subject" class="col-sm-12 input input-sm"/>
				</div>
			</div>
			<div class="row">
				<button type="submit" id="btnSubmit" class="btn btn-success">Send</button>
				<button type="button" id="btnCancel" class="btn btn-danger">Cancel</button>
			</div>
		</form>
		

<!--Modal  -->

		<div id="modUsers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-heading">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="text-center">Add Recipients</h4>
					</div>
					<div class="modal-body">
				        <div class="table-responsive col-sm-12" style="height:400px;overflow:scroll">
				        	<table class="table table-condensed">
				        		<tr>
				        			<th><input type="checkbox" name="chkAll"/></th>
				        			<th>ID</th>
				        			<th>Last Name</th>
				        			<th>First Name</th>
				        			<th>Email</th>
				        		</tr>
				        		@foreach($users as $user)
				        		<tr>
				        			<td><input type="checkbox" name="chkEmail" value="{{$user->email}}" /></td>
				        			<td>{{$user->id}}</td>
				        			<td>{{$user->last_name}}</td>
				        			<td>{{$user->first_name}}</td>
				        			<td>{{$user->email}}</td>		        					        			
				        		</tr>
				        		@endforeach
				        	</table>
				        </div>	
						<div class="row text-center">
							<ul class="pagination pagination-lg pagination-simple">
							{{$users->links()}}
							<!-- Pagination Default -->				
							</ul>
							<!-- /Pagination Default -->
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" id="btnAddRecipients">DONE</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
@stop

@section('script')

<script>
	$(':checkbox[name=chkAll]').click (function () {
	  $(':checkbox[name=chkEmail]').prop('checked', this.checked);
	});

	$('#btnAddRecipients').click(function (){
		var email = $('[name=recipients]').val();

		$(':checkbox[name=chkEmail]').each(function(){

			if ($(this).is(':checked')){
				if (email == "") {
					email = $(this).val();		
				}else{
					email += ', ' + $(this).val();
				}
			}
		});

		//set complete list
		$('[name=recipients]').val(email);
		$('#modUsers').modal('toggle');
	});

	$('#btnCancel').click(function (){
		$('[name=recipients]').val('');
		$('[name=subject]').val('');
	});

</script>

@stop