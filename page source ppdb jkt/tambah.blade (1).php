@extends('homeunit')
    @section('alternate-admin')
    <h2>Edit Data Siswa Baru {{auth()->user()->school->nama}}</h2>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <a href="/newstudenttk" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="/newstudenttk/simpan" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="school_id" class="form-control form-control-sm" value="{{auth()->user()->school->id}}">
                    <input type="hidden" name="wilayah_id" class="form-control form-control-sm" value="{{auth()->user()->school->wilayah_id}}">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>nomor_pendaftaran</label>
                        <input type="text" name="nomor_pendaftaran" class="form-control form-control-sm" value="{{$animo.'-'.$idsekolah.'-'.$tahunsekarang}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" value="pria" required>
                            <label class="form-check-label">Pria</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" value="wanita" required>
                            <label class="form-check-label">Wanita</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>nik</label>
                        <input name="nik" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input name="tempat_lahir" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>telepon</label>
                        <input name="telepon" type="text" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Sekolah Asal</label>
                        <input name="sekolahasal" type="text" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>HP Orangtua</label>
                        <input name="hp_ortu" type="text" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Email Orang Tua</label>
                        <input name="email_ortu" type="text" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="agama">Agama</label>
                        <select class="form-select" name="agama" aria-label="Agama">
                            <option value="islam">Islam</option>
                            <option value="kristen protestan">Kristen Protestan</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="kong hu chu">Kong Hu Chu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Anak Ke</label>
                        <input type="number" name="anak_ke" class="form-control form-control-sm" required>
                        <label>Dari</label>
                        <input type="number" name="dari" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Saudara Kandung Yang Besekolah Di Tarakanita</label>
                        <input type="text" name="jumlah_saudara_tarki" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stat" value="diterima">
                            <label class="form-check-label">Diterima</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stat" value="tidak diterima">
                            <label class="form-check-label">Tidak Diterima</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stat" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Orangtua</label>
                        <input type="text" name="nama_orangtua" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label>Mendaftar Ke Kelas</label>
                        <input type="text" name="mendaftar_ke" class="form-control form-control-sm" value="I" readonly>
                    </div>
                    <div class="form-group">
                        <label>Surat Pernyataan</label>
                        <iframe frameborder="0" alt="pdf" class="previewsp"></iframe>
                        <input name="surat_pernyataan" id="surat_pernyataan" type="file" class="form-control form-control-sm" onchange="previewsp()" @if($errors->has('surat_pernyataan')) autofocus @endif required>@error('surat_pernyataan')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Kartu Keluarga</label>
                        <img class="img-preview-kk img-fluid mb-3 col-sm-3">
                        <input name="kk" id="kk" type="file" class="form-control form-control-sm" onchange="previewImagekk()" @if($errors->has('kk')) autofocus @endif required>@error('kk')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Akte Kelahiran</label>
                        <img class="img-preview-ak img-fluid mb-3 col-sm-3">
                        <input name="akta_lahir" id="akta_lahir" type="file" class="form-control form-control-sm" onchange="previewImageak()" @if($errors->has('akta_lahir')) autofocus @endif required>@error('akta_lahir')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Baptis(Untuk Yang Beragama Katolik)</label>
                        <img class="img-preview-sb img-fluid mb-3 col-sm-3">
                        <input name="surat_baptis" id="surat_baptis" type="file" class="form-control form-control-sm" onchange="previewImagesb()" @if($errors->has('surat_pernyataan')) autofocus @endif>@error('surat_baptis')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewsp()
        {
            const previewsp = document.querySelector('#surat_pernyataan');
            const previewsurat = document.querySelector('.previewsp');
            previewsurat.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(previewsp.files[0]);
            oFReader.onload = function(oFREvent)
            {
                previewsurat.src = oFREvent.target.result;
            }
        }
        function previewImagekk()
        {
            const imagekk = document.querySelector('#kk');
            const imagekkpreview = document.querySelector('.img-preview-kk');
            imagekkpreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(imagekk.files[0]);
            oFReader.onload = function(oFREvent)
            {
                imagekkpreview.src = oFREvent.target.result;
            }
        }
        function previewImageak()
        {
            const imageak = document.querySelector('#akta_lahir');
            const imageakpreview = document.querySelector('.img-preview-ak');
            imageakpreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(imageak.files[0]);
            oFReader.onload = function(oFREvent)
            {
                imageakpreview.src = oFREvent.target.result;
            }
        }
        function previewImagesb()
        {
            const imagesb = document.querySelector('#surat_baptis');
            const imagesbpreview = document.querySelector('.img-preview-sb');
            imagesbpreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(imagesb.files[0]);
            oFReader.onload = function(oFREvent)
            {
                imagesbpreview.src = oFREvent.target.result;
            }
        }
    </script>
    @endsection
