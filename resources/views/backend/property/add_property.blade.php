@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">

        <div class="row profile-body">      
        
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
            <div class="card">
							<div class="card-body">
								<h6 class="card-title">Add property</h6>
									<form>
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Property Name</label>
													<input type="text" name = "property_name" class="form-control">
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Property Status </label>
													<select name ="property_status" class="form-select" id="exampleFormControlSelect1">
											<option selected="" disabled="">Select status</option>
											<option value="buy">  BUY</option>
											<option value="rent"> RENT</option>
											
			
										    </select>
												</div>
											</div><!-- Col -->

                                            <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Lowest price</label>
													<input type="text" name = "lowest_price class="form-control">
												</div>
											</div><!-- Col -->
                                            	

                                            <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">max price</label>
													<input type="text" name = "max_price" class="form-control">
												</div>
											</div><!-- Col -->


                                            <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Main Thumbnail image</label>
													<input type="file" name = "lowest_price class="form-control">
												</div>
											</div><!-- Col -->


                                            <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Add more image</label>
													<input type="file" name = "lowest_price class="form-control">
												</div>
											</div><!-- Col -->










										</div><!-- Row -->



                                    
					<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="Enter city">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">State</label>
													<input type="text" class="form-control" placeholder="Enter state">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Zip</label>
													<input type="text" class="form-control" placeholder="Enter zip code">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Enter email">
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Password</label>
													<input type="password" class="form-control" autocomplete="off" placeholder="Password">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
									</form>
									<button type="button" class="btn btn-primary submit">Submit form</button>
							</div>
						</div>
              
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          
            
          
          <!-- right wrapper end -->
        </div>

			</div>


























@endsection