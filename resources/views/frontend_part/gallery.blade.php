@extends('layouts.frontend_master')

@section('content')

    {{-- Section Height --}}
    <div class="anotherpage_height"></div>

    <section id="gallery">

        <div class="container">

            {{-- Header Part --}}
            <div class="row">

                <div class="col-lg-12">
                    <div class="header_pert">
                        <h2>Gallery Part</h2>
                    </div>
                </div>

            </div>

            <div class="gallery_content">

                <div class="row">

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 1.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 1.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 2.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 2.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 3.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 3.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 4.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 4.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 5.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 5.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 6.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 6.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 7.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 7.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 8.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 8.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 9.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 9.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="img">
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('frontend_assets/images/pic 10.jpeg') }}">
                                <img src="{{ asset('frontend_assets/images/pic 10.jpeg') }}" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection