<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
      footer {
        background-color: #ad0505;
        color: white;
      }

      .line {
        display: block;
        margin: 10px auto;
        width: 100%;
        height: 1px;
        background-color: #000000; /* Ubah warna garis sesuai keinginan (putih) */
      }

      .Copyright {
        text-align: center;
      }

      .col {
        justify-content: center;
      }

      .logo {
        text-align: center;
      }

      .kata {
        background-color: #ad0505;
        color: white;
        padding: 20px;
      }

      #katagory {
        padding: 50px 0;
      }

      .card-teknologi {
        width: 75%;
        height: 313px;
        border-radius: 5px;
        background-color: #ad0505;
        padding: 40px;
      }

      .circle-icon {
        width: 150px;
        height: 150px;
        background-color: white;
        border-radius: 50%;
        margin: 15px 0px 0px 40px;
        padding: 25px;
      }

      h4 {
        text-align: center;
        padding: 15px;
        color: white;
      }

      .circle-icon-tentang {
        padding-left: 25%;
        padding-top: 25px;
      }

      .tentang {
        background-color: #ffead2;
        margin-top: 100px;
        width: 100%;
      }

      .text-akhir {
        margin-top: 15%;
      }

      .text-tentang {
        margin-top: 75px;
      }

      .akhir {
        padding: 100px;
      }

      .jumbotron{
        height: 220px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    @include('Frontend.layouts.inc.header')

    <!---->
    <div class="kata text-center jumbotron">
      <p>
        "Jelajahi, Terinspirasi, dan <br />Bagikan Tulisanmu di <b>Inspiloger</b> <br />
        Tempatnya Literasi Digital!"
      </p>
    </div>

    <header class="mt-5 mb-5">
        <h1 class="display-5  text-start"><b>Terbaru</b></h1>
        <div class="p-4 shadow-sm mb-4 bg-body rounded">
            <div class="row">
                <div class="col-md-3 px-0 ps-4">
                    <h3 class="display-6 fst-italic">
                        Jan
                        <hr class="w-6 mt-2 mb-3" style="border-width: 3px;">
                        <span>15</span>
                    </h3>
                </div>

                <div class="col-md-4 px-5">
                    <img src="./Backend/dist/image-konten/bali1.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-md-5 px-0 ps-4">
                    <h2>Pantai Kuta Bali</h2>
                    <p>Pantai Kuta Bali, gemerlap pasir putih, ombak memikat, dan kehidupan malam yang dinamis. Keindahan alam dan hiburan menyatu dalam harmoni tropis.</p>
                </div>
            </div>

            <p class="lead mb-3 text-end">
                <a href="{{ route('authordetailsdetail-bali') }}" class="fw-bold">Lihat Detail
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="bi bi-arrow-right-short"
                        viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </a>
            </p>
        </div>

        <div class="p-4 shadow-sm mb-4 bg-body rounded">
            <div class="row">
                <div class="col-md-3 px-0 ps-4">
                    <h3 class="display-6 fst-italic">
                        Jan
                        <hr class="w-6 mt-2 mb-3" style="border-width: 3px;">
                        <span>16</span>
                    </h3>
                </div>

                <div class="col-md-4 px-5">
                    <img src="./Backend/dist/image-konten/tipsbelajar.jpg" alt="image_tips_belajar" class="img-fluid">
                </div>

                <div class="col-md-5 px-0 ps-4">
                    <h2>Tips Belajar</h2>
                    <p>Belajar jadi seru dengan teknik Pomodoro dan aktif terlibat! Pakai teknologi, ciptakan tempat belajar nyaman. Dengan ini, sukses belajar jadi gampang dimengerti.</p>
                </div>
            </div>

            <p class="lead mb-3 text-end">
                <a href="{{ route('authordetailstips-belajar') }}" class="fw-bold">
                    Lihat Detail
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="bi bi-arrow-right-short"
                        viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </a>
            </p>
        </div>
    </header>

    <!--catagory-->

    <section class="mt-5 mb-5">
        <h3 class="mb-4 display-5"><b>Kategori</b></h3>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card mx-auto mb-4" style="width: 18rem; text-align: center; background-color: #922B21; color: white;">
                    <a href="{{ route('authortechnology') }}" style="text-decoration: none; color: inherit;">
                        <div class="mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                                <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                                <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                              </svg>
                        </div>
                        <div class="card-body">
                            <h1>Teknologi</h1>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mx-auto mb-4" style="width: 18rem; text-align: center; background-color: #922B21; color: white;">
                    <a href="{{ route('authorbusiness') }}" style="text-decoration: none; color: inherit;">
                        <div class="mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                              </svg>
                        </div>
                        <div class="card-body">
                            <h1>Bisnis</h1>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mx-auto mb-4" style="width: 18rem; text-align: center; background-color: #922B21; color: white;">
                   <a href="{{ route('authorlifestyle') }}" style="text-decoration: none; color: inherit;">
                 <div class="mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z"/>
                          </svg>
                    </div>
                    <div class="card-body">
                        <h1>Gaya Hidup</h1>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    <!--Tentang Kami-->
    <div class="tentang">
      <div class="row">
        <div class="col-md-6">
          <div class="circle-icon-tentang">
            <img src="./Frontend/Image_Home/Rumah-Tersedia.png" width="300" alt="" />
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="text-tentang">
            <h3>Tentang Kami.</h3>
            <p>
             Inspiloger tempat di mana pengetahuan, inspirasi, dan kreativitas bersatu. Kami adalah komunitas online yang didedikasikan untuk menyediakan platform bagi para pembaca dan penulis untuk berbagi ide, pengalaman, dan wawasan
              melalui tulisan-tulisan yang menginspirasi.
            </p>
            <a href="{{ route('hometentang-kami') }}" class="btn btn-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <!--akhir-->
    <div class="akhir">
      <div class="row">
        <div class="col-md-6 text-center">
          <p class="text-akhir">Sudah siap bergabung dengan Inspiloger</p>
          <a href="{{ route('authorregister') }}" class="btn btn-danger">Daftar</a>
        </div>
        <div class="col-md-6">
          <div class="circle-icon-akhir text-center">
            <img src="./Frontend/Image_Home/images.jpg" alt="" width="300" />
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
    <section class="section-footer">
      <footer class="pb-1">
        <div class="logo">
          <img src="" alt="Logo." width="30" height="24" />
        </div>
        <div class="container p-3">
          <div class="row text-center">
            <div class="col">
              <p>Tentang Kami</p>
              <p>Syarat Ketentuan & Privasi.</p>
            </div>
            <div class="col img">
              <p>Terhubung dengan kami.</p>
              <div class="img">
                <a href=""><img src="img/icons8-twitterx-30.png" alt="" /></a>
                <a href=""><img src="img/icons8-ig-32.png" alt="" /></a>
                <a href=""><img src="img/icons8-facebook-30.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="line"></div>
        <div>
          <p class="Copyright">© Copyright 2023 Web.com Group, Inc. All rights reserved. All registered trademarks herein are the property of their respective owners.</p>
        </div>
      </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
