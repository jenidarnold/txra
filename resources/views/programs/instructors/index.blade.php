@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-bullhorn"></i> Texas Instructor Program (TIP)</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="/programs/referee">Referee</a></li>
				<li><a href="/programs/juniors">Juniors</a></li>
				<li><a href="/programs/awards">Awards</a></li>
				<li class="active">TIP</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

		<!-- -->
		<section>
			<div class="container">

				<p class="">The Texas Instructor Program (TIP) is a comprehensive reimbursement program designed to encourage interested racquetball instructors to become nationally certified by reimbursing a portion of the cost of the USAR-IP certification clinics offered by USAR <a href="#TIP">(described below)</a>.<br/>

				<br/>The TIP Programming Incentive is a supplement program designed to assist Texas racquetball instructors in providing quality racquetball programs for Texas men, women and children and generating grass roots racquettball interest in their community <a href="#USAR-IP">(described below)</a>.<br/>
				</p>

				<div class="divider divider-center divider-color"><!-- divider -->
					<i class="fa fa-chevron-down"></i>
				</div>
				
				<h3 class="nomargin1"><a id="USAR-IP">The USAR-IP (Instructors Program)</a></h3>
				
				<div>
					The USAR-IP certification clinic conveys precise knowledge, skills and abilities required to teach racquetball efficiently; developing a clear comprehension and proficiency of the 10 Benchmarks of Instruction necessary to teach and train students; delivering an avenue for continuing education and advancement to assist qualified instructors in maintaining current informational skills; providing an evaluation process that facilitates consistency and quality control for instructional programs across the nation; and developing a high level of competence and confidence relative to primary instructional techniques. 
				</div>
				
				<br/>

					<div class="row">
						<!-- LEVEL 1 -->
						<div class="col-sm-8 col-sm-offset-2">					
							<div class="price-clean  price-clean-popular">  
								<div class="heading">  	         
									<h4>LEVEL 1</h4>
									<h5 class="text-primary bold">Instructor Certification</h5>
								</div>
								<hr />
								<div class="price-body">
									{{-- <div  class="text-left">
										Someone that has taken the USAR‐IP test and certification, passed the Safe Sport classes and maintains their CPR and background check.
										<span class="text-danger">Everyone must pass the Level 1 certification before they can upgrade to Level 2 or 3 certification.</span>
									</div>
									<hr/> --}}
									<ul class="text-left">
										<li>Includes online course/course manual/certification
										<li>Initial certification is for a three-­year period.
										<li>Recertification is $25 every 3 years
										<li>IP Membership also required each year of $75 to stay enrolled in program!
										<li><span class="text-danger">Everyone must pass the Level 1 certification before they can upgrade to Level 2 or 3 certification.</span>						
									</ul>
									<hr>
									<h5 class="text-danger bold">Level 1 Certification<span class="pull-right text-danger bold">Total Cost $75</span></h5>
								</div>
								<hr/>
								<a href="http://www.teamusa.org/USA-Racquetball/Programs/Instructor-Certification" target="usar" class="btn btn-primary btn-lg btn-block size-15">Sign up</a>
							</div>
						</div>
					</div>
					<br/>
					<div class="row">
						<!-- LEVEL 2 -->
						<div class="col-sm-8 col-sm-offset-2">					
							<div class="price-clean  price-clean-popular">  
								<div class="heading">  							               
									<h4>LEVEL 2 </h4>
									<h5 class="text-primary bold">ADVANCED Certification</h5>
								</div>
								<hr />
								<div class="price-body">
									{{-- <div  class="text-left">Someone that has achieved high open level as a player. Professional level with the USA Racquetball instructor’s Program or has been grandfathered in with same level achievement in any other organization and become a member of USAR‐IP. Professional instructors must participate in online educational requirements and mentoring with a Master Professional.</div>
									<hr/> --}}
									<ul class="text-left">										
										<li>Includes online course/course manual/certification
										<li>Initial certification is for a three-­year period.
										<li>Recertification is $25 every 3 years
										<li>IP Membership also required each year of $75 to stay enrolled in program!
										<li>This program also includes:
											<ul>
												<li>Lectures, Discussions and Team Building
												<li>Written and Practical Test
												<li>Hitting Test
												<li>Demonstration of Drills to Students
												<li>Teaching and Lesson Plans
											</ul>
									</ul>
									<hr/>
									<h5 class="text-danger bold">Level 2 Certification<span class="pull-right text-danger bold">Total Cost $295</span></h5>
									<h5 class="text-success bold">TIP reimburses 100%<span class="pull-right text-success bold">Final Cost $0</span></h5>
								</div>
								<hr />						
								<a href="http://www.teamusa.org/USA-Racquetball/Programs/Instructor-Certification" target="usar" class="btn btn-primary btn-lg btn-block size-15">Sign up</a>
							</div>
						</div>
					</div>
					<br/>
					<div class="row">
						<!-- LEVEL 3 -->
						<div class="col-sm-8 col-sm-offset-2">					
							<div class="price-clean  price-clean-popular">  
								<div class="heading">              
									<h4>LEVEL 3</h4>										
									<h5 class="text-primary bold">ELITE Certification</h5>
								</div>
								<hr />
								<div class="price-body">
									{{-- <div  class="text-left">Someone that has attained professional instructor status, and also offers instruction in large group settings. The professional Clinician has also attained a professional or high open playing status in their careers. They must also participate in online educational requirements or mentoring with a master professional. This person must also have participated in playing or coaching on a national or international level for at least fifteen years.</div>
									<hr/> --}}
									<ul class="text-left">	
										<li>Includes online course/course manual/certification
										<li>Initial certification is for a three-­year period.
										<li>Recertification is $25 every 3 years
										<li>IP Membership also required each year of $75 to stay enrolled in program!
										<li>This program also includes:
											<ul><li>Everything in Level 2 Advanced Certification + Video Analysis Training</li></ul>
									</ul>
									<hr/>
									<h5 class="text-danger bold">Level 3 Certification<span class="pull-right text-danger bold">Total Cost $295</span></h5>
									<h5 class="text-success bold">TIP reimburses 100%<span class="pull-right text-success bold">Final Cost $0</span></h5>
								</div>	
								<hr/>				
								<a href="http://www.teamusa.org/USA-Racquetball/Programs/Instructor-Certification" target="usar" class="btn btn-primary btn-lg btn-block size-15">Sign up</a>
							</div>
						</div>
					</div>

				<br/>
				<div class="row">
						<div class=" col-xs-12 col-sm-8 col-sm-offset-2 alert alert-danger">In order to receive the Level 2/3 reimbursement, the racquetball instructor must be a Texas resident, a current member of USAR and a current member of USAR-IP. Reimbursement requests must be submitted to the Texas Instructor Program Coordinator along with evidence of successful completion of the certification clinic.</div>
				</div>

				<div class="divider divider-center divider-color"><!-- divider -->
					<i class="fa fa-chevron-down"></i>
				</div>

				<div class="container">
										
					<a id="TIP"><h3>Texas Instructor Program (TIP) Programming Incentive</h3></a>
									
					<div class="testimonial-contentXXX">
						<p>
							This supplemental program provides compensation ($150 per quarter) for level 2 & 3 certified USAR-IP instructors holding the Texas Instructor Program (TIP) designation for conducting adult or junior clinics, leagues and other events promoting racquetball in Texas.
						</p>

						<p>In order to receive reimbursement under this supplemental program, the racquetball instructor must:
							<ul class="list-unstyled list-icons">
						 		<li><i class="fa fa-check text-success"></i>Be a Texas resident
						 		<li><i class="fa fa-check text-success"></i>A current member of USAR 
						 		<li><i class="fa fa-check text-success"></i>and a current member of USAR-IP.
						 	</ul>


						<p>Upon approval, instructors will receive $150 each quarter if they schedule at least three clinics, leagues or events or any combination of:

						<ul class="list-unstyled list-icons">
							<li><i class="fa fa-check text-success"></i> One junior clinic, league or event</li>
							<li><i class="fa fa-check text-success"></i> One women’s clinic, league or event</li>
							<li><i class="fa fa-check text-success"></i> One adult clinic, league or event</li>
						</ul>
							Each event must include at least five (5) attendees to qualify. Product demos do not qualify.
						</p>
						Evidence of the events must be submitted to the TIP Coordinator and must consist of a description of the event, list of attendees, at least three digital photos of the actual event. Upon meeting these requirements the racquetball instructor will be issued the TIP Programming Incentive funds.</p>

						<div class="col-md-6">
							<address>
								<b>Coordinator</b><br/>
								<a href="/play/instructors" target="new" class="text-primary">Mike Sorensen</a><br/>
								instructors@mg.texasracquetball.org<br/>
								(469) 233-4803 												
							</address>
						</div>										
					</div>				
				</div>
			</section>
			<!-- / -->

			<!-- 
			CALLOUT

			FULLWIDTH: OUTSIDE OF <section> 

				Available Classes:
				alert-default
				alert-info
				alert-warning
				alert-danger
				alert-success
				alert-dark
			-->

			<div class="callout alert alert-transparent noborder noradius nomargin">

				<div class="text-center">

					<h4><a href="/forms/contact" class="btn btn-primary btn-lg margin-top-30">CONTACT US NOW</a> </h4>

				</div>

			</div>
			<!-- /CALLOUT -->

@stop
