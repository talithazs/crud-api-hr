@extends('layouts.layout')
@section('content')
@section('title', 'Job')
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
        <h1>Jobs</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body m-2">
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($ujobs as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection