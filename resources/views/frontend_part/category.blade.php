@extends('layouts.frontend_master')

@section('content')

    {{-- Section Height --}}
    <div class="anotherpage_height"></div>

    <section id="Category_part">

        <div class="container">

            <div class="row custome_raw">

                <div class="col-lg-3 paddinf_zero">
                    
                    <div class="Category_menu">

                        <h4>Product Categories</h4>

                        <ul>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Interior <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Exterior <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Enamel Paints <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Illusions <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Wood Coating <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Marine Paints <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Industrial Paints <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Adhesive <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Powder Coating <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Textile Auxiliaries <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Special Products <i class="fas fa-paint-brush"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend_product') }}" target="_blank">Undercoats <i class="fas fa-paint-brush"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="col-lg-9 paddinf_zero">

                    <div class="Category_content">

                        <div class="header_part d_flex">
                            <h5>Select Your Product</h5>
                            <p>Home > <span>Interior</span></p>
                        </div>

                        {{-- Category Item --}}

                        <div class="Category_content_item">

                            <div class="row">

                                @for ($x = 0; $x <= 10; $x++)
                                    
                                    <div class="col-lg-4">
        
                                        <div class="Category_content_item_content">
        
                                            <div class="img">
                                                <img src="{{ asset('frontend_assets/images/category_item.png') }}" alt="" class="img-fluid">
                                            </div>

                                            <div class="text">
                                                <a href="">Breathe Easy ViraCare</a>
                                                <p>Anti-viral and anti-bacterial, odor-free - The ultimate healthy paint</p>
                                            </div>
        
                                        </div>
        
                                    </div>

                                @endfor
    
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection