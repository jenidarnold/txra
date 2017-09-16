@extends('layouts.app')

@section('head')	
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> 	
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
											@foreach(new \DirectoryIterator("images/blog/$post->id") as $fileinfo)												 	
								                @if (!$fileinfo->isDot())
								                	<div class="col-md-2">
							                        	<img class="img-responsive"  src="{{ asset($fileinfo->getPathname()) }}" alt="">
							                        	<a href="{{route('news.delete_image', [ 'id' => $post['id'], 'file' => $fileinfo->getFilename()] )}}" class="btn btn-danger btn-xs btn-block noradius"><i class="fa fa-times"></i> Remove</a>
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
											<div class="col-md-6 col-sm-6">
											  	{!! Form::label('Images') !!}
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
												<textarea name="editor1" id="editor1" rows="10" cols="80">
												{{ $post['content'] }}
									            </textarea>
									            <script>
									                // Replace the <textarea id="editor1"> with a CKEditor
									                // instance, using default configuration.
									                CKEDITOR.replace( 'editor1' );
									            </script>
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

@section('script')
@stop


