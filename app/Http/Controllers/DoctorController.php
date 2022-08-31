<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::get();
        return view('doctors.index',compact('doctors'));
    }

    public function create(){
        return view('doctors.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:doctors,name',
            'email' => 'required|unique:doctors,email',
            'phone' => 'required|unique:doctors,phone',
            'status' => 'required'

        ]);
        $store = Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('doctors.index')->with('success','Doctor Added');
        }
        else{
            return redirect()->route('doctors.create')->with('error','Something went wrong');
        }

    }

    public function edit($id){
        $doctor = Doctor::where('id',$id)->first();
        return view('doctors.edit',compact('doctor'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:191|:doctors,name'.$id ,
            'email' => 'required|:doctors,email' .$id,
            'phone' => 'required|:doctors,phone' .$id,
            'status' => 'required'
        ]);

        $update = Doctor::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        if($update > 0){
            return redirect()->route('doctors.index')->with('success','doctor Updated');
        }
        return redirect()->route('doctors.edit', $id)->with('error','Something Went Wrong');

    }

    public function delete($id){
        $doctor = Doctor::where('id',$id)->first();
        if(!empty($doctor)){
            $doctor->delete();
            return redirect()->route('doctors.index')->with('success','doctor Deleted');
        }
        return redirect()->route('doctors.index')->with('error','Record Not Found');


    }
}
