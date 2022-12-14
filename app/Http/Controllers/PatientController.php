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
            'phone' => 'required|max:191|unique:patients,phone',
            'address' => 'required|max:191|:patients,address',
            'email' => 'required|max:191|unique:patients,email',
            'hospital_id' => 'required|max:191|:patients,hospital_id',
            'doctor_id' => 'required|max:191|:patients,doctor_id',
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
            'hospital_id' =>$request->hospital_id,
            'doctor_id' =>$request->doctor_id,
            'patient' =>$patientName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('patients.index')->with('Success' , 'Patient Added');
        }
        else{
            return redirect()->route('patients.index')->with('error' , 'something went wrong');
        }

}


    public function edit($id){
        $hospitals = Hospital::get();
        $doctors = Doctor::get();
        $patient = Patient::where('id',$id)->first();
        return view('patients.edit',compact('hospitals','doctors','patient'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:191|:patients,name,'.$id,
            'phone' => 'required|max:191|unique:patients,phone,'.$id,
            'address' => 'required|max:191|:patients,address,'.$id,
            'email' => 'required|max:191|unique:patients,email,'.$id,
            'hospital_id' => 'required|max:191|:patients,hospital_id,'.$id,
            'doctor_id' => 'required|max:191|:patients,doctor_id,'.$id,
        ]);
        $patientData = Patient::where('id',$id)->first();

        if($request->file('patient')){
            $patient = $request->file('patient');
            $patientName = 'patient' . '-' . time() . '.' . $patient->getClientOriginalExtension();
            $patient->move('upload/patient/', $patientName);
        }
        else{
            $patientName = $patientData->patient;
        }

        $update = Patient::where('id',$id)->update([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'email' =>$request->email,
            'hospital_id' =>$request->hospital_id,
            'doctor_id' =>$request->doctor_id,
            'patient' =>$patientName,
        ]);

        if($update > 0){
            return redirect()->route('patients.index')->with('success','patient Updated');
        }
        return redirect()->route('patients.edit', $id)->with('error','Something Went Wrong');

    }

    public function delete($id){
        $patient = Patient::where('id',$id)->first();
        if(!empty($patient)){
            $patient->delete();
            return redirect()->route('patients.index')->with('success','patient Deleted');
        }
        return redirect()->route('patients.index')->with('error','Record Not Found');


    }

}
