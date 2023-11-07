<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Politeknik Negeri Bengkalis</h1>
        <hr>

        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/image/polbeng2.jpeg" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Politeknik Negeri Bengkalis Gelar Milad Polbeng Ke-22</h5>

                        <p class="card-text">
                            Politeknik Negeri Bengkalis (Polbeng) secara resmi berumur 22 tahun tepatnya pada tanggal 17
                            September 2023. Menyambut Milad ke dua puluh dua tahun ini. Polbeng terus berupaya untuk
                            hadir sebagai salah satu pencetak mahasiswa yang kompeten di bidangnya. Maka, pada
                            pelaksanaan Milad tahun ini, mengambil tema maju bermartabat berprestasi untuk negeri,
                            dengan harapan Polbeng akan terus maju mencetak mahasiswa yang terus bergerak dalam bidang
                            pendidikan, serta berprestasi di berbagai bidang.

                            Johny Custer, S.T., M.T. selaku Direktur POLBENG mengungkapkan bahwa makna dari tema
                            tersebut adalah sebuah harapan bagi seluruh sivitas akademika POLBENG untuk terus bergerak
                            dan mengukir prestasi dimanapun. "Kami ingin Milad kali ini bisa menjadi pematik bagi kita
                            semua untuk terus berprestasi," jelas Johny.
                        </p>

                        <div class="text-r">
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Berita 2 -->
        <div class="col-md-12">
            <div class="card mb-4">
                <img src="/image/polbeng1.jpeg" class="card-img-top" alt="Gambar Berita 2">
                <div class="card-body">
                    <h5 class="card-title text-center">Direktur Polbeng Terima Kunjungan 10 Kampus Perguruan Tinggi</h5>

                    <p class="card-text">
                        Kunjungan kehormatan 10 perguruan tinggi dalam rangka kegiatan malam budaya (Culture Event)
                        sekaligus penandatanganan kerjasama dan silaturahmi konsorsium Politeknik Merdeka. Berlangsung
                        mulai Sabtu, 09 September 2023, di Aula TI Polbeng. Kedatangan Direktur Politeknik tersebut
                        disambut langsung oleh Direktur Polbeng, Johny Custer, S.T., M.T. di Kampus Polbeng, Jl. Bathin
                        Alam, Sungai Alam Bengkalis. Johny Custer menyampaikan ucapan terima kasih dan selamat datang
                        kepada direktur dan rombongan ke kampus Politeknik Negeri Bengkalis.

                        Dalam sambutannya, Direktur Polbeng, Johny Custer menyampaikan bahwa adanya kunjungan ini
                        merupakan kesempatan besar bagi Politeknik yang hadir bersama, sebagai bentuk perhatian
                        pengelola Perguruan Tinggi Vokasi terhadap Tridharma Perguruan Tinggi. Penandatanganan MoU
                        Konsorsium 8 Politeknik menandai awalnya kerjasama dan kolaborasi antar Perguruan Tinggi Vokasi,
                        termasuk Politeknik Negeri Indramayu, Politeknik Negeri Nusa Utara, Politeknik Negeri
                        Banyuwangi, Politeknik Negeri Cilacap, Politeknik Negeri Sambas, Politeknik Negeri Nunukan,
                        Politeknik Negeri Fak-Fak, dan Politeknik Negeri Bengkalis secara resmi melakukan konsorsium.
                    </p>

                    <div class="text">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan Berita Lainnya di sini -->

    </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>