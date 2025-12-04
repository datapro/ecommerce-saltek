@extends('layouts.main')
@section('content')
      
        <!-- Content Area -->
	    <div class="content-container module contact-page">
        	
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>Checkout</h1>
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
            <!-- Title Section End -->
            
            <div class="row">
                <div class="small-12 columns">
                </div><!-- breadcrumbs /-->
			</div><!-- Row ends /-->
            <form action="{{route('place.order')}} " method="post">
                @csrf
                <div style="display: flex;justify-content:center;">
                    @include('includes.messages')

                </div>
        
            <div class="row">
            	<div class="medium-8 small-12 columns">
                    <ul class="accordion" data-accordion>
                        <li class="accordion-item is-active" data-accordion-item>
                                <a href="#" class="accordion-title">Billing Address</a>
                                <div class="accordion-content" data-tab-content>
                                    <label>
                                        Your Full Name *
                                        <input type="text" placeholder="Name" name="customer_name">
                                    </label>
                                    
                                    <label>
                                        Your Full Address *
                                        <textarea placeholder="Address" name="customer_address"></textarea>
                                    </label>
                                    <label>
                                        Anything else you want to say
                                        <input type="text" placeholder="say something" name="customer_say">
                                    </label>
                                    <label>
                                        Contact*
                                        <input type="text" placeholder="customer_phone" name="customer_phone">
                                    </label>
                                    
                                    <label>
                                        Email Address *
                                        <textarea placeholder="email address" name="customer_email"></textarea>
                                    </label>
                                    <label>
                                        Status 
                                        <select name="status" id="">
                                            <option value="paid" name="pending">pending</option>
                                            <option value="paid" name="paid">pending</option>
                                            <option value="paid" name="cancelled">cancelled</option>
                                            <option value="paid" name="shipped">shipped</option>
                                        </select>
                                    </label>
                                    <label>
                                        Total
                                        <input type="number" placeholder="total amount" name="total">
                                    </label>
                                </div>
                            
                        </li>
					</ul> <!-- reasons accordion ends -->
                
                </div>
               <!-- sidebar Ends -->
            	
                <div class="medium-4 small-12 columns sidebar">
					
                    <div class="widget">
                        <h2>Your Order Details</h2>
                        
                        <div class="widget-content">
                        	
                        	<ul class="accordion" data-accordion>
		                        <li class="accordion-item" data-accordion-item>
        		                    <a href="#" class="accordion-title">Kafinix Ventures</a>
		                            <div class="accordion-content" data-tab-content>
                                    	<table class="hover">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $productId => $item)
                                            <tr>
                                                <td>
                                                    {{$item['name'] }}<strong>× {{$item['quantity'] }}</strong>													
                                                </td>
                                                <td>
                                                    <span>£&nbsp;{{$item['price'] }}</span>						
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            @endforeach
                                             @php $grandTotal = 0; @endphp
                                             @foreach ($cart as $item)
                                            @php
                                                $total = $item['quantity'] * $item['price'];
                                            $grandTotal += $total;
                                            @endphp
                                                <th>Subtotal</th>
                                                <td><span>£&nbsp;{{ number_format($item['quantity'] * $item['price'], 2) }} </span></td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td><strong><span>Grand Total: £&nbsp;{{number_format($grandTotal),2}} </span></strong> </td>
                                            </tr>
                                            @endforeach
                                        </tfoot>
                                        </table>
        		                    </div> <!-- accordion content /-->
                		        </li>
                                
    
							</ul> <!-- reasons accordion ends -->
							<hr>
                            <table class="hover">
                                <tr>
                                    <th>Grand Total</th>
                                    <td><strong><span>£&nbsp;{{number_format($grandTotal),2}} </span></strong> </td>
                                </tr>
                            </table>
                            
                            <label>
                                <strong>Cash on Delivery</strong> 	
                            </label>
                                <p>Pay with cash upon delivery.</p>
                            <input type="submit" class="button primary" value="Place order">
                            {{-- <input type="submit" class="button secondary" value="Update Cart"> --}}
						</div><!-- widget content /-->
                    </div><!-- widget ends -->
                    
                </div>
                <!-- left area ends -->
            </div><!-- row ends /-->
        </div>
    </form>
	    <!-- Content Area Ends -->

        {{-- <!-- Call to Action box -->
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
   --}}
@endsection