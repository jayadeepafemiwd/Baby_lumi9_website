<section class="gallery-section" aria-label="Gallery">
<style>
    .gallery-section{background:#fdf6e7;padding:20px 0 60px;position:relative;margin-top:-60px;overflow:hidden;width:100%;}
    .gallery-sec-title{font-size:1.75rem;font-weight:700;color:#6d7e2d;text-align:center;margin-bottom:6px;}
    .gallery-sec-title .sec-title-icon{margin:0 10px;font-size:1rem;color:#c8a040;}
    .gallery-sec-sub{text-align:center;color:#7a9450;font-size:.82rem;margin-bottom:44px;}

    .gallery-swiper{padding:28px 0 14px;overflow:visible;}
    .gallery-swiper .swiper-wrapper{align-items:center;}

    /* Swiper controls slide widths via slidesPerView breakpoints — no CSS width override */
    .gallery-swiper .swiper-slide{transform:scale(0.88);transition:transform .4s ease;opacity:0.7;cursor:pointer;}
    .gallery-swiper .swiper-slide-active{transform:scale(1);opacity:1;cursor:default;}

    .gallery-card{border-radius:20px;overflow:visible;box-shadow:0 6px 24px rgba(0,0,0,0.11);background:#fdf6e7;position:relative;border:1.5px solid #8aa74b;display:flex;flex-direction:column;}
    .gallery-icon-badge{position:absolute;top:-14px;left:14px;width:38px;height:38px;background:#e8f2d6;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 10px rgba(138,167,75,0.25);z-index:5;border:1.5px solid #8aa74b;}
    .gallery-icon-badge img{width:22px;height:22px;object-fit:contain;}
    .gallery-img-wrap{width:100%;border-radius:18px 18px 0 0;overflow:hidden;aspect-ratio:1080/1350;}
    .gallery-img{width:100%;height:100%;object-fit:cover;display:block;}
    .gallery-img-ph{width:100%;height:100%;background:linear-gradient(135deg,#e8d8b8,#d0c090);display:flex;align-items:center;justify-content:center;font-size:2rem;}
    .gallery-footer{display:flex;flex-direction:column;align-items:center;gap:8px;padding:14px 16px 16px;background:#fdf6e7;border-radius:0 0 20px 20px;}
    .gallery-label{font-size:.88rem;font-weight:700;color:#3d5a1a;line-height:1.4;text-align:center;}
    .gallery-heart{color:#ccc;font-size:1.15rem;cursor:pointer;transition:all .3s;}
    .gallery-swiper .swiper-slide-active .gallery-heart{color:#3d5a1a;}

    .gallery-custom-dots{display:flex;justify-content:center;gap:8px;padding:14px 0 0;}
    .gcd{width:9px;height:9px;border-radius:50%;background:#bbb;opacity:.6;border:none;cursor:pointer;padding:0;transition:all .2s;}
    .gcd.active{background:#3d5a1a;opacity:1;transform:scale(1.25);}

    @media(max-width:991px){.gallery-section{padding:30px 0 50px;}.gallery-sec-title{font-size:1.4rem;}}
    @media(max-width:575px){.gallery-section{padding:20px 0 36px;margin-top:-20px;}.gallery-sec-title{font-size:1.1rem;line-height:1.3;}.gallery-sec-sub{font-size:.74rem;margin-bottom:24px;}.gallery-custom-dots{padding:10px 0 0;}.gcd{width:8px;height:8px;}}
</style>

<h2 class="gallery-sec-title">
    <span class="sec-title-icon">✦</span>
    Every Expression, Wrapped in Comfort
    <span class="sec-title-icon">✦</span>
</h2>
<p class="gallery-sec-sub">From giggles to tiny yawns, we've got comfort covered.</p>

<div class="position-relative">
    <div class="swiper gallery-swiper">
        <div class="swiper-wrapper">
            @php
            $gallery = [
                ['img' => 'smile baby.webp',   'label' => 'Cute & Adorable',  'face' => '😊'],
                ['img' => 'split_baby_1.webp', 'label' => 'Kindness & Care',  'face' => '🥰'],
                ['img' => 'split_baby_2.webp', 'label' => 'Active & Playful', 'face' => '😄'],
                ['img' => 'cry baby.webp',     'label' => 'Baby Cry Relief',  'face' => '😢'],
                ['img' => 'split_baby_4.webp', 'label' => 'Sad No More',      'face' => '😔'],
                ['img' => 'image-5.webp',      'label' => 'Peaceful Feeling', 'face' => '😌'],
                ['img' => 'split_baby_3.jpeg',      'label' => 'Pure & Gentle',    'face' => '😇'],
            ];
            @endphp
            @foreach($gallery as $g)
            <div class="swiper-slide">
                <div class="gallery-card">
                    <div class="gallery-icon-badge"><img src="{{ asset('images/baby_paw.webp') }}" alt="paw"></div>
                    <div class="gallery-img-wrap">
                        <img class="gallery-img" src="{{ asset('images/'.$g['img']) }}" alt="{{ $g['label'] }}"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div class="gallery-img-ph" style="display:none;">👶</div>
                    </div>
                    <div class="gallery-footer">
                        <span class="gallery-label">{{ $g['label'] }}</span>
                        <i class="far fa-heart gallery-heart"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="gallery-custom-dots">
        <button class="gcd active" data-idx="0" aria-label="Slide 1"></button>
        <button class="gcd" data-idx="1" aria-label="Slide 2"></button>
        <button class="gcd" data-idx="2" aria-label="Slide 3"></button>
        <button class="gcd" data-idx="3" aria-label="Slide 4"></button>
        <button class="gcd" data-idx="4" aria-label="Slide 5"></button>
        <button class="gcd" data-idx="5" aria-label="Slide 6"></button>
        <button class="gcd" data-idx="6" aria-label="Slide 7"></button>
    </div>
</div>
</section>
