<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumi9 - Made with love, for your little one.</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- Preload hero banner so it renders before anything else -->
    <link rel="preload" as="image" href="{{ asset('images/hero_banner_work.png') }}">
   {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">
    <style>
        :root {
            --green-dark:   #3a5c1e;
            --green-mid:    #4e7a28;
            --green-sage:   #8aac6e;
            --green-light:  #c4d9a8;
            --green-pale:   #e6f2d4;
            --cream:        #f6f1e2;
            --cream-mid:    #ede8d6;
            --text-dark:    #2a3d18;
            --text-muted:   #6b7c5a;
        }

        * { font-family:'Nunito',sans-serif; box-sizing: border-box; margin: 0; padding: 0; }
        body { overflow-x: hidden; background: #fff; }
        a { text-decoration: none; }

        /* ============================================================
           NAVBAR
        ============================================================ */
        .lumi-navbar {
            background: var(--green-dark);
            padding: 13px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 12px rgba(0,0,0,0.18);
        }

        .lumi-logo-wrap { display: flex; flex-direction: column; line-height: 1; }
        .lumi-logo-name { color: #fff; font-size: 1.75rem; font-weight: 800; letter-spacing: -1px; }
        .lumi-logo-name span { color: #ff8fa8; }
        .lumi-logo-sub  { color: rgba(255,255,255,.6); font-size: .58rem; letter-spacing: .03em; }

        .lumi-nav-links { display: flex; gap: 36px; list-style: none; }
        .lumi-nav-links a { color: rgba(255,255,255,.82); font-size: .88rem; transition: color .2s; }
        .lumi-nav-links a:hover { color: #fff; }
        .lumi-nav-links a.active { color: #fff; font-weight: 600; border-bottom: 2px solid #fff; padding-bottom: 2px; }

        .lumi-nav-icons { display: flex; gap: 20px; }
        .lumi-nav-icons a { color: #fff; font-size: 1rem; transition: opacity .2s; }
        .lumi-nav-icons a:hover { opacity: .75; }

        /* Hero CSS → hero/hero.blade.php */

        /* ============================================================
           FEATURES STRIP
        ============================================================ */
        .features-strip {
            background: #f5eac3;
            padding: 30px 50px 55px;
        }

        .feat-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 15px;
            text-align: left;
            position: relative;
            flex: 1;
            justify-content: center;
            padding: 8px 0;
        }
        .feat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 8%;
            width: 3%;
            background: #b5c47a;
        }

        .feat-icon-wrap {
            width: 48px; height: 48px;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #6d7e2d;
            flex-shrink: 0;
        }

        .feat-label { font-size: .95rem; font-weight: 700; color: #6d7e2d; line-height: 1.3; }

        /* ============================================================
           WHY SECTION
        ============================================================ */
        .why-section {
            background: #fdf6e6;
            padding: 65px 60px;
            position: relative;
            overflow: hidden;
        }

        .sec-title {
            font-size: 1.9rem;
            font-weight: 800px;
            color:#6d7e2d;
            text-align: center;
            margin-bottom: 1.4%;
        }
        .sec-title-icon { margin: 0 8px; }

        .why-feat { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 24px; }
        .why-feat.reverse { flex-direction: row-reverse; text-align: right; }

        .why-icon {
            width: 42px; height: 42px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .95rem;
            color: var(--green-dark);
            flex-shrink: 0;
        }

        .why-feat-title { font-size: .88rem; font-weight: 700; color: var(--text-dark); margin-bottom: 3px; }
        .why-feat-desc  { font-size: .74rem; color: #3a5020; line-height: 1.5; }

        .why-center-img {
            width: 210px; height: 210px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ddecc8, #c8dca8);
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid #fff;
            margin: 0 auto;
            overflow: hidden;
        }
        .why-center-img img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }

        .why-sleeping-img {
            width: 150px; height: 100px;
            border-radius: 12px;
            background: linear-gradient(135deg, #e8d8b8, #d8c898);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 22px;
            overflow: hidden;
        }
        .why-sleeping-img img { width: 100%; height: 100%; object-fit: cover; border-radius: 12px; }

        .mascot-wrap {
            width: 110px;
            height: 130px;
            background: linear-gradient(135deg, #b0d870, #82bc44);
            border-radius: 50% 50% 44% 44%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.2rem;
            box-shadow: 0 8px 24px rgba(100,160,50,.3);
        }

        /* ============================================================
           ULTRA SOFT COMFORT SECTION
        ============================================================ */
        .comfort-section{
            position:relative;
            background:#f5eac3;
            overflow:hidden;
            width:100%;
            padding: 100px 80px 0;
        }
        .comfort-top-wave{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:40%;
            z-index:2;
            pointer-events:none;
        }
        .comfort-top-wave svg{
            width:100%;
            height:80%;
        }
        .comfort-bottom-wave{
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            height:50%;
            z-index:1;
        }
        .comfort-bottom-wave svg{
            width:100%;
            height:100%;
        }
        .comfort-inner{
            position:relative;
            z-index:5;
        }
        .comfort-baby-abs{
            position:absolute;
            top:5px;
            right:-1%;
            width:230px;
            z-index:2;
        }
        .comfort-baby-img{
            width:170%;
            margin-left:-155%;
            margin-top:-13%;
            display:block;
        }
        .comfort-heading{
            font-family:'Nunito',sans-serif;
            font-size:46px;
            font-style:bold;
            font-weight:800;
            line-height:.95;
            color:#6d7e2d;
            padding-top:-6%;
            margin-bottom:1.5%;
            margin-left:5%;
        }
        .comfort-desc{
            max-width:560px;
            font-size:15px;
            font-family:'Nunito',sans-serif;
            color:#6d7e2d;
            line-height:1.5;
            padding-top:-5%;
            margin-bottom:4.5%;
            padding-bottom:1.5%;
            margin-left:5%;
        }
        .comfort-cards-row{
            display:flex;
            justify-content:center;
            align-items:stretch;
            gap:20px;
            flex-wrap:nowrap;
            margin-bottom:0;
            margin-top:-39px;
            position:relative;
            z-index:5;
        }
        .comfort-card{
            width:280px;
            height:220px;
            background:#FDF9F0;
            border-radius:24px;
            overflow:hidden;
            display:flex;
            border: 1.5px solid #8AA74B;
            box-shadow:0 6px 18px rgba(0,0,0,.08);
            transition: transform .3s ease, box-shadow .3s ease;
        }
        .comfort-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 32px rgba(255,255,255,0.85), 0 4px 14px rgba(0,0,0,0.1);
        }
        .comfort-card-photo{
            width:44%;
            position:relative;
            display:flex;
            justify-content:center;
            align-items:flex-end;
            overflow:hidden;
        }
        .comfort-card-img{
            width:120%;
            height:100%;
            object-fit:cover;
            object-position:center bottom;
        }
        .comfort-card-content{
            width:56%;
            padding:18px 18px 20px;
        }
        .comfort-card-icon{
            width:52px;
            height:52px;
            background:#819b44;
            border-radius:50%;
            color:#fff;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-left:auto;
            margin-bottom:12px;
        }
        .comfort-card-title{
            font-size:16px;
            font-weight:700;
            color:#244019;
            line-height:1.4;
        }
        .comfort-card-divider{
            width:55px;
            height:4px;
            border-radius:30px;
            background:#7fa54e;
            margin:10px 0;
        }
        .comfort-card-desc{
            font-size:14px;
            line-height:1.6;
            color:#777;
        }

        @media(max-width:1200px){ .comfort-cards-row{ flex-wrap:wrap; } .comfort-card{ width:300px; } }
        @media(max-width:991px){ .comfort-section{ padding: 60px 24px 0; } .comfort-baby-abs{ position:relative; right:auto; top:auto; width:160px; margin:0 auto 16px; } .comfort-heading{ font-size:36px; margin-left:0; text-align:center; } .comfort-desc{ margin-left:0; text-align:center; max-width:100%; } .comfort-cards-row{ flex-wrap:wrap; justify-content:center; } }
        @media(max-width:767px){ .comfort-section{ padding: 48px 16px 0; } .comfort-heading{ font-size:28px; } .comfort-desc{ font-size:13px; } .comfort-card{ width:100%; max-width:460px; } .comfort-cards-row{ margin-top: 0; gap:16px; } }
        @media(max-width:480px){ .comfort-section{ padding: 36px 12px 0; } .comfort-heading{ font-size:28px; } .comfort-desc{ font-size:14px; } .comfort-card{ height:auto; } .comfort-card-photo{ width:38%; } .comfort-card-content{ width:62%; padding:14px; } .comfort-card-icon{ width:40px; height:40px; font-size:.8rem; } .comfort-card-title{ font-size:14px; } .comfort-card-desc{ font-size:12px; } }

        /* ============================================================
           REVIEWS
        ============================================================ */
        .reviews-section {
            background: var(--cream-mid);
            padding: 65px 60px;
            position: relative;
        }
        .sec-subtitle { text-align: center; color: #ccdbbc; font-size: .82rem; margin-top: 4px; margin-bottom: 40px; }
        .review-card { background: #fff; border-radius: 14px; padding: 16px; box-shadow: 0 2px 14px rgba(0,0,0,.05); }
        .review-head { display: flex; align-items: center; gap: 10px; margin-bottom: 8px; }
        .review-avatar { width: 38px; height: 38px; border-radius: 50%; background: var(--green-light); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: var(--green-dark); flex-shrink: 0; overflow: hidden; }
        .review-avatar img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }
        .review-name  { font-size: .82rem; font-weight: 700; color: var(--text-dark); }
        .review-stars { color: #f5a623; font-size: .7rem; }
        .review-text  { font-size: .74rem; color: #777; line-height: 1.55; margin: 8px 0; }
        .verified     { font-size: .65rem; color: var(--green-mid); font-weight: 600; }
        .verified i   { margin-right: 4px; }
        .reviews-swiper .swiper-wrapper { padding-bottom: 45px; }

        /* ============================================================
           GALLERY
        ============================================================ */
        .gallery-section { background: #fff; padding: 65px 60px; position: relative; }
        .gallery-card { border-radius: 14px; overflow: hidden; box-shadow: 0 3px 14px rgba(0,0,0,.07); }
        .gallery-img { width: 100%; height: 200px; object-fit: cover; display: block; background: linear-gradient(135deg, #e8d8b8, #d8c898); }
        .gallery-img-ph { width: 100%; height: 200px; background: linear-gradient(135deg, #e8d8b8, #d0c090); display: flex; align-items: center; justify-content: center; font-size: 2.5rem; }
        .gallery-footer { display: flex; justify-content: space-between; align-items: center; padding: 12px 14px; background: #fff; }
        .gallery-label { font-size: .78rem; font-weight: 600; color: var(--text-dark); }
        .gallery-heart { color: #e8748a; font-size: 1.05rem; cursor: pointer; transition: transform .2s; }
        .gallery-heart:hover { transform: scale(1.25); }
        .gallery-swiper .swiper-wrapper { padding-bottom: 45px; }

        /* ============================================================
           JOURNEY
        ============================================================ */
        /* ── Journey / Product Showcase ── */
        .journey-section { background: var(--cream); padding: 70px 60px; }

        .journey-showcase {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 48px;
        }

        /* ── LEFT: paw selector ── */
        .journey-paw-selector {
            flex: 0 0 220px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 0;
        }

        /* each row = circle + label beside it */
        .j-paw-row {
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            cursor: pointer;
        }

        .j-paw-btn {
            width: 54px; height: 54px;
            background: #fff;
            border: 2.5px solid #c8d98a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all .3s ease;
            flex-shrink: 0;
            box-shadow: 0 3px 10px rgba(109,126,45,.13);
        }
        .j-paw-btn img.paw-thumb {
            width: 40px; height: 40px;
            object-fit: cover;
            border-radius: 50%;
        }
        .j-paw-row.active .j-paw-btn {
            border-color: #6d7e2d;
            box-shadow: 0 0 0 3px rgba(109,126,45,.2), 0 4px 16px rgba(109,126,45,.2);
            transform: scale(1.08);
        }
        .j-paw-row:hover .j-paw-btn { border-color: #6d7e2d; }

        /* label beside each paw */
        .j-paw-label {
            display: flex;
            flex-direction: column;
        }
        .j-paw-label-title {
            font-size: 1.1rem;
            font-weight: 800px;
            color: #3a5c1e;
            line-height: 1.3;
            transition: color .3s;
        }
        .j-paw-label-sub {
            font-size: 1rem;
            color: #6d7e2d;
            line-height: 1.4;
        }
        .j-paw-row.active .j-paw-label-title { color: #455e25; }

        /* paw trail between rows */
        .j-paw-trail {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            padding: 3px 0 3px 26px;
        }
        .j-paw-trail i {
            color: #b5c47a;
            font-size: .62rem;
            opacity: .8;
        }
        .j-paw-trail .trail-line {
            width: 2px;
            height: 6px;
            background: repeating-linear-gradient(to bottom, #b5c47a 0, #b5c47a 3px, transparent 3px, transparent 7px);
        }

        /* ── CENTER: switchable image ── */
        .j-img-frame {
            width: 400px;
            height: 400px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(0,0,0,.13);
            position: relative;
            background: #f0ead6;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .j-center-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            display: block;
            border-radius: 24px;
            opacity: 1;
            transform: translateY(0) scale(1);
            transition: opacity .45s cubic-bezier(.4,0,.2,1), transform .45s cubic-bezier(.4,0,.2,1);
            animation: floatDiaper 3.5s ease-in-out infinite;
        }
        @keyframes floatDiaper {
            0%, 100% { transform: translateY(0); }
            50%       { transform: translateY(-10px); }
        }
        .j-center-img.fade-out {
            opacity: 0;
            transform: scale(.93) translateY(8px);
            animation: none;
        }
        .j-center-caption {
            text-align: center;
            padding: 0 8px;
        }
        .j-center-caption-line1 {
            font-size: .92rem;
            font-weight: 800;
            color: #3a5c1e;
            line-height: 1.4;
        }
        .j-center-caption-line2 {
            font-size: .78rem;
            color: #8a9a70;
            line-height: 1.5;
            margin-top: 4px;
        }

        /* ── RIGHT: features ── */
        .journey-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 26px;
            justify-content: center;
        }
        .journey-right-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: #3a5c1e;
            border-left: 4px solid #6d7e2d;
            padding-left: 12px;
            margin-bottom: 4px;
        }
        .j-feat-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }
        .j-feat-icon {
            width: 46px; height: 46px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #6d7e2d;
            flex-shrink: 0;
            box-shadow: 0 2px 10px rgba(109,126,45,.14);
        }
        .j-feat-title { font-size: 1.05rem; font-weight: 700; color: var(--text-dark); margin-bottom: 3px; }
        .j-feat-desc  { font-size: .88rem; color: #8a9a70; line-height: 1.6; }

        @media (max-width: 991px) {
            .journey-showcase { flex-direction: column; gap: 28px; }
            .journey-paw-selector { flex-direction: row; }
            .j-paw-trail { flex-direction: row; }
            .j-paw-trail .trail-line { width: 10px; height: 2px; background: repeating-linear-gradient(to right, #b5c47a 0, #b5c47a 4px, transparent 4px, transparent 9px); }
            .journey-center-wrap { flex: unset; width: 100%; max-width: 380px; margin: 0 auto; }
        }

        /* ============================================================
           FOOTER
        ============================================================ */
        .lumi-footer { background: var(--green-dark); color: #fff; padding: 50px 60px 35px; }
        .footer-logo-name { font-size: 1.9rem; font-weight: 800; color: #fff; }
        .footer-logo-name span { color: #ff8fa8; }
        .footer-logo-sub  { color: rgba(255,255,255,.5); font-size: .65rem; margin-top: 3px; }
        .footer-col h6 { font-size: .85rem; font-weight: 700; color: rgba(255,255,255,.88); margin-bottom: 14px; }
        .footer-col a  { display: block; color: rgba(255,255,255,.55); font-size: .78rem; margin-bottom: 9px; transition: color .2s; }
        .footer-col a:hover { color: #fff; }
        .footer-copy { border-top: 1px solid rgba(255,255,255,.12); margin-top: 35px; padding-top: 18px; color: rgba(255,255,255,.4); font-size: .72rem; text-align: center; }

        /* ============================================================
           SWIPER OVERRIDES
        ============================================================ */
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--green-dark);
            background: #fff;
            width: 38px; height: 38px;
            border-radius: 50%;
            box-shadow: 0 3px 12px rgba(0,0,0,.12);
            top: 42%;
        }
        .swiper-button-next::after,
        .swiper-button-prev::after { font-size: 13px; font-weight: 800; }
        .swiper-pagination-bullet-active { background: var(--green-dark) !important; }

        /* ============================================================
           RESPONSIVE
        ============================================================ */
        @media (max-width: 991px) {
            .lumi-navbar  { padding: 12px 20px; }
            .lumi-nav-links { gap: 18px; }
            .why-section, .reviews-section,
            .gallery-section, .journey-section, .lumi-footer,
            .features-strip { padding-left: 20px; padding-right: 20px; }
            .hero-diaper-gif { width: 38%; bottom: 10%; }
        }

        @media (max-width: 767px) {
            .lumi-nav-links { display: none; }
            .hero-diaper-gif { width: 42%; bottom: 8%; }
        }

        @media (max-width: 480px) {
            .hero-diaper-gif { width: 46%; bottom: 6%; }
        }
    </style>
</head>
<body>

<!-- ================================================================
     NAVBAR
================================================================ -->
<nav class="lumi-navbar">
    <div class="lumi-logo-wrap">
        <span class="lumi-logo-name">lumi<span>9</span></span>
        <span class="lumi-logo-sub">Made with love, for your little one.</span>
    </div>

    <ul class="lumi-nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="lumi-nav-icons">
        <a href="#" title="Cart"><i class="fas fa-shopping-bag"></i></a>
        <a href="#" title="Account"><i class="fas fa-user"></i></a>
        <a href="#" title="Search"><i class="fas fa-search"></i></a>
    </div>
</nav>


{{-- ================================================================
     HERO SECTION
================================================================ --}}
@include('hero.hero')


<!-- ================================================================
     FEATURES STRIP
================================================================ -->
<section class="features-strip">
    <div class="d-flex justify-content-around align-items-center flex-wrap w-100">

        <div class="feat-item">
            <div class="feat-icon-wrap"><i class="fas fa-cloud"></i></div>
            <div class="feat-label">Cloud-Soft<br>Comfort</div>
        </div>

        <div class="feat-item">
            <div class="feat-icon-wrap"><i class="fas fa-tint"></i></div>
            <div class="feat-label">Up to 12hrs<br>Absorption</div>
        </div>

        <div class="feat-item">
            <div class="feat-icon-wrap"><i class="fas fa-shield-alt"></i></div>
            <div class="feat-label">Leakage<br>Protection</div>
        </div>

        <div class="feat-item">
            <div class="feat-icon-wrap"><i class="fas fa-wind"></i></div>
            <div class="feat-label">Breathable<br>&amp; Airy</div>
        </div>

        <div class="feat-item">
            <div class="feat-icon-wrap"><i class="fas fa-leaf"></i></div>
            <div class="feat-label">Eco Friendly<br>Materials</div>
        </div>

    </div>
</section>


<section class="comfort-section">

    <div class="comfort-top-wave">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path d="M0,35 C180,5 320,10 460,25 C620,42 760,40 900,18 C1080,-5 1220,8 1360,30 C1400,36 1440,28 1440,28 L1440,0 L0,0 Z" fill="#fdf6e6" stroke="none"/>
            <path d="M0,35 C180,5 320,10 460,25 C620,42 760,40 900,18 C1080,-5 1220,8 1360,30 C1400,36 1440,28 1440,28" fill="none" stroke="#beaf81" stroke-width="1" stroke-linecap="round"/>
        </svg>
    </div>

    <div class="comfort-baby-abs">
        <img src="{{ asset('images/baby-dark.png') }}" class="comfort-baby-img" alt="">
    </div>

    <div class="comfort-inner">

        <h2 class="comfort-heading">Ultra Soft<br>Comfort</h2>
        <p class="comfort-desc">From playful mornings to peaceful nights,<br> ensuring dryness, freedom of movement, and lasting comfort.</p>

        <div class="comfort-cards-row">

            <div class="comfort-card">
                <div class="comfort-card-photo" style="background:#FDF9F0;"><img src="{{ asset('images/split_baby_1.png') }}" class="comfort-card-img"></div>
                <div class="comfort-card-content"><div class="comfort-card-icon"><i class="fas fa-leaf"></i></div><div class="comfort-card-title">Ultra Soft Comfort</div><div class="comfort-card-divider"></div><div class="comfort-card-desc">Cloud-soft feel for delicate baby skin.</div></div>
            </div>

            <div class="comfort-card">
                <div class="comfort-card-photo" style="background:#FDF9F0;"><img src="{{ asset('images/split_baby_2.png') }}" class="comfort-card-img"></div>
                <div class="comfort-card-content"><div class="comfort-card-icon"><i class="fas fa-shield-alt"></i></div><div class="comfort-card-title">Leakage Protection</div><div class="comfort-card-divider"></div><div class="comfort-card-desc">Up to 12 hours of dryness.</div></div>
            </div>

            <div class="comfort-card">
                <div class="comfort-card-photo" style="background:#FDF9F0;"><img src="{{ asset('images/split_baby_3.png') }}" class="comfort-card-img" style="object-position:center 100%; transform:translateY(30px);"></div>
                <div class="comfort-card-content"><div class="comfort-card-icon"><i class="fas fa-heart"></i></div><div class="comfort-card-title">Gentle &amp; Safe</div><div class="comfort-card-divider"></div><div class="comfort-card-desc">Made with skin-friendly materials.</div></div>
            </div>

            <div class="comfort-card">
                <div class="comfort-card-photo" style="background:#FDF9F0;"><img src="{{ asset('images/split_baby_4.png') }}" class="comfort-card-img" style="object-position:left bottom;"></div>
                <div class="comfort-card-content"><div class="comfort-card-icon"><i class="fas fa-recycle"></i></div><div class="comfort-card-title">Eco Conscious</div><div class="comfort-card-divider"></div><div class="comfort-card-desc">Thoughtful for babies and the planet.</div></div>
            </div>

        </div>

    </div>

    <div class="comfort-bottom-wave">
        <svg viewBox="0 0 1440 260" preserveAspectRatio="none">
            <path d="M0,180 C170,240 300,190 500,180 C780,185 980,120 1180,125 C1320,130 1390,150 1440,165 L1440,260 L0,260 Z" fill="white" stroke="none"/>
            <path d="M0,180 C170,240 300,190 500,180 C780,185 980,120 1180,125 C1320,130 1390,150 1440,165" fill="none" stroke="#beaf81" stroke-width="2"/>
        </svg>
    </div>

</section>


<!-- ================================================================
     A JOURNEY OF CARE
================================================================ -->
<section class="journey-section">
    <h2 class="sec-title">
    <b> <span class="sec-title-icon">🌿</span>
        A Journey of Care, Innovation & Trust
        <span class="sec-title-icon">🌿</span></b>
    </h2>
    <p class="sec-subtitle">Every detail crafted to keep your baby happy, healthy &amp; comfortable.</p>

    <div class="journey-showcase mt-5">

        {{-- LEFT: Paw selector rows (5) — Lumi9 Diaper first --}}
        <div class="journey-paw-selector">

            <div class="j-paw-row active" onclick="switchJourneyImg('diaper', this)">
                <button class="j-paw-btn">
                    <img class="paw-thumb" src="{{ asset('images/Diaper new.png') }}" alt="Diaper">
                </button>
                <div class="j-paw-label">
                    <div class="j-paw-label-title"><b>Lumi9 Diaper</b></div>
                    <div class="j-paw-label-sub"><b>Premium quality &amp; fit</b></div>
                </div>
            </div>

            <div class="j-paw-trail">
                <div class="trail-line"></div>
                <i class="fas fa-paw"></i>
                <div class="trail-line"></div>
            </div>

            <div class="j-paw-row" onclick="switchJourneyImg('baby', this)">
                <button class="j-paw-btn">
                    <img class="paw-thumb" src="{{ asset('images/baby_wear_diaper.png') }}" alt="Baby">
                </button>
                <div class="j-paw-label">
                    <div class="j-paw-label-title"><b>Freedom to Play</b></div>
                    <div class="j-paw-label-sub"><b>Active fit, happy baby</b></div>
                </div>
            </div>

            <div class="j-paw-trail">
                <div class="trail-line"></div>
                <i class="fas fa-paw"></i>
                <div class="trail-line"></div>
            </div>

            <div class="j-paw-row" onclick="switchJourneyImg('mom', this)">
                <button class="j-paw-btn">
                    <img class="paw-thumb" src="{{ asset('images/mon_care_baby.png') }}" alt="Mom Care">
                </button>
                <div class="j-paw-label">
                    <div class="j-paw-label-title"><b>Mom's Gentle Care</b></div>
                    <div class="j-paw-label-sub"><b>Soft, safe &amp; effortless</b></div>
                </div>
            </div>

            <div class="j-paw-trail">
                <div class="trail-line"></div>
                <i class="fas fa-paw"></i>
                <div class="trail-line"></div>
            </div>

            <div class="j-paw-row" onclick="switchJourneyImg('sleep', this)">
                <button class="j-paw-btn">
                    <img class="paw-thumb" src="{{ asset('images/sleep_baby.png') }}" alt="Sleep Baby">
                </button>
                <div class="j-paw-label">
                    <div class="j-paw-label-title"><b>Peaceful Sleep</b></div>
                    <div class="j-paw-label-sub"><b>Dry &amp; cozy all night</b></div>
                </div>
            </div>

            <div class="j-paw-trail">
                <div class="trail-line"></div>
                <i class="fas fa-paw"></i>
                <div class="trail-line"></div>
            </div>

            <div class="j-paw-row" onclick="switchJourneyImg('features', this)">
                <button class="j-paw-btn">
                    <img class="paw-thumb" src="{{ asset('images/diaper_features.png') }}" alt="Diaper Features">
                </button>
                <div class="j-paw-label">
                    <div class="j-paw-label-title"><b>Diaper Features</b></div>
                    <div class="j-paw-label-sub"><b>Built for every moment</b></div>
                </div>
            </div>

        </div>

        {{-- CENTER: Switchable image --}}
        <div class="journey-center-wrap">
            <div class="j-img-frame">
                <img id="journeyCenterImg"
                     class="j-center-img"
                     src="{{ asset('images/Diaper new.png') }}"
                     alt="Lumi9 Diaper">
            </div>
        </div>

        {{-- RIGHT: Dynamic features --}}
        <div class="journey-right" id="journeyRightPanel">

            <div class="journey-right-title" id="journeyRightTitle">Why Lumi9 Stands Out</div>

            <div class="j-feat-item">
                <div class="j-feat-icon"><i id="jfi1" class="fas fa-award"></i></div>
                <div>
                    <div class="j-feat-title" id="jft1">Premium Quality</div>
                    <div class="j-feat-desc"  id="jfd1">Every Lumi9 diaper is crafted to the highest standards — because your baby deserves nothing but the best.</div>
                </div>
            </div>

            <div class="j-feat-item">
                <div class="j-feat-icon"><i id="jfi2" class="fas fa-tint"></i></div>
                <div>
                    <div class="j-feat-title" id="jft2">Instant Wetness Lock</div>
                    <div class="j-feat-desc"  id="jfd2">Super-absorbent core pulls moisture away instantly and locks it in — keeping the surface dry and comfortable.</div>
                </div>
            </div>

            <div class="j-feat-item">
                <div class="j-feat-icon"><i id="jfi3" class="fas fa-expand-alt"></i></div>
                <div>
                    <div class="j-feat-title" id="jft3">Stretchy Waistband</div>
                    <div class="j-feat-desc"  id="jfd3">360° stretchy waistband adapts to every move — sitting, crawling, rolling — without leaving marks.</div>
                </div>
            </div>

            <div class="j-feat-item">
                <div class="j-feat-icon"><i id="jfi4" class="fas fa-star"></i></div>
                <div>
                    <div class="j-feat-title" id="jft4">Dermatologically Approved</div>
                    <div class="j-feat-desc"  id="jfd4">Tested and approved by dermatologists — safe for sensitive, delicate newborn skin.</div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ================================================================
     FOOTER
================================================================ -->
<footer class="lumi-footer">
    <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
            <div class="footer-logo-name">lumi<span>9</span></div>
            <div class="footer-logo-sub">Made with love, for your little one.</div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Shop</h6>
            <a href="#">New Born</a>
            <a href="#">Infant</a>
            <a href="#">Toddler</a>
            <a href="#">Baby Wipes</a>
        </div>

        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>About Us</h6>
            <a href="#">Our Story</a>
            <a href="#">Mission</a>
            <a href="#">Sustainability</a>
            <a href="#">Careers</a>
        </div>

        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Help</h6>
            <a href="#">FAQs</a>
            <a href="#">Returns</a>
            <a href="#">Shipping Info</a>
            <a href="#">Size Guide</a>
        </div>

        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Contact</h6>
            <a href="#">Email Us</a>
            <a href="#">WhatsApp</a>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
        </div>

    </div>

    <div class="footer-copy">
        &copy; {{ date('Y') }} Lumi9. All rights reserved. Made with ♥ for little ones.
    </div>
</footer>


<!-- ================================================================
     SCRIPTS
================================================================ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    /* Reviews carousel */
    new Swiper('.reviews-swiper', {
        slidesPerView: 5, spaceBetween: 14, loop: true,
        navigation: { nextEl: '.reviews-next', prevEl: '.reviews-prev' },
        pagination: { el: '.reviews-pagination', clickable: true },
        breakpoints: { 0:{slidesPerView:1,spaceBetween:10}, 480:{slidesPerView:2,spaceBetween:12}, 768:{slidesPerView:3,spaceBetween:13}, 1024:{slidesPerView:4,spaceBetween:14}, 1280:{slidesPerView:5,spaceBetween:14} }
    });

    /* Gallery carousel */
    new Swiper('.gallery-swiper', {
        slidesPerView: 5, spaceBetween: 14, loop: true,
        navigation: { nextEl: '.gallery-next', prevEl: '.gallery-prev' },
        pagination: { el: '.gallery-pagination', clickable: true },
        breakpoints: { 0:{slidesPerView:1,spaceBetween:10}, 480:{slidesPerView:2,spaceBetween:12}, 768:{slidesPerView:3,spaceBetween:13}, 1024:{slidesPerView:4,spaceBetween:14}, 1280:{slidesPerView:5,spaceBetween:14} }
    });

    /* Heart toggle */
    document.querySelectorAll('.gallery-heart').forEach(heart => {
        heart.addEventListener('click', () => {
            heart.classList.toggle('fas');
            heart.classList.toggle('far');
        });
    });

    /* Hero JS → hero/hero.blade.php */

    /* Journey image switcher */
    const journeyData = {
        mom: {
            src:   '{{ asset("images/mon_care_baby.png") }}',
            title: "Mom's Care & Confidence",
            feats: [
                { icon:'fas fa-heart',      t:'Easy, Stress-Free Changes',  d:"Lumi9's simple tab-and-wrap design makes every diaper change quick, clean and worry-free for moms." },
                { icon:'fas fa-shield-alt', t:'Trusted for Sensitive Skin',  d:"Dermatologically tested and hypoallergenic — moms can trust Lumi9 to be gentle on their baby's skin." },
                { icon:'fas fa-leaf',       t:'Eco-Conscious Choice',        d:"Made with sustainable materials — moms who care about the planet can feel good about every Lumi9 diaper." },
                { icon:'fas fa-clock',      t:'More Time, Less Worry',       d:"With up to 12hrs protection, moms get more time to enjoy precious moments instead of worrying about leaks." }
            ]
        },
        sleep: {
            src:   '{{ asset("images/sleep_baby.png") }}',
            title: "Comfort Through the Night",
            feats: [
                { icon:'fas fa-moon',       t:'All-Night Dryness',          d:"The fast-absorbing core locks in wetness instantly — baby stays dry and comfortable for up to 12 hours." },
                { icon:'fas fa-feather-alt',t:'Feather-Light Softness',     d:"The ultra-soft inner layer feels like a gentle cloud — so light, baby won't even notice they're wearing it." },
                { icon:'fas fa-wind',       t:'Breathable & Airy',          d:"Micro-ventilation keeps air flowing all night, preventing heat build-up and keeping skin fresh." },
                { icon:'fas fa-expand-alt', t:'Snug, Flexible Fit',         d:"Stretchy waistband and soft cuffs stay perfectly in place — no shifting, no gaps, no leaks during sleep." }
            ]
        },
        features: {
            src:   '{{ asset("images/diaper_features.png") }}',
            title: "Features of Lumi9 Diaper",
            feats: [
                { icon:'fas fa-feather-alt',t:'Ultra-Soft Inner Layer',     d:"Hypoallergenic, skin-friendly fabric — gentle on the most delicate newborn skin." },
                { icon:'fas fa-tint',       t:'Up to 12hrs Absorption',     d:"Fast-lock core absorbs wetness instantly and keeps baby dry all day and overnight." },
                { icon:'fas fa-shield-alt', t:'360° Leakage Guard',         d:"Double-barrier leg cuffs and snug waistband prevent leaks from every angle." },
                { icon:'fas fa-wind',       t:'Breathable & Rash-Free',     d:"Micro-ventilation keeps airflow going — preventing heat, rashes and discomfort." }
            ]
        },
        diaper: {
            src:   '{{ asset("images/Diaper new.png") }}',
            title: "Why Lumi9 Stands Out",
            feats: [
                { icon:'fas fa-award',      t:'Premium Quality',            d:"Every Lumi9 diaper is crafted to the highest standards — because your baby deserves nothing but the best." },
                { icon:'fas fa-tint',       t:'Instant Wetness Lock',       d:"Super-absorbent core pulls moisture away instantly and locks it in — keeping the surface dry and comfortable." },
                { icon:'fas fa-expand-alt', t:'Stretchy Waistband',         d:"360° stretchy waistband adapts to every move — sitting, crawling, rolling — without leaving marks." },
                { icon:'fas fa-star',       t:'Dermatologically Approved',  d:"Tested and approved by dermatologists — safe for sensitive, delicate newborn skin." }
            ]
        },
        baby: {
            src:   '{{ asset("images/baby_wear_diaper.png") }}',
            title: "Happy Baby, Every Day",
            feats: [
                { icon:'fas fa-child',      t:'Active-Fit Design',          d:"Contoured shape and stretchy sides move naturally with baby — perfect for crawling, walking and everything in between." },
                { icon:'fas fa-sun',        t:'Dry & Fresh All Day',        d:"Advanced absorption keeps baby dry and comfortable from morning playtime all the way through afternoon naps." },
                { icon:'fas fa-laugh-beam', t:'No Rashes, No Fuss',         d:"Soft, breathable materials keep skin cool and rash-free — so baby stays happy and comfortable all day long." },
                { icon:'fas fa-lock',       t:'Leak-Proof at Every Angle',  d:"Snug leg cuffs and secure waistband seal in everything — no leaks during playtime, tummy time or on the go." }
            ]
        }
    };

    function switchJourneyImg(type, btn) {
        const img   = document.getElementById('journeyCenterImg');
        const title = document.getElementById('journeyRightTitle');
        const data  = journeyData[type];

        img.classList.add('fade-out');
        setTimeout(() => {
            img.src = data.src;
            title.innerHTML = data.title;
            data.feats.slice(0,4).forEach((f, i) => {
                const n = i + 1;
                document.getElementById('jfi'+n).className = f.icon;
                document.getElementById('jft'+n).textContent = f.t;
                document.getElementById('jfd'+n).textContent = f.d;
            });
            img.classList.remove('fade-out');
        }, 350);

        document.querySelectorAll('.j-paw-row').forEach(r => r.classList.remove('active'));
        btn.classList.add('active');
    }

    /* Defer GIF → hero/hero.blade.php */
</script>

</body>
</html>