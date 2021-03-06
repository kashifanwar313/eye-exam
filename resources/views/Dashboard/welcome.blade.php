@extends('Dashboard.partials.master')

@section('title',  $title)

@section('content')
  <header class="blue accent-3 relative nav-sticky">
    <div class="container-fluid text-white">
        <div class="row p-t-b-10 ">
            <div class="col">
                <h4>
                    <i class="icon-box"></i>
                    Dashboard
                </h4>
            </div>
        </div>
    </div>
  </header>
  <div class="container-fluid relative animatedParent animateOnce">
      <div class="tab-content pb-3" id="v-pills-tabContent">
          <!--Today Tab Start-->
          <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
              <div class="row my-3">
                  <div class="col-md-3">
                      <div class="counter-box white r-5 p-3">
                          <div class="p-4">
                              <div class="float-right">
                                  <span class="icon icon-note-list text-light-blue s-48"></span>
                              </div>
                              <div class="counter-title">Users</div>
                              <h5 class="sc-counter mt-3">{{$users}}</h5>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar" role="progressbar" style="width: {{$users}}%;" aria-valuenow="25"
                                   aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="counter-box white r-5 p-3">
                          <div class="p-4">
                              <div class="float-right">
                                  <span class="icon icon-mail-envelope-open s-48"></span>
                              </div>
                              <div class="counter-title ">Patients</div>
                              <h5 class="sc-counter mt-3">{{$patients}}</h5>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar" role="progressbar" style="width: {{$patients}}%;" aria-valuenow="25"
                                   aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <br><br><br>
              <div class="row">
                  <div class="col-md-12 text-center">
                      <h1 style="font-size: 50px; font-weight: bold;">
                        SMART OPTEMETRY SYSTEM
                      </h1>
                      <p>
                        LETS GET STARTED
                      </p>
                  </div>
              </div>
          
          </div>
          <!--Today Tab End-->
      </div>
  </div>
@endsection