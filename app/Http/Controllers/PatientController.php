<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Doctor;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::get();
        return view('patients.index' , compact('patients'));
    }

    public function create(){
        $hospitals = Hospital::get();
        $doctors = Doctor::get();
        $patients = Patient::get();
        return view('patients.create' , compact('hospitals','doctors','patients'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|:patients,name',
            'phone' => 'required|max:191|:patients,phone',
            'address' => 'required|max:191|:patients,address',
            'email' => 'required|max:191|:patients,email',
            'hospital' => 'required|max:191|:patients,hospital',
            'doctor' => 'required|max:191|:patients,doctor',
        ]);

        if($request->file('patient')){
            $patient = $request->file('patient');
            $patientName = 'patient' . '-' . time() . '.' . $patient->getClientOriginalExtension();
            $patient->move('upload/patient/', $patientName);
        }

        $store = Patient::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'email' =>$request->email,
            'hospital' =>$request->hospital,
            'doctor' =>$request->doctor,
            'patient' =>$patientName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('patients.index')->with('Success' , 'Patient Added');
        }
        else{
            return redirect()->route('patients.index')->with('error' , 'something went wrong');
        }

}

}
