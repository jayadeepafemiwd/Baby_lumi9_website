<style>
    .features-strip {
        background: #f5eac3;
        padding: 38px 45px 29px;
    }

    /* Desktop: single row, 5 items */
    .features-inner {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        flex-wrap: nowrap;
    }

    .feat-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 12px;
        text-align: left;
        position: relative;
        flex: 1;
        justify-content: center;
        padding: 6px 8px;
    }

    /* Vertical divider between items — desktop only */
    .feat-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0; top: 50%;
        transform: translateY(-50%);
        height: 32px; width: 1.5px;
        background: #b5c47a;
    }

    .feat-icon-wrap {
        width: 34px; height: 34px;
        background: transparent;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.35rem; color: #6d7e2d; flex-shrink: 0;
    }

    .feat-label {
        font-size: .76rem; font-weight: 700;
        color: #6d7e2d; line-height: 1.3;
    }

    /* Mobile ≤ 767px: compact single row, same as desktop strip */
    @media (max-width: 767px) {
        .features-strip { padding: 10px 0; overflow-x: auto; -webkit-overflow-scrolling: touch; }
        .features-inner {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            width: max-content;
            min-width: 100%;
            padding: 0 8px;
            gap: 0;
        }
        .feat-item {
            flex-direction: column;
            text-align: center;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 6px 10px;
            min-width: 80px;
            flex: 0 0 auto;
        }
        .feat-item:not(:last-child)::after {
            display: block;
            height: 24px; width: 1.5px;
            top: 50%; right: 0;
            transform: translateY(-50%);
        }
        .feat-icon-wrap { font-size: 1.1rem; width: 28px; height: 28px; }
        .feat-label { font-size: .58rem; }
    }

    @media (max-width: 420px) {
        .feat-item { min-width: 70px; padding: 5px 7px; gap: 3px; }
        .feat-icon-wrap { font-size: 1rem; width: 24px; height: 24px; }
        .feat-label { font-size: .54rem; }
    }
</style>

<section class="features-strip">
    <div class="features-inner">

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

{{-- Bottom wave: features (#f5eac3) → babies (#fdf6e7) --}}
<div style="background:#f5eac3;line-height:0;display:block;margin:0;padding:0;" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 44" preserveAspectRatio="none" width="100%" height="44" style="display:block;">
        <path d="M0,22 C240,6 480,6 720,22 C960,38 1200,38 1440,22 L1440,44 L0,44 Z" fill="#fdf6e7"/>
        <path d="M0,22 C240,6 480,6 720,22 C960,38 1200,38 1440,22" fill="none" stroke="#8aa74b" stroke-width="3" stroke-linecap="round"/>
    </svg>
</div>
