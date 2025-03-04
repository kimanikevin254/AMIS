
@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light navbar-bg-blue" 
    style="
        position: sticky;
        top: 0;
">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-burger">
            <i class="fas fa-bars"></i>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/profile">
                        <span>Profile</span>
                        <span class="icon"><i class="fas fa-user" style="width: 20%;"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Logout</span>
                        <span class="icon"><i class="fas fa-power-off" style="width: 20%;"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endsection