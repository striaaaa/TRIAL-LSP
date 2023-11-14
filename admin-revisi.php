<?php
require 'config.php';
$buku = query("SELECT * FROM fiksi");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/revisi-.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="con_1">
      <div class="side-bar">
        <div class="con_profile">
          <div class="img_profile">
            <img src="assets/foto.jpg" alt="" />
          </div>
          <div class="name">
            <p>Admin</p>
            <span>Hello, Admin</span>
          </div>
        </div>

        <div class="side_links">
          <!-- HOME -->
          <a href="admin-revisi.html"
            ><div class="home_link">
              <div class="logo">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="36"
                  height="36"
                >
                  <path
                    d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM6 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001Z"
                    fill="rgba(255,255,255,1)"
                  ></path>
                </svg>
              </div>
              <div class="teks">
                <p>Home</p>
              </div>
            </div></a
          >

          <!-- Tambah Buku -->
          <a href="admin.php"
            ><div class="home_link">
              <div class="logo">
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
              </div>
              <div class="teks">
                <p>Tambah Buku</p>
              </div>
            </div></a
          >

          <!-- Edit Buku -->
          <a href="Edit-buku.php"
            ><div class="home_link">
              <div class="logo">
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
              </div>
              <div class="teks">
                <p>Edit Buku</p>
              </div>
            </div></a
          >

          <!-- Buku_pinjaman -->
          <a href="buku-pinjaman.html"
            ><div class="home_link">
              <div class="logo">
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
              </div>
              <div class="teks">
                <p>Buku Pinjaman</p>
              </div>
            </div></a
          >
          <!-- Akhir -->
        </div>
      </div>

      <div class="content">
        <div class="title">
          <span>Home</span>
        </div>
        <div class="container">
          <div class="tabel_1">
             <?php foreach( $buku as $row ) : ?>
            <div class="img_buku">
              <img src="assets/fiksi/<?= $row["gambar"]; ?>" alt="" />
            </div>
            <div class="teks_table">
              <span><?= $row["judul"]; ?></span>
              <p><?= $row["penulis"]; ?></p>
              <p><?= $row["tahun"]; ?></p>
              <p><?= $row["deskripsi"]; ?></p>
            </div>
            <div class="icon">
              <div class="icon_1">
              <a href="Edit-buku.php?id=<?= $row["id"]; ?>">ubah</a> |
              <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
              </div>
            </div>
               <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
