@extends('layouts.layout')
@section('content')
@section('title', 'Employee')
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
        <li class="active">
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
        <div class="head-title mb-3">
            <div class="left">
                <h1>Employee</h1>
            </div>
        </div>
        <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-2">
                        <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Employee"><i class="bi bi-plus-lg"> </i>
                             Add New Employee
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->department }}</td>
  
                                        <td>
                                            <a href="{{ url('/employee/' . $item->id) }}" title="Detail Employee"><button class="btn btn-info btn-sm"><i class="bi bi-info-circle"> </i> View</button></a>
                                            <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil"> </i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee"><i class="bi bi-trash"> </i> Delete</button>
                                            </form>
                                        </td>
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
    </main>
</section>

    
@endsection