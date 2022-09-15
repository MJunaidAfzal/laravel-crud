@extends('layout.scaffold')
@section('content')

<style>
    body{
        background-color:orange;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

    }
    table{
        background-color:white;
        
    }
    .hello{
        margin-top:100px;
    }
</style>

   

<div class="container mt-5" >
<div class="hello container">
    <h1 class="text-center text-light"><b>PATIENT TABLE</b></h1>
      <div class="row">
      <div class="col-md-12">
                <a href="{{route('patients.create')}}" class="btn btn-lg btn-success float-right mb-2"> ADD NEW</a>
        </div>
      </div>
    </div>

    @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif
      </div>
<div class="container">
<table class="table table-striped table-hover table-bordered">
  <thead  class="bg-dark text-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">E-mail</th>
      <th scope="col">Hospital</th>
      <th scope="col">Doctor</th>
      <th scope="col">Patient Pic</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($patients as $patient)
    <tr>
        <td  scope="row">{{ $patient->id }}</td>
        <td  scope="row">{{ $patient->name }}</td>
        <td  scope="row">{{ $patient->phone }}</td>
        <td  scope="row">{{ $patient->address }}</td>
        <td  scope="row">{{ $patient->email }}</td>
        <td  scope="row">{{ $patient->hospital_id }}</td>
        <td  scope="row">{{ $patient->doctor_id }}</td>
        <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/patient/'.$patient->patient)}}" alt="" width="100%"></td>

        <td  scope="row">
               
               <a href="{{route('patients.edit',$patient->id)}}" class="btn btn-primary btn-sm">  <i class="fa fa-edit"></i>  EDIT </a>
               &nbsp;|&nbsp;
               <a href="{{route('patients.delete',$patient->id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>  DELETE </a> 
       
               </td>
    </tr>
    @endforeach

  
  </tbody>
</table>
</div>
</div>

@endsection