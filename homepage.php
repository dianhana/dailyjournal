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
    <
 
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

  </body>
</html>
