<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Harian - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;1,200;1,500&display=swap"
      rel="stylesheet"/>
      <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
          }
        html {
          scroll-behavior: smooth;
        }

        .hero {
          min-height: 100vh;
          display: flex;
          align-items: center;
          background-image:url("img/samsung-memory-SVwXm_hX4Wg-unsplash.jpg");
          background-size: cover; /* Mengatur gambar agar memenuhi elemen */
          background-position: center; /* Menempatkan gambar di tengah elemen */
          background-repeat: no-repeat;
          position: relative; /* Menghindasri pengulangan gambar */
        }
        .content-hero{
          width: 600px;
          margin:3rem;
        }
        .content-hero h1{
          color:#ffffff;
          font-size: 5rem;
          font-weight: 700;
        }
        .content-hero h4{
          color:#ffffff;
          font-size: 2rem;
          font-weight: 500;
        }
        .nav{
            background-color:#011f4b;
            padding:1rem;
        }
        .nav h1{
            color:#b3cde0;
            padding-bottom: 10px;
        }
        .nav p{
            color:aliceblue;
           text-align: justify;
        }
        .more{
            background-color: #005b96;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 10px;
            cursor: pointer;
        }
        .cta {
            color: aliceblue;
        }
        .menu {
            background-color: rgba(138, 138, 138, 0.1);;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:20px;
            padding:20px;
            border-radius: 5px;
        }
        .content {
          background-color: rgba(157, 157, 157, 0.1);
          border-radius: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .content-card {
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 350px;
            margin: 20px;
            text-align: center;
            padding: 20px;
        }
        .content-card h2{
          font-weight: 500;
          margin-top: 1rem;
        }
        .content-card p{
            margin-top: 1rem;
            text-align: justify;
        }
        .content-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 91, 150, 0.6);
        }
        .content-card img {
            width: 100%;
            height: auto;
        }
        .button{
          background-color:#005b96;
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          margin-top: 1rem;
          cursor: pointer;
        }
        footer {
         background-color:rgba(199, 199, 199, 0.4);
         text-align: center;
         padding: 1rem 0 3rem;
         margin-top: 5rem;
        }
        footer .links a:hover {
         color: black;
        }

footer .links a {
  color: #000000;
  padding: 0.7rem 1rem;
}

footer .credit {
  font-size: 1rem;
}

footer .credit a {
  color: black;
  font-weight: bold;
}

.judul {
  text-align: center;
  color: #000000;
  font-size: 1rem;
  margin-bottom: 3rem;
  margin:3rem;
  padding: 1rem;
  margin: 4px 2px;
}
.judul h2{
  margin-top: 4rem;
    font-size: 2rem;
    color:#000000;
}
.judul p{
    font-size: 1.2rem ;
    text-align: center;
   
}
      .kotak{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        padding: 20px;
      }
      .judul-gallery h1{
        display: flex;
        justify-content: center;
        margin: 3rem;
        font-weight: 700;
        font-size: 3rem;
      }
      .grey{
        color: #575757;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top bg-dark-subtle p-4"  >
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" href="#">Supri<span class="fst-italic">UK.</span></a>
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
        </ul>
        <form class="container-fluid  ">
          <a href="logout.php"class="btn btn-outline-success " type="button">Login</a>
        </form>
      </div>
      
    </div>  
  </nav>
  <div class="hero">
    <div class="content-hero">
      <h1>Daily Jurnal.</h1>
      <h4>Selamat datang di jurnal online saya, tempat di mana saya membagikan pemikiran, pengalaman, dan pengetahuan saya di bidang ilmu komputer dan teknologi. </h4>
    </div>
  </div>

  <section class="kotak">
  <div class="card m-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card text-bg-danger m-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card text-bg-success m-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card text-bg-dark m-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</section>

  
  <section class="text-center p-5 bg-dark" text-sm-start>
    <div class="about">
      <div class="d-sm-flex flex-sm-row align-items-center ">
        <img src="img/dmitry-ganin-JRa8lCQQhSs-unsplash.jpg" width="500" class="img-fluid">
        <div>
          <h1 class=" m-3 display-3 fw-bold text-light">About&nbsp;Jurnal.</h1>
          <h4 class=" m-3 text-light lead-display-6">Melalui jurnal ini, saya berusaha mengeksplorasi diri saya lebih dalam. Setiap tulisan adalah langkah menuju pemahaman yang lebih baik tentang siapa saya, apa yang saya inginkan, dan bagaimana saya bisa mencapai tujuan hidup saya.</h4>
        </div>
      </div>
    </div>
  </section>


    <section id="home" class="container">
        <div class="judul">
          <h2>HOME</h2>
          <h3>Selamat Datang di Jurnal Teknologi dan Ilmu Komputer</h3>
                <p>
                    Di dunia yang terus berubah dengan cepat, ilmu komputer dan teknologi menjadi pilar utama
                    dalam kemajuan inovasi. Jurnal ini adalah ruang untuk berbagi pemikiran, pengalaman, dan pengetahuan saya
                    di bidang ini. Di sini, Anda akan menemukan
                </p>
        </div>
        <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->  
    </section>
        <section class="gallery">
          <div class="judul-gallery">
            <h1>Our Gallery<span class="grey">.</span></h1>
          </div>
          <div id="carouselExampleDark" class="carousel m-5 carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/freestocks-y0S2aew-vvE-unsplash.jpg " class="rounded-3 d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/cody-scott-milewski-5JERurjLmrA-unsplash.jpg" class=" rounded-3 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/freestocks-BIrCeCTdGAY-unsplash.jpg" class="rounded-3 d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
    <footer>
        <div class="links">
          <a href="#">Home</a>
          <a href="#">Articel</a>
          <a href="#">Gallery</a>
          
        </div>
        <div class="credit">
          <p>Created by <a href="">Yonatan Kristian</a>. | &copy; 2024</p>
        </div>
      </footer>
      <!--footer end-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
