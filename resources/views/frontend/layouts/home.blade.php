
@extends('frontend.layouts.master')
@section('content')

<!--Top Section-->



<!--header section-->

<!--Marque section-->
<section class="marquee">
    <div class="marquee">
        <marquee>সবাইকে মাস্ক পরে বিদ্যালয়ে আসার জন্য বিশেষ ভাবে অনুরোধ করা হল।</marquee>

    </div>

</section>
<!--slider section ctrl+? mark shortcut-->
@include('frontend.layouts.slider')

<!--mission vission-->
<section class="mission_vission">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="padding-top: 15px; padding-bottom: 5px; border-bottom: 1px solid #000000; width: 70%; font-size: 16px;" >Islami Bank Model School & College</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/frontend/image/left.png')}}" style="border: 1px solid #ddd;padding: 5px;
background: #EFEE03;border-radius: 30px; float: left; margin-right: 10px; ">
                <p style="text-align: justify;"><strong>WHO WE ARE :</strong>
                    Islami Bank Model School and College is one of the most prestigious and important educational institutions in Dhaka. It is located in the Mirpur. IBMSC was established in 2005 following the curriculum of Bangladesh Education Board.  Mr. ABD is the first principal of the School. The school is housed in well decorated buildings: six storied. At present this is a two-shift school with the strength of about 1000 students. This school consists of Bangla version.<br>


                </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/frontend/image/right.png')}}" style="border: 1px solid #ddd;padding: 5px;
background: #EFEE03;border-radius: 30px; float: left; margin-right: 10px; ">
                <p style="text-align: justify;"><strong>Principal Message</strong>
                    A Permit Expediter is a trained professional that advises clients throughout the permitting process to keep construction projects on schedule and within budget. Permit Expediters typically have backgrounds in Planning, Construction, Real Estate, or Architecture and have experience working with local compliance codes and zoning requirements.
                </p>
            </div>
        </div>

    </div>
</section>
<!--Column Notice bord-->
<section class="notice_board">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Up Comming Events
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Notice</div>
                    <div class="card-body">
                        <marquee direction="up"> <h5 class="card-title">Light card title</h5>
                            <p class="card-text"><a href=""> Everyone will come to school wear mask.</a> </p>

                            <p class="card-text1"><a href=""> Everyone .</a> </p>
                        </marquee>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Important Links</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>


    </div>


</section>


<!--our service-->
<section class="services">
    <div class="container" style="padding-top: 15px;">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active"  data-bs-toggle="tab"  href="#service">Facilities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#enterprise" data-bs-toggle="tab" >Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#startup" data-bs-toggle="tab">Club</a>
            </li>

        </ul>

        <div class="tab-content">
            <div id="service" class="tab-pane container active">
                <h3>Facilities</h3>
                <p>Newly we have worked side by side with extraordinary leaders to help them spur changes and drive transformation in their organizations, businesses, and industries.
                    Our approach draws on our experience as former leaders, our experience as consultants, and weaves together best practices in action learning, process consulting, change, and leadership development. It is results-oriented, practical, flexible, and hands-on.
                    Our success is grounded in the relationships we build with clients, our approach, and our patron.</p>
            </div>
            <div id="enterprise" class="tab-pane container fade">
                <h3>Event</h3>
                <p>IBMSC organized different types of events</p>
            </div>
            <div id="startup" class="tab-pane container fade">
                <h3>Club</h3>
                <p>IBMSC have different types of club activities such as debit, ICT, Music, Drama. Students are perticipate this club and express their merit.</p>
            </div>

        </div>

    </div>

</section>

<!--footer-->


<!--go to up-->
@endsection



