<!doctype html>
<!-- * Tabler - Premium and Open Source dashboard template with responsive and
high quality UI. * @version 1.0.0-beta19 * @link https://tabler.io * Copyright
2018-2023 The Tabler Authors * Copyright 2018-2023 codecalm.net Paweł Kuna *
Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE) -->
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('pageTitle')</title>
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> --}}
        <!-- CSS files -->
        <base href="/">
        <link rel="icon" type="image/png" href="./Backend/dist/Logo/logo2.svg">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link href="./Backend/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
        <link
            href="./Backend/dist/css/tabler-flags.min.css?1684106062"
            rel="stylesheet"/>
        <link
            href="./Backend/dist/css/tabler-payments.min.css?1684106062"
            rel="stylesheet"/>
        <link
            href="./Backend/dist/css/tabler-vendors.min.css?1684106062"
            rel="stylesheet"/>
        <link
            href="./Backend/dist/libs/CropTool/ijaboCropTool.min.css"
            rel="stylesheet"/>


        @stack('stylesheets') @livewireStyles
        <link href="Backend/dist/css/demo.min.css" rel="stylesheet"/>
        <style>
            @import url('https://rsms.me/inter/inter.css');
            :root {
                --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
            }
            body {
                font-feature-settings: "cv03", "cv04", "cv11";
            }
            .swal2-popup {
                font-size: 0.78rem;
            }

            body {
        font-family: "Arial", sans-serif; /* Ganti dengan font default yang diinginkan */
      }

      .gothic-text {
        font-family: "Datch Gothic", sans-serif;
        font-size: 24px;
        margin-bottom: 20px;
      }

      .bisnis-image {
        max-width: 90%;
        height: auto;
      }

      .container-fluid {
        padding: 0;
      }

      .navbar {
        max-width: 100%;
      }

      /* Penyesuaian judul h1 dan jarak pada teks */
      h1 {
        text-align: center;
        margin-top: 20px;
      }

      .text {
        text-align: justify;
        margin: 0 70px 20px 70px; /* Tambahkan jarak di pinggir kanan dan kirinya */

      }

      .author-info {
        display: flex;
        align-items: center;
        justify-content: flex-start; /* Penyesuaian untuk meletakkan ke sebelah kanan */
        margin-top: 30px;
      }

      .author-info img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-left: 100px; /* Perbaikan pada nilai margin-right */
      }

      .full-image-container {
            width: 100%;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

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

        .text-size{
           font-size: 18px;
           margin: 1px;
        }

    .img-consistent-size {
    max-width: 100%;
    height: auto;
    }


        </style>
    </head>
    <body >
        <script src="/Backend/dist/js/demo-theme.min.js?1684106062"></script>
        <div class="page">
            @include('Backend.layouts.inc.header')
            <div class="page-wrapper">
                <!-- Page header -->
                @yield('pageHeader')
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        @yield('content')
                    </div>
                </div>
                @include('Backend.layouts.inc.footer')
            </div>
        </div>

        <!-- Load Bootstrap JS from CDN -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script> --}}

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script> --}}
            {{-- <script src="./Backend/dist/libs/CropTool/jquery-1.7.1.min.js"></script> --}}
        <!-- Tabler Core -->
        <script src="./Backend/dist/js/tabler.js"></script>
        <!-- Other scripts -->

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="./Backend/dist/libs/CropTool/ijaboCropTool.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('scripts') @livewireScripts
        <script src="/Backend/dist/js/demo.min.js"></script>
    </body>
</html>
