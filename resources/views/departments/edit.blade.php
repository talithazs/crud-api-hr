@extends('layouts.layout')
@section('content')
@section('title', 'Department')
<link rel="icon" href="{{('images/logo.png')}}">
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="{{ url('/dashboard')}}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
        <li>
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
        <li class="active">
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

<section id="content">
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Department</h1>
            </div>
        </div>
        <div class="card" style="margin:20px;">
            <div class="card-header py-3">Edit Department</div>
            <div class="card-body">
                
                <form action="{{ url('department/' .$departments->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$departments->id}}" id="id" />
                    <label class="mb-3">Name</label></br>
                    <input type="text" name="name" id="name" value="{{$departments->name}}" class="form-control"></br>
                    <label class="mb-3">Job</label></br>
                    <input type="text" list="datalistJobs" name="job_id" id="job_id" value="{{$departments->job_id}}" class="form-control"  placeholder="Select Job"></br>
                    <datalist id="datalistJobs">
                        <option value="Public Accountant">
                        <option value="Junior Developer">
                        <option value="Administration Assistant">
                        <option value="Human Resources Representative">
                        <option value="Accountant">
                        <option value="Administration Assistant">
                        <option value="Sales Representative">
                        <option value="Senior Developer">
                        <option value="Purchasing Clerk">
                    </datalist></br>
                    <label class="mb-3">Country</label></br>
                    <input class="form-control" list="datalistOptions" name="country_id" id="country_id"  value="{{$departments->country_id}}" placeholder="Select Country"></br>
                    <datalist id="datalistOptions">
                        <option value="Indonesia">
                        <option value="Cuba">
                        <option value="Argentina">
                        <option value="France">
                        <option value="Zimbabwe">
                        <option value="Japan">
                        <option value="United States of America">
                    </datalist></br>
                    <label class="mb-3">Manager</label></br>
                    <input class="form-control" list="datalistManagers" name="manager_id" id="manager_id"  value="{{$departments->manager_id}}" placeholder="Select Manager"></br>
                    <datalist id="datalistManagers">
                        <option value="Talitha">
                        <option value="Azaria Sani">
                    </datalist></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>
                
            </div>
        </div>
    </main>
</section>

  
@stop