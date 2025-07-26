<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'HOME')
@section('content')
    @include('includes.hero')
    @include('includes.partnership')
    @include('includes.mission')
    @include('includes.our-presence')
    @include('includes.featured-initiatives')
    @include('includes.our-impact')
    @include('includes.events-news-insights')
    @include('includes.get-in-touch')
  

    {{-- Uncomment the following sections if needed --}}
    {{-- @include('includes.stats') --}}
    {{-- @include('includes.events') --}}
    {{-- @include('includes.news') --}}

    {{-- Additional sections can be added here as needed --}}

    {{-- Uncomment the following sections if needed --}}
    {{-- @include('includes.stats') --}}
    {{-- @include('includes.events') --}}
    {{-- @include('includes.news') --}}

    {{-- Additional sections can be added here as needed --}}

    {{-- Uncomment the following sections if needed --}}
    {{-- @include('includes.stats') --}}
    {{-- @include('includes.events') --}}
    {{-- @include('includes.news') --}}

    {{-- Additional sections can be added here as needed --}}
    {{-- <!-- Stats Section -->

    {{-- Uncomment the following sections if needed --}}
    {{-- @include('includes.stats') --}}
    {{-- @include('includes.events') --}}
    {{-- @include('includes.news') --}}

    {{-- Additional sections can be added here as needed --}}
    {{-- <!-- Stats Section -->
    <section class="stats-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Countries</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Projects</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Beneficiaries</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Partners</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="text-center mb-5">Join us at our upcoming events and conferences</p>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="event-card p-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white p-3 text-center me-3 rounded" style="width: 70px;">
                                <div class="fw-bold fs-4">15</div>
                                <div>OCT</div>
                            </div>
                            <div>
                                <h5 class="mb-0">Africa Innovation Summit</h5>
                                <div class="text-muted">Nairobi, Kenya</div>
                            </div>
                        </div>
                        <p>Join innovators from across the continent to showcase cutting-edge solutions for Africa's
                            development challenges.</p>
                        <a href="#" class="btn btn-sm btn-custom">Register Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="event-card p-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white p-3 text-center me-3 rounded" style="width: 70px;">
                                <div class="fw-bold fs-4">03</div>
                                <div>NOV</div>
                            </div>
                            <div>
                                <h5 class="mb-0">Youth Leadership Forum</h5>
                                <div class="text-muted">Accra, Ghana</div>
                            </div>
                        </div>
                        <p>Empowering the next generation of African leaders through mentorship and skills development.</p>
                        <a href="#" class="btn btn-sm btn-custom">Register Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="event-card p-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white p-3 text-center me-3 rounded" style="width: 70px;">
                                <div class="fw-bold fs-4">20</div>
                                <div>NOV</div>
                            </div>
                            <div>
                                <h5 class="mb-0">Sustainable Agriculture Conference</h5>
                                <div class="text-muted">Addis Ababa, Ethiopia</div>
                            </div>
                        </div>
                        <p>Exploring innovative approaches to sustainable farming and food security in Africa.</p>
                        <a href="#" class="btn btn-sm btn-custom">Register Now</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="event-card p-4 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white p-3 text-center me-3 rounded" style="width: 70px;">
                                <div class="fw-bold fs-4">05</div>
                                <div>DEC</div>
                            </div>
                            <div>
                                <h5 class="mb-0">Digital Transformation Workshop</h5>
                                <div class="text-muted">Lagos, Nigeria</div>
                            </div>
                        </div>
                        <p>Leveraging digital technologies for economic growth and development across sectors.</p>
                        <a href="#" class="btn btn-sm btn-custom">Register Now</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">View All Events</a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
            <p class="text-center mb-5">Stay updated with our latest activities and achievements</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="news-card card h-100">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Education</span>
                            <h5 class="card-title">New Scholarship Program Launched</h5>
                            <p class="card-text">We've launched a new scholarship initiative to support 500 students across
                                10 African countries.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-muted">October 5, 2023</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="news-card card h-100">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Agriculture</span>
                            <h5 class="card-title">Sustainable Farming Initiative Reaches Milestone</h5>
                            <p class="card-text">Our sustainable agriculture program has now trained over 10,000 farmers in
                                climate-resilient techniques.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-muted">September 28, 2023</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="news-card card h-100">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Entrepreneurship</span>
                            <h5 class="card-title">Startup Incubator Graduates 50 New Ventures</h5>
                            <p class="card-text">Our entrepreneurship hub celebrates the graduation of 50 startups that
                                have secured over $2M in funding.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-muted">September 15, 2023</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-custom">View All News</a>
            </div>
        </div>
    </section> --}}
@endsection
