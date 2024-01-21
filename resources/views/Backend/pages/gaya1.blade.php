@extends('Backend.layouts.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Digital Detox Menjaga Kesehatan Mental di Era Teknologi')

@section('content')

<body>
    <h1 class="display-3"><b>Digital Detox Menjaga Kesehatan Mental di Era Teknologi</b></h1>
    <br />
    <div class="author-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 5px;">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
        <span style="margin-right: 3px; margin-left: 10px;">John Doe</span>
        <span class="mx-2"> | </span>
        <span>Desember 6, 2024</span>
    </div>
    <br />
    <div class="full-image-container">
        <img src="./Backend/dist/image-konten/gaya1.jpg" alt="bisnis1" style="max-width: 100%; height: auto;"  class="img-fluid"/>
    </div>
    <div class="text pt-3 text-size">
        <p>
            Dalam era di mana teknologi menjadi bagian integral dari kehidupan sehari-hari, menjaga kesehatan mental menjadi semakin penting. Teknologi memberikan akses yang tak terbatas pada informasi dan interaksi sosial, tetapi juga dapat membawa
            dampak negatif terhadap kesehatan mental jika tidak dikelola dengan bijak. Ketidakseimbangan penggunaan teknologi dapat memicu stres, kelelahan mental, dan masalah kesehatan mental lainnya. Oleh karena itu, penekanan pada pemahaman dan penerapan
            praktik yang sehat dalam menggunakan teknologi menjadi esensial untuk menjaga kesejahteraan mental.

        </p>

        <p>
            <b>Pengaruh Teknologi pada Kesehatan Mental:</b>
            Peningkatan penggunaan teknologi, terutama media sosial, seringkali berhubungan dengan dampak negatif pada kesehatan mental. Tekanan untuk terus terhubung,
            eksposur terhadap konten yang mungkin merugikan, dan perbandingan diri yang terus-menerus dapat menyebabkan kecemasan dan depresi. Selain itu, penggunaan teknologi di
            malam hari dan paparan cahaya biru dari layar gadget dapat mengganggu pola tidur, yang merupakan faktor penting dalam kesehatan mental. Penting untuk mengenali pengaruh
            teknologi pada kesehatan mental dan mengadopsi strategi untuk meminimalkan dampak negatifnya.
        </p>

        <p>
            <b>Praktik Menjaga Kesehatan Mental di Era Digital:</b>
            Dalam menghadapi tantangan kesehatan mental di era teknologi, praktik menjaga kesehatan mental menjadi krusial. Ini termasuk mengatur batasan waktu penggunaan media sosial,
            menciptakan waktu untuk istirahat dari layar, dan membentuk batasan jelas antara waktu kerja dan waktu pribadi. Selain itu, memprioritaskan interaksi sosial di dunia nyata
            dan mengembangkan keseimbangan antara online dan offline dapat membantu menjaga kesehatan mental. Menerapkan kebiasaan positif seperti meditasi, olahraga, dan tidur yang
            cukup juga menjadi bagian integral dari upaya menjaga kesehatan mental di tengah maraknya teknologi digital.
        </p>
    </div>
</body>

@endsection
