<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <!-- Navbar dropdown -->
        @auth
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="{{route('myreservation')}}">My reservations</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Log Out</a></li>
          </ul>
        </div>
        @else
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('login')}}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('register')}}">Register</a>
        </li>
        @endauth



      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>