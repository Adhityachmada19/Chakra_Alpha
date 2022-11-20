<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link text-body font-weight-bold px-0"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">{{auth()->user()->name}}</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item nav-link text-body font-weight-bold px-0" href="/logout" onclick="return confirm('Are you sure want to logout?')"><i class="fas fa-key opacity-6 text-dark me-1"></i><span>Logout</span></a>
            </div>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell cursor-pointer"></i>
            </a>
           
          </li>
        </ul>
      </div>
    </div>
  </nav>