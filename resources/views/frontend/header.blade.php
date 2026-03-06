<header>
    @php
        $setpage = \App\Models\PageSettings::first();
    @endphp
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <!-- Logo -->
            <div class="header-left">
                <div class="logo">
                    <a href="{{ url('/') }}"><img width="100px" src="{{ asset('frontend/img/logo.jpeg') }}"
                            alt=""></a>
                </div>
                <div class="menu-wrapper  d-flex align-items-center">
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li class="active"><a href="#home">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#about">About</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header-right d-none d-lg-block">
                <a href="https://wa.me/{{ $setpage->whatsapp }}" target="_blank" class="header-btn1"><img
                        src="{{ asset('assets/img/icon/call.png') }}" alt="">+{{ $setpage->whatsapp }}</a>
                <a href="{{ route('login') }}" class="header-btn2">Login</a>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
