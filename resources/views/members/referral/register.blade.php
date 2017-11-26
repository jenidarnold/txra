@extends('layouts.app')
@section('style')
    <style type="text/css">    	
    </style>
@stop
@section('content')		
	{{-- <section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="fa fa-user-circle-o"></i> JOIN TXRA</h1>	
			<p>Already a TXRA/USAR memeber? What's the difference between this account and my USAR account?	</p>	
		</div>
	</section> --}}
	<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">
				  	<!-- Load Facebook SDK for JavaScript -->
  					<div id="fb-root"></div>

					<div class="row">
						<!-- Left Side -->
						<!-- LEFT -->
						<div class="well col-lg-3 col-md-3 col-sm-4">				
							<div class="text-center">
								@if((true)) 	
									<img name="imgProfile" id="imgProfile" class="user-avatar thumbnail img-responsive" src='{{ asset('images/members/'. $user->id  .'/' .$profile->avatar)}}' alt="" />
								@else
									<i class="thumbnail ico-lg ico-color et-profile-male" style="background-color:#1E8BC3"></i>
								@endif
							</div>
							<div>
								<h3 class="text-primary"><a target="member" href='{{route('members.show', $user->id)}}'>{{$user->full_name}}</a> <small>invites you to join <span class="bold">TXRA</span>.&nbsp;&nbsp;Sign up now, and you both will receive <em class="bold text-success">{{$promo->credit}} </em> <a href="#" target="rewards" class="bold text-primary">TXRA Reward Points</span></a></em>.&nbsp;&nbsp;Earn even more  <a href="#" target="rewards" class="bold text-primary">points</a> by referring your friends! But first, let's get you registered. </small>
								</h3>
							</div>
						</div>

						<!-- register form -->
						<div class="col-sm-8 col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

							<form class="nomargin sky-form boxed" action="{{ url('/register') }}" method="post">
							 {{ csrf_field() }}
								<header class="text-center alert-info text-info" style="background-color: #d9edf7">
									<i class="fa fa-user-circle-o"></i> Sign Up for a <em class="bold text-primary">TX<span class="text-danger">R</span>A</em> account
								</header>
								<input type="hidden" name="refer_token" value="{{$refer->token}}">
								<fieldset class="nomargin">	
									<div class="row margin-bottom-10">
										<div class="col-sm-12">
											<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
												<label class="input">
													<input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}">
												</label>
												@if ($errors->has('first_name'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('first_name') }}</strong>
				                                    </span>
				                                @endif
				                            </div>
										</div>
										<div class="col-sm-12">
											<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
												<label class="input">
													<input type="text" name="last_name" placeholder="Last name">
												</label>
												@if ($errors->has('last_name'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('last_name') }}</strong>
				                                    </span>
				                                @endif
											</div>
										</div>
									</div>

								    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">			
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-envelope"></i>
											<input type="text" name="email" value="{{ old('email') }}" placeholder="Email address">
											<b class="tooltip tooltip-bottom-right">Your email address will be used to login</b>
										</label>
										@if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                            </div>

	                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-lock"></i>
											<input type="password" name="password" placeholder="Password">
											<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
										</label>
										@if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                            </div>

		                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-lock"></i>
											<input type="password" name="password_confirmation" placeholder="Confirm password">
											<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
										</label>
										@if ($errors->has('password_confirmation'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
		                                    </span>
		                                @endif
		                            </div>									
								
									<div class="margin-top-10 margin-bottom-10 text-center">
										<label class="nomargin text-muted small">By clicking <b>REGISTER</b>, you agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms of Service</a></label>
										
									</div>

									<div class="margin-bottom-20">
										<div class="">
											<button type="submit" class="nomargin btn btn-primary btn-block">REGISTER</button>
										</div>
									</div>
								</fieldset>
							
							</form>
							<!-- /register form -->

						</div>
						<!-- /LOGIN -->

{{-- 						<!-- R2 Sports LOGIN -->
						<div class="col-md-6 col-sm-6">
							<form action="{{ url('/register')}}" method="post" class="sky-form boxed">
							{{ csrf_field() }}

								<input type="hidden" name="method" value="r2sports">
								<header class="size-18 margin-bottom-20">
									<img class="" style="height:30px" src="{{ asset('images/logos/r2sports.gif') }}" ></i> Register for a TXRA account using your existing USAR account
								</header>
								
								<fieldset class="nomargin">
									<div class="row margin-bottom-10">
										<div class="col-md-6">
											<label class="input">
												<input type="text" placeholder="User ID">
											</label>
										</div>
										<div class="col col-md-6">
											<label class="input margin-bottom-10">
												<i class="ico-append fa fa-lock"></i>
												<input type="password" placeholder="Password">
											</label>
										</div>

									</div>
									
								</fieldset>

								<div class="row margin-bottom-20">
									<div class="col-md-8 col-md-offset-2">
										<button type="submit" class="btn btn-block btn-social btn-info">
											<img class="thumbnail" style="" src="{{ asset('images/logos/r2sports.gif') }}" ></i> Sign up with R2 Sports</button>
									</div>
								</div>
								<footer>
								
								</footer>

							</form>

						</div>
						<!-- /R2 Sports LOGIN -->

						<!-- SOCIAL LOGIN -->
						<div class="col-md-6 col-sm-6">
							<form action="{{ url('/register')}}" method="post" class="sky-form boxed">
							{{ csrf_field() }}

								<input type="hidden" name="method" value="facebook">
								<header class="size-18 margin-bottom-20">
									<i class="fa fa-facebook-square"></i>  Register for a TXRA account using your existing Facebook account
								</header>
								
								<fieldset class="nomargin">

									<div class="row">
									
										<div class="col-md-8 col-md-offset-2">

											<a class="btn btn-block btn-social btn-facebook margin-bottom-10">
												<i class="fa fa-facebook"></i> Sign up with Facebook
											</a>
											<!--
											<a class="btn btn-block btn-social btn-twitter margin-bottom-10">
												<i class="fa fa-twitter"></i> Sign up with Twitter
											</a>

											<a class="btn btn-block btn-social btn-google margin-bottom-10">
												<i class="fa fa-google-plus"></i> Sign up with Google
											</a>
											-->
										</div>
									</div>

								</fieldset>


							</form>

						</div>
						<!-- /SOCIAL LOGIN -->
 --}}
					

						<div class="col-md-12 text-center margin-top-20">
							Already have a TXRA account? <a href="/login"><strong>Back to login</strong></a>
						</div>
					</div>

					
				</div>
			</section>
			<!-- / -->



			<!-- MODAL -->
			<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModal">Terms &amp; Conditions</h4>
						</div>

						<div class="modal-body modal-short">
							<h4><b>Introduction</b></h4>
							<p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>
							<p>[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]</p>


							<h4><strong>License to use website</strong></h4>
							<p>Unless otherwise stated, [NAME] and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.</p>
							<p>You may view, download for caching purposes only, and print pages [or [OTHER CONTENT]] from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>
							<p>You must not:</p>
							<ul>
								<li>republish material from this website (including republication on another website);</li>
								<li>sell, rent or sub-license material from the website;</li>
								<li>show any material from the website in public;</li>
								<li>reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;]</li>
								<li>[edit or otherwise modify any material on the website; or]</li>
								<li>[redistribute material from this website [except for content specifically and expressly made available for redistribution].]</li>
							</ul>
							<p>[Where content is specifically made available for redistribution, it may only be redistributed [within your organisation].]</p>

							<h4><strong>Acceptable use</strong></h4>
							<p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>
							<p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>
							<p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without [NAME'S] express written consent.</p>
							<p>[You must not use this website to transmit or send unsolicited commercial communications.]</p>
							<p>[You must not use this website for any purposes related to marketing without [NAME'S] express written consent.]</p>

							<h4><strong>Restricted access</strong></h4>
							<p>[Access to certain areas of this website is restricted.]  [NAME] reserves the right to restrict access to [other] areas of this website, or indeed this entire website, at [NAME'S] discretion.</p>
							<p>If [NAME] provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>
							<p>[[NAME] may disable your user ID and password in [NAME'S] sole discretion without notice or explanation.]</p>

							<h4><strong>User content</strong></h4>
							<p>In these terms and conditions, "your user content" means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.</p>
							<p>You grant to [NAME] a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media.  You also grant to [NAME] the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>
							<p>Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or [NAME] or a third party (in each case under any applicable law).</p>
							<p>You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.</p>
							<p>[NAME] reserves the right to edit or remove any material submitted to this website, or stored on [NAME'S] servers, or hosted or published upon this website.</p>
							<p>[Notwithstanding [NAME'S] rights under these terms and conditions in relation to user content, [NAME] does not undertake to monitor the submission of such content to, or the publication of such content on, this website.]</p>

							<h4><strong>No warranties</strong></h4>
							<p>This website is provided "as is" without any representations or warranties, express or implied.  [NAME] makes no representations or warranties in relation to this website or the information and materials provided on this website.</p>
							<p>Without prejudice to the generality of the foregoing paragraph, [NAME] does not warrant that:</p>
							<ul>
								<li>this website will be constantly available, or available at all; or</li>
								<li>the information on this website is complete, true, accurate or non-misleading.</li>
							</ul>
							<p>Nothing on this website constitutes, or is meant to constitute, advice of any kind.  [If you require advice in relation to any [legal, financial or medical] matter you should consult an appropriate professional.]</p>

							<h4><strong>Limitations of liability</strong></h4>
							<p>[NAME] will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:</p>
							<ul>
								<li>[to the extent that the website is provided free-of-charge, for any direct loss;]</li>
								<li>for any indirect, special or consequential loss; or</li>
								<li>for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</li>
							</ul>
							<p>These limitations of liability apply even if [NAME] has been expressly advised of the potential loss.</p>

							<h4><strong>Exceptions</strong></h4>
							<p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit [NAME'S] liability in respect of any:</p>
							<ul>
								<li>death or personal injury caused by [NAME'S] negligence;</li>
								<li>fraud or fraudulent misrepresentation on the part of [NAME]; or</li>
								<li>matter which it would be illegal or unlawful for [NAME] to exclude or limit, or to attempt or purport to exclude or limit, its liability.</li>
							</ul>

							<h4><strong>Reasonableness</strong></h4>
							<p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.</p>
							<p>If you do not think they are reasonable, you must not use this website.</p>

							<h4><strong>Other parties</strong></h4>
							<p>[You accept that, as a limited liability entity, [NAME] has an interest in limiting the personal liability of its officers and employees.  You agree that you will not bring any claim personally against [NAME'S] officers or employees in respect of any losses you suffer in connection with the website.]</p>
							<p>[Without prejudice to the foregoing paragraph,] you agree that the limitations of warranties and liability set out in this website disclaimer will protect [NAME'S] officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as [NAME].</p>

							<h4><strong>Unenforceable provisions</strong></h4>
							<p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

							<h4><strong>Indemnity</strong></h4>
							<p>You hereby indemnify [NAME] and undertake to keep [NAME] indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by [NAME] to a third party in settlement of a claim or dispute on the advice of [NAME'S] legal advisers) incurred or suffered by [NAME] arising out of any breach by you of any provision of these terms and conditions[, or arising out of any claim that you have breached any provision of these terms and conditions].</p>

							<h4><strong>Breaches of these terms and conditions</strong></h4>
							<p>Without prejudice to [NAME'S] other rights under these terms and conditions, if you breach these terms and conditions in any way, [NAME] may take such action as [NAME] deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.</p>

							<h4><strong>Variation</strong></h4>
							<p>[NAME] may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.</p>

							<h4><strong>Assignment</strong></h4>
							<p>[NAME] may transfer, sub-contract or otherwise deal with [NAME'S] rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.</p>
							<p>You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.</p>

							<h4><strong>Severability</strong></h4>
							<p>If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.</p>

							<h4><strong>Entire agreement</strong></h4>
							<p>These terms and conditions [, together with [DOCUMENTS],] constitute the entire agreement between you and [NAME] in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.</p>

							<h4><strong>Law and jurisdiction</strong></h4>
							<p>These terms and conditions will be governed by and construed in accordance with [GOVERNING LAW], and any disputes relating to these terms and conditions will be subject to the [non-]exclusive jurisdiction of the courts of [JURISDICTION].</p>

							<h4><strong>About these website terms and conditions</strong></h4>
							<p>
								We created these website terms and conditions with the help of a free website terms and conditions form developed by Contractology and available at <a href="#">www.yourwebsite.com</a>.
								Contractology supply a wide variety of commercial legal documents, such as <a href="#">template data protection statements</a>.
							</p>

							<h4><strong>Registrations and authorisations</strong></h4>
							<p>[[NAME] is registered with [TRADE REGISTER].  You can find the online version of the register at [URL].  [NAME'S] registration number is [NUMBER].]</p>
							<p>[[NAME] is subject to [AUTHORISATION SCHEME], which is supervised by [SUPERVISORY AUTHORITY].]</p>
							<p>[[NAME] is registered with [PROFESSIONAL BODY].  [NAME'S] professional title is [TITLE] and it has been granted in [JURISDICTION].  [NAME] is subject to the [RULES] which can be found at [URL].]</p>
							<p>[[NAME] subscribes to the following code[s] of conduct: [CODE(S) OF CONDUCT].  [These codes/this code] can be consulted electronically at [URL(S)].</p>
							<p>[[NAME'S] [TAX] number is [NUMBER].]]</p>

							<h4><strong>[NAME'S] details</strong></h4>
							<p>The full name of [NAME] is [FULL NAME].</p>
							<p>[[NAME] is registered in [JURISDICTION] under registration number [NUMBER].]</p>
							<p>[NAME'S] [registered] address is [ADDRESS].</p>
							<p>You can contact [NAME] by email to [EMAIL].</p>


							<p class="margin-top30">
								<strong>By using this  WEBSITE TERMS AND CONDITIONS template document, you agree to the 
								<a href="#">terms and conditions</a> set out on 
								<a href="#">yourdomain.com</a>.  You must retain the credit 
								set out in the section headed "ABOUT THESE WEBSITE TERMS AND CONDITIONS".  Subject to the licensing restrictions, you should 
								edit the document, adapting it to the requirements of your jurisdiction, your business and your 
								website.  If you are not a lawyer, we recommend that you take professional legal advice in relation to the editing and 
								use of the template.</strong>
							</p>


						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" id="terms-agree"><i class="fa fa-check"></i> I Agree</button>
							
							<a href="page-print-terms.html" target="_blank" rel="nofollow" class="btn btn-danger pull-left"><i class="fa fa-print"></i><span class="hidden-xs"> Print</span></a>
						</div>

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			<!-- /MODAL -->

@stop


