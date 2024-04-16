<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="#">
    <title>Home</title>
</head>

<body>
    <!--navbar-->
    @include ('layouts.include.header')
    <!--end navbar-->

    <!--start carousel-->
    @include ('layouts.include.carousel')
    <!--end carousel-->

    {{-- Start About --}}
    <div class="rounded-3">
        <div class="container py-5 px-5 mx-5">
            <h2 class="text-center pb-5">About Us</h2>
            <div class="row">
                <div class="col align-self-center">
                    <p class="text-justify">Unit MSO (Managed Service Operation) merupakan salah satu unit yang ada
                        di PT. Telkom Indonesia Regional 4, yang memiliki fungsi untuk menangani customer wholesale 
                        dari segi Fulfillment & Assurance dengan unit MSO sebagai kepala divisinya. Saat ini unit 
                        MSO sendiri memakai Google Sheets menggunakan laptop/komputer untuk membuka maupun melihat 
                        data Newlink dan Reporting, juga tidak adanya perbandingan analisis dari data lama dengan 
                        data yang baru sehingga hal tersebut kurang efektif pada divisi MSO</p>
                </div>
                <div class="col">
                    <img src="{{ asset('cdn/imgg/teknologi-jaringan-5g.png') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    @include ('layouts.include.footer')
    <!--end footer-->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>