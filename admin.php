<?php
require 'config.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
  


	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin-revisi.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin-revisi.php';
			</script>
		";
	}


}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@800,400,600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container-utama">
      <div class="background">
        <div class="container-profile">
          <div class="container-img-profile">
            <img src="assets/foto.jpg" alt="" />
          </div>
          <div class="container-nama">
            <p>Admin</p>
            <p>Hello, Satria</p>
          </div>
        </div>
        <div class="container-tambah-buku">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="36"
            height="36"
          >
            <path
              d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"
              fill="rgba(255,255,255,1)"
            ></path>
          </svg>
          <a href="admin.html"><p>Tambah Buku</p></a>
        </div>
        <div class="container-edit-buku">
          <svg
            width="36"
            height="36"
            viewBox="0 0 64 64"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M36.8265 58.6667H15.9998C13.0398 58.6667 10.6665 56.2934 10.6665 53.3334V10.6667C10.6665 9.25222 11.2284 7.89566 12.2286 6.89547C13.2288 5.89528 14.5853 5.33337 15.9998 5.33337H37.3332L53.3332 21.3334V34.9067C52.4532 34.7734 51.5732 34.6667 50.6665 34.6667C49.7598 34.6667 48.8798 34.7734 47.9998 34.9067V24H34.6665V10.6667H15.9998V53.3334H34.9065C35.2265 55.2534 35.8932 57.04 36.8265 58.6667ZM61.3332 48H53.3332V40H47.9998V48H39.9998V53.3334H47.9998V61.3334H53.3332V53.3334H61.3332V48Z"
              fill="white"
            />
          </svg>

          <a href="Edit-Buku.php"><p>Edit Buku</p></a>
        </div>
        <div class="container-pinjaman-buku">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="36"
            height="36"
          >
            <path
              d="M21 18H6C5.44772 18 5 18.4477 5 19C5 19.5523 5.44772 20 6 20H21V22H6C4.34315 22 3 20.6569 3 19V4C3 2.89543 3.89543 2 5 2H21V18ZM5 16.05C5.16156 16.0172 5.32877 16 5.5 16H19V4H5V16.05ZM16 9H8V7H16V9Z"
              fill="rgba(255,255,255,1)"
            ></path>
          </svg>
          <a href="buku-pinjaman.html"><p>Buku Pinjaman</p></a>
        </div>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="container-kanan">
        <div class="title"><span>Tambah Buku</span></div>
        <div class="container-form1">
          <span>Judul Buku</span>
          <input type="text" name="judul" id="judul"/>
        </div>
        <div class="container-form2">
          <span>Penulis</span>
          <input type="text" name="penulis" id="penulis" >
        </div>
        <div class="container-form2">
          <span>tahun terbit</span>
          <input type="text" name="tahun" id="tahun" >
        </div>
        <div class="container-form3">
          <span>Deskripsi Buku</span>
          <input type="text" name="deskripsi" id="deskripsi" >
        </div>
        <div class="container-form2">
        <label for="gambar">Gambar :</label>
          <input type="file" name="gambar" id="gambar">
        </div>
        <div class="btn">
        <button type="submit" name="submit">Tambah Data!</button>
        </div>
      </div>
      </form>
    </div>
  </body>
</html>