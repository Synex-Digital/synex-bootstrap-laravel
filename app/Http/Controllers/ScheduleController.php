<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class ScheduleController extends Controller
{
    public function index()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Contact Calendly Synex Digital | Top IT Agency | Get a Quote';
        $seo_description = 'Get in touch with Synex Digital via calendly, a leading IT agency offering web development, app development, digital marketing, and more. Contact us today for a free quote and take advantage of up to 20% off on our services. Serving USA, Canada, Australia, UK, and Dubai.';
        $seo_tags =
            'Contact Synex Digital,
            IT Agency Contact,
            Get a Quote for IT Services,
            Web Development Consultation,
            App Development Experts Contact,
            Digital Marketing Services Inquiry,
            USA IT Agency Contact,
            IT Services USA Canada Australia UK Dubai,
            Get a Free Quote,
            Best IT Company Contact Page';
        $img = asset('fav-low.png');
        $url = env('APP_URL', 'https://synexdigital.com');

        SEOMeta::setCanonical($url . request()->getPathInfo());
        // Set SEO meta tags
        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
        SEOTools::opengraph()->setUrl(url()->current());

        // Open Graph
        OpenGraph::addImage($img);
        OpenGraph::setTitle($seo_title);
        OpenGraph::setDescription($seo_description);
        OpenGraph::setType('website');
        OpenGraph::setUrl(url()->current());
        OpenGraph::setSiteName($site_name);

        // Twitter
        TwitterCard::setUrl(url()->current());
        TwitterCard::setImage($img);

        // JsonLd for Contact Page
        JsonLd::setType('WebPage');
        JsonLd::setTitle($seo_title . ' - ' . $site_name);
        JsonLd::setDescription("Contact Synex Digital via calendly for a free quote and consultation on web development, app development, digital marketing, UI/UX design, and more. Serving clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');

        // Adding Publisher Information with Contact Information inside
        JsonLd::addValue('publisher', [
            "@type" => "Organization",
            "name" => $site_name,  // Publisher name
            "url" => $url,  // URL of the organization
            "logo" => [
                "@type" => "ImageObject",
                "url" => $img,  // URL of the organization's logo
                "caption" => "SynexDigital Logo"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+8801757-647319",  // Replace with your contact number
                "contactType" => "Customer Service",  // Type of contact
                "areaServed" => ["US", "CA", "AU", "GB", "AE"],  // Area served, e.g., Bangladesh
                "availableLanguage" => "en-US",  // Language available
                "email" => "office@synexdigital.com"
            ]
        ]);

        // Adding Breadcrumb
        JsonLd::addValue('breadcrumb', [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $url
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Schedule",
                    "item" => url()->current()
                ]
            ]
        ]);

        // Adding mainEntityOfPage
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),  // URL of the contact page
        ]);



        return view('frontend.pages.schedule');
    }
}
