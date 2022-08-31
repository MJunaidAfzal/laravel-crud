

<div  style="background-color:#3f96e8;" class="container-fluid fixed-top">

<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="{{route('home')}}"><img style="height:50px;width:50px;" src="{{asset('assets/img/images.png')}}" alt="images"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link ml-5 text-light" href="{{route('hospitals.index')}}"><b>Hospital</b></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link text-light ml-3" href="{{route('doctors.index')}}"><b>Doctor</b></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link text-light ml-3" href="{{route('patients.index')}}"><b>Patient</b></a>
  </li>
</ul>
</div>
<form class="form-inline my-2 my-lg-0 float-right">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
</form>
</nav>


</div>








