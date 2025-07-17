@extends('layouts.app')
@section('title', $siteSettings->store_name ? $siteSettings->store_name . ' : The Premium Brand Studio' : 'Brandrake : The Premium Brand Studio')
@section('content')
    <section id="hero" class="hero section dark-background hero-slider-section">
        <div class="swiper init-swiper hero-slider">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": 1,
                    "pagination": {
                        "el": ".hero-swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": ".hero-swiper-button-next",
                        "prevEl": ".hero-swiper-button-prev"
                    }
                }
            </script>

            <div class="swiper-wrapper">
                @if($heroSliders->isEmpty())
                    <div class="swiper-slide" style="background-image: url('{{ asset('assets/img/Image_01.jpg') }}'); background-size: cover; background-position: center;">
                        <p>No sliders available</p>
                    </div>
                @else
                    @foreach($heroSliders as $slider)
                        <div class="swiper-slide" style="background-image: url('{{ $slider->image_url ? Storage::url($slider->image_url) : asset('assets/img/Image_01.jpg') }}'); background-size: cover; background-position: center;">
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="swiper-pagination hero-swiper-pagination"></div>
        </div>
    </section>

    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $aboutSection->section_title ?? 'About' }}</h2>
            <p>{{ $aboutSection->section_subtitle ?? 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $aboutSection->image_url ? Storage::url($aboutSection->image_url) : asset('assets/img/about.jpg') }}" class="img-fluid" alt="About Section Image">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>{{ $aboutSection->title ?? 'Voluptatem dignissimos provident quasi corporis' }}</h3>
                    <p class="fst-italic">
                        {{ $aboutSection->subtitle ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' }}
                    </p>
                    <ul>
                        @if($aboutSection->list_item_1 || $aboutSection->list_item_2 || $aboutSection->list_item_3)
                            @foreach([$aboutSection->list_item_1, $aboutSection->list_item_2, $aboutSection->list_item_3] as $item)
                                @if($item)
                                    <li><i class="bi bi-check-circle"></i> <span>{{ $item }}</span></li>
                                @endif
                            @endforeach
                        @else
                            <li><i class="bi bi-check-circle"></i> <span>No features available</span></li>
                        @endif
                    </ul>
                    {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="features section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>{{ $services->isNotEmpty() ? ($services->first()->description ?? 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit') : 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' }}</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($services as $index => $service)
                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ 100 + ($index * 100) }}">
                        <div class="feature-box {{ $service->box_color ?? 'orange' }}">
                            <i class="{{ $service->icon_class ?? 'bi bi-award' }}"></i>
                            <h4>{{ $service->title ?? 'Service Title' }}</h4>
                            <p>{{ $service->description ?? 'Description not available' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="call-to-action" class="call-to-action section dark-background">
        <img src="{{ $callToAction->background_image ? Storage::url($callToAction->background_image) : asset('assets/img/cta-bg.jpg') }}" alt="Call to Action Background">

        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>{{ $callToAction->title ?? 'Call To Action' }}</h3>
                    <p>{{ $callToAction->text ?? 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.' }}</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{ $callToAction->button_url ?? '#' }}">{{ $callToAction->button_text ?? 'Call To Action' }}</a>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="showcase section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Showcase</h2>
            <p>Explore our latest work and showreel.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="showcase-container">
                <div class="main-display">
                    <img id="showcase_image" src="" alt="Selected work">
                </div>

                <div class="thumbnail-gallery swiper">
                    <div class="swiper-wrapper">
                        @foreach($portfolios as $portfolio)
                            <div class="swiper-slide thumbnail-item {{ $loop->first ? 'active' : '' }}" data-type="image" data-src="{{ $portfolio->mockup_image ? Storage::url($portfolio->mockup_image) : asset('assets/img/portfolio/product-1.jpg') }}">
                                <img src="{{ $portfolio->mockup_image ? Storage::url($portfolio->mockup_image) : asset('assets/img/portfolio/product-1.jpg') }}" alt="{{ $portfolio->title ?? 'Portfolio Item' }} Thumbnail" class="img-fluid">
                                <div class="thumb-info">
                                    <i class="bi bi-image"></i>
                                    <h4>{{ $portfolio->title ?? 'Portfolio Item' }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio section dark-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Explore our latest work and showreel.</p>
        </div>

        <div class="container">
            <div class="row gy-5 align-items-center">
                @foreach($portfolios as $index => $portfolio)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-block">
                            <div class="image-box light-image-box">
                                <img src="{{ $portfolio->mockup_image ? Storage::url($portfolio->mockup_image) : asset('assets/img/portfolio/app-1.jpg') }}" class="mockup-img" alt="{{ $portfolio->title ?? 'Project Mockup' }}">
                            </div>
                            <div class="details-box">
                                <h2>{{ $portfolio->title ?? 'Project Title' }}</h2>
                                <p class="client">Client: {{ $portfolio->client_name ?? 'Unknown Client' }}</p>
                                <p class="description">{{ $portfolio->description ?? 'Project description not available' }}</p>
                                <div class="actions-container">
                                    <a href="{{ route('portfolio.detail', $portfolio) }}" class="btn-outline">View Case Study <i class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>{{ $testimonials->isNotEmpty() ? ($testimonials->first()->quote ?? 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit') : 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' }}</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>{{ $testimonial->quote ?? 'Testimonial text not available' }}</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>{{ $testimonial->author_name ?? 'Anonymous' }}</h3>
                                            <h4>{{ $testimonial->author_position ?? 'Position' }}</h4>
                                            <div class="stars">
                                                @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                                                    <i class="bi bi-star-fill"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ $testimonial->author_image ? Storage::url($testimonial->author_image) : asset('assets/img/testimonials/testimonials-1.jpg') }}" class="img-fluid testimonial-img" alt="Testimonial Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>{{ $siteSettings->herosection_description ?? 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit' }}</p>
        </div>

        <div class="container" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>{{ $siteSettings->store_address ?? 'A108 Adam Street, New York, NY 535022' }}</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>{{ $siteSettings->store_phone ?? '+1 5589 55488 55' }}</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>{{ $siteSettings->store_email ?? 'info@example.com' }}</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-8">
                    <form action="{{ route('contact.send') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
