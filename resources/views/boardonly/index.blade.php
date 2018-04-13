@extends('layouts.app')
@section('style')
    <style type="text/css">
    .social-twitter {
    	display: none;
    }
    .box-flip {
    	margin-bottom: 10px;
    	height: 260px;
    }

    ul,li { list-style-type: none;
        list-style-position:inside;
        margin:0;
        padding:0; 
        font-size: 8pt;
    }
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><img src="{{asset('images/board/board.png')}}" height="24px"> BOARD OF DIRECTORS ONLY</h1>

			{{-- <!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/about/board">Directors</a></li>
				<li><a href="/about/committees">Commitees</a></li>
				<li><a href="/election/process">Elections</a></li>
			</ol><!-- /breadcrumbs -->
             --}}
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container"> 
			<!-- CATEGORIES LEFT-SIDE-->
			<div class="side-nav margin-bottom-60 col-md-6 col-sm-6">

				<div class="side-nav-head">
					<button class="fa fa-bars"></button>
					<h4>CATEGORIES</h4>
				</div>

				<ul class="list-group list-group-bordered list-group-noicon uppercase">
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">CULTURE</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Mission, values and vision statements</a></li>
						</ul>
					</li>
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">ORGANIZATION</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Organizational fact sheet  </a></li>
							<li><a href="/about/board" target="boardonly"><span class="size-11 text-muted pull-right"></span> Board Members  </a></li>
							<li><a href="/about/committees" target="boardonly"><span class="size-11 text-muted pull-right"></span> Committees  </a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">POLICIES</a>
						<ul>
							<li><a href="/about/bylaws" target="boardonly"><span class="size-11 text-muted pull-right"></span> Bylaws</a></li>
							<li><a href="/about/ethics" target="boardonly"><span class="size-11 text-muted pull-right"></span> Code of Ethics</a></li>
							<li><a href="/safesport" target="boardonly"><span class="size-11 text-muted pull-right"></span> SafeSport Training</a></li>
							<li><a href="/backgroundcheck" target="boardonly"><span class="size-11 text-muted pull-right"></span> Background Check</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">PROGRAMS</a>
						<ul>
							<li><a href="forms/awards/nominate" target="boardonly"><span class="size-11 text-muted pull-right"></span> Annual Awards</a></li>
							<li><a href="/programs/referee" target="boardonly"><span class="size-11 text-muted pull-right"></span> Referee Certification</a></li>
							<li><a href="/programs/instructors" target="boardonly"><span class="size-11 text-muted pull-right"></span> Texas Instructor Program (TIP)</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">GUIDELINES</a>
						<ul>
							<li><a href="/about/sanctioning" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sanctioning</a></li>
							<li><a href="/election" target="boardonly"><span class="size-11 text-muted pull-right"></span> Elections</a></li>
							<li><a href="/pitch-racquetball" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sample Elevator Speech</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">STRATEGIC PLANS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2018  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2019  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2020  </a></li>
						</ul>
					</li>
					<li class="list-group-item"><a href="/board-minutes" target="boardonly" ><span class="size-11 text-muted pull-right"></span> Board Minutes</a></li>	
					<li class="list-group-item"><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Financial Reports</a></li>	
					<li class="list-group-item">
							<a class="dropdown-toggle" href="#" target="boardonly">SURVEYS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Strategic Plan  </a></li>
						</ul>
					</li>
				</ul>

			</div>
			<!-- /CATEGORIES LEFT-SIDE-->

			<!-- CATEGORIES RIGHT-SIDE -->
			<div class="side-nav margin-bottom-60 col-md-6 col-sm-6">

				<div class="side-nav-head">
					<button class="fa fa-bars"></button>
					<h4>CATEGORIES</h4>
				</div>

				<ul class="list-group list-group-bordered list-group-noicon uppercase">
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">CULTURE</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Mission, values and vision statements</a></li>
						</ul>
					</li>
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">ORGANIZATION</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Organizational fact sheet  </a></li>
							<li><a href="/about/board" target="boardonly"><span class="size-11 text-muted pull-right"></span> Board Members  </a></li>
							<li><a href="/about/committees" target="boardonly"><span class="size-11 text-muted pull-right"></span> Committees  </a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">POLICIES</a>
						<ul>
							<li><a href="/about/bylaws" target="boardonly"><span class="size-11 text-muted pull-right"></span> Bylaws</a></li>
							<li><a href="/about/ethics" target="boardonly"><span class="size-11 text-muted pull-right"></span> Code of Ethics</a></li>
							<li><a href="/safesport" target="boardonly"><span class="size-11 text-muted pull-right"></span> SafeSport Training</a></li>
							<li><a href="/backgroundcheck" target="boardonly"><span class="size-11 text-muted pull-right"></span> Background Check</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">PROGRAMS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Annual Awards</a></li>
							<li><a href="/programs/referee" target="boardonly"><span class="size-11 text-muted pull-right"></span> Referee Certification</a></li>
							<li><a href="/programs/instructors" target="boardonly"><span class="size-11 text-muted pull-right"></span> Texas Instructor Program (TIP)</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">GUIDELINES</a>
						<ul>
							<li><a href="/about/sanctioning" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sanctioning</a></li>
							<li><a href="/election" target="boardonly"><span class="size-11 text-muted pull-right"></span> Elections</a></li>
							<li><a href="/pitch-racquetball" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sample Elevator Speech</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a class="dropdown-toggle" href="#" target="boardonly">STRATEGIC PLANS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2018  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2019  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2020  </a></li>
						</ul>
					</li>
					<li class="list-group-item"><a href="/board-minutes" ><span class="size-11 text-muted pull-right"></span> Board Minutes</a></li>	
					<li class="list-group-item"><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Financial Reports</a></li>	
					<li class="list-group-item">
							<a class="dropdown-toggle" href="#" target="boardonly">SURVEYS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Strategic Plan  </a></li>
						</ul>
					</li>
				</ul>

			</div>
			<!-- /CATEGORIES -->
		</div>
	</section>

@stop