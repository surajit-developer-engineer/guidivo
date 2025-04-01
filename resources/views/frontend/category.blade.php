@extends('layouts.frontend.layout')
@section('content')

    <!-- ================ Breadcrumb Section End ================ -->
    <div class="breadcrumb-sec mt-110">
        <div class="container">
            <ol class="breadcrumb pb-20">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Categories</li>
            </ol>
        </div>
    </div>

    <!-- ================ Breadcrumb Section End ================ -->

    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx">
                <div class="proDetailsflex-left">
                    <h2>Connecting You to Trusted Brands, Products and Services</h2>
                    <p>At Guidivo, we make it simple for consumers and business owners to find trusted,
                        reliable brands across a wide range of industries. Unlike platforms driven by pay-to-play models
                        or sponsored results, we prioritize unbiased guidance and verified insights to connect you with
                        brands you can rely on. Navigating the sea of options online can be overwhelming, especially with
                        misleading practices like ranking manipulation or paid-driven results. That’s why we do the hard
                        work for you,
                        identifying reliable services and products that meet the highest standards of transparency and
                        customer satisfaction.</p>
                    <p>From automotive and home services to legal expertise and lifestyle upgrades,
                        Guidivo ensures every recommendation is based on merit and credibility, not marketing dollars.
                        Explore a comprehensive range of categories designed to help you make smarter,
                        more confident decisions.</p>
                </div>
                <!-- <div class="proDetailsflex-right">
            <img src="{{ asset('frontend/images/img-visual') }}.png" alt="Banner Image">
           </div> -->
            </div>
        </div>
    </div>


    <!-- ================ Trending Categories Section Start ================ -->
    <section class="trending-sec pt-0">
        <div class="container">
            <div class="trending-header">
                <div>
                    <h2 style="font-size: 1.7rem; padding-bottom: 10px;">Explore Our Categories</h2>
                    <p>Explore what’s trending across different consumer service industries and make smarter decisions
                        today.</p>
                </div>
            </div>

            <div class="trending-grids trending-grids-3grid">
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/automotive.jpg') }}" alt="Automotive">
                    </div>
                    <div class="box-content">
                        <h3>Automotive</h3>
                        <p>Find solutions that keep your vehicle reliable, from comprehensive
                            extended warranties to professional car transportation services.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/babies.jpg') }}" alt="Babies">
                    </div>
                    <div class="box-content">
                        <h3>Babies</h3>
                        <p>Explore services and products tailored to parents and young families, offering safe, convenient,
                            and trustworthy choices for your little ones.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/business-management') }}.jpg" alt="Business Management">
                    </div>
                    <div class="box-content">
                        <h3>Business Management</h3>
                        <p>Empower your business with tools for payroll, human resources, phone systems, and other solutions
                            that enhance productivity and growth.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/charity.jpg') }}" alt="Charity">
                    </div>
                    <div class="box-content">
                        <h3>Charity</h3>
                        <p>Support communities through a curated selection of reputable charities that emphasize
                            transparency
                            and effectiveness in their missions.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/credit.jpg') }}" alt="Credit">
                    </div>
                    <div class="box-content">
                        <h3>Credit</h3>
                        <p>Take control of your credit with services that provide debt relief, credit repair, and tools for
                            long-term financial recovery.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/credit-cards') }}.jpg" alt="Credit Cards">
                    </div>
                    <div class="box-content">
                        <h3>Credit Cards</h3>
                        <p>Find the credit card that suits your lifestyle, offering valuable rewards,
                            low rates, or tailored options for rebuilding credit.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/dating.jpg') }}" alt="Dating">
                    </div>
                    <div class="box-content">
                        <h3>Dating</h3>
                        <p>Discover reputable and innovative dating platforms that connect individuals while prioritizing
                            safety and compatibility.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/entertainment.jpg') }}" alt="Entertainment">
                    </div>
                    <div class="box-content">
                        <h3>Entertainment</h3>
                        <p>Engage with entertainment services, platforms, and tools that deliver exciting content tailored
                            to your interests.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/fashion.jpg') }}" alt="Fashion">
                    </div>
                    <div class="box-content">
                        <h3>Fashion</h3>
                        <p>Stay stylish with carefully selected services and brands that cater to varied tastes,
                            featuring the latest in accessibility and trends.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/financial-services') }}.jpg" alt="Financial Services">
                    </div>
                    <div class="box-content">
                        <h3>Financial Services</h3>
                        <p>Access tools and services like business loans, tax relief, and credit repair to manage your
                            financial well-being or grow your business.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/health-lifestyle') }}.jpg" alt="Health & Lifestyle">
                    </div>
                    <div class="box-content">
                        <h3>Health & Lifestyle</h3>
                        <p>Choose products and services that enhance your well-being, from personal health tools to
                            lifestyle upgrades for a balanced life.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/home-services') }}.jpg" alt="Home Services">
                    </div>
                    <div class="box-content">
                        <h3>Home Services</h3>
                        <p>Protect your home and appliances with top-rated home warranties or find trusted providers for
                            cleaning,
                            remodeling, or system repairs.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/hot-products') }}.jpg" alt="Hot Products">
                    </div>
                    <div class="box-content">
                        <h3>Hot Products</h3>
                        <p>Explore trending products across categories, from must-have gadgets to innovative solutions
                            for your everyday needs.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/life-insurance') }}.jpg" alt="Insurance">
                    </div>
                    <div class="box-content">
                        <h3>Insurance</h3>
                        <p>Discover affordable and comprehensive home, auto, or life insurance plans from leading providers
                            who
                            put your protection first.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/jewelry.jpg') }}" alt="Jewelry">
                    </div>
                    <div class="box-content">
                        <h3>Jewelry</h3>
                        <p>Find exquisite jewelry collections from verified brands that combine elegance, quality
                            craftsmanship,
                            and trusted service.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/kidswear.jpg') }}" alt="Kidswear">
                    </div>
                    <div class="box-content">
                        <h3>Kidswear</h3>
                        <p>Shop high-quality, comfortable clothing for kids that blends style, durability,
                            and affordability from trusted brands.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/legal.jpg') }}" alt="Legal">
                    </div>
                    <div class="box-content">
                        <h3>Legal</h3>
                        <p>Secure legal peace of mind with access to top-rated attorneys specializing in personal injury,
                            estate planning, and more.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/menswear.jpg') }}" alt="Menswear">
                    </div>
                    <div class="box-content">
                        <h3>Menswear</h3>
                        <p>Get access to top brands offering menswear that combines modern designs,
                            timeless styles, and quality tailoring.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/travel.jpg') }}" alt="Travel">
                    </div>
                    <div class="box-content">
                        <h3>Travel</h3>
                        <p>Travel smarter with premium options for private jet charters, efficient car transportation,
                            or comprehensive trip planning services.</p>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/womenswear.jpg') }}" alt="Womenswear">
                    </div>
                    <div class="box-content">
                        <h3>Womenswear</h3>
                        <p>Discover sophisticated and fashionable options for womenswear, featuring a mix of
                            contemporary and classic styles from trusted brands.</p>
                    </div>
                </div>

            </div>



        </div>
    </section>
    <!-- ================ Trending Categories Section End ================ -->


    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx text-center">
                <div class="proDetailsflex-left">
                    <h2>Guidivo Methodology</h2>
                    <h4>The Guidivo Difference</h4>
                    <p>At Guidivo, trust is more than a mission statement; it’s the core of everything we do.
                        We understand how pervasive paid ads and ranking manipulation are in the online landscape,
                        and how these factors can lead consumers to unreliable options. That’s why our rankings are
                        never paid for or influenced by promotional deals.</p>
                </div>
                <!-- <div class="proDetailsflex-right">
            <img src="{{ asset('frontend/images/img-visual') }}.png" alt="Banner Image">
           </div> -->
            </div>
        </div>
    </div>


    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx">
                <div class="proDetailsflex-left proleft-50">
                    <h2>How We Vet Brands</h2>
                    <p>Every brand featured on Guidivo undergoes a rigorous vetting process that eliminates bad practices,
                        identifies deceptive advertising methods, and isolates genuinely trustworthy providers.
                        Here’s how we ensure quality:</p>
                    <ul>
                        <li>* Advanced Research Practices: By analyzing consumer feedback, industry reports,
                            and historical performance data, we create unbiased evaluations for every brand.</li>
                        <li>* Technology-Driven Insights: Leveraging smart technology, we detect ranking manipulations
                            and prioritize trustworthy entities over those relying on paid rankings.</li>
                        <li>* Marketing Expertise: Our seasoned marketing team applies insider knowledge to identify and
                            counteract manipulative marketing practices.</li>
                    </ul>
                </div>
                <div class="proDetailsflex-right">
                    <img style="border-radius: 5px;" src="{{ asset('frontend/images/meeting-specialists') }}.jpg"
                        alt="Banner Image">
                </div>
            </div>
        </div>
    </div>


    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx text-center">
                <div class="proDetailsflex-left">
                    <h2>Commitment to Transparency</h2>
                    <p>We aim for full transparency in every recommendation we make. Our mission is simple: to
                        provide objective,
                        data driven, and consumer focused guidance that helps you confidently select brands built on
                        quality,
                        reliability, and honesty. Through this approach, Guidivo minimizes the noise of paid results,
                        enabling smarter,
                        vetted choices for everything you need.</p>
                    <p>Trust Guidivo to guide you toward the best services and brands, every time.</p>
                </div>
                <!-- <div class="proDetailsflex-right">
            <img src="{{ asset('frontend/images/img-visual') }}.png" alt="Banner Image">
           </div> -->
            </div>
        </div>
    </div>

@stop
