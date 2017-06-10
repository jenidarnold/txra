@extends('layouts.app')
@section('style')
    <style type="text/css">
    .txra {
    	font-weight: 600;
    }
    </style>
@stop
@section('content')
	<section class="page-header page-header-xs">
		<div class="container">

			<h1>DONATIONS to <span class="txra">TXRA</span></h1>
			<h4>Support Racquetball in Texas</h4>
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">DONATE</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			<div class="row countTo-md text-center">

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-users text-success"></i>
					<span class="countTo" data-speed="3000">1303</span>
					<h5>DONORS</h5>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					<a class="box-icon-more font-lato weight-300" href="#">Donate Now</a> |
					<a class="box-icon-more font-lato weight-300" href="#modDonate">Learn More</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-child text-info"></i><i class="fa fa-child text-danger"></i>
					<span class="countTo" data-speed="3000">9877</span>
					<h5>Raised for Juniors</h5>
					<p>Our members, parents and coaches fundraise and donate almost $10,000 annually just for the kids</p>
					<a class="box-icon-more font-lato weight-300" href="#">Donate Now</a> |
					<a class="box-icon-more font-lato weight-300" href="#modJuniors">Learn More</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-home text-primary"></i>
					<span class="countTo" data-speed="3000">56000</span>
					<h5><a href="http://www.tomthumb.com/ShopStores/Good-Neighbor.page?">Good Neighbor Program</a></h5>
					<p>Texas Amateur Racquetball Association Organization Acct. #: 11882</p>
					<a class="box-icon-more font-lato weight-300" href="#">Enroll Now</a> |
					<a class="box-icon-more font-lato weight-300" href="#" data-toggle="modal" data-target="#modNeighbor">Learn More</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<i class="fa fa-amazon text-warning"></i>
					<span class="countTo" data-speed="3000">4897</span>
					<h5><a href="http://smile.amazon.com/ch/76-0262488">Amazon Smile</a></h5>
					<p>Amazon donates 0.5% of the price of your eligible AmazonSmile purchases to <b>Texas Amateur Racquetball Assn Inc</b></p>
					<a class="box-icon-more font-lato weight-300" href="http://smile.amazon.com/ch/76-0262488" target="_blank">Shop Now</a> |
					<a href="#" class="box-icon-more font-lato weight-300" data-toggle="modal" data-target="#modAmazon">Learn More</a>
				</div>			
			</div>
		</div>
	</section>

	<!-- Testimonials & Thank Yous -->
	<section>
		<div class="container">
			<!-- 
				data-plugin-options:
					"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)

				Note: remove class="rounded" from the img for squared image!
			-->
			<div class="owl-carousel text-center owl-mini-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>

				<div class="testimonial">
					<figure>
						<img class="rounded" src="{{asset('images/board/michael_kaplan.png')}}" alt="" />
					</figure>
					<div class="testimonial-content nopadding">
						<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
						<cite>
							Michael Kaplan
							<span><span class="txra">TXRA</span>, President</span>
						</cite>
					</div>
				</div>

				<div class="testimonial">
					<figure>
						<img class="rounded" src="{{asset('images/donate/SandyLong.jpg')}}" alt="" />
					</figure>
					<div class="testimonial-content nopadding">
						<p>Quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
						<cite>
							Sandy Long
							<span>Texas State Juniors' Coach</span>
						</cite>
					</div>
				</div>

			</div>	
		</div>
	</section>
	<!-- /Testimonials -->
	<!-- Amazon Smile Modal -->
	<div class="modal fade" id="modAmazon" tabindex="-1" role="dialog" aria-labelledby="myAmazonLabel" aria-hidden="true">
		<div class="modal-dialog modal-full">
			<div class="modal-content">

				<!-- header modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myAmazonLabel">Amazon Smile</h4>
				</div>

				<!-- body modal -->
				<div class="modal-body">
					<p>
					You can support the <span class="txra">TXRA</span> by shopping with Amazon through their AmazonSmile Foundation Program. Each quarter, the AmazonSmile Foundation will donate 0.5% of the purchase price to the <span class="txra">TXRA</span> by electronic funds transfer. This is a convenient way to donate for purchases you already make and it won't cost you anything extra. 
					</p>
					<p>
					The donations we receive from AmazonSmile will help our junior development and college programs. 
					</p>
					
					<h5>Please make sure it says <b>Supporting: Texas Amateur Racquetball Assn Inc.</b></h5>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<a href="http://smile.amazon.com/ch/76-0262488" target="new"><img src="{{asset('images/donate/amazonsmile.jpg')}}"></a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>

	<!-- Good Neighbor Program Modal -->
	<div class="modal fade" id="modNeighbor" tabindex="-1" role="dialog" aria-labelledby="myNeighborLabel" aria-hidden="true">
		<div class="modal-dialog modal-full">
			<div class="modal-content">

				<!-- header modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myNeighborLabel">Good Neighbor Program</h4>
				</div>

				<!-- body modal -->
				<div class="modal-body">
					<p>
					Tom Thumb Food and Pharmacy is proud to be in partnership with the Texas Racquetball Association through the Good Neighbor Program. Tom Thumb offers customers a way to directly donate to the TXRA by paying us a percentage of your purchases each time you shop. Tom Thumb makes it easy for the TXRA, a non-profit organization to raise funds with no selling, no paperwork, and no up-front investment with the Good Neighbor Program.
					</p>
					<p>
					If you already have a Tom Thumb Reward card just link the TXRA account number (#11882) to your Reward card. This can be done at the Customer Service Desk or you can download a printable Good Neighbor Form here to use with our account number already printed on it.
					</p>
					<a href="http://www.tomthumb.com/ShopStores/Good-Neighbor.page">FAQ</a>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="href.location={{asset('pdf/goodneighborform.pdf')}}">Download Form</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
@stop