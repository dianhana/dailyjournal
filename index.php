<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">INSIDE OUT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article" >Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galerry">Galerry</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#Schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#Aboutme">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                    <li class="nav-item">
                      <button id="dark" class="btn btn-link" ><i class="bi bi-moon-stars-fill"></i></button>
                      <button id="light" class="btn btn-link" ><i class="bi bi-brightness-alt-high-fill"></i></button>
                  </li>
                </ul>
            </div>
        </div>
      </nav>

    <section id="hero" class="text-center p-5 bg-warning-subtle text-sm-start">
            <div class="container">
                <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                    <img src="https://i.pinimg.com/564x/eb/b7/ce/ebb7ce5b74aa971cbbed2a02c24a14a3.jpg" class="img-fluid" width="300">
                    <div>
                        <h1 class="fw-bold display-4">INSIDE OUT</h1>
                        <h6 class="lead display-6">Seorang gadis bernama Riley lahir di Minnesota, dan dalam benaknya, lima personifikasi dari emosi intinya Kegembiraan, Kesedihan, Jijik, Ketakutan, dan Kemarahan hidup kembali</h6>
                        <h6>
                            <span id="tanggal"></span>
                            <span id="jam"></span>
                        </h6>
                    </div>
                </div>
            </div>
    </section>

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


  <section id="schedule" class="text-center p-5">
    <div class="container">
        
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <div class="col">
        <div class="card border-dark mb-3  " style="max-width: 18rem;">
            <div class="card-header bg-danger">SENIN</div>
            <div class="card-body text-dark">
             
              <p class="card-text">Rekayasa Perangkat Lunak <br> 07.00-09.30 | H.5.6</p>
              <hr>
              <p class="card-text">Logika Informatika <br> 10.20-12.00 | H.4.10</p>
              
            </div>
          </div>
          </div>
        
          <div class="col">
          <div class="card border-dark mb-3  md-col 4" style="max-width: 18rem;">
            <div class="card-header bg-danger">SELASA</div>
            <div class="card-body text-dark">
             
              <p class="card-text">Probabilitas dan Statistik <br> 07.00-09.30 | H.3.8</p>
              <hr>
              <p class="card-text">Pendidikan Kewarganegaraan <br> 10.20-12.00 | Aula H.7</p>
              <hr>
              <p class="card-text">Basis Data <br> 12.30-14.10 | D.3.M</p>
            </div>
          </div>
          </div>

          <div>
          <div class="card border-dark mb-3  " style="max-width: 18rem;">
            <div class="card-header bg-danger">RABU</div>
            <div class="card-body text-dark">
                <p class="card-text"> Pemograman Berbasis Web <br> 07.00-08.40 | D.2.J</p>
                <hr>
                <p class="card-text">Sistem Informasi <br> 09.30-12.00 | H.5.13</p>
            </div>
          </div>
          </div>

        <div class="col">
          <div class="card border-dark mb-3  " style="max-width: 18rem;">
            <div class="card-header bg-danger">KAMIS</div>
            <div class="card-body text-dark">
              <p class="card-text">Basis Data <br> 07.00-08.40 | H.5.1</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border-dark mb-3  " style="max-width: 18rem;">
            <div class="card-header bg-danger ">JUM'AT</div>
            <div class="card-body text-dark">
              <p class="card-text">Sistem Operasi <br> 07.00-09.30 | H.4.10</p>
            </div>
          </div>
          </div>

          <div class="col">
          <div class="card border-dark mb-3 md-col 4" style="max-width: 18rem;">
            <div class="card-header bg-danger text-dark">SABTU</div>
            <div class="card-body">
              <p class="card-text">FREE!!</p>
            </div>
          </div>
          </div>
        </div>
    </div>
 </section>
  
  

    <section id="galerry" class="text-center p-5 bg-warning">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Query untuk mengambil data galeri
                $sql = "SELECT * FROM gallery ORDER BY id DESC";
                $hasil = $conn->query($sql);
                $active = true; // Penanda untuk item aktif pertama

                // Loop melalui hasil query
                while ($row = $hasil->fetch_assoc()) {
                    $imagePath = isset($row["gambar"]) && $row["gambar"] !== '' ? 'img/' . $row["gambar"] : 'placeholder.jpg';
                ?>
                    <!-- Set kelas 'active' hanya untuk item pertama -->
                    <div class="carousel-item <?= $active ? 'active' : '' ?>">
                        <img src="<?= $imagePath ?>" class="d-block w-100" alt="Gallery Image">
                    </div>
                <?php
                    $active = false; // Setelah item pertama, ubah $active menjadi false
                }
                ?>
            </div>

            <!-- Tombol navigasi carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


    <section id="Aboutme" class="text-center p-5 bg-warning-subtle text-sm-start">
      <div class="container">
          <div class="d-sm-flex flex-sm-row justify-content-center">
              <img src="https://i.pinimg.com/564x/eb/b7/ce/ebb7ce5b74aa971cbbed2a02c24a14a3.jpg" class="rounded-circle" width="300">
              <div>
                  <p>A11.2023.15203</p>
                  <h2>DIAN HANA KARTIKO SARI</h2>
                  <p>Program Studi Teknik Informatika</p>
                  <div>
                    <a href="https://dinus.ac.id/"><b class="text-dark">Universitas Dian Nuswantoro</b></a>
                  </div>
              </div>
          </div>
      </div>
</section>

    <footer class="text-center p-5 ">
        <div>
           <a href="https://www.instagram.com/p/C96Jd3dPFAue4fPELp8LWQa7Nnj2T_Ofs-1-IM0/?igsh=N3hmbzlwdDk3cHFw">
           </a> 
           <i class="bi bi-instagram h2 p-2text-dark"></i>
           <a href="https://t.me/dianhano"></a>
           <i class="bi bi-telegram h2 p-2 text-dark"></i>
            <a href="https://youtu.be/dEcKtiAOmyY"></a>
            <i class="bi bi-youtube h2 p-2 text-dark"></i>
        </div>
        <div>
            2024 &copy; dian hana kartiko sari
        </div>
    </footer>


    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()" , 1000);

        function tampilWaktu(){
            var waktu=new Date();
            var bulan=waktu.getMonth() + 1;

            setTimeout("tampilWaktu()" , 1000);
            document.getElementById("tanggal").innerHTML=
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML=
            waktu.getHours() + ":" + waktu.getMinutes() + ":" +waktu.getSeconds();
        }
        document.getElementById("dark").onclick = function() {
          document.body.style.backgroundColor = "black";
          document.body.style.color = "white";
          document.getElementById("hero").classList.remove("bg-warning-subtle");
          document.getElementById("hero").classList.add("bg-secondary");
          document.getElementById("galerry").classList.remove("bg-warning");
          document.getElementById("galerry").classList.add("bg-secondary");
        }
        document.getElementById("light").onclick = function() {
          document.body.style.backgroundColor = "white";
          document.body.style.color = "black";
          document.getElementById("hero").classList.remove("bg-secondary");
          document.getElementById("hero").classList.add("bg-warning-subtle");
          document.getElementById("galerry").classList.remove("bg-secondary");
          document.getElementById("galerry").classList.add("bg-warning");
        }
    </script>
  </body>
</html>
