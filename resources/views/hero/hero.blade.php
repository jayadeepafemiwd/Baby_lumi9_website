<style>
    /* ============================================================
       HERO SECTION
    ============================================================ */
    .hero-section {
        position: relative;
        line-height: 0;
        overflow: hidden;
        background: #f5eac3;
        aspect-ratio: 1851 / 850;
    }

    .hero-wave { position: absolute; bottom: -2%; left: 0; width: 100%; z-index: 15; line-height: 0; }
    .hero-wave svg { width: 100%; height: auto; display: block; }

    .hero-logo-img {
        position: absolute;
        top: 12%; left: 4.5%;
        width: 13%; height: auto;
        z-index: 8; pointer-events: none;
    }

    .hero-section .hero-banner-img { width: 100%; height: auto; display: block; }

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
        top: 28%; left: 4%;
        z-index: 10;
        display: flex; flex-direction: column; align-items: flex-start;
        max-width: 38%;
    }

    .hero-text-dash {
        width: 2.5vw; height: 0.28vw; min-height: 2px;
        background: #6d7e2d; border-radius: 4px; margin-bottom: 0.8vw;
        opacity: 0; transition: opacity 0.5s ease;
    }
    .hero-text-dash.show { opacity: 1; }

    .hero-eyebrow {
        font-size: 0.85vw; font-weight: 700; color: #6d7e2d;
        letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.5vw;
        opacity: 0; transform: translateY(10px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .hero-eyebrow.show { opacity: 1; transform: translateY(0); }

    .hero-big-line {
        font-family: 'Nunito', sans-serif;
        font-weight: 900; line-height: 1.05; letter-spacing: -1px;
        opacity: 0; transform: translateY(16px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .hero-big-line.show { opacity: 1; transform: translateY(0); }

    .hero-big-line-1 { font-size: 4vw; color: #2a3d18; margin-bottom: 0.6vw; }
    .hero-big-line-2 {
        font-size: 1.7vw; color: #6d7e2d;
        display: flex; align-items: center; gap: 0.4vw;
        flex-wrap: wrap; margin-bottom: 0.6vw;
    }
    .hero-highlight-box {
        background: #6d7e2d; color: #fff;
        font-size: 0.75vw; font-weight: 800;
        padding: 0.12vw 0.6vw; border-radius: 4px;
        display: inline-block; vertical-align: middle; line-height: 1.4;
    }
    .hero-big-line-3 { font-size: 2.2vw; color: #2a3d18; margin-bottom: 0.6vw; }

    .hero-tagline {
        font-size: 1.1vw; color: #6b7c5a;
        font-style: italic; line-height: 1.65; margin-top: 1vw;
        opacity: 0; transform: translateY(12px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .hero-tagline.show { opacity: 1; transform: translateY(0); }

    .hero-shop-btn {
        display: inline-flex; align-items: center;
        gap: 0.5vw; margin-top: 1.4vw; padding: 0.8vw 1.8vw;
        background: #6d7e2d; color: #fff;
        font-family: 'Nunito', sans-serif;
        font-size: 1.2vw; font-weight: 700;
        border-radius: 6px; border: none; cursor: pointer;
        text-decoration: none; text-transform: uppercase;
        opacity: 0; transform: translateY(14px);
        transition: opacity 0.7s ease, transform 0.7s ease, background 0.2s;
    }
    .hero-shop-btn:hover { background: #3a5c1e; color: #fff; }
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

    @media (max-width: 991px) {
        .hero-big-line-1 { font-size: 5vw; }
        .hero-big-line-2 { font-size: 2.2vw; }
        .hero-big-line-3 { font-size: 3vw; }
        .hero-highlight-box { font-size: 1vw; }
        .hero-tagline { font-size: 0.9vw; }
        .hero-eyebrow { font-size: .75vw; }
        .hero-deco-arrows { display: none; }
    }
    @media (max-width: 767px) {
        .hero-text-overlay { max-width: 55%; top: 24%; }
        .hero-big-line-1 { font-size: 6.5vw; }
        .hero-big-line-2 { font-size: 3vw; }
        .hero-big-line-3 { font-size: 4vw; }
        .hero-highlight-box { font-size: 1.4vw; }
        .hero-tagline { font-size: 1.2vw; }
        .hero-eyebrow { font-size: 1vw; }
    }
    @media (max-width: 480px) {
        .hero-text-overlay { max-width: 65%; top: 20%; }
        .hero-big-line-1 { font-size: 8vw; }
        .hero-big-line-2 { font-size: 4vw; }
        .hero-big-line-3 { font-size: 5vw; }
        .hero-highlight-box { font-size: 2vw; }
        .hero-tagline { font-size: 1.5vw; }
    }
</style>

<!-- ================================================================
     HERO SECTION
================================================================ -->
<section class="hero-section">

    {{-- Banner background --}}
    <img class="hero-banner-img"
         src="{{ asset('images/hero_banner_output1.png') }}"
         alt="Lumi9 - Gentle care, every step of the way."
         fetchpriority="high" decoding="async">

    {{-- Diaper GIF — deferred --}}
    <img class="hero-diaper-gif" id="heroDiaperGif"
         data-src="{{ asset('images/download (6).gif') }}"
         alt="Lumi9 Diaper">

    {{-- Logo --}}
    <img class="hero-logo-img" src="{{ asset('images/lumi9 logo.png') }}" alt="Lumi9">

    {{-- Text Overlay --}}
    <div class="hero-text-overlay" id="heroTextOverlay">

        <div class="hero-text-dash" id="heroTextDash"></div>

        <div class="hero-big-line hero-big-line-1" id="heroBigLine1">SOFT</div>

        <div class="hero-big-line hero-big-line-2" id="heroBigLine2">
            BREEZE <span class="hero-highlight-box">THAT</span>
        </div>

        <div class="hero-big-line hero-big-line-3" id="heroBigLine3">
            TOUCHES EVERY STEP,
        </div>

        <div class="hero-tagline" id="heroTagline">
            <b>that flows like gentle care,<br>
            and settles into quiet comfort.</b>
        </div>

        <a href="#" class="hero-shop-btn" id="heroShopBtn">
            <i class="fas fa-leaf"></i> Shop Now
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
