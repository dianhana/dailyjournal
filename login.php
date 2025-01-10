<?php
// Memulai atau melanjutkan session
session_start();

// Menyertakan file koneksi ke database
include "koneksi.php";

// Check jika sudah ada user yang login, arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
    header("location:admin.php"); 
    exit();
}

// Proses login jika form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Menggunakan fungsi password_hash untuk menyimpan password (contoh: hash sebelumnya dibuat dengan password_hash)
    // Untuk saat ini kita hash input password menggunakan md5 untuk mencocokkan dengan database
    $hashedPassword = md5($password);

    // Query menggunakan prepared statement
    $stmt = $conn->prepare("SELECT username FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $hashedPassword);

    // Eksekusi statement
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if (!empty($row)) {
        // Jika login berhasil, simpan session dan alihkan ke halaman admin
        $_SESSION['username'] = $row['username'];
        header("location:admin.php");
        exit();
    } else {
        // Jika gagal login, tampilkan pesan kesalahan
        $error = "Username atau Password salah!";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Daily Journal</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-danger-subtle">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow rounded-5">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="bi bi-person-circle h1 display-4"></i>
                            <p>Welcome to My Daily Journal</p>
                            <hr/>
                        </div>
                        <!-- Form Login -->
                        <form action="" method="post">
                            <input
                                type="text"
                                name="user"
                                class="form-control my-4 py-2 rounded-4"
                                placeholder="Username"
                                required
                            />
                            <input
                                type="password"
                                name="pass"
                                class="form-control my-4 py-2 rounded-4"
                                placeholder="Password"
                                required
                            />
                            <div class="text-center my-3 d-grid">
                                <button type="submit" class="btn btn-danger rounded-4">Login</button>
                            </div>
                        </form>
                        <!-- Error Message -->
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger text-center mt-3 rounded-4">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
