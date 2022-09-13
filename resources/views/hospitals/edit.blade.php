@extends('layout.scaffold')
@section('content')

<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color:grey;
    }
    .hi{
        margin-top:100px;
    }

</style>

    <div class="container mt-5">
        <div class="row">
            <div class="hi col-md-12">
                <a href="{{route('hospitals.index')}}" class="btn btn-info btn-lg float-right"><b>VIEW ALL</b></a>
            </div>
        </div>
    </div>

    @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div  class=" card-header text-center text-light p-3 bg-info">
                       <h3><b> EDIT NEW HOSPITAL </b></h3>
                    </div>
                    <div style="background-color:lightgrey;" class="card-body ">
                        <form action="{{route('hospitals.update',$hospital->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <label for=""><b>Name</b></label>
                             <input style="border: groove 3px darkred;" type="text" name="name" id="" class="p-3 form-control" value="{{old('name', $hospital->name) }}">
                            <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                            </div>
         
                            <div class="col-md-12 mt-3">
                        <label for=""><b>Status</b></label>
                            <select class="form-control " style="border: groove 3px darkred;" name="status" id="" >
                                <option value="" >Please Select</option>
                                <option value="1"  @if(old("status",$hospital->status) == 1) selected @endif>Active</option>
                                <option value="0"  @if(old("status",$hospital->status) == 0) selected @endif>Deactive</option>
                            </select>
                            <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-12 mt-4">
                               <button type="submit"class="btn btn-info btn-lg float-right btn-block"> <b>UPDATE</b> </button>  
                         </div>
                        </div>
                        </form>

                    
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection