@extends('layouts.app')

@section('content')
<section class="about py-5 text-center container" style="color: #2d632d;">
    <h1 class="text-3xl font-bold mb-5">Who We Are</h1>
    <p class="text-[#2d632d] fw-lighter fs-5">
        Africa Agenda Network (AAN) is a Pan-African platform dedicated to showcasing the transformative development of 
        African leaders across various sectors while recognizing the contributions of global partners positively impacting the continent. 
        AAN aims to reshape global narratives about Africa by promoting its rich heritage, economic potential, and success stories, 
        countering the negative portrayals often emphasized in international media. AAN specializes in delivering fully integrated 
        international marketing solutions through high-level regional and global forums, summits, conferences, exhibitions, and roundtables.
    </p>   
    <p class="fw-lighter fs-5 mb-5">With a strong presence in The Gambia, Africa, the UK, the US, Turkey, and the Middle East, AAN
        bridges the gap between governments, private sector organizations, development partners and global markets. 
        We provide branding strategies that foster emotional connections and long-term relationships, 
        coupled with marketing approaches that amplify visibility and drive demand.
    </p>
    <button class="mt-5" style="background-color: #d09c47; color: white; border-radius: 24px; padding: 10px 20px; border: none;">
        <a href="#mission" class="btn btn-primary" style="text-decoration: none">Learn more...</a>
    </button>
</section>
<section class="mission-vision py-5 ps-5 pe-5" style="background-color: #2d632d;">
    <div class="row text-white pb-5">
        <div class="col" style="" id="mission">
            <h1 class="text-3xl font-bold text-white mb-5">Our Mission</h1>
            <p class="fw-lighter fs-5" style="margin-right: 11.5rem;">
                Our mission is to create a formidable network to develop an exceptional platform showcasing Africa’s innovative leadership, 
                promote cross-border trade, investment and regional integration, combat negative stereotypes and celebrate significant achievements. 
                The dynamic platform brings together policymakers, economic stakeholders, private sector leaders to drives solutions to create inclusive 
                growth and prosperity through collaboration and partnerships.
            </p>
        </div>
        <div class="col animated-logo" style="background-image: url('../assets/img/IMG_4874.avif'); background-size: contain; background-repeat: no-repeat; background-position: center; height: 500px"></div>
    </div>
    <div class=" row text-white pt-5">
        <div class="col ">
            <div class="d-flex" >
                <div class="p-5"><img src="../assets/img/vision.png" class="" style="height: 250px; width: 280px"/></div>
                <div class="border-top border-2 pt-5 ">
                    <h1 class="text-3xl font-bold text-green-900 pb-5">Our Vision</h1>
                    <p class="fw-lighter fs-6">
                        To become the leading platform for showcasing Africa’s transformative journey,
                        advancing collaboration across sectors, and facilitating trade, investment, and innovation. 
                        We envision a future where Africa’s potential is fully realized, 
                        empowering African nations to thrive in the global marketplace.
                    </p>
                </div>    
            </div>    
        </div>
        <div class="col">
            <div class="d-flex" >
                <div class="p-5"><img src="../assets/img/values.png" class="" style="height: 250px; width: 300px"/></div>
                <div class="border-top border-2 pt-5">
                    <h1 class="text-3xl font-bold pb-5">Our Values</h1>
                    <p class="fw-lighter fs-6">
                        We are committed to innovation, upholding integrity, fostering collaboration, 
                        and striving for excellence in communicating Africa’s success stories, building ethical partnerships, 
                        and driving sustainable development.
                    </p>
                </div>   
            </div>
        </div>
    </div>
</section>


<section class="py-5 p-5" style="color: #2d632d;">
                <div><img src="../assets/img/IMG_4875.avif" class="" style="height: auto; width: 100%" /></div>
    <button class="mt-5" style="background-color: #d09c47; color: white; border-radius: 24px; padding: 10px 20px; border: none;">
        <a href="#leadership" class="btn btn-primary" style="text-decoration: none">Our Leadership</a>
    </button>

</section>

<section class="p-5" style="color: #2d632d;">
    <div class="row justify-content-between align-items-center">
                <div class="col-md-7">
            <h1 class="py-5 fw-bold" style="font-size: 7rem" id="leadership">Our Leadership</h1>
            <h2 class="py-5 fw-bold fs-1">Meet our leaders from across the continent.</h1>

        <p class="ms-auto">Our team is composed of passionate, dedicated professionals from diverse backgrounds, 
            each committed to advancing the African agenda. Led by a visionary leadership team, AAN’s approach is collaborative and forward-thinking, 
            empowering Africa’s leaders and partners to thrive in an increasingly interconnected world.</p>
</div>
        <div class="col-md-5 pt-5">

                <p class="m-5 mt-5" style="padding: 3rem; padding-top: 25rem"> Become part of the Africa Agenda Network community today! Sign up for our newsletter and 
                    stay informed about our latest initiatives, reports, and opportunities to connect with key stakeholders shaping Africa's future.</p>
</div>
    </div>
    <button class="mt-5 align-middle" style="background-color: #d09c47; color: white; border-radius: 24px; padding: 10px 20px; border: none;">
        <a href="{{route('contact')}}#get-in-touch" class="btn btn-primary" style="text-decoration: none">Get in touch!</a>
    </button>
    
</section>


@endsection