<nav class="navbar fixed-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      @if(Auth::guard('admin')->check())
          <a href="{{ route('admin.dashboard') }}">
           <button type="button" class="btn btn-outline-success">Dashboard</button>
         </a>
         @else
        <form style="display: inline" action="{{ route('getLogin') }}" method="get">
          <button class="btn btn-outline-success" type="submit">Login</button>
        </form>
        @endif
    </div>
  </div>
</nav>
<div style="height: 75px;"></div>