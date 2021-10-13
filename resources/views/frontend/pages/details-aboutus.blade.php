

@extends('frontend.layouts.master')
@section('content')

    <section class="baner">

        <img src="{{url('public/frontend/image/t.jpg')}}" style="width:100%;">

    </section>

    <!--about us-->
   <div class="row">
       <div class="col-md-10 d_aboutus">
           <div class="d-flex align-items-start">
               <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                   <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">পরিচিতি</button>
                   <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">লক্ষ্য ও উদ্দেশ্য</button>
                   <button class="nav-link" id="v-pills-speciality-tab" data-bs-toggle="pill" data-bs-target="#v-pills-speciality" type="button" role="tab" aria-controls="v-pills-speciality" aria-selected="false">বৈশিষ্ট্য</button>

               </div>
               <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p style="text-align: justify">ইসলামী ব্যাংক বাংলাদেশ লিমিটেড দেশের অন্যতম শীর্ষস্থানীয় সর্বজন স্বীকৃত একটি কল্যাণমুখী ব্যাংক। ব্যাংকের সামাজিক দায়বদ্ধতার দায়িত্ব পালনে নিয়োজিত রয়েছে ইসলামী ব্যাংক ফাউন্ডেশন। ইসলামী ব্যাংক ফাউন্ডেশনের নিজস্ব ব্যবস্থাপনায় ও অর্থায়নে প্রতিষ্ঠিত হয়েছে ইসলামী ব্যাংক মডেল স্কুল এন্ড কলেজ। এটি একটি আধুনিক বাংলা মাধ্যম শিক্ষা প্রতিষ্ঠান। এখানে আধুনিক ও ইসলামী শিক্ষার সমন্বয়ে যুগোপযোগী সিলেবাস প্রনয়ণ করা হয়েছে।</p><br>
                   <p style="text-align: center"></p><br>

                   </div>
                   <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><p style="text-align: justify">শিশুদের মাঝে সুশিক্ষা প্রদানের মাধ্যমে সৎ যোগ্য ও আদর্শবান নাগরিক তৈরি করা এবং প্রতিযোগিতাপূর্ণ বিশ্বে একবিংশ শতাব্দীর চ্যালেঞ্জ মোকাবেলায় নিজেদেরকে শ্রেষ্ঠত্ব প্রমাণ করার মত জ্ঞানার্জনে সাহায্য করা।</p></div>
                   <div class="tab-pane fade" id="v-pills-speciality" role="tabpanel" aria-labelledby="v-pills-speciality-tab"><p>১.মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষাবোর্ড, ঢাকা কর্তৃক অনুমোদিত।<br>
                           ২.	নব-নির্মিত সুপরিসর ভবনে শিক্ষা কার্যক্রম পরিচালনা।<br>
                           ৩.	ইসলামী ব্যাংক ফাউন্ডেশনের ব্যবস্থাপনায় পরিচালিত।<br>
                           ৪.	প্রশিক্ষণপ্রাপ্ত, দক্ষ ও অভিজ্ঞ শিক্ষকমন্ডলী কর্তৃক পাঠদান।<br>
                           ৫.	অভিভাবকদের সুচিন্তিত পরামর্শ গ্রহণ এবং বাস্তবায়ন।<br>
                           ৬.	আধুনিক মাল্টিমিডিয়া প্রজেক্টরের মাধ্যমে পাঠদান।<br>
                           ৭.	সংগীত, নৃত্য,বক্তিতা, বিতর্ক প্রতিযোগীতা, সাহিত্য চর্চা, চিত্রাঙ্কন ও কম্পিউটার শিক্ষার বিশেষ ব্যবস্থা।<br>
                           ৮.	সকল পাবলিক পরীক্ষায় এ+ সহ পাশের হার শতভাগ।<br>
                           ৯.	পুরো ক্যাম্পাস সিসিটিভি ক্যামেরা দ্বারা সার্বক্ষণিক পর্যবেক্ষণ।<br>
                           ১০.	 নৈতিকতা, আধুনিকতা ও ধর্মীয় অনুশাসন পালনে উদ্বুদ্ধকরণ।<br>
                       </p></div>


               </div>
           </div>

       </div>

   </div>





@endsection