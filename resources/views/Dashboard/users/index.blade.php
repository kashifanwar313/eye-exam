@extends('Dashboard.partials.master')

@section('title',  $title)

@section('content')
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Users
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3 no-b">
                    <div class="card-body">

                        @if( $message=Session::get('success-msg') )
                            <div class="alert alert-success">
                                {{$message}}
                            </div>
                        @elseif( $message=Session::get('danger-msg') )
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @endif

                        <div style="overflow-x: scroll;" id="DataTables_Table_1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover data-tables dataTable" data-options="{ &quot;paging&quot;: false; &quot;searching&quot;:false}" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                  <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                      <a href="{{ route('user.edit',$user->id) }}">
                                        <i class="icon-pencil"></i>
                                      </a>
                                      <a onclick="return confirm('Are you sure?')" href="{{ URL::to('/user/destroy/'.$user->id) }}">
                                        <i class="icon-delete_forever text-danger"></i>
                                      </a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                            
                        </table></div></div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection