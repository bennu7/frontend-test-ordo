<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    @vite(["resources/scss/landing.scss", "resources/js/app.js"])
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg_primary">
        <!-- image logo and link -->
        <div class="navbar_wrap_image_links">
            <img src="/images/logo.png" alt="logo.png" class="navbar_image">
            <!-- button navbar -->
            <div class="navbar_link">
                <div>Homepage</div>
                <div>Tentang</div>
                <div>Daftar Hotel</div>
                <div>Bantuan</div>
            </div>
        </div>
        <!-- dropdown change language -->
        <div class="navbar_dropdown">
            <img id="countryFlag" src="/images/indonesia.png" alt="Country Flag" class="">
            <select onchange="changeLanguage()" id="languageSelect" class="bg_primary">
                <option value="indonesia">Indonesia (ID)</option>
                <option value="english">English (EN)</option>
            </select>
        </div>
    </nav>
    <!-- Image Hero -->
    <div class="hotel_operator_image">
        <img src="/images/building.png" alt="building.png">
    </div>

    <!-- Hotel Operator -->
    <div class="hotel_operator bg_primary">
        <div class="operator_content">
            <div class="subtitle_hotel_operator">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m21 11.75c0-.414-.336-.75-.75-.75h-16.5c-.414 0-.75.336-.75.75s.336.75.75.75h16.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero" />
                </svg>
                HOTEL OPERATOR
            </div>
            <h1>Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
            <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
            <button class="bg_yellow_gwk">
                Konsultasikan Bisnis Saya
            </button>
            <div class="operator_scroll">
                Scroll
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                </svg>
            </div>
        </div>
        <div class="ho-vector">
            <div class="hov-first">
                <svg xmlns="http://www.w3.org/2000/svg" width="1000" height="161" viewBox="0 0 814 161" fill="none">
                    <path d="M813.5 1C802.902 56.6169 638.067 209.954 454 143C269.933 76.0459 75.597 181.655 -1 143" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="hov-second">
                <svg xmlns="http://www.w3.org/2000/svg" width="812" height="120" viewBox="0 0 812 120" fill="none">
                    <path d="M0 25.6865C0 25.6865 116.015 130.801 339 17.6864C490.769 -59.302 647.351 157.613 811.5 113.186" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="hov-third">
                <svg xmlns="http://www.w3.org/2000/svg" width="865" height="274" viewBox="0 0 865 274" fill="none">
                    <path d="M0 273C168.986 117.609 337.275 313.8 501.109 97.2461C664.944 -119.308 864 97.2461 864 97.2461" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="hov-fourth">
                <svg xmlns="http://www.w3.org/2000/svg" width="810" height="175" viewBox="0 0 810 175" fill="none">
                    <path d="M-1.5 151C-1.5 151 41.4996 241.664 261.5 63.0001C481.5 -115.664 741 166 809.5 0.5" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="hov-fifth"></div>
        </div>
    </div>

    <!-- Our Workflow -->
    <div class="our_workflow">
        <div class="our_workflow_content">
            <div class="subtitle_our_operator">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m21 11.75c0-.414-.336-.75-.75-.75h-16.5c-.414 0-.75.336-.75.75s.336.75.75.75h16.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero" />
                </svg>
                OUR WORKFLOW
            </div>
            <div class="title_our_operator">
                <h1>Proses Kerja Kami dalam</h1>
                <h1>Meningkatkan Kualitas Properti</h1>
            </div>
            <div class="list_workflow">
                <div class="point_workflow_tantangan">
                    <div class="icon_workflow">
                        <img src="/images/icon_tantangan.png" alt="">
                    </div>
                    <h2>Tantangan</h2>
                    <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                </div>
                <div class="point_workflow_rumusan">
                    <div class="icon_workflow">
                        <img src="/images/icon_rumusan.png" alt="">
                    </div>
                    <h2>Rumusan</h2>
                    <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                </div>
                <div class="point_workflow_blue">
                    <div class="icon_workflow">
                        <img src="/images/icon_goals.png" alt="">
                    </div>
                    <h2>Goals</h2>
                    <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                </div>
                <div class="point_workflow_ideas">
                    <div class="icon_workflow">
                        <img src="/images/icon_ideas.png" alt="">
                    </div>
                    <h2>Ideas</h2>
                    <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                </div>
            </div>
        </div>
        <div class="vector_workflow">
            <img src="/images/vector_workflow.png" alt="">
        </div>
    </div>

    <!-- Our Services -->
    <div class="our_services">
        <div class="content_our_services">
            <div class="subtitle_our_services">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m21 11.75c0-.414-.336-.75-.75-.75h-16.5c-.414 0-.75.336-.75.75s.336.75.75.75h16.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero" />
                </svg>
                OUR SERVICES
            </div>
            <div class="title_our_services">
                <h1>Apa Saya yang Bisa Kami Bantu ?</h1>
            </div>
            <div class="list_services">
                <div class="service">
                    <div class="top_service">
                        <img src="/images/service_revenue.png" alt="service_revenue.png">
                        <div class="number_service">01</div>
                    </div>
                    <h3 class="name_service">Revenue</h3>
                    <h3 class="name_service">Management Service</h3>
                    <button class="btn_service">
                        Saya Tertarik
                        <img src="/images/arrow-right.png" alt="arrow-right.png">
                    </button>
                </div>
                <div class="service">
                    <div class="top_service">
                        <img src="/images/service_full.png" alt="service_revenue.png">
                        <div class="number_service">02</div>
                    </div>
                    <h3 class="name_service">Full Manage</h3>
                    <h3 class="name_service">Service</h3>
                    <button class="btn_service">
                        Saya Tertarik
                        <img src="/images/arrow-right.png" alt="arrow-right.png">
                    </button>
                </div>
                <div class="service">
                    <div class="top_service">
                        <img src="/images/service_asset.png" alt="service_revenue.png">
                        <div class="number_service">03</div>
                    </div>
                    <h3 class="name_service">Asset Monetize</h3>
                    <h3 class="name_service">Service</h3>
                    <button class="btn_service">
                        Saya Tertarik
                        <img src="/images/arrow-right.png" alt="arrow-right.png">
                    </button>
                </div>
            </div>
        </div>
        <div class="circle_right">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="501" viewBox="0 0 178 501" fill="none">
                    <path d="M24.1073 356.287C-34.127 231.403 20.0816 82.8709 145.188 24.5328C270.295 -33.8054 418.921 20.1427 477.156 145.027C535.39 269.911 481.181 418.442 356.075 476.78C230.968 535.119 82.3417 481.17 24.1073 356.287Z" stroke="black" />
                </svg>
            </div>
            <div class="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="442" height="563" viewBox="0 0 442 563" fill="none">
                    <path d="M163.003 27.3273C22.3545 92.9127 -38.591 259.898 26.8796 400.3C92.3502 540.702 259.443 601.351 400.092 535.766C540.74 470.181 601.686 303.195 536.215 162.793C470.744 22.3909 303.651 -38.2581 163.003 27.3273Z" stroke="black" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Our Latest Project -->
    <div class="our_latest_project">
        <div class="subtitle_olp">
            <div class="horizontaol_olp"></div>
            <div>OUR LATEST PROJECTS</div>
            <div class="horizontaol_olp"></div>
        </div>
        <div class="title_olp">
            Project Terbaru Kami
        </div>
        <div class="content_olp">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/townhouse-1.jpg" alt="townhouse-1.jpg">
                        <div class="content-slide">
                            <div class="left-content">
                                <div class="project">1/4 OPERATIONAL PROJECT</div>
                                <div class="name-place">Townhouse Oak</div>
                                <div class="brand">Brand Tertinggi di OYO</div>
                            </div>
                            <div class="right-content">
                                <div class="button-detail">
                                    <div class="arrow-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                                            <path d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/townhouse-2.jpg" alt="townhouse-2.jpg">
                        <div class="content-slide">
                            <div class="left-content">
                                <div class="project">2/4 OPERATIONAL PROJECT</div>
                                <div class="name-place">Townhouse Oak</div>
                                <div class="brand">Brand Tertinggi di OYO</div>
                            </div>
                            <div class="right-content">
                                <div class="button-detail">
                                    <div class="arrow-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                                            <path d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/townhouse-3.jpg" alt="townhouse-3.jpg">
                        <div class="content-slide">
                            <div class="left-content">
                                <div class="project">3/4 OPERATIONAL PROJECT</div>
                                <div class="name-place">Townhouse Oak</div>
                                <div class="brand">Brand Tertinggi di OYO</div>
                            </div>
                            <div class="right-content">
                                <div class="button-detail">
                                    <div class="arrow-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                                            <path d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/townhouse-4.jpg" alt="townhouse-4.jpg">
                        <div class="content-slide">
                            <div class="left-content">
                                <div class="project">4/4 OPERATIONAL PROJECT</div>
                                <div class="name-place">Townhouse Oak</div>
                                <div class="brand">Brand Tertinggi di OYO</div>
                            </div>
                            <div class="right-content">
                                <div class="button-detail">
                                    <div class="arrow-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                                            <path d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <img src="/images/townhouse-2.jpg" alt="townhouse-2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/townhouse-3.jpg" alt="townhouse-3.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/townhouse-4.jpg" alt="townhouse-4.jpg">
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <!-- Our Testimonial -->
    <div class="our_testimonial">
        <div class="ourt_content">
            <div class="left_content">
                <div class="subtitle_ourt">
                    <div class="horizontaol_ourt"></div>
                    <div class="subtitle_text">OUR TESTIMONIALS</div>
                </div>
                <div class="title_ourt">
                    Yang Klien Kami Katakan
                </div>
                <div class="fill_testimonial">
                    <img src="/images/left-quotes.png" alt="left-quotes.png">
                    <p>GWA Group membantu hotel
                        saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                </div>
                <div class="whos_fill">
                    <img src="/images/ourt_said.png" alt="ourt_said.png">
                    <div class="whos-said">
                        <div class="whos-from">Chaim Desmond</div>
                        <div class="whos-subject">CEO of Yellow Hotel</div>
                    </div>
                </div>
            </div>
            <div class="right_content_testimonial">
                <img src="/images/people_client.png" alt="people_client.png">
                <div class="button-swipe">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.8388 41.1333L17.5573 27.8518C15.9888 26.2833 15.9888 23.7166 17.5573 22.1481L30.8388 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                        <path d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact">
        <div class="flex-row-contact">
            <div class="contact-left">
                <div class="contact-subtitle">
                    <div class="horizontal_icon_contact"></div>
                    HUBUNGI KAMI
                </div>
                <div class="contact-title">
                    <h1>Ingin Mendiskusikan</h1>
                    <h1>Bisnis Pariwisata Anda ?</h1>
                </div>
                <div class="horizontal-logo-grey"></div>
                <div class="contact-p">
                    Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !
                </div>
            </div>
            <div class="contact-right">
                <div class="form-input">
                    <form action="">
                        <div class="input-name">
                            Nama Lengkap
                            <input type="text" class="">
                        </div>
                        <div class="input-name">
                            Nama Perusahaan
                            <input type="text" class="">
                        </div>
                        <div class="input-name">
                            Nomor Whatsapp Aktif
                            <input type="text" class="">
                        </div>
                        <button type="submit">
                            Jadwalkan Konsultasi
                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
                                <path d="M25.5427 10.8651L36.1741 21.4965L25.5427 32.1279" stroke="#292D32" stroke-width="2.10176" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.39917 21.4966H35.8763" stroke="#292D32" stroke-width="2.10176" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-circle-left">
            <div class="left">
                <svg xmlns="http://www.w3.org/2000/svg" width="210" height="461" viewBox="0 0 210 461" fill="none">
                    <path d="M-229.631 328.008C-283.198 213.135 -233.334 76.5099 -118.256 22.8481C-3.17811 -30.8137 133.534 18.8099 187.101 133.683C240.667 248.556 190.804 385.182 75.7256 438.843C-39.3525 492.505 -176.065 442.882 -229.631 328.008Z" stroke="black" />
                </svg>
            </div>
            <div class="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="343" height="583" viewBox="0 0 343 583" fill="none">
                    <path d="M-72.2043 28.3434C-217.867 96.2669 -280.985 269.205 -213.18 414.613C-145.376 560.021 27.6744 622.832 173.337 554.908C319 486.985 382.118 314.046 314.313 168.639C246.508 23.231 73.4583 -39.5802 -72.2043 28.3434Z" stroke="black" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <img src="/images/logo.png" alt="logo.png" class="footer_image">
            <div class="list-footer">
                <div class="list-footer-content">
                    <div class="heading-footer">Halaman Utama</div>
                    <div class="value-footer">Homepage</div>
                </div>
                <div class="list-footer-content">
                    <div class="heading-footer">Perusahaan</div>
                    <div class="value-footer">Tentang Kami</div>
                    <div class="value-footer">Daftar Hotel</div>
                </div>
                <div class="list-footer-content">
                    <div class="heading-footer">Temukan Kami</div>
                    <div class="value-footer">Bantuan</div>
                    <div class="value-footer">Hubungi Kami</div>
                </div>
                <div class="list-footer-content">
                    <div class="heading-footer">Social Media</div>
                    <div class="footer-sosmed">
                        <img src="/images/footer-facebook.png" alt="footer-facebook.png">
                        <img src="/images/footer-instagram.png" alt="footer-instagram.png">
                        <img src="/images/footer-youtube.png" alt="footer-youtube.png">
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-language">
                <div class="footer-language-left">
                    <div class="fll-content">Pemberitahuan Privasi</div>
                    <div class="fll-content">Syarat dan Ketentuan</div>
                </div>
                <div class="footer-language-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M32.2046 17.4099H13.8576" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23.0309 14.3208V17.4093" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.6263 17.3738C27.6263 25.2788 21.4493 31.6763 13.8384 31.6763" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.2219 31.6767C28.9128 31.6767 25.9714 29.9119 23.8572 27.136" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.515 41.3844H28.5453C37.7372 41.3844 41.414 37.7076 41.414 28.5157V17.4854C41.414 8.29347 37.7372 4.6167 28.5453 4.6167H17.515C8.32308 4.6167 4.64632 8.29347 4.64632 17.4854V28.5157C4.64632 37.7076 8.32308 41.3844 17.515 41.3844Z" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="footer-dropdown">
                        <select onchange="changeLanguageFooter()" id="languageSelect">
                            <option value="indonesia">
                                Bahasa Indonesia
                                <!-- <img src="/images/footer-arrow-down.png" alt="footer-arrow-down.png"> -->
                            </option>
                            <option value="english">English Language</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                © 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.
            </div>
        </div>
        <div class="footer-vector">
            <div class="first-vector">
                <svg xmlns="http://www.w3.org/2000/svg" width="993" height="334" viewBox="0 0 993 334" fill="none">
                    <path d="M-1 1C-1 1 345.069 372.135 992 389" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="second-vector">
                <svg xmlns="http://www.w3.org/2000/svg" width="1398" height="218" viewBox="0 0 1398 218" fill="none">
                    <path d="M-1 1C-1 1 222.009 227.897 588.236 39.2792C845.184 -93.0573 1113.85 325.238 1397 271.141" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="third-vector">
                <svg xmlns="http://www.w3.org/2000/svg" width="1369" height="340" viewBox="0 0 1369 340" fill="none">
                    <path d="M1 341C226.835 169.015 564.32 339.085 828.64 105.026C1092.96 -129.033 1368 105.026 1368 105.026" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
            <div class="fourth-vector">
                <svg xmlns="http://www.w3.org/2000/svg" width="724" height="402" viewBox="0 0 724 402" fill="none">
                    <path d="M1 451.855C1 451.855 265.5 402.614 347.5 153.663C429.5 -95.2869 723 34.933 723 34.933" stroke="white" stroke-opacity="0.3" />
                </svg>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function changeLanguage() {
            var language = document.getElementById('languageSelect').value;
            if (language == 'indonesia') {
                document.getElementById('countryFlag').src = '/images/indonesia.png';
                document.getElementById('countryName').textContent = 'Indonesia (ID)';
            } else if (language == 'english') {
                document.getElementById('countryFlag').src = '/images/united-kingdom.png';
                document.getElementById('countryName').textContent = 'English (En)';
            }
        }

        function changeLanguageFooter() {
            var language = document.getElementById('languageSelect').value;
            if (language == 'indonesia') {
                document.getElementById('countryName').textContent = 'Bahasa Indonesia';
            } else if (language == 'english') {
                document.getElementById('countryName').textContent = 'English Language';
            }
        }

        const swiper = new Swiper(".swiper", {
            direction: "horizontal",
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            // },
        });
    </script>
</body>

</html>