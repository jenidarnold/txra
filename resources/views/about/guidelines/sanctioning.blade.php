@extends('layouts.app')
@section('style')
    <style type="text/css">

    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><img src="{{asset('images/board/board.png')}}" height="24px">SANCTIONING GUIDELINES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			<div class="row">
				The following guidelines are presented to assist the tournament facilities
				and directors in planning, scheduling and successfully executing a
				USAR/TXRA sanctioned racquetball tournament. The items listed below
				and on the following pages were researched by the TXRA board via a
				member survey and personal interviews. The result is a formula for
				success and one which reflects a standard of quality that Texas players
				expect from sanctioned tournaments.
				TXRA serves as the sanctioning body for all events held in Texas, including
				Regional and National events. As the governing body of the sport, TXRA
				requires that these guidelines be followed in order to provide maximum
				benefit to the tournament hosts, sponsors and players alike.
				In planning your event, you must be aware of the following:
			</div>
			<div class="row" style="margin-top:20px; margin-bottom:20px">

				<!-- tabs -->
				<div class="col-md-2 col-sm-3">
					<ul class="nav nav-tabs nav-stacked nav-alternate">
						<li class="active">
							<a href="#tab_1" data-toggle="tab">
								Scheduling
							</a>
						</li>
						<li>
							<a href="#tab_2" data-toggle="tab">
								Distance
							</a>
						</li>
						<li>
							<a href="#tab_3" data-toggle="tab">
								Balls
							</a>
						</li>
						<li>
							<a href="#tab_4" data-toggle="tab">
								Junior Fee
							</a>
						</li>
						<li>
							<a href="#tab_5" data-toggle="tab">
								Referees
							</a>
						</li>
						<li>
							<a href="#tab_6" data-toggle="tab">
								Seeding
							</a>
						</li>
						<li>
							<a href="#tab_7" data-toggle="tab">
								Courts
							</a>
						</li>
						<li>
							<a href="#tab_8" data-toggle="tab">
								Insurance
							</a>
						</li>
						<li>
							<a href="#tab_9" data-toggle="tab">
								Event Requests
							</a>
						</li>
						<li>
							<a href="#tab_10" data-toggle="tab">
								Matches
							</a>
						</li>
						<li>
							<a href="#tab_11" data-toggle="tab">
								Entry Form
							</a>
						</li>
						<li>
							<a href="#tab_12" data-toggle="tab">
								R2/USAR System
							</a>
						</li>			
					</ul>
				</div>

				<!-- tabs content -->
				<div class="col-md-7 col-sm-9">
					<div class="tab-content tab-stacked nav-alternate">
						<div id="tab_1" class="tab-pane active">
							<p>
								On the weekend of sanctioned state level (or higher) tournament, no other sanctioned tournaments shall be held within the state.
							</p>
						</div>

						<div id="tab_2" class="tab-pane">
							<p>
								On any other weekend, tournaments preferably should be
								sanctioned at least two weeks apart, if possible. However, no
								tournament should be sanctioned on the same weekend within 100
								miles of a previously sanctioned event. Requests for dates will be
								processed on a first come, first served basis, however consideration
								should be given to traditional tournament dates by the Director of
								Scheduling.				
							</p>
						</div>

						<div id="tab_3" class="tab-pane">
							<p>
								Only the current TXRA ball may be used for a USAR/TXRA
								sanctioned tournament. Exceptions to this rule are: 
								the tournament is either a National event or a professional sanctioned event (IRT,
								LPRT) with a total of $2,000 (not prorated) in prize money given out to the top division (Men or Women). 
								Balls must be provided in adequate numbers to insure consistency throughout the final rounds
								of play.
							</p>
						</div>

						<div id="tab_4" class="tab-pane">
							<p> A reduced entry fee for junior divisions must be offered. At a minimum, this reduction must represent a 25% discount of the adult fee.

							</p>
						</div>
						<div id="tab_5" class="tab-pane">
							<p>
								In determining a referee policy, four options are available: refereeing
								by losers, refereeing by winners, paid refereeing or self refereeing.
								The referee policy should be clearly designated on the tournament
								entry. An option for the player to provide a suitable replacement
								should be made known to the players.
							</p>
						</div>
						<div id="tab_6" class="tab-pane">
							<p>
								The most recent available USAR rankings should be used to
								determine the seeding within the draws. Rankings and division
								ranking range suggestions are currently available at the USA
								Racquetball website under Rankings/Skill Division Ranking Range.
								Rankings must be available to the players for inspection throughout
								the tournament.
							</p>
						</div>
						<div id="tab_7" class="tab-pane">
							<p>
								All racquetball courts to be used for tournament play must conform to
								USAR specification in regard to size and marking.
							</p>
						</div>
						<div id="tab_8" class="tab-pane">
							<p>
								To be covered by USAR insurance policy, all players must hold a
								current USAR License at time of play proven by either a membership
								card, appearing on the approved list to participate or by showing a
								valid receipt as proof of membership. USAR License applications
								must be made available at the tournament entry for non-members.
							</p>
						</div>
						<div id="tab_9" class="tab-pane">
							<p>
								Tournament Directors must complete a sanctioned event request,
								along with any required fee, using the National Tournament
								Management Software a minimum of thirty (30) days prior to the start
								of the event. Much earlier submission is preferred in order for the
								event to be listed on the TXRA/USAR upcoming event calendar.
							</p>
						</div>
						<div id="tab_10" class="tab-pane">
							<p>
								All players should be guaranteed the opportunity of playing in a
								minimum of two matches, either through single elimination with a
								consolation event, double elimination event or a round robin event.
							</p>
						</div>
						<div id="tab_11" class="tab-pane">
							<p>
								The tournament entry form or tournament website shall advertise to
								the player exactly and correctly what will be provided by the facility as
								well as specify required details concerning the tournament. The 
								minimum information that must be included in the tournament entry
								form is as follows:
								<br/><br/>
								<b>DATE:</b> The full date of the event must be listed with emphasis on any
								unusual or early play. (Thursday for example)
								<br/><br/>
								<b>SITE:</b> The club or facility name, full address and telephone number
								must be listed. A map with major highways and directional details
								should be included.
								<br/><br/>
								<b>ENTRY FEE:</b> All fees must be listed. All exceptional fees, discounted
								fees, increased fees, late fees, telephone fees, referee fees,
								association fees should be emphasized.
								<br/><br/>
								<b>ELIGIBILITY:</b> You must note that players are required to hold a
								USAR License for participation and that such membership must be
								verified upon check-in.
								<br/><br/>
								<b>PLAY:</b> If there is a limit of the number of events per player then it
								should be noted and a statement must be included stating a player
								entered in two or more events may be scheduled to play back-to-back
								matches without a rest period.
								<br/><br/>
								<b>RULES:</b> Must note that current USAR rules will apply and also must
								note if consolation matches are being waived or provided. If the
								format of third place playoff matches is changed in any way, you must
								note this at the time of registration.
								<br/><br/>
								<b>REFEREES:</b> The referee policy must be clearly stated.
								<br/><br/>
								<b>STARTING TIMES:</b> Should be available a minimum of 48 hours
								before the start of scheduled play. Every attempt must be made to
								have times available when advertised. For example, if tournament
								play begins Friday at 5pm, then start times should be available
								Wednesday at 5pm.
								<br/><br/>
								<b>ENTRY DEADLINE:</b> The deadline must be set at least 48 hours prior
								to the published availability of the published start times.
								<br/><br/>
								<b>ACCOMODATIONS:</b> The nearest available hotel or sponsoring
								facility must be listed. Address, Phone number, map and any mention
								of group discount rate.
								<b>HOSPITALITY:</b> The TXRA recommends a minimum of the following
								be provided:								
								<br/>						
								<ul>
									<li> Fruit such as oranges, bananas for fresh hydration and nutrients.</li>
									<li> Some type of electrolyte replacement drink should be offered
								 throughout the tournament. Gatorade or Powerade are examples.</li>
									<li> Continental breakfast and lunch or dinner should be offered.</li>
									<li> If t-shirts, collared shirts or other articles of clothing are offered,
								they must be of adequate quality and screened or embroidered as a
								souvenir of a “racquetball” event.
									</li>
								</ul>
								<br/>
								<b>BALLS:</b> TXRA provides racquetballs for the tournament at no charge,
								therefore the logo of the ball providing company should appear on the
								entry form and the tournament shirt, if possible, at no cost to TXRA or
								the sponsor.
								<br/><br/>
								<b>TOURNAMENT DIRECTORS:</b> The name listed on the entry form
								should be an on-site Tournament Director. This allows the player to
								speak directly to someone knowledgeable about the tournament.
								The Tournament Director should appoint a tournament rules
								committee consisting of an odd number of qualified persons to
								resolve any disputes that the referee or Tournament Director cannot
								resolve.
								<br/><br/>
								<b>FORMAT:</b> The format of the event should be stated as either single
								elimination format in which divisions of less than six players may be
								played as a round robin or as a round robin format. The scoring
								format should be clearly stated on the tournament entry form.
								<br/><br/>
								<b>AWARDS:</b> The type of recognition to be presented should be clearly
								stated. Cash awards should be specific as either guaranteed or
								prorated. If prorated, state the minimum number of players required
								for presentation of the full amount. The level of presentation, that is,
								first, second, third and consolation or first and second only should
								also be stated.
							</p>
						</div>
						<div id="tab_12" class="tab-pane">
							<p>
								Tournament Directors are responsible for using the R2/USAR
								National Tournament Management Software to enter all USAR
								memberships and pay all membership fees. Tournament Directors
								are responsible for reporting the results of the tournament to the
								USAR, using the reporting features of the National Tournament
								Management Software within fourteen (14) days after the event.
								Tournament Directors are responsible for insuring that all players
								hold a current USAR License at time of play. If a player, for whatever
								reason, is found to have played without a license then the
								Tournament Directors are responsible for contacting that player and
								obtaining a completed application and the appropriate fee.
								These actions are necessary and must be performed in a timely
								manner in order to insure that ranking points are awarded to the
								deserving players and that TXRA remains in compliance with USAR
								reporting requirements to be eligible for funds available through
								membership rebate.
							</p>
						</div>
						<div id="tab_13" class="tab-pane">
							<p>

							</p>
						</div>
						<div id="tab_14" class="tab-pane">
							<p>

							</p>
						</div>
						<div id="tab_15" class="tab-pane">
							<p>

							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				These guidelines are designed by Texas racquetball tournament
				directors and players. They are intended to maintain a high level of
				quality at ALL events, regardless of size, therefore;
				Failure of Tournament Directors to meet
				these responsibilities may result in suspension
				of sanctioning privileges.
			</div>

			<div class="row text-muted" style="margin-top:50px">Revised 4/06/2018</div>
		</div>
	</section>
@stop
