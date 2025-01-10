<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user2
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero {
          min-height: 100vh;
          display: flex;
          align-items: center;
          background-image:url("img/thula-na-ddJ9PNYjric-unsplash.jpg");
          background-size: cover; /* Mengatur gambar agar memenuhi elemen */
          background-position: center; /* Menempatkan gambar di tengah elemen */
          background-repeat: no-repeat;
          position: relative; /* Menghindasri pengulangan gambar */
        }
    </style>
</head>
<body >
<div class="hero d-flex justify-content-center">
  <div class="card border-dark bg-secondary bg-opacity-25 m-4 p-5" style="width: 25rem;">
    <h1 class="fw-bold d-flex justify-content-center">Login<span style="color:white;">.</span></h1>
       

        <div class="login  d-flex justify-content-center">
        <form class="login" method="post">
            <input type=text name="user" placeholder="username"><br><br>
            <input type=password name="pass" placeholder="password"><br>
            <br>
            <div class="btn d-flex justify-content-center">
                <input class=" text-light border-dark bg-dark bg-opacity-25 fw-bold"type="submit" value="Login">
            </div>
        </form>
        </div>
        <br>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>
<?php
}
?>