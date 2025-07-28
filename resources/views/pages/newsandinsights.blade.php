@extends('layouts.app')

@section('content')

<section class="py-5" style="color: #2d632d;">
    <h1 class="py-5 fw-bold text-center" style="font-size: 6.5rem">Special Insights from Africa Agenda Network</h1>
    <div class="row p-5">
        <div class="col p-5">
            <a style="text-decoration: none; color: #2d632d" href="">
                <img src="../assets/img/first~mv2.avif" class="" style="height: auto; width: 100%"/>
            <p class="pt-5">Mar 1</p>
            <p>Harnessing Africa’s Digital Transformation: A Leap Towards Innovation</p>
            </a>
        </div>
        <div class="col p-5">
            <a style="text-decoration: none; color: #2d632d" href="">
                <img src="../assets/img/first~mv2.avif" class="" style="height: auto; width: 100%"/>
            <p class="pt-5">Mar 1</p>
            <p>Harnessing Africa’s Digital Transformation: A Leap Towards Innovation</p>
            </a>
        </div>
        <div class="col p-5">
            <a style="text-decoration: none; color: #2d632d" href="">
                <img src="../assets/img/first~mv2.avif" class="" style="height: auto; width: 100%"/>
            <p class="pt-5">Mar 1</p>
            <p>Harnessing Africa’s Digital Transformation: A Leap Towards Innovation</p>
            </a>
        </div>
    </div>
</section>
@include('includes.events-news-insights')
<section style="background-color: #D09C47; color: white; padding: 7rem;">
    <div class="container-fluid">
        <h5>Video Insights - Africa Agenda Special Exclusive Interview Documentaries</h5>
        <h1 class="py-3">Whether you are a business leader, policymaker, academic, or simply someone interested in Africa's future, you will find valuable insights to inform and inspire your perspective.</h1>
        <div class="row">
            <div class="col-6 col-md-3 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Interview with African Business Leader" style="width:100%; height:100%; border:0;" allowfullscreen></iframe>
                </div>
                <h5 class="mt-2">Interview with African Business Leader</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Policy Insights from Policymaker" style="width:100%; height:100%; border:0;" allowfullscreen></iframe>
                </div>
                <h5 class="mt-2">Policy Insights from Policymaker</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Academic Perspective on Africa's Future" style="width:100%; height:100%; border:0;" allowfullscreen></iframe>
                </div>
                <h5 class="mt-2">Academic Perspective on Africa's Future</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Documentary on Sustainable Development" style="width:100%; height:100%; border:0;" allowfullscreen></iframe>
                </div>
                <h5 class="mt-2">Documentary on Sustainable Development</h5>
            </div>
        </div>
    </div>
</section>



@endsection