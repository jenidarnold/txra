@extends('layouts.app')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="glyphicon glyphicon-gift text-danger"></i> MY REWARD POINTS</h1>
			<h5>Balance: {{\App\Credit::balance($id)}} points</h5>
	
			{{-- <!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Gallery</li>		
				<li><a href="/forms/awards/nominate/">Nominations</a></li>					
			</ol><!-- /breadcrum --}}
		</div>
	</section>
	<!-- /PAGE HEADER -->

<!-- -->
	<section>
		<div class="container">
			<div class="row">
				<div class="table-responsive">
					<table class="table table-condensed table-striped">
						<tr>
							<th>ID</th>
							<th>Date</th>
							<th>Description</th>
							{{-- <th>Type</th> --}}
							<th class="text-right">Amount</th>
							<th class="text-right">Balance</th>
						</tr>
						{{--*/ $balance = \App\Credit::balance($id)  /*--}}
						@foreach($credits as $c)
							<tr>
								<td>{{$c->id}}</td>
								<td>{{$c->created_at}}</td>
								<td>{{$c->description}}</td>
								{{-- <td>{{$c->type_id}}</td> --}}
								<td class="text-right
								@if($c->amount < 0)
                                    text-danger
								@else
									text-primary
								@endif
									">
									{{$c->amount}}
								</td>
								<td class="text-right
								@if($balance < 0)
                                    text-danger
								@else
									text-primary
								@endif
									">
									{{$balance}}
								</td>								
							</tr>
							{{--*/ $balance -= $c->amount  /*--}}
						@endforeach
					</table>
				</div>
			</div>
			
		</div>	
	</section>
@stop