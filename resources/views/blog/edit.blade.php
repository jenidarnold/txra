@extends('layouts.app')

@section('head')	
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> 	
@stop
@section('content')
<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="fa fa-envelope"></i> EDIT ARTICLE</h1>
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
							<form action="{{route('news.store')}}" method="put" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<input type="hidden" name="action" value="post_create" />

									<div class="row">
										<div class="form-group">											
											<div class="col-md-4">
												<label for="from_last_name">Author (required)</label>
												<input required type="text" value="" class="form-control" name="author" id="contact:last_name">
											</div>	
											<div class="col-md-4">
												<label for="from_email">Your E-mail Address (required)</label>
												<input required type="email" value="" class="form-control" name="author_email" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Your Phone (optional)</label>
												<input type="text" value="" class="form-control" name="author_phone" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label for="committee">Category</label>
												<select class="form-control pointer" name="committee">
													<option value="">--- Select ---</option>
													<option value="1">Awards</option>
													<option value="2">Communications</option>
													<option value="3">Finance</option>
													<option value="4">Governance</option>
													<option value="5">Strategic Planning</option>
													<option value="6">Youth and Collegiate</option>
												</select>
											</div>
											<div class="col-md-6">
												<label for="committee">Image(s)</label>
												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">Title (required)</label>
												<input required maxlength="250" class="form-control" name="title" id="title"></textarea>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">Content (required)</label>
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


