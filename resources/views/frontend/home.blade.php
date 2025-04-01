@extends('layouts.frontend.layout')
@section('content')

    <!-- ================ Header Section Start ================ -->
    <header>
        <div class="banner-sec">
            <div class="container">
                <div class="banner-wave">
                    <div class="banner-content">
                        <div class="banner-text">
                            <h1>Find the Best <span>Brands</span> for Your Needs</h1>
                            <p><a href="{{ route('home') }}">Guidivo.com</a> connects you with trusted brands in Home, Finance,
                                Insurance, Fashion, Travel, Automotive,
                                Business Services, and more. Get expert insights, reliable guidance, and unbiased
                                comparisons to make
                                informed decisions with confidence.</p>
                            <form class="banner-form">
                                <input placeholder="Search reliable brands and popular services" type="text" value="">
                                <i class="tiIcon ti-search searchIcon"></i>
                                <input type="submit" value="">
                            </form>

                        </div>
                        <div class="bammer-img"><img src="{{ asset('frontend/images/img-visual.png') }}" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ================ Header Section End ================ -->



    <!-- ================ Hot Topics Section Start ================ -->
    <section class="hottopics-sec">
        <div class="container">
            <div class="hottopics-header">
                <div>
                    <h2>Hot Topics</h2>
                    <p>Stay informed with expert reviews and guides on the most essential services for your home, finances,
                        and lifestyle.</p>
                </div>
                <a href="#">Explore More Topics <i class="tiIcon ti-angle-double-right"></i></a>
            </div>
            <div class="owl-carousel owl-theme hottopics-carousel">
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon15.png') }}"
                                alt="Personal Injury Attorney"></div>
                        <p>Personal Injury Attorney</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon1.png') }}" alt="Home Warranty">
                        </div>
                        <p>Home Warranty</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon16.png') }}" alt="Junk Removal">
                        </div>
                        <p>Junk Removal</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon17.png') }}" alt="Mold Removal">
                        </div>
                        <p>Mold Removal</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon18.png') }}" alt="Carpet Cleaning">
                        </div>
                        <p>Carpet Cleaning</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon5.png') }}" alt="Auto Warranty">
                        </div>
                        <p>Auto Warranty</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon2.png') }}" alt="Private Jets">
                        </div>
                        <p>Private Jets</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon19.png') }}" alt="Debt Relief">
                        </div>
                        <p>Debt Relief</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon32.png') }}" alt="Credit Repair">
                        </div>
                        <p>Credit Repair</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon21.png') }}"
                                alt="Merchant Cash Advance"></div>
                        <p>Merchant Cash Advance</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon22.png') }}" alt="Tax Relief">
                        </div>
                        <p>Tax Relief</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon23.png') }}" alt="Medical Alerts">
                        </div>
                        <p>Medical Alerts</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon24.png') }}"
                                alt="Interior Design">
                        </div>
                        <p>Interior Design</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon6.png') }}" alt="Home Insurance">
                        </div>
                        <p>Home Insurance</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon7.png') }}" alt="Auto Insurance">
                        </div>
                        <p>Auto Insurance</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon31.png') }}"
                                alt="Car Transportation"></div>
                        <p>Car Transportation</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon30.png') }}"
                                alt="Email Platform"></div>
                        <p>Email Platform</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon29.png') }}" alt="HR Software">
                        </div>
                        <p>HR Software</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon28.png') }}"
                                alt="Payroll Software"></div>
                        <p>Payroll Software</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon27.png') }}"
                                alt="Phone Systems"></div>
                        <p>Phone Systems</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon26.png') }}"
                                alt="Texting Platform"></div>
                        <p>Texting Platform</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon13.png') }}"
                                alt="Charity Organizations"></div>
                        <p>Charity Organizations</p>
                    </div>
                </div>
                <div class="item">
                    <div class="hottopics-box">
                        <div class="icon-holder"><img src="{{ asset('frontend/images/icon25.png') }}" alt="Dating Apps">
                        </div>
                        <p>Dating Apps</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Hot Topics Section End ================ -->


    <!-- ================ Trending Categories Section Start ================ -->
    <section class="trending-sec">
        <div class="container">
            <div class="trending-header">
                <div>
                    <h2>Trending Guides</h2>
                    <p>Explore what’s trending across different consumer service industries and make smarter decisions
                        today.</p>
                </div>
                <a href="#">Explore All Trending Guides <i class="tiIcon ti-angle-double-right"></i></a>
            </div>

            <div class="trending-grids">
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/home_warranty_claims.jpg') }}" alt="Automotive">
                        <div class="overlaySec">
                            <h3>Automotive</h3>
                            <p class="add-read-more show-less-content firstBox">Unexpected home repairs can be costly, home
                                warranty plans
                                help protect your budget by covering essential home systems and appliances. Whether it’s
                                your HVAC,
                                plumbing, or kitchen appliances, we connect you with top-rated home warranty providers that
                                offer
                                comprehensive coverage and fast service. Compare plans, read reviews, and find the best home
                                protection today!</p>
                            <a class="textBtn" href="#">Explore Auto Solutions <i
                                    class="tiIcon ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image2">
                        <img src="{{ asset('frontend/images/blog-img1.jpeg') }}" alt="Home Services">
                    </div>
                    <div class="box-content">
                        <h3>Home Services</h3>
                        <p class="add-read-more show-less-content">Avoid expensive car repairs with an extended auto
                            warranty that
                            keeps your vehicle covered beyond the manufacturer’s warranty. From powertrain coverage to
                            bumper-to-bumper
                            protection, we help you compare the best auto warranty companies to ensure peace of mind on the
                            road.</p>
                        <a class="textBtn" href="#">Find the Best Home Services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image2">
                        <img src="{{ asset('frontend/images/blog-img2.jpeg') }}" alt="Insurance">
                    </div>
                    <div class="box-content">
                        <h3>Insurance</h3>
                        <p class="add-read-more show-less-content">Your home is your biggest investment, protect it with
                            the right home
                            insurance policy. Whether you need coverage for property damage, theft, or liability, we provide
                            expert
                            reviews and comparisons to help you find affordable and reliable home insurance from trusted
                            providers.</p>
                        <a class="textBtn" href="#">Get Covered Today <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="trending-grids trending-grids-3grid">
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/merchant-cash-advance') }}.jpg" alt="Financial Services">
                    </div>
                    <div class="box-content">
                        <h3>Financial Services</h3>
                        <p class="add-read-more show-less-content">Fuel your business growth with the right financing.
                            Business loans can
                            help with startup costs, expansion, equipment purchases, and more. We simplify the process by
                            comparing
                            top-rated lenders offering competitive interest rates and flexible terms.</p>
                        <a class="textBtn" href="#">Manage Your Money <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/babies.jpg') }}" alt="Babies">
                    </div>
                    <div class="box-content">
                        <h3>Babies</h3>
                        <p class="add-read-more show-less-content">Travel in luxury and convenience with private jet
                            services. Whether
                            you’re looking for on-demand charters, fractional ownership, or jet memberships, we connect you
                            with the
                            best providers offering top-tier safety, flexibility, and comfort.</p>
                        <a class="textBtn" href="#">Find the Best Babies <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/business-management.jpg') }}" alt="Business Management">
                    </div>
                    <div class="box-content">
                        <h3>Business Management</h3>
                        <p class="add-read-more show-less-content">Protect your home and loved ones with top-rated home
                            security systems.
                            From smart alarms and surveillance cameras to 24/7 professional monitoring, find the best
                            security solutions
                            to keep intruders out and your property safe.</p>
                        <a class="textBtn" href="#">Grow Your Business <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/legal.jpg') }}" alt="Legal">
                    </div>
                    <div class="box-content">
                        <h3>Legal</h3>
                        <p class="add-read-more show-less-content">Ensure your loved ones' financial future with the right
                            life insurance policy.
                            Whether you need term life, whole life, or universal life insurance, we help you navigate
                            coverage options
                            and connect with top-rated insurers offering affordable, customized plans.</p>
                        <a class="textBtn" href="#">Find Legal Help <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/charity.jpg') }}" alt="Charity">
                    </div>
                    <div class="box-content">
                        <h3>Charity</h3>
                        <p class="add-read-more show-less-content">Make your next move hassle-free with professional moving
                            companies that
                            handle everything from packing and transport to storage solutions. Whether you're relocating
                            across town
                            or across the country, find trusted movers that ensure a smooth and stress-free experience.</p>
                        <a class="textBtn" href="#">Support a Cause <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/travel.jpg') }}" alt="Travel">
                    </div>
                    <div class="box-content">
                        <h3>Travel</h3>
                        <p class="add-read-more show-less-content">Need to ship your car across the country? Car
                            transportation services
                            make it easy to move your vehicle safely and efficiently. Compare top-rated auto transport
                            companies
                            that offer door-to-door delivery, enclosed transport, and affordable rates.</p>
                        <a class="textBtn" href="#">Plan Your Trip <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/credit.jpg') }}" alt="Credit">
                    </div>
                    <div class="box-content">
                        <h3>Credit</h3>
                        <p class="add-read-more show-less-content">Make your next move hassle-free with professional moving
                            companies that
                            handle everything from packing and transport to storage solutions. Whether you're relocating
                            across town
                            or across the country, find trusted movers that ensure a smooth and stress-free experience.</p>
                        <a class="textBtn" href="#">Find the Best Credit services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/credit-cards.jpg') }}" alt="Credit Cards">
                    </div>
                    <div class="box-content">
                        <h3>Credit Cards</h3>
                        <p class="add-read-more show-less-content">Need to ship your car across the country? Car
                            transportation services
                            make it easy to move your vehicle safely and efficiently. Compare top-rated auto transport
                            companies
                            that offer door-to-door delivery, enclosed transport, and affordable rates.</p>
                        <a class="textBtn" href="#">Get a Credit Cards <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>

            </div>



        </div>
    </section>
    <!-- ================ Trending Categories Section End ================ -->


    <!-- ================ Trending Services Section Start ================ -->
    <section class="trending-sec pt-0">
        <div class="container">
            <div class="trending-header">
                <div>
                    <h2>Trending Services</h2>
                    <p>Explore what’s trending across different consumer service industries and make smarter decisions
                        today.</p>
                </div>
                <a href="#">Explore All Trending Services <i class="tiIcon ti-angle-double-right"></i></a>
            </div>

            <div class="trending-grids trending-grids-3grid">
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/automotive.jpg') }}" alt="Financial Services">
                    </div>
                    <div class="box-content">
                        <h3>Automotive</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find the Best Automotive <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/home-services.jpg') }}" alt="Babies">
                    </div>
                    <div class="box-content">
                        <h3>Home Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find the Best Home Services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/business-management.jpg') }}" alt="Business Management">
                    </div>
                    <div class="box-content">
                        <h3>Insurance</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find the Best Insurance <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/financial-services.jpg') }}" alt="Legal">
                    </div>
                    <div class="box-content">
                        <h3>Financial Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find Financial Services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/business-management1.jpg') }}" alt="Charity">
                    </div>
                    <div class="box-content">
                        <h3>Business Management</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find the Business Management <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/legal.jpg') }}" alt="Travel">
                    </div>
                    <div class="box-content">
                        <h3>Legal</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find Best Legal services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/travel.jpg') }}" alt="Credit">
                    </div>
                    <div class="box-content">
                        <h3>Travel</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find Best Travel services <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image box-image-height">
                        <img src="{{ asset('frontend/images/hot-products.jpg') }}" alt="Credit Cards">
                    </div>
                    <div class="box-content">
                        <h3>Hot Products</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Get a Hot Products <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="grid-box">
                    <div class="box-image">
                        <img src="{{ asset('frontend/images/charity.jpg') }}" alt="Dating">
                    </div>
                    <div class="box-content">
                        <h3>Charity</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        <a class="textBtn" href="#">Find the Best Charity <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Trending Categories Section End ================ -->


    <!-- ================ Sign Up Section Start ================ -->
    <div class="signup-sec">
        <div class="container">
            <div class="signupbg2">
                <div class="effect5">
                    <div class="signupbg-inner2">
                        <h2>Sign Up for a Chance to Win</h2>
                        <p>Sign up to receive exclusive deals, updates, and alerts to be automatically <span>entered for a
                                monthly
                                chance to win $500 just for joining.</span></p>
                        <form>
                            <div class="signup-form-sec">
                                <div class="signup-form-col">
                                    <label>First Name</label>
                                    <input placeholder="First Name" type="text" value="">
                                </div>
                                <div class="signup-form-col">
                                    <label>Last Name</label>
                                    <input placeholder="First Name" type="text" value="">
                                </div>
                            </div>
                            <div class="signup-form-sec">
                                <div class="signup-form-col">
                                    <label>Mobile Number</label>
                                    <input placeholder="Mobile Number" type="text" value="">
                                </div>
                                <div class="signup-form-col">
                                    <label>Email Address</label>
                                    <input placeholder="Email Address" type="text" value="">
                                </div>
                            </div>

                            <input type="submit" value="Sign Up Now">
                        </form>

                        <p class="mt-30 mb-0 pb-0">No purchase necessary. By signing up, you agree to receive promotional
                            emails and text messages. Standard<span>
                                messaging rates may apply. Winners are randomly selected on the 7th of each month and will
                                be notified via text</span> and email.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================ Sign Up Section End ================ -->



    <!-- ================ Featured Brands Section Start ================ -->
    <section class="brands-sec">
        <div class="container">
            <div class="brands-header">
                <div>
                    <h2>Featured Brands</h2>
                    <p>We researched top-rated, consumer-approved brands to bring you the best services in the market.</p>
                </div>
                <a href="#">See All Trusted Brands <i class="tiIcon ti-angle-double-right"></i></a>
            </div>
            <div class="owl-carousel owl-theme featuredBrands-carousel">
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon1-big') }}.png" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>Elite Home Warranty</h3>
                        <p>Comprehensive and transparent home warranty plans with superior customer service and fast claims
                            processing.</p>
                        <a class="textBtn" href="#">Get a Free Quote <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon2-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>JetSet Group</h3>
                        <p>Luxury private jet charter services offering flexibility, safety, and world-class travel
                            experiences.</p>
                        <a class="textBtn" href="#">Get Pricing <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon6-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>Lemonade Insurance</h3>
                        <p>AI-driven home, renters, and pet insurance that’s affordable, fast, and hassle-free.</p>
                        <a class="textBtn" href="#">Check Rates <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon5-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>American Dream Auto Protect</h3>
                        <p>Reliable extended auto warranty coverage to protect your vehicle from costly repairs.</p>
                        <a class="textBtn" href="#">Get a Free Quote <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon11-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>Verifen </h3>
                        <p>Flexible business loan solutions designed to help entrepreneurs and small businesses grow with
                            ease.</p>
                        <a class="textBtn" href="#">Compare Loan Options <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon12-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>ADT Security</h3>
                        <p>Advanced home security systems with 24/7 professional monitoring for ultimate protection.</p>
                        <a class="textBtn" href="#">View Security Plans <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon13-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>New York Life®️</h3>
                        <p>Trusted life insurance provider offering financial security and customized coverage for your
                            loved ones.</p>
                        <a class="textBtn" href="#">Get a Life Insurance Quote <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon3-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>Piece of Cake Moving</h3>
                        <p>Stress-free moving services with packing, storage, and seamless relocation solutions.</p>
                        <a class="textBtn" href="#">Get a Moving Estimate <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box">
                        <div class="featured-icon-holder">
                            <!-- <img src="{{ asset('frontend/images/icon14-big.png') }}" alt="Wine Clubs"> -->
                            <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
                            <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover.png') }}"
                                alt="Wine Clubs">
                        </div>
                        <h3>Nexus Auto Transport</h3>
                        <p>Top-rated car transportation services providing safe, reliable, and efficient vehicle shipping
                            nationwide.</p>
                        <a class="textBtn" href="#">Get a Car Shipping Quote <i
                                class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Featured Brands Section End ================ -->


    <!-- ================ Articles & Blog Section Start ================ -->

    <div class="articlesSec brands-sec">
        <div class="container">
            <div class="brands-header">
                <div>
                    <h2>Articles & Blog</h2>
                    <p>Get expert insights, consumer guides, and industry updates.</p>
                </div>
                <a href="#">See All Articles <i class="tiIcon ti-angle-double-right"></i></a>
            </div>

            <div class="card__group">
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/blog-img1.jpeg') }}" alt="Project Management" />
                    </div>
                    <div class="card__content">
                        <h3>What are the Top Project Management Tools?</h3>
                        <p>Project management tools offer one of the most effective avenues for tackling everything from
                            organization to
                            communication. Packed full of useful ...</p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/life-insurance.jpg') }}" alt="Automation" />
                    </div>
                    <div class="card__content">
                        <h3>How to Manage Remote Teams Using Project Management</h3>
                        <p>In today’s modern world the existence of remote teams and workers is becoming more common, and as
                            a
                            manager this can be a challenging change from h...</p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/blog-img2.jpeg') }}" alt="Omnichannel CRM" />
                    </div>
                    <div class="card__content">
                        <h3>How to Manage Remote Teams Using Project Management</h3>
                        <p>In today’s modern world the existence of remote teams and workers is becoming more common, and as
                            a
                            manager this can be a challenging change from h...</p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/blog-img1.jpeg') }}" alt="Omnichannel CRM" />
                    </div>
                    <div class="card__content">
                        <h3>Artificial Intelligence</h3>
                        <p>Get predictions that help you focus on the right deals with the highest chance of closure,
                            identify and remove bottlenecks.</p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/blog-img2.jpeg') }}" alt="Omnichannel CRM" />
                    </div>
                    <div class="card__content">
                        <h3>Smarter, Better and Faster</h3>
                        <p>Start selling smarter, better and faster, 15 day risk free fully feature trial. </p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card__image">
                        <img src="{{ asset('frontend/images/life-insurance.jpg') }}" alt="Automation" />
                    </div>
                    <div class="card__content">
                        <h3>How to Manage Remote Teams Using Project Management</h3>
                        <p>In today’s modern world the existence of remote teams and workers is becoming more common, and as
                            a
                            manager this can be a challenging change from h...</p>
                        <a href="#">Read More <i class="tiIcon ti-arrow-right"></i></a>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <!-- ================ Articles & Blog Section End ================ -->

    <!-- ================ Latest News Section Start ================ -->
    <section class="latestnews-sec brands-sec mt-70">
        <div class="container">
            <div class="brands-header">
                <div>
                    <h2>Latest News</h2>
                    <p>Stay ahead with the latest updates in home services, finance, insurance, and automotive industries.
                    </p>
                </div>
                <a href="#">See More News <i class="tiIcon ti-angle-double-right"></i></a>
            </div>

            <div class="newsSec">
                <div class="newsSeccol">
                    <img src="{{ asset('frontend/images/news-1.jpg') }}" alt="Articles">
                    <div class="newstext-holder">
                        <p class="catTag">Fashion</p>
                        <h2>These fundamentals typically determine the success of your party or special event</h2>
                        <p class="autherText"><strong>Admin Alan</strong> - August 7, 2024</p>
                    </div>
                </div>
                <div class="newsSeccol">
                    <div class="newstoprow">
                        <img src="{{ asset('frontend/images/news-4.jpg') }}" alt="Articles">
                        <div class="newstext-holder">
                            <p class="catTag">Game</p>
                            <h2>Exploring the World of Virtual Reality Gaming!</h2>
                            <p class="autherText"><strong>Admin Alan</strong> - August 7, 2024</p>
                        </div>
                    </div>
                    <div class="newsbottomrow">
                        <div class="newsbottomrow-col">
                            <img src="{{ asset('frontend/images/news-2.jpg') }}" alt="Articles">
                            <div class="newstext-holder">
                                <p class="catTag">Leaders</p>
                                <h2>Jaishankar meets Ukrainian foreign minister</h2>
                                <p class="autherText"><strong>Admin Alan</strong> - August 7, 2024</p>
                            </div>
                        </div>
                        <div class="newsbottomrow-col">
                            <img src="{{ asset('frontend/images/news-3.jpg') }}" alt="Articles">
                            <div class="newstext-holder">
                                <p class="catTag">Leaders</p>
                                <h2>Prime Minister Liz Truss attends UNGA</h2>
                                <p class="autherText"><strong>Admin Alan</strong> - August 7, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Articles & Blog Section End ================ -->


    <!-- ================ Trust Section Start ================ -->
    <div class="container mt-70">
        <div class="trust-sec">
            <div class="trust-col">
                <img src="{{ asset('frontend/images/trust-img.png') }}" alt="Trust">
            </div>
            <div class="trust-col-right">
                <h2>Why Trust <span>Guidivo.com?</span></h2>
                <p>At Guidivo.com, we take consumer trust seriously. Our mission is to provide unbiased, in-depth guidance,
                    expert insights, and verified consumer feedback to help you find the most reliable brands.</p>
                <ul>
                    <li>Independent Reviews: We analyze brands based on quality, pricing, and customer satisfaction.</li>
                    <li>Expert Guidance: Our industry professionals offer expert insights and recommendations.</li>
                    <li>Real Consumer Feedback: Verified user reviews ensure you get authentic experiences.</li>
                    <li>Transparency: We only feature brands that meet our high standards for trust and service.</li>
                </ul>
                <a href="#">Find your best match today! <i class="tiIcon ti-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- ================ Trust Section End ================ -->


@stop
