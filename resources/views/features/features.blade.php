<style>
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
        right: 0; top: 50%;
        transform: translateY(-50%);
        height: 36px; width: 1.5px;
        background: #b5c47a;
    }

    .feat-icon-wrap {
        width: 48px; height: 48px;
        background: transparent;
        display: flex; align-items: center; justify-content: center;
        font-size: 2rem; color: #6d7e2d; flex-shrink: 0;
    }

    .feat-label { font-size: .95rem; font-weight: 700; color: #6d7e2d; line-height: 1.3; }
</style>

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
