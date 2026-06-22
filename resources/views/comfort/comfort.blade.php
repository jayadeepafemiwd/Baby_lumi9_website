<section class="comfort-section" aria-label="Ultra Soft Comfort">
<style>
    /* ── BASE (Laptop 992px+) ── */
    .comfort-section{position:relative;background:#f5eac3;color:#3d5a1a;overflow:hidden;width:100%;padding:120px 80px 80px;font-family:'Nunito',sans-serif;margin-top:-4px;}
    .comfort-top-wave{position:absolute;top:0;left:0;width:100%;height:110px;z-index:2;pointer-events:none;}
    .comfort-top-wave svg{width:100%;height:100%;display:block;}
    .comfort-bottom-wave{position:absolute;bottom:0;left:0;width:100%;height:500px;z-index:2;pointer-events:none;}
    .comfort-bottom-wave svg{width:100%;height:100%;display:block;}
    .comfort-inner{position:relative;z-index:5;}
    .comfort-baby-abs{position:absolute;top:5px;right:-1%;width:230px;z-index:2;}
    .comfort-baby-img{width:170%;margin-left:-155%;margin-top:-13%;display:block;}
    .comfort-heading{font-family:'Nunito',sans-serif;font-size:60px;font-weight:800;line-height:.95;color:#6d7e2d;margin-bottom:1.5%;margin-left:5%;}
    .comfort-desc{max-width:560px;font-size:18px;font-family:'Nunito',sans-serif;color:#6d7e2d;line-height:1.5;margin-bottom:4.5%;padding-bottom:1.5%;margin-left:5%;}
    .comfort-cards-row{display:flex;justify-content:center;align-items:stretch;gap:20px;flex-wrap:nowrap;margin-bottom:0;margin-top:-39px;position:relative;z-index:5;}
    .comfort-card{width:280px;height:220px;background:#fdf6e7;border-radius:24px;overflow:hidden;display:flex;border:1.5px solid #8AA74B;box-shadow:0 6px 18px rgba(0,0,0,.08);transition:transform .3s ease,box-shadow .3s ease;}
    .comfort-card:hover{transform:translateY(-5px);box-shadow:0 12px 32px rgba(255,255,255,0.85),0 4px 14px rgba(0,0,0,0.1);}
    .comfort-card-photo{width:44%;position:relative;display:flex;justify-content:center;align-items:flex-end;overflow:hidden;}
    .comfort-card-img{width:120%;height:100%;object-fit:cover;object-position:center bottom;}
    .comfort-card-content{width:56%;padding:18px 18px 20px;}
    .comfort-card-icon{width:52px;height:52px;background:#819b44;border-radius:50%;color:#fff;display:flex;justify-content:center;align-items:center;margin-left:auto;margin-bottom:12px;}
    .comfort-card-title{font-size:16px;font-weight:700;color:#244019;line-height:1.4;}
    .comfort-card-divider{width:55px;height:4px;border-radius:30px;background:#7fa54e;margin:10px 0;}
    .comfort-card-desc{font-size:14px;line-height:1.6;color:#777;}

    /* ── TABLET 768px – 1199px: 2×2 grid ── */
    @media(max-width:1199px){
        .comfort-section{padding:100px 40px 80px;min-height:auto;}
        .comfort-baby-abs{width:180px;}
        .comfort-heading{font-size:48px;}
        .comfort-cards-row{flex-wrap:wrap;margin-top:20px;gap:16px;}
        .comfort-card{width:calc(50% - 8px);height:auto;min-height:190px;}
    }

    /* ── MOBILE 576px – 991px ── */
    @media(max-width:991px){
        .comfort-section{padding:70px 20px 60px;min-height:auto;}
        /* pull baby image into flow, centered above heading */
        .comfort-baby-abs{position:relative;top:auto;right:auto;width:110px;margin:0 auto 14px;display:block;}
        .comfort-baby-img{width:100%;margin-left:0;margin-top:0;}
        .comfort-heading{font-size:36px;margin-left:0;text-align:center;margin-bottom:10px;}
        .comfort-desc{margin-left:0;text-align:center;max-width:100%;font-size:15px;margin-bottom:20px;padding-bottom:0;}
        .comfort-cards-row{flex-wrap:wrap;margin-top:0;gap:14px;}
        .comfort-card{width:calc(50% - 7px);height:auto;min-height:160px;}
    }

    /* ── SMALL MOBILE <576px: 2-column vertical cards ── */
    @media(max-width:575px){
        .comfort-section{padding:56px 14px 40px;}
        .comfort-baby-abs{width:70px;margin-bottom:8px;}
        .comfort-heading{font-size:26px;text-align:center;margin-left:0;margin-bottom:8px;}
        .comfort-desc{font-size:12.5px;text-align:center;margin-left:0;margin-bottom:18px;padding-bottom:0;}
        .comfort-desc br{display:none;}
        .comfort-cards-row{gap:10px;margin-top:0;}
        /* Single column full-width cards */
        .comfort-card{width:100%;flex-direction:row;height:auto;min-height:130px;border-radius:18px;}
        .comfort-card-photo{width:38%;height:auto;min-height:130px;}
        .comfort-card-img{width:120%;object-position:center bottom;}
        .comfort-card-content{width:62%;padding:14px 14px 16px;}
        .comfort-card-icon{width:38px;height:38px;font-size:14px;margin-left:0;margin-bottom:10px;}
        .comfort-card-title{font-size:13.5px;font-weight:700;line-height:1.3;}
        .comfort-card-divider{width:40px;height:3px;margin:7px 0;}
        .comfort-card-desc{font-size:12px;line-height:1.5;}
    }
</style>

<!-- TOP CURVE — fills above the wave with the previous section color to properly cut the section -->
<div class="comfort-top-wave">
    <svg viewBox="0 -10 1440 120" preserveAspectRatio="none">
        <path d="M0,-10 L1440,-10 L1440,28 C1440,28 1400,36 1360,30 C1220,8 1080,-5 900,18 C760,40 620,42 460,25 C320,10 180,5 0,35 Z" fill="#fdf6e7"/>
        <path d="M0,35 C180,5 320,10 460,25 C620,42 760,40 900,18 C1080,-5 1220,8 1360,30 C1400,36 1440,28 1440,28" fill="none" stroke="#beaf81" stroke-width="2.4" stroke-linecap="round"/>
    </svg>
</div>

<!-- BABY IMAGE -->
<div class="comfort-baby-abs">
    <img src="{{ asset('images/baby-dark.webp') }}" class="comfort-baby-img" alt="">
</div>

<div class="comfort-inner">

    <h2 class="comfort-heading">
        Ultra Soft<br>
        Comfort
    </h2>

    <p class="comfort-desc">
        From playful mornings to peaceful nights,<br>ensuring dryness, freedom of movement, and lasting comfort.
    </p>

    <div class="comfort-cards-row">

        <!-- CARD 1 -->
        <div class="comfort-card">
            <div class="comfort-card-photo" style="background:#fdf6e7;">
                <img src="{{ asset('images/split_baby_1.webp') }}" class="comfort-card-img">
            </div>
            <div class="comfort-card-content">
                <div class="comfort-card-icon"><i class="fas fa-leaf"></i></div>
                <div class="comfort-card-title">Ultra Soft Comfort</div>
                <div class="comfort-card-divider"></div>
                <div class="comfort-card-desc">Cloud-soft feel for delicate baby skin.</div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="comfort-card">
            <div class="comfort-card-photo" style="background:#fdf6e7;">
                <img src="{{ asset('images/split_baby_2.webp') }}" class="comfort-card-img">
            </div>
            <div class="comfort-card-content">
                <div class="comfort-card-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="comfort-card-title">Leakage Protection</div>
                <div class="comfort-card-divider"></div>
                <div class="comfort-card-desc">Up to 12 hours of dryness.</div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="comfort-card">
            <div class="comfort-card-photo" style="background:#fdf6e7;">
                <img src="{{ asset('images/split_baby_3.webp') }}" class="comfort-card-img" style="object-position:center 100%;transform:translateY(30px);">
            </div>
            <div class="comfort-card-content">
                <div class="comfort-card-icon"><i class="fas fa-heart"></i></div>
                <div class="comfort-card-title">Gentle &amp; Safe</div>
                <div class="comfort-card-divider"></div>
                <div class="comfort-card-desc">Made with skin-friendly materials.</div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="comfort-card">
            <div class="comfort-card-photo" style="background:#fdf6e7;">
                <img src="{{ asset('images/split_baby_4.webp') }}" class="comfort-card-img" style="object-position:left bottom;">
            </div>
            <div class="comfort-card-content">
                <div class="comfort-card-icon"><i class="fas fa-recycle"></i></div>
                <div class="comfort-card-title">Eco Conscious</div>
                <div class="comfort-card-divider"></div>
                <div class="comfort-card-desc">Thoughtful for babies and the planet.</div>
            </div>
        </div>

    </div>

</div>

<!-- BOTTOM CURVE (hidden — prevents white gap) -->
<div class="comfort-bottom-wave">
    <svg viewBox="0 0 1440 260" preserveAspectRatio="none">
        <path d="M0,180 C170,240 300,190 500,180 C780,185 980,120 1180,125 C1320,130 1390,150 1440,165 L1440,260 L0,260 Z" fill="#fdf6e7" stroke="none"/>
        <path d="M0,180 C170,240 300,190 500,180 C780,185 980,120 1180,125 C1320,130 1390,150 1440,165" fill="none" stroke="#beaf81" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
</div>

</section>
