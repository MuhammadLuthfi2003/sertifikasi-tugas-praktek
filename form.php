<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid main-navbar mx-0 px-0">
        <nav class="navbar navbar-light navbar-expand-lg bg-custom ">
            <div class="container-fluid main-nav">
                <a class="navbar-brand align-text-top" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/44/44942.png" width="60px" height="60px" class="d-inline align-text">
                    <span class='logotext'>Destinasi.id</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#puskomNav" aria-controls="puskomNav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end " id="puskomNav">
                    <ul class="navbar-nav navigation">
                        <li class="nav-item mx-2 ">
                            <a class=" nav-link" href="mainpage.php">Kenapa Kami?</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="mainpage.php">Rekomendasi Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="mainpage.php">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!--main body-->
    <div class="container-fluid main-body " id="form">
        <div class="row form-title ms-1">FORM PEMESANAN TIKET</div>

        <form class="container-5 form-text" method="POST" action="submit.php">

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="namaLengkap">Nama Lengkap</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap Anda"  name="nama_lengkap" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="nomorIdentitas">Nomor Identitas</label>
                </div>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="nomorIdentitas" placeholder="XXXXXXXXXXXXXXXX" name="nik" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="nomorHP">Nomor HP</label>
                </div>
                <div class="col-sm-9">
                    <input type="number"  class="form-control" id="nomorHP" placeholder="08XXXXXXXXXX" name="nomor_hp" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="tempatWisata">Tempat Wisata</label>
                </div>
                <div class="col-sm-9">
                    <select id="tempatWisata" class="form-control" name="tempat_wisata">
                        <option>Tokyo</option>
                        <option>Paris</option>
                        <option>Jakarta</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="tanggalKunjungan"> Tanggal Kunjungan </label>
                </div>
                <div class="col-sm-9">
                    <input type="date"  max="13" class="form-control" id="tanggalKunjungan" name="tanggal_kunjungan" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <label for="pengunjungDewasa"> Pengunjung Dewasa </label>
                </div>
                <div class="col-sm-9">
                    <input type="number"  class="form-control" id="pengunjungDewasa" name="jml_dewasa" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                        <label for="pengunjungAnak" > Pengunjung Anak </label>
                        <label for="pengunjungAnak" class="form-subtext"> Usia dibawah 12 Tahun </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number"  class="form-control" id="pengunjungAnak" name="jml_anak" required>
                    </div>
                </div>

            <div class="form-group row">
                <div class="keterangan">
                    <div class="col-form-label">
                        <label class="displayHarga">Harga Tiket : Rp. 12.000.000</label>
                    </div>
                    <div class="col-form-label">
                        <label>Total Bayar : </label>
                        <label id="totalBayar">Rp.000.000</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="form-check col-form-label ms-3">
                    <input class="form-check-input" type="checkbox" value="true" id="konfirmasi" required>
                    <label class="form-check-label" for="konfirmasi">
                        <span class="konfirmasi-txt">Saya dan/ atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</span>
                    </label>
                </div>
            </div>

            <div class="form-group row">
                <div class="col col-form-label">
                    <button class="btn btn-primary" id="btn-bayar" type="button">Hitung Total Bayar</button>
                    <input type="submit" class="btn btn-primary" id="btn-pesan" value="Pesan Tiket"></input>
                    <button class="btn btn-danger btn-cancel"  onclick="location.href = 'mainpage.php';">Cancel</button>
                </div>
            </div>



        </form>

        </div>
    </div>

    <!--footer-->
    <div class="container-fluid footer" id="contact">
        <div class="row footer-logo">
            <div class="col-2 m-4 mt-4">
                <img src="https://cdn-icons-png.flaticon.com/512/44/44942.png" class="footer-img" alt="puskom logo">
            </div>
            <div class="col footer-text">
                <div class="row mt-4">
                    <span class="footer-logo-title">Destinasi.id</span>
                </div>
                <div class="row">
                    <span class="footer-logo-desc">Your All In One Solution For Travel</span>
                </div>
            </div>
        </div>

        <div class="row footer-detail m-3">
            <div class="row alamat">
                Alamat:<br>
                Jl. Lorem Ipsum <br>
                No.87,
                Jakarta Barat,<br>
                Indonesia, 88726
            </div>
            <div class="row telp">
                No. Telp : 081283940223
            </div>
            <div class="row fax">
                Fax : 123012301
            </div>
        </div>
    </div>

    <script src="form-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>