@extends('layouts.app')
@section('style')
    <style type="text/css">
    	h5 {
    		color: #0F597B !important;
    	}
    	.price-heading {
    		height:80px;
    	}
    	.price-body{
    		height:100px;
    	}
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-bullhorn"></i> Referee Certification Program</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Referee</a></li>
				<li class="active">Certification</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			<div class="row">

				<!-- FREE -->
				<div class="col-md-3 col-sm-4">					
					<div class="price-clean">  
						<div class="heading">                              
							<h4>
								FREE
							</h4>
							<h5> LEVEL 1 </h5>
						</div>
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>For individuals who want a better understanding of the rules</li>
								<li>Online rules clinic </li>
							</ul>
						</div>
						<hr />						
						<button type="button" class="btn btn-3d btn-teal" data-toggle="modal" data-target=".modal-free">Learn More</button>
					</div>
					<!-- FREE Modal -->
					<div class="modal fade modal-free" tabindex="-1" role="dialog" aria-labelledby="free" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- header modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title" id="level1">FREE REFEREE CLINIC</h3>
								</div>

								<!-- body modal -->
								<div class="modal-body">
									<h4>Initial certification requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item">Attend an online rules clinic</li>		
										<li>To enroll, <a href="https://www.r2sports.com/membership/login.asp" target="r2sports">login into R2Sports</a>, 
											then go to <a href="https://www.r2sports.com/membership/USARrefCertification.asp" target="r2sports"> Online Training</a>	
										</li>								
									</ul>	

													
								</div>
							</div>
						</div>
					</div>
					<!-- /FREE Modal -->
				</div>
				<div class="col-md-3 col-sm-4">
					
					<div class="price-clean  price-clean-popular">
						<div class="price-heading"> 
							<div class="ribbon"> 
								<div class="ribbon-inner">POPULAR</div>
							</div>                                
							<h4>
								<sup>$</sup>10<em></em>
							</h4>
							<h5> LEVEL 1 CERTIFIED</h5>
						</div>
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>State Level</li>
								<li>Online rules clinic and video assessment test. </li>
								<li>Certification valid for 3 years!</lu>
							</ul>
						</div>
						<hr />
						<button type="button" class="btn btn-3d btn-primary" data-toggle="modal" data-target=".modal-level1">Learn More</button>
					</div>		
					<!-- Level 1 Modal -->
					<div class="modal fade modal-level1" tabindex="-1" role="dialog" aria-labelledby="level1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- header modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title" id="level1">LEVEL 1 (STATE LEVEL) REFEREE CERTIFICATION STANDARDS</h3>
								</div>

								<!-- body modal -->
								<div class="modal-body">
									<h4>Initial certification requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item">Attend a rules clinic</li>	
										<li class="list-group-item"> Pass a written test with at least a score of 86 or above (a closed book test)
										<li class="list-group-item"> Referee 10 matches (8 matches at any level, plus 2 assessed matches)
										<li class="list-group-item"> Pass two match assessments (one singles and one doubles) with a score of at least 90 on each.
										These matches must be (1) a semi final or final match in the men’s B (or higher) singles, and (2) a
										semi final or final match in the men’s C (or higher) doubles. The matches selected for these
										assessments must be approved by assessor as being ones that offer a valid test of reffing skills.
										<li class="list-group-item"> Pay a $10 fee
										<li class="list-group-item"> Certification is valid for 3 years from the date of completion
										<i><b> A person will only be allowed one attempt to pass the written test and/or match
										assessment at each tournament. </b></i>
									</ul>

									<h4>Certified Referee Requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> Attend at least one Referee Case Study clinic each year
										<li class="list-group-item"> A yearly-unannounced observation by a state representative will be done on each certified referee
										to ensure they are maintaining a high standard of refereeing skills.
										<li class="list-group-item"> At the end of the 3-year certification, certified referees will be required to retake the written test
										(minimum score of 86), attend either a rules or case study clinic, pass a match assessment
										(minimum score of 90), and pay $10.00.
									</ul>

									<h4>Pending Certification</h4>
									<ul class="list-group">
										<li class="list-group-item"> Pass the written test with a score of at least 86.
										<li class="list-group-item"> Attend a Rules Clinic
										<li class="list-group-item"> Pay fee of $10.00
										<li class="list-group-item"> Working on completing the required 10 matches
										<li class="list-group-item"> All requirements to attain certification must be completed within 12 months. Failure to do so will
										require the player to re-start the entire certification process from the beginning.
									</ul>

									<h4>The State Association will offer 2 types of clinics.</h4>
									<ul class="list-group">
										<li class="list-group-item"> Rules Clinic: This clinic will go over the basic rules of the game and what the referee’s
										responsibilities are.
										<li class="list-group-item"> Case Study Clinic: This clinic will go over rules interpretation and different play scenarios that
										may occur while refereeing.
									</ul>

									The State Association has the right and responsibility to revoke or place a certification in pending
									status in the best interest of the sport of racquetball. The State Association also has the right to
									modify the requirements of this document, but must notify the program director of each change made.
								</div>
							</div>
						</div>
					</div>
					<!-- /Level 1 Modal -->
				</div>

				<div class="col-md-3 col-sm-4">		
					<div class="price-clean">	
						<div class="price-heading">		
							<h4>
								<sup>$</sup>10
							</h4>
							<h5> LEVEL 2 CERTIFIED</h5>
						</div>	
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>National Level</li>
								<li>Added to the USAR Referee Certification database</li>
							</ul>
						</div>
						<hr />						
						<button type="button" class="btn btn-3d btn-teal" data-toggle="modal" data-target=".modal-level2">Learn More</button>
					</div>
					<!-- Level 2 Modal -->
					<div class="modal fade modal-level2" tabindex="-1" role="dialog" aria-labelledby="level2" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- header modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title" id="level2">LEVEL 2 (NATIONAL LEVEL) REFEREE CERTIFICATION STANDARDS</h3>
								</div>

								<!-- body modal -->
								<div class="modal-body">
									<h4>Initial certification requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item">Attend a rules clinic</li>	
										<li class="list-group-item"> Pass a written test with at least a score of 86 or above (a closed book test)
										<li class="list-group-item"> Referee 10 matches (8 matches at any level, plus 2 assessed matches)
										<li class="list-group-item"> Pass two match assessments (one singles and one doubles) with a score of at least 90 on each.
										These matches must be (1) a semi final or final match in the men’s B (or higher) singles, and (2) a
										semi final or final match in the men’s C (or higher) doubles. The matches selected for these
										assessments must be approved by assessor as being ones that offer a valid test of reffing skills.
										<li class="list-group-item"> Pay a $10 fee
										<li class="list-group-item"> Certification is valid for 3 years from the date of completion
										<i><b> A person will only be allowed one attempt to pass the written test and/or match
										assessment at each tournament. </b></i>
									</ul>

									<h4>Certified Referee Requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> Attend at least one Referee Case Study clinic each year
										<li class="list-group-item"> A yearly-unannounced observation by a state representative will be done on each certified referee
										to ensure they are maintaining a high standard of refereeing skills.
										<li class="list-group-item"> At the end of the 3-year certification, certified referees will be required to retake the written test
										(minimum score of 86), attend either a rules or case study clinic, pass a match assessment
										(minimum score of 90), and pay $10.00.
									</ul>

									<h4>Pending Certification</h4>
									<ul class="list-group">
										<li class="list-group-item"> Pass the written test with a score of at least 86.
										<li class="list-group-item"> Attend a Rules Clinic
										<li class="list-group-item"> Pay fee of $10.00
										<li class="list-group-item"> Working on completing the required 10 matches
										<li class="list-group-item"> All requirements to attain certification must be completed within 12 months. Failure to do so will
										require the player to re-start the entire certification process from the beginning.
									</ul>

									<h4>The State Association will offer 2 types of clinics.</h4>
									<ul class="list-group">
										<li class="list-group-item"> Rules Clinic: This clinic will go over the basic rules of the game and what the referee’s
										responsibilities are.
										<li class="list-group-item"> Case Study Clinic: This clinic will go over rules interpretation and different play scenarios that
										may occur while refereeing.
									</ul>

									The State Association has the right and responsibility to revoke or place a certification in pending
									status in the best interest of the sport of racquetball. The State Association also has the right to
									modify the requirements of this document, but must notify the program director of each change made.
								</div>
							</div>
						</div>
					</div>
					<!-- /Level 2 Modal -->
				</div>
				<!-- LEVEL 2 -->

				<!-- JUNIORS -->
				<div class="col-md-3 col-sm-4">					
					<div class="price-clean">  
						<div class="price-heading">                              
							<h4>
								<sup>$</sup>5
							</h4>
							<h5> JUNIOR CERTIFIED </h5>							
						</div>
						<hr/>
						<div class="price-body">
							<ul class="text-left">
								<li>For juniors competing in national events.</li>
							</ul>
						</div>	
						<hr />						
						<button type="button" class="btn btn-3d btn-teal" data-toggle="modal" data-target=".modal-junior">Learn More</button>
					</div>
				
				</div>
				<!-- Junior Modal >-->
				<div class="modal fade modal-junior" tabindex="-1" role="dialog" aria-labelledby="junior" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<!-- header modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title" id="junior">JUNIOR CERTIFICATION STANDARDS</h3>
							</div>

							<!-- body modal -->
							<div class="modal-body">
								<h4>Certification Requirements For Juniors:</h4>
								<ul class="list-group">
									<li class="list-group-item">Attend a rules clinic</li>
									<li class="list-group-item">Pass the written test with at least a score of 86 or above (closed book test)</li>								
									<li class="list-group-item"> Attend a rules clinic</li>
									<li class="list-group-item"> Pass the written test with at least a score of 86 or above (closed book test)</li>
									<li class="list-group-item"> Referee 6 matches (5 matches at any level, plus one assessed match)</li>
									<li class="list-group-item"> Pass one match assessment with a score of at least 90 The match must be a junior’s match or
									else at least a men’s or women’s Beginner match. The match selected for assessment must be approved by assessor.</li>
									<li class="list-group-item"> Pay a $5 fee</li>
									<li class="list-group-item"> Certification is good for 3 years</li>
									<li class="list-group-item"> Once begun, the person has 12 months to complete all requirements to attain certification. Failure
										to do so will require the player to re-start the entire certification process from the beginning.
										<br/>
										<i><b>A player will only be allowed one attempt to pass the written test and/or match
										assessment at each tournament.</b></i>
										</li>
								</ul>
								
								<h4>Certified Referee Requirements:</h4>
								<ul class="list-group">
									<li class="list-group-item"> Attend at least one Referee Case Study clinic each year</li>
									<li class="list-group-item"> A yearly-unannounced observation by a state representative will be done on each certified junior
									referee to ensure they are maintaining a high standard of refereeing skills.</li>
									<li class="list-group-item"> At the end of the 3-year certification, the referee will be required to retake the written test
									(minimum score of 86), attend either a rules or case study clinic, pass the match assessment
									(minimum score of 90), and pay $5.00. </li>
								</ul>

								<h5>The State will provide each certified referee with a referee card stating their certification and expiration date.</h5>
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@stop