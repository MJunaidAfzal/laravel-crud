@extends('layout.scaffold')
@section('content')

<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color:lightgrey;
        
    }
    .hi{
        margin-top:100px;
    }

</style>

    <div class=" container mt-5">
        <div class="row">
            <div class="hi col-md-12">
                <a href="{{route('doctors.index')}}" class="btn btn-warning btn-lg float-right"><b>VIEW ALL</b></a>
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
                    <div style="background-color:grey;" class=" card-header text-center text-light p-3">
                       <h3><b> ADD NEW DOCTOR </b></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('doctors.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <label for=""><b>Name</b></label>
                             <input style="border: groove 2px gold;" type="text" name="name" id="" class="p-4 form-control" value="{{old('name')}}">
                            <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-6">
                            <label for=""><b>E-mail</b></label>
                             <input style="border: groove 2px gold;" type="text" name="email" id="" class="p-4 form-control" value="{{old('email')}}"  >
                            <small class="text-danger">@error('email')  {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                            <label for=""><b>Phone</b></label>
                             <input style="border: groove 2px gold;" type="number" name="phone" id="" class="p-4 form-control"  value="{{old('phone')}}" >
                            <small class="text-danger">@error('phone')  {{$message}} @enderror</small>
                            </div>
           
                            <div class="col-md-12 mt-3">
                        <label for=""><b>Status</b></label>
                            <select class="form-control " style="border: groove 2px gold;" name="status" id="" >
                                <option value="" >Please Select</option>
                                <option value="1" @if(old("status") == 1 ) selected @endif>Active</option>
                                <option value="0" @if(old("status") == 0 ) selected @endif>Deactive</option>
                            </select>
                            <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-12 mt-4">
                               <button type="submit"class="btn btn-info btn-lg float-right btn-block"> <b>ADD NEW DATA</b> </button>  
                         </div>
                        </div>
                        </form>

                    
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection