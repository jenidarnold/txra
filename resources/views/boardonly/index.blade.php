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
    colgroup col.success {
		  background-color: #dff0d8;
		}
		colgroup col.danger{
		  background-color: #f2dede;
		}
		colgroup col.warning {
		  background-color: #fcf8e3;
		}
		colgroup col.info {
		  background-color: #d9edf7;
		}
		th {
			font-weight: bold;
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
			<div class="side-nav margin-bottom-60 col-sm-12">

				<div class="side-nav-head">
					<button class="fa fa-bars"></button>
					<h4>REFERENCES</h4>
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
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">POLICIES</a>
						<ul>
							<li><a href="/about/bylaws" target="boardonly"><span class="size-11 text-muted pull-right"></span> Bylaws</a></li>
							<li><a href="/about/ethics" target="boardonly"><span class="size-11 text-muted pull-right"></span> Code of Ethics</a></li>
							<li><a href="/safesport" target="boardonly"><span class="size-11 text-muted pull-right"></span> SafeSport Training</a></li>
							<li><a href="/backgroundcheck" target="boardonly"><span class="size-11 text-muted pull-right"></span> Background Check</a></li>
						</ul>
					</li>
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">PROGRAMS</a>
						<ul>
							<li><a href="forms/awards/nominate" target="boardonly"><span class="size-11 text-muted pull-right"></span> Annual Awards</a></li>
							<li><a href="/programs/referee" target="boardonly"><span class="size-11 text-muted pull-right"></span> Referee Certification</a></li>
							<li><a href="/programs/instructors" target="boardonly"><span class="size-11 text-muted pull-right"></span> Texas Instructor Program (TIP)</a></li>
						</ul>
					</li>
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">GUIDELINES</a>
						<ul>
							<li><a href="/about/sanctioning" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sanctioning</a></li>
							<li><a href="/election" target="boardonly"><span class="size-11 text-muted pull-right"></span> Elections</a></li>
							<li><a href="/pitch-racquetball" target="boardonly"><span class="size-11 text-muted pull-right"></span> Sample Elevator Speech</a></li>
						</ul>
					</li>
					<li class="list-group-item active">
						<a class="dropdown-toggle" href="#" target="boardonly">STRATEGIC PLANS</a>
						<ul>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2018  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2019  </a></li>
							<li><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> 2020  </a></li>
						</ul>
					</li>
					<li class="list-group-item active"><a href="/board-minutes" target="boardonly" ><span class="size-11 text-muted pull-right"></span> Board Minutes</a></li>	
					<li class="list-group-item active"><a href="#" target="boardonly"><span class="size-11 text-muted pull-right"></span> Financial Reports</a></li>	
					<li class="list-group-item active">
							<a class="dropdown-toggle" href="#" target="boardonly">SURVEYS</a>
						<ul>
							<li><a href="https://www.surveymonkey.com/results/SM-Y6CX3KMLL/" target="boardonly"><span class="size-11 text-muted pull-right">10/20/2017</span> Member's Feedback for 2017 </a></li>
							<li><a href="https://www.surveymonkey.com/results/SM-LX7XPKMLL/" target="boardonly"><span class="size-11 text-muted pull-right">4/02/2018</span> 2017-18 TXRA Annual Awards Selection  </a></li>
							<li><a href="https://www.surveymonkey.com/results/SM-W9TXMKMLL/" target="boardonly"><span class="size-11 text-muted pull-right">4/13/2018</span> Self-Assessment Survey for Board Members  </a></li>

						</ul>
					</li>
				</ul>

			</div>
			<!-- /CATEGORIES LEFT-SIDE-->			
		</div>
	</section>

	<section>
		<div class="container"> 
			<div class="col-md-12">
				<div class="side-nav-head">
					{{-- <button class="fa fa-bars"></button> --}}
					<h4>BOARD PERFORMANCE MATRIX</h4>
				</div>

				<div class="alert-info alert">
					Each member of the board of directors plays a key role in the success of an organization,
					both in terms of governance and support. Recognizing that each member has a unique and
					valued set of attributes in terms of time, talent, and treasure to assist in achieving our mission
					and vision is important. To serve on a board is both a responsibility and a privilege. This
					sample matrix is intended to provide a benchmarking tool for board members to evaluate
					their level of contribution in the various aspects of their board responsibilities.
				</div>

				<div class="table-responsive">
					<table class="table table-bordered">
						<colgroup>
					        <col class="info"> </col>
					        <col class="danger"></col>
					        <col class="warning"></col>
					        <col class="success"></col>
					    </colgroup>
						<thead>
							<tr >
								<th class="label-primary text-white">BOARD MEMBER FUNCTION</th>
								<th class="label-danger text-white">THRESHOLD PARTICIPATION</th>
								<th class="label-warning text-white">FULL PARTICIPATION</th>
								<th class="label-success text-white">EXCEPTIONAL PARTICIPATION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="bold">Board/Committee Meetings</td>
								<td>Attend at least 70% of
									meetings and actively
									participate/provide input<br/><br/>
									Read/understand all
									material provided for
									meetings<br/><br/>
									Participate on a board
									committee</td>
								<td>Meet Threshold
									expectations<br/><br/>
									Attend 85% of meetings</td>
								<td>Meet Full expectations<br/><br/>
									Serve as a committee
									chair or an officer of the
									board</td>
							</tr>
							<tr>
								<td class="bold">Stewardship of talent and Treasure (Includes In-kind)</td>
								<td>Personally make annual
									contributions<br/><br/>
									Leverage gifts/in-kind
									contributions</td>
								<td>Meet Threshold
									expectations<br/><br/>
									Contribute to and attend
									at least one fundraising
									event</td>
								<td>Meet Full expectations<br/><br/>
									Contribute to and
									attend more than one
									fundraising event<br/><br/>
									Help identify new
									sources of revenue<br/><br/>
									Provide professional
									expertise for the
									organization operations</td>
							</tr>
							<tr>
								<td class="bold">Board Development</td>
								<td>Attend board orientation
									sessions
									Understand and
									articulate mission, vision,
									and key service offerings
									Provide names of
									potential board
									candidates</td>
								<td>Meet Threshold
									expectations<br/><br/>
									Nominate candidate(s)
									who can contribute to
									the organization</td>
								<td>Meet Full expectations<br/><br/>
									Actively recruit
									candidate(s)</br/>
									Mentor new board
									members</td>
							</tr>
							<tr>
								<td class="bold">Enhance Organization’s Public Speaking</td>
								<td>Become familiar with
									programs and services
									offered<br/><br/>
									Clearly articulate
									the mission, vision,
									programs/services,
									accomplishments, and
									goals within one’s own
									sphere of influence</td>
								<td>Meet Threshold
									expectations<br/><br/>
									Speak with others
									outside organization
									about mission, goals</td>
								<td>Meet Full expectations<br/><br/>
									Actively garner support
									from the community<br/><br/>
									Attend community
									events/meetings on
									behalf of the organization
									and promote
									organization to others</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<span class="text-muted text-center h6">Matrix source: BOARDSOURCE.ORG</span>
				</div>
			</div>
		</div>
	</section>
@stop