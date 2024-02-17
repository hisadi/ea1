<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- 1. Ini buat Title dari tab --}}
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    {{-- -Navbar sebelum bootstrap --}}
    {{-- <section id="navbar">
        <img src="https://foto.kontan.co.id/wv64i2MiXI0yqlhzQDku50OL-us=/smart/2023/10/18/230356623p.jpg" alt="Animek">

        <div class="nav-links">
            <a href="" class="active">Home</a>
            <a href="">Product</a>
            <a href="">About Us</a>
        </div>

        <div class="login">
            <a href="">Register</a>
        </div>
    </section> --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="d-flex text-align-center">
                    <img src="{{ asset('/image/Seele.jpg') }}" alt="Bootstrap" width="70" height="38">
                    &ensp;
                    <a class="navbar-brand" href="#">Waifu abiss</a>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
        </div>
    </nav>

    {{-- 2. Belajar Bootstrap --}}
    <h1 class="text-center text-success mt-5 mb-5 bg-light">WAIFU STORE</h1>

    <div class="main">
        {{-- <section id="main-content">
            <img src="{{ asset('/image/Seele.jpg') }}" alt="Seele">
            <div class="description">
                <h1>Nike Shoes</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum similique commodi. Cum cumque explicabo architecto dicta dolorem sunt pariatur.</p>
                <p>Price : Rp. 1000</p>
            </div>
        </section>

        <section id="main-content-2">
            <img src="{{ asset('/image/Jingliu.jpeg') }}" alt="Jingliu">
            <div class="description">
                <h1>Nike Shoes</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatum similique commodi. Cum cumque explicabo architecto dicta dolorem sunt pariatur.</p>
                <p>Price : Rp. 1000</p>
            </div>
        </section> --}}
        <div class="card mx-5" style="width: 18rem;">
            <img src="{{ asset('/image/See  le.jpg') }}" class="card-img-top" alt="Seele">
            <div class="card-body text-center">
              <h5 class="card-title">Seele</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mx-5" style="width: 18rem;">
            <img src="{{ asset('/image/Jingliu.jpeg') }}" class="card-img-top" alt="Jingliu">
            <div class="card-body text-center">
              <h5 class="card-title">Jingliu</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mx-5" style="width: 18rem;">
            <img src="{{ asset('/image/Jingliu.jpeg') }}" class="card-img-top" alt="Jingliu">
            <div class="card-body text-center">
              <h5 class="card-title">Jingliu V.2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


</body>
</html>
