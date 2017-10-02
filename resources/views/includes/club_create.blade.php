<div class="container">
		<div class="row">
	        <div class="col-md-8">
	          <div class="row">         
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
				</div>

	            <form action="{{route('admin.clubs.store')}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">	
	            		<div class="col-sm-12 alert alert-warning">
							<i class="fa fa-info-circle"></i> The club will not be visible on the map without a valid address and latitude/longitude coordinates. Click <b>Lookup</b> after filling the address to automatically retrieve the coordinates. Or enter manually.
						</div>						
						<div class="col-sm-12">
							<label class="control-label">Name</label>
							<input type="text" id="name" name="name" value="{{ Input::old('name')}}" class="form-control">
						</div>
						<div class="col-sm-12">
							<label class="control-label">Address</label>
							<input type="text" id="address" name="address" value="{{Input::old('address')}}" class="form-control">
						</div>	
					</div>
					<div class="row">							
						<div class="col-sm-4">
							<label class="control-label">City</label>							
							<input type="text" id="city" name="city" value="{{Input::old('city')}}" class="form-control">
						</div>					
						<div class="col-sm-2">
							<label class="control-label">State</label>
							<input type="text" id="state" name="state" value="{{Input::old('state')}}" class="form-control">
						</div>					
						<div class="col-sm-3">
							<label class="control-label">Zip</label>
							<input type="text" id="zip" name="zip" value="{{Input::old('zip')}}" class="form-control">
						</div>
						<div class="col-sm-3">
							<label class="control-label">Phone</label>							
							<input type="text" id="phone" name="phone" value="{{Input::old('phone')}}" class="form-control">
						</div>
					</div>
					<div class="row">
											
						<div class="col-sm-3">
							<label class="control-label">Latitude</label>							
							<input type="text" name="lat" id="lat" value="{{Input::old('lat')}}" class="form-control">
						</div>					
						<div class="col-sm-3">
							<label class="control-label">Longitude</label>							
							<input type="text" name="lng" id="lng" value="{{Input::old('lng')}}" class="form-control">
						</div>	
						<div class="col-sm-3">
							<label class="control-label">&nbsp;</label>
							<button type="button" class="btn btn-primary" value="Encode" onclick="codeAddress()">
								<i class="fa fa-search"></i> Lookup
							</button>
						</div>
					</div>	
					<div class="row">	
						<div class="col-sm-2">
							<label class="control-label"># Courts</label>							
							<input type="number" name="courts" value="{{Input::old('courts')}}" class="form-control">
						</div>				
						<div class="col-sm-4">
							<label class="control-label">Type of Club</label>
								{{ Form::select('map_icon', 
									[
									 'club' => 'Club', 
									 'college' => 'College/Univ',
									 'military' => 'Military', 
									 'rec' => 'Rec Center', 
									 'ymca' =>'YMCA'
									],									
									null, 
									['class' => 'form-control']) 
								}}
						</div>
					</div>
					<div class="row">	
						<div class="col-sm-12 alert alert-warning">
							<label for="chkSuport">
							<input id="chkSupport" class="checkbox" name="chkSupport" type="checkbox" />
								This club sanctions and/or supports <b>USA Racquetball</b> and the <b>Texas Racquetball Association</b> events.
							</label>
						</div>	
					</div>
					<div class="row">
						<div class="col-sm-12">
							<label class="control-label">Website</label>							
							<input type="text" name="url" value="{{Input::old('url')}}" class="form-control">
						</div>
					</div>
					<div class="row">							
						<div class="col-sm-12">
							<label class="control-label">Info about the Club</label>							
							<input type="text" name="info" value="{{Input::old('info')}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
	            </form>
            </div>
        </div>
    </div>
