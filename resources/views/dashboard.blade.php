@extends('layouts.layout')
@section('content')
@section('title', 'Dashboard')
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="{{ url('/dashboard')}}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ url('/dashboard')}}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/region')}}">
                <i class='bx bx-world'></i>
                <span class="text">Region</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/country')}}">
              <i class='bx bxs-flag-alt' ></i>
                <span class="text">Country</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/job')}}">
                <i class='bx bx-laptop' ></i>
                <span class="text">Jobs</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/employee')}}">
                <i class='bx bxs-user-detail'></i>
                <span class="text">Employee</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/department')}}">
                <i class='bx bxs-group' ></i>
                <span class="text">Department</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/role')}}">
                <i class='bx bxs-id-card'></i>
                <span class="text">Role</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/location')}}">
                <i class='bx bxs-map' ></i>
                <span class="text">Location</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="{{ url('/')}}" class="logout">
                <i class='bx bx-log-out' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR --> 

<section id="content" class="mt-4 justify-content-center">
    <main>
        <div class="row text-center mt-2">
          <div class="col-sm-4"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/globe.png')}}" width="100" height="100" class="mb-3" alt="Region">
                <h5 class="card-title">List Regions</h5>
                <a href="{{ url('/region')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-4"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/indonesia.png')}}" width="100" height="100" class="mb-3" alt="Country">
                <h5 class="card-title">List Country</h5>
                <a href="{{ url('/country')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-4"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/location.png')}}" width="100" height="100" class="mb-3" alt="Locations">
                <h5 class="card-title">List Locations</h5>
                <a href="{{ url('/location')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-4 mt-5"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/job.png')}}" width="100" height="100" class="mb-3" alt="Jobs">
                <h5 class="card-title">List Jobs</h5>
                <a href="{{ url('/job')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-4 mt-5"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/employee.png')}}" width="100" height="100" class="mb-3" alt="Employees">
                <h5 class="card-title">List Employees</h5>
                <a href="{{ url('/employee')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-4 mt-5"><center>
            <div class="card mb-3" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/department.png')}}" width="100" height="100" class="mb-3" alt="Departments">
                <h5 class="card-title">List Departments</h5>
                <a href="{{ url('/department')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
          <div class="col-sm-12 mt-5"><center>
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <img src="{{('images/role.png')}}" width="100" height="100" class="mb-3" alt="Roles">
                <h5 class="card-title">List Roles</h5>
                <a href="{{ url('/role')}}" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div></center>
        </div>
    </main>
</section>
<br><br><br>

@endsection
