@extends('layouts.layout')
@section('content')
@section('title', 'Job')
<link rel="icon" href="{{('images/logo.png')}}">
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
                <h1>Job</h1>
            </div>
        </div>
        <div class="card" style="margin:20px;">
            <div class="card-header py-3">Job Page Detail</div>
            <div class="card-body" >
                <table class="table table-borderless" style="font-size: 1.3rem; width:25%;">
                    <tr>
                        <td>ID</td>
                        <td>: {{ $jobs->id }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>: {{ $jobs->title }}</td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>: {{ $jobs->salary }}</td>
                    </tr>
                </table>

            </div>
                </hr>
            </div>
        </div>
    </main>
</section>
