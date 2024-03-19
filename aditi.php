<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>This is my page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo "Company Name"; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="q.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="cards1">
<div class="card" style="width: 18rem;">
  <img src="blog-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Title 1</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img src="blog-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Title 2</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="blog-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Title 3</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="blog-4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Title 4</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

   
</div>

<div class="footer">
    <div class="title1">
        <h3><?php echo "Company Name" ?></h3>
        <p>Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.
Code licensed MIT, docs CC BY 3.0.
Currently v5.3.3.</p>
        
    </div>
    
    <div class="title2">
        <h3>Links</h3>
        <ul>
            <li>Home</li>
            <li>Services</li>
            <li>help</li>
            <li>Blog</li>
            <li>Store</li>
        </ul>

    </div>
    <div class="title3">
        <h4>Contact Us</h4>
        <p>8755352965</p>
        <p>9639632863</p>
        <p>mohitsarkar256@gmail.com</p>

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>