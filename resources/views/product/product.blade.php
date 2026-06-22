<style>
/* ============================================================
   PRODUCT SECTION
============================================================ */
.product-section {
    background: #f5f0dc;
    padding: 4rem 0 5rem;
    text-align: center;
}
.product-section-label {
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.28em;
    text-transform: uppercase;
    color: #6d7e2d;
    margin-bottom: 0.6rem;
}
.product-section-title {
    font-size: 2rem;
    font-weight: 800;
    color: #2e3d12;
    margin-bottom: 0.4rem;
}
.product-section-sub {
    font-size: 0.95rem;
    color: #7a8c45;
    font-weight: 600;
    margin-bottom: 3.5rem;
}

/* ── Slider wrapper ── */
.product-slider-wrap {
    position: relative;
    max-width: 1060px;
    margin: 0 auto;
    padding: 0 64px;
}

/* Clips left/right ghost slides but keeps bottom open for image pop */
.product-swiper-outer {
    clip-path: inset(-290px 0 -100px 0);
    overflow: visible;
}

.product-swiper {
    overflow: visible !important;
    padding-bottom: 70px !important;
}

/* Each slide: flex center */
.product-swiper .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-bottom: 0;
}

/* ── Arrow buttons ── */
.prod-arrow {
    position: absolute;
    top: 38%;
    transform: translateY(-50%);
    z-index: 20;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #2e3d12;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f5f0dc;
    box-shadow: 0 4px 16px rgba(46,61,18,0.3);
    transition: background 0.18s, transform 0.18s;
    flex-shrink: 0;
}
.prod-arrow:hover {
    background: #6d7e2d;
    transform: translateY(-50%) scale(1.1);
}
.prod-prev { left: 8px; }
.prod-next { right: 8px; }

/* ============================================================
   CARD
============================================================ */
.pc-wrap {
    position: relative;
    width: 100%;
    max-width: 235px;
    cursor: pointer;
    padding-bottom: 50px;
}

/* Outer shell — always #f5eac3 for all cards */
.pc-shell {
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    min-height: 330px;
    background: rgba(30,58,30,0.25);
    padding: 7px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.07);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

/* Inner rectangle — white for side cards */
.pc-inner {
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    flex: 1;
    background: #ffffff;
}

/* Center (active) card — inner = dark green */
.product-swiper .swiper-slide-active .pc-shell {
    background: rgba(30,58,30,0.25);
    box-shadow: 0 8px 32px rgba(30,58,30,0.25);
}
.product-swiper .swiper-slide-active .pc-inner {
    background: #1e3a1e;
}

/* Spacer inside shell — holds the image area height */
.pc-img-space {
    height: 175px;
    flex-shrink: 0;
}

/* ── Floating image — lives OUTSIDE shell, free to overflow ── */
.pc-img-layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 190px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    pointer-events: none;
    transition: transform 0.15s ease-out;
}
.pc-img-layer img {
    width: 78%;
    max-width: 175px;
    height: 188px;
    object-fit: contain;
    display: block;
    filter: drop-shadow(0 8px 20px rgba(0,0,0,0.18));
    transition: transform 0.15s ease-out;
}

/* Price badge — only on active card */
.pc-price-badge {
    position: absolute;
    top: 0.9rem;
    right: 1rem;
    font-size: 0.78rem;
    font-weight: 800;
    color: #fdf6e7;
    background: rgba(253,246,231,0.14);
    border: 1px solid rgba(253,246,231,0.3);
    padding: 0.2rem 0.6rem;
    border-radius: 20px;
    pointer-events: auto;
    opacity: 0;
    transition: opacity 0.25s;
}
.product-swiper .swiper-slide-active .pc-price-badge {
    opacity: 1;
}

