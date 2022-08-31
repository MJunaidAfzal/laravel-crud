<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index(){
        $hospitals = Hospital::get();
        return view('hospitals.index',compact('hospitals'));
    }

    public function create(){
        return view('hospitals.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:hospitals,name',
            'status' => 'required'

        ]);
        $store = Hospital::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('hospitals.index')->with('success','Hospital Added');
        }
        else{
            return redirect()->route('hospitals.create')->with('error','Something went wrong');
        }

    }

    public function edit($id){
        $hospital = Hospital::where('id',$id)->first();
        return view('hospitals.edit',compact('hospital'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:191|:hospitals,name'.$id ,
            'status' => 'required'
        ]);

        $update = Hospital::where('id',$id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        if($update > 0){
            return redirect()->route('hospitals.index')->with('success','hospital Updated');
        }
        return redirect()->route('hospitals.edit', $id)->with('error','Something Went Wrong');

    }

    public function delete($id){
        $hospital = Hospital::where('id',$id)->first();
        if(!empty($hospital)){
            $hospital->delete();
            return redirect()->route('hospitals.index')->with('success','hospital Deleted');
        }
        return redirect()->route('hospitals.index')->with('error','Record Not Found');


    }
}
