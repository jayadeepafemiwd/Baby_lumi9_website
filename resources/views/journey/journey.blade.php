<style>
    /* ============================================================
       JOURNEY / PRODUCT SHOWCASE
    ============================================================ */
    .journey-section { background:#f5eac3; padding: 70px 60px; }

    .journey-showcase {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 48px;
    }

    /* LEFT: paw selector */
    .journey-paw-selector {
        flex: 0 0 220px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 0;
        margin-left: 40px;
        margin-top: 20px;
    }

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
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; transition: all .3s ease; flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(109,126,45,.13);
    }
    .j-paw-btn img.paw-thumb {
        width: 40px; height: 40px;
        object-fit: cover; border-radius: 50%;
    }
    .j-paw-row.active .j-paw-btn {
        border-color: #6d7e2d;
        box-shadow: 0 0 0 3px rgba(109,126,45,.2), 0 4px 16px rgba(109,126,45,.2);
        transform: scale(1.08);
    }
    .j-paw-row:hover .j-paw-btn { border-color: #6d7e2d; }

    .j-paw-label { display: flex; flex-direction: column; }
    .j-paw-label-title {
        font-size: 1.0rem; font-weight: 400;
        color: #3a5c1e; line-height: 1.3; transition: color .3s;
    }
    .j-paw-label-sub { font-size: 0.9rem; color: #6d7e2d; line-height: 1.4; }
    .j-paw-row.active .j-paw-label-title { color: #455e25; }

    /* paw trail */
    .j-paw-trail {
        display: flex; flex-direction: column;
        align-items: center; gap: 2px;
        padding: 3px 0 3px 26px;
    }
    .j-paw-trail i { color: #b5c47a; font-size: .62rem; opacity: .8; }
    .j-paw-trail .trail-line {
        width: 2px; height: 6px;
        background: repeating-linear-gradient(to bottom, #b5c47a 0, #b5c47a 3px, transparent 3px, transparent 7px);
    }

    /* CENTER: switchable image */
    .journey-center-wrap {
        flex: 0 0 400px;
        display: flex; flex-direction: column; align-items: center; gap: 16px;
        margin-top: 0;
    }
    .j-img-frame {
        width: 400px; height: 400px;
        border-radius: 24px; overflow: hidden;
        box-shadow: 0 12px 40px rgba(0,0,0,.13);
        background: #f0ead6;
        display: flex; align-items: center; justify-content: center;
    }
    .j-center-img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center center;
        display: block; border-radius: 24px;
        opacity: 1; transform: translateY(0) scale(1);
        transition: opacity .45s cubic-bezier(.4,0,.2,1), transform .45s cubic-bezier(.4,0,.2,1);
        animation: floatDiaper 3.5s ease-in-out infinite;
    }
    @keyframes floatDiaper {
        0%, 100% { transform: translateY(0); }
        50%       { transform: translateY(-10px); }
    }
    .j-center-img.fade-out {
        opacity: 0; transform: scale(.93) translateY(8px); animation: none;
    }

    /* RIGHT: features */
    .journey-right {
        flex: 1; display: flex; flex-direction: column;
        gap: 26px; justify-content: flex-start;
        align-self: flex-start;
        margin-top: 50px;
    }
    .journey-right-title {
        font-size: 1.35rem; font-weight: 800; color: #3a5c1e;
        border-left: 4px solid #6d7e2d; padding-left: 12px; margin-bottom: 4px;
    }
    .j-feat-item { display: flex; align-items: flex-start; gap: 14px; }
    .j-feat-icon {
        width: 46px; height: 46px; background: #fff; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.1rem; color: #6d7e2d; flex-shrink: 0;
        box-shadow: 0 2px 10px rgba(109,126,45,.14);
    }
      .sec-title {
            font-size: 1.9rem;
            font-weight: 800px;
            color:#6d7e2d;
            text-align: center;
            margin-bottom: 1.4%;
        }
        .sec-title-icon { margin: 0 8px; }
    .j-feat-title { font-size: 1.05rem; font-weight: 700; color: var(--text-dark); margin-bottom: 3px; }
    .j-feat-desc  { font-size: .88rem; color: #8a9a70; line-height: 1.6; }
        .sec-subtitle { text-align: center; color:#6d7e2d; font-size: .82rem; margin-top: 4px; margin-bottom: 40px; }

    @media (max-width: 991px) {
        .journey-showcase { flex-direction: column; gap: 28px; }
        .journey-paw-selector { flex-direction: row; }
        .j-paw-trail { flex-direction: row; }
        .j-paw-trail .trail-line { width: 10px; height: 2px; background: repeating-linear-gradient(to right, #b5c47a 0, #b5c47a 4px, transparent 4px, transparent 9px); }
        .journey-center-wrap { flex: unset; width: 100%; max-width: 380px; margin: 0 auto; }
    }
</style>

<!-- ================================================================
     A JOURNEY OF CARE
================================================================ -->
<section class="journey-section">
    <h2 class="sec-title">
        <b><span class="sec-title-icon">🌿</span>
        A Journey of Care, Innovation &amp; Trust
        <span class="sec-title-icon">🌿</span></b>
    </h2>
    <p class="sec-subtitle">Every detail crafted to keep your baby happy, healthy &amp; comfortable.</p>

    <div class="journey-showcase mt-5">

        {{-- LEFT: Paw selector --}}
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
                <div class="trail-line"></div><i class="fas fa-paw"></i><div class="trail-line"></div>
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
                <div class="trail-line"></div><i class="fas fa-paw"></i><div class="trail-line"></div>
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
                <div class="trail-line"></div><i class="fas fa-paw"></i><div class="trail-line"></div>
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
                <div class="trail-line"></div><i class="fas fa-paw"></i><div class="trail-line"></div>
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

<script>
    const journeyData = {
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
        },
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
</script>
