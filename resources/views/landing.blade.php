@extends('layout.master')
@section('content')
    <section class="has-divider pb-3" id="top-navigation">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="ribbon d-inline-block">
                                <span class="material-icons pt-1" style="font-size: 1rem">
                                    local_offer
                                </span>
                            </div>
                            <div class="d-inline-block pt-2">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]</div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-end pt-3">
                    <div class="row">
                        <div class="col-md-auto">
                            <span class="material-icons me-2">
                                call
                            </span>
                            <span>0274-5305505</span>
                        </div>
                        <div class="col-md-auto">
                            <span class="material-icons me-2">
                                question_answer
                            </span>
                            <span>Live Chat</span>
                        </div>
                        <div class="col-md-auto">
                            <span class="material-icons me-2">
                                account_circle
                            </span>
                            <span>Member Area</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="has-divider py-2" id="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('assets/images/brand.png') }}" alt="brand" srcset="">
                </div>
                <div class="col-md-auto d-flex align-items-center">
                    <ul>
                        <li><a href="#">Hosting</a></li>
                        <li><a href='#'>Domain</a></li>
                        <li><a href='#'>Server</a></li>
                        <li><a href='#'>Website</a></li>
                        <li><a href='#'>Afiliasi</a></li>
                        <li><a href='#'>Promo</a></li>
                        <li><a href='#'>Pembayaran</a></li>
                        <li><a href='#'>Review</a></li>
                        <li><a href='#'>Kontak</a></li>
                        <li><a href='#'>Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- konten --}}
    {{-- hero --}}
    <section class="has-divider mb-5">
        <div class="container">
            <div class="row montserrat mt-5">
                <div class="col">
                    <h1 class="bold">PHP Hosting</h1>
                    <h4 class="py-3">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                    <ul>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Solusi PHP untuk perdorma query yang lebih cepat
                        </li>
                        <li class="py-1"><span class="material-icons text-green">
                                check_circle
                            </span>
                            Konsumsi memory yang lebih rendah</li>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                        </li>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Fitur Enkripsi IonCube dan Zend Guard Loader
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/svg/illustration banner PHP hosting-01.svg') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>
    {{-- teknologi --}}
    <section id="teknologi" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col text-center">
                            <img src="{{ asset('assets/svg/illustration-banner-PHP-zenguard01.svg') }}" alt="">
                            <p>PHP Zend Guard Loader</p>
                        </div>
                        <div class="col text-center">PHP Composer</div>
                        <div class="col text-center">PHP IonCube Loader</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- paket --}}
    <section id="paket" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col montserrat">
                    <h3 class="text-center bold">Paket Hosting Singapura yang Tepat</h3>
                    <h4 class="text-center">Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">Bayi</div>
                <div class="col">Pelajar</div>
                <div class="col">Personal</div>
                <div class="col">Bisnis</div>
            </div>
        </div>
    </section>
    {{-- limit --}}
    <section id="limit" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col montserrat">
                    <h4 class="text-center mb-3">Powerful dengan Limit PHP yang Lebih Besar</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-limit">
                                <li class="text-center has-check">max execution time 300s</li>
                                <li class="text-center has-check">max execution time 300s</li>
                                <li class="text-center has-check">php memory limit 1024 MB</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-limit">
                                <li class="text-center has-check">post max size 128 MB</li>
                                <li class="text-center has-check">upload max filesize 128 MB</li>
                                <li class="text-center has-check">max input vars 2500</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- fitur --}}
    <section id="fitur" class="mb-5">
        <div class="container montserrat">
            <div class="row">
                <div class="col">
                    <h4 class="text-center mb-3">Semua Paket Hosting Sudah Termasuk </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}" alt=""
                        width="64" class="mb-2">
                    <h5 class="bold">PHP Semua Versi</h5>
                    <p class="roboto">Pilih mulai dari PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                </div>
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_My SQL.svg') }}" alt="" width="64"
                        class="mb-2">
                    <h5 class="bold">MySQL Versi 5.6</h5>
                    <p class="roboto">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
                </div>
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_CPanel.svg') }}" alt="" width="64"
                        class="mb-2">
                    <h5 class="bold">Panel Hosting cPanel</h5>
                    <p class="roboto">Kelola website dengan panel canggih yang familiar di hari Anda.</p>
                </div>
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_garansi uptime.svg') }}" alt=""
                        width="64" class="mb-2">
                    <h5 class="bold">Garansi Uptime 99.9%</h5>
                    <p class="roboto">Data center yang mendukung kelangsungan website Anda 24/7.</p>
                </div>
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_InnoDB.svg') }}" alt="" width="64"
                        class="mb-2">
                    <h5 class="bold">Database InnoDB Unlimited</h5>
                    <p class="roboto">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                </div>
                <div class="col-4 text-center my-5">
                    <img src="{{ asset('assets/svg/icon PHP Hosting_My SQL remote.svg') }}" alt="" width="64"
                        class="mb-2">
                    <h5 class="bold">Wildcard Remote MySQL</h5>
                    <p class="roboto">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- dukungan --}}
    <section id="dukungan" class="has-divider mb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="montserrat text-center mb-3">Mendukung Penuh Framework Laravel</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-3 montserrat">Tak perlu menggunakan dedicated ataupun VPS yang mahal. Layanan PHP hosting
                        murah
                        kami mendukung
                        penuh
                        framework favorit Anda</p>
                    <ul>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.
                        </li>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
                            <strong>fileinfo</strong>.
                        </li>
                        <li class="py-1">
                            <span class="material-icons text-green">
                                check_circle
                            </span>
                            Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal
                            package pilihan
                            Anda.
                        </li>
                    </ul>
                    <div class="my-3">
                        <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                    </div>
                    <div class="btn btn-primary rounded-pill px-4">Pilih Hosting Anda</div>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/svg/illustration banner support laravel hosting.svg') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>
    {{-- modul --}}
    <section id="modul">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="montserrat text-center pb-5">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                        @foreach ($modules as $module)
                            <div class="col-3">{{ $module }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col text-center">
                    <a href='#' class="btn btn-outline-secondary rounded-pill px-4 bold montserrat">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- support --}}
    <section id="support">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="montserrat mb-3">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                    <p>SuperMicro <strong>Intel Xeon 24-Core</strong> server dengan RAM <strong>128 GB</strong> dan
                        teknologi
                        <strong>LVE CloudLinux</strong> untuk stabilitas server Anda Dilengkapi dengan <strong>SSD</strong>
                        untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed
                        Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup
                        untuk keamanan website PHP Anda.
                    </p>
                    <a href="#" class="btn btn-primary rounded-pill mt-3 px-4">Pilih Hosting Anda</a>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/Image support.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- share --}}
    <section id="share">
        <div class="container">
            <div class="row py-4">
                <div class="col montserrat">
                    <small class="bold">Bagikan jika Anda menyukai halaman ini.</small>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">fb</div>
                        <div class="col">tw</div>
                        <div class="col">g+</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- bantuan --}}
    <section id="bantuan">
        <div class="container">
            <div class="row py-5">
                <div class="col">
                    <p class="fs-3 montserrat">Perlu <strong>BANTUAN?</strong> Hubungi Kami: <strong>0274-5305505</strong>
                    </p>
                </div>
                <div class="col-3">
                    <a href="#" class="btn btn-outline-light rounded-pill px-4 fs-5">
                        <span class="material-icons">
                            question_answer
                        </span>
                        Live Chat
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col pt-5 pb-3">
                    <strong>HUBUNGI KAMI</strong>
                    <ul>
                        <li><a href='#'>0274-5305505</a></li>
                        <li><a href='#'>Senin-Jumat</a></li>
                        <li><a href='#'>24 Jam Nonstop</a></li>
                        <li>&nbsp;</li>
                        <li><a href='#'>Jl. Selokan Mataram Monjali</a></li>
                        <li><a href='#'>Karangjati MT I/304</a></li>
                        <li><a href='#'>Sinduadi, Mliati, Sleman</a></li>
                        <li><a href='#'>Yogyakarta 55284</a></li>
                    </ul>
                </div>
                <div class="col pt-5 pb-3">
                    <strong>LAYANAN</strong>
                    <ul>
                        <li><a href='#'>Domain</a></li>
                        <li><a href='#'>Shared Hosting</a></li>
                        <li><a href='#'>Cloud VPS Hosting</a></li>
                        <li><a href='#'>Managed VPS Hosting</a></li>
                        <li><a href='#'>Web Builder</a></li>
                        <li><a href='#'>Keamanan SSL / HTTPS</a></li>
                        <li><a href='#'>Jasa Pembuatan Website</a></li>
                        <li><a href='#'>Program Affiliasi</a></li>
                    </ul>
                </div>
                <div class="col pt-5 pb-3">
                    <strong>SERVICE HOSTING</strong>
                    <ul>
                        <li><a href='#'>Hosting Murah</a></li>
                        <li><a href='#'>Hosting Indonesia</a></li>
                        <li><a href='#'>Hosting Singapura SG</a></li>
                        <li><a href='#'>Hosting PHP</a></li>
                        <li><a href='#'>Hosting Wordpress</a></li>
                        <li><a href='#'>Hosting Laravel</a></li>
                    </ul>
                </div>
                <div class="col pt-5 pb-3">
                    <strong>TUTORIAL</strong>
                    <ul>
                        <li><a href='#'>Knowledgebase</a></li>
                        <li><a href='#'>Blog</a></li>
                        <li><a href='#'>Cara Pembayaran</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col pt-5 pb-3">
                    <strong>TENTANG KAMI</strong>
                    <ul>
                        <li><a href='#'>Tim Niagahoster</a></li>
                        <li><a href='#'>Karir</a></li>
                        <li><a href='#'>Events</a></li>
                        <li><a href='#'>Penawan & Promo Spesial</a></li>
                        <li><a href='#'>Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col pt-5 pb-3">
                    <strong>KENAPA PILIH NIAGAHOSTER?</strong>
                    <ul>
                        <li><a href='#'>Support Terbaik</a></li>
                        <li><a href='#'>Garansi Harga Termurah</a></li>
                        <li><a href='#'>Domain Gratis Selamanya</a></li>
                        <li><a href='#'>Datacenter Hosting Terbaik</a></li>
                        <li><a href='#'>Review Pelanggan</a></li>
                    </ul>
                </div>
                <div class="col pt-5 pb-3">
                    <strong>NEWSLETTER</strong>
                    <div class="input-group bg-white rounded-pill p-1">
                        <input type="text" class="form-control rounded-pill border-0" placeholder="Email"
                            aria-label="Email" aria-describedby="button-addon2">
                        <button class="btn btn-primary rounded-pill" type="button"
                            id="button-addon2">Berlangganan</button>
                    </div>
                    <p class="text-muted pt-2">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda</p>
                </div>
                <div class="col pt-5 pb-3">
                    <div class="row mt-5">
                        <div class="col"><span>f</span></div>
                        <div class="col"><span>t</span></div>
                        <div class="col"><span>g</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col pt-5 pb-3">
                    <p>Pembayaran</p>
                    <img src="" alt="">
                    <small>Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</small>
                </div>
            </div>
            <hr>
            <div class="row pb-3">
                <div class="col">
                    <small>
                        Copyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC
                        Biznet, TechnoVillage Jakarta <br>
                        Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                    </small>
                </div>
                <div class="col-3">
                    <small>Syarat dan Ketentuan | Kebijakan Privasi</small>
                </div>
            </div>
        </div>
    </section>
@endsection
