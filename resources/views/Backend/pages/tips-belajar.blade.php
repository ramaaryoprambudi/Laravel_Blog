@extends('Backend.layouts.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Detail Tips Belajar')

@section('content')

<body>
    <h1 class="display-3"><b>Tips Belajar</b></h1>
    <br />
    <div class="author-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 5px;">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
        <span style="margin-right: 3px; margin-left: 10px;">John Doe</span>
        <span class="mx-2"> | </span>
        <span>January 16, 2024</span>
    </div>
    <br />
    <div class="full-image-container">
        <img src="./Backend/dist/image-konten/tipsbelajar.jpg" alt="bisnis1" style="max-width: 100%; height: auto;"  class="img-fluid"/>
    </div>
    <br />
    <br />
    <br />
    <div class="text pt-3 text-size">
        <p>
            Dalam perjalanan pendidikan yang penuh tantangan, penting bagi para pelajar untuk memiliki strategi pembelajaran yang efektif guna
            meningkatkan pemahaman dan kinerja akademis. Salah satu tips utama adalah menerapkan metode Pomodoro, yang memecah waktu belajar
            menjadi sesi fokus selama 25 menit, diikuti dengan jeda 5 menit untuk istirahat. Metode ini membantu meningkatkan konsentrasi dan e
            fisiensi belajar tanpa kelelahan berlebih. Tidak hanya soal waktu, melibatkan diri secara aktif dalam pembelajaran juga menjadi kunci.
            Pembuatan catatan, berdiskusi dengan teman sekelas, dan berinteraksi langsung dengan materi membantu memperdalam pemahaman. Pemanfaatan
            teknologi modern juga dapat menjadi sahabat belajar, dengan aplikasi pembelajaran dan sumber daya daring yang memudahkan akses informasi
        </p>

        <p>
            Dalam upaya menciptakan lingkungan belajar yang optimal, penting untuk memiliki jadwal belajar yang teratur dan menciptakan ruang belajar
            yang nyaman. Disiplin pribadi sangat diperlukan, termasuk mengatur waktu istirahat yang cukup untuk menjaga keseimbangan antara produktivitas
             dan kesehatan mental. Keselarasan antara kegiatan belajar dan aspek kesejahteraan pribadi akan membantu menciptakan kondisi terbaik untuk
             pembelajaran yang efektif..
        </p>

        <p>
            Berbicara tentang pengembangan diri, menggali minat dan ketertarikan pribadi dalam pembelajaran dapat memberikan motivasi tambahan.
            Ketika materi yang dipelajari sesuai dengan passion, proses pembelajaran bukan lagi tugas yang membosankan, melainkan petualangan
            intelektual yang menggairahkan. Dengan menerapkan tips belajar efektif dan strategi pembelajaran ini, para pelajar dapat memaksimalkan
            potensi dan meraih keberhasilan akademis dengan lebih percaya diri. Mari bersama-sama menjadikan perjalanan belajar ini sebagai pengalaman
            yang membawa kita menuju masa depan yang cerah dan penuh prestasi.
        </p>
    </div>
</body>

@endsection
