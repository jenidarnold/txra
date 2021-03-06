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
    	.modal-footer{
    		text-align: center;
    	}
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><img src="{{asset('images/icons/whistle.png')}}" height="40px"></i> Referee Certification Programs</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="/programs/juniors">Juniors</a></li>
				<li><a href="/programs/instructors">TIP</a></li>
				<li class="active">Referee</li>
				<li><a href="/programs/awards">Awards</a></li>				
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
					<div class="price-clean  price-clean-popular">  
						<div class="heading">  
							<div class="ribbon"> 
								<div class="ribbon-inner">POPULAR</div>
							</div>    
							<br/>                         
							<h4>
								FREE
							</h4>
						</div>
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>For individuals who want a better understanding of the rules</li>
								<li>Online rules clinic </li>
								<li>A step closer to certification</li>
							</ul>
						</div>
						<hr />						
						<button type="button" class="btn btn-3d btn-primary" data-toggle="modal" data-target=".modal-free">Learn More</button>
					</div>
					<!-- FREE Modal -->
					<div class="modal fade modal-free" tabindex="-1" role="dialog" aria-labelledby="free" aria-hidden="true">
						<div class="modal-dialog modal-md">
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
										
									</ul>			
								</div>
								<div class="modal-footer">
									To enroll, <a href="https://www.r2sports.com/membership/login.asp" target="r2sports">login into R2Sports.com</a>, then navigate to <a href="https://www.r2sports.com/membership/USARrefCertification.asp" target="r2sports"> Online Training</a>	
								</div>	
							</div>
						</div>
					</div>
					<!-- /FREE Modal -->
				</div>
				<div class="col-md-3 col-sm-4">
					
					<div class="price-clean">
						<div class="price-heading">      
							<h4>
								<sup>$</sup>10
							</h4>
							<h5> LEVEL 1 NATIONAL CERTIFICATION</h5>
						</div>
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>Online rules clinic</li>
								<li>Written rules test </li>
								<li>Video assessment test</li>
								<li>Certification valid for 3 years!</lu>
							</ul>
						</div>
						<hr />
						<button type="button" class="btn btn-3d btn-teal" data-toggle="modal" data-target=".modal-level1">Learn More</button>
					</div>		
					<!-- Level 1 Modal -->
					<div class="modal fade modal-level1" tabindex="-1" role="dialog" aria-labelledby="level1" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- header modal -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title" id="level1">LEVEL 1 NATIONAL REFEREE CERTIFICATION REQUIREMNTS</h3>
								</div>

								<!-- body modal -->
								<div class="modal-body">
									<h4>Online initial certification requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> View complete video rules clinic (4 parts)</li>	
										<li class="list-group-item"> Pass the rules test with at least a score of 86. (50 questions)
										<li class="list-group-item"> Pay the $10 fee to complete certification with the video assessment test
										<li class="list-group-item"> Pass the video assessment test with at least a score of 80. (25 videos)
										<li class="list-group-item"> Certification is valid for 3 years from the date of completion
										<i><b> A person will only be allowed one attempt to pass the video match assessment in a 24 hour period. No charge for re-testing. </b></i>
									</ul>

									<h4>Renewal requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> View the complete video Case Study clinic. (4 parts)</li>
										<li class="list-group-item"> Pass the online test with a score of at least 86.</li>
										<li class="list-group-item"> Pay a $10 renewal fee.</li>
										<li><i><b>You must renew within 30 days of your expiration or your certification will be void and you must complete all parts of the process again as outlined above. Upon payment of your fee your renewal date for your level of certification will be updated.</b></i></li>
									</ul>

								</div>
								<div class="modal-footer">
									To enroll, <a href="https://www.r2sports.com/membership/login.asp" target="r2sports">login into R2Sports.com</a>, then navigate to <a href="https://www.r2sports.com/membership/USARrefCertification.asp" target="r2sports"> Online Training</a>	
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
							<h5> LEVEL 2 NATIONAL CERTIFICATION</h5>
						</div>	
						<hr />
						<div class="price-body">
							<ul class="text-left">
								<li>Officiates 5 matches at a national event</li>
								<li>5<sup>th</sup> match assessed by national assessor</li>
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
									<h3 class="modal-title" id="level2">LEVEL 2 NATIONAL REFEREE CERTIFICATION REQUIREMNTS</h3>
								</div>

								<!-- body modal -->
								<div class="modal-body">
									<h4>Initial certification requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> Complete the Level 1 requirements with a passing grade.</li>	
										<li class="list-group-item"> Pay the $10 Level 2 fee.
										<li class="list-group-item"> Referee 10 matches (8 matches at any level, plus 2 assessed matches)
										<li class="list-group-item"> Referee 5 matches at National Singles, National Doubles, or the US Open at the Men A level or above. If at National Singles or the US Open two matches must be singles and two matches must be doubles. The fifth match can be either singles or doubles.

										<li class="list-group-item"> The last one of the 5 matches will be assessed by a USAR certification assessor. It must utilize line judges. Line judges must be obtained by the referee being tested and be acceptable to the players. The match must be accepted by the assessor as being one that will test the skills of the referee. The assessed match cannot be requested until the first four matches are complete.
										<li class="list-group-item">Pass the assessed match with at least a score of 90.
										<li class="list-group-item">Upon completion with a passing score your name with be added to the USAR Referee Certification database as a Level 2 referee.
										<li class="list-group-item"> Certification is valid for 3 years from the date of completion										
									</ul>

									<h4>Renewal Requirements:</h4>
									<ul class="list-group">
										<li class="list-group-item"> View the complete video Case Study clinic. (4 parts).
										<li class="list-group-item"> Pass the online test with a score of at least 92.
										<li class="list-group-item"> Pay a $10 renewal fee.
										<li class="list-group-item">You must renew within 30 days of your expiration or your certification will be void and you must complete all parts of the process again as outlined above. Upon payment of your fee your renewal date for your level of certification will be updated.

									</ul>

								
								
								</div>
								<div class="modal-footer">
									To enroll, <a href="https://www.r2sports.com/membership/login.asp" target="r2sports">login into R2Sports.com</a>, then navigate to <a href="https://www.r2sports.com/membership/USARrefCertification.asp" target="r2sports"> Online Training</a>	
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
							<h5> JUNIOR CERTIFICTION </h5>							
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
										</li>
									<li class="list-group-item">
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
							<div class="modal-footer">
								To enroll, <a href="https://www.r2sports.com/membership/login.asp" target="r2sports">login into R2Sports.com</a>, then navigate to <a href="https://www.r2sports.com/membership/USARrefCertification.asp" target="r2sports"> Online Training</a>	
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@stop