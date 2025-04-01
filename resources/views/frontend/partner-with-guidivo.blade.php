@extends('layouts.frontend.layout')
@section('content')

    <!-- ================ Breadcrumb Section End ================ -->
    <div class="breadcrumb-sec mt-110">
        <div class="container">
            <ol class="breadcrumb pb-20">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Partner with Guidivo</li>
            </ol>
        </div>
    </div>

    <!-- ================ Breadcrumb Section End ================ -->


    <div class="prodetails-sec">
        <div class="container">
            <div style="display: block;" class="proDetails-flx text-center">
                <h2 style="text-align: center;">Partner with Guidivo</h2>
                <p>At Guidivo, we believe in building lasting partnerships that drive growth, innovation, and mutual
                    success.
                    Our platform is more than a place for recommendations; it’s a gateway to connect your brand with a
                    trusted
                    audience looking for quality and reliability. Join us in creating meaningful collaborations that deliver
                    results.</p>
            </div>
        </div>
    </div>

    <div class="prodetails-sec">
        <div class="container">
            <div class="proDetails-flx">
                <div class="proDetailsflex-left proleft-50">
                    <h2>Why Partner with Guidivo?</h2>
                    <p>Teaming up with Guidivo means gaining access to our trusted platform and the benefits that come with
                        it, including:</p>
                    <ul>
                        <li><strong>Unmatched Credibility:</strong> Be featured on a platform known for its integrity and
                            commitment to excellence,
                            helping your brand stand out.</li>
                        <li><strong>Audience Impact:</strong> Reach an audience that values trust and transparency, ensuring
                            your brand resonates
                            with engaged users.</li>
                        <li><strong>Custom Solutions:</strong> Tailored partnership options designed to meet your goals,
                            whether you aim to boost visibility,
                            improve engagement, or enhance customer trust.</li>
                    </ul>
                    <a class="exploreBtn mt-10" href="#">Partner With Us <i
                            class="tiIcon ti-angle-double-right"></i></a>
                </div>
                <div class="proDetailsflex-right">
                    <img src="{{ asset('frontend/images/partner-img1.png') }}" alt="Trusted Brands">
                </div>
            </div>
        </div>
    </div>


    <!-- ================ Featured Brands Section Start ================ -->
    <section class="brands-sec mt-95">
        <div class="container">
            <div class="brands-header">
                <div class="text-center width100 partnership-head">
                    <h2>Partnership Opportunities</h2>
                    <p>Explore the range of partnership options available with Guidivo. Whether you’re a brand, <br />
                        publisher,
                        or looking to collaborate, we have something tailored for you.</p>
                </div>
            </div>
            <div class="brands-carousel partnership-card">
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon1.png') }}"
                                alt="Performance-Based Marketing">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
              <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Performance-Based Marketing</h3>
                        <p>Drive measurable results through high-performing campaigns customized to your brand's needs.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon2.png') }}"
                                alt="Search Engine Optimization (SEO)">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
             <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Search Engine Optimization (SEO)</h3>
                        <p>Boost your online presence through expert SEO partnerships.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon3.png') }}" alt="Paid Search Campaigns">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
             <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Paid Search Campaigns</h3>
                        <p>Achieve your growth goals with targeted paid search strategies and premium placements.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon4.png') }}"
                                alt="Social Media Integration">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
             <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Social Media Integration</h3>
                        <p>Amplify your reach with partnerships that include our dynamic social media channels.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon5.png') }}"
                                alt="Publisher Collaborations">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
             <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Publisher Collaborations</h3>
                        <p>Work with us to distribute your content in impactful ways that expand your reach.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="brands-box width100">
                        <div class="featured-icon-holder">
                            <img src="{{ asset('frontend/images/opportunities-icon6.png') }}"
                                alt="Unique Collaboration Opportunities">
                            <!-- <img class="brandNimg" src="{{ asset('frontend/images/brand-logo.png') }}" alt="Wine Clubs">
             <img class="brandHimg" src="{{ asset('frontend/images/brand-logo-hover') }}.png" alt="Wine Clubs"> -->
                        </div>
                        <h3>Unique Collaboration Opportunities</h3>
                        <p>Have a creative idea or innovation? We’re all ears!</p>
                    </div>
                </div>
            </div>
            <div class="text-center"><a class="exploreBtn mt-30" href="#">Explore Opportunities <i
                        class="tiIcon ti-angle-double-right"></i></a></div>
        </div>
    </section>
    <!-- ================ Featured Brands Section End ================ -->


    <div class="prodetails-sec mt-70">
        <div class="container">
            <div class="proDetails-flx">
                <div class="proDetailsflex-left proleft-50">
                    <h2>How to Get Started</h2>
                    <p>Partnering with Guidivo is designed to be seamless and straightforward. Our team is here to
                        ensure your brand aligns with our vision and values while helping you reach your goals effectively.
                        Share your ideas, explore solutions, and launch a partnership that adds real value to both parties.
                    </p>

                    <a class="exploreBtn mt-10" href="#">Start Your Journey <i
                            class="tiIcon ti-angle-double-right"></i></a>
                </div>
                <div class="proDetailsflex-right">
                    <img src="{{ asset('frontend/images/partner-img3.png') }}" alt="Trusted Brands">
                </div>
            </div>
        </div>
    </div>

    <!-- ================ Sign Up Section Start ================ -->
    <div class="signup-sec mt-110">
        <div class="container">
            <div class="signupbg">
                <div class="signupbg-inner bgnone">
                    <h2>Contact Us</h2>
                    <p>Want to elevate your brand with Guidivo? Fill out the form below to begin exploring how we can work
                        together.</p>
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
                                <label>Email Address</label>
                                <input placeholder="Email Address" type="text" value="">
                            </div>
                            <div class="signup-form-col">
                                <label>Mobile Number </label>
                                <input placeholder="Mobile Number " type="text" value="">
                            </div>
                        </div>
                        <div class="signup-form-sec">
                            <div class="signup-form-col width100 selectDropDown">
                                <label>Company Name</label>
                                <select onchange="this.className=this.options[this.selectedIndex].className">
                                    <option class="placeholder" selected>Select One</option>
                                    <option class="whiteText">General Inquiry</option>
                                    <option class="whiteText">Performance Based Marketing</option>
                                    <option class="whiteText">Search Engine Optimization</option>
                                    <option class="whiteText">Paid Search</option>
                                    <option class="whiteText">Social Media</option>
                                    <option class="whiteText">Partner with Guidivo</option>
                                    <option class="whiteText">I’m a Publisher</option>
                                    <option class="whiteText">Collaboration Opportunities</option>
                                </select>
                            </div>
                        </div>
                        <div class="signup-form-sec">
                            <div class="signup-form-col width100">
                                <label>Add Message</label>
                                <textarea placeholder="Message Here"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Sign Up Now">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Sign Up Section End ================ -->


    <div class="container mt-70">
        <div class="text-center">
            <p>We look forward to collaborating with you to achieve great things together. Let's start building something
                amazing!</p>
        </div>
    </div>


@stop
