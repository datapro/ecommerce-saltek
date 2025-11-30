@extends('layouts.main')
@section('content')


        <!-- Content Area -->
	    <div class="content-container module contact-page">
        	
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>Contact Us</h1>
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
        
            <div class="row">
               <div class="medium-3 small-12 columns">
                    <img src="{{asset('assets/images/help/callgirl.png')}}" alt="">
                    <br><br>
                    <h4>Meet Our Company</h4>
                    <p>Kafinix Ventures Ltd
                        No.50A St. Leonard Street, Hendon, Sunderland,  UK</p>
                    <h4>Customer Service</h4>
                    <p>Tel: 123-123-1234 (Toll Free Phone)<br> Tel: 123-123-1234 (Local)<br> Fax: 123-123-1234</p>
                    <br>
                    <h4>Follow Us</h4>
                    <div class="socialicons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </div>
               </div><!-- left bar ends here -->
               <div class="medium-9 small-12 columns">
                    <div class="contact-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2294.528814042601!2d-1.3730124231725003!3d54.89364007277833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e66934df12845%3A0x2325755f399e4f0!2s50A%20St%20Leonard%20St%2C%20Hendon%2C%20Sunderland%20SR2%208QG%2C%20UK!5e0!3m2!1sen!2sng!4v1764255328181!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- map ends here -->
                    <div class="contact-form">
                        <h2>Fill the form below to contact us</h2>
                        <form>
                            <div class="row">
                                <div class="medium-6 columns">
                                    <input type="text" placeholder="Name">
                                 </div>
                                 <div class="medium-6 columns">    
                                    <input type="text" placeholder="Email">
                                 </div>
                                 <div class="medium-12 columns">
                                    <input type="text" placeholder="Website">
                                </div>
                                <div class="medium-12 columns">
                                    <textarea placeholder="Your message" rows="6"></textarea>
                                    <button class="primary button" type="submit">SUbmit comment</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- contact Form ends here. -->
               </div>
            </div>
        </div>
	    <!-- Content Area Ends -->

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
