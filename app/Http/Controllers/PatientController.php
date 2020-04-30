<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Patients';
        $patients = Patient::all();
        return view('Dashboard.patients.index', compact('title', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Patient';
        return view('Dashboard.patients.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient  = new Patient;

        $patient->Fullname = $request['Fullname'];
        $patient->NRICNo = $request['in_NRICNo'];
        $patient->Gender = $request['in_Gender'];
        $patient->Race = $request['in_Race'];
        $patient->Dob = $request['in_Dob'];
        $patient->Address = $request['in_Address'];
        $patient->TelephoneNo = $request['phone'];
        $patient->Occupation = $request['in_Occupation'];
        $patient->Time = $request['in_Time'];
        $patient->Married = $request['in_Married'];
        $patient->IdNo = $request['in_IdNo'];

        if($patient->save())
            return redirect()->route('patient.index')->with('success-msg' , 'Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Update Patient';
        $patient = Patient::find($id);
        return view('Dashboard.patients.edit', compact('title', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->Fullname = $request['Fullname'];
        $patient->NRICNo = $request['in_NRICNo'];
        $patient->Gender = $request['in_Gender'];
        $patient->Race = $request['in_Race'];
        $patient->Dob = $request['in_Dob'];
        $patient->Address = $request['in_Address'];
        $patient->TelephoneNo = $request['phone'];
        $patient->Occupation = $request['in_Occupation'];
        $patient->Time = $request['in_Time'];
        $patient->Married = $request['in_Married'];
        $patient->IdNo = $request['in_IdNo'];

        if($patient->save())
            return redirect()->route('patient.index')->with('success-msg' , 'Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        if ($patient->delete()) {
            return redirect()->route('patient.index')->with('danger-msg' , 'Deleted Successfully');        
        }
    }
}
