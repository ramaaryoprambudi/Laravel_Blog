@extends('Backend.layouts.pages-layout')
@section('pageTitle',isset($pageTitle) ? $PageTitle : 'Teknologi')
@section('content')
@section('content')

<header class="mt-5 mb-5">
    <h1 class="display-5 px-5"><b>Teknologi</b></h1>
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
                    src="./Backend/dist/image-konten/teknologi1.jpg"
                    alt="Fullstack_Web_Photo"
                    class="img-fluid"></div>

                <div class="col-md-5 px-0 ps-4">
                    <h2>Integrasi AI dalam Kreativitas Manusia</h2>
                    <p>Para seniman dan peneliti teknologi kini menjelajahi keseimbangan unik antara kecerdasan buatan (AI) dan kreativitas manusia. Dalam ekspansi teknologi AI, kita menyaksikan terobosan yang mengarah pada kolaborasi luar biasa antara mesin dan imajinasi manusia. Era baru ini memunculkan pertanyaan fundamental tentang apa artinya menjadi seniman di dunia yang semakin terkoneksi dengan teknologi cerdas.  </p>
                </div>
            </div>


            <p class="lead mb-3 text-end">
                <a href="{{ route('authordetailsteknologi-detail') }}" class="fw-bold">Lihat Detail
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
                            src="./Backend/dist/image-konten/teknologi2_rev.jpg"
                            alt="Golang_Photo"
                            class="img-fluid"></div>

                        <div class="col-md-5 px-0 ps-4">
                            <h2>Revolusi Teknologi dalam Pelayanan Medis</h2>
                            <p>Saksikan terobosan luar biasa dalam dunia kesehatan melalui artikel kami, "Menggebrak Dunia Kesehatan: Revolusi Teknologi dalam Pelayanan Medis." Jelajahi bagaimana teknologi telah merubah paradigma pelayanan medis, membuka pintu menuju masa depan yang lebih inovatif dan efisien. Temukan peran penting AI, telemedicine, dan Internet of Things dalam mendukung diagnosis cepat, perawatan personalisasi, dan konektivitas yang merevolusi cara dokter dan pasien berinteraksi.</p>
                        </div>
                    </div>


                            <p class="lead mb-3 text-end">
                                <a href="{{ route('authordetailsrevolusi-teknologi-dalam-pelayanan-medis') }}" class="fw-bold">Lihat Detail
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
                                    src="./Backend/dist/image-konten/teknologi3.jpg"
                                    alt="Laravel_Photo"
                                    class="img-fluid"></div>

                                <div class="col-md-5 px-0 ps-4">
                                    <h2>Menjelajahi Dunia Baru Komputasi yang Mengejutkan</h2>
                                    <p>Menjelajahi Dunia Baru Komputasi yang Mengejutkan  kita akan memecahkan batasan-batasan teknologi dengan sorotan tajam tentang inovasi terkini. Temukan keajaiban di balik komputasi kuantum, kecerdasan buatan yang revolusioner, dan integrasi teknologi yang menyeluruh.</p>
                                </div>
                            </div>

                            <p class="lead mb-3 text-end">
                                <a href="{{ route('authordetailsteknologi3') }}" class="fw-bold">Lihat Detail
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
