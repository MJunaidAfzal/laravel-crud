@extends('layout.scaffold')
@section('content')

<style>
    .hi{
        margin-top:100px;
    }
    body{
        background-color:white;
    }
    .hh{
        background-color:#ffc107;
    }

</style>

    <div class="container">
        <div class="row">
        <div class="hi col-md-12">
            <a href="{{route('patients.index')}}" class="btn btn-warning   "> Back to table</a>
        </div>
    </div>
    </div>

    <div class="mt-3 container">
        <div class="card">
        <div class="bg-dark card-header">
                   <h3 class="text-center text-light"><b> EDIT NEW PATIENT</b></h3>
                </div>
                <div class="hh card-body">
                <form  action="{{route('patients.update',$patient->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <img src="{{asset('assets/img/th.png')}}" alt="th" height="150px" width="150px">
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="name"><b>Name</b></label>
                            <input type="text" class="form-control" value="{{old('name', $patient->name) }}" name="name">
                            <small class="text-danger">@error('name'){{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="phone"><b>Phone</b></label>
                            <input type="number" class="form-control" value="{{old('phone', $patient->phone) }}" name="phone">
                            <small class="text-danger">@error('phone'){{$message}} @enderror</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="address"><b>Address</b></label>
                            <input type="text" class="form-control" value="{{old('address', $patient->address) }}" name="address">
                            <small class="text-danger">@error('address'){{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="email"><b>E-mail</b></label>
                            <input type="text" class="form-control" value="{{old('email', $patient->email) }}" name="email">
                            <small class="text-danger">@error('email'){{$message}} @enderror</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="hospital"><b>Hospital</b></label>
                            <select name="hospital_id" class="form-control" value="{{$patient->hospital}}">
                                <option value="">Please Select</option>
                                @foreach($hospitals as $hospital) 
                                    <option value="{{$hospital->name}}" @if($hospital->name == $patient->hospital_id) selected @endif>{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('hospital'){{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                    <label class="text-dark" for="doctor"><b>Doctor</b></label>
                            <select name="doctor_id" class="form-control" value="{{$patient->doctor}}">
                                <option value="">Please Select</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->name }}" @if($doctor->name == $patient->doctor_id) selected @endif>{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('doctor'){{$message}} @enderror</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                    <label class="text-dark" for="patient"><b>Patient pic</b></label>
                              <input type="file" class="form-control" name="patient" value="{{old('patient', $patient->patient) }}">
                        <small class="text-danger">@error('patient'){{$message}} @enderror</small>
                        @if(!empty($patient->patient))
                        <img src="{{asset('upload/patient/'.$patient->patient)}}" class="img-thumbnail" style="height:100px; width:100px">
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-block mt-3">UPDATE</button>

                </form>

                </div>
        </div>
    </div>
       


@endsection