<!DOCTYPE html>
<html>

<head>
    <title>Lihat Layanan</title>
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
            <li><img src="/img/logo3.png"style="width: 80px; height: 100px;"></li>
            <li><a href="/home">Home</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/produk">Product</a></li>
            <li><a href="/kontak">Contact</a></li>
            <li><a href="/about">About</a></li>
            
        </ul>
    </nav>
	
	<div>
        <a href="/service">
            <button type="button" class="btn btn-link" style="height: 35px; margin-left: 95px; color: white; font-size: 20px;">SERVICE / FACIAL</button>
        </a>
    </div>

	<div class="card" style="width: 40rem; height:13rem; margin-left: 95px; margin-top: 50px;">
		<div class="card-header">
		DETAIL HARGA
		</div>
		<div class="card-body">
		<table class="table">
        <thead>
            <tr>
            <th scope="col">NO.</th>
            <th scope="col">Tipe Layanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Booking</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Masker</td>
            <td>Rp.30.000</td>
            <td><a href="https://wa.me/6282365484831?text=Halo, Saya Ingin Memesan Service Dengan Tipe Layanan Masker" target="_blank" class="btn btn-primary btn-sm">BOOKING BY WA</a></td>
            </tr>

            <tr>
            <th scope="row">2</th>
            <td>Spa</td>
            <td>Rp.40.000</td>
            <td><a href="https://wa.me/6282365484831?text=Halo, Saya Ingin Memesan Service Dengan Tipe Layanan Spa" target="_blank" class="btn btn-primary btn-sm">BOOKING BY WA</a></td>
            </tr>

        </tbody>
        </table>	
			
		</div>
	</div>
</body>

</html>