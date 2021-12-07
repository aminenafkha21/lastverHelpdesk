@extends('base')


@section('content')

<section class="hero-wrap js-fullheight img" style="  background-image: url('{{asset('assets/images/bg_3.jpg')}}'); ">
  		<div class="overlay"></div>
  		<div class="container " >
  		
				<div class="row">
				          
			
					<div class="col-md-12">
                        <br><br><br>

                        <form id="contact-form" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Firstname *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lastname *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Please specify your need *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Issue--</option>
                                                <option>Request Ticket for order</option>
                                                <option>Request Problem Technical</option>
                                                <option>Haven't received your service yet</option>
                                                <option>Other</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Message *</label>
                                         <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." 
                                        rows="" cols="50" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Send Message"> </div>
                                </div>
                            </div>
                        </form>
					
                        
					</div>
				</div>
			</div>
	  </section>
      @endsection