@extends('layouts.main')
@section('content')

      
        <div class="content-container single-product module">
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="float-left">
                        	Store: <a href="#" class="store-name">Kafinix Ventures</a> <span class="opened">Open: <strong>2 Years</strong></span> 
                         </div>
                        <div class="pro-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star off"></i>
                        	<span class="review-count store-name">248 Reviews</span>
                        </div> 
                        <div class="float-left">
	                        {{-- <a href="#" class="bordered-light">Follow Store</a> --}}
                        </div>    
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
            <!-- Title Section End -->
        	
            <div class="row">
                <div class="medium-9 small-12 columns">
                  <ul class="breadcrumbs">
                        <li><a href="{{route('shop')}}">Home</a></li>
                        <li><a href="{{route('listshop')}}">List Shop</a></li>
                        {{-- <li class="disabled">Sports & Entertainment</li> --}}
                        <li>
                          {{-- <span class="show-for-sr">Current: </span> Body Building --}}
                        </li>
                  </ul>
                </div><!-- breadcrumbs /-->
				<div class="medium-3 hide-for-small-only columns">
                    <div class="next-prev-nav pull-right">
                       <div class="prod-dropdown">
                            <a data-toggle="product-prev" href="#" class="btncont">
                            	<i class="fa fa-angle-left" aria-hidden="true"></i>
                             </a>
                            <div class="clearfix"></div>
                            <div class="dropdown-pane left" id="product-prev" data-dropdown data-hover="true" data-hover-pane="true">	
                            	<a href="#">
	                            	<img alt="" src="{{asset('assets/images/help/product2-1.jpg')}}" />
                            	</a>
                            </div>
                        </div>
                       <div class="prod-dropdown">
                            <a data-toggle="product-next" href="#" class="btncont">
                            	<i class="fa fa-angle-right" aria-hidden="true"></i>
                             </a>
                             <div class="clearfix"></div>
                            <div class="dropdown-pane left" id="product-next" data-dropdown data-hover="true" data-hover-pane="true">	
                            	<a href="#">
                                	<img alt="" src="{{asset('assets/images/help/product3-1.jpg')}}" />
                            	</a>
                            </div>
                        </div>
                    </div>
                 </div><!-- next item icons /-->
            </div><!-- Row ends /-->
            
            <!-- Single product detail -->
            <div class="single-product-detail module">
            	<div class="row">
                	
                    <div class="medium-5 small-12 columns item-image">
                    	<div class="main-image">
                        	<img src="{{ asset('storage/' . $product->images->first()->image) }}" 
                                            class="card-img-top" 
                                            alt="{{ $product->productname }}"> 
                        </div>
                        <div class="thumbnails">
                        	{{-- <a href="#">
                            	<img src="{{ asset('storage/' . $product->images->last()->image) }}" 
                                            class="card-img-top" 
                                            alt="{{ $product->productname }}"> 
                            </a> --}}
                            @foreach ($product->images as $img)
                            <a href="#">
                                <img src="{{ asset('storage/' . $img->image) }}">
                                    {{-- <img src="{{asset('assets/images/help/product2-1.jpg')}}" alt="" /> --}}
                                </a>
                                @endforeach
                            {{-- <a href="#">
                            	<img src="{{asset('assets/images/help/product3-1.jpg')}}" alt="" />
                            </a>
                            <a href="#">
                            	<img src="{{asset('assets/images/help/product4-1.jpg')}}" alt="" />
                            </a>
                            <a href="#">
                            	<img src="{{asset('assets/images/help/product5-1.jpg')}}" alt="" />
                            </a> --}}
                        </div>
                    </div><!-- Item Image /-->
                    
                    <div class="medium-7 small-12 columns item-detail">
                    	<div class="item-header">
	                        <h1>{{$product->productname}}</h1>
                            <div class="item-meta">
                            	<div class="pro-rating">
                            		<i class="fa fa-star"></i>
                            		<i class="fa fa-star"></i>
                            		<i class="fa fa-star"></i>
                            		<i class="fa fa-star"></i>
                            		<i class="fa fa-star off"></i>
                        			<span class="review-count store-name">48 Reviews</span><span class="review-count no-border">90 Orders</span> 
                                    <div class="socialicons float-right">
                                        <a href="#" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="https://x.com/kafinixventures" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="https://instagram.com/kafinixventures" title="Share on instagram plus"><i class="fa fa-instagram"></i></a>
                        			</div><!-- social icons /-->
                        		</div>
                            </div><!-- item meta /-->
                        </div><!-- item header /-->
                        
                        <div class="item-pricing">
                        	<p><span class="row-title">SKU:</span><span>{{$product->sku}}</span></p>
                            {{-- <p><span class="row-title">Category:</span><span><a href="#">Pants</a>, <a href="#">Women</a></span></p> --}}
                            {{-- <p><span class="row-title">Price:</span><span class="sale-price">£{{$product->price}} / piece</span></p> --}}
                            <div><span class="row-title">Price:</span><span><span class="regular-price">£{{$product->price}}</span> / piece</span>
                                {{-- <span class="off-percent">35% off</span> <span class="bulk-price"> --}}
                            	{{-- <a data-toggle="bulk-price" href="#">
                            		Bulk Price &raquo;
                             	</a>
                            </span> --}}
                            	{{-- <div class="dropdown-pane top-left" id="bulk-price" data-dropdown data-hover="true" data-hover-pane="true">
                            	<table class="text-center">
                                	<tr>
                                    	<th>Qty</th>
                                        <th>Price /piece</th>
                                    </tr>
                                    <tr>
                                    	<td>2-10</td>
                                        <td>$89.53</td>
                                    </tr>
                                    <tr>
                                    	<td>10-50</td>
                                        <td>$79.53</td>
                                    </tr>
                                    <tr>
                                    	<td>50-100</td>
                                        <td>$59</td>
                                    </tr>
                                </table>	
                            	<p>Discount automatically counted on checkout.</p>
                            </div> --}}
                            </div>
                            
                        </div><!-- item head /-->
                        
                        <div class="item-options">
                        	<div class="option-box"><span class="row-title">Colors:</span><span>{{$product->color}}<a href="#" title="Red" class="color red">&nbsp;</a> <a href="#" title="Green" class="color green">&nbsp;</a> <a href="#" title="Orange" class="color ornage">&nbsp;</a> <a href="#" title="Blue" class="color blue">&nbsp;</a> <a href="#" title="Yellow" class="color yellow">&nbsp;</a></span>
                            <div class="clearfix"></div>
                            </div>
  							<div class="option-box">
                            	<span class="row-title">Sizes:</span><span>{{$product->size}}<a href="#" title="Mediume" class="color">M</a> <a href="#" title="Large" class="color">L</a> <a href="#" title="X Large" class="color">X</a> <a href="#" title="Small" class="color">S</a></span>
                                <div class="clearfix"></div>
                                </div>	
                        </div><!-- item options /-->
                        
                        <div class="item-quantity">
                        	<div><span class="row-title">Quantity:</span><span><input type="number" class="qty" value="1" /> piece(s)</span>	</div>
                            <div><span class="row-title">Total Price:</span> <span>Select Color, size and quantity.</span>£{{$product->price}}</div>
                        </div>
                        <!-- Item Quantity /-->
                        
                        <div class="shopping-buttons">
                        	<a href="{{route('checkout')}}" class="button secondary">Buy Now</a> <a href="{{route('cart.add',$product->id)}}" class="button primary">Add to cart</a> <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                        <!-- shopping Buttons /-->
                        
                        {{-- <div class="store-promotion">
                        	<div><span class="row-title">Store Promotion: </span> <span class="coupon-store"><strong>US $2</strong> off per <strong>US $5</strong></span></div>
                        </div> --}}
                        <!-- promotion Ends /-->
                        
                    </div><!-- item detail /-->
                    
                </div><!-- row /-->
            </div>
            <!-- single product detail /-->
            
            <!-- customer content -->
            {{-- <div class="store-content">
                <div class="row">
                    
                    <!-- store sidebar -->
                    <div class="sidebar store-sidebar medium-3 small-12 columns">
                        
                        <div class="widget store-widget">
                            <h2>About Store</h2>
                            
                            <div class="widget-content">
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
                                <p class="store-location"><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                                <a href="#" class="button primary">Add to Fav Store</a>
                            </div><!-- widget content /-->
                        
	                    </div><!-- widget ends /-->
                        
                        <div class="widget">
                        	<h2>Customer Service</h2>
                            <div class="widget-content">
                            	<ul class="menu vertical">
                                	<li><a href="#">Contact Store</a></li>
                                    <li><a href="#">Visit Store</a></li>
                                </ul>
                            </div>
                            <!-- widget content /-->
                        </div>
                        <!-- widget /-->
                        
                        <div class="widget">
                            <h2>Store Categors</h2>
                            <div class="widget-content">
                                <ul class="menu vertical">
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Party Wear</a></li>
                                    <li><a href="#">Sports Wear</a></li>
                                </ul>
                            </div><!-- widget content /-->
                        </div><!-- widget /-->
                        
                        <div class="widget">
                            <h2>Best Sellers</h2>
                            <div class="widget-content">
                                
                                <div class="popular-product">
                                    <img alt="" src="{{asset('assets/images/help/product1-1.jpg')}}" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div><!-- popular product /-->
                                 
                                 <div class="popular-product">
                                    <img alt="" src="{{asset('assets/images/help/product4-1.jpg')}}" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div><!-- popular product /-->
                                 
                                 <div class="popular-product">
                                    <img alt="" src="{{asset('assets/images/help/product3-1.jpg')}}" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div><!-- popular product /-->
                                 
                                 <div class="popular-product">
                                    <img alt="" src="{{asset('assets/images/help/product2-1.jpg')}}" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div><!-- popular product /-->
                                
                            </div><!-- widget content /-->
                        </div><!-- widget /-->
                        
                    </div>
                    <!-- store sidebar Ends /-->
                    
                    <!-- Store Content -->
                    <div class="medium-9 small-12 columns store-content">
                        
                        <ul class="tabs" role="tablist" data-tabs id="new-items">
                        	<li class="tabs-title is-active"><a href="#description" role="tab" aria-selected="true">Description</a></li>
                        	<li class="tabs-title"><a href="#panel2" role="tab">Specifications</a></li>
                        	<li class="tabs-title"><a href="#panel3" role="tab">Reviews</a></li>
                        	<li class="tabs-title"><a href="#panel4" role="tab">Payment & Shipping</a></li>
                    	</ul> <!-- Tabs Titles Ends /-->
                        
                        <div class="tabs-content small-module" data-tabs-content="new-items">
                            <div class="tabs-panel is-active product-description" id="panel1">
                            	<img src="{{asset('assets/images/help/product7-1.jpg')}}" alt="" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div><!-- tabs content /-->    
                        
                        <!-- more items from store /-->
                        <div class="featured-area small-module">
                            <div class="section-title">
                                <h2>More From <span>Fajar Accessories</span></h2>
                            </div><!-- section title /-->
                    
                            <div class="content-section store-related">
                                
                                <div class="product">
                                    <div class="product-image">
                                        <div class="sale-tag">Sale</div>
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product1-1.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product1-2.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product4-1.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product1-2.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product2-1.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product2-2.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product5-1.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product5-2.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product3-1.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product3-2.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                            </div><!-- Content Section /-->
                    
                		</div>
                		<!-- More From same store. /-->
                        
                        <!-- Related Items /-->
                        <div class="featured-area">
                            <div class="section-title">
                                <h2><span>Related Products</span> From others</h2>
                            </div><!-- section title /-->
                    
                            <div class="content-section store-related">
                                
                                <div class="product">
                                    <div class="product-image">
                                        <div class="sale-tag">Sale</div>
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product1-2.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product1-1.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product4-2.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product1-1.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product2-2.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product2-1.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product5-2.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product5-1.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                                <div class="product">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img src="{{asset('assets/images/help/product3-2.jpg')}}" alt="" />
                                            <img src="{{asset('assets/images/help/product3-1.jpg')}}" alt="" />
                                        </a>
                                        
                                        <div class="pro-buttons menu-centered">
                                            <ul class="menu">
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div><!-- product buttons /-->
                                            
                                    </div><!-- Product Image /-->
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress</a>
                                    </div><!-- product title /-->	
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- product meta /-->
                                </div><!-- Product /-->
                                
                            </div><!-- Content Section /-->
                    
                		</div>
                		<!-- Related Items Ends. /-->
                    </div>
                    <!-- store content /-->
                    
                </div><!-- Row /-->
            </div> --}}
            <!-- customer content /-->
            
		</div><!-- content container /-->
                

@endsection