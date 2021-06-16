<!DOCTYPE html>
<html>

<head>
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
            background-image: url('/img/image.png');
        }
        
        ul {
            list-style-type: none;
            height: 150px;
            background-color: #59B3BF;
        }
        
        li {
            float: left;
            margin-top: 30px;
            margin-left: 80px;
            font-size: 40px;
            
        }
        
        li a {
            display: block;
            color: white;
            padding: 14px;
            text-decoration: none;
        }
    </style>
</head>

<body class="body">
<nav>
        <ul>
            <li><img src="/img/logo3.png" style="width: 80px; height: 100px;"></li>
            <li><a href="/home">Home</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/produk">Product</a></li>
            <li><a href="/kontak">Contact</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>

    <div>
        <a href="/service">
            <button type="button" class="btn btn-link" style="height: 35px; margin-left: 95px; color: white; font-size: 20px;">SERVICE</button>
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card" style="text-align: center; height: 400px; width: 300px; margin-left: 110px; margin-top: 60px; background-color: #59B3BF;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16" style="margin: auto;">
                <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
            </svg>
                <div class="card-body">
                    <h5 class="card-title">HAIRCUT</h5>
                    <p class="card-text" style="text-align: center;">Dengan sentuhan hair stylist profesional kami, Anda akan mendapatkan hasil potongan rambut yang maksimal.</p>
                    <a href="/haircut" class="btn btn-primary" style="margin-top: 50px;">lihat layanan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="text-align: center; height: 400px; width: 300px; margin: auto; margin-top: 60px; background-color: #59B3BF;">
                <img src="/img/botol.png" class="card-img-top" style="height: 100px; width: 100px; margin: auto;">
                <div class="card-body">
                    <h5 class="card-title">HAIRCOLOR</h5>
                    <p style="text-align: center;">Tumbuhnya uban pada rambut sangat mengganggu penampilan bagi orang-orang yang memiliki karir</p>
                    <a href="/haircolor" class="btn btn-primary" style="margin-top: 70px;">lihat layanan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="text-align: center; height: 400px; width: 300px; margin-left: 30px; margin-top: 60px; background-color: #59B3BF;">
                <img src="/img/wajah.png" class="card-img-top" style="height: 100px; width: 100px; margin: auto;">
                <div class="card-body">
                    <h5 class="card-title">FACIAL</h5>
                    <p class="card-text" style="text-align: center;">Kini barbershop kami telah menyajikan pelayanan facial bagi kaum pria yang menginginkan perawatan</p>
                    <a href="/facial" class="btn btn-primary" style="margin-top: 40px;">lihat layanan</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>