<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Agenda Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            margin-right: 1.5rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
        background-attachment: fixed;
    }
    .hero-content {
        position: relative;
        z-index: 1;
    }
    .hero-content h1 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .hero-content p {
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 30px;
        font-size: 1.2rem;
        transition: background-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    @media (max-width: 768px) {
        .hero-section {
            height: 400px;
        }
        .hero-content h1 {
            font-size: 2.5rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
    }
     .partnerships-section {
        background-color: #fff;
    }
    .marquee-container {
        height: 120px; /* Adjusted to fit logo sizes */
        overflow: hidden;
        position: relative;
    }
    .marquee-content {
        display: flex;
        animation: marquee 25s linear infinite; /* 25s duration for smooth scrolling */
    }
    .marquee-content:hover {
        animation-play-state: paused; /* Pauses animation on hover */
    }
    .partner-logo {
        flex: 0 0 auto;
        width: 150px; /* Fixed width for consistency */
        margin: 0 15px; /* Spacing between logos */
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .partner-logo img {
        max-width: 100%;
        max-height: 100px; /* Limits logo height */
    }
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%); /* Moves by half the content width for seamless loop */
        }
    }
    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
        padding: 10px 20px;
        font-weight: 500;
        text-decoration: none;
    }
    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }
  .mission-vision-section {
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-title {
        color: #1a3c34;
        font-size: 1.5rem;
    }
    .card-text {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.6;
    }
    @media (max-width: 768px) {
        .card-title {
            font-size: 1.3rem;
        }
        .card-text {
            font-size: 1rem;
        }
    }
    </style>
</head>

<body>
    @include('includes.header')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
