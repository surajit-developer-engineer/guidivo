<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function category()
    {
        return view('frontend.category');
    }

    public function brands()
    {
        return view('frontend.brands');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function topic()
    {
        return view('frontend.topic');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function guidivo()
    {
        return view('frontend.guidivo');
    }

    public function partnerWithGuidivo()
    {
        return view('frontend.partner-with-guidivo');
    }

    public function publisherPartnerships()
    {
        return view('frontend.publisher-partnerships');
    }

    public function advertisementDisclosure()
    {
        return view('frontend.advertisement-disclosure');
    }

    public function legalDisclosure()
    {
        return view('frontend.legal-disclosure');
    }

    public function reviewsGuidelines()
    {
        return view('frontend.reviews-guidelines');
    }

    public function termsAndConditions()
    {
        return view('frontend.terms-and-conditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function sellMyInformation()
    {
        return view('frontend.sell-my-information');
    }

    public function privacyNotice()
    {
        return view('frontend.privacy-notice');
    }

    public function methodology()
    {
        return view('frontend.methodology');
    }
}
