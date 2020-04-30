@extends('Dashboard.partials.master')
@section('title',  $title)
@section('content')
  <header class="blue accent-3 relative nav-sticky">
    <div class="container-fluid text-white">
        <div class="row p-t-b-10 ">
            <div class="col">
                <h4>
                    <i class="icon-box"></i>
                    Update Patient
                </h4>
            </div>
        </div>
    </div>
  </header>
  <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form action="{{ Route('patient.update', $patient->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-0  m-2">
                            <div class="card-body">
                                @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="Fullname" style="color: black;">Fullname</label>
                                            <input type="text" name="Fullname" class="form-control" value="{{ $patient->Fullname }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_NRICNo" style="color: black;">NRIC No</label>
                                            <input type="text" name="in_NRICNo" class="form-control" value="{{ $patient->NRICNo }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="gender" style="color: black;">Gender</label><br>
                                        <select name="in_Gender" class="form-control">
                                            <option @if($patient->Gender=='male') {{'selected'}} @endif value="male">Male</option>
                                            <option  @if($patient->Gender=='female') {{'selected'}} @endif value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Race">Race</label>
                                            <input name="in_Race" class="form-control" type="text" placeholder="Race" value="{{ $patient->Race }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Dob" style="color: black;">Dob</label>
                                            <input type="date" name="in_Dob" class="form-control" value="{{ $patient->Dob }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="biography" style="color: black;">Telephone No</label>
                                            <input type='tel' name="phone" class="form-control" value="{{ $patient->TelephoneNo }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Occupation" style="color: black;">Occupation</label>
                                            <input type="text" name="in_Occupation" value="{{ $patient->Occupation }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Time" style="color: black;">Time</label>
                                            <input type="time" name="in_Time" class="form-control" value="{{ $patient->Time }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="languages" style="color: black;">Marrital Status</label>
                                            <select name="in_Married" class="form-control">
                                                <option @if($patient->Married=='married') {{'selected'}} @endif value="married">Married</option>
                                                <option @if($patient->Married=='single') {{'selected'}} @endif value="single">Single</option>
                                                <option @if($patient->Married=='divorced') {{'selected'}} @endif value="divorced">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_IdNo" style="color: black;">Id No</label>
                                            <input type="text" name="in_IdNo" class="form-control" value="{{ $patient->IdNo }}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="in_Address" style="color: black;">Address</label>
                                            <textarea name="in_Address" class="form-control" rows='5' required>{{ $patient->Address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12"><br>
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection