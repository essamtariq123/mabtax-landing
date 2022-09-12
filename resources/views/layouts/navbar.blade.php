<nav class="navbar navbar-area navbar-expand-lg nav-style-02">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="index.html" class="logo">
                    <img style="width:50%;" src="{{ asset('img/logo.png') }}" alt="">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                <li class="current-menu-item"><a href="{{ route('tax-calculator') }}">Tax Calculator</a></li>
                <li><a href="#what">NTN Status</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">Income Tax Return</a></li>
                        <li><a href="contact.html">Sales Tax Registration</a></li>
                        <li><a href="service.html">Company's Registration</a></li>
                        <li><a href="how-it-work.html">Intellectual Property</a></li>
                    </ul>
                </li>
                <li><a href="#what">FAQ</a></li>
                <li><a href="#work">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-right-content">
            <div class="btn-wrapper">
                <a href="#" class="boxed-btn btn-business">Get In Touch</a>
            </div>
        </div>
    </div>
</nav>