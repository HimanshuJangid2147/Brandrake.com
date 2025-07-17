<footer id="footer" class="footer dark-background">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>{{ $siteSettings->address_line1 ?? 'A108 Adam Street' }}</p>
                    <p>{{ $siteSettings->address_line2 ?? 'New York, NY 535022' }}</p>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong> <span>{{ $siteSettings->phone ?? '+1 5589 55488 55' }}</span><br>
                        <strong>Email:</strong> <span>{{ $siteSettings->email ?? 'info@example.com' }}</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>{{ $siteSettings->opening_hours_monsat ?? '11AM - 23PM' }}</span><br>
                        <strong>Sunday:</strong> <span>{{ $siteSettings->opening_hours_sunday ?? 'Closed' }}</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                    @if($siteSettings->twitter_url)
                        <a href="{{ $siteSettings->twitter_url }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    @endif
                    @if($siteSettings->facebook_url)
                        <a href="{{ $siteSettings->facebook_url }}" class="facebook"><i class="bi bi-facebook"></i></a>
                    @endif
                    @if($siteSettings->instagram_url)
                        <a href="{{ $siteSettings->instagram_url }}" class="instagram"><i class="bi bi-instagram"></i></a>
                    @endif
                    @if($siteSettings->linkedin_url)
                        <a href="{{ $siteSettings->linkedin_url }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $siteSettings->site_name ?? 'Brandrake' }}</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="#">{{ $siteSettings->site_name ?? 'Brandrake' }}</a>
        </div>
    </div>
</footer>
