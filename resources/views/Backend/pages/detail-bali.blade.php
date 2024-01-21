@extends('Backend.layouts.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Detail Pantai Kuta Bali')

@section('content')

<body>
    <h1 class="display-3"><b>Pantai Kuta Bali</b></h1>
    <br />
    <div class="author-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 5px;">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
        <span style="margin-right: 3px; margin-left: 10px;">John Doe</span>
        <span class="mx-2"> | </span>
        <span>January 15, 2024</span>
    </div>
    <br />
    <div class="full-image-container">
        <img src="./Backend/dist/image-konten/bali1.jpg" alt="Detail_bali" style="max-width: 100%; height: auto;"  class="img-fluid"/>
    </div>
    <div class="text  pt-3 text-size">
        <p>
            Selamat datang di gemerlapnya Pantai Kuta, sebuah surga tropis yang memikat hati di pulau Bali. Pasir putih lembut yang membelai kaki,
            ombak yang menggoda untuk berselancar, dan langit yang melukis warna-warni matahari terbenam menjadikan Pantai Kuta sebagai perhentian
            impian para pelancong. Di siang hari, nikmati kesegaran air laut yang menyegarkan pikiran, sementara malamnya, jalan-jalan di sepanjang
            garis pantai yang hidup dengan kehidupan malam yang menggembirakan. Dari pasar tradisional hingga butik-butik modern, Pantai Kuta juga
            menawarkan petualangan belanja yang tak terlupakan. Bersiaplah untuk menyelam dalam keindahan alam tropis dan dinamika budaya di salah
            satu destinasi paling ikonik di Bali, Pantai Kuta.
        </p>

        <p>
            <b>Pesona Pantai Kuta:</b> Pasir Putih yang Memikat: Setiap langkah Anda di Pantai Kuta akan ditemani oleh pasir putih yang halus,
            memberikan sensasi menyenangkan dan mengundang untuk bersantai. Sentuhan lembutnya di bawah matahari tropis akan membuat Anda merasa
            seperti berada di surga.
        </p>

        <p>
            <b>Ombak yang Menggoda:</b> Bagi para penggemar olahraga air, ombak Pantai Kuta adalah panggilan tak terduga yang menantang.
            Dari para peselancar berpengalaman hingga pemula yang mencari sensasi baru, semua akan menemukan gelombang yang sesuai
            dengan tingkat keterampilan mereka.
        </p>

        <p>
            <b>Matahari Terbenam yang Romantis:</b> Selesaikan hari Anda dengan menyaksikan matahari terbenam yang memukau di ufuk Pantai Kuta.
            Warna-warni langit senja yang menciptakan lanskap magis ini menjadi pengalaman romantis yang sempurna untuk berbagi dengan
            pasangan atau teman-teman.
        </p>

        <p>
            Selain itu, Pantai Kuta memberikan pengalaman Belanja yang Mengasyikkan: Jangan lewatkan kesempatan untuk menjelajahi kawasan
            belanja di sekitar Pantai Kuta. Dari pasar tradisional hingga pusat perbelanjaan modern, Anda akan menemukan berbagai barang unik,
            pakaian trendy, dan oleh-oleh khas Bali yang sayang untuk dilewatkan. Menciptakan lanskap magis ini menjadi pengalaman romantis yang
            sempurna untuk berbagi dengan pasangan atau teman-teman.
        </p>
    </div>
</body>

@endsection
