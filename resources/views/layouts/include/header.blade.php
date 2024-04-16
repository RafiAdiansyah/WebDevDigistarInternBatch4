<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('cdn/imgg/logo(putih).png') }}" class="d-block w-100" alt="..." width="60" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Customer Journey</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('new_install') }}">New Install</a></li>
                            <li><a class="dropdown-item" href="{{ url('modify') }}">Modify</a></li>
                            <li><a class="dropdown-item" href="{{ url('suspend_resume') }}">Suspend-Resume</a></li>
                            <li><a class="dropdown-item" href="{{ url('validation') }}">Validation</a></li>
                            <li><a class="dropdown-item" href="{{ url('disconnect') }}">Disconnect</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('assurance') }}">Assurance</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Customer</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('service_id') }}">Service ID</a></li>
                            <li><a class="dropdown-item" href="{{ url('dataTeknis') }}">Data Teknis</a></li>
                            <li><a class="dropdown-item" href="{{ url('project') }}">Project</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('userManagement') }}">User Managemnet</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>