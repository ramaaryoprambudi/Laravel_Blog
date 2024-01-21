<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
        }

        .line {
            height: 1px;
            background-color: #000000;
            margin: 10px 0;
        }

        .Copyright {
            text-align: center;
            margin: 10px 0;
        }

        .logo {
            text-align: center;
            margin: 20px 0;
        }

        .kata {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
        }

        #katagory {
            padding: 50px 0;
        }

        .card-teknologi {
            border-radius: 10px;
            background-color: #3498db;
            padding: 40px;
            color: white;
        }

        .circle-icon {
            width: 150px;
            height: 150px;
            background-color: #ffffff;
            border-radius: 50%;
            margin: 15px 0 0 40px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h4 {
            text-align: center;
            padding: 15px;
            color: #3498db;
        }

        .circle-icon-tentang {
            padding-left: 25%;
            padding-top: 25px;
        }

        .tentang {
            background-color: #ecf0f1;
            margin-top: 100px;
            padding: 50px 0;
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

        section {
            margin-bottom: 50px;
        }

        .sya h1 {
            color: #2c3e50;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    @include('Frontend.layouts.inc.header')

    <header class="sya text-center">
        <h1 class="mt-5">Syarat Ketentuan & Privasi</h1>
    </header>

    <section id="Syarat" class="container mt-5">
        <h2>Syarat dan Ketentuan Pengguna</h2>
        <p>Selamat datang di (-)! Sebelum anda menggunakan platform kami, harap membaca dan memahami syarat dan ketentuan pengguna berikut:</p>
        <h3 class="mt-4">1. Penerimaan Syarat dan Ketentuan</h3>
        <p>- Dengan mengakses dan menggunakan (-), anda dianggap telah membaca, memahami, dan menyetujui semua syarat dan ketentuan yang tercantum di sini.</p>
        <p>- Jika anda tidak setuju dengan syarat dan ketentuan ini, harap berhenti menggunakan platform kami.</p>
        <h3 class="mt-4">2. Konten Pengguna</h3>
        <p>- Setiap konten yang anda publikasikan di (-) tetap menjadi hak milik anda, namun anda memberikan ijin kepada kami untuk menggunakan, mendistribusikan, dan memodifikasi konten tersebut dalam konteks platform.</p>
        <p>- Anda bertanggung jawab sepenuhnya atas keaslian dan keakuratan konten yang anda bagikan.</p>
        <h3 class="mt-4">3. Penggunaan Platform</h3>
        <p>- Anda setuju untuk menggunakan (-) sesuai dengan hukum yang berlaku dan tidak akan terlibat dalam aktifitas yang melanggar hak orang lain.</p>
        <p>- Kami berhak menghapus dan membatasi akses ke konten yang dianggap melanggar syarat dan ketentuan kami.</p>
        <h3 class="mt-4">4. Privasi</h3>
        <p>- Kami menghargai privasi anda dan berkomitmen untuk melindungi data pribadi anda. Silakan merujuk pada kebijakan privasi kami untuk informasi lebih lanjut tentang pengumpulan, penggunaan, dan pengungkapan data pribadi.</p>
    </section>

    <section id="Kebijakan" class="container mt-5">
        <h2>Kebijakan Privasi</h2>
        <h3 class="mt-4">1. Pengumpulan Informasi</h3>
        <p>- Kami dapat mengumpulkan informasi pribadi yang anda berikan saat mendaftar atau menggunakan platform kami.</p>
        <p>- Informasi tersebut digunakan untuk meningkatkan pengalaman pengguna dan memberikan layanan yang lebih baik.</p>
        <h3 class="mt-4">2. Penggunaan dan Pengungkapan Informasi</h3>
        <p>- Informasi pribadi anda tidak akan dijual atau disewakan kepada pihak ketiga tanpa ijin anda.</p>
        <p>- Kami dapat membagikan informasi yang diidentifikasi secara pribadi jika diwajibkan oleh hukum atau untuk melindungi hak, properti, atau keamanan (-) atau penggunaan lain.</p>
        <h3 class="mt-4">3. Keamanan Informasi</h3>
        <p>- Kami berkomitmen untuk melindungi informasi anda dan menerapkan langkah-langkah keamanan yang sesuai untuk mencegah akses yang tidak sah.</p>
        <p>Dengan menggunakan (-), anda menyetujui pengumpulan dan penggunaan informasi anda sesuai dengan syarat dan ketentuan serta kebijakan privasi kami.</p>
        <p>
            Harap dicatat bahwa syarat dan ketentuan ini dapat diubah sewaktu-waktu tanpa pemberitahuan sebelumnya. Oleh karena itu, kami menyarankan anda untuk secara berkala mengunjungi halaman ini untuk membaca syarat dan ketentuan terbaru.
        </p>
        <p>Jika anda memiliki pertanyaan atau kekhawatiran tentang syarat dan ketentuan ini, silahkan hubungi kami di [kontak@namawebsite.com].</p>
        <p>Terimakasih telah menggunakan [-]!</p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
