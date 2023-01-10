@extends('layouts.layout')
@section('content')
@section('title', 'Login')
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
<div class="container py-5 mt-5">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Admin</h3>
            
            <form><br>
                <div class="mb-3">
                  <label for="exampleInputUsername1" class="form-label">Username</label>
                  <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp">
                  <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button> <a href="dashboard" type="submit" class="btn btn-primary">Submit</a></button>
              </form>

        </div>
    </div>
</div>