@extends('forms')
    @section('alternate-admin')
    <title>Formulir Pendaftaran SMA</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Custom CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+Z/yJlW63V4TAjKT2fC8EvFqWkPoRhxzI9IdZQwpS3zFZO"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        padding-top: 60px; /* To make space for fixed navbar */
      }
      .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
      }

      .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
      }

      .card {
        opacity: 0; /* Setting initial opacity to 0 */
        transform: translateY(20px); /* Move the cards down initially */
        transition: transform 0.5s, opacity 1s; /* Adding transition */
      }

      .card.show {
        opacity: 1; /* Making the card visible when .show class is added */
        transform: translateY(
          0
        ); /* Move the cards up when .show class is added */
      }

      .cropped-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
      }
      .card-body {
        padding-left: 5%;
        padding-right: 5%;
      }

      .whatsapp-button {
        background-color: green;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 20px;
      }

      .whatsapp-button img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
      }
      .tabelDokumen {
        margin-top: -80px;
        text-align: right;
      }

      .footer {
        background-color: #d2d0d0;
        padding: 20px 0;
        text-align: center;
        flex-shrink: none;
      }

      .containerForm {
        width: 60%;
        margin: 0 auto;
      }
      /* Your existing CSS styles go here */

      /* Add new CSS rules for mobile responsiveness */
      @media (max-width: 576px) {
        .navbar {
          flex-direction: column;
        }

        .navbar-brand {
          margin-bottom: 10px;
        }

        .navbar-toggler {
          margin-top: 10px;
        }

        .navbar-nav {
          flex-direction: column;
          text-align: center;
        }

        .navbar-nav .nav-item {
          margin-bottom: 5px;
        }

        .footer {
          padding: 10px 0;
        }
      }
      body {
        height: 100vh; /* To create enough space for scrolling effect */
        margin: 0;
      }
      .input-group-text {
        background-color: rgb(255, 255, 255);
        border-radius: 0;
        border: none;
      }
      .jumbotron {
        background-image: url("https://ppdbtarki.tarakanitapusat.or.id/public/image/backgroundweb1.jpg"); /* Replace 'your-image-url.jpg' with the path to your image */
        background-size: cover;
        background-position: center;
        padding: 100px 0; /* Adjust the padding to reduce the size of the jumbotron */
        color: #fff;
        position: relative;
        text-align: center; /* Center the text horizontally */
        opacity: 60%;
        height: 50px;
      }

      .jumbotron::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(
          0,
          0,
          0,
          0.5
        ); /* Adjust the alpha value for the darkness level */
      }
      .card-header {
        font-family: sans-serif;
        font-style: italic;
      }

      .display-3 {
        font-size: 3rem; /* Adjust the font size to your preference */
        margin-bottom: 0;
        transform: translateY(-100%);
        opacity: 0;
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
      }
      .form-control {
        border-color: #828282;
      }
      .form-select {
        border-color: #828282;
      }
      .form-control-file {
        font-family: Arial, Helvetica, sans-serif;
      }
      .captionTabel {
        font-family: sans-serif;
        margin-top: 10px;
        font-weight: bold;
      }
      sup {
        color: red;
      }

      body.scrolled .display-3 {
        transform: translateY(0);
        opacity: 1;
      }
      .btn-primary {
        margin: 0px 2px;
        border-radius: 3pt;
      }
      .btn-primary:hover {
        background-color: rgb(93, 148, 231);
      }
      .btn-info {
        margin: 0px 2px;
        border-radius: 3pt;
        color: white;
      }
      .btn-success {
        margin: 0px 2px;
        border-radius: 3pt;
      }
      .btn-warning {
        margin: 0px 2px;
        border-radius: 3pt;
      }
      .btn-warning:hover {
        background-color: rgb(239, 163, 42);
      }
      .btn-dark {
            color: white;
            background-color: goldenrod;
            font-weight: bolder;
        }
      .btn-danger {
        width: 100px;
      }
      .wiljkt {
        font-family: Arial, Helvetica, sans-serif;
      }
      .bgCover {
        background-image: url("image/backgroundweb1.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">
          <strong>FORMULIR PENDAFTARAN SMA</strong>
        </h1>
      </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container gap-2">
        <!-- <a class="navbar-brand" href="home.html">Home</a> -->
        <!-- <input type="submit" class="btn btn-dark" value="Home" /> -->
        <a href="https://ppdbtarki.tarakanitapusat.or.id/bengkulu" class="btn btn-dark mr-2" style="font-size: medium;">
            <i class="fa-solid fa-pen"></i> Daftar PPDB
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse gap-2" id="navbarNav">
            <ul class="navbar-nav gap-1 mx-lg-1 my-lg-1">
                <a href="/bengkulu/info" class="btn btn-primary mr-2">
                    <i class="fas fa-search"></i> Info & Syarat Pendaftaran
                </a>
                <a href="/bengkulu/jadwal" class="btn btn-info mr-2">
                    <i class="fas fa-calendar"></i> Jadwal
                </a>
                <a href="/bengkulu/pengumuman" class="btn btn-success mr-2">
                    <i class="fas fa-info-circle"></i> Pengumuman
                </a>
                <a href="/bengkulu/contact" class="btn btn-warning mr-2">
                    <i class="fas fa-phone"></i> Contact & Call Center
                </a>
                @if (Auth::user() &&  Auth::user()->role_id == 1)
                      <a
                          href="/homeadmin"
                          class="btn btn-sm btn-warning mr-2"
                          style="margin-left: 0.5cm;width:max-content"
                      >
                          <i class="fas fa-sign-in"></i> Dashboard
                      </a>
                      <i class="btn btn-sm btn-danger mr-2"
                      style="margin-left: 0.5cm;width:max-content">
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <input class="btn btn-sm" type="submit" value="Logout">
                      </form></i>
                  @elseif (Auth::user() &&  Auth::user()->role_id == 2)
                      <a
                          href="/wilayah"
                          class="btn btn-sm btn-warning mr-2"
                          style="margin-left: 0.5cm;width:max-content"
                      >
                          <i class="fas fa-sign-in"></i> Dashboard
                      </a>
                      <i class="btn btn-sm btn-danger mr-2"
                      style="margin-left: 0.5cm;width:max-content">
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <input class="btn btn-sm" type="submit" value="Logout">
                      </form></i>
                  @elseif (Auth::user() &&  Auth::user()->role_id == 3)
                      <a
                          class="btn btn-sm btn-warning mr-2"
                          style="margin-left: 0.5cm;width:max-content"
                      >
                          <i class="fas fa-sign-in"></i> Dashboard
                      </a>
                      <i class="btn btn-sm btn-danger mr-2"
                      style="margin-left: 0.5cm;width:max-content">
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <input class="btn btn-sm" type="submit" value="Logout">
                      </form></i>
                  @else
                <a
                  href="/login"
                  class="btn btn-danger mr-2"
                  style="margin-left: 6cm; width:max-content"
                  >
                      <i class="fas fa-sign-in"></i> Login Akun PPDB
                </a>
                @endif
            </ul>
        </div>
        </div>
      </nav>
    <!-- Main Content -->
    <div class="containerForm px-2 my-5">
        <form id="contactForm" action="/simpanfeeder" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <!-----Accordion dimulai dari sini----->
        <div id="accordion">
          <div class="card" style="border-color: #828282">
            <div
              class="card-header"
              id="headingSatu"
              style="background-color: #ebe8e8"
            >
              <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                <strong>1. Isi Formulir Pendaftaran</strong>
              </a>
            </div>
            <div
              id="collapseOne"
              class="collapse show"
              data-bs-parent="#accordion"
            >
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label" for="namaLengkapSiswa"
                    ><strong>Nama Lengkap Siswa<sup>*</sup> :</strong></label
                  >
                  <input
                    class="form-control"
                    id="namaLengkapSiswa"
                    name="namaLengkapSiswa"
                    type="text"
                    placeholder="Nama Lengkap Siswa"
                    value="{{old('namaLengkapSiswa')}}"
                    required
                  />
                </div>
                <input type="hidden" id="tahun_ajaran" name="tahun_ajaran" value="{{$tahun_ajaran}}">
                <input type="hidden" id="idsekolah" value="{{$idsekolah}}">
                <input type="hidden" id="gelombang" name="gelombang" value="{{$gelombang}}">
                <input type="hidden" id="animo" value="{{$animo++}}">
                <input type="hidden" name="ppdb_id" value="{{$ppdb_id}}">
                <input type="hidden" id="tahunsekarang" value="{{$tahunsekarang}}">
                <input type="hidden" name="school_id" class="form-control form-control-sm" value="{{$idsekolah}}">
                <input type="hidden" name="wilayah_id" class="form-control form-control-sm" value="{{$wilayah_id}}">
                <div class="mb-3">
                    <label class="form-label" for="nomor_pendaftaran"
                      ><strong>Nomor Pendaftaran<sup>*</sup> :</strong></label
                    >
                    <input
                      class="form-control"
                      name="nomor_pendaftaran"
                      id="nomor_pendaftaran"
                      type="text"
                    />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="nomor_presensi"
                    ><strong>Nomor Presensi<sup>*</sup> :</strong></label
                  >
                  <input
                    class="form-control"
                    name="nomor_presensi"
                    id="nomor_presensi"
                    type="number"
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="noTelepon"
                    ><strong>No. Telepon(Orang Tua/Wali)<sup>*</sup> :</strong></label
                  >
                  <input
                    class="form-control"
                    id="noTelepon"
                    name="noTelepon"
                    type="text"
                    placeholder="No. Telepon"
                    value="{{old('noTelepon')}}"
                    required
                  />
                </div>
                <!----- sampai sini ----->
                <div class="mb-3">
                    <label class="form-label" for="asalSekolah"
                      ><strong
                        >Asal Sekolah<sup>*</sup> :</strong
                      ></label
                    >
                    <select
                      class="form-select"
                      id="asalSekolah"
                      name="namasekolah"
                      aria-label="Asal Sekolah"
                      required
                    >
                      @foreach($school as $s)
                      <option value="{{$s->nama}}">{{$s->nama}}</option>
                      @endforeach
                    </select>
                </div>
                div class="mb-3">
                    <label class="form-label" for="asalWilayah"
                      ><strong
                        >Asal Wilayah<sup>*</sup> :</strong
                      ></label
                    >
                    <select
                      class="form-select"
                      id="asalWilayah"
                      name="wilayah"
                      aria-label="Asal Wilayah"
                      required
                    >
                      @foreach($wilayah as $w)
                      <option value="{{$w->nama}}">{{$w->nama}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mendaftarUntukKelas"
                      ><strong
                        >Mendaftar untuk kelas<sup>*</sup> :</strong
                      ></label
                    >
                    <select
                      class="form-select"
                      id="mendaftarUntukKelas"
                      name="mendaftar_ke"
                      aria-label="Mendaftar untuk kelas"
                      required
                    >
                      <option value="Kelas 10" {{(old('mendaftar_ke')=="Kelas 10")? "selected" : "" }}>Kelas 10</option>
                      <option value="Kelas 11" {{(old('mendaftar_ke')=="Kelas 11")? "selected" : "" }}>Kelas 11</option>
                      <option value="Kelas 12" {{(old('mendaftar_ke')=="Kelas 12")? "selected" : "" }}>Kelas 12</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="card">
              <!--<div class="card-header" style="background-color: #ebe8e8">-->
              <!--  <strong>2. Upload Dokumen Pendukung</strong>-->
              <!--</div>-->
                <div class="card-body">
                  <!--<table class="table tabelDokumen table-hover table-sm">-->
                  <!--  <tbody>-->
                  <!--    <tr>-->
                  <!--      <div class="form-group">-->
                  <!--        <th>-->
                  <!--          <label for="akta_lahir"-->
                  <!--            >Upload Akta Lahir (.jpg, .jpeg,-->
                  <!--            .png)<sup></sup>&nbsp;:-->
                  <!--          </label>-->
                  <!--        </th>-->
                  <!--        <br />-->
                  <!--        <td>-->
                  <!--          <input-->
                  <!--            type="file"-->
                  <!--            class="form-control-file"-->
                  <!--            id="exampleFormControlFile1"-->
                  <!--            name="akta_lahir"-->
                  <!--            accept="image/*"-->
                  <!--            onchange="preview_akta(event)"-->
                  <!--          /><br>-->
                  <!--          <img id="output1" width="300" height="auto" style="margin-top:20px;"/>-->
                  <!--          <script>-->
                  <!--            var preview_akta = function(event) {-->
                  <!--              var reader = new FileReader();-->
                  <!--              reader.onload = function(){-->
                  <!--                var output = document.getElementById('output1');-->
                  <!--                output.src = reader.result;-->
                  <!--              };-->
                  <!--              reader.readAsDataURL(event.target.files[0]);-->
                  <!--            };-->
                  <!--          </script>-->
                  <!--        </td>-->
                  <!--      </div>-->
                  <!--    </tr>-->
                  <!--    <tr>-->
                  <!--      <div class="form-group">-->
                  <!--        <th>-->
                  <!--          <label for="exampleFormControlFile2"-->
                  <!--            >Upload Kartu Keluarga (.jpg, .jpeg,-->
                  <!--            .png)<sup></sup>&nbsp;:-->
                  <!--          </label>-->
                  <!--        </th>-->
                  <!--        <br />-->
                  <!--        <td>-->
                  <!--          <input-->
                  <!--            type="file"-->
                  <!--            class="form-control-file"-->
                  <!--            id="exampleFormControlFile2"-->
                  <!--            name="kk"-->
                  <!--            accept="image/*"-->
                  <!--            onchange="preview_kk(event)"-->
                  <!--          /><br>-->
                  <!--          <img id="output2" width="300" height="auto" style="margin-top:20px;"/>-->
                  <!--          <script>-->
                  <!--            var preview_kk = function(event) {-->
                  <!--              var reader = new FileReader();-->
                  <!--              reader.onload = function(){-->
                  <!--                var output = document.getElementById('output2');-->
                  <!--                output.src = reader.result;-->
                  <!--              };-->
                  <!--              reader.readAsDataURL(event.target.files[0]);-->
                  <!--            };-->
                  <!--          </script>-->
                  <!--        </td>-->
                  <!--      </div>-->
                  <!--    </tr>-->
                  <!--    <tr>-->
                  <!--      <div class="form-group">-->
                  <!--        <th>-->
                  <!--          <label for="exampleFormControlFile1"-->
                  <!--            >Upload Surat Baptis (.jpg, .jpeg,-->
                  <!--            .png)<sup></sup>&nbsp;:-->
                  <!--          </label>-->
                  <!--        </th>-->
                  <!--        <br />-->
                  <!--        <td>-->
                  <!--          <input-->
                  <!--            type="file"-->
                  <!--            class="form-control-file"-->
                  <!--            id="surat_baptis"-->
                  <!--            name="surat_baptis"-->
                  <!--            accept="image/*"-->
                  <!--            onchange="preview_sb(event)"-->
                  <!--          /><br>-->
                  <!--          <img id="output" width="300" height="auto" style="margin-top:20px;"/>-->
                  <!--          <script>-->
                  <!--            var preview_sb = function(event) {-->
                  <!--              var reader = new FileReader();-->
                  <!--              reader.onload = function(){-->
                  <!--                var output = document.getElementById('output');-->
                  <!--                output.src = reader.result;-->
                  <!--              };-->
                  <!--              reader.readAsDataURL(event.target.files[0]);-->
                  <!--            };-->
                  <!--          </script>-->
                  <!--        </td>-->
                  <!--      </div>-->
                  <!--    </tr>-->
                  <!--    <tr>-->
                  <!--      <div class="form-group">-->
                  <!--        <th>-->
                  <!--          <label for="surat_pernyataan"-->
                  <!--            >Upload Surat Pernyataan (.pdf Max: 1-->
                  <!--            MB)<sup></sup>&nbsp;:-->
                  <!--          </label>-->
                  <!--        </th>-->
                  <!--        <br />-->
                  <!--        <td>-->
                  <!--          <input-->
                  <!--            type="file"-->
                  <!--            name="surat_pernyataan"-->
                  <!--            class="form-control-file"-->
                  <!--            id="surat_pernyataan"-->
                  <!--            onchange="previewsp()"-->
                  <!--          /><br>-->
                  <!--          <iframe frameborder="0" class="previewsp"  width="300" height="auto" style="margin-top:20px;margin-bottom:20px;margin-left:20%;"></iframe>-->
                            <!-- <img id="output" width="200" height="100" style="margin-top:20px;"/> -->
                  <!--          <script>-->
                  <!--            function previewsp()-->
                  <!--            {-->
                  <!--                const previewsp = document.querySelector('#surat_pernyataan');-->
                  <!--                const previewsurat = document.querySelector('.previewsp');-->
                  <!--                previewsurat.style.display = 'block';-->
                  <!--                const oFReader = new FileReader();-->
                  <!--                oFReader.readAsDataURL(previewsp.files[0]);-->
                  <!--                oFReader.onload = function(oFREvent)-->
                  <!--                {-->
                  <!--                    previewsurat.src = oFREvent.target.result;-->
                  <!--                }-->
                  <!--            };-->
                  <!--          </script>-->
                  <!--        </td>-->
                  <!--      </div>-->
                  <!--    </tr>-->
                  <!--  </tbody>-->
                  <!--</table>-->
                  <!--<div class="captionTabel">-->
                  <!--  <caption>-->
                  <!--    <sup>Keterangan:</sup>-->
                  <!--    <sup>*<sup>)</sup> wajib, </sup>-->
                  <!--    <sup>**<sup>)</sup> tidak wajib,</sup>-->
                  <!--    <sup>***<sup>)</sup> wajib bagi yang beragama Katolik</sup>-->
                  <!--  </caption>-->
                  <!--</div>-->
                  <br />
                  <div class="d-grid">
                    <button class="btn btn-primary btn-m" type="submit">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-----Accordion sampai sini----->
      </form>
    </div>
    <br />
    <br />
    <script>
    //$(document).ready(function() {
        $('#jenisppdb').on('change', function() {
            var idsekolah=$('#idsekolah').val();
            var animo=$('#animo').val();
            var gelombang=$('#gelombang').val();
            var tahunsekarang=$('#tahunsekarang').val();
            var jenisppdb = $('#jenisppdb').val();
            var total = animo+'-'+idsekolah+'-'+jenisppdb+'-'+gelombang+'-'+tahunsekarang;
            $("#nomor_pendaftaran").val(total);
            // $('#result').text('You selected: ' + selectedValue);
        });
        $(document).ready(function() {
            var idsekolah=$('#idsekolah').val();
            var animo=$('#animo').val();
            var gelombang=$('#gelombang').val();
            var tahunsekarang=$('#tahunsekarang').val();
            var jenisppdb = $('#jenisppdb').val();
            var total = animo+'-'+idsekolah+'-'+jenisppdb+'-'+gelombang+'-'+tahunsekarang;
            $("#nomor_pendaftaran").val(total);
            // $('#result').text('You selected: ' + selectedValue);
        });
    //});
    </script>
    @endsection
