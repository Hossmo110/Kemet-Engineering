{{-- ==========================
     FOOTER
========================== --}}

<footer class="site-footer">

    <div class="container">

        {{-- ==========================
             LOGO + GOLD LINES
        =========================== --}}

        <div class="footer-logo-row">

            <span class="footer-gold-line"></span>

            <a href="{{ url('/') }}" class="footer-logo">

                <img src="{{ asset('images/logo.png') }}" alt="ECC Group">

            </a>

            <span class="footer-gold-line"></span>

        </div>


        {{-- ==========================
             NEWSLETTER
        =========================== --}}

        <div class="footer-newsletter">

            <h3>
                Subscribe Our Newsletter
            </h3>

            <form class="newsletter-form">

                <input type="email" name="email" placeholder="Enter your email address" required>

                <button type="submit">
                    SUBSCRIBE
                </button>

            </form>

        </div>


        {{-- ==========================
             CONTACT US
        =========================== --}}

        <div class="footer-contact">

            <h3>
                CONTACT US
            </h3>


            <div class="footer-contact-info">


                {{-- Phone --}}

                <div class="footer-contact-item">

                    <span class="contact-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                                19.79 19.79 0 0 1-8.63-3.07
                                19.5 19.5 0 0 1-6-6
                                A19.79 19.79 0 0 1 2.12 4.18
                                2 2 0 0 1 5.1 2h3a2 2 0 0 1 2 1.72
                                12.84 12.84 0 0 0 .7 2.81
                                2 2 0 0 1-.45 2.11L9.08 9.91
                                a16 16 0 0 0 6 6l1.27-1.27
                                a2 2 0 0 1 2.11-.45
                                12.84 12.84 0 0 0 2.81.7
                                A2 2 0 0 1 22 16.92z" />

                        </svg>

                    </span>


                    <a href="tel:043736777">
                        043736777
                    </a>

                </div>


                {{-- Email --}}

                <div class="footer-contact-item">

                    <span class="contact-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <rect x="3" y="5" width="18" height="14" rx="2" />

                            <polyline points="3,7 12,13 21,7" />

                        </svg>

                    </span>


                    <a href="mailto:info@eccgroup.ae">
                        info@eccgroup.ae
                    </a>

                </div>


                {{-- Address --}}

                <div class="footer-contact-item">

                    <span class="contact-icon">

                        <svg viewBox="0 0 24 24" aria-hidden="true">

                            <path d="M12 21s7-6.1 7-12
                                a7 7 0 1 0-14 0
                                c0 5.9 7 12 7 12z" />

                            <circle cx="12" cy="9" r="2.5" />

                        </svg>

                    </span>


                    <span>
                        Al Qouz Ind.third - Al Quoz - Dubai
                    </span>

                </div>

            </div>

        </div>

        {{-- ==========================
     SOCIAL MEDIA
=========================== --}}

        <div class="footer-social">

            {{-- Facebook --}}
            <a href="#" aria-label="Facebook" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M14 8h3V4h-3c-3.3 0-5 1.9-5 5v3H6v4h3v8h4v-8h3.5l.5-4H13V9c0-.7.3-1 1-1z" />
                </svg>
            </a>


            {{-- Instagram --}}
            <a href="#" aria-label="Instagram" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5" />
                    <circle cx="12" cy="12" r="4" />
                    <circle cx="17.5" cy="6.5" r="1" />
                </svg>
            </a>


            {{-- LinkedIn --}}
            <a href="#" aria-label="LinkedIn" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="4" width="16" height="16" rx="2" />
                    <line x1="8" y1="10" x2="8" y2="16" />
                    <line x1="8" y1="7" x2="8" y2="7" />
                    <path d="M12 16v-3.2c0-1.8 1-2.8 2.5-2.8s2.5 1 2.5 2.8V16" />
                    <line x1="12" y1="10" x2="12" y2="16" />
                </svg>
            </a>


            {{-- X --}}
            <a href="#" aria-label="X" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 4l14 16" />
                    <path d="M19 4L5 20" />
                </svg>
            </a>

        </div>


        <div class="footer-bottom">

    <p>
        © {{ date('Y') }}

        <a href="{{ url('/') }}">
            KEMET Group
        </a>

    . All Rights Reserved.
    </p>

</div>

</footer>
