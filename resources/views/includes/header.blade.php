<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/africa agenda logo.avif') }}" alt="Africa Agenda Network Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Our Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery') }}">Gallery and Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('data_hub') }}">AAN DATA HUB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    