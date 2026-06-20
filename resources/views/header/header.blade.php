<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>Lumi9 - Made with love, for your little one.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,500&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
        :root{--green-dark:#3a5c1e;--green-mid:#4e7a28;--green-sage:#8aac6e;--green-light:#c4d9a8;--green-pale:#e6f2d4;--cream:#f6f1e2;--cream-mid:#ede8d6;--text-dark:#2a3d18;--text-muted:#6b7c5a;}
        *{box-sizing:border-box;margin:0;padding:0;}
        body{font-family:'Poppins',sans-serif;overflow-x:hidden;background:#fdf6e7;}
        a{text-decoration:none;}
        /* Header */
        .lumi-header{background-color:#8aa74b;}
        .lumi-logo{display:flex;text-decoration:none;padding:0;flex-shrink:0;align-self:center;}
        .lumi-logo img{height:54px;width:auto;display:block;}
        .lumi-navbar{align-items:center;min-height:76px;}
        .lumi-navbar .navbar-collapse{align-items:center;}
        .lumi-navbar .nav-link{color:#e8f090!important;font-size:14px;font-weight:700;padding:6px 16px!important;border-bottom:2px solid transparent;transition:color .2s,border-color .2s;white-space:nowrap;}
        .lumi-navbar .nav-link:hover,.lumi-navbar .nav-link.active{color:#fff!important;border-bottom-color:#fff;}
        .lumi-icons{display:flex;align-items:center;gap:20px;align-self:center;}
        .lumi-icon-btn{color:#e8f090;text-decoration:none;display:flex;align-items:center;background:none;border:none;padding:0;cursor:pointer;transition:color .2s,transform .15s;}
        .lumi-icon-btn:hover{color:#fff;transform:scale(1.12);}
        .lumi-toggler{border:1.5px solid rgba(232,240,144,.4)!important;border-radius:6px;padding:5px 9px;}
        .lumi-toggler .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(232,240,144,1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")!important;}
        @media(max-width:991.98px){
            .lumi-navbar .navbar-collapse{background-color:#6e8840;border-radius:0 0 14px 14px;padding:4px 20px 18px;}
            .lumi-navbar .nav-link{padding:12px 4px!important;border-bottom:1px solid rgba(255,255,255,.1)!important;}
            .lumi-navbar .navbar-nav .nav-item:last-child .nav-link{border-bottom:none!important;}
            .lumi-icons{border-top:1px solid rgba(255,255,255,.1);padding-top:14px;margin-top:6px;}
        }
        .lumi-search-wrap{background-color:#6e8840;max-height:0;overflow:hidden;transition:max-height .3s ease;}
        .lumi-search-wrap.open{max-height:60px;}
        .lumi-search-form{display:flex;align-items:center;gap:10px;max-width:540px;width:calc(100% - 48px);margin:9px auto;padding:8px 20px;background:rgba(255,255,255,.13);border-radius:50px;}
        .lumi-search-input{flex:1;background:none;border:none;outline:none;color:#fff;font-size:14px;font-family:'Nunito',sans-serif;}
        .lumi-search-input::placeholder{color:#b0c850;}
        .lumi-search-submit{background:none;border:none;cursor:pointer;color:#e8f090;display:flex;align-items:center;padding:0;flex-shrink:0;}
        .lumi-wave{display:block;background-color:#8aa74b;line-height:0;margin:0;padding:0;}
        .lumi-wave svg{display:block;width:100%;height:20px;}
        /* Swiper overrides */
        .swiper-button-next,.swiper-button-prev{color:#fff;background:#8aa74b;width:38px;height:38px;border-radius:50%;box-shadow:0 3px 12px rgba(138,167,75,0.35);top:42%;}
        .swiper-button-next:hover,.swiper-button-prev:hover{background:#607919;}
        .swiper-button-next::after,.swiper-button-prev::after{font-size:13px;font-weight:800;}
        .swiper-pagination-bullet{background:#8aa74b;opacity:.4;}
        .swiper-pagination-bullet-active{background:#3d5a1a!important;opacity:1;}
        /* Banner */
        .banner-section{position:relative;width:100%;line-height:0;overflow:hidden;}
        .banner-img{width:100%;height:auto;display:block;object-fit:cover;max-height:600px;}
        .banner-diaper-img{position:absolute;right:8%;bottom:10%;width:28%;max-width:340px;height:auto;object-fit:contain;filter:drop-shadow(0 8px 24px rgba(0,0,0,0.22));pointer-events:none;}
        @media(max-width:767px){.banner-img{max-height:220px;}.banner-diaper-img{width:36%;right:4%;bottom:6%;}}
        @media(max-width:480px){.banner-img{max-height:180px;}.banner-diaper-img{width:40%;right:2%;bottom:4%;}}
        @media(min-width:768px) and (max-width:991px){.banner-img{max-height:380px;}.banner-diaper-img{width:30%;right:6%;bottom:8%;}}
        /* Features strip */
        .features-strip{background:#fdf6e7;padding:28px 60px;border-bottom:none;}
        .feat-item{display:flex;flex-direction:column;align-items:center;gap:10px;text-align:center;}
        .feat-icon-wrap{width:52px;height:52px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--green-dark);}
        .feat-label{font-size:.74rem;font-weight:600;color:var(--text-dark);line-height:1.35;}
        @media(max-width:991px){.features-strip{padding:28px 20px;}}
        @media(max-width:575px){.features-strip{padding:20px 12px;}.feat-icon-wrap{width:42px;height:42px;font-size:1rem;}.feat-label{font-size:.68rem;}}
    </style>
</head>
<body>
<header class="lumi-header">
    <nav class="navbar navbar-expand-lg lumi-navbar px-4 px-lg-5 py-0">
        <div class="container-fluid p-0">
            <a class="lumi-logo me-3" href="{{ url('/') }}">
                <img src="{{ asset('images/logo(1).png') }}" alt="Lumi9 Logo">
            </a>
            <button class="navbar-toggler lumi-toggler ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#lumiNavMenu"
                    aria-controls="lumiNavMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="lumiNavMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/shop') }}" class="nav-link {{ request()->is('shop*') ? 'active' : '' }}">Shop</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a></li>
                </ul>
                <div class="lumi-icons">
                    <a class="lumi-icon-btn" href="{{ url('/cart') }}" aria-label="Cart">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                    </a>
                    <a class="lumi-icon-btn" href="{{ url('/account') }}" aria-label="Account">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </a>
                    <button class="lumi-icon-btn" id="lumiSearchBtn" aria-label="Search">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="lumi-search-wrap" id="lumiSearchWrap">
        <form action="{{ url('/search') }}" method="GET" class="lumi-search-form">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#b0c850" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input class="lumi-search-input" type="text" name="q" placeholder="Search products..." autocomplete="off" value="{{ request('q') }}">
            <button class="lumi-search-submit" type="submit"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
        </form>
    </div>
    <div class="lumi-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path fill="#fdf6e7" d="M0,60 L40,8 Q80,65 120,8 Q160,65 200,8 Q240,65 280,8 Q320,65 360,8 Q400,65 440,8 Q480,65 520,8 Q560,65 600,8 Q640,65 680,8 Q720,65 760,8 Q800,65 840,8 Q880,65 920,8 Q960,65 1000,8 Q1040,65 1080,8 Q1120,65 1160,8 Q1200,65 1240,8 Q1280,65 1320,8 Q1360,65 1400,8 L1440,60 Z"/>
        </svg>
    </div>
</header>

@include('features.features')
@include('babies.babies')
@include('comfort.comfort')
@include('feedback.parents')
@include('instagram.instagram')
@include('journey.journey')
@include('footer.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
/* Gallery Swiper — init on load so layout is stable before width measurement */
window.addEventListener('load',function(){
    var galSwiper=new Swiper('.gallery-swiper',{
        slidesPerView:5,centeredSlides:true,spaceBetween:12,loop:true,
        allowTouchMove:false,grabCursor:true,
        breakpoints:{0:{slidesPerView:1.2,spaceBetween:10},480:{slidesPerView:2.2,spaceBetween:12},768:{slidesPerView:5,spaceBetween:12}}
    });
    (function(){
        var dots=document.querySelectorAll('.gcd');
        function setDot(i){
            dots.forEach(function(d,j){d.classList.toggle('active',j===i%7);});
            document.querySelectorAll('.gallery-heart').forEach(function(h){h.classList.replace('fas','far');h.style.color='';});
            var active=document.querySelector('.swiper-slide-active .gallery-heart');
            if(active){active.classList.replace('far','fas');active.style.color='#3d5a1a';}
        }
        galSwiper.on('realIndexChange',function(){setDot(galSwiper.realIndex);});
        dots.forEach(function(d){d.addEventListener('click',function(){galSwiper.slideToLoop(parseInt(this.getAttribute('data-idx')));});});
        galSwiper.on('click',function(){
            if(galSwiper.clickedIndex!==undefined){
                var realIdx=parseInt(galSwiper.slides[galSwiper.clickedIndex].getAttribute('data-swiper-slide-index'));
                if(!isNaN(realIdx))galSwiper.slideToLoop(realIdx);
            }
        });
    })();
    document.querySelectorAll('.gallery-heart').forEach(function(h){
        h.addEventListener('click',function(){
            h.classList.toggle('fas');h.classList.toggle('far');
            h.style.color=h.classList.contains('fas')?'#3d5a1a':'';
        });
    });
});
/* Search toggle */
(function(){
    var b=document.getElementById('lumiSearchBtn'),w=document.getElementById('lumiSearchWrap');
    if(!b||!w)return;
    b.addEventListener('click',function(){var o=w.classList.toggle('open');if(o){var i=w.querySelector('.lumi-search-input');if(i)setTimeout(function(){i.focus();},310);}});
    document.addEventListener('click',function(e){if(!w.contains(e.target)&&!b.contains(e.target))w.classList.remove('open');});
})();
</script>
</body>
</html>
