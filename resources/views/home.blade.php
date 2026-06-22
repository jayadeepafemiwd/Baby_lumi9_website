{{-- lilbae Hero Section Component --}}
{{-- Usage: @include('components.lilbae-hero') or as a Blade component --}}

<section class="lb-hero">

    {{-- Paw dots --}}
    <div class="lb-paw" aria-hidden="true">
        <span></span>
        <span class="lb-paw-mid"></span>
        <span></span>
    </div>

    {{-- Eyeline --}}
    <p class="lb-eyeline">lilbae — styled for stories</p>

    {{-- Main headline --}}
    <h2 class="lb-headline">
        Every touch<br>feels like <em>love</em>
    </h2>

    {{-- Subtext --}}
    <p class="lb-sub">Gentle comfort. Happy moments.</p>

    {{-- Decorative divider --}}
    <div class="lb-divider" aria-hidden="true"></div>

    {{-- Feature cards --}}
    <div class="lb-cards">

        <div class="lb-card">
            <div class="lb-card-icon" aria-hidden="true">
                {{-- Heart icon (inline SVG — no dependency needed) --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06
                             a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78
                             1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>
            </div>
            <p class="lb-card-title">Gentle comfort</p>
            <p class="lb-card-text">Soft on little skin, crafted with care</p>
        </div>

        <div class="lb-card">
            <div class="lb-card-icon" aria-hidden="true">
                {{-- Star / sparkle icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14
                                     18.18 21.02 12 17.77 5.82 21.02
                                     7 14.14 2 9.27 8.91 8.26 12 2"/>
                </svg>
            </div>
            <p class="lb-card-title">Happy moments</p>
            <p class="lb-card-text">Clothes that grow with every story</p>
        </div>

        <div class="lb-card">
            <div class="lb-card-icon" aria-hidden="true">
                {{-- Sun / warmth icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"/>
                    <line x1="12" y1="1" x2="12" y2="3"/>
                    <line x1="12" y1="21" x2="12" y2="23"/>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                    <line x1="1" y1="12" x2="3" y2="12"/>
                    <line x1="21" y1="12" x2="23" y2="12"/>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                </svg>
            </div>
            <p class="lb-card-title">Styled for stories</p>
            <p class="lb-card-text">Because every outfit is a memory</p>
        </div>

    </div>
</section>

{{-- ============================================================
     STYLES — paste into your app.css / resources/css/app.css
     or inside a @push('styles') block
     ============================================================ --}}
<style>
.lb-hero {
    background-color: #F0EBE3;
    border-radius: 20px;
    padding: 3rem 2rem;
    text-align: center;
    font-family: 'Nunito', sans-serif; /* add Nunito via Google Fonts or Vite */
}

/* Paw dots */
.lb-paw {
    display: inline-flex;
    gap: 6px;
    margin-bottom: 1rem;
    opacity: 0.45;
}
.lb-paw span {
    width: 8px;
    height: 8px;
    background-color: #8B5E3C;
    border-radius: 50%;
    display: inline-block;
}
.lb-paw .lb-paw-mid {
    width: 6px;
    height: 6px;
    margin-top: 2px;
}

/* Eyeline */
.lb-eyeline {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.25em;
    color: #A0734F;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

/* Headline */
.lb-headline {
    font-size: 2rem;
    font-weight: 800;
    color: #5C3A1E;
    line-height: 1.2;
    margin: 0 0 0.5rem;
}
.lb-headline em {
    font-style: normal;
    color: #8B5E3C;
}

/* Sub text */
.lb-sub {
    font-size: 1rem;
    font-weight: 600;
    color: #A0734F;
    margin: 0 0 2rem;
    letter-spacing: 0.02em;
}

/* Divider */
.lb-divider {
    width: 48px;
    height: 3px;
    background-color: #C4946A;
    border-radius: 99px;
    margin: 0 auto 2rem;
    opacity: 0.5;
}

/* Cards grid */
.lb-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 1rem;
    max-width: 540px;
    margin: 0 auto;
}

/* Individual card */
.lb-card {
    background-color: #FBF7F3;
    border: 1px solid #E2D5C8;
    border-radius: 16px;
    padding: 1.25rem 1rem;
}

.lb-card-icon {
    color: #8B5E3C;
    margin-bottom: 0.5rem;
    display: flex;
    justify-content: center;
}

.lb-card-title {
    font-size: 0.875rem;
    font-weight: 700;
    color: #5C3A1E;
    margin: 0 0 4px;
}

.lb-card-text {
    font-size: 0.8rem;
    color: #A0734F;
    margin: 0;
    line-height: 1.5;
}
</style>

{{-- ============================================================
     NOTE: Add Nunito font in your layout or app.blade.php <head>:

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
     ============================================================ --}}