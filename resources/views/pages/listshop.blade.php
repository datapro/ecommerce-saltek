@extends('layouts.main')
@section('content')

   
        <div class="content-container module">
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>List Shop</h1>
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
            
            <!-- customer content -->
            <div class="store-content">
                <div class="row">
                    
                    <!-- store sidebar -->
                    <div class="sidebar store-sidebar medium-3 small-12 columns">
                        
                        <div class="widget">
                            <h2>Related Categors</h2>
                            <div class="widget-content">
                                <ul class="menu vertical">
                                      @foreach($categories as $category)
                                        <li><a href="{{ route('index.shop', $category->id) }}" 
                                        class="btn btn-outline-primary {{ isset($selectedCategory) && $selectedCategory->id == $category->id ? 'active' : '' }}">
                                        {{ $category->name }}
                                        </a></li>
                                    @endforeach
                                        
                                </ul>
                            </div><!-- widget content /-->
                        </div><!-- widget /-->
                        
                       <div class="widget shop-filter">
                            <h2>Filters</h2>
                            <div class="widget-content">
                                {{-- <label>
                                	Top Rated <input type="checkbox" />
                                </label> --}}
                                {{-- <label>
                                	Sale Items <input type="checkbox" />
                                </label> --}}
                                <form method="GET" action="{{ route('shop') }}">

                                    <div>
                                        <span>Price</span> <input type="text" placeholder="min" name="price" value="{{ request('min_price') }}" /> 
                                        <span>- </span>
                                        <input type="text" name="price" value="{{ request('max_price') }}" />
                                        <div class="clearfix"></div>
                                    </div>
                                    <input type="submit" class="button secondary" value="Apply" />
                                </div><!-- widget content /-->
                                </form>
                        </div><!-- widget /--><!-- widget /-->
                        
                      <div class="widget">
                            <h2>Trending</h2>
                            <div class="widget-content">
                                <div class="popular-product">
                                    @foreach ($trends as $trend )
                                      <img src="{{ asset('storage/' . $trend->images->last()->image) }}" 
                                            class="card-img-top" 
                                            alt="{{ $trend->productname }}" 
                                            class="float-left thumbnail"> 
                                    <div class="float-right product-description">
                                        <a href="#">{{ Str::words($trend->productname, 3) }}</a>
                                        <div class="price">£{{ $trend->price }}</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="clearfix"></div> --}}
                                 </div><!-- popular product /-->
                            </div><!-- widget content /-->
                        </div><!-- widget /-->
                        
                        {{-- <div class="widget store-widget">
                            <h2>Featured Store</h2>
                            
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
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                            </div><!-- widget content /-->
                        
	                    </div><!-- widget ends /--> --}}
                        
                    </div>
                    <!-- store sidebar Ends /-->
                    
                    <!-- Store Content -->
                    <div class="medium-9 small-12 columns store-content">
                        <div class="product-filter">
                            <div class="grid-filter medium-4 small-5 columns">
                                <a class="active" href="{{route('shop')}}"><i class="fa fa-th-large"></i></a>
                                <a href="list-{{route('listshop')}}"><i class="fa fa-list"></i></a>
                            </div>
        
                            <div class="medium-4 small-7 columns byview">
                                <div class="float-center">
                                <em>View:</em>
                                 <form>
                                    <select name="ppp">
                                    	<option value="6">06</option>
                                    	<option selected="" value="9">09</option>
                                    	<option value="15">15</option>
                                    	<option value="20">20</option>
                                    	<option value="50">50</option>
                                    	<option value="100">100</option>
                                    </select>
                                </form>    
                                </div>
                            </div>
        
                            <div class="medium-4 small-12 columns sortby">
                                <div class="pull-right">
                                <form method="get">
                                <em>Sort by:</em> 
                                <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                </form>
                                </div>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- product filter /-->
                    
                    <div class="products-wrap">
                            @foreach($products as $product)
                        	<div class="product list-product small-12 columns">
                                    <div class="medium-4 small-12 columns product-image">
                                        <div class="sale-tag">Sale</div>
                                        <a href="single-product.html">
                                           <img src="{{ asset('storage/' . $product->images->first()->image) }}" 
                                            class="card-img-top" 
                                            alt="{{ $product->productname }}"> 
                                           <img src="{{ asset('storage/' . $product->images->last()->image) }}" 
                                            class="card-img-top" 
                                            alt="{{ $product->productname }}"> 
                                        </a>
                                    </div><!-- Product Image /-->
                                    <div class="medium-8 small-12 columns">
                                        <div class="product-title">
                                            <a href="single-product.html">{{ $product->productname }}</a>
                                        </div><!-- product title /-->	
                                        <div class="product-meta">
                                            <div class="prices">
                                                <span class="price">£{{ $product->price }}</span> / Piece
                                                <span class="sale-price">£{{ $product->price }}</span>
                                            </div>
                                            <div class="last-row">    
                                                <div class="pro-rating float-left">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star off"></i>
                                                </div>
                                                <div class="store float-right">
                                                    By: <a href="store-front.html">By: KAFINIX VENTURES</a>
                                                </div>
                                            	<div class="clearfix"></div>
                                            </div><!-- last row /-->
                                            
                                            <div class="product-detail">
                                                	<p>{{ $product->description }}</p>
                                                </div><!-- product detail /-->
                                             
                                             <div class="cart-menu">
                                                <ul class="menu">
                                                	<li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
                                                    <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                                    
                                                </ul>
	                                        </div><!-- product buttons /-->   
                                            
                                        </div><!-- product meta /-->
									</div>
                    </div><!-- Product /-->
                       @endforeach         
                        </div><!-- products wrap /-->
                       
                        <!-- pagination starts -->
                           <div class="pagination-container">
                            {{-- <ul class="pagination" role="menubar" aria-label="Pagination"> --}}
                                {{ $products->links() }}

                    </div>
                        <!-- Pagination Ends -->
                        
                    </div>
                    <!-- store content /-->
                    
                </div><!-- Row /-->
            </div>
            <!-- customer content /-->
            
		</div><!-- content container /-->
            


@endsection