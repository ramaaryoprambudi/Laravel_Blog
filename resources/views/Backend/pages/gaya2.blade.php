@extends('Backend.layouts.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Mindful Eating')

@section('content')

<body>
    <h1 class="display-3"><b>Mindful Eating</b></h1>
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
        <img src="./Backend/dist/image-konten/gaya2.jpg" alt="bisnis1" style="max-width: 100%; height: auto;"  class="img-fluid"/>
    </div>
    <div class="text pt-3 text-size">
        <p>
            Mindful Eating, atau makan dengan kesadaran, bukan sekadar tentang apa yang kita makan, tetapi juga tentang bagaimana kita makan.
            Konsep ini melibatkan kesadaran penuh pada pengalaman makan, mulai dari memilih makanan hingga proses mengunyah dan menelan.
            Ini melibatkan pengamatan tanpa penilaian terhadap rasa lapar dan kekenyangan, serta memperhatikan sensasi fisik dan emosional
            yang muncul selama makan. Dengan mengalihkan perhatian kita secara sadar pada setiap gigitan, Mindful Eating menciptakan hubungan
            yang lebih seimbang antara tubuh dan makanan, mempromosikan kesehatan holistik dari dalam.
        </p>

        <p>
           <b>  Manfaat Mindful Eating untuk Kesehatan Fisik:</b>
                Mindful Eating telah terbukti memberikan sejumlah manfaat kesehatan fisik. Dengan mengubah cara kita berinteraksi dengan makanan,
                seseorang dapat meningkatkan pencernaan dan penyerapan nutrisi. Mengonsumsi makanan dengan perlahan dan dengan perhatian penuh dapat
                membantu mencegah kelebihan makan dan merangsang perasaan kenyang, yang dapat mendukung upaya penurunan berat badan. Selain itu, Mindful
                Eating juga dikaitkan dengan peningkatan kontrol gula darah, mengurangi risiko obesitas, dan mendukung kesehatan jantung.
        </p>

        <p>
            <b>Manfaat Mindful Eating untuk Kesehatan Mental dan Emosional:</b>
            Mindful Eating juga memiliki dampak positif pada kesehatan mental dan emosional. Praktik ini dapat membantu mengurangi stres terkait makanan
            dan meningkatkan kesadaran diri terkait pola makan. Dengan fokus pada pengalaman saat makan, individu dapat mengidentifikasi kebiasaan makan
            emosional atau impulsif, dan memahami perasaan lapar sejati mereka. Hal ini dapat membantu mengurangi kecemasan terkait makanan dan membentuk
            hubungan yang lebih positif dengan makanan, mempromosikan kesejahteraan mental dan emosional secara keseluruhan. Mindful Eating bukan hanya tentang
            menjaga keseimbangan nutrisi, tetapi juga memberikan ruang bagi kedamaian batin dan hubungan yang lebih baik dengan makanan dalam kehidupan sehari-hari.
        </p>
    </div>
</body>

@endsection
