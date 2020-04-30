@extends('Dashboard.partials.master')
@section('title',  $title)
@section('content')
  <header class="blue accent-3 relative nav-sticky">
    <div class="container-fluid text-white">
        <div class="row p-t-b-10 ">
            <div class="col">
                <h4>
                    <i class="icon-box"></i>
                    Create User
                </h4>
            </div>
        </div>
    </div>
  </header>
  <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form action="{{ Route('user.store') }}" method="POST">
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
                                    
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="in_Name" style="color: black;">Name</label>
                                            <input type="text" name="in_Name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="in_Email" style="color: black;">Email</label>
                                            <input type="text" name="in_Email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="in_Password" style="color: black;">Password</label>
                                            <input type="password" name="in_Password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="in_Role" style="color: black;">Role</label><br>
                                        <select name="in_Role" class="form-control" required>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
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
