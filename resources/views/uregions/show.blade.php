@extends('layouts.layout')
@section('content')
@section('title', 'Region')
<link rel="icon" href="{{('images/logo.png')}}">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bolder active" href="{{ url('/')}}">talithaas</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link mx-3" href="{{ url('/uregion')}}">Region</a>
            <a class="nav-link mx-3" aria-current="page" href="{{ url('/ucountry')}}"
              >Country</a>
            <a class="nav-link mx-3" href="{{ url('/udepartment')}}">Department</a>
            <a class="nav-link mx-3" href="{{ url('/ujob')}}">Job</a>
          </div>
          <div class="me-5 ml-auto">
            <a class="btn btn-outline-light" href="{{ url('/login')}}">
              Admin
            </a>
          </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="container py-5"></div>
<div class="container mb-3">
    <div class="left">
        <h1>Region</h1>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header py-3">Region Page Detail</div>
        <div class="card-body">
            <table class="table table-borderless" style="font-size: 1.3rem; width:25%;">
                <tr>
                    <td>ID</td>
                    <td>: {{ $uregions->id }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>: {{ $uregions->name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

