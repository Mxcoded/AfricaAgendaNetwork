@extends('layouts.app')

@section('content')
   <section class="p-5" style="background-color: #D09C47; color: white;">
    <div class="row justify-content-between align-items-center">
                <div class="col">
            <h1 class="py-5">Expert Solutions</h1>
        <p class="ms-auto">AAN specializes in delivering fully integrated international marketing solutions</p>
</div>
        <div class="col pt-5">

                <p class="p-5 pt-5 m-5"> AAN has a strong presence across Africa, the UK, the US, Turkey, and the Middle East. 
                    With our international reach, we bridge the gap between governments, development partners, private sector organizations, and global markets.</p>
</div>
    </div>
    
</section>
<section class="py-5" style="color: #2d632d; background-color: #fff;">
    <div class="row  align-items-center p-5">
        <div class="col-md-4 p-5 pt-0">
            <h1 class="border-top border-success border-2 pt-3 pb-3">Global Branding and Marketing Solutions</h1>
            <h1 class="border-top border-success border-2 pt-3 pb-3">High-level Event Planning</h1>
            <h1 class="border-top border-success border-2 pt-3 pb-3">Trade and Investment Facilitation</h1>
            <h1 class="border-top border-success border-2 pt-3 pb-3">High-profile Protocol Service</h1>
            <h1 class="border-top border-success border-2 pt-3 pb-3">Exclusive Documentary Interviews</h1>
        </div>
         <div class="logo-container col">
                    <img src="{{ asset('assets/img/AAN.avif') }}" alt="Africa Agenda Logo" class="img-fluid animated-logo" style="max-width: 470px;">
                </div>
        <div class="col-md-4 p-5">
            <h1 class="border-top border-success border-2 text-end pt-3 pb-3">B2B, G2G, and G2B Engagements</h1>
            <h1 class="border-top border-success border-2 text-end pt-3 pb-3">Exclusive Publication</h1>
            <h1 class="border-top border-success border-2 text-end pt-3 pb-3">Strategic consultancy and capacity building</h1>
            <h1 class="border-top border-success border-2 text-end pt-3 pb-3">Tailored Social Media and Digital Marketing campaigns</h1>
            <h1 class="border-top border-success border-2 text-end pt-3 pb-3">Regional and International Media Outreach</h1>
        </div>
    </div>
</section>
@endsection