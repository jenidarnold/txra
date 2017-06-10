@extends('layouts.app')
@section('style')
    <style type="text/css">
    	.blog-post-item {
    		margin-bottom: 0px;
    		padding-top: 32px;
    		padding-bottom: 32px;
    		padding-left: 10px;
    		border-bottom: 0px
    	}
    	#htime {
    		margin: 0px 0px 0px 0px !important;
    	}
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">
			<br/>
			<h1>TXRA Board of Directors Nomination and Election Process</h1>
		
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li class="active">Elections</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->
			<!-- -->
			<section>
				<div class="container">

					<!-- TIMELINE -->
					<div class="timeline"><!-- .timeline-inverse = right position [left on RTL] -->
						<div class="timeline-hline"><!-- horizontal line --></div>

						<!-- POST ITEM -->
						<div class="blog-post-item">
							
						<!-- timeline entry -->
							<div class="timeline-entry"><!-- .rounded = entry -->
								2018</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							
							<h2>ELECTION INFORMATION</h2>

							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato">Jun 01, 2017</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-comment-o"></i> 
										<span class="font-lato">28 Comments</span>
									</a>
								</li>								
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">Sean Arnold</span>
									</a>
								</li>
							</ul>

							<p>The 2018 Election will have two (2) open positions for a three (3) year term. _____ will expire.<p/>

							<p>Current Board members are Michael Kaplan, Wendy Akins, Sean Arnold, Mike Griz, Lance Gilliam, Tom Doughtry, Dale Gosser, Mitchell McCoy, Julienne Arnold, Mike Sorenson, Brad Giezentanner, and John O'Niel.</p>

							<p>
								If you are interested in running or would like to nominate someone, fill out the <a href='{{route('election.nominate')}}'>Nomination Form</a> or contact <a mailto:sean@arnold.net>Sean Arnold</a>, TXRA Election Committee Director.
							</p>

							<h2>ELECTION PROCESS</h2>
							<ul class="process-steps nav nav-tabs nav-justified">
								<li class="active">
									<a href="#step1" data-toggle="tab">1</a>
									<h5>Receive Nominiations</h5>
								</li>
								<li>
									<a href="#step2" data-toggle="tab">2</a>
									<h5>Confirm Nominees</h5>
								</li>
								<li>
									<a href="#step3" data-toggle="tab">3</a>
									<h5>Vote Online</h5>
								</li>
								<li>
									<a href="#step4" data-toggle="tab">4</a>
									<h5>Induct new BODs</h5>
								</li>
							</ul>
							<div class="tab-content margin-top-60">
								<div role="tabpanel" class="tab-pane active" id="step1">
									<h4>Receive Nominiations</h4>
									<p>The Nominating Committee appointed by the Board should solicit and receive nominations and gather the qualifications and reasons for the nominee’s candidacy. Usually this entails a photo and a short bio submitted by the nominee.</p>
							
									<p>The nominating committee should make their report and provide the Secretary with each nominee’s 	data by Friday March 10th, 2017.</p>
								</div>

								<div role="tabpanel" class="tab-pane" id="step2">
									<h4>Confirm Nominees</h4>
									A confirmation of all nominees will be completed by Friday March 10th, 2017 with an election notice email to be sent to all TXRA members.
								</div>

								<div role="tabpanel" class="tab-pane" id="step3">
									<h4>Voting</h4>
									
									<p>The TXRA Election process will be held exclusively online via R2Sports. The election process will be simple starting with an email vote request to the TXRA membership.</p>

									<p>From an online link, you will <a href="http://r2sports.com">login to R2Sports</a> with your membership username and password. A VOTE menu option will offer a quick voting process where each nominee photo and biography will be listed. You can easily review each bio and vote for up to four (4) nominees. All votes will be registered anonymously controlled to only one vote per membership number. This voting process is FREE to all members.</p>
								</div>								

								<div role="tabpanel" class="tab-pane" id="step4">
									<h4>Induction</h4>
									Induct new Board of Directors at Regionals  
								</div>
							</div>						
						</div>

						<h3 id="htime">ELECTION TIMELINE</h3>
						<!-- POST ITEM -->
						<div class="blog-post-item">

							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								03<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								All nominations must be received by Friday, March 3rd, 2017.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								10<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								A confirmation of all nominees will be completed by Friday March 10th, 2017 with an election notice email to be sent to all TXRA members.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								17<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								An official 2017 TXRA Board of Directors election will be held between March 17th – March 31st, 2017.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								31<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								Online Voting ends March 31st, 2017.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								03<span>Apr</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
							Nominees will be notified by April 3rd, 2017 of election results with a mandatory induction at the 2017 Texas Regionals held Saturday, April 22nd, 2017.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								22<span>Apr</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								Induct new Board of Directors at Regionals  
							</h4>
						</div>
						<!-- /POST ITEM -->

					</div>
					<!-- /TIMELINE -->
					
				</div>
			</section>
			<!-- / -->



@stop