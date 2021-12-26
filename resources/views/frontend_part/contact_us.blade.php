@extends('layouts.frontend_master')

@section('content')

    {{-- Section Height --}}
    <div class="anotherpage_height"></div>

    <section id="contact_us">

        <div class="container">

            {{-- Header Part --}}
            <div class="row">

                <div class="col-lg-12">
                    <div class="header_pert">
                        <h2>Contact Us</h2>
                    </div>
                </div>

            </div>

            <div class="contact_us_content">

                <div class="row">

                    <div class="col-lg-6">
    
                        <div class="map">
    
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58377.111948023376!2d90.33081568455579!3d23.869416220305713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c3eecf2c4f29%3A0x855167c0c4a1e497!2sUttara%20Residential%20Model%20Town%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1639844046639!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
                        </div>
    
                    </div>

                    <div class="col-lg-6">

                        <div class="office_address">

                            <h4>Corporate Office:</h4>
                            <p>CCCL House</p>
                            <p> House #587 (2nd floor) , Road # 09, Avenue # 04,</p>
                            <p>Mirpur DOHS</p>
                            <p> Dhaka-1216.</p>

                            <a href="tel:01829464947">Mobile : 01829464947</a>
                            <a href="mailto:ccclbd21@gmail.com">Mail : ccclbd21@gmail.com</a>

                            {{-- <div class="img">
                                <img src="{{ asset('frontend_assets/images/24-7-Logo.jpg') }}" class="img-fluid" alt="">
                            </div> --}}

                        </div>

                    </div>
    
                </div>

            </div>

        </div>

    </section>


@endsection