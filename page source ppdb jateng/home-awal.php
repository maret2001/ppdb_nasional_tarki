<?php
$filename = 'counter.txt';
function counter()
{
    global $filename;

    if (file_exists($filename)) {
        $value = file_get_contents($filename);
    }
    file_put_contents($filename, ++$value);
}
counter();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta Content="PPDB Sekolah Tarakanita" Name="PPDB" />
    <title>PPDB Sekolah Tarakanita</title>

    <script>
        // Fungsi untuk refresh halaman saat pertama kali dibuka
        function initialRefresh() {
            // Cek apakah pengguna pertama kali membuka halaman atau sudah pernah sebelumnya
            if (!localStorage.getItem("hasLoadedOnce")) {
                localStorage.setItem("hasLoadedOnce", "true"); // Set bahwa halaman sudah pernah dibuka
                location.reload(); // Refresh halaman
            }
        }
    </script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" onload="initialRefresh()">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">PPDB SEKOLAH TARAKANITA</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">LINK PPDB</a></li>
                        <li><a class="page-scroll" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <!-- <li data-target="#inSlider" data-slide-to="1"></li> -->
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Selamat Datang<br />
                            di Web Portal<br />
                            Link PPDB Online <br />Sekolah Tarakanita Nasional<br /></h1>
                    </p>
                    </div>
                    <div class="carousel-image wow zoomIn">
                        <img src="img/tarki_png.png" alt="laptop" />
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one"></div>
            </div>
        </div>
    </div>

    <section id="features" class="container features">
        <h3><Strong><?php echo 'Total pengunjung mulai tanggal 25 September 2023 14:25 WIB: ' . file_get_contents($filename); ?></Strong></h3>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1><b>Link PPDB Online Sekolah Tarakanita Nasional</b></h1>
                <p>Selamat datang di PPDB Sekolah Tarakanita Nasional. Terima kasih atas kunjungan Anda.Silahkan memilih sekolah yang Anda Inginkan. Area layanan kami mencakup 7 Wilayah yang meliputi Wilayah Bengkulu, Lahat, Tangerang dengan penambahan sekolah baru di Tubaba Lampung, Jakarta dengan 18 unit seolah di Blok Pluit Jakarta Utara, Rawa Mangun Jakarta Timur, Blok Patal Senayan , Blok Q Jakarta Selatan dan Blok Pulo Raya jakarta Selatan, Wilayah Jawa Tengah, Wilayah Yogyakarta dan Wilayah Surabaya.</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">

                <h2>Wilayah Bengkulu </h2>
                <p>Selamat datang di PPDB Sekolah Tarakanita Wilayah Bengkulu. Berkomitmen mencerdaskan generasi muda menjadi pribadi yang Cerdas Berintegritas serta mampu menghadapi tantangan masa kini dan masa depan. Pada Tahun Ajaran 2024-2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, dan SMA untuk bergabung bersama kami. Terima kasih atas kunjungan Anda.</p>
                <a href="bengkulu.html" class="btn btn-primary">Klik Disini</a>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
                <img src="img/pict/Bengkulu.png" alt="dashboard" class="img-responsive pull-right">
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 text-right wow fadeInLeft">
                <img src="img/pict/Lahat.png" alt="dashboard" class="img-responsive pull-right">
            </div>
            <div class="col-lg-6 features-text wow fadeInRight">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Lahat </h2>
                <p>Selamat datang di PPDB Wilayah Lahat. Terima kasih atas kunjungan Anda.Sekolah Santo Yosef Lahat berkarya di bidang pendidikan sejak tahun 1936. Berkomitmen mendidik generasi muda menjadi pribadi yang Cerdas Berintegritas serta mampu menghadapi tantangan masa kini dan masa depan. Pada Tahun Ajaran 2024-2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, dan SMA untuk bergabung bersama kami.</p>
                <a href="lahat.html" class="btn btn-primary">Klik Disini</a>
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Tangerang </h2>
                <p>Selamat datang di PPDB Wilayah Tangerang. Silahkan memilih unit sekolah yang tersedia. Untuk Wilayah Tangerang kami melayani di 10 unit sekolah. Pada Tahun Ajaran 2024/2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, dan SMA untuk bergabung bersama kami. Terima kasih atas kunjungan Anda.</p>
                <a href="tangerang.php" class="btn btn-primary">Klik Disini</a>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
                <img src="img/pict/Tangerang.png" alt="dashboard" class="img-responsive pull-right">
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 text-right wow fadeInLeft">
                <img src="img/pict/Jakarta.png" alt="dashboard" class="img-responsive pull-right">
            </div>
            <div class="col-lg-6 features-text wow fadeInRight">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Jakarta </h2>
                <p>Selamat datang di ppdb Tarakanita Wilayah Jakarta. Silahkan memilih unit sekolah yang tersedia. Untuk Wilayah Jakarta kami melayani di 18 unit sekolah sebagai berikut: Jakarta Utara meliputi TK Tarakanita 4, SD Tarakanita 4 , SMP Tarakanita 2 dan SMA Tarakanita terintegrasi di satu lokasi strategis di depan halte Bus Way Pluit. Di Blok Rawa Mangun Jakarta Timur pilihan sekolah kami meliputi TK Tarakanita 5, SD Tarakanita 5 dan SMP Tarakanita 4. Di Blok Patal Senayan TK Tarakanita 3, SD Tarakanita 3 dan SMP Tarakanita 3. Di Blok Q Jakarta Selatan TK Tarakanita 2 dan SMK Tarakanita Jakarta dan di blok Pulo Raya Jakarta SD Tarakanita 2, SMP Tarakanita 1 dan SMA Tarakanita 1. Terima kasih atas kepercayaan Anda dan selamat bergabung dengan kami. Tarakanita - "Cerdas Berintegritas".</p>
                <a href="jakarta.html" class="btn btn-primary">Klik Disini</a>
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Jawa Tengah </h2>
                <p>Selamat datang di PPDB Wilayah Jawa Tengah. Terima kasih atas kunjungan Anda. Sekolah Tarakanita Wilayah Jawa Tengah berkomitmen mendidik generasi muda menjadi pribadi yang "Cerdas Berintegritas" serta mampu menghadapi tantangan masa kini dan masa depan. Pada Tahun Ajaran 2024-2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, SMA dan SMK untuk bergabung melalui bersama kami</p>
                <a href="jateng.html" class="btn btn-primary">Klik Disini</a>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
                <img src="img/pict/Jateng.png" alt="dashboard" class="img-responsive pull-right">
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 text-right wow fadeInLeft">
                <img src="img/pict/Yogyakarta.png" alt="dashboard" class="img-responsive pull-right">
            </div>
            <div class="col-lg-6 features-text wow fadeInRight">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Yogyakarta </h2>
                <p>Selamat datang di PPDB Wilayah Yogyakarta. Terima kasih atas kunjungan Anda. Selamat datang di ppdb Tarakanita Wilayah Yogyakarta.Terima kasih atas kunjungan Anda. Sekolah Tarakanita Wilayah Yogyakarta berkomitmen mendidik generasi muda menjadi pribadi yang "Cerdas Berintegritas" serta mampu menghadapi tantangan masa kini dan masa depan. Pada Tahun Ajaran 2024-2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, dan SMA untuk bergabung melalui bersama kami</p>
                <a href="yogyakarta.html" class="btn btn-primary">Klik Disini</a>
            </div>
        </div>

        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">
                <!-- <small>INSPINIA</small> -->
                <h2>Wilayah Surabaya </h2>
                <p>Selamat datang di PPDB Wilayah Surabaya. Terima kasih atas kunjungan Anda. Sekolah Tarakanita Wilayah Surabaya berkomitmen mendidik generasi muda menjadi pribadi yang "Cerdas Berintegritas" serta mampu menghadapi tantangan masa kini dan masa depan. Pada Tahun Ajaran 2024-2025, membuka kesempatan bagi calon peserta didik TK, SD, SMP, dan SMA untuk bergabung bersama kami</p>
                <a href="surabaya.html" class="btn btn-primary">Klik Disini</a>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
                <img src="img/pict/Surabaya.png" alt="dashboard" class="img-responsive pull-right">
            </div>
        </div>
    </section>

    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Kontak Kami</h1>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <address>
                        <strong><span class="bluetarki">Yayasan Tarakanita</span></strong><br />
                        Jl. Salemba Tengah No.23, RT.10/RW.3,<br />
                        Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440<br />
                        <abbr title="Phone">Ph:</abbr> (021) 3908836, Call-center Pusat: +628118771984,Lahat 0812 7868 5845, &nbsp;<a href="https://tarakanita.org/ppdblahat">https://tarakanita.org/ppdblahat</a> Bengkulu 08117896445&nbsp;<a href="https://ppdbtarkibkl.web.id/">https://ppdbtarkibkl.web.id</a>, Tangerang +6287750515930 &nbsp;<a href="https://tarakanita.org/ppdbtangerang">https://tarakanita.org/ppdbtangerang</a>, Jakarta &nbsp;<a href="https://tarakanita.org/ppdbjakarta">https://tarakanita.org/ppdbjakarta</a> , Jawa Tengah Ph: 0293361334 &nbsp;<a href="https://tarakanita.org/ppdbjateng">https://tarakanita.org/ppdbjateng</a>, Surabaya Ph: (031)8418938 &nbsp;<a href="https://tarakanita.org/ppdbsurabaya">https://tarakanita.org/ppdbsurabaya</a>
                    </address>
                </div>
                <!--             <div class="col-lg-4">
                <p class="text-color">
                    Jl. Salemba Tengah No.23, RT.10/RW.3, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440
                </p>
            </div> -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-primary">Kunjungi Media Sosial Tarki</a>
                    <p class="m-t-sm">
                        follow kami juga di sosial media
                    </p>
                    <ul class="list-inline social-icon">
                        <li><a href="https://twitter.com/YysTarakanita"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://id-id.facebook.com/public/Yayasan-Tarakanita"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/tarakanitayayasan"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UCt3rn5GLtVElu2KLEXPG4YA"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p><strong>&copy; 2021 Sub Biro Teknologi Informasi</strong><br />Yayasan Tarakanita</p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/inspinia.js"></script>
</body>

</html>