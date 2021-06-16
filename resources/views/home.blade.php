<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
    
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di Website Kami, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <p style="color: white; font-size: 60px; text-align: center; margin-top: 100px;">MENS GROOMING AND BARBERSHOP</p>
    <p style="color: white; font-size: 40px; font-family: 'Times New Roman'; text-align: center; margin-top: -40px;">Tempat perawatan dan pangkas rambut pria yang kekinian.</p>

    <div>
        <a href="https://wa.me/6282365484831?text=Halo, Saya Ingin Memerlukan Bantuan Anda" target="_blank">
            <button type="button" class="btn btn-info" style="font-size:Times New Roman; height: 60px; font-size: 30px; margin-left: 570px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>     hubungi kami
            </button>
        </a>
    </div>
</body>

</html>