
<!-- Hero -->

<section class="hero">

    <img
        src="{{ asset($heroImage ?? 'images/hero.png') }}"
        alt="Hero Image"
        class="hero-image"
    >

    <div class="hero-overlay"></div>

    <div class="container-fluid px-5">

        <div class="hero-content">

            @if(isset($hideHeroContent) && $hideHeroContent)

                {{-- Custom Hero Content --}}

                @if(!empty($heroTitle))

                    <h1>
                        {!! nl2br(e($heroTitle)) !!}
                    </h1>

                @endif

                @if(!empty($heroSubtitle))

                    <p>
                        {{ $heroSubtitle }}
                    </p>

                @endif

                @if(!empty($heroPrimaryText) || !empty($heroSecondaryText))

                    <div class="hero-buttons">

                        @if(!empty($heroPrimaryText))

                            <a
                                href="{{ $heroPrimaryUrl ?? '#' }}"
                                class="gold-btn"
                            >
                                {{ $heroPrimaryText }}
                            </a>

                        @endif

                        @if(!empty($heroSecondaryText))

                            <a
                                href="{{ $heroSecondaryUrl ?? '#' }}"
                                class="outline-btn"
                            >
                                {{ $heroSecondaryText }}
                            </a>

                        @endif

                    </div>

                @endif

            @else

                {{-- =================================================
                     DEFAULT HOME HERO
                     ================================================= --}}

                
                <h1>

                    Building the Future
                    <br>
                    with Excellence

                </h1>





            @endif

        </div>

    </div>

</section>
