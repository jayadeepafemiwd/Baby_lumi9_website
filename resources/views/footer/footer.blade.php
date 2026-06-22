<footer class="lumi-footer" id="contact" aria-label="Footer">
<style>
    .lumi-footer{background:#f5eac3;color:#3d5a1a;font-family:'Poppins',sans-serif;position:relative;margin-top:0;}
    .lumi-footer-wave{display:block;line-height:0;background:#f5eac3;}
    .lumi-footer-wave svg{display:block;width:100%;height:70px;}
    .lumi-footer-inner{padding:36px 60px 28px;position:relative;overflow:hidden;}
    .footer-logo-name{font-size:2rem;font-weight:900;color:#3d5a1a;line-height:1;}
    .footer-logo-name span{color:#8aa74b;}
    .footer-logo-sub{color:#6d7e2d;font-size:.68rem;margin-top:5px;font-weight:500;}
    .footer-col h6{font-size:.84rem;font-weight:700;color:#6d7e2d;margin-bottom:14px;letter-spacing:.02em;}
    .footer-col a{display:flex;align-items:center;gap:6px;color:#6d7e2d;font-size:.78rem;margin-bottom:9px;transition:color .2s;text-decoration:none;}
    .footer-col a:hover{color:#3d5a1a;}
    .footer-col .footer-contact-icon{font-size:.75rem;color:#6d7e2d;flex-shrink:0;}
    .footer-mascot{position:absolute;right:48px;bottom:80px;height:170px;pointer-events:none;object-fit:contain;}
    .footer-copy{border-top:1px solid rgba(61,90,26,.14);margin-top:28px;padding-top:15px;color:#3d5a1a;font-size:.7rem;text-align:center;}
    @media(max-width:991px){.lumi-footer-inner{padding:36px 24px 28px;}.footer-mascot{height:120px;right:12px;}.lumi-footer-wave svg{height:50px;}}
    @media(max-width:767px){.footer-mascot{display:none;}}
    @media(max-width:575px){.lumi-footer-inner{padding:24px 16px 20px;}.lumi-footer-wave svg{height:36px;}.footer-col h6{font-size:.78rem;margin-bottom:10px;}.footer-col a{font-size:.72rem;margin-bottom:7px;}.footer-copy{font-size:.64rem;margin-top:18px;padding-top:12px;}}
</style>

<!-- Top wave transition -->
<div class="lumi-footer-wave" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70" preserveAspectRatio="none">
        <path fill="#f5eac3" d="M0,35 C200,70 400,0 600,35 C800,70 1000,0 1200,35 C1300,52 1380,44 1440,35 L1440,70 L0,70 Z"/>
        <path fill="none" stroke="#beaf81" stroke-width="3" stroke-linecap="round" d="M0,35 C200,70 400,0 600,35 C800,70 1000,0 1200,35 C1300,52 1380,44 1440,35"/>
    </svg>
</div>

<div class="lumi-footer-inner">
    <div class="row gy-4">

        <!-- Brand -->
        <div class="col-lg-3 col-md-6" style="margin-top:10px;">
            <img src="{{ asset('images/logo (2).png') }}" alt="Lumi9" style="height:50px;width:auto;display:block;margin-bottom:6px;object-fit:contain;max-width:100%;">
            <div class="footer-logo-sub">Made with love, for your little one.</div>
        </div>

        <!-- Shop -->
        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Shop</h6>
            <a href="{{ url('/shop') }}">New Born</a>
            <a href="{{ url('/shop') }}">Infant</a>
            <a href="{{ url('/shop') }}">Toddler</a>
            <a href="{{ url('/shop') }}">Baby Wipes</a>
        </div>

        <!-- About Us -->
        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>About Us</h6>
            <a href="{{ url('/about') }}">Our Story</a>
            <a href="{{ url('/about') }}">Mission</a>
            <a href="{{ url('/about') }}">Sustainability</a>
            <a href="{{ url('/about') }}">Careers</a>
        </div>

        <!-- Help -->
        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Help</h6>
            <a href="#">FAQs</a>
            <a href="#">Returns</a>
            <a href="#">Shipping Info</a>
            <a href="#">Size Guide</a>
        </div>

        <!-- Contact -->
        <div class="col-lg-2 col-md-3 col-6 footer-col">
            <h6>Contact</h6>
            <a href="tel:+919898545210"><i class="fas fa-phone footer-contact-icon"></i> +91 98985 45210</a>
            <a href="{{ url('/contact') }}"><i class="fas fa-envelope footer-contact-icon"></i> Email Us</a>
            <a href="#"><i class="fab fa-whatsapp footer-contact-icon"></i> WhatsApp</a>
            <a href="#"><i class="fab fa-instagram footer-contact-icon"></i> Instagram</a>
        </div>

    </div>

    <!-- Mascot -->
    <img class="footer-mascot" src="{{ asset('images/image-2.png') }}" alt="Lumi mascot">

    <div class="footer-copy">
        &copy; {{ date('Y') }} Lumi9. All rights reserved. Made with ♥ for little ones.
    </div>
</div>
</footer>
