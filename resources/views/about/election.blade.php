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
			<h1><i class="fa fa-check-square-o"></i> Board of Directors Election Process</h1>
		
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/about/board">Directors</a></li>
				<li class="active">Process</a></li>
				<li><a href='{{route('election.nominate')}}'>Nominate</a></li>
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
								2019</span>
								<div class="timeline-vline" ><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							
							<h2>ELECTION INFORMATION</h2>

							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato">Feb 06, 2019</span>
									</a>
								</li>							
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">John O'Neill</span>
									</a>
								</li>
							</ul>

							<p>The 2019 Election will have three (2) open positions for a three (3) year term.<p/>

							{{-- <p>Current Board member positions expiring are  Dale Gosser.</p> --}}

							<p>
								If you are interested in running or would like to nominate someone, fill out the Nomination Form or contact John O'Neill, TXRA Election Committee Director.</p>

							<p class="text-center"><a href='{{route('election.nominate')}}' class="btn btn-success">Start Nomination Form</a></p>

							<h2>ELECTION PROCESS</h2>
							<div class="hidden-xs">
								<ul class="process-steps nav nav-tabs nav-justified">
									<li class="active">
										<a href="#step1" data-toggle="tab">1</a>
										<h5 href="#step1" data-toggle="tab">Receive Nominiations</h5>
									</li>
									<li>
										<a href="#step2" data-toggle="tab">2</a>
										<h5 href="#step2" data-toggle="tab">Confirm Nominees</h5>
									</li>
									<li>
										<a href="#step3" data-toggle="tab">3</a>
										<h5 href="#step3" data-toggle="tab">Vote Online</h5>
									</li>
									<li>
										<a href="#step4" data-toggle="tab">4</a>
										<h5 href="#step4" data-toggle="tab">Induct new BODs</h5>
									</li>
								</ul>
						
								<div class="tab-content margin-top-60">
									<div role="tabpanel" class="tab-pane active" id="step1">
										<h4>Receive Nominiations</h4>
										<p>The Nominating Committee appointed by the Board should solicit and receive nominations and gather the qualifications and reasons for the nominee’s candidacy. Usually this entails a photo and a short bio submitted by the nominee.</p>
								
										<p>The nominating committee should make their report and provide the Secretary with each nominee’s data by Friday March 10th, 2019.</p>
									</div>

									<div role="tabpanel" class="tab-pane" id="step2">
										<h4>Confirm Nominees</h4>
										A confirmation of all nominees will be completed by Friday March 9th, 2019 with an election notice email to be sent to all TXRA members.
									</div>

									<div role="tabpanel" class="tab-pane" id="step3">
										<h4>Voting</h4>
										
										<p>The TXRA Election process will be held exclusively online via R2Sports. The election process will be simple starting with an email vote request to the TXRA membership.</p>

										From this <a target="election" href="http://www.r2sports.com/tourney/home.asp?TID=24798">online link </a>, you will login to R2Sports with your membership username and password. A VOTE menu option will offer a quick voting process where each nominee photo and biography will be listed. You can easily review each bio and vote for up to four (4) nominees. All votes will be registered anonymously controlled to only one vote per membership number. This voting process is FREE to all members.</p>
									</div>								

									<div role="tabpanel" class="tab-pane" id="step4">
										<h4>Induction</h4>
										Induct new Board of Directors at Regionals  
									</div>
								</div>						
							</div>
							<!-- Mobile vesion -->
							<div class="hidden-sm hidden-md hidden-lg">
								<div class="toggle toggle-transparent-body toggle-accordion">
									<div class="toggle active">
										<label>1. Receive Nominiations</label>
										<div class="toggle-content">
											<p>The Nominating Committee appointed by the Board should solicit and receive nominations and gather the qualifications and reasons for the nominee’s candidacy. Usually this entails a photo and a short bio submitted by the nominee.</p>
										</div>
									</div>

									<div class="toggle">
										<label>2. Confirm Nominees</label>
										<div class="toggle-content">
											<p>A confirmation of all nominees will be completed by Friday March 10th, 2019 with an election notice email to be sent to all TXRA members.</p>
										</div>
									</div>

									<div class="toggle">
										<label>3. Voting Online</label>
										<div class="toggle-content">
											<p>The TXRA Election process will be held exclusively online via R2Sports. The election process will be simple starting with an email vote request to the TXRA membership.

											From this <a target="election" href="http://www.r2sports.com/tourney/home.asp?TID=">online link TBD </a>, you will login to R2Sports with your membership username and password. A VOTE menu option will offer a quick voting process where each nominee photo and biography will be listed. You can easily review each bio and vote for up to four (4) nominees. All votes will be registered anonymously controlled to only one vote per membership number. This voting process is FREE to all members.</p>
										</div>
									</div>

									<div class="toggle">
										<label>4. Induction</label>
										<div class="toggle-content">
											<p>Induct new Board of Directors at Regionals, April 21, 2019</p>
										</div>
									</div>

								</div>
							</div>
						</div>

						<h3 id="htime">ELECTION TIMELINE</h3>
						<!-- POST ITEM -->
						<div class="blog-post-item">

							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								02<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								All nominations must be received by Friday, March 2, 2019.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								9<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								A confirmation of all nominees will be completed by Friday March 9, 2019 with an election notice email to be sent to all TXRA members.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<!-- timeline entry -->
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								15<span>Mar</span>
								<div class="timeline-vline"><!-- vertical line --></div>
							</div>
							<!-- /timeline entry -->
							<h4>
								An official 2019 TXRA Board of Directors election will be held between March 15th – March 31st, 2019.
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
								Online Voting ends March 31, 2019.
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
							Nominees will be notified by April 3, 2019 of election results with a mandatory induction at the 2019 Texas Regionals held Saturday, April 21, 2019.
							</h4>
						</div>
						<!-- POST ITEM -->
						<div class="blog-post-item">
							<div class="timeline-entry rounded"><!-- .rounded = entry -->
								21<span>Apr</span>
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