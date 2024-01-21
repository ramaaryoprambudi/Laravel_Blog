@extends('Backend.layouts.pages-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Revolusi Teknologi dalam Pelayanan Medis')

@section('content')

<body>
    <h1 class="display-3"><b>Revolusi Teknologi dalam Pelayanan Medis</b></h1>
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
        <img src="./Backend/dist/image-konten/teknologi2_rev.jpg" alt="bisnis1" style="max-width: 100%; height: auto;"  class="img-fluid "/>
    </div>
    <div class="text pt-3 text-size">
        <p>
            Teknologi kini merajai panggung dalam perubahan fundamental dalam pelayanan medis, membawa revolusi yang mencerahkan prospek perawatan kesehatan. Implementasi telemedicine menjadi terobosan utama dengan memungkinkan pasien
            mendapatkan konsultasi dan perawatan dari kenyamanan rumah mereka sendiri. Tanpa harus bertemu secara fisik, akses yang lebih mudah ini membuka pintu untuk pelayanan medis yang lebih inklusif dan efisien. Dibalik layar,
            teknologi big data dan analisis data membentuk landasan untuk pelayanan medis yang lebih cerdas. Dengan memproses jumlah data yang besar, para profesional medis dapat membuat keputusan yang lebih tepat, memprediksi penyakit,
            dan memberikan perawatan yang lebih personal kepada pasien. Adopsi teknologi ini mengubah paradigma diagnostik dan penanganan penyakit, membawa dampak positif pada hasil perawatan.
        </p>

        <p>
            Robotika dan teknologi cerdas mengambil peran penting dalam prosedur medis dan rehabilitasi. Robot-robot canggih mendukung dokter dan tim medis dalam melaksanakan tugas-tugas yang rumit, meningkatkan efisiensi prosedur dan mengurangi risiko.
            Era kolaborasi antara manusia dan teknologi ini menandai langkah maju dalam pelayanan medis yang efektif dan aman.
        </p>

        <p>
            Meskipun revolusi ini membawa kemajuan, tantangan etis terkait privasi data dan kesenjangan akses juga menjadi sorotan. Menjaga keseimbangan antara inovasi teknologi dan kepedulian terhadap aspek-etisnya menjadi kunci keberhasilan dalam
            mencapai pelayanan medis yang holistik dan inklusif. Revolusi teknologi dalam pelayanan medis adalah perjalanan yang terus berkembang, dengan dampak yang tak terhindarkan pada cara kita memandang dan mengakses perawatan kesehatan di masa depan.
        </p>
    </div>
</body>

@endsection
