<section class="lumi-babies" aria-label="Why Babies Love Lumi">
<style>

    .lumi-babies{background:#fdf6e7;position:relative;padding:40px 0 0;overflow:hidden;font-family:'Nunito',sans-serif;}
    .lumi-babies-title{font-weight:900;font-size:24px;color:#607919;text-align:center;margin-top:-20px;margin-bottom:20px;display:flex;align-items:center;justify-content:center;gap:20px;letter-spacing:-.3px;}
    .lumi-feature{display:flex;align-items:flex-start;gap:14px;margin-bottom:24px;}
    .lumi-feature-icon{width:44px;height:44px;min-width:44px;background:#8aa74b;border-radius:50%;display:flex;align-items:center;justify-content:center;}
    .lumi-feature-text h4{font-size:16px;font-weight:800;color:#3d5a1a;margin:0 0 4px;line-height:1.2;}
    .lumi-feature-text p{font-size:14px;color:#6a7a50;margin:0;line-height:1.5;}
    .lumi-feature-group{position:relative;}
    .lumi-feature-gap{display:none;}
    .lumi-feature-vdot{display:none;}
    .lumi-left-col{padding-left:0;margin-left:-12px;}
    .lumi-left-col .lumi-feature{flex-direction:row;}
    .lumi-left-col .lumi-feature-text{text-align:left;flex:1;}
    .lumi-left-col .lumi-feature-gap{justify-content:flex-end;padding-left:0;padding-right:18px;}
    .lumi-left-col .lumi-feature-vdot{margin-left:0;margin-right:18px;}
    .lumi-right-col .lumi-feature{flex-direction:row;align-items:flex-start;gap:14px;}
    .lumi-right-col .lumi-feature-text{text-align:left;flex:1;}
    .lumi-circle-wrap{display:flex;justify-content:center;align-items:flex-end;}
    .lumi-baby-circle-outer{position:relative;width:240px;height:240px;margin:0 auto;}
    .lumi-baby-circle{position:absolute;bottom:60px;left:55%;transform:translateX(-50%);width:190px;height:190px;border-radius:50%;background-color:#e0d89d;}
    .lumi-baby-front{position:absolute;bottom:0;;left:50%;transform:translateX(-50%);height:310px;width:auto;object-fit:contain;z-index:;}
    .lumi-mascot img{max-height:200px;width:auto;display:block;margin:0 auto;mix-blend-mode:multiply;transform:translate(-60px,-20px);}
    .lumi-sleeping img{max-height:160px;width:auto;display:block;margin:0 auto;mix-blend-mode:multiply;transform:translate(-70px,-50px);}
    .lumi-deco{position:absolute;inset:0;pointer-events:none;z-index:1;overflow:hidden;}
    .lumi-deco svg{position:absolute;opacity:0.3;}
    .lumi-babies-wave{position:absolute;left:0;right:0;line-height:0;pointer-events:none;z-index:1;}
    .lumi-babies-wave-top{top:0;}
    .lumi-babies-wave-bottom{bottom:0;}
    .lumi-babies-wave svg{display:block;width:100%;}
    .lumi-babies-inner{position:relative;z-index:2;}
    /* ── TABLET + MOBILE (≤991px): hide side decorations, fix margins ── */
    @media(max-width:991.98px){
        .lumi-babies-title{font-size:18px;gap:8px;}
        .lumi-babies{padding:56px 0 60px;} /* 56px clears the 44px top wave */
        .lumi-mascot-col,.lumi-sleeping-col{display:none;}
        .lumi-left-col{margin-left:0;}
        .lumi-baby-circle-outer{width:200px;height:230px;}
        .lumi-baby-circle{width:190px;height:190px;}
        .lumi-baby-front{height:250px;}
    }
    /* ── TABLET (576px–991px): baby circle top full-width, features side-by-side below ── */
    @media(min-width:576px) and (max-width:991.98px){
        .lumi-center-col{order:-1;flex:0 0 100%;max-width:100%;margin-bottom:10px;}
        .lumi-left-col,.lumi-right-col{flex:0 0 50%;max-width:50%;}
    }
    /* ── SMALL MOBILE (≤575px): baby TOP-CENTER, features single column ── */
    @media(max-width:575px){
        .lumi-babies{padding:60px 0 40px;}
        .lumi-babies-title{font-size:14px;gap:4px;flex-wrap:wrap;justify-content:center;margin-bottom:10px;line-height:1.4;}
        .lumi-babies-inner .row{
            display:flex;
            flex-direction:column;
            margin:0;
            padding:0 20px;
            gap:0;
        }
        /* Baby circle — top center full width */
        .lumi-center-col{order:-1;display:flex;justify-content:center;margin-bottom:20px;padding:0;width:100%;max-width:none;flex:none;}
        /* Features — single column full width */
        .lumi-left-col,.lumi-right-col{width:100%;max-width:none;flex:none;padding:0;margin:0;}
        /* Circle & baby sizes */
        .lumi-baby-circle-outer{width:200px;height:240px;}
        .lumi-baby-circle{width:185px;height:185px;bottom:52px;}
        .lumi-baby-front{height:240px;}
        /* Feature alignment */
        .lumi-left-col .lumi-feature,
        .lumi-right-col .lumi-feature{flex-direction:row;align-items:center;gap:14px;margin-bottom:12px;}
        .lumi-left-col .lumi-feature-text,
        .lumi-right-col .lumi-feature-text{text-align:left;flex:1;min-width:0;}
        .lumi-feature-icon{width:38px;height:38px;min-width:38px;flex-shrink:0;}
        .lumi-feature-icon svg{width:17px;height:17px;}
        .lumi-feature-text h4{font-size:13px;margin-bottom:2px;line-height:1.2;}
        .lumi-feature-text p{font-size:12px;line-height:1.45;color:#6a7a50;}
    }
</style>

<!-- Decorative floating background icons -->
<div class="lumi-deco" aria-hidden="true">
    <!-- Star top-left -->
    <svg style="top:8%;left:2%;width:38px;height:38px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linejoin="round">
        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
    </svg>
    <!-- Leaf left-center -->
    <svg style="top:45%;left:1%;width:44px;height:44px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
    </svg>
    <!-- Small leaf bottom-left -->
    <svg style="bottom:14%;left:6%;width:32px;height:32px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
    </svg>
    <!-- Star top-right -->
    <svg style="top:7%;right:2%;width:34px;height:34px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linejoin="round">
        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
    </svg>
 <!-- Leaf left-center -->
    <svg style="top:45%;left:1%;width:44px;height:44px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
    </svg>
    <!-- Small star bottom-right -->
    <svg style="bottom:16%;right:5%;width:28px;height:28px;" viewBox="0 0 24 24" fill="none" stroke="#8aa74b" stroke-width="1.4" stroke-linejoin="round">
        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
    </svg>
</div>

{{-- Top wave: stroke line only, no fill (transition handled by features bottom wave) --}}

<div class="lumi-babies-inner container-xl px-4">

    <!-- Title -->
    <h2 class="lumi-babies-title">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="#8aa74b"><path d="M17 8C8 10 5.9 16.17 3.82 19.41L5.71 20l1-2.3A4.49 4.49 0 008 18c7 0 10-7.5 9-10z"/><path d="M10.66 6.56c-.16-.6-.58-1.06-1.16-1.24a2 2 0 00-2.5 1.95c0 1.1.9 2 2 2a2 2 0 001.95-2.5c-.05-.07-.16-.14-.29-.21z" opacity=".4"/></svg>
         A Mother's Comfort, In Every Diaper
        <svg width="22" height="22" viewBox="0 0 24 24" fill="#8aa74b" style="transform:scaleX(-1)"><path d="M17 8C8 10 5.9 16.17 3.82 19.41L5.71 20l1-2.3A4.49 4.49 0 008 18c7 0 10-7.5 9-10z"/><path d="M10.66 6.56c-.16-.6-.58-1.06-1.16-1.24a2 2 0 00-2.5 1.95c0 1.1.9 2 2 2a2 2 0 001.95-2.5c-.05-.07-.16-.14-.29-.21z" opacity=".4"/></svg>
    </h2>

    <div class="row align-items-center g-4">

        <!-- Col 1: Lumi mascot -->
        <div class="col-lg-1 text-center lumi-mascot-col">
            <div class="lumi-mascot"><img src="{{ asset('images/image-2.webp') }}" alt="Lumi mascot"></div>
        </div>

        <!-- Col 2: Left features -->
        <div class="col-lg-3 lumi-feature-group lumi-left-col">
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M18 10h-1.26A8 8 0 109 20h9a5 5 0 000-10z"/></svg></div>
                <div class="lumi-feature-text"><h4>Cloud Soft</h4><p>Feels like a gentle cuddle.</p></div>
            </div>
            <div class="lumi-feature-gap"><span class="lumi-feature-vdot"></span></div>
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/></svg></div>
                <div class="lumi-feature-text"><h4>Quick Absorption</h4><p>Locks wetness away in seconds.</p></div>
            </div>
            <div class="lumi-feature-gap"><span class="lumi-feature-vdot"></span></div>
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><circle cx="12" cy="16" r=".5" fill="#fff"/></svg></div>
                <div class="lumi-feature-text"><h4>Overnight Comfort</h4><p>Comfort that lasts till morning.</p></div>
            </div>
        </div>

        <!-- Col 3: Center — image-5 rises above green circle -->
        <div class="col-lg-4 text-center lumi-center-col">
            <div class="lumi-circle-wrap">
                <div class="lumi-baby-circle-outer">
                    <div class="lumi-baby-circle"></div>
                    <img src="{{ asset('images/image-5.webp') }}" alt="Baby" class="lumi-baby-front">
                </div>
            </div>
        </div>

        <!-- Col 4: Right features -->
        <div class="col-lg-3 lumi-feature-group lumi-right-col">
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M9.59 4.59A2 2 0 1111 8H2m10.59 11.41A2 2 0 1014 16H2m15.73-8.27A2.5 2.5 0 1119.5 12H2"/></svg></div>
                <div class="lumi-feature-text"><h4>Snug and Secure Fit</h4><p>Stays comfortably in place.</p></div>
            </div>
            <div class="lumi-feature-gap"><span class="lumi-feature-vdot"></span></div>
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="15 3 21 3 21 9"/><polyline points="9 21 3 21 3 15"/><line x1="21" y1="3" x2="14" y2="10"/><line x1="3" y1="21" x2="10" y2="14"/></svg></div>
                <div class="lumi-feature-text"><h4>Breathable Design</h4><p>Keeps baby skin fresh and protected.</p></div>
            </div>
            <div class="lumi-feature-gap"><span class="lumi-feature-vdot"></span></div>
            <div class="lumi-feature">
                <div class="lumi-feature-icon"><svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg></div>
                <div class="lumi-feature-text"><h4>Flexible Fit</h4><p>Moves with every kick and crawl.</p></div>
            </div>
        </div>

        <!-- Col 5: Sleeping baby -->
        <div class="col-lg-1 text-center lumi-feature-group lumi-sleeping-col">
<div class="lumi-sleeping"><img src="{{ asset('images/image-1.webp') }}" alt="Sleeping Baby"></div>
        </div>

    </div>
</div>


</section>



