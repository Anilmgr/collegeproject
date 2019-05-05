@extends('layouts.app')
@section('content')

<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contents</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-item post-details">
						<img src="/images/{{$tablecontent->featured_image}}" class="post-thumb-full" alt="">
						<div class="post-content">
							<h3>{{$tablecontent->title}}s</h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Cathrine Zeta</span>
							</div>
							{!! nl2br($tablecontent->description) !!}
							<div class="tag"><i class="fa fa-tag"></i> EDUCATION, MARKETING</div>
						</div>
						<div class="post-author">
							<div class="pa-thumb set-bg" data-setbg="img/blog/author.jpg"></div>
							<div class="pa-content">
								<h4>Written by Owen Wilson</h4>
								<p>Mauris lectus justo, tempor ac auctor at, congue id erat. Pellentesque et massa odio. Fusce vel fermentum tortor, nec gravida ligula. Vivamus at malesuada tortor, in posuere ex. Phasellus pretium turpis non ipsum vestibulum, a finibus quam rhoncus.</p>
							</div>
						</div>
						<div class="comment-warp">
							<h4 class="comment-title">3 Comments</h4>
							<ul class="comment-list">
								<li>
									<div class="comment">
										<div class="comment-avator set-bg" data-setbg="img/blog/comment/1.jpg"></div>
										<div class="comment-content">
											<span class="c-date">24 Mar 2018</span>
											<h5>Kelly Richardson</h5>
											<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
											<a href="" class="c-btn">Like</a>
											<a href="" class="c-btn">Reply</a>
										</div>
									</div>
									<ul class="replay-comment-list">
										<li>
											<div class="comment">
												<div class="comment-avator set-bg" data-setbg="img/blog/comment/2.jpg"></div>
												<div class="comment-content">
													<span class="c-date">24 Mar 2018</span>
													<h5>Gordon Browns</h5>
													<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
													<a href="" class="c-btn">Like</a>
													<a href="" class="c-btn">Reply</a>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="comment">
										<div class="comment-avator set-bg" data-setbg="img/blog/comment/3.jpg"></div>
										<div class="comment-content">
											<span class="c-date">24 Mar 2018</span>
											<h5>Scott Langton</h5>
											<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
											<a href="" class="c-btn">Like</a>
											<a href="" class="c-btn">Reply</a>
										</div>
									</div>
								</li>
							</ul>
							<div class="comment-form-warp">
								<h4 class="comment-title">Leave Your Comment</h4>
								<form class="comment-form">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" placeholder="Your Name">
										</div>
										<div class="col-sm-6">
											<input type="email" placeholder="Your Email">
										</div>
										<div class="col-sm-12">
											<textarea placeholder="Your Message"></textarea>
											<button class="site-btn">SEND COMMENT</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
					<!-- widget -->
					<div class="widget">
						<form class="search-widget">
							<input type="text" placeholder="Search...">
							<button><i class="ti-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget">
						<h5 class="widget-title">Recent News</h5>
						<div class="recent-post-widget">
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/1.jpg"></div>
								<div class="rp-content">
									<h6>Snackable study:How to break up your master's degree</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/2.jpg"></div>
								<div class="rp-content">
									<h6>Op en University plans major ts to number of staff</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/3.jpg"></div>
								<div class="rp-content">
									<h6>My postgrad: ‘I worked on essays as giraffes walked by’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/4.jpg"></div>
								<div class="rp-content">
									<h6>How to use the Guardian University Guide</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/5.jpg"></div>
								<div class="rp-content">
									<h6>My MBA experience: ‘It was an eye opener’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/6.jpg"></div>
								<div class="rp-content">
									<h6>My MBA experience: ‘It was an eye opener’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Tags</h4>
						<div class="tags">
							<a href="#">DEVELOPMENT</a>
							<a href="#">BUSINESS</a>
							<a href="#">PROJECTS</a>
							<a href="#">GOOGLE ADWORDS</a>
							<a href="#">SQL DATABASE</a>
							<a href="#">MARKETING</a>
							<a href="#">DESIGN</a>
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<li><a href="">Business</a></li>
							<li><a href="">Design</a></li>
							<li><a href="">Management</a></li>
							<li><a href="">Marketing Plans</a></li>
							<li><a href="">Construction</a></li>
							<li><a href="">Honored</a></li>
							<li><a href="">Program development</a></li>
							<li><a href="">My SQL database</a></li>
							<li><a href="">Google Adwords</a></li>
							<li><a href="">Education</a></li>
						</ul>
					</div>
					<!-- widget -->
					<div class="widget">
						<img src="img/ad.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	
@endsection