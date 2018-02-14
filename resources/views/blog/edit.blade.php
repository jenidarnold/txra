@extends('layouts.app')

@section('head')	
	<!--script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> 	

	<!-- include libraries(jQuery, bootstrap) -->
	<!--link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"-->
	<!--script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script--> 
	<!--script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script--> 
@stop
@section('content')
<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="fa fa-pencil"></i> EDIT ARTICLE</h1>
		</div>
	</section>
	<!-- /PAGE HEADER -->
<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-12">

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your article was successfully submitted!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<!--form action="php/contact.php" method="post" enctype="multipart/form-data"-->
							<form action="{{route('news.update', [ 'id' => $post['id']] )}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<input type="hidden" name="action" value="post_create" />

									<div class="row">
										<div class="form-group">	
											<div class="col-md-1">
												<input required type="text" placeholder="AID" value="{{ $post['author']->id }}" class="form-control" name="author_id" id="author:last_name">
											</div>										
											<div class="col-md-4">
												<input required type="text" readonly placeholder="Author" value="{{ $post['author']->full_name }}" class="form-control" name="author" id="author:last_name">
											</div>	
											<div class="col-md-4">
												<input required type="email" readonly placeholder="Email Address" value="{{ $post['author']->email }}" class="form-control" name="author_email" id="author:email">
											</div>
											<div class="col-md-3">
												<input type="text" value="{{ $post['author']->phone }}" placeholder="Phone (optional)" readonly  class="form-control" name="author_phone" id="author:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											@if(file_exists("images/blog/$post->id/lead"))
							                    @php ($imagepath = "images/blog/$post->id/lead")
							                    @php ($dir = "lead")
							                @else
							                    @php ($imagepath = "images/blog/$post->id")
							                    @php ($dir = "")
							                @endif
							                @foreach(new \DirectoryIterator($imagepath) as $fileinfo)
								                @if (!$fileinfo->isDot())
								                	<div class="col-md-2">
							                        	<img class="img-responsive"  src="{{ asset($fileinfo->getPathname()) }}" alt="">
							                        	<a href="{{route('news.delete_image', [ 'id' => $post['id'], 'dir' => $dir, 'file' => $fileinfo->getFilename()] )}}" class="btn btn-danger btn-xs btn-block noradius"><i class="fa fa-times"></i> Remove</a>
						                        	</div>
								                @endif
								            @endforeach 
							            </div>	
							            <div class="row">
											<div class="form-group">
												@if(file_exists("images/blog/$post->id/body"))
								                    @php ($imageBodyPath = "images/blog/$post->id/body")
								                    @php ($dir = "body")
								                @else
								                    @php ($imageBodyPath = "images/blog/$post->id")
								                    @php ($dir = "")
								                @endif
								                @foreach(new \DirectoryIterator($imageBodyPath) as $fileinfo)
									                @if (!$fileinfo->isDot())
									                	<div class="col-md-2">
								                        	<img class="img-responsive"  src="{{ asset($fileinfo->getPathname()) }}" alt="">
								                        	<a href="{{route('news.delete_image', [ 'id' => $post['id'], 'dir' => $dir, 
								                        	'file' => $fileinfo->getFilename()] )}}" method="post" class="btn btn-danger btn-xs btn-block noradius"><i class="fa fa-times"></i> Remove</a>
							                        	</div>
									                @endif
									            @endforeach 
								            </div>	
							            <div class="row">
										<div class="form-group">
											@if(file_exists("images/blog/$post->id/meta"))
							                    @php ($imageMetaPath = "images/blog/$post->id/meta")
							                    @php ($dir = "meta")
							                @else
							                    @php ($imageMetaPath = "images/blog/$post->id")
							                    @php ($dir = "")
							                @endif
							                @foreach(new \DirectoryIterator($imageMetaPath) as $fileinfo)
								                @if (!$fileinfo->isDot())
								                	<div class="col-md-2">
							                        	<img class="img-responsive"  src="{{ asset($fileinfo->getPathname()) }}" alt="">
							                        	<a href="{{route('news.delete_image', [ 'id' => $post['id'], 'dir' => $dir, 'file' => $fileinfo->getFilename()] )}}" class="btn btn-danger btn-xs btn-block noradius"><i class="fa fa-times"></i> Remove</a>
						                        	</div>
								                @endif
								            @endforeach 
							            </div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
											{{ Form::select('category', $categories, $post->categories()->first()->id, ['class' => 'form-control pointer'] ) }}						
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-4 col-sm-4">
											  	{!! Form::label('Headline Images') !!}
											  	{!! Form::file('images[]',  
    											  				[	
    											  					'id'	=>	'file',
    											  					'multiple' => 'multiple',
    											  					'accept'	=>'image/*'
    											  				]
											  				) 
										  		!!}
												<small class="text-muted block">Max file size: 5Mb (pdf/jpg/png)</small>
											</div>		
											<div class="col-md-4 col-sm-4">
											  	{!! Form::label('Body Images') !!}
											  	{!! Form::file('imagesBody[]',  
    											  				[	
    											  					'id'	=>	'file',
    											  					'multiple' => 'multiple',
    											  					'accept'	=>'image/*'
    											  				]
											  				) 
										  		!!}
												<small class="text-muted block">Max file size: 5Mb (pdf/jpg/png)</small>
											</div>	
											<div class="form-group">
												<div class="col-md-4 col-sm-4">
												  	{!! Form::label('Open Graph Images') !!}
												  	{!! Form::file('imagesMeta[]',  
	    											  				[	
	    											  					'id'	=>	'file',
	    											  					'multiple' => 'multiple',
	    											  					'accept'	=>'image/*'
	    											  				]
												  				) 
											  		!!}
													<small class="text-muted block">Max file size: 5Mb (pdf/jpg/png)</small>
												</div>												
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<input required maxlength="250" class="form-control"  placeholder="Title" value="{{$post['title']}}" name="title" id="title"></textarea>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<textarea name="editor1" id="editor1" name="editor1">
												{{ $post['content'] }}
									            </textarea>									            
											</div>
										</div>
									</div>
								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"> SUBMIT</button>
										<a href="{{route('news.show', [ 'id' => $post['id'], 'title' => $post['title']] )}}"  class="btn btn-warning"> CANCEL</a>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->
					</div>

				</div>
			</section>
			<!-- / -->
@stop

@section('page-js-files')
	<!-- include summernote css/js -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
@stop

@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {
       	 $('#editor1').summernote(
       	 	{
        		tabsize: 2,
        		height: 100
    		})
      	});
</script>
@stop

