@extends('layouts.app')

@section('head')	
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> 	
@stop
@section('content')
<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="fa fa-write"></i> SUBMIT AN ARTICLE</h1>
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
							<form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<input type="hidden" name="action" value="post_create" />

									<div class="row">
										<div class="form-group">											
											<div class="col-md-4">
												<label for="from_last_name">Author (required)</label>
												<input required type="text" value="{{ $author->full_name}}" class="form-control" name="author" id="author:name">
											</div>	
											<div class="col-md-4">
												<label for="from_email">Your E-mail Address (required)</label>
												<input required type="email" value="{{ $author->email}}" class="form-control" name="author_email" id="author:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Your Phone (optional)</label>
												<input type="text" value="{{ $author->phone}}" class="form-control" name="author_phone" id="author:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-3">											
												{!! Form::label('Category') !!}
											    {!! Form::select('category', 
											        (['0' => '-- Select --'] + $categories), 
											            null, 
            											['class' => 'form-control pointer',
 													  'name' => 'category'
            											]
        											) 
    											!!}
											</div>
											<div class="col-md-3">
											  	{!! Form::label('Image 1') !!}
											  	{!! Form::file('images[]',  
    											  				[	
    											  					'multiple' => 'multiple',
    											  					'accept'	=>'image/*'
    											  				]
											  				) 
										  		!!}
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>
											</div>	
											<div class="col-md-3">
												  {!! Form::label('Image 2') !!}
    											  {!! Form::file('images[]', null) !!}
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>
											</div>	
											<div class="col-md-3">
												  {!! Form::label('Image 3') !!}
    											  {!! Form::file('images[]', null) !!}
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="title">Title (required)</label>
												<input required maxlength="250" class="form-control" name="title" id="title"></textarea>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="editor1">Content (required)</label>
												 <textarea name="editor1" id="editor1" rows="10" cols="80">
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
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SUBMIT</button>
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
