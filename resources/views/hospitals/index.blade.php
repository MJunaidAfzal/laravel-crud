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
<div class="container hello">
    <h1 class="text-center text-light"><b>HOSPITAL TABLE</b></h1>
      <div class="row">
      <div class="col-md-12">
                <a href="{{route('hospitals.create')}}" class="btn btn-lg btn-success float-right mb-2"> ADD NEW</a>
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
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($hospitals as $hospital)
    <tr>
        <td  scope="row">{{ $hospital->id }}</td>
        <td  scope="row">{{ $hospital->name }}</td>

        <td  scope="row">
            @if($hospital->status == 1)
            <span class="badge badge-success">Active</span>
            @else
            <span class="badge badge-md badge-danger">Deactive</span>
             @endif
        </td>
        <td  scope="row">
               
        <a href="{{route('hospitals.edit',$hospital->id)}}" class="btn btn-primary btn-sm">  <i class="fa fa-edit"></i>  EDIT </a>
        &nbsp;|&nbsp;
        <a href="{{route('hospitals.delete',$hospital->id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>  DELETE </a> 

        </td>

    </tr>
    @endforeach

  
  </tbody>
</table>
</div>
</div>

@endsection