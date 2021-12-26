@extends('layouts.frontend_master')

@section('content')

    {{-- Section Height --}}
    <div class="anotherpage_height"></div>
    
    <section id="corporate_speech">

        <div class="container">

            {{-- Header Part --}}
            <div class="row">

                <div class="col-lg-12">
                    <div class="header_pert">
                        <h2>Honorable Speeches</h2>
                    </div>
                </div>

            </div>

            <div class="Honorable_Speeches_tabs">

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">

                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Chairman" aria-expanded="true" aria-controls="collapseOne">
                                <img src="{{ asset('frontend_assets/images/user.png') }}" alt="">    
                                <h4>
                                    Fazle Monayem
                                    <span>Chairman</span>
                                </h4>
                            </button>
                        </h2>

                        <div id="Chairman" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                            <div class="accordion-body">

                                <p>We started our journey with a mission to build beautiful homes and manufacture quality building products combining practicality with functional and aesthetic qualities keeping in mind the changes in tastes and needs of modern lifestyles and our vision is to play a pivotal role to help resolve the housing problem thereby improving the quality of life of the people of Bangladesh though introducing innovative entrepreneurial approaches and ultimately become the market leader. 
                                </p>

                                <p>Our obligation is to provide the highest quality products and services to meet the needs of our customers. REChas the ability to fabricate small, medium and large orders. Customizingvarious types of architectural metal work.</p>

                                <p>Each day is a new day, dawned with new challenges appearing on the horizon to be scaled, along with my team of professionals and experts take these challenges as targets and successfully achieve them accordingly up to the satisfaction of our valued customers.</p>

                                <p>From concept to completion, REC provides a full range of services that are designed to aid our customers in achieving their fabricating objectives. Our experience and resources allow us to work from customer furnished ideas, design drawings or from designs and plans that we generate in house through consultation with the client. We care both beauty and user friendliness in designing structures. REC has the expertise and the production facilities to produce a wide range of steel building products, and we servemultitude industries: Chemical, Textiles, Spinning, GarmentsFloor and Beverage, Agricultural, Petrochemical and Construction.</p>

                                <p>For us, our core values are, understanding of our customers demand and precision, which guide us in our entire strategic and tactical decision making.</p>

                                <p>Quality management system and quality control of our products as well as engineering services with highest precision is our top most priority to keep ahead of modern market demands, so that our clients can retain their business relation with us to your success is our mission.</p>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-item">

                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#md" aria-expanded="false" aria-controls="collapseTwo">
                                <img src="{{ asset('frontend_assets/images/user.png') }}" alt="">    
                                <h4>
                                    Md. Shafiqul Islam
                                    <span>Director</span>
                                </h4>
                            </button>
                        </h2>

                        <div id="md" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            
                            <div class="accordion-body">
                                
                                <p>Having a highly experienced team of engineers and technical experts Rafi Engineering & Construction (REC) has established a state of the art steel fabrication factory in Uttara near sec-10, Dhaka,Bangladesh. Our facility is furnished with latest fabrication machinery-metal cutting, forming and welding equipment, which provide us with the most updated fabrication capabilities</p>

                                <p>Since its inception, we nourished the spirit “the clients’ are always on top of priorities”. Rafi Engineering &	Construction” is powered by a dynamic and aggressive workforce comprising qualified Engineers, Architects, Accountants, project managers, Marketing & customer service team is always set to offer their best possible services to clients to meet their needs and tastes to every department is led by high-ups is assigned to discharge their concern responsibilities through maintaining due coordination among them. at Advanced Group, we work in a team context supported by the latest software. we always try our best to provide the clients the consistent feedback against their queries.</p>

                                <p>“Rafi Engineeing Construction” has set up an efficient engineering team for generating innovative ideas and developing quality products. Our Customer Service Department has earned the confidence and trust of our valued clients and landowners by dint of offering excellent services and caring etiquette. Our Accounts & Finance Dept: is full updated with latest data while procurement & QC dept: ensures best quality construction material and project engineers oversee the prescribed construction of the project. We always prefer professionalism to profit.</p>

                                Rafi Engineeing & Constructionis committed to its clients to give its best “For A Beautiful Tomorrow”

                            </div>

                        </div>

                    </div>

                    {{-- <div class="accordion-item">

                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                            </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            
                            <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>

                        </div>

                    </div> --}}

                </div>

            </div>

        </div>

    </section>

@endsection