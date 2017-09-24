@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-sm header-md parallax parallax-3" style="background-image:url({{ asset('images/court/ymca_bandw_crop9.jpg') }}) ">
		<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
		<div class="container">

			<h1>RACQUETBALL RULES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="{{ route('play.basics')}}">Basics</a></li>
				<li class="active">Rules</li>
				<li><a href="{{ route('play.levels')}}">Skill Levels</a></li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->
<section>
	<table class="table table-condensed table-borderless">
		<tr>
	  		<td width="200px" class="hidden-xs">						
				<a href="http://www.teamusa.org/usa-racquetball/rules" target="new">
					<img class="img-responsive1 img-thumbnail"  width="200px" src="{{ asset('images/logos/usar.jpg') }}">
				</a>
			</td>
			<td>
				<h4><a href="http://www.teamusa.org/usa-racquetball/rules" target="new">
					USAR Official Rules & Regulations of Racquetball </a></h4>				
				<p class="list-group-item-text"> 
					<i class="fa fa-info-circle"></i> These rules may be downloaded and printed for reference. For information about reprint please contact USA Racquetball.
				</p>
				<br/>
				<div class="row">
					<div class="col-sm-2 col-sm-2-offset-2 col-xs-3 col-xs-offset-1" style="margin-bottom:10px">
						<a href="http://www.teamusa.org/usa-racquetball/rules" target="usar" class="btn btn-sm btn-primary">
							Online Version
						</a>
					</div>
					<div class="col-sm-2 col-xs-3" style="margin-bottom:10px">
						<a href="http://www.teamusa.org/~/media/USA_Racquetball/Documents/Rules/USAR-Rulebook.pdf?la=en" class="btn btn-sm btn-primary">
							Printable Version
						</a>
					</div>
					<div class="col-sm-2 col-xs-3" style="margin-bottom:10px">
						<a href="http://www.teamusa.org/-/media/USA_Racquetball/Documents/Rules/standardspecsforracquetballcourtconstructionrev09.pdf?la=en&hash=7B7E7CC45617E998943C7816828A7DDECD57E36C" class="btn btn-sm btn-warning">
							Court Specifications
						</a>
					</div>
					{{-- <div class="col-sm-2 col-sm-2-offset-2 col-xs-3 col-xs-offset-1" style="margin-bottom:10px">
						<a href="http://www.teamusa.org/-/media/USA_Racquetball/Documents/Rules/standardspecsforracquetballcourtconstructionrev09.pdf?la=en&hash=7B7E7CC45617E998943C7816828A7DDECD57E36C" class="btn btn-sm btn-primary">
							Eye Gaurds
						</a>
					</div> --}}
				</div>
			</td>
		</tr>	
		<tr>
	  		<td width="200px" class="hidden-xs">						
				<a href="http://www.teamusa.org/usa-racquetball/rules" target="usar">
					<img class="img-responsive1 img-thumbnail"  width="200px" src="{{ asset('images/logos/usar.jpg') }}">
				</a>
			</td>
			<td>
				<h4><a href="http://www.teamusa.org/usa-racquetball/how-to-play/rules/ask-otto" target="usar">
					Ask Otto, President of USAR Rules Committee</a></h4>				
				<p class="list-group-item-text"> 
					<i class="fa fa-info-circle"></i> Otto Dietrich has been a member of USA Racquetball's National Rules Committee for more than 30 years He has served as the sport's National Rules Commissioner. Now serving as the USAR's National President.
				</p>	
				<br/>
				<div class="row">
					<div class="col-sm-2 col-sm-2-offset-2 col-xs-3 col-xs-offset-1" style="margin-bottom:10px">
						<!-- Social Icons -->
						<div class="">
							{{-- <a href="https://www.facebook.com/otto" target="new" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a> --}}

							<a href="#" data-toggle="modal" data-target="#contactModal" class="social-icon social-icon-border social-call pull-left" data-placement="bottom" title="Contact Otto Dietrich">
								<i class="fa fa-envelope"></i>
								<i class="fa fa-envelope"></i>
							</a>
						</div>
						<!-- /Social Icons -->
					</div>	
				</div>					
			</td>
		</tr>	
		<tr>
	  		<td width="200px" class="hidden-xs">						
				<a href="#">
					<img class="img-responsive1 img-thumbnail"  width="200px" src="{{ asset('images/awards/2016/john_boyd.png') }}">
				</a>
			</td>
			<td>
				<h4><a href="#" data-toggle="modal" data-target="#contactModal">
					Ask Johnny, National Certified Referee</a></h4>				
				<p class="list-group-item-text"> 
					<i class="fa fa-info-circle"></i> Texan, Johnny Boyd, has been a National Certified Referee for many years.
					Written many articles on Rules (links). Created Videos.
				</p>	
				<br/>
				<div class="row">
					<div class="col-sm-2 col-sm-2-offset-2 col-xs-3 col-xs-offset-1" style="margin-bottom:10px">
						<!-- Social Icons -->
						<div class="">
							{{-- <a href="https://www.facebook.com/johnny.boyd.507" target="new" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a> --}}

							<a href="#" data-toggle="modal" data-target="#contactModal" class="social-icon social-icon-border  social-call pull-left" data-placement="bottom" title="Contact Johnny Boyd">
								<i class="fa fa-envelope"></i>
								<i class="fa fa-envelope"></i>
							</a>

						</div>
						<!-- /Social Icons -->					
					</div>	
				</div>		
			</td>
		</tr>	
	</table>
<section>
@stop