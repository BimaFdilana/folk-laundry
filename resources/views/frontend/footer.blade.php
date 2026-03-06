<footer>
    @php
        $setpage = \App\Models\PageSettings::first();
    @endphp
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo mb-35">
                                <a href="{{ url('/') }}"><img width="100px"
                                        src="{{ asset('frontend/img/logo.jpeg') }}" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Jl. Bantan, Gg. Cahaya, Desa Senggoro, Kab.Bengkalis, Riau</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="{{ $setpage->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $setpage->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $setpage->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Layanan </h4>
                            <ul>
                                <li>- Cuci Komplit</li>
                                <li>- Cuci Lipat</li>
                                <li>- Setrika</li>
                                <li>- Laundry Satuan</li>
                                <li>- Laundry Syariah</li>
                                <li>- Laundry Baby</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Get in touch</h4>
                            <ul>
                                <li class="number"><a href="https://wa.me/{{ $setpage->whatsapp }}"
                                        target="_blank">+{{ $setpage->whatsapp }}</a></li>
                                <li><a href="mailto:{{ $setpage->email }}" target="_blank">{{ $setpage->email }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area section-bg2" data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
