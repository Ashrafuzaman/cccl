@extends('layouts.frontend_master')

@section('content')
    
{{-- Section Height --}}
<div class="section_height"></div>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START BANNER PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="banner">

    <div class="banner_slider owl-carousel owl-theme">

        <div class="item">

            <img src="{{ asset('frontend_assets/images/banner-1.jpg') }}" alt="" class="img-fluid">

            <div class="banner_text">
                <h3>We Are Professional</h3>
                <h1>For Your Dream Project</h1>
                <a href="">Cross Country Construction Limited</a>
            </div>

        </div>

        <div class="item">

            <img src="{{ asset('frontend_assets/images/banner-2.jpg') }}" alt="" class="img-fluid">

            <div class="banner_text">
                <h3>Professional Builder</h3>
                <h1>We Build Your Home</h1>
                <a href="">Cross Country Construction Limited</a>
            </div>

        </div>

        <div class="item">

            <img src="{{ asset('frontend_assets/images/banner-3.jpg') }}" alt="" class="img-fluid">

            <div class="banner_text">
                <h3>We Are Trusted</h3>
                <h1>For Your Dream Home</h1>
                <a href="">Cross Country Construction Limited</a>
            </div>

        </div>

    </div>

</section>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START 24/7-SUPPORT PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="support_24">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-4 paddinf_zero">

                <div class="support_24_content bgs">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/worker.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h3>Expert Worker</h3>
                        <p>We have many expert and professional workers.</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 paddinf_zero">

                <div class="support_24_content Quality">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/building.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h3>Quality Work</h3>
                        <p>We are a company dedicated to the construction.</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 paddinf_zero">

                <div class="support_24_content Support">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/24.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h3>24/7 Support</h3>
                        <p>Our support team are ready for you.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Section Height --}}
<div class="section_height"></div>


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Paint your imagination PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="Paint_your_imagination">

    <div class="container">

        {{-- Header Part --}}
        <div class="row">

            <div class="col-lg-12">
                <div class="header_pert">
                    <h2>Paint your imagination</h2>
                    <p>Choose from a wide variety of products made to fit all your needs</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="Paint_your_imagination_content">

                   <div class="img">
                       <img src="{{ asset('frontend_assets/images/img 1.jpg') }}" alt="" class="img-fluid">
                       <div class="overlay">
                           <a href="">Interior</a>
                       </div>
                   </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="Paint_your_imagination_content">

                   <div class="img">
                       <img src="{{ asset('frontend_assets/images/img 2.jpg') }}" alt="" class="img-fluid">
                       <div class="overlay">
                           <a href="">Exterior</a>
                       </div>
                   </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="Paint_your_imagination_content">

                   <div class="img">
                       <img src="{{ asset('frontend_assets/images/img 3.jpg') }}" alt="" class="img-fluid">
                       <div class="overlay">
                           <a href="">Enamel Paints</a>
                       </div>
                   </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="Paint_your_imagination_content">

                   <div class="img">
                       <img src="{{ asset('frontend_assets/images/img 4.jpg') }}" alt="" class="img-fluid">
                       <div class="overlay">
                           <a href="">Marine Paints</a>
                       </div>
                   </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="Paint_your_imagination_content">

                   <div class="img">
                       <img src="{{ asset('frontend_assets/images/img 5.jpg') }}" alt="" class="img-fluid">
                       <div class="overlay">
                           <a href="">Industrial Paints</a>
                       </div>
                   </div>

                </div>

            </div>

        </div>

    </div>

</section>




{{-- Section Height --}}
<div class="section_height"></div>



