@extends('layouts.layout')
@section('content')
@section('title', 'Home')
<link rel="icon" href="{{('images/logo.png')}}">
  </head>
  <body>
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
    <div class="container py-5">
      <div class="container-fluid pt-5 text-center">
        <h6 class="text-muted">GETTING STARTED GUIDE</h6>
        <h1 class="mt-4" style="font-size: 3rem;">Dashboard API HR</h1>
        <h6 class="mt-4 text-muted" style="font-size: 15px;">Created By Talitha Azaria Sani (20.01.53.0046)</h6>
      </div>
    </div>
    <div class="container-fluid" style="background-color:#E5E5E5;">
      <div class="container">
        <div class="row text-center">
          <div class="col m-3">DIFFICULTY LEVEL
            <h6 class="mt-1">Beginner</h6>
          </div>
          <div class="col m-3">PROGRAMMING LANGUAGES
            <h6 class="mt-1">PHP</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5" style="text-align: justify;">
      <h2 style="font-weight:400;">Overview</h2>
      <p style="font-size: large;">API HR memungkinkan pengembang mengelola data karyawan di suatu perusahaan. 
       Pengembang dapat dengan mudah menampilkan, menambahkan, mengubah, dan menghapus data. 
       Terdapat tampilan dan hak akses yang berbeda antara user dengan admin.</p>
    </div>
    <div class="container mt-5" style="text-align: justify;">
      <h2 style="font-weight:400;">How to Use</h2>
      <h4 class="fst-italic font-monospace text-decoration-underline mt-3">User</h4>
      <ol style="font-size: large;">
        <li>1. Hanya dapat melihat data Region dan Country.</li>
        <li>2. Akses data Region dengan cara klik button "Region" pada navbar atau menambahkan "/uregion" pada url.</li>
        <li>3. Akses data Country dengan cara klik button "Country" pada navbar atau menambahkan "/ucountry" pada url.</li>
        <li>4. Akses data Department dengan cara klik button "Department" pada navbar atau menambahkan "/udepartment" pada url.</li>
        <li>5. Akses data Job dengan cara klik button "Job" pada navbar atau menambahkan "/ujob" pada url.</li>
      </ol>
      <h4 class="fst-italic font-monospace text-decoration-underline mt-5">Admin</h4>
      <ol style="font-size: large;">
        <li>1. Dapat melihat, menambahkan, mengubah, dan menghapus semua data.</li>
        <li>2. Klik button "Admin" pada navbar atau menambahkan "/login" pada url.</li>
        <li>3. Isi form dan checklist. Kemudian klik button "Submit" dan anda akan diarahkan ke dashboard admin.</li>
        <li>4. Untuk dapat mengakses data, bisa klik button menu atau menambahkan pada url.
          <table class="table table-borderless table-sm mx-5 text-center mt-2" style="width: 30%;">
          <thead>
            <tr>
              <th>Menu</th>
              <th>Tambahkan pada url</th>
            </tr>
          </thead>  
          <tbody>
              <tr>
                <td>"Dashboard"</td>
                <td>"/dashboard"</td>
              </tr>
              <tr>
                <td>"Region"</td>
                <td>"/region"</td>
              </tr>
              <tr>
                <td>"Country"</td>
                <td>"/country"</td>
              </tr>
              <tr>
                <td>"Jobs"</td>
                <td>"/job"</td>
              </tr>
              <tr>
                <td>"Employee"</td>
                <td>"/employee"</td>
              </tr>
              <tr>
                <td>"Department"</td>
                <td>"/department"</td>
              </tr>
              <tr>
                <td>"Role"</td>
                <td>"/role"</td>
              </tr>
              <tr>
                <td>"Location"</td>
                <td>"/location"</td>
              </tr>
            </tbody>
          </table>
        <li>5. Anda dapat menambahkan data dengan klik button "Add New ..." berwarna hijau. Isi form dan klik button "save".</li>
        <li>6. Anda dapat melihat detail data dengan klik button "View" berwarna biru muda.</li>
        <li>7. Anda dapat mengubah data dengan klik button "Edit" berwarna biru tua. Isi form dan klik button "update".</li>
        <li>8. Anda dapat menghapus data dengan klik button "Delete" berwarna merah.</li>
        <li>9. Untuk keluar dari admin, klik "logout" pada navbar menu di sisi kiri yang berwarna merah.</li>
      </ol>
      <p></p>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto mt-5">
      <a class="btn btn-outline-dark btn-sm text-uppercase mt-5" href="https://github.com/talithazs/crud-api-hr/blob/main/DOKUMENTASI.md" target="_blank" type="button" style="font-size: large;">View documentation</a>
    </div>
    <div class="container py-5"></div>