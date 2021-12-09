@extends('layouts.adminlayout.master')


@section('content')

<?php
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Session;
$nbropen=TicketController::ticketopened();
$nbrpending=TicketController::ticketpending();
$nbrresolved=TicketController::ticketresolved();
$nbrtechnicien=TicketController::nbrtechnicien();
$nbrtechniciendispo=TicketController::nbrtechniciendispo();
$nbrusers=TicketController::nbrusers();
$allticket=TicketController::allticket();
$nb=10;
$top5=TicketController::top5();
?>

<div class="content-wrapper">

          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted"><?php
              Use \Carbon\Carbon;
              $date =Carbon::now();
              echo $date->toRfc850String();
              ?></p>
            </div>
          </div>
          <div class="row mt-4">
          <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">{{$allticket}} </h4>
                            </div>
                          </div>
                      </div>
              
                    </div>
                  </div>
                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Open Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">{{$nbropen}}</h4>
                            </div>
                          </div>
                      </div>
              
                    </div>
                  </div>
                  
                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">{{$nbrpending}}</h4>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ticket Solved</h4>
                                <h4 class="text-dark font-weight-bold mb-2">{{$nbrresolved}}</h4>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
              <br>
           <div class="row">
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Service Providers</h4>
                          <h4 class="text-dark font-weight-bold mb-2">{{$nbrtechnicien}}</h4>
                          <p>Where {{$nbrtechniciendispo}} are available</p>

                          <canvas id="customers"></canvas>
                      </div>
                    </div>
                </div>
              
                <div class="col-sm-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Users</h4>
                          <p>To solve their problems</p>
                          <h4 class="text-dark font-weight-bold mb-2">{{$nbrusers}}</h4>
                          <canvas id="orders"></canvas>
                      </div>
                    </div>
               </div>
              </div>
            </div>
            <div class="col-xl-9 grid-margin-lg-1 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent S.Providers</h4>
                    <div class="table-responsive mt-2">
                      <table class="table table-header-bg">
                        <thead>
                          <tr>
                            <th>
                                id
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                              Date
                            </th>
                          
                          </tr>
                        </thead>
                        <tbody>
                       
                          @foreach($top5 as $tech)
                          <tr>
                            <td>
                            <img src="{{URL::asset('assets/images/technicien.jpg')}}">{{$tech->name}}
                            </td>
                            <td>
                            {{$tech->email}}  
                              </td>
                              <td>
                              <div class="row">
                                <div class="col-sm-10">
                                {{$tech->created_at}}
                                </div>
                              
                              </div>
                            </td>
                            
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                    
                </div>
                
              </div>

              
                      
            </div>
   
       
                
  
            </div>


            <div class="row">
                <div class="col-xl-4 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title mb-3">Recent Activity</h4>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="text-dark">
                
                              @if(!$allnotofadminn->isEmpty())

                              @foreach ($allnotofadminn as $not)
                                <div class="d-flex pb-3 border-bottom justify-content-between">
                                  <div class="mr-3"><i class="mdi mdi-signal-cellular-outline icon-md"></i></div>
                                  <div class="font-weight-bold mr-sm-4">
                                    <div>{{$not->message}}{{Auth::user()->name}}</div>
                                    <div class="text-muted font-weight-normal mt-1">

                                    @if ( now()->diffInSeconds($not->created_at) < 61 )
                           {{ now()->diffInSeconds($not->created_at) }}  Seconds ago
                  @elseif ( now()->diffInMinutes($not->created_at) < 61 )
                           {{ now()->diffInMinutes($not->created_at) }}  Minutes ago
                  @elseif ( now()->diffInHours($not->created_at) <= 24 )
                          {{ now()->diffInHours($not->created_at) }}  hours ago
                  @elseif ( now()->diffInDays($not->created_at) < 30 )
                          {{ now()->diffInDays($not->created_at) }}  Days ago
                  @elseif ( now()->diffInMonths($not->created_at) > 0 )
                    {{ now()->diffInMonths($not->created_at) }}  Months ago
                  @elseif ( now()->diffInYears($not->created_at) > 0 )
                    {{ now()->diffInYears($not->created_at) }}  Years ago


                  @endif






                                    </div>
                                  </div>
                                  <div><h6 class="font-weight-bold text-info ml-sm-2">{{$not->ref}}</h6></div>
                                </div>
                    
                              @endforeach

                              
                                
                              @else
                              <div class="d-flex pb-3 border-bottom justify-content-between">
                                  <div class="mr-3"><i class="icon-cross"></i></div>
                                  <div class="font-weight-bold mr-sm-4">
                                    <div>You no any activity yet !</div>
                                    <div class="text-muted font-weight-normal mt-1"></div>
                                  </div>
                                  <div><h6 class="font-weight-bold text-info ml-sm-2"></h6></div>
                                </div>


                              @endif
                              
                              </div>
                            </div>
                          </div>  
                        </div>
                      </div>
              </div>

</div>
</div>
  
@endsection
