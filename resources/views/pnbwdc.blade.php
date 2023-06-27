<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon/favicon-32x32.png" sizes="32x32" />
    <title>Detail PNBWDC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <nav style="width: 100%;height: 60px;background-color: var(--grey); display: block; line-height: 35px;">
        <img style="width: 200px;" src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
    </nav>
    <section class="detail-box">
        <img src="{{ asset('assets') }}/logo/WDC/Logo Type Dark Mode.png" alt="">
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
        <div class="detail-content">
            <div>
                <h1>Tentang Lomba</h1>
                <br>
                <hr>
                <br>
                <p>Biaya : <br><strong>Rp. 50.000</strong></p>
                <p>Tingkat : <br><strong>Sma/Smk/Sederajat & Perguruan Tinggi</strong></p>
                <br>
                <hr><br>
                <p>Politeknik Negeri Bali Web Design Competition (PNBWDC) Merupakan salah satu sub event perlombaan
                    dalam kegiatan
                    “Information and Technology Festival (Intech Fest) 2021”. Yang dimana kegiatan ini berfokus dalam
                    merancang serta
                    membuat sebuah website yang memiliki peran sangat penting di era modern ini. merancang serta membuat
                    sebuah website yang
                    memiliki peran sangat penting di era modern ini. Kegiatan ini ditujukan untuk Siswa/i
                    SMA/SMK/sederajat se-Indonesia
                    serta Mahasiswa/i perguruan tinggi se-indonesia. Melalui kegiatan ini, diharapkan dapat meningkatkan
                    kualitas dan
                    membangun peran generasi muda yang terjun dalam bidang IT khususnya desain web dalam upaya
                    peningkatan kualitas tenaga
                    terampil melalui peningkatan keahlian dalm bidang desain web.</p>
            </div>
            <img src="{{ asset('assets') }}/IllustrationOnly/webwdc.png" alt="">
        </div>
        <a href="{{ route('register') }}" class="primary-button">Daftar Sekarang</a>
    </section>
    <a href="{{ url('/') }}" class="detail-back"><strong>Kembali</strong></a>
</body>

</html>