/* ── Body text ── */
.pc-body {
    flex: 1;
    padding: 0 1.2rem 1.4rem;
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
    text-align: left;
    justify-content: space-between;
}
.pc-body-top {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
}
.pc-delivery {
    font-size: 0.61rem;
    font-weight: 700;
    letter-spacing: 0.09em;
    text-transform: uppercase;
    padding-top: 0.5rem;
    border-top: 1px solid #e8e0c8;
    color: #6d7e2d;
    transition: color 0.25s, border-color 0.25s;
}
.product-swiper .swiper-slide-active .pc-delivery {
    color: rgba(253,246,231,0.4);
    border-color: rgba(253,246,231,0.12);
}
.pc-name-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.4rem;
}
.pc-name {
    font-size: 1rem;
    font-weight: 800;
    color: #6d7e2d;
    transition: color 0.25s;
}
.product-swiper .swiper-slide-active .pc-name { color: #fdf6e7; }

.pc-order {
    font-size: 0.68rem;
    font-weight: 800;
    white-space: nowrap;
    text-decoration: underline;
    text-underline-offset: 2px;
    flex-shrink: 0;
    color: #6d7e2d;
    transition: color 0.25s;
}
.product-swiper .swiper-slide-active .pc-order { color: #fdf6e7; }

.pc-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.28rem;
}
.pc-tag {
    font-size: 0.59rem;
    font-weight: 700;
    padding: 0.18rem 0.5rem;
    border-radius: 20px;
    background: #eeeade;
    color: #6d7e2d;
    transition: background 0.25s, color 0.25s;
}
.product-swiper .swiper-slide-active .pc-tag {
    background: rgba(253,246,231,0.1);
    color: rgba(253,246,231,0.75);
    border: 1px solid rgba(253,246,231,0.18);
}

/* ============================================================
   HOVER — card squishes to square, image floats above
============================================================ */
.pc-shell {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.pc-img-layer {
    transition: transform 0.25s ease;
}
.pc-img-layer img {
    transition: transform 0.25s ease, filter 0.25s ease;
}

.pc-wrap:hover .pc-shell {
    transform: scaleY(0.80) translateY(42px);
    transform-origin: top center;
    box-shadow: 0 16px 44px rgba(0,0,0,0.13);
}
.product-swiper .swiper-slide-active .pc-wrap:hover .pc-shell {
    box-shadow: 0 20px 52px rgba(30,58,30,0.45);
}

.pc-wrap:hover .pc-img-layer {
    transform: translateY(-57px);
}
.pc-wrap:hover .pc-img-layer img {
    transform: scale(1.07);
    filter: drop-shadow(0 14px 28px rgba(0,0,0,0.28));
}

/* ── Hover message overlay — center card only ── */
.pc-hover-msg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 175px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    padding-bottom: 18px;
    z-index: 5;
    pointer-events: none;
    opacity: 0;
    transform: translateY(8px);
    transition: opacity 0.22s ease, transform 0.22s ease;
}
.pc-hover-msg span {
    display: block;
    font-family: 'Nunito', sans-serif;
    font-size: 1.1rem;
    font-weight: 800;
    color: #1e3a1e;
    line-height: 1.35;
    text-align: center;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}
/* Center card — cream text */
.product-swiper .swiper-slide-active .pc-hover-msg span {
    color: #f5eac3;
}
/* Show on all cards hover */
.pc-wrap:hover .pc-hover-msg {
    opacity: 1;
    transform: translateY(0);
}

/* ── Responsive ── */
@media (max-width: 900px) {
    .product-slider-wrap { padding: 0 52px; }
    .pc-shell { min-height: 300px; }
    .pc-img-space { height: 155px; }
    .pc-img-layer { height: 168px; }
    .pc-img-layer img { height: 148px; }
}
@media (max-width: 640px) {
    .product-slider-wrap { padding: 0 44px; }
    .product-section { padding: 2.5rem 0 4rem; }
    .pc-shell { min-height: 280px; }
}
</style>

<!-- ================================================================
     PRODUCT SECTION
================================================================ -->
<section class="product-section" id="products">

    <p class="product-section-label">Our Collection</p>
    <h2 class="product-section-title">Crafted for little ones</h2>
    <p class="product-section-sub">Gentle on skin. Strong where it matters.</p>

    <div class="product-slider-wrap">

        {{-- Prev Arrow --}}
        <button class="prod-arrow prod-prev" id="prodPrev" aria-label="Previous">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>

        <div class="product-swiper-outer">
            <div class="swiper product-swiper" id="productSwiper">
                <div class="swiper-wrapper">

                    {{-- Card 1: NB --}}
                    <div class="swiper-slide">
                        <div class="pc-wrap">
                            <div class="pc-shell">
                                <div class="pc-inner">
                                    <div class="pc-hover-msg">
                                        <span>Happy Day</span>
                                        <span>Every Day</span>
                                    </div>
                                    <div class="pc-img-space"></div>
                                    <div class="pc-body">
                                        <div class="pc-body-top">
                                            <p class="pc-delivery">Free delivery until 30/06/2026</p>
                                            <div class="pc-name-row">
                                                <span class="pc-name">Newborn (NB)</span>
                                                <a href="#" class="pc-order">Order ↗</a>
                                            </div>
                                        </div>
                                        <div class="pc-tags">
                                            <span class="pc-tag">0–5 kg</span>
                                            <span class="pc-tag">24 pcs</span>
                                            <span class="pc-tag">Ultra Soft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pc-img-layer">
                                <img src="{{ asset('images/lumi4.png') }}" alt="Lumi9 NB">
                            </div>
                        </div>
                    </div>

                    {{-- Card 2: S --}}
                    <div class="swiper-slide">
                        <div class="pc-wrap">
                            <div class="pc-shell">
                                <div class="pc-inner">
                                    <div class="pc-hover-msg">
                                        <span>Happy Day</span>
                                        <span>Every Day</span>
                                    </div>
                                    <div class="pc-img-space"></div>
                                    <div class="pc-body">
                                        <div class="pc-body-top">
                                            <p class="pc-delivery">Free delivery until 30/06/2026</p>
                                            <div class="pc-name-row">
                                                <span class="pc-name">Small (S)</span>
                                                <a href="#" class="pc-order">Order ↗</a>
                                            </div>
                                        </div>
                                        <div class="pc-tags">
                                            <span class="pc-tag">3–8 kg</span>
                                            <span class="pc-tag">36 pcs</span>
                                            <span class="pc-tag">Leak Guard</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pc-img-layer">
                                <img src="{{ asset('images/lumi7.png') }}" alt="Lumi9 S">
                            </div>
                        </div>
                    </div>

                    {{-- Card 3: M — starts as active/center --}}
                    <div class="swiper-slide">
                        <div class="pc-wrap">
                            <div class="pc-shell">
                                <div class="pc-inner">
                                    <div class="pc-hover-msg">
                                        <span>Happy Day</span>
                                        <span>Every Day</span>
                                    </div>
                                    <div class="pc-img-space"></div>
                                    <div class="pc-body">
                                        <div class="pc-body-top">
                                            <p class="pc-delivery">Free delivery until 30/06/2026</p>
                                            <div class="pc-name-row">
                                                <span class="pc-name">Medium (M)</span>
                                                <a href="#" class="pc-order">Order ↗</a>
                                            </div>
                                        </div>
                                        <div class="pc-tags">
                                            <span class="pc-tag">6–11 kg</span>
                                            <span class="pc-tag">32 pcs</span>
                                            <span class="pc-tag">360° Fit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pc-img-layer">
                                <span class="pc-price-badge">₹ 499</span>
                                <img src="{{ asset('images/lumi5.png') }}" alt="Lumi9 M">
                            </div>
                        </div>
                    </div>

                    {{-- Card 4: L --}}
                    <div class="swiper-slide">
                        <div class="pc-wrap">
                            <div class="pc-shell">
                                <div class="pc-inner">
                                    <div class="pc-hover-msg">
                                        <span>Happy Day</span>
                                        <span>Every Day</span>
                                    </div>
                                    <div class="pc-img-space"></div>
                                    <div class="pc-body">
                                        <div class="pc-body-top">
                                            <p class="pc-delivery">Free delivery until 30/06/2026</p>
                                            <div class="pc-name-row">
                                                <span class="pc-name">Large (L)</span>
                                                <a href="#" class="pc-order">Order ↗</a>
                                            </div>
                                        </div>
                                        <div class="pc-tags">
                                            <span class="pc-tag">9–14 kg</span>
                                            <span class="pc-tag">28 pcs</span>
                                            <span class="pc-tag">Night Dry</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pc-img-layer">
                                <img src="{{ asset('images/lumi9(L).png') }}" alt="Lumi9 L">
                            </div>
                        </div>
                    </div>

                    {{-- Card 5: XL --}}
                    <div class="swiper-slide">
                        <div class="pc-wrap">
                            <div class="pc-shell">
                                <div class="pc-inner">
                                    <div class="pc-hover-msg">
                                        <span>Happy Day</span>
                                        <span>Every Day</span>
                                    </div>
                                    <div class="pc-img-space"></div>
                                    <div class="pc-body">
                                        <div class="pc-body-top">
                                            <p class="pc-delivery">Free delivery until 30/06/2026</p>
                                            <div class="pc-name-row">
                                                <span class="pc-name">Extra Large (XL)</span>
                                                <a href="#" class="pc-order">Order ↗</a>
                                            </div>
                                        </div>
                                        <div class="pc-tags">
                                            <span class="pc-tag">12–17 kg</span>
                                            <span class="pc-tag">24 pcs</span>
                                            <span class="pc-tag">Active Fit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pc-img-layer">
                                <img src="{{ asset('images/lumi6.png') }}" alt="Lumi9 XL">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Next Arrow --}}
        <button class="prod-arrow prod-next" id="prodNext" aria-label="Next">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>

    </div>

</section>

<script>
window.addEventListener('load', function () {
    new Swiper('#productSwiper', {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 22,
        loop: true,
        speed: 420,
        navigation: {
            nextEl: '#prodNext',
            prevEl: '#prodPrev',
        },
        breakpoints: {
            0:   { slidesPerView: 1, spaceBetween: 16 },
            640: { slidesPerView: 2, spaceBetween: 18 },
            900: { slidesPerView: 3, spaceBetween: 22 },
        }
    });
});
</script>
