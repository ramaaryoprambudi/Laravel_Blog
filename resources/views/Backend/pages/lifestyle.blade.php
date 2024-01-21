@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($pageTitle) ? $PageTitle : 'Gaya Hidup')
@section('content')
<header class="mt-5 mb-5">
    <h1 class="display-5 px-5"><b>Gaya Hidup</b></h1>
    <div class="p-4 shadow-sm mb-4 bg-body rounded">
        <div class="row">
            <div class="col-md-3 px-0 ps-4">
                <h3 class="display-6 fst-italic">
                    Des
                    <hr class="w-6 mt-2 mb-3" style="border-width: 3px;">
                    <span>06</span>
                </h3>
                </div>

                <div class="col-md-4 px-5">
                    <img
                        src="./Backend/dist/image-konten/gaya1.jpg"
                        alt="Fullstack_Web_Photo"
                        class="img-fluid"></div>

                    <div class="col-md-5 px-0 ps-4">
                        <h2>Digital Detox Menjaga Kesehatan Mental di Era Teknologi</h2>
                        <p>Jelajahi urgensi dan keindahan detoks digital melalui artikel kami. Dalam dunia yang terus terhubung, kita akan membahas bagaimana merawat kesehatan mental menjadi semakin penting. Temukan strategi sederhana untuk membebaskan diri dari kecanduan teknologi, meresapi momen kehidupan, dan menciptakan ruang untuk ketenangan batin. Siapkan diri untuk menemukan keseimbangan yang hilang di tengah gejolak digital, serta merangkul kebahagiaan dan kesejahteraan mental dalam era teknologi ini.</p>
                    </div>
                </div>


                <p class="lead mb-3 text-end">
                    <a href="{{ route('authordetailsgaya1') }}" class="fw-bold">Lihat Detail
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
                            Des
                            <hr class="w-6 mt-2 mb-3" style="border-width: 3px;">
                            <span>06</span>
                        </h3>
                        </div>

                        <div class="col-md-4 px-5">
                            <img
                                src="./Backend/dist/image-konten/gaya2.jpg"
                                class="img-fluid"></div>

                            <div class="col-md-5 px-0 ps-4">
                                <h2>Mindful Eating</h2>
                                <p>Dalam artikel ini, kita akan mengupas esensi mindful eating—seni menikmati makanan dengan kesadaran penuh. Saksikan bagaimana praktik ini membuka pintu untuk menghargai setiap gigitan, merasakan tekstur, dan menemukan hubungan yang lebih dalam dengan makanan. Temukan cara sederhana untuk memperoleh keseimbangan antara tubuh dan pikiran melalui pengalaman makan yang penuh makna. Bersiaplah untuk menemukan kebahagiaan yang tersemat dalam momen-momen sederhana di setiap waktu makan</p>
                            </div>
                        </div>


                                <p class="lead mb-3 text-end">
                                    <a href="{{ route('authordetailsgaya2') }}" class="fw-bold">Lihat Detail
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
@endsection
