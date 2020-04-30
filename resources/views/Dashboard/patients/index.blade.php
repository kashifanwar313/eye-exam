@extends('Dashboard.partials.master')

@section('title',  $title)

@section('content')
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Patients
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
                                    <th>FullName</th>
                                    <th>NRICNo</th>
                                    <th>Race</th>
                                    <th>Dob</th>
                                    <th>Gender</th>
                                    <th style="width: 30%;">TelephoneNo</th>
                                    <th>Occupation</th>
                                    <th>Time</th>
                                    <th>Married</th>
                                    <th>IdNo</th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $patient)
                                  <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->Fullname }}</td>
                                    <td>{{ $patient->NRICNo }}</td>
                                    <td>{{ $patient->Race }}</td>
                                    <td>{{ $patient->Dob }}</td>
                                    <td>{{ $patient->Gender }}</td>
                                    <td>{{ $patient->TelephoneNo }}</td>
                                    <td>{{ $patient->Occupation }}</td>
                                    <td>{{ $patient->Time }}</td>
                                    <td>{{ $patient->Married }}</td>
                                    <td>{{ $patient->IdNo }}</td>
                                    <td>
                                      <a href="{{ route('patient.edit',$patient->id) }}">
                                        <i class="icon-pencil"></i>
                                      </a>
                                      <a onclick="return confirm('Are you sure?')" href="{{ URL::to('/patient/destroy/'.$patient->id) }}">
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