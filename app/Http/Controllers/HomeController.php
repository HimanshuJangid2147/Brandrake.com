<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CallToAction;
use App\Models\HeroSlider;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // Fetch all the necessary data for the home page
        $siteSettings = SiteSetting::first();
        $heroSliders = HeroSlider::where('is_active', 1)->get();
        $aboutSection = AboutSection::first();
        $services = Service::all();
        $portfolios = Portfolio::latest()->take(6)->get(); // Get the latest 6 portfolio items
        $testimonials = Testimonial::all();
        $callToAction = CallToAction::first();

        // Pass all the data to the home view
        return view('pages.home', compact(
            'siteSettings',
            'heroSliders',
            'aboutSection',
            'services',
            'portfolios',
            'testimonials',
            'callToAction'
        ));
    }

    public function portfolioDetail(Portfolio $portfolio)
    {
        $siteSettings = SiteSetting::first(); // For header/footer consistency
        return view('pages.portfolio-detail', compact('portfolio', 'siteSettings'));
    }
}
