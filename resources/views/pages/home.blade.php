@extends('layouts.app')
@section('title', 'Brandrake : The Premium Brand Studio')
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

                <div class="swiper-slide" style="background-image: url('{{ asset('assets/img/Image_01.jpg') }}'); background-size: 100% 100%;">
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/img/Image_01.jpg') }}'); background-size: 100% 100%;">
                </div>

            </div>

            <div class="swiper-pagination hero-swiper-pagination"></div>

        </div>

    </section>

    <section id="about" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Voluptatem dignissimos provident quasi corporis</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>
        </div>

    </section>

    <section id="services" class="features section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-4">

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-box orange">
                        <i class="bi bi-award"></i>
                        <h4>Logo & Branding</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-box blue">
                        <i class="bi bi-patch-check"></i>
                        <h4>Website Design</h4>
                        <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-box green">
                        <i class="bi bi-sunrise"></i>
                        <h4>Packaging & Label Design</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-box red">
                        <i class="bi bi-shield-check"></i>
                        <h4>Social Media Management</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
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
                    <iframe id="showcase_player" src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <img id="showcase_image" src="" alt="Selected work">
                </div>

                <div class="thumbnail-gallery swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide thumbnail-item active" data-type="youtube" data-src="{{ asset('vv.mp4') }}">
                            <img src="{{ asset('vv.mp4') }}" alt="Showreel Thumbnail" class="img-fluid">
                            <div class="thumb-info">
                                <i class="bi bi-youtube"></i>
                                <h4>SHOWREEL 2025</h4>
                            </div>
                        </div>

                        <div class="swiper-slide thumbnail-item" data-type="image" data-src="{{ asset('assets/img/portfolio/product-1.jpg') }}">
                            <img src="{{ asset('assets/img/portfolio/product-1.jpg') }}" alt="Product 1 Thumbnail" class="img-fluid">
                            <div class="thumb-info">
                                <i class="bi bi-image"></i>
                                <h4>Lifestyle Bank</h4>
                            </div>
                        </div>

                        <div class="swiper-slide thumbnail-item" data-type="image" data-src="{{ asset('assets/img/portfolio/branding-1.jpg') }}">
                            <img src="{{ asset('assets/img/portfolio/branding-1.jpg') }}" alt="Branding 1 Thumbnail" class="img-fluid">
                            <div class="thumb-info">
                                <i class="bi bi-image"></i>
                                <h4>Digital Branding</h4>
                            </div>
                        </div>

                        <div class="swiper-slide thumbnail-item" data-type="youtube" data-src="https://www.youtube.com/watch?v=NBk1gyJdpRk&ab_channel=Brandrake%3AThePremiumBrandStudio">
                            <img src="{{ asset('assets/img/portfolio/video-1.jpg') }}" alt="App Video Thumbnail" class="img-fluid">
                            <div class="thumb-info">
                                <i class="bi bi-youtube"></i>
                                <h4>Mobile App Promo</h4>
                            </div>
                        </div>

                        <div class="swiper-slide thumbnail-item" data-type="image" data-src="{{ asset('assets/img/portfolio/books-1.jpg') }}">
                            <img src="{{ asset('assets/img/portfolio/books-1.jpg') }}" alt="Books 1 Thumbnail" class="img-fluid">
                            <div class="thumb-info">
                                <i class="bi bi-image"></i>
                                <h4>Book Cover Design</h4>
                            </div>
                        </div>

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
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-5 align-items-center">

                @for ($i = 1; $i <= 6; $i++)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-block">
                        <div class="image-box light-image-box">
                            <video autoplay muted playsinline loop preload="auto">
                                <source src="{{ asset('assets/videos/portfolio-bg-' . ($i <= 3 ? 1 : 2) . '.mp4') }}" type="video/mp4">
                            </video>
                            <img src="{{ asset('assets/img/portfolio/' . ($i <= 3 ? 'app-1.jpg' : 'books-1.jpg')) }}" class="mockup-img" alt="Project Mockup">
                        </div>
                        <div class="details-box">
                            <h2>
                                @if($i <= 3)
                                    Driving ROI with <span>Strategic UX</span> in Middle East Banking
                                @else
                                    Rebuilding a Reliable <span>Trading & Investing</span> Platform
                                @endif
                            </h2>
                            <p class="description">
                                @if($i <= 3)
                                    Emirates NBD's new digital experience is seamless, personalized, and designed to align with Dubai's tech-savvy population.
                                @else
                                    Garanti BBVA's Securities eTrader mobile app empowers new users to master financial markets while catering to experienced traders.
                                @endif
                            </p>
                            <p class="cost">Cost of this type of UX/UI: <span>from {{ $i <= 3 ? '450 000' : '270 000' }} €</span></p>
                            <div class="actions-container">
                                <a href="{{ route('', ['id' => $i]) }}" class="btn-solid">Case Study <i class="bi bi-arrow-right"></i></a>
                                <a href="#" class="btn-outline">Behance <i class="bi bi-box-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>

    </section>

    <section id="testimonials" class="testimonials section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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

                    @php
                    $testimonials = [
                        [
                            'name' => 'Saul Goodman',
                            'position' => 'Ceo & Founder',
                            'text' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
                            'image' => 'testimonials-1.jpg'
                        ],
                        [
                            'name' => 'Sara Wilsson',
                            'position' => 'Designer',
                            'text' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
                            'image' => 'testimonials-2.jpg'
                        ],
                        [
                            'name' => 'Jena Karlis',
                            'position' => 'Store Owner',
                            'text' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                            'image' => 'testimonials-3.jpg'
                        ],
                        [
                            'name' => 'John Larson',
                            'position' => 'Entrepreneur',
                            'text' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
                            'image' => 'testimonials-4.jpg'
                        ]
                    ];
                    @endphp

                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>{{ $testimonial['text'] }}</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>{{ $testimonial['name'] }}</h3>
                                        <h4>{{ $testimonial['position'] }}</h4>
                                        <div class="stars">
                                            @for($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="{{ asset('assets/img/testimonials/' . $testimonial['image']) }}" class="img-fluid testimonial-img" alt="">
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

    {{-- <section id="team" class="team section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-4">

                @php
                $team = [
                    [
                        'name' => 'Walter White',
                        'position' => 'Chief Executive Officer',
                        'image' => 'team-1.jpg',
                        'delay' => '100'
                    ],
                    [
                        'name' => 'Sarah Jhonson',
                        'position' => 'Product Manager',
                        'image' => 'team-2.jpg',
                        'delay' => '200'
                    ],
                    [
                        'name' => 'William Anderson',
                        'position' => 'CTO',
                        'image' => 'team-3.jpg',
                        'delay' => '300'
                    ],
                    [
                        'name' => 'Amanda Jepson',
                        'position' => 'Accountant',
                        'image' => 'team-4.jpg',
                        'delay' => '400'
                    ]
                ];
                @endphp

                @foreach($team as $member)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $member['delay'] }}">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/' . $member['image']) }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $member['name'] }}</h4>
                            <span>{{ $member['position'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section> --}}

    <section id="contact" class="contact section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    {{-- <form action="{{ route('') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
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
                    </form> --}}
                </div>
            </div>
        </div>

    </section>
@endsection
