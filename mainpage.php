<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
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
                            <a class=" nav-link" href="#landing">Kenapa Kami?</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="#service">Rekomendasi Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class=" nav-link" href="#contact">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--landing page-->
    <div class="container-fluid intro-main" id="landing">
        <div class="leftText">
            <div class="leftText-title">
                Destinasi.id
            </div>
            <div class="leftText-subtitle">
                Your All In One Solution For Travel
            </div>
            <div class="leftText-desc">
                Tiket Keberangkatan, Booking Hotel dan lain-lain!
            </div>
            <div class="leftText-btn">
                <button onclick="location.href = '#service';">Mulai Sekarang</button>
            </div>
        </div>

    </div>

    <!--main body-->
    <div class="container-fluid main-body" id="service">
        <div class="row text-center mt-5">
            <span class="main-title">Rekomendasi Kami</span>
        </div>
        <div class="row">
            <div class="col-md-4 main-content">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Tokyo_Tower_and_around_Skyscrapers.jpg/238px-Tokyo_Tower_and_around_Skyscrapers.jpg" alt="tokyo" class="repair-img align-baseline mt-4 mx-lg-5 ">
                
                <div class="col">
                    <span class="main-subtitle align-middle"> Tokyo</span>
                </div>

                <div class="col">
                    <span class="main-desc">
                        Tokyo merupakan ibukota jepang.
                    </span>
                </div>

                <div class="col">
                    <button class="main-btn" onclick="location.href = 'form.php';">Mulai Berangkat</button>
                </div>

            </div>
            <div class="col-md-4 main-content">
                <img src="data:image/jpeg;base64,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" alt="paris" class="sell-img align-baseline mb-2 ">

                <div class="col ">
                    <span class="main-subtitle align-text-bottom">Paris</span>
                </div>

                <div class="col">
                    <span class="main-desc">
                        Paris merupakan ibukota perancis
                    </span>
                </div>

                <div class="col">
                    <button class="main-btn" onclick="location.href = 'form.php';">Mulai Berangkat</button>
                </div>

            </div>
            <div class="col-md-4 main-content">
                <img src="data:image/jpeg;base64,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" alt="jakarta" class="data-img align-baseline ">

                <div class="col ">
                    <span class="main-subtitle align-text-bottom">Jakarta</span>
                </div>

                <div class="col">
                    <span class="main-desc">
                        Jakarta merupakan ibukota indonesia
                    </span>
                </div>

                <div class="col">
                    <button class="main-btn" onclick="location.href = 'form.php';">Mulai Berangkat</button>
                </div>

            </div>
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

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>