<nav class="navbar navbar-area navbar-expand-lg nav-style-02">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="{{ route('home') }}" class="logo">
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
                <li><a href="{{ route('ntn-status') }}">NTN Status</a></li>
                <li class="menu-item-has-children">
                    <a href="{{ route('services') }}">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('income-tax') }}">Income Tax Return</a></li>
                        <li><a href="{{ route('sales-tax') }}">Sales Tax Registration</a></li>
                        <li><a href="{{ route('company-registration') }}">Company's Registration</a></li>
                        <li><a href="{{ route('intellectual-property') }}">Intellectual Property</a></li>
                    </ul>
                </li>
                {{-- <li><a href="#what">FAQ</a></li> --}}
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="{{ route('blog',['locale' => "en"]) }}">Blog</a></li>
            </ul>
        </div>
        <div class="nav-right-content">
            <div class="btn-wrapper">
                <a target="_blank" href="https://wa.me/923214499907" class="boxed-btn btn-business">Get In Touch</a>
            </div>
        </div>
    </div>
</nav>