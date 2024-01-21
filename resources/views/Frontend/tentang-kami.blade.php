<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
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

        .us h1 {
            color: #2c3e50;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    @include('Frontend.layouts.inc.header')

    <header class="us text-center">
        <h1>Tentang Kami</h1>
    </header>

    <div class="ms-2">
        <section id="AboutUs">
            <h2>Tentang Kami</h2>
            <p>Selamat datang di (-), tempat dimana pengetahuan, inspirasi, dan kreativitas bersatu. Kami adalah
                komunitas online yang didedikasikan untuk menyediakan platform bagi para pembaca dan penulis untuk
                berbagi ide, pengalaman, dan wawasan melalui tulisan-tulisan yang menginspirasi.</p>
        </section>

        <section id="MisiKami">
            <h2>Misi Kami</h2>
            <p>Misi kami adalah memfasilitasi pertukaran ide dan gagasan melalui tulisan, menciptakan ruang dimana setiap
                individu memiliki suara untuk berbicara. Kami percaya bahwa setiap cerita memiliki nilai, dan setiap
                pengalaman dapat menjadi sumber pembelajaran bagi orang lain.</p>
        </section>

        <section id="ApaYangKamiTawarkan">
            <h2>Apa yang kami Tawarkan</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>1. Beragam konten : Temukan berbagai topik menarik, mulai dari teknologi, kesehatan, gaya
                            hidup, hingga kisah perjalanan. Kami menyediakan berbagai kategori untuk memenuhi minat dan
                            kebutuhan pembaca.</p>
                    </div>
                    <div class="col-md-4">
                        <p>2. Platform penulisan : Kami membuka kesempatan bagi siapa saja untuk berkontribusi dengan
                            menulis blog mereka sendiri. Jika Anda memiliki cerita yang ingin dibagikan, Anda dapat
                            dengan mudah membuat dan mempublikasikan konten Anda di sini.</p>
                    </div>
                    <div class="col-md-4">
                        <p>3. Komunitas interaktif : Terlibatlah dengan pembaca dan penulis lainnya melalui komentar,
                            diskusi, dan umpan balik. Kami percaya bahwa pembelajaran dan pertumbuhan dapat terjadi
                            melalui dialog dan pertukaran ide.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="TimKami">
            <h2>Tim Kami</h2>
            <ul class="list-group">
                <li class="list-group-item">Ikna Niswatuzakiyah</li>
                <li class="list-group-item">Muhammad Boy Adiguna</li>
                <li class="list-group-item">Nabila Putri</li>
                <li class="list-group-item">Rama Aryo Prambudi</li>
                <li class="list-group-item">Safiya Zahra</li>
                <li class="list-group-item">Upiyah</li>
            </ul>
            <p>Terimakasih telah bergabung dengan kami dalam menjadikan (-) sebagai tempat untuk belajar, berbagi, dan
                inspirasi.</p>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
