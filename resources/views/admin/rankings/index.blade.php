@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
	<div class="container">
		<div class="row">
			<h3>Download Rankings</h3>
		</div>
	
		<div class="row">
			<div class="col-sm-6">
				<table class="table">
					<tr>
						<th>Division</th>
						<th class="text-center">Texas</th>
						<th class="text-center">National</th>
					</tr>
					<tr>
						<th>Singles</th>
						<td>
							<a href="{{ route('events.download.rankings', ['group_id' => 1, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 2, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
						<td>
							<a href="{{ route('events.download.rankings', ['group_id' => 1, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 2, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
					</tr>
					<tr>
						<th>Doubles</th>
						<td><a href="{{ route('events.download.rankings', ['group_id' => 3, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 4, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
						<td><a href="{{ route('events.download.rankings', ['group_id' => 3, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 4, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
					</tr>
					<tr>
						<th>Mixed</th>
						<td><a href="{{ route('events.download.rankings', ['group_id' => 5, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 6, 'location_id' => 1]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
						<td><a href="{{ route('events.download.rankings', ['group_id' => 5, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-info">Men</button>
							</a>
							<br/>
							<a href="{{ route('events.download.rankings', ['group_id' => 6, 'location_id' => 0]) }}" >
								<button class="btn btn-block btn-danger">Women</button>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				@if(isset($rankings))
					<h5>{{$rankings->count() }} records downloaded</h5>
					<ul>
					@foreach ($rankings as $r)
						<li> {{$r}}</li>
					@endforeach
					</ul>
				@endif
			</div>
		</div>
</div>
@stop