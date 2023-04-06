<nav class="navbar fixed-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
    </div>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        @if(Auth::guard('admin')->check())
                Hello {{Auth::guard('admin')->user()->name}}
            @endif
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
           <input type="submit" id="logout" value="logout" name="logout">
          </form>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
<div style="height: 75px;"></div>