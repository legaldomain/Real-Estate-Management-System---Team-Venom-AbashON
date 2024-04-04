@extends('frontend.frontend_dashboard')
@section('main')




 

 <!--Page Title-->
 <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{asset('backend/assets/images/shape/shape-9.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{asset('backend/assets/images/shape/shape-10.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>{{ $property->property_name}}</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>{{ $property->property_name}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3>{{ $property->property_name}}</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                <h6>{{ $property->short_descp}}</h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="property-details.html">{{ $property->type->type_name}}</a></li>
                                <li><a href="property-details.html">For {{ $property->property_status}}</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>{{ $property->lowest_price}}</h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.html"><i class="icon-37"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-38"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">

                                    @foreach($multiImage as $img)
                                    <figure class="image-box"><img src="{{ asset($img->photo_name)}}" alt=""></figure>
                                    @endforeach

                                </div>
                            </div>



                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Property Description</h4>
                                </div>
                                <div class="text">
                                    <p>{{ strip_tags($property->long_descp) }}</p>
                                    
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Property Details</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Property ID: <span>{{ $property->	property_code }}</span></li>
                                    <li>Rooms: <span>{{ $property->bedrooms}}</span></li>
                    
                                    
                                    
                                    
                                    <li>Property Type: <span>{{ $property->type->type_name}}</span></li>
                                    <li>Bathrooms: <span>{{ $property->bathrooms }}</span></li>
                                    <li>Property Status: <span>For {{ $property->property_status }}</span></li>
                                    <li>Property Size: <span>{{ $property->property_size }} Sq Ft</span></li>
                                    <li>Garage: <span>{{ $property->garage }}</span></li>
                                    <li>address: <span>{{ $property->address  }}</span></li>
                                </ul>
                            </div>
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Facilities</h4>
                                </div>
                                <ul class="list clearfix">
                                    @foreach($property_fac as $fac)
                                    <li>{{$fac}}</li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Location</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li><span>Address:</span> {{ $property->address  }}</li>
                                    
                                    <li><span>State:</span> {{ $property->state }}</li>
                                    <li><span>Neighborhood:</span> {{ $property->neighborhood  }}</li>
                                    <li><span>Zip/Postal Code:</span> {{ $property->postal_code  }}</li>
                                    <li><span>City:</span> {{ $property->city  }}</li>
                                </ul>
                                <div class="google-map-area">
                                    <div 
                                        class="google-map" 
                                        id="contact-google-map" 
                                        data-map-lat="{{ $property->latitude  }}" 
                                        data-map-lng="{{ $property->longitude  }}" 
                                        data-icon-path="{{asset('frontend/assets/images/icons/map-marker.png')}}"  
                                        data-map-title="Brooklyn, New York, United Kingdom" 
                                        data-map-zoom="12" 
                                        data-markers='{"marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","{{asset('frontend/assets/images/icons/map-marker.png')}}"]}'>

                                    </div>
                                </div>
                            </div>
                            <div class="nearby-box content-widget">
                                <div class="title-box">
                                    <h4>What’s Nearby?</h4>
                                </div>
                                <div class="inner-box">


                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-book-reader"></i></div>
                                        <div class="inner">
                                            <h5>Places:</h5>

                                            @foreach($distance as $item)
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>{{ $item->	service_name}} <span>({{ $item->distance}}km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>       
                                            @endforeach
                                        </div>
                                    </div>



                                    
                                   
                                </div>
                            </div>
                            
                            <div class="schedule-box content-widget">
                        <div class="title-box">
                            <h4>Schedule A Tour</h4>
                        </div>
                        <div class="form-inner">
                            <form action="{{ route('store.schedule') }}" method="post">
                                @csrf 


                                <div class="row clearfix">

                <input type="hidden" name="property_id" value="{{ $property->id }}">  

                @if($property->agent_id == Null)
                <input type="hidden" name="agent_id" value="">
                @else
                <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
                @endif       

                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" name="tour_date" placeholder="Tour Date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="far fa-clock"></i>
                                            <input type="text" name="tour_time" placeholder="Any Time">
                        </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="property-sidebar default-sidebar">
        <div class="author-widget sidebar-widget">
            <div class="author-box">

             @if($property->agent_id == Null)

              <figure class="author-thumb"><img src="{{ url('upload/ariyan.jpg') }}" alt=""></figure>
                <div class="inner">
                    <h4>Admin </h4>
                    <ul class="info clearfix">
                        <li><i class="fas fa-map-marker-alt"></i>Discover St, Dhaka, Bangladesh</li>
                        <li><i class="fas fa-phone"></i><a href="tel:03030571965">+01000002023</a></li>
                    </ul>
                    <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                </div>

             @else

              <figure class="author-thumb"><img src="{{ (!empty($property->user->photo)) ? url('upload/agent_images/'.$property->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                <div class="inner">
                    <h4>{{ $property->user->name }}</h4>
                    <ul class="info clearfix">
                        <li><i class="fas fa-map-marker-alt"></i>{{ $property->user->address }}</li>
                        <li><i class="fas fa-phone"></i><a href="tel:03030571965">{{ $property->user->phone }}</a></li>
                    </ul>
                    <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                </div>

             @endif 

            </div>
            <div class="form-inner">
@auth
@php
    $id = Auth::user()->id;
    $userData = App\Models\User::find($id);
@endphp

 <form action="{{ route('property.message') }}" method="post" class="default-form">
    @csrf 

    <input type="hidden" name="property_id" value="{{ $property->id }}">

    @if($property->agent_id == Null)
    <input type="hidden" name="agent_id" value="">

    @else
    <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
    @endif

            <div class="form-group">
                <input type="text" name="msg_name" placeholder="Your name" value="{{ $userData->name }}">
            </div>
            <div class="form-group">
                <input type="email" name="msg_email" placeholder="Your Email" value="{{ $userData->email }}">
            </div>
            <div class="form-group">
                <input type="text" name="msg_phone" placeholder="Phone" value="{{ $userData->phone }}">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group message-btn">
                <button type="submit" class="theme-btn btn-one">Send Message</button>
            </div>
        </form>

@else

<form action="{{ route('property.message') }}" method="post" class="default-form">
    @csrf 

    <input type="hidden" name="property_id" value="{{ $property->id }}">

    @if($property->agent_id == Null)
    <input type="hidden" name="agent_id" value="">

    @else
    <input type="hidden" name="agent_id" value="{{ $property->agent_id }}">
    @endif

            <div class="form-group">
                <input type="text" name="msg_name" placeholder="Your name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="msg_email" placeholder="Your Email" required="">
            </div>
            <div class="form-group">
                <input type="text" name="msg_phone" placeholder="Phone" required="">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group message-btn">
                <button type="submit" class="theme-btn btn-one">Send Message</button>
            </div>
        </form>

@endauth



    </div>



</div>
                            
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title">
                        <h4>Similar Properties</h4>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                <h6></h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Grand Avenue 5</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p></p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                <h6></h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">C Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$45,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                <h6></h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$63,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p></p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->












@endsection