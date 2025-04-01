@extends('layouts.frontend.layout')
@section('content')

    <!-- ================ Breadcrumb Section End ================ -->
    <div class="breadcrumb-sec mt-110">
        <div class="container">
            <ol class="breadcrumb pb-20">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brands</li>
            </ol>
        </div>
    </div>

    <!-- ================ Breadcrumb Section End ================ -->


    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx">
                <div class="proDetailsflex-left proleft-50">
                    <h2>Trusted Brands and Companies</h2>
                    <p>At Guidivo, trust is at the core of everything we do. Our “Trusted Brands” page is a curated
                        collection of reputable companies that meet the highest standards of quality, integrity,
                        and reliability. Each brand listed here has undergone a thorough vetting process to ensure
                        it aligns with our commitment to transparency and consumer trust.</p>
                </div>
                <div class="proDetailsflex-right">
                    <img src="{{ asset('frontend/images/brands.png') }}" alt="Trusted Brands">
                </div>
            </div>
        </div>
    </div>



    <!-- ================ Featured Brands Section Start ================ -->
    <section class="brands-sec">
        <div class="container">
            <div class="brands-header">
                <div>
                    <h2 style="font-size: 1.7rem; padding-bottom: 10px;">How We Vet and Recommend</h2>
                    <p>Guidivo’s team of industry experts uses a meticulous research process to identify and evaluate
                        trustworthy brands.
                        Here's how we do it:</p>
                </div>
            </div>
            <div class="brands-carousel">
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/recommend-icon1.png') }}" alt="Advanced Methodology">
                            <!-- <img class="brandNimg" src="{{ asset('images/brand-logo') }}.png" alt="Wine Clubs">
                 <img class="brandHimg" src="{{ asset('images/brand-logo') }}-hover.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Advanced Methodology</h3>
                        <p>We utilize technology-driven analysis, combined with insider marketing insight, to assess
                            companies'
                            practices and ensure they prioritize ethical behavior over profit-driven shortcuts.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/recommend-icon2.png') }}" alt="Continuous Monitoring">
                            <!-- <img class="brandNimg" src="{{ asset('images/brand-logo') }}.png" alt="Wine Clubs">
                 <img class="brandHimg" src="{{ asset('images/brand-logo') }}-hover.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Continuous Monitoring</h3>
                        <p>Even after a company is listed, we keep a close eye on their performance to make sure they
                            continue
                            to meet our rigorous standards.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/recommend-icon3.png') }}" alt="No Paid Influence">
                            <!-- <img class="brandNimg" src="{{ asset('images/brand-logo') }}.png" alt="Wine Clubs">
                 <img class="brandHimg" src="{{ asset('images/brand-logo') }}-hover.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>No Paid Influence</h3>
                        <p>To maintain complete transparency, we eliminate any form of paid advertising or ranking
                            manipulation.
                            Our recommendations are based solely on merit, ensuring that you're only presented with the very
                            best.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/recommend-icon4.png') }}" alt="Unbiased Research">
                            <!-- <img class="brandNimg" src="{{ asset('images/brand-logo') }}.png" alt="Wine Clubs">
                 <img class="brandHimg" src="{{ asset('images/brand-logo') }}-hover.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Unbiased Research</h3>
                        <p>We dig deep into customer reviews, industry reputation, and service quality to
                            ensure each brand offers genuine value.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Featured Brands Section End ================ -->



    <!-- ================ Trust Section Start ================ -->
    <div class="container mt-95">
        <div class="trust-sec">
            <div class="trust-col">
                <img src="{{ asset('frontend/images/choose.png') }}" alt="choose Guidivo">
            </div>
            <div class="trust-col-right width60">
                <h2>When you choose Guidivo</h2>
                <p>When you choose Guidivo, you’re choosing honesty, quality, and a commitment to connecting you with
                    reliable brands.
                    Explore this page with confidence, knowing every recommendation is a step towards a better, more
                    informed decision.</p>
            </div>
        </div>
    </div>
    <!-- ================ Trust Section End ================ -->

    <!-- ================ Trust Section Start ================ -->
    <div class="container mt-70">
        <div class="trust-sec">
            <div class="trust-col-right width60">
                <h2>Trusted Brands by Guidivo</h2>
                <p>Our team of Guidivo experts researches brands across hundreds of categories to curate a list of
                    trusted options you can rely on. Many brands are also added by experienced consumers who've personally
                    had positive experiences. Created by Guidivo experts and real consumers, for consumers like you.</p>
            </div>
            <div class="trust-col text-right">
                <img src="{{ asset('frontend/images/trusted-brands.png') }}" alt="Trust">
            </div>
        </div>
    </div>
    <!-- ================ Trust Section End ================ -->

@stop
