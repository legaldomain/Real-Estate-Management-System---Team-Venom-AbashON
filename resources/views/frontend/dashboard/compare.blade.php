@extends('frontend.frontend_dashboard')
@section('main')


<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{asset('frontend/assets/images/shape/shape-9.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{asset('frontend/assets/images/shape/shape-10.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Compare Properties</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Compare Properties</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- properties-section -->
        <section class="properties-section centred">
            <div class="auto-container">
                <div class="table-outer">
                    <table class="properties-table">
                        <thead class="table-header">
                            <tr>
                                <th>Property Info</th>
                                <th>
                                    <figure class="image-box"><img src="assets/images/resource/table-img-1.jpg" alt=""></figure>
                                    <div class="title">Villa on Grand Avenue</div>
                                    <div class="price">$45,000.00</div>
                                </th>
                                
                                
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>City</p>
                                </td>
                                <td>
                                    <p>New York</p>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <p>Area</p>
                                </td>
                                <td>
                                    <p>2410 Sq Ft</p>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <p>Rooms</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                 
                            </tr>
                            <tr>
                                <td>
                                    <p>Bathrooms</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <p>Garage</p>
                                </td>
                                <td>
                                    <p>2</p>
                                </td>
                               
                            </tr>
                            
                           
                           
                           
                           
                           
                           
                        </tbody>    
                    </table>
                </div>
            </div>
        </section>
        <!-- properties-section end -->






























@endsection

