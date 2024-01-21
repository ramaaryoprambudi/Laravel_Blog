@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($pageTitle) ? $PageTitle : 'Bisnis')
@section('content')
<header class="mt-5 mb-5">
    <h1 class="display-5 px-5"><b>Bisnis</b></h1>
    <div class="p-4 shadow-sm mb-4 bg-body rounded">
        <div class="row">
            <div class="col-md-3 px-0 ps-4">
                <h3 class="display-6 fst-italic">
                    Jan
                    <hr class="w-6 mt-2 mb-3" style="border-width: 3px;">
                    <span>10</span>
                </h3>
                </div>

                <div class="col-md-4 px-5">
                    <img
                        src="./Backend/dist/image-konten/bisnis1_rev.jpg"
                        alt="Fullstack_Web_Photo"
                        class="img-fluid"></div>

                    <div class="col-md-5 px-0 ps-4">
                        <h2>Strategi Bisnis yang Membuat Perusahaan Bersinar</h2>
                        <p>Sambut strategi bisnis yang mampu mengangkat perusahaan Anda ke puncak kesuksesan. Dengan fokus pada inovasi, keberlanjutan, dan kecerdasan bisnis, artikel ini membahas langkah-langkah konkret yang dapat membedakan perusahaan Anda di pasar yang kompetitif, menciptakan cahaya yang unik dan bersinar.</p>
                    </div>
                </div>


                <p class="lead mb-3 text-end">
                    <a href="{{ route('authordetailsbisnis1') }}" class="fw-bold">Lihat Detail
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
                            <span>11</span>
                        </h3>
                        </div>

                        <div class="col-md-4 px-5">
                            <img
                                src="./Backend/dist/image-konten/bisnis2.jpg"
                                alt="Golang_Photo"
                                class="img-fluid"></div>

                            <div class="col-md-5 px-0 ps-4">
                                <h2>Praktik Terbaik Meningkatkan Pengalaman Pelanggan</h2>
                                <p>Jelajahi praktik terbaik untuk meningkatkan pengalaman pelanggan dalam artikel ini. Dari personalisasi layanan hingga penanganan masalah dengan cepat, temukan langkah-langkah praktis yang dapat memperkuat hubungan dengan pelanggan Anda dan menciptakan pengalaman yang tak terlupakan.</p>
                            </div>
                        </div>


                                <p class="lead mb-3 text-end">
                                    <a href="{{ route('authordetailsbisnis2') }}" class="fw-bold">Lihat Detail
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
                                    <span>11</span>
                                </h3>
                                </div>

                                <div class="col-md-4 px-5">
                                    <img
                                        src="./Backend/dist/image-konten/bisnis3.jpg"
                                        alt="Laravel_Photo"
                                        class="img-fluid"></div>

                                    <div class="col-md-5 px-0 ps-4">
                                        <h2>Rahasia Pemasaran Online yang Efektif untuk Bisnis</h2>
                                        <p>Artikel ini mengupas rahasia di balik pemasaran online yang sukses. Temukan strategi pemasaran digital yang inovatif, teknik pengoptimalan mesin pencari (SEO), dan pendekatan berbasis data untuk meningkatkan visibilitas dan daya tarik bisnis Anda di dunia digital.</p>
                                    </div>
                                </div>

                                <p class="lead mb-3 text-end">
                                    <a href="{{ route('authordetailsbisnis3') }}" class="fw-bold">Lihat Detail
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
