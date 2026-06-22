<style>
    /* ============================================================
       HERO SECTION
    ============================================================ */
    .hero-section {
        position: relative;
        line-height: 0;
        overflow: hidden;
        background: #f5eac3;
        /* Always = viewport width × (850/1851) — works on all screen sizes */
        height: calc(100vw * 850 / 1851 * 0.985);
        max-height: 848px;
    }

    .hero-wave { position: absolute; bottom: -2%; left: 0; width: 100%; z-index: 15; line-height: 0; }
    .hero-wave svg { width: 100%; height: auto; display: block; }

    .hero-logo-img {
        position: absolute;
        top: 4%; left: 4%;
        width: 11%; height: auto;
        z-index: 8; pointer-events: none;
    }

    .hero-section .hero-banner-img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center center;
        display: block;
    }

    .hero-diaper-gif {
        position: absolute;
        left: 67%; bottom: 14%;
        transform: translateX(-50%);
        width: 45%; max-width: 740px;
        pointer-events: none;
        filter: drop-shadow(0 8px 16px rgba(0,0,0,0.18));
    }

    /* TEXT OVERLAY */
    .hero-text-overlay {
        position: absolute;
        top: 20%; left: 4%;
        z-index: 10;
        display: flex; flex-direction: column;
        align-items: flex-start;
        text-align: left;
        max-width: 32%;
        font-family: 'Nunito', sans-serif;
    }

    /* ── Top eyebrow: "— LUMI9 —" with side dashes ── */
    .hero-text-dash {
        display: flex; align-items: center; gap: 0.6vw;
        color: #6d7e2d; font-family: 'Nunito', sans-serif;
        font-size: 0.68vw; font-weight: 800; letter-spacing: 0.22em;
        text-transform: uppercase; margin-bottom: 0.85vw;
        opacity: 0; transition: opacity 0.5s ease;
    }
    .hero-text-dash::before,
    .hero-text-dash::after {
        content: '';
        display: block;
        width: 2vw; height: 1.5px;
        background: #6d7e2d; border-radius: 2px;
        flex-shrink: 0;
    }
    .hero-text-dash.show { opacity: 1; }

    .hero-eyebrow {
        font-size: 0.85vw; font-weight: 700; color: #6d7e2d;
        letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.5vw;
        opacity: 0; transform: translateY(10px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .hero-eyebrow.show { opacity: 1; transform: translateY(0); }

    /* ── Main big lines ── */
    .hero-big-line {
        font-family: 'Nunito', sans-serif;
        font-weight: 800; line-height: 1.2;
        opacity: 0; transform: translateY(16px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .hero-big-line.show { opacity: 1; transform: translateY(0); }

    /* Line 1: large bold serif */
    .hero-big-line-1 {
        font-size: 3.25vw; color: #2a3d18;
        letter-spacing: -0.5px; margin-bottom: 0.7vw;
    }

    /* Line 2: cursive + ribbon/banner background (like "en Amazon") */
    .hero-big-line-2 {
        display: flex; align-items: center; justify-content: center;
        margin-top: 0.7vw;
        margin-bottom: 0.7vw;
    }
    .hero-ribbon {
        font-family: 'Nunito', sans-serif;
        font-size: 1.75vw; font-weight: 800;
        color: #fff;
        background: #6d7e2d;
        padding: 0.35vw 3vw;
        display: inline-block;
        line-height: 1.6;
        /* Inward V-notch both ends — exact match to "en Amazon" ribbon style */
        clip-path: polygon(
            0%   0%,
            100% 0%,
            91%  50%,
            100% 100%,
            0%   100%,
            9%   50%
        );
    }

    /* Line 3: LOVE */
    .hero-big-line-3 {
        font-size: 3.5vw; color: #3a5c1e;
        font-weight: 800; letter-spacing: -0.5px;
        margin-bottom: 0.35vw; margin-top: 0.15vw;
    }

    /* Tagline */
    .hero-tagline {
        font-family: 'Nunito', sans-serif;
        font-size: 0.9vw; color: #567439;
        font-weight: 600; font-style: italic; line-height: 1.7; margin-top: 0.6vw;
        opacity: 0; transform: translateY(12px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .hero-tagline.show { opacity: 1; transform: translateY(0); }

    /* Shop button — pill style like the Amazon image */
    .hero-shop-btn {
        display: inline-flex; align-items: center;
        gap: 0.5vw; margin-top: 1vw; padding: 1vw 1.9vw;
        background: #6d7e2d; color: #fff;
        font-family: 'Nunito', sans-serif;
        font-size: 0.88vw; font-weight: 800;
        border-radius: 10px;
        margin-top:9%;
        border: 2px solid #6d7e2d;
        cursor: pointer; text-decoration: none; text-transform: uppercase;
        letter-spacing: 0.1em;
        opacity: 0; transform: translateY(14px);
        transition: opacity 0.7s ease, transform 0.7s ease, background 0.2s, color 0.2s;
    }
    .hero-shop-btn:hover { background: transparent; color: #3a5c1e; }
    .hero-shop-btn.show  { opacity: 1; transform: translateY(0); }

    .hero-deco-arrows {
        position: absolute; right: 3%; top: 50%;
        transform: translateY(-50%);
        display: flex; flex-direction: column; gap: 0.6vw;
        opacity: 0; z-index: 10; transition: opacity 0.8s ease 2.6s;
    }
    .hero-deco-arrows.show { opacity: 0.32; }
    .hero-deco-arrow {
        width: 1.4vw; height: 1.4vw;
        border-right: 0.22vw solid #6d7e2d;
        border-bottom: 0.22vw solid #6d7e2d;
        transform: rotate(-45deg);
    }

    @media (max-width: 1200px) {
        .hero-logo-img { width: 10%; top: 4%; }
        .hero-text-overlay { top: 12%; max-width: 34%; }
    }
    @media (max-width: 991px) {
        .hero-logo-img { width: 12%; top: 4%; left: 3%; }
        .hero-text-overlay { top: 14%; max-width: 36%; left: 3%; }
        .hero-big-line { line-height: 1.2; }
        .hero-big-line-1 { font-size: 3.8vw; margin-bottom: 0.5vw; }
        .hero-ribbon { font-size: 2vw; padding: 0.3vw 2.5vw; }
        .hero-big-line-2 { margin-bottom: 0.5vw; }
        .hero-big-line-3 { font-size: 4vw; margin-bottom: 0.5vw; margin-top: 0.2vw; }
        .hero-tagline { font-size: 1.5vw; margin-top: 0.5vw; }
        .hero-text-dash { font-size: 0.65vw; margin-bottom: 0.6vw; }
        .hero-shop-btn { font-size: 0.7vw; margin-top: 0.8vw; }
        .hero-deco-arrows { display: none; }
    }
    @media (max-width: 767px) {
        /* Base .hero-section height: calc(100vw * 850/1851) handles size automatically */
        .hero-logo-img { display: none; }
        .hero-text-overlay { top: 6%; max-width: 40%; left: 3%; }
        .hero-big-line { line-height: 1.1; }
        .hero-text-dash { font-size: 0.7vw; margin-bottom: 0.4vw; }
        .hero-big-line-1 { font-size: 4vw; margin-bottom: 0.35vw; }
        .hero-ribbon { font-size: 2vw; padding: 0.2vw 2vw; }
        .hero-big-line-2 { margin-bottom: 0.35vw; }
        .hero-big-line-3 { font-size: 4.5vw; margin-bottom: 0.3vw; margin-top: 0.15vw; }
        .hero-tagline { font-size: 1.5vw; margin-top: 0.3vw; }
        .hero-shop-btn { font-size: 0.65vw; padding: 0.4vw 1.2vw; margin-top: 0.5vw; }
        .hero-deco-arrows { display: none; }
    }
    @media (max-width: 480px) {
        .hero-logo-img { display: none; }
        .hero-text-overlay { top: 5%; max-width: 43%; left: 2.5%; }
        .hero-big-line { line-height: 1.05; }
        .hero-text-dash { font-size: 0.7vw; margin-bottom: 0.3vw; }
        .hero-big-line-1 { font-size: 4.2vw; margin-bottom: 0.28vw; }
        .hero-ribbon { font-size: 2.1vw; padding: 0.18vw 1.8vw; }
        .hero-big-line-2 { margin-bottom: 0.28vw; }
        .hero-big-line-3 { font-size: 4.8vw; margin-bottom: 0.25vw; margin-top: 0.1vw; }
        .hero-tagline { font-size: 1.6vw; margin-top: 0.25vw; }
        .hero-shop-btn { font-size: 0.65vw; padding: 0.35vw 1vw; margin-top: 0.4vw; border-width: 1.5px; }
    }
</style>

<!-- ================================================================
     HERO SECTION
================================================================ -->
<section class="hero-section" id="home">

    {{-- Banner background --}}
    <img class="hero-banner-img"
         src="{{ asset('images/hero_banner_output1.webp') }}"
         alt="Lumi9 - Gentle care, every step of the way."
         fetchpriority="high" decoding="async">

    {{-- Diaper GIF — deferred --}}
    <img class="hero-diaper-gif" id="heroDiaperGif"
         data-src="{{ asset('images/download (6).gif') }}"
         alt="Lumi9 Diaper">

    {{-- Logo --}}
    <img class="hero-logo-img" src="{{ asset('images/lumi9 logo.webp') }}" alt="Lumi9">

    {{-- Text Overlay --}}
    <div class="hero-text-overlay" id="heroTextOverlay">

        {{-- Eyebrow: — LUMI9 DIAPER — --}}
        <!-- <div class="hero-text-dash" id="heroTextDash">LUMI9 DIAPER</div> -->

        {{-- Line 1: EVERY TOUCH --}}
        <div class="hero-big-line hero-big-line-1" id="heroBigLine1">Every Touch</div>

        {{-- Line 2: FEELS LIKE — ribbon banner --}}
        <div class="hero-big-line hero-big-line-2" id="heroBigLine2">
            <span class="hero-ribbon">feels like</span>
        </div>

        {{-- Line 3: LOVE --}}
        <div class="hero-big-line hero-big-line-3" id="heroBigLine3">Love</div>

        {{-- Tagline --}}
        <div class="hero-tagline" id="heroTagline">
            <b>Gentle comfort. Happy moments.</b>
        </div>

        {{-- Button --}}
        <a href="#" class="hero-shop-btn" id="heroShopBtn">
            <i class="fas fa-leaf"></i> View Collection
        </a>

    </div>

    {{-- Deco arrows --}}
    <div class="hero-deco-arrows" id="heroDecoArrows">
        <div class="hero-deco-arrow"></div>
        <div class="hero-deco-arrow"></div>
        <div class="hero-deco-arrow"></div>
    </div>

    {{-- Wavy bottom edge --}}
    <div class="hero-wave">
        <svg viewBox="0 0 1440 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,62 C160,90 320,34 480,62 C640,90 800,34 960,66 C1100,88 1280,38 1440,62 L1440,90 L0,90 Z" fill="#f5eac3"/>
            <path d="M0,62 C160,90 320,34 480,62 C640,90 800,34 960,66 C1100,88 1280,38 1440,62" fill="none" stroke="#beaf81" stroke-width="2.5"/>
        </svg>
    </div>

</section>

<script>
    function runHeroAnim() {
        const dash    = document.getElementById('heroTextDash');
        const eyebrow = document.getElementById('heroEyebrow');
        const line1   = document.getElementById('heroBigLine1');
        const line2   = document.getElementById('heroBigLine2');
        const line3   = document.getElementById('heroBigLine3');
        const tagline = document.getElementById('heroTagline');
        const btn     = document.getElementById('heroShopBtn');
        const arrows  = document.getElementById('heroDecoArrows');

        [dash, eyebrow, line1, line2, line3, tagline, btn, arrows].forEach(el => {
            if (el) el.classList.remove('show');
        });

        setTimeout(() => dash    && dash.classList.add('show'),    150);
        setTimeout(() => eyebrow && eyebrow.classList.add('show'), 300);
        setTimeout(() => line1   && line1.classList.add('show'),   600);
        setTimeout(() => line2   && line2.classList.add('show'),   1000);
        setTimeout(() => line3   && line3.classList.add('show'),   1400);
        setTimeout(() => tagline && tagline.classList.add('show'), 1900);
        setTimeout(() => btn     && btn.classList.add('show'),     2500);
        setTimeout(() => arrows  && arrows.classList.add('show'),  2700);
    }

    runHeroAnim();

    window.addEventListener('load', function () {
        const gif = document.getElementById('heroDiaperGif');
        if (gif && gif.dataset.src) gif.src = gif.dataset.src;
    });
</script>
