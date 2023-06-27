<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon/favicon-32x32.png" sizes="32x32" />
    <title>Intechfest 2021</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body id="home">
    <!-- NAVBAR START -->
    <nav class="primary-bgr">
        <img src="{{ asset('assets') }}/logo/IF DARK MODE.png" alt="Logo">
        <div class="nav-menu">
            <div class="nav-items">
                <a href="#home" class="primary-link">Beranda</a>
                <a href="#tentang" class="primary-link">Tentang</a>
                <a href="#lomba" class="primary-link">Lomba</a>
                <a href="#chilltalks" class="primary-link">ChillTalks</a>
                <!-- <a href="#" class="primary-link">Link</a> -->
            </div>
            <a href="{{ route('login') }}" class="primary-button">Login Disini</a>
        </div>
        <div class="nav-toggle">
            <input type="checkbox">
            <div>
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1><b>Intech</b><span>fest</span></h1>
            <p>Information and Technology Festival merupakan brand kegiatan terbesar yang dimiliki oleh Unit Kegiatan
                Computer Club
                Politeknik Negeri Bali yang dilaksanakan setiap 1 (satu) tahun sekali.</p>
            <a class="primary-button" href="{{ route('register') }}">Daftar Sekarang</a>
        </div>
    </section>
    <div id="tentang"><br><br><br></div>
    <section class="about">
        <h1>Tentang Intechfest</h1>
        <div class="about-box">
            <p>Kegiatan INTECH FEST 2021 mengangkat tema <i>“Bring The Information Technology to The Next Level”</i>
                yang
                terdiri dari dua
                jenis kegiatan yaitu kompetisi untuk tingkat SMA/SMK/MA/Sederajat & tingkat perguruan tinggi serta
                Webinar Nasional.</p>
            <div class="about-image">
                <img src="{{ asset('assets') }}/IllustrationOnly/about.png" alt="">
            </div>
        </div>
    </section>
    <div id="chilltalks"><br><br><br></div>
    <section class="webinar" id="webinar">
        <div class="webinar-image">
            <img src="{{ asset('assets') }}/IllustrationOnly/WebinarIntechfest.png" alt="">
        </div>
        <div class="webinar-info">
            <h1>ChillTalks Intechfest</h1>
            <p>ChillTalks Intechfest
                Merupakan Kegiatan Seminar atau Webinar Nasional yang dimana pada tahun ini mengangkat topik
                Technopreneurship dan Data
                Security.</p>
            <div class="webinar-buttons">
                <a href="{{ route('register') }}" class="primary-button">Daftar ChillTalks</a>
                <!-- <a href="#" class="primary-button secondary-button webinar-button">Detail
                    ChillTalks</a> -->
            </div>
        </div>
    </section>
    <div id="lomba"><br><br><br></div>
    <section class="lomba" id="lomba">
        <h1>Cabang Lomba</h1>
        <div class="lomba-box">
            <div class="lomba-content">
                <div class="lomba-image">
                    <img src="{{ asset('assets') }}/IllustrationOnly/WDC.png" alt="">
                </div>
                <h2>PNBWDC</h2>
                <p>Politeknik Negeri Bali Web Design Competition (PNBWDC) Merupakan salah satu sub event perlombaan
                    dalam kegiatan
                    “Information and Technology Festival (Intech Fest) 2021”. Yang dimana kegiatan ini berfokus dalam
                    merancang serta
                    membuat sebuah website yang memiliki peran sangat penting di era modern ini.</p>
                <div class="lomba-buttons">
                    <a href="{{ route('register') }}" class="primary-button">Daftar</a>
                    <a href="{{ url('/pnbwdc') }}"
                        class="primary-button secondary-button lomba-button pnbwdc">Detail Lomba</a>
                </div>
            </div>
            <div class="lomba-content">
                <div class="lomba-image">
                    <img src="{{ asset('assets') }}/IllustrationOnly/CD.png" alt="">
                </div>
                <h2>PNBDC</h2>
                <p>Politeknik Negeri Bali Design Chellenge (PNBDC) Merupakan salah satu sub event perlombaan dalam
                    kegiatan “Information
                    and Technology Festival (Intech Fest) 2021”. Kegiatan ini akan berfokus dalam pembuatan sebuah
                    desain UI/UX serta
                    penyelesain suatu masalah yang nantinya akan dituangkan dalam sebuah desain yang menarik.</p>
                <div class="lomba-buttons">
                    <a href="{{ route('register') }}" class="primary-button">Daftar</a>
                    <a href="{{ url('/pnbdc') }}" class="primary-button secondary-button lomba-button">Detail
                        Lomba</a>
                </div>
            </div>
        </div>
    </section>
    <section class="timeline">
        <h1>Tahapan Perlombaan</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita facilis soluta recusandae laboriosam
            laborum esse, atque corporis! Quos, laudantium illum facere ea id laboriosam rem culpa maiores! Sit, ipsa
            facilis?</p> --> <br>
        <ul class="timeline-line">
            <!-- <li class="timeline-item">
                <div>
                    <p>tanggal</p>
                    <p><b>Pendaftaran</b></p>
                </div>
            </li> -->
            <li class="timeline-item">
                <div>
                    <p>4/9/2021</p>
                    <p><b>Technical Meeting</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>20/9/2021</p>
                    <p><b>Penyisihan Peserta</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>2/10/2021</p>
                    <p><b>Pembukaan Intechfest & Final PNBWDC</b></p>
                </div>
            </li>
            <li class="timeline-item">
                <div>
                    <p>3/10/2021</p>
                    <p><b>Final PNBDC, ChillTalks, Pengumuman juara & Penutupan Intechfest 2021</b></p>
                </div>
            </li>
        </ul>
    </section>
    <section class="affirmation primary-bgr">
        <div class="affirmation-image">
            <img src="{{ asset('assets') }}/IllustrationOnly/TungguApaLagi.png" alt="">
        </div>
        <div class="affirmation-content">
            <h1>Tunggu Apalagi?</h1>
            <p>Yuk ikutan! Ketahui batasanmu dan lewati disini! <strong>To The Next Level!</strong></p>
            <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        </div>
    </section>
    <section class="faq">
        <h1 style="text-align: center;">FAQ</h1>
        <div class="faq-accordion">
            <div class="faq-accordion-item" id="question1">
                <a class="faq-accordion-link" href="#question1">Media apa yang akan digunakan saat lomba?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Media online, untuk software dan metode yang digunakan sebagian besar bebas namun akan dibahas
                        lebih lanjut saat TM</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question2">
                <a class="faq-accordion-link" href="#question2">Jika pemenang lomba nanti berada diluar daerah,
                    bagaimana cara penyampaian hadiahnya?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Jika peserta berada diluar daerah maka hadiah akan ditransfer menggunakan rekening dari panitia
                        Intech Fest 2021</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question3">
                <a class="faq-accordion-link" href="#question3">Bagaimana cara pendaftarannya? Apakah ada formulir yang
                    harus diisi?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Pendaftaran akan melalui website official Intech Fest 2021</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question4">
                <a class="faq-accordion-link" href="#question4">Apa saja kriteria penilaiannya?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Kriteria penilaian akan diberitahu saat Technical Meeting
                    </p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question5">
                <a class="faq-accordion-link" href="#question5">Apakah ada juara favorit di kedua lomba? kalau ada media
                    apa yang digunakan untuk voting
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Tidak ada juara favorit</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question6">
                <a class="faq-accordion-link" href="#question6">Apakah ada kompensasi waktu untuk tim yang mengalami
                    masalah jaringan internet pada saat presentasi? berapa lama?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Untuk presentasi bisa di sesuaikan sama berapa tim yang masuk final dan melakukan presentasi.
                        Mungkin kurang lebih 3 - 5
                        menit. Jika ada penampilan prototype di PNBDC mungkin bisa 5 menit atau kurang. Tergantung lagi
                        dengan jumlah peserta
                        dan durasi presentasi</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question7">
                <a class="faq-accordion-link" href="#question7">Apakah Webinar/Chilltalks dibuka untuk umum?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Webinar/Chilltalks dengan topik technopreneurship dan data security dibuka untuk UMUM</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question8">
                <a class="faq-accordion-link" href="#question8">Berapa harga pendaftaran webinar?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>Hanya 15k</p>
                </div>
            </div>
            <div class="faq-accordion-item" id="question9">
                <a class="faq-accordion-link" href="#question9">Benefit dari webinar intech?
                    <ion-icon name="add-outline" class="faq-add"></ion-icon>
                    <ion-icon name="close-outline" class="faq-remove"></ion-icon>
                </a>
                <div class="faq-answer">
                    <p>e-sertifikat <br> ilmu bermanfaat <br> relasi <br> inventasi leher keatas</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsorships">
        <h1>Sponsorships</h1>
        <ul class="sponsorships-box">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>
    <section class="footer primary-bgr">
        <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
        <ul class="footer-info group-1">
            <li>Informasi</li>
            <li><i class="fa fa-envelope"></i>
                <p>intechfestcc@gmail.com</p>
            </li>
            <li><i class="fa fa-building"></i>
                <p>Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
            </li>
            <li><i class="fa fa-phone"></i>
                <p>62 822-8199-3081</p>
            </li>
            <li><i class="fa fa-phone"></i>
                <p>62 831-1419-4898</p>
            </li>
        </ul>
        <!-- <ul class="footer-info group-2">
            <li>Informasi</li>
            <li><a href="#">Coming Sonn...</a></li>
            <li><a href="#">Coming Sonn...</a></li>
            <li><a href="#">Coming Sonn...</a></li>
        </ul> -->
        <div class="footer-box">
            <h3>Social Media</h3>
            <div>
                <a href="https://instagram.com/ukmcomputerclub?utm_medium=copy_link" rel="noopener noreferrer"
                    target="_blank"><i class="fa fa-instagram"> </i><span>@ukmcomputerclub</span></a>
                <a href="https://instagram.com/intechfest.cc?utm_medium=copy_link" rel="noopener noreferrer"
                    target="_blank"><i class="fa fa-instagram"></i><span>@intechfest.cc</span></a>
                <a href="https://instagram.com/pnbwdc?utm_medium=copy_link" rel="noopener noreferrer" target="_blank"><i
                        class="fa fa-instagram"></i><span>@pnbwdc</span></a>
            </div>
            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, ullam?</p>
            <a href="#" class="primary-button">IG Intechfest</a>
            <a href="#" class="primary-button footer-button">Whatsapp</a> -->

        </div>
    </section>
    <div style="background-color: var(--grey); height: 30px;"></div>
    <script src="{{ asset('js') }}/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>