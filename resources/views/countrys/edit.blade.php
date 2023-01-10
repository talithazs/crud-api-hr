@extends('layouts.layout')
@section('content')
@section('title', 'Country')
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
        <li class="active">
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

<section id="content">
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Country</h1>
            </div>
        </div>
        <div class="card" style="margin:20px;">
            <div class="card-header py-3">Edit Country</div>
            <div class="card-body">
                
                <form action="{{ url('country/' .$countrys->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$countrys->id}}" id="id" />
                    <label class="mb-3">Name</label></br>
                    <input type="text" name="name" id="name" value="{{$countrys->name}}" class="form-control"></br>
                    <label class="mb-3">Code</label></br>
                    <input type="text" name="code" id="code"  value="{{$countrys->code}}" class="form-control"></br>
                    <label class="mb-3">Region</label></br>
                    <!-- <input type="text" name="region" id="region" class="form-control"></br> -->
                    <input class="form-control" list="datalistOptions" value="{{$countrys->region}}" name="region" id="region" placeholder="Pilih Region">
                    <datalist id="datalistOptions">
                        <option value="Asia">
                        <option value="Europe">
                        <option value="Americas">
                        <option value="Middle East and Africa">
                        <option value="Talitha Azaria Sani">
                    </datalist></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>
                
            </div>
        </div>
    </main>
</section>

  
@stop