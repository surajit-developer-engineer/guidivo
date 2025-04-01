<!-- ================ Footer Section Start ================ -->
<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-logo-sec">
                <a href="{{ route('home') }}">
                    <img class="footer-logo" src="{{ asset('frontend/images/logo.png') }}" alt="Logo" />
                </a>
                <h3>Contact Us</h3>
                <p>
                    <a href="#"><i class="tiIcon ti-world"></i> Guidivo?</a>
                </p>
                <p>
                    <a href="mailto:contact@guidivo.com"><i class="tiIcon ti-email"></i> contact@guidivo.com</a>
                </p>
                <p>
                    <a href="#"><i class="tiIcon ti-headphone"></i> (xxx) xxx-xxxx</a>
                </p>
                <br />
                <h3>Social Media</h3>
                <div class="footer-social-media">
                    <ul>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-menu-sec">
                <h3>Trending Services</h3>
                <ul>
                    <li><a href="#">Automotive</a></li>
                    <li><a href="#">Home Services</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Financial Services</a></li>
                    <li><a href="#">Business Management</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Hot Products</a></li>
                    <li><a href="#">Charity</a></li>
                </ul>
            </div>
            <div class="footer-menu-sec">
                <h3>Hot Topics</h3>
                <ul>
                    <li><a href="#">Home Warranty</a></li>
                    <li><a href="#">Auto Warranty</a></li>
                    <li><a href="#">Private Jets</a></li>
                    <li><a href="#">Debt Relief</a></li>
                    <li><a href="#">Credit Repair</a></li>
                    <li><a href="#">Junk Removal</a></li>
                    <li><a href="#">Interior Design</a></li>
                    <li><a href="#">Moving</a></li>
                    <li><a href="#">Personal Injury Attorney</a></li>
                </ul>
            </div>
            <div class="footer-menu-sec">
                <h3>Featured Brands</h3>
                <ul>
                    <li><a href="#">Elite Home Warranty</a></li>
                    <li><a href="#">JetSet Group</a></li>
                    <li><a href="#">Lemonade Insurance</a></li>
                    <li><a href="#">American Dream Auto Protect</a></li>
                    <li><a href="#">Verifen</a></li>
                    <li><a href="#">Gerry Grunsfeld LLP</a></li>
                    <li><a href="#">Piece of Cake Moving</a></li>
                    <li><a href="#">New York Life</a></li>
                    <li><a href="#">Hatzalah</a></li>
                </ul>
            </div>

            <div class="footer-menu-sec">
                <h3>Disclosures</h3>
                <ul>
                    <li><a href="{{ route('advertisement.disclosure') }}">Advertisement Disclosure</a></li>
                    <li><a href="{{ route('legal.disclosure') }}">Legal Disclosure</a></li>
                    <li><a href="{{ route('reviews.guidelines') }}">Reviews Guidelines</a></li>
                    <li><a href="{{ route('terms.and.conditions') }}">Terms and Conditions</a></li>
                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('home') }}">Cookie Policy</a></li>
                    <li><a href="{{ route('sell.my.information') }}">Do Not Sell My Information</a></li>
                    <li><a href="{{ route('privacy.notice') }}">CCPA Privacy Notices</a></li>
                    <li><a href="{{ route('methodology') }}">Guidivo Methodology</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-row borderTop">
            <div class="footer-artical mt-30">
                <h3>Articles & Blog</h3>
                <ul>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/blog-img1.jpeg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Management Tools</h4>
                                <p>
                                    Project management tools offer...
                                    <a href="#">View More</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/blog-img2.jpeg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Management Tools</h4>
                                <p>
                                    Project management tools offer...
                                    <a href="#">View More</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/blog-img1.jpeg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Management Tools</h4>
                                <p>
                                    Project management tools offer...
                                    <a href="#">View More</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/blog-img2.jpeg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Management Tools</h4>
                                <p>
                                    Project management tools offer...
                                    <a href="#">View More</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-menu-sec mt-30 disclosures-sec">
                <h3>Partnerships</h3>
                <!-- <p>No purchase necessary. By signing up, you agree to receive promotional emails and text messages.
     Standard messaging rates may apply. Winners are randomly selected on the 7th of each month and will
     be notified via text and email.</p> -->
                <h4>For Brands:</h4>
                <ul>
                    <li><a href="#">Performance Based Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Paid Search</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Partner with Guidivo</a></li>
                    <li><a href="#">Schedule a Call</a></li>
                </ul>
                <h4>For Partners:</h4>
                <ul>
                    <li><a href="#">I’m a Publisher</a></li>
                    <li><a href="#">Collaboration Opportunities</a></li>
                </ul>
            </div>
            <div class="footer-artical mt-30">
                <h3>Latest News</h3>
                <ul>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/news-1.jpg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Typically determine</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/news-2.jpg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Virtual Reality Gaming!</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/news-3.jpg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Ukrainian foreign minister</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flxrow">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/images/news-4.jpg') }}" alt="Articles" />
                            </div>
                            <div class="text-holder">
                                <h4>Truss attends UNGA</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright &copy; 2025 Guidivo.com. All rights reserved.</p>
    </div>
</footer>
<!-- ================ Footer Section End ================ -->
