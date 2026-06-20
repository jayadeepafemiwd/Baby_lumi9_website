<section class="lumi-parents" aria-label="Loved by Parents">
<style>
    .lumi-parents{background:#fdf6e7;padding:65px 0 60px;font-family:'Nunito',sans-serif;position:relative;overflow:hidden;margin-top:-60px;}
    .lumi-parents-top-wave{position:absolute;top:0;left:0;width:100%;height:100px;z-index:2;pointer-events:none;}
    .lumi-parents-top-wave svg{width:100%;height:100%;display:block;}
    .lumi-parents-header{position:relative;z-index:10;margin-bottom:-22px;padding-bottom:10px;text-align:center;display:flex;flex-direction:column;align-items:center;background:#fdf6e7;width:fit-content;margin-left:auto;margin-right:auto;padding-left:32px;padding-right:32px;}
    .lumi-parents-title{font-weight:900;font-size:28px;color:#607919;text-align:center;margin-bottom:4px;display:inline-flex;align-items:center;justify-content:center;gap:10px;letter-spacing:-.3px;background:#fdf6e7;padding:0 20px;}
    .lumi-parents-sub{text-align:center;font-size:14px;color:#7a8a60;margin-bottom:0;display:inline-block;background:#fdf6e7;padding:0 14px;}
    .lumi-mq-area{position:relative;margin:0 50px;padding:26px 0 22px;border:1.5px dashed #8aa74b;border-radius:40px;background:#fdf6e7;isolation:isolate;}
    .lumi-baby-img{position:absolute;top:-80px;right:80px;width:155px;z-index:6;pointer-events:none;filter:drop-shadow(0 4px 12px rgba(96,121,25,0.12));}
    .lumi-flower-dot{position:absolute;left:0px;top:-18px;width:36px;z-index:6;pointer-events:none;}
    .lumi-mq-row{overflow:hidden;padding:6px 0;}
    .lumi-mq-row+.lumi-mq-row{margin-top:14px;}
    .lumi-mq-track{display:flex;gap:14px;width:max-content;}
    @keyframes lumi-mq-left{to{transform:translateX(-50%);}}
    @keyframes lumi-mq-right{from{transform:translateX(-50%);}to{transform:translateX(0);}}
    .lumi-mq-row-1 .lumi-mq-track{animation:lumi-mq-left 40s linear infinite;}
    .lumi-mq-row-2 .lumi-mq-track{animation:lumi-mq-right 44s linear infinite;}
    .lumi-mq-row:hover .lumi-mq-track{animation-play-state:paused;}
    .lumi-rev-card{width:360px;flex-shrink:0;background:#fdf6e7;border:1.5px solid #8aa74b;border-radius:16px;padding:12px 18px;display:flex;flex-direction:column;gap:8px;box-shadow:0 2px 10px rgba(138,167,75,0.15);min-height:110px;}
    .lumi-rv-top{display:flex;align-items:center;gap:12px;}
    .lumi-rv-av{width:52px;height:52px;min-width:52px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:19px;color:#fff;flex-shrink:0;}
    .lumi-rv-stars{color:#8aa74b;font-size:14px;line-height:1;margin-bottom:3px;letter-spacing:1px;}
    .lumi-rv-name{font-size:15px;font-weight:800;color:#3d5a1a;line-height:1.1;}
    .lumi-rv-text{font-size:13.5px;color:#6a7a50;line-height:1.6;flex:1;}
    .lumi-rv-badge{display:flex;align-items:center;gap:5px;font-size:12px;color:#7a9450;font-weight:700;}
    .lumi-mq-row-2 .lumi-rev-card{background:#fdf6e7;border-color:#7a9450;box-shadow:0 2px 10px rgba(223,207,169,0.25);}

    /* ── TABLET 576px – 991px ── */
    @media(max-width:991px){
        .lumi-mq-area{margin:0 20px;}
        .lumi-baby-img{width:120px;top:-65px;right:90px;}
        .lumi-parents-title{font-size:24px;gap:8px;}
    }

    /* ── MOBILE ≤575px ── */
    @media(max-width:575px){
        .lumi-parents{padding:50px 0 36px;}
        .lumi-parents-header{padding-left:14px;padding-right:14px;margin-bottom:-18px;}
        .lumi-parents-title{font-size:16px;gap:5px;letter-spacing:0;flex-wrap:wrap;justify-content:center;line-height:1.4;}
        .lumi-parents-sub{font-size:12px;}
        .lumi-mq-area{margin:0 10px;padding:18px 0 16px;border-radius:20px;}
        .lumi-baby-img{display:none;}
        .lumi-mq-row+.lumi-mq-row{margin-top:10px;}
        .lumi-rev-card{width:240px;min-height:118px;padding:14px 13px;gap:8px;}
        .lumi-rv-av{width:40px;height:40px;min-width:40px;font-size:15px;}
        .lumi-rv-name{font-size:13px;}
        .lumi-rv-text{font-size:12px;line-height:1.5;}
        .lumi-rv-stars{font-size:12px;}
        .lumi-rv-badge{font-size:11px;}
    }
</style>

<div class="lumi-parents-header">
    <h2 class="lumi-parents-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#8aa74b"><path d="M17 8C8 10 5.9 16.17 3.82 19.41L5.71 20l1-2.3A4.49 4.49 0 008 18c7 0 10-7.5 9-10z"/></svg>
        Loved by Parents, Trusted by Experts
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#8aa74b" style="transform:scaleX(-1)"><path d="M17 8C8 10 5.9 16.17 3.82 19.41L5.71 20l1-2.3A4.49 4.49 0 008 18c7 0 10-7.5 9-10z"/></svg>
    </h2>
    <p class="lumi-parents-sub">Real stories from real parents</p>
</div>

<div class="lumi-mq-area">
<img src="{{ asset('images/baby.png') }}" alt="Baby" class="lumi-baby-img">
    <svg class="lumi-flower-dot" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="18" cy="8" rx="5" ry="9" fill="#3d5a1a" transform="rotate(0   18 18)"/>
        <ellipse cx="18" cy="8" rx="5" ry="9" fill="#3d5a1a" transform="rotate(45  18 18)"/>
        <ellipse cx="18" cy="8" rx="5" ry="9" fill="#3d5a1a" transform="rotate(90  18 18)"/>
        <ellipse cx="18" cy="8" rx="5" ry="9" fill="#3d5a1a" transform="rotate(135 18 18)"/>
        <circle cx="18" cy="18" r="6" fill="#607919"/>
        <circle cx="18" cy="18" r="3" fill="#fcf7ea"/>
    </svg>
    <div class="lumi-mq-row lumi-mq-row-1"><div class="lumi-mq-track">
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#d4956a;">L</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Lakshmi T.</div></div></div><p class="lumi-rv-text">Finally found a diaper that keeps my baby happy and active.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47a8a;">A</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Anitha R.</div></div></div><p class="lumi-rv-text">As a mom, comfort matters most. Lumi9 gives my baby exactly that.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#5a9a8a;">D</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Deepika V.</div></div></div><p class="lumi-rv-text">My baby smiles more, sleeps better, and stays comfortable longer.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c4854a;">R</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Radhika M.</div></div></div><p class="lumi-rv-text">Soft like a hug, protective like a mothers care.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#8a6ab4;">K</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Keerthana J.</div></div></div><p class="lumi-rv-text">One of the best diapers I have used for my little one.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#6a8a5a;">A</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Aarthi K.</div></div></div><p class="lumi-rv-text">Tried a few brands before. Lumi9 fits well and does not feel bulky.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#d4956a;">L</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Lakshmi T.</div></div></div><p class="lumi-rv-text">Finally found a diaper that keeps my baby happy and active.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47a8a;">A</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Anitha R.</div></div></div><p class="lumi-rv-text">As a mom, comfort matters most. Lumi9 gives my baby exactly that.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#5a9a8a;">D</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Deepika V.</div></div></div><p class="lumi-rv-text">My baby smiles more, sleeps better, and stays comfortable longer.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c4854a;">R</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Radhika M.</div></div></div><p class="lumi-rv-text">Soft like a hug, protective like a mothers care.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#8a6ab4;">K</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Keerthana J.</div></div></div><p class="lumi-rv-text">One of the best diapers I have used for my little one.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#6a8a5a;">A</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Aarthi K.</div></div></div><p class="lumi-rv-text">Tried a few brands before. Lumi9 fits well and does not feel bulky.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
    </div></div>
    <div class="lumi-mq-row lumi-mq-row-2"><div class="lumi-mq-track">
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47060;">H</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Harini V.</div></div></div><p class="lumi-rv-text">My baby skin is quite sensitive. Lumi9 has been gentle and rash-free for us.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#5a7a9a;">P</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Pavithra N.</div></div></div><p class="lumi-rv-text">As a first-time mom, finding the right diaper was stressful. Lumi9 made it easy.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#7a9a5a;">J</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Janani P.</div></div></div><p class="lumi-rv-text">The diaper stays in place even when my little one is crawling around all day.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#9a5a6a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Swetha K.</div></div></div><p class="lumi-rv-text">The fit is snug without being too tight. My baby moves around comfortably.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#d4956a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Saranya B.</div></div></div><p class="lumi-rv-text">After trying multiple brands, this is the one my baby seems most comfortable in.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47a8a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Sharmila N.</div></div></div><p class="lumi-rv-text">Perfect for active little movers.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47060;">H</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Harini V.</div></div></div><p class="lumi-rv-text">My baby skin is quite sensitive. Lumi9 has been gentle and rash-free for us.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#5a7a9a;">P</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Pavithra N.</div></div></div><p class="lumi-rv-text">As a first-time mom, finding the right diaper was stressful. Lumi9 made it easy.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#7a9a5a;">J</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Janani P.</div></div></div><p class="lumi-rv-text">The diaper stays in place even when my little one is crawling around all day.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#9a5a6a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Swetha K.</div></div></div><p class="lumi-rv-text">The fit is snug without being too tight. My baby moves around comfortably.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#d4956a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Saranya B.</div></div></div><p class="lumi-rv-text">After trying multiple brands, this is the one my baby seems most comfortable in.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
        <div class="lumi-rev-card"><div class="lumi-rv-top"><div class="lumi-rv-av" style="background:#c47a8a;">S</div><div><div class="lumi-rv-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><div class="lumi-rv-name">Sharmila N.</div></div></div><p class="lumi-rv-text">Perfect for active little movers.</p><div class="lumi-rv-badge"><svg width="13" height="13" viewBox="0 0 24 24" fill="#8aa74b"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Verified Buyer</div></div>
    </div></div>
</div>
</section>