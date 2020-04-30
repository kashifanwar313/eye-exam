@extends('Dashboard.partials.master')
@section('title',  $title)
@section('content')
  <header class="blue accent-3 relative nav-sticky">
    <div class="container-fluid text-white">
        <div class="row p-t-b-10 ">
            <div class="col">
                <h4>
                    <i class="icon-box"></i>
                    Create Patient
                </h4>
            </div>
        </div>
    </div>
  </header>
  <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form action="{{ Route('patient.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                            <input type="text" name="Fullname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_NRICNo" style="color: black;">NRIC No</label>
                                            <input type="text" name="in_NRICNo" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="gender" style="color: black;">Gender</label><br>
                                        <select name="in_Gender" class="form-control">
                                            <option value="married">Male</option>
                                            <option value="single">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Race">Race</label>
                                            <input name="in_Race" class="form-control" type="text" placeholder="Race" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Dob" style="color: black;">Dob</label>
                                            <input type="date" name="in_Dob" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="biography" style="color: black;">Telephone No</label>
                                            <input type='tel' name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Occupation" style="color: black;">Occupation</label>
                                            <input type="text" name="in_Occupation" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_Time" style="color: black;">Time</label>
                                            <input type="time" name="in_Time" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="languages" style="color: black;">Marrital Status</label>
                                            <select name="in_Married" class="form-control">
                                                <option value="married">Married</option>
                                                <option value="single">Single</option>
                                                <option value="divorced">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="in_IdNo" style="color: black;">Id No</label>
                                            <input type="text" name="in_IdNo" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="in_Address" style="color: black;">Address</label>
                                            <textarea name="in_Address" class="form-control" rows='5' required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12"><br>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">SAVE</button>
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

@section('scripts')
    <script>
        $(function () {
            //CKEDITOR.replace('in_Address');
        });
    </script>
@endsection