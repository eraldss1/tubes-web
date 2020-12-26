<?php
session_start();
include "koneksi.php";
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/slider.css" />
  <link rel="stylesheet" href="style/footer.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="index.js"></script>
  <title>Sony Indonesia</title>
</head>

<body class="bodyColor">
  <header>
    <div class="m-4" id="headerDropup">
      <div class="row justify-content-end">
        <div class="col-1" style="background-color: #504d56">
          <button type="button" class="btn text-light" onclick="closeHeader();">
            Tutup
            <svg height="12px" width="12px" fill="#FFFFFF" viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
              <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
            </svg>
          </button>
        </div>
      </div>
      <div class="row mx-3">
        <h3>SITUS SONY</h3>
      </div>
      <div class="row d-flex justify-content-evenly">
        <div class="col-3">
          <img src="assets/headerDropup-1.webp" style="width: 300px" alt="SONY GROUP SITE" />
          <p class="primary-caption">SONY GROUP SITE</p>
        </div>
        <div class="col-3 justify-content-around">
          <div class="row">
            <img src="assets/headerDropup-2.webp" style="width: 300px" alt="SONY GROUP SITE" />
            <p class="primary-caption">SONY DESIGN</p>
          </div>
          <div class="row">
            <img src="assets/headerDropup-3.webp" style="width: 300px" alt="SONY GROUP SITE" />
            <p class="primary-caption">PLAYSTATION</p>
          </div>
        </div>
        <div class="col-3">
          <img src="assets/headerDropup-4.webp" style="width: 300px" alt="SONY GROUP SITE" />
          <p class="primary-caption">SONY PROFESSIONAL</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center m-3 py-3 bg-light">
        <div class="col-3">
          <a class="link-caption" href="">Sony dan Lingkungan</a>
        </div>
        <div class="col-3">
          <a class="link-caption" href="">Sony Pictures</a>
          <p class="text-dark">Pusat film dan acara TV favorit Anda.</p>
        </div>
        <div class="col-3">
          <a class="link-caption" href="">Sony Music</a>
          <p class="text-dark">
            Artis klasik hingga bintang masa kini, lokal dan global.
          </p>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="d-flex justify-content-end container">
        <img src="assets/sony_logo_white.png" class="logo" alt="Sony Indonesia" />
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="d-flex col-6">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Elektronik
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Televisi & Home Cinema</a>
                </li>
                <li><a class="dropdown-item" href="#">Audio</a></li>
                <li><a class="dropdown-item" href="#">Kamera</a></li>
                <li><a class="dropdown-item" href="#">Kamera Video</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Playstation</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Hiburan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Dukungan</a>
            </li>
          </div>

          <div class="d-flex col-4">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Sony
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                if (isset($username)) {
                  echo '<div class="dropdown-item">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#1F2024" width="28px">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          Hi, ' . $username . '
                        </div>
                        <li><a class="dropdown-item" href="#">Ubah Profil</a></li>
                        <li><a class="dropdown-item" href="#">Keranjang Saya</a></li>
                        <li><a class="dropdown-item" href="logout.php">Keluar</a></li>';
                } else {
                  echo '<li><a class="dropdown-item" href="login.php">Masuk</a></li>
                        <li><a class="dropdown-item" href="register.html">Daftar</a></li>';
                }
                ?>
              </ul>
            </li>

            <li class="nav-item mx-3">
              <img class="nav-link" src="assets/love.svg" alt="" />
            </li>

            <div class="mx-2" style="background-color: #504d56">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cari Sony
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                  </svg>
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="bg-light" style="width: 300px">
                    <form class="d-flex">
                      <input class="form-control m-2 border-0" type="cari" placeholder="Cari" aria-label="Cari" />
                    </form>
                  </div>
                </ul>
              </li>
            </div>

            <div class="mx-2" style="background-color: #504d56">
              <li class="nav-item dropup">
                <button type="button" id="headerDropupButton" class="btn nav-link dropdown-toggle" onclick="headerDropup();">
                  Situs Sony
                </button>
              </li>
            </div>
          </div>
        </ul>
      </div>
    </nav>

    <div class="p-5 text-center bg-image" style="
          background-image: url('assets/headerJumbotron.webp');
          background-position: center;
          background-size: cover;
          height: 650px;
        ">
      <div class="d-flex justify-content-start align-items-center h-100 mx-5">
        <div class="w-25">
          <h5 class="mb-3 jumbotron-sony">α7C</h5>
          <h1 class="mb-3 jumbotron-sony">
            Ukuran Kecil, Kekuatan Full-frame
          </h1>
          <div class="jumbotron-sony">
            <a class="btn btn-outline-light btn-primary" href="#!" role="button">Pelajari Lebih Lanjut</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="sony-slick m-5">
    <h2 class="sony-slick-text">TERBARU</h2>
    <div class="items">
      <div><img src="assets/carousel/sony-caraousel-1.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-2.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-3.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-4.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-5.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-6.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-7.webp " /></div>
      <div><img src="assets/carousel/sony-caraousel-8.webp " /></div>
    </div>
  </div>

  <footer>
    <section class="container-fluid upper-footer">
      <div class="d-flex justify-content-around">
        <div class="row">
          <div class="col-sm m-5 px-3">
            <div class="sony-footer-text">Temukan Toko</div>
            <div class="sony-footer-box p-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#F8F8F8" viewBox="0 0 24 24" stroke="currentColor" width="20px">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <a href="" class="link-text" style="margin-right: 75px">Cari</a>
              <button class="btn btn-primary">Cari</button>
            </div>
          </div>
          <div class="col-sm m-5 px-3">
            <div class="sony-footer-text">Bantuan</div>
            <a href="" class="link-text">Bantuan Online</a><br />
            <a href="" class="link-text">Lokasi perbaikan</a><br />
            <a href="" class="link-text">Biaya perbaikan</a><br />
            <a href="" class="link-text">Informasi Garansi</a><br />
            <a href="" class="link-text">Status perbaikan</a><br />
          </div>
          <div class="col-sm m-5 px-3">
            <div class="sony-footer-text">Bersama Sony</div>
            <a href="" class="link-text">Eco</a><br />
            <a href="" class="link-text">Tanggung Jawab Sosial</a><br />
            <a href="" class="link-text">My Sony</a><br />
          </div>
          <div class="col-sm m-5 px-3">
            <div class="sony-footer-text">Berita & Info</div>
            <a href="" class="link-text">Berita</a><br />
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="row">
          <div class="col-sm m-5 px-3">
            <div class="sony-footer-box p-1">
              <img src="assets/id.png" style="width: 24px;" alt="">
              <a href="" class="link-text">Indonesia</a>
            </div>
          </div>
          <div class="col-sm m-5 px-3 flex-grow-1">
            <a href="" class="link-text">Produk & Solusi</a>
            <a href="" class="link-text">Profesional</a>
            <a href="" class="link-text">Perusahaan</a>
            <a href="" class="link-text">Karir</a>
            <a href="" class="link-text">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </section>
    <hr class="sony-hr" />
    <section class="container-fluid lower-footer">
      <div class="lower-footer-text p-4">
        <p class="p-text">
          COPYRIGHT © 2019 SONY INDONESIA. ALL RIGHTS RESERVED.
        </p>
        <a href="" class="link-text">SYARAT & KETENTUAN</a>
        <a href="" class="link-text">KEBIJAKAN PRIVASI</a>
      </div>
    </section>
  </footer>

  <!-- <script src="index.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>