@extends('layouts.frontend')
@section('title', 'Laundry Camp')
@section('styles')
    <style>
        .input-group .btn.hero-btn {
            margin-left: 5px;
            padding: 0.5rem 2rem;
            /* atas-bawah 4px, kiri-kanan 8px */
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
@section('content')
    @php
        $setpage = \App\Models\PageSettings::first();
    @endphp
    <!--? slider Area Start-->
    <section id="home" class="slider-area hero-overly">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">Laundry Camp</h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">Quality laundry service in your
                                    city</p>

                                <h2 data-animation="fadeInLeft" data-delay="0.7s" class="text-white">Lacak Status Laundry
                                    Kamu Disini...</h2>
                                <div class="input-group input-group-lg mb-3" data-animation="fadeInLeft" data-delay="0.9s">
                                    <input type="text" class="form-control" id="search_status"
                                        placeholder="Contoh : TR0392928" />
                                    <button id="search-btn" type="submit" class="btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.7s">
                                        <img src="{{ asset('assets/img/icon/magnifying-glass-solid.svg') }}" alt=""
                                            width="15" height="15">
                                    </button>
                                </div>

                                @include('frontend.modal')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider Area End-->

    <!--? Services Area Start -->
    <section id="services" class="services-area pt-top border-bottom pb-20 mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Our Process</span>
                        <h2>This is how we work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/icon/services-icon1.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>We collect your clothes</a></h5>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome
                                is gleaming clothes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/icon/services-icon2.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>Wash your clothes</a></h5>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome
                                is gleaming clothes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/icon/services-icon3.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>Get delivery</a></h5>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome
                                is gleaming clothes!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->

    <!--? Offer-services Start  -->
    <section class="offer-services pb-bottom2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Services</span>
                        <h2>Services we offer</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('assets/img/gallery/offers11.png') }}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('assets/img/gallery/offers2.png') }}" alt="" class=" w-100">
                        <div class="offers-caption text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/offers-icon1.png') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cloth laundry</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The
                                    outcome is gleaming clothes!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('assets/img/gallery/offers2.png') }}" alt="" class=" w-100">
                        <div class="offers-caption text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/offers-icon1.png') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cloth ironing</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The
                                    outcome is gleaming clothes!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('assets/img/gallery/offers22.png') }}" alt="" class=" w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer-services End  -->

    <!--? Want To work -->
    <section class="container">
        <section class="wantToWork-area" data-background="{{ asset('assets/img/gallery/section_bg01.png') }}">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-9 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Call us for a service</h2>
                            <p>We deliver the goods to the most complicated places on earth</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <a href="https://wa.me/{{ $setpage->whatsapp }}" class="btn wantToWork-btn" target="_blank"><img
                                src="{{ asset('assets/img/icon/call2.png') }}" alt="">
                            Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Want To work End -->

    <!--? Company achievement Start -->
    <section id="about" class="services-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Fun Fact</span>
                        <h2>Laundry achievement</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>4000</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>300+</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>95%</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-bt">
                            <img src="{{ asset('assets/img/gallery/company-bg.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company achievement End -->

    <!--?  Map Area start  -->
    <div class="Map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1248874117696!2d102.12781025561767!3d1.4731863203183948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d15ff3fa904125%3A0x33e9ffd8e560e40a!2sLaundry%20Camp!5e0!3m2!1sen!2sid!4v1750090758115!5m2!1sen!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map Area End -->

    <!-- Testimonials_start -->
    {{-- <section class="testimonials-area testimonials-overly  position-relative">
        <div class="container">
            <div class="border-bottom section-padding40 ">
                <div class="row">
                    <div class="col-xl-12 ">
                        <!-- testmonial-image -->
                        <div class="testmonial-nav text-center">
                            <div class="testmonial-thumb">
                                <img src="{{ asset('assets/img/gallery/testimonila1.png') }}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('assets/img/gallery/testimonila2.png') }}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('assets/img/gallery/testimonila3.png') }}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('assets/img/gallery/testimonila2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="testmonial-item-active text-center">
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into
                                    the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into
                                    the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into
                                    the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonials_end -->
    <!--? About Area  -->
    {{-- <section class="about-area2 pb-bottom mt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('assets/img/gallery/about1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>About company</h2>
                        </div>
                        <p class="mb-20">
                            The automated process starts as soon as your clothes go into the machine. The outcome is
                            gleaming clothes!
                        </p>
                        <p class="mb-30">The automated process starts as soon as your clothes go into the machine.
                            The outcome is gleaming clothes!</p>

                        <a href="about.html" class="btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- About Area End -->
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).on('click', '.search-btn', function(e) {
            _curr_val = $('#search_status').val();
            $('#search_status').val(_curr_val + $(this).html());
        });

        $(document).on('click', '#search-btn', function(e) {
            var search_status = $("#search_status").val();
            $.get('pencarian-laundry', {
                '_token': $('meta[name=csrf-token]').attr('content'),
                search_status: search_status
            }, function(resp) {
                if (resp != 0) {
                    $(".modal_status").show();
                    $("#customer").html(resp.customer);
                    $("#tgl_transaksi").html(resp.tgl_transaksi);
                    $("#status_order").html(resp.status_order);
                } else {
                    swal({
                        html: "No Invoice Tidak Terdaftar!"
                    })
                }
            });
        });

        function close_dlgs() {
            $(".modal_status").hide();
            $("#search_status").val("");
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section[id]");
            const navLinks = document.querySelectorAll("#navigation a");

            window.addEventListener("scroll", () => {
                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;

                    if (pageYOffset >= sectionTop - 100) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    link.parentElement.classList.remove("active");
                    if (link.getAttribute("href") === "#" + current) {
                        link.parentElement.classList.add("active");
                    }
                });
            });
        });
    </script>
@endsection
