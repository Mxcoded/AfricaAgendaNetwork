@extends('layouts.app')

@section('title', 'CONTACT US')

@section('content')
@include('includes.get-in-touch')
<div class="container-fluid py-5" style="background-color: #dce4db;">
    <h1 class="text-center mb-4" style="color: #1a3c34;">Connect with Us!</h1>
    <p class="text-center mb-5">Become part of the Africa Agenda Network community today!</p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4" style="color: #1a3c34;">Get In Touch</h4>
                    <p class="text-center mb-4">Get involved with AAN, sign up for our newsletter and stay informed about upcoming events, reports, and opportunities to connect with African leaders and global partners.</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection