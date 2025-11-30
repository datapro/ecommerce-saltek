@extends('layouts.main')
@section('content')
 

        <div class="content-container module">
			
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>About Kafinix Ventures Ltd.</h1>
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
            <!-- Title Section End -->
            
            <div class="row">
                <div class="small-12 columns">
                  <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="disabled">Gene Splicing</li>
                        <li>
                          <span class="show-for-sr">Current: </span> Cloning
                        </li>
                  </ul>
                </div><!-- breadcrumbs /-->
			</div><!-- Row ends /-->            
            
        	<div class="content-area welcome-message row">
            	<div class="medium-5 small-12 columns">
                	<img src="{{asset('assets/images/help/marketplace.jpg')}}" class="thumbnail" alt="" />
                    <h3>How We Work</h3>
		            <h4> <h4>

		            <p>Reliable Delivery: Fast dispatch, secure packaging, and trusted couriers.
                        Honest Deals: What you see is what you get — no surprises, no hidden details.
                        Customer Care That Cares: Questions? Need advice? We’re here, and we reply quickly.</p>
                    {{-- <a href="#" class="button primary">Start selling!</a> --}}
                </div>
                
                <div class="medium-7 small-12 columns page-container">
                    <h3>KAFINIX VENTURES</h3>
		            <h4> Smart Finds for Modern Living<h4>

		            <p>At KAFINIX VENTURES, we believe great products shouldn’t come with a premium price tag. Based in the UK, our online store brings together a mix of practical essentials, stylish homeware, and everyday tools — all thoughtfully selected for people who value quality, convenience, and honest pricing.</p>
                    {{-- <a href="#" class="button primary">Start selling!</a> --}}
                </div><!-- posts-container /-->
                
                <div class="medium-7 small-12 columns page-container">
                    <h3>Who We Are</h3>
		            <h4> <h4>

		            <p>We’re more than just a marketplace. We’re a team that loves discovering useful, well-made items and sharing them with customers who appreciate good value. Every product we list is chosen with care, clarity, and transparency in mind.</p>
                    {{-- <a href="#" class="button primary">Start selling!</a> --}}
                </div><!-- posts-container /-->

                <div class="medium-7 small-12 columns page-container">
                    <h3>What You’ll Find Here</h3>
		            <h4> <h4>

		            <p>Home and furniture pieces that elevate your space

                        DIY tools and equipment you can rely on

                        Décor and lifestyle items that add character without breaking the bank

                        Clear, accurate listings and products checked for quality.</p>
                    {{-- <a href="#" class="button primary">Start selling!</a> --}}
                </div><!-- posts-container /-->
                         
        </div><!-- content-container /-->
                <div class="medium-7 small-12 columns page-container">
                    <h3>Our Commitment</h3>
		            <h4> <h4>

		            <p>We want every customer to shop with confidence. If you need help,
                         want recommendations, or simply want to check a detail, reach out 
                         anytime — we’re always happy to assist.

                            Thanks for visiting KAFINIX VENTURES. Explore our store, find what suits your lifestyle,
                            and enjoy a better buying experience from start to finish.</p>
                    <a href="{{route('shop')}}" class="button primary">Start selling!</a>
                </div><!-- posts-container /-->
        </div>     
        </div><!-- content-container /-->
        
        <!-- Information Boxes -->
        <div class="row module information-boxes">
        	<div class="medium-3 small-12 columns">
            	<div class="title-section">
                	<i class="fa fa-money" aria-hidden="true"></i>
					<h4>Great Value</h4>
                </div>
                <p>We offer competitive prices on our thousands products.</p>
            </div><!-- box /-->
            
            <div class="medium-3 small-12 columns">
            	<div class="title-section">
                	<i class="fa fa-credit-card" aria-hidden="true"></i>
					<h4>Safe Payment</h4>
                </div>
                <p>Your payment is safe untill you get the product.</p>
            </div><!-- box /-->
            
            <div class="medium-3 small-12 columns">
            	<div class="title-section">
                	<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Shop With Confidence</h4>
                </div>
                <p>Everything is in your hands money, quality, and trust.</p>
            </div><!-- box /-->
            
            <div class="medium-3 small-12 columns">
            	<div class="title-section">
                	<i class="fa fa-truck" aria-hidden="true"></i>
					<h4>Nationwide Delivery</h4>
                </div>
                <p>No matter in which corner. We deliver accross country.</p>
            </div><!-- box /-->
            
            <div class="medium-3 small-12 columns">
            	<div class="title-section">
                	<i class="fa fa-life-ring" aria-hidden="true"></i>
					<h4>24/7 Support</h4>
                </div>
                <p>
                Our Support Staff is always available to assist you.</p>
            </div><!-- box /-->
		</div>
        <!-- Information boxes /-->
        
        <!-- Suggested Stores -->
        {{-- <div class="row suggested-stores module">
        	<div class="big-section-title">
            	<h2><span>Recommended Stores</span></h2>
            </div><!-- big Section title ends.-->
            
            <div class="stores-section">
            
                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
                        <a href="#">
                            <img alt="" src="{{asset('assets/images/help/store1.jpg')}}" />
                        </a>
                        <h4><a href="#">Fajar Accessories & Fashion Store</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>230 reviews</span>
                        </div><!-- Store reputation /-->    
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                        
                        <div class="products-container">
                               
                            <div class="featured-product product">
                                <div class="medium-5 small-5 columns">
                                    <a href="#">
                                        <img src="{{asset('assets/images/help/product1-1.jpg')}}" alt="">
                                    </a>
                                 </div>
                                
                            <div class="medium-7 small-7 columns product-detail">
                                <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                <div class="top-product-review">
                                    <div class="star">
                                        <span class="on"><i class="fa fa-star"></i></span>
                                        <span class="on"><i class="fa fa-star"></i></span>
                                        <span class="on"><i class="fa fa-star"></i></span>
                                        <span class="off"><i class="fa fa-star"></i></span>
                                        <span class="off"><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="price">$50.00</div>
                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- Product Ends /-->
                            
                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="#">
                                        <img src="{{asset('assets/images/help/product2-1.jpg')}}" alt="">
                                    </a>
                                 </div>
                                    
                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->
                            
                        </div><!-- products container /-->
                        
                    </div><!-- Store container /-->
                </div> <!-- Store /-->
                
                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
                        <a href="#">
                            <img alt="" src="{{asset('assets/images/help/store2.jpg')}}" />
                        </a>
                        <h4><a href="#">Fajar Accessories & Fashion Store</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>230 reviews</span>
                        </div><!-- Store reputation /-->    
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                        
                        <div class="products-container">
                               
                                <div class="featured-product product">
                                    <div class="medium-5 small-5 columns">
                                        <a href="#">
                                            <img src="{{asset('assets/images/help/product3-1.jpg')}}" alt="">
                                        </a>
                                     </div>
                                    
                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->
                            
                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="#">
                                        <img src="{{asset('assets/images/help/product4-1.jpg')}}" alt="">
                                    </a>
                                 </div>
                                    
                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->
                            
                        </div><!-- products container /-->
                        
                    </div><!-- Store container /-->
                </div> <!-- Store /-->
                
                <div class="medium-4 small-12 columns store">
                    <div class="thumbnail">
                        <a href="#">
                            <img alt="" src="{{asset('assets/images/help/store3.jpg')}}" />
                        </a>
                        <h4><a href="#">Fajar Accessories & Fashion Store</a></h4>
                        <div class="store-reputation">
                            <div class="pro-rating float-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star off"></i>
                            </div>
                            <span>230 reviews</span>
                        </div><!-- Store reputation /-->    
                        <p class="store-end"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                        
                        <div class="products-container">
                               
                                <div class="featured-product product">
                                    <div class="medium-5 small-5 columns">
                                        <a href="#">
                                            <img src="{{asset('assets/images/help/productm2-1.jpg')}}" alt="">
                                        </a>
                                     </div>
                                    
                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->
                            
                            <div class="featured-product product no-border">
                                <div class="medium-5 small-5 columns">
                                    <a href="#">
                                        <img src="{{asset('assets/images/help/productm3-1.jpg')}}" alt="">
                                    </a>
                                 </div>
                                    
                                <div class="medium-7 small-7 columns product-detail">
                                    <h6><a href="#">Floral Lace Shift Dress</a></h6>
                                    <div class="top-product-review">
                                        <div class="star">
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="on"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                            <span class="off"><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="price">$50.00</div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- Product Ends /-->
                            
                        </div><!-- products container /-->
                        
                    </div><!-- Store container /-->
                </div> <!-- Store /-->
            
            </div><!-- Store section /-->
        </div> --}}
        <!-- Suggested Stores Ends /-->
        
        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-5 small-12 columns">
                    <h4><i class="fa fa-envelope" aria-hidden="true"></i> Subscribe to our newsletter Receive offers</h4>
                </div>
                <div class="medium-7 small-12 columns signup-form">
                	<!-- newsletter Form -->
                    <form>
                    	<div class="medium-5 small-12 columns">
                            <label>
                                <input type="text" placeholder="Your full name..." />
                            </label>
						</div>
                        <div class="medium-5 small-12 columns">                        
                        <label>
                        	<input type="text" placeholder="Your email address..." />
                        </label>
                        </div>
                        <div class="medium-2 small-12 columns">                        
                        <label>
                        	<input type="button" class="secondary button" value="Subscribe!" />
                        </label>
                        </div>
                        
                    </form>
                    <!-- Newsletter Form /-->
                </div>
           </div><!-- row -->
         </div>
        <!-- Call to Action End -->
@endsection