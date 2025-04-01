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
                <div class="proDetailsflex-left proleft-50 contactList">
                    <h2>How to Reach Us</h2>
                    <ul>
                        <li><strong>Email:</strong> Have a specific inquiry? Drop us a line, and we’ll get back to you as
                            quickly as possible.</li>
                        <li><strong>Schedule a Call:</strong> Need assistance right away? Book a call with our experts,
                            and our friendly team will be happy to assist you.</li>
                        <li><strong>Contact Form:</strong> Prefer an online option? Fill out our simple contact form with
                            your message,
                            and we’ll respond promptly.</li>
                    </ul>
                </div>
                <div class="proDetailsflex-right">
                    <img src="{{ asset('frontend/images/contact-img.png') }}" alt="Trusted Brands">
                </div>
            </div>
        </div>
    </div>





    <!-- ================ Sign Up Section Start ================ -->
    <div class="signup-sec">
        <div class="container">
            <div class="signupbg">
                <div class="signupbg-inner bgnone">
                    <h2>CONTACT FORM</h2>
                    <br />
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
                            <div class="signup-form-col width100">
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



    <!-- ================ Trust Section Start ================ -->
    <div class="container mt-95">
        <div class="text-center">
            <p class="blackText">We look forward to collaborating with you to achieve great things together. <br />Let's
                start building something amazing!</p>
        </div>
    </div>
    <!-- ================ Trust Section End ================ -->


@stop
