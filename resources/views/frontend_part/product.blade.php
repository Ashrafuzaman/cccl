@extends('layouts.frontend_master')

@section('content')

    {{-- Section Height --}}
    <div class="anotherpage_height"></div>

    <nav aria-label="breadcrumb" class="product_bradcum">
        
        <div class="container">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>

        </div>

    </nav>

    <section id="product_banner">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="product_banner_img">
                        <img src="{{ asset('frontend_assets/images/product_banner.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section id="product_description">

        <div class="container">

            <div class="row">

                {{-- Description Part --}}
                <div class="col-lg-8">

                    <div class="product_description_content">

                        <h3>Product Description</h3>
    
                        <p>Breathe Easy ViraCare is a highly advanced water-based interior emulsion paint. Its Silver Ion technology assures the killing of 99% infection-causing viruses and bacteria on the painted surface, providing a germ-free and hygienic environment. Certified by Green Label Singapore, this environmentally preferred paint is Odor Free and has a Low VOC content. Breathe Easy ViraCare is the ultimate healthy paint for your home.</p>
    
                    </div>

                    <div class="product_description_content">

                        <h3>Video</h3>
    
                       <div class="video">

                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/-WRZI63emjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                       </div>
    
                    </div>

                </div>

                {{-- Logo Part --}}
                <div class="col-lg-4">

                    {{-- Features --}}
                    <div class="product_description_content">

                        <h3>Features</h3>
    
                        <div class="Features">

                            <div class="row">

                                <div class="col-lg-3">
                                   <div class="img">
                                        <img src="{{ asset('frontend_assets/images/Features-1.png') }}" class="img-fluid" alt="">
                                   </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="img">
                                         <img src="{{ asset('frontend_assets/images/Features-2.png') }}" class="img-fluid" alt="">
                                    </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="img">
                                         <img src="{{ asset('frontend_assets/images/Features-3.png') }}" class="img-fluid" alt="">
                                    </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="img">
                                         <img src="{{ asset('frontend_assets/images/Features-4.png') }}" class="img-fluid" alt="">
                                    </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="img">
                                         <img src="{{ asset('frontend_assets/images/Features-5.png') }}" class="img-fluid" alt="">
                                    </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="img">
                                         <img src="{{ asset('frontend_assets/images/Features-6.png') }}" class="img-fluid" alt="">
                                    </div>
                                 </div>

                            </div>

                        </div>
    
                    </div>

                    {{-- Recommended Surface --}}
                    <div class="product_description_content">

                        <h3>Recommended Surface</h3>
    
                        <p>Interior Cement Plaster, Concrete Stone, Brick Asbestos, Cement Sheet</p>
    
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection