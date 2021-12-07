@extends('base')


@section('content')

<section class="hero-wrap js-fullheight img" style="  background-image: url('{{asset('assets/images/bg_3.jpg')}}'); ">
  		<div class="overlay"></div>
  		<div class="container " >
  		
				<div class="row">
				          
			
					<div class="col-md-12">
                        <br><br><br>
						<div class="row">
						<div class="card">
                                     <div class="card-body">
                                            <h3 class="mb-4 mt-4">About us</h3>
                                            <p> {!! lorem(1) !!}</p>
                                            <p> {!! lorem(1) !!}</p>
                                        </div>
                                    </div>

                                   
                     

<br><br><br><br>
<br>
						<div class="col-md-12">
						<br><br><br>						<br><br><br>

						<h2 class="heading-section mb-4 text-light" >TEAM</h2>
						<div class="row">
							<div class="col-md-3 text-center">
							
						       <img src="{{asset('assets/images/amine.png')}}" alt="Round Image" class="rounded img-fluid image">
							   <h2 class="heading-section mb-4">
									<small>Nafkha Mohamed amine</small>
								</h2>
							</div>
							<div class="col-md-3 text-center">
								
								<img src="{{asset('assets/images/sara.jpg')}}" alt="Circle Image" class="rounded-circle img-fluid image">
								<h2 class="heading-section mb-4">
									<small>Zouaghi Sarra</small>
								</h2>
							</div>
							<div class="col-md-3 text-center">
								
								<img src="{{asset('assets/images/dali.jpg')}}" alt="Thumbnail Image" class="img-raised rounded img-fluid image">
								<h2 class="heading-section mb-4">
									<small>Triki Mohamed ali</small>
								</h2>
							</div>

							<div class="col-md-3 text-center">

								<img src="{{asset('assets/images/khalil.jpg')}}" alt="Thumbnail Image" class="img-raised rounded-circle thumbnail img-fluid image">
								<h2 class="heading-section mb-4">
									<small>Ouhibi Khalil</small>
								</h2>
							</div>

							
						</div>
						<div class="row">
						<div class="col-md-4 text-center mt-20">
							</div>
							<div class="col-md-4 text-center mt-20">
		
								<img src="{{asset('assets/images/amine.png')}}" alt="Thumbnail Image" class="img-raised rounded-circle thumbnail img-fluid image">
								<h2 class="  heading-section mb-4">
									<small>Eleuch Hamza</small>
								</h2>
							</div>
							<div class="col-md-4 text-center mt-20">
							
							</div>

						</div>
					</div>
					</div>
				</div>
			</div>
	  </section>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br><br><br>


      @endsection