{{-- Section Height --}}
<div class="section_height"></div>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Happy Client PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="happy_client">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 paddinf_zero">

                <div class="happy_client_content d_flex bgs EXPERT">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/worker.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h4 class="count">100</h4>
                        <p>EXPERT WORKERS</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-3 paddinf_zero">

                <div class="happy_client_content d_flex bgs HAPPY ">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/happy_client.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h4 class="count">290</h4>
                        <p>HAPPY CLIENTS</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-3 paddinf_zero">

                <div class="happy_client_content d_flex bgs EXPERT">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/compelete_project.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h4 class="count">480</h4>
                        <p>COMPLETED PROJECTS</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-3 paddinf_zero">

                <div class="happy_client_content d_flex bgs HAPPY ">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/running_project.png') }}" alt="">
                    </div>

                    <div class="text">
                        <h4 class="count">405</h4>
                        <p>RUNNING PROJECTS</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Burger Express PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="Burger_Express">

    <div class="container">

        {{-- Header Part --}}
        {{-- <div class="row">

            <div class="col-lg-12">
                <div class="header_pert">
                    <img src="{{ asset('frontend_assets/images/burger_express.png') }}" alt="">
                </div>
            </div>

        </div> --}}

         <div class="row">

            <div class="col-lg-12">
                <div class="header_pert">
                    <h2>GET IN TOUCH</h2>
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-10 m-auto">

                <div class="Burger_Express_form">

                    <form action="" method="POST">

                        <div class="row">

                            {{-- Name --}}
                            <div class="col-lg-6">

                                <div class="custome_group">
                                    <label> Name </label>
                                    <input type="text" placeholder="Your Name" name="name" class="form-control">
                                </div>

                            </div>

                            {{-- Phone --}}
                            <div class="col-lg-6">

                                <div class="custome_group">
                                    <label> Phone </label>
                                    <input type="text" placeholder="Your Phone" name="phone" class="form-control">
                                </div>

                            </div>

                            {{-- Email Address --}}
                            <div class="col-lg-6">

                                <div class="custome_group">
                                    <label> Email Address </label>
                                    <input type="text" placeholder="Your Email Address" name="email_address" class="form-control">
                                </div>

                            </div>

                            {{-- Address --}}
                            <div class="col-lg-6">

                                <div class="custome_group">
                                    <label> Address </label>
                                    <input type="text" placeholder="Address" name="address" class="form-control">
                                </div>

                            </div>

                            {{-- Message --}}
                            <div class="col-lg-12">

                                <div class="custome_group">
                                    <label> Message </label>
                                   <textarea name="Message" placeholder="Your Message" rows="5" class="form-control"></textarea>
                                </div>

                            </div>

                             {{-- Submit --}}
                             <div class="col-lg-12">

                                <div class="custome_group">

                                    <div class="submit">
                                        <button type="submit">Subnmit Your Request</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- Section Height --}}
<div class="section_height"></div>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Berger Home Diaries PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="Berger_Home_Diaries">

    <div class="container">

        {{-- Header Part --}}
        <div class="row">

            <div class="col-lg-12">
                <div class="header_pert">
                    <h2>CCCL PROJECT DIARIES</h2>
                    <p>We believe that homes are a reflection of the people who live inside, where everything looks and works the way you want it to. That’s why we’ve gathered tons of different home ideas, from home decoration ideas to organizing tips, to help you build your ideal home.</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-1.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">Enter The White Palace</a>
                            <p>The “White Palace” is your dream house, to catch a break from the bustling city life</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-2.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">বাগানটা হোক বারান্দায়!</a>
                            <p>বারান্দাভরা গাছ থাকবে, আর সাথে একচিলতে আকাশ- স্বপ্নটা কি খুব বেশি?</p>
                        </div>
                        
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-3.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">Marvelous Fairy lights</a>
                            <p>Getting the lighting right is essential if we are to make the most of our homes</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-4.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">The Pinnacle of Modern Living</a>
                            <p>Ms. Ayesha Siddika and Mr. Tanim Hasan’s stunning studio apartment is the pinnacle of modern homes</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-5.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">A Light of Love</a>
                            <p>Setting up the perfect candle-lit dinner to make the most memorable night</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="Berger_Home_Diaries_content">

                    <div class="img">

                        <img src="{{ asset('frontend_assets/images/Diaries-6.jpg') }}" class="img-fluid" alt="">

                        <div class="text">
                            <a href="">বাড়িতে আসছে নতুন বউ</a>
                            <p>ভাইয়া আর ভাবীর শুভ বিবাহতে ভাবীকে সুরক্ষা মেনে বাড়িতে বরণ করে নেওয়া</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-12 m-auto">
                
                <div class="More_Inspirations">

                    <a href="">More Inspirations</a>

                </div>

            </div>

        </div>

        
        

    </div>

</section>


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START ABOUT PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="about">

    <div class="container">

        {{-- Header Part --}}
        <div class="row">

            <div class="col-lg-12">
                <div class="header_pert">
                    <h2>ABOUT</h2>
                </div>
            </div>

        </div>

        <div class="row d_flex">

            <div class="col-lg-6">

                <div class="about_content">

                    <div class="img">
                        <img src="{{ asset('frontend_assets/images/about.jpg') }}" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="about_content">

                   <h4>Welcome to Cross Country Construction Limited</h4>

                   <h2>17 Years Experience</h2>

                   <p>CrossCountry Construction Ltd. was formed in 2005 by the Founding Directors who envisioned a firm with a core set of values including innovative thinking, commitments to its stakeholders, and being ethical in all its practices. Today, after four decades of pioneering business, it is now well known as CrossCountry Construction Ltd: one of the most recognized business houses of Bangladesh</p>

                   <a href="">Learn More</a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Banner PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START Banner PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->




@endsection