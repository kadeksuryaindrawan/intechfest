<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Intechfest 2021</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/index.css">
</head>

<body>
    <section class="daftar">
        <div action="" class="daftar-box">
            <img src="{{ asset('assets') }}/logo/Logotype Dark Mode.png" alt="">
            <h1>
                @if ($data == 'Perguruan-tinggi')
                    PNBWDC Tingkat Perguruan Tinggi
                @elseif ($data == 'SMA-SMK')
                    PNBWDC Tingkat Sma/Smk/Sederajat
                @elseif ($data == 'Umum')
                    PNBDC Tingkat Umum
                @endif
            </h1>
            <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_lengkap" id="nama">
                    <label for="nins">
                        @if ($data == 'Perguruan-tinggi')
                            Nim (jika belum memiliki NIM sertakan “-” dalam kolom jawaban)
                        @elseif ($data == 'SMA-SMK')
                            NISN (jika belum memiliki NISN sertakan “-” dalam kolom jawaban)
                        @elseif ($data == 'Umum')
                            NIK (Jiks belum memiliki sertakan NISN/NIM)
                        @endif
                    </label>
                    <input type="text" name="nim_nisn_nik" id="nisn">
                    <label for="foto"><label for="">
                        @if ($data == 'Perguruan-tinggi')
                            Foto/Scan Kartu Tanda Mahasiswa (KTM)/ Surat Keterangan Mahasiswa jika ada
                        @elseif ($data == 'SMA-SMK')
                            Foto/Scan Kartu Siswa/ Surat Keterangan Siswa/i jika ada
                        @elseif ($data == 'Umum')
                            Foto/Scan Kartu Tanda Penduduk (KTP) / ( Jika belum Memiliki KTP Sertakan Kartu Siswa (Pelajar) / Kartu Tanda Mahasiswa (Mahasiswa))
                        @endif
                    </label><br></label>
                    <input type="file" name="ktm_kts_ktp" id="foto" class="border-none">
                    @if ($data != 'Umum')
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan">
                    @endif
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" id="kelamin">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                    <label for="telepon">No HP/WA</label>
                    <input type="text" name="telepon" id="telepon">
                    <label for="social">Id Line/Telegram</label>
                    <input type="text" name="social" id="social">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi" >
                        <option>Aceh</option>
                        <option>Sumatra Utara</option>
                        <option>Sumatra Barat</option>
                        <option>Riau</option>
                        <option>Kepulauan Riau</option>
                        <option>Jambi</option>
                        <option>Bengkulu</option>
                        <option>Sumatra Selatan</option>
                        <option>Kepulauan Bangka Belitung</option>
                        <option>Lampung</option>
                        <option>Daerah Khusus Ibukota Jakarta</option>
                        <option>Banten</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Daerah Istimewa Yogyakarta</option>
                        <option>Jawa Timur</option>
                        <option>Bali</option>
                        <option>Nusa Tenggara Barat</option>
                        <option>Nusa Tenggara Timur</option>
                        <option>Kalimantan Barat</option>
                        <option>Kalimantan Tengah</option>
                        <option>Kalimantan Selatan</option>
                        <option>Kalimantan Timur</option>
                        <option>Kalimantan Utara</option>
                        <option>Sulawesi Utara</option>
                        <option>Gorontalo</option>
                        <option>Sulawesi Tengah</option>
                        <option>Sulawesi Barat</option>
                        <option>Sulawesi Selatan</option>
                        <option>Sulawesi Tenggara</option>
                        <option>Maluku Utara</option>
                        <option>Maluku</option>
                        <option>Papua Barat</option>
                        <option>Papua</option>
                    </select>
                    @if ($data != 'Umum')
                    <label for="instansi">
                        @if ($data == 'Perguruan-tinggi')
                            Asal Perguruan
                        @elseif ($data == 'SMA-SMK')
                            Asal Sekolah
                        @endif
                    </label>
                    <input type="text" name="asal_sekolah_perguruan" id="instansi">
                    @endif
                    <input type="hidden" name="lomba" value="
                    @if ($data == 'Perguruan-tinggi')
                            1
                        @elseif ($data == 'SMA-SMK')
                            2
                        @elseif ($data == 'Umum')
                            3
                        @endif
                    ">
                    <input type="submit" value="Daftar" name="submit" class="primary-button">
            </form>
            <a href="/peserta" class="primary-link">Kembali</a>
        </div>
    </section>
</body>

</html>