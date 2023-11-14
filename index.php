<?php 
 
session_start();
 
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
}
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@800,400,600,500&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"
        rel="stylesheet"
    />
</head>
<body>
    <nav class="navbar">
        <div class="navbar-title">
          <img
            src="assets/icon-lsp.png"
            width="50"
            alt=""
          />
          <p>E-Book</p>
        </div>
        <ul class="navbar-list">
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="kategori.html">Kategori</a></li>
          <li><a href="aktifitas.html">Aktifitas</a></li>
          <li><a href="profile.html">Profile</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>
  

    <div class="container-1" id="beranda">
        <div class="card__con__1">
            <div class="title__card">
                <span>Apa itu E-Book?</span>
            </div>
            <div class="content__card">
                <p>e-book adalah buku yang berbentuk elektronik atau digital yang berisi informasi atau panduan, tutorial, novel, layaknya buku pada umumnya. eBook (electronic book) ini hanya bisa dibuka dan dibaca dengan menggunakan perangkat gadget seperti komputer, tablet, dan handphone pintar. Tidak berbeda dengan buku cetak pada umumnya, ebook (buku digital) juga memuat tulisan dan gambar tentang berbagai topik seperti ebook teknologi, e-book sains, buku digital motivasi, buku tutorial dan ada banyak topik lainnya.</p>
            </div>
        </div>
    </div>

    <div class="container-2">
        <div class="title__con__2">
            <a href="kategori-fiksi.html"><Span>Buku Fiksi</Span></a>
        </div>

        <div class="container__books">
            <!-- BUKU_BUKU -->
            <div class="books1">
                <div class="img__books">
                    <img src="assets/fiksi/fiksi-1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Sang Pemimpi</span>
                    <p>2012</p>
                </div>
                <div class="desk__books">
                    <p>Dalam novel Sang Pemimpi, Andrea Hirata bercerita tentang kehidupannya di Belitong pada masa SMA. Tiga tokoh utama dalam karya ini adalah Ikal, Arai dan Jimbron. Ikal tidak lain adalah Andrea Hirata sendiri, sedangkan Arai Ichsanul Mahidin adalah saudara jauhnya yang menjadi yatim piatu ketika masih kecil.</p>
                </div>
            </div>

            <div class="books2">
                <div class="img__books">
                    <img src="assets/fiksi/fiksi2 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Laskar Pelangi</span>
                    <p>2005</p>
                </div>
                <div class="desk__books">
                    <p>Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.</p>
                </div>
            </div>

            <div class="books3">
                <div class="img__books">
                    <img src="assets/fiksi/fiksi3 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Laut Bercerita</span>
                    <p>2017</p>
                </div>
                <div class="desk__books">
                    <p>Novel tersebut adalah jagad baru yang terinspirasi dari kisah nyata. Dia kemudian menceritakan cuplikan percakapan dari dua tokoh pada novelnya, yakni pesan Kasih Kinanti kepada Biru Laut. Dikisahkan Biru Laut adalah mahasiswa yang baru saja disiksa dan ditangkap dalam situasi yang mencekam</p>
                </div>
            </div>

            <div class="books4">
                <div class="img__books">
                    <img src="assets/fiksi/fiksi4 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Negeri 5 Menara </span>
                    <p>2009</p>
                </div>
                <div class="desk__books">
                    <p>Negeri 5 Menara merupakan salah satu novel karya Ahmad Fuadi, seorang penulis yang berasal dari Bukit Maninjau, Sumatera Barat. Secara umum, novel ini menceritakan tentang kehidupan sosial komunitas yang ada di pondok pesantren.</p>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container-3">
        <div class="title__con__2">
            <a href="kategori-biografi.html"><Span>Buku Biografi</Span></a>
        </div>

        <div class="container__books">
            <!-- BUKU_BUKU -->
            <div class="books1">
                <div class="img__books">
                    <img src="assets/biografi/Biografi 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Biografi Gus Dur</span>
                    <p>2010</p>
                </div>
                <div class="desk__books">
                    <p>Buku ini menyuguhkan kisah menakjubkan dan tak ternilai tentang teka-teki sosok Gus Dur.Abdurrahman Wahid, atau yang lebih populer dengan sebutan Gus Dur, merupakan tokoh panutan yang sangat dihormati oleh banyak kalangan karena pengabdiannya kepada masyarakat, demokrasi, dan Islam toleran.</p>
                </div>
            </div>

            <div class="books2">
                <div class="img__books">
                    <img src="assets/biografi/biografi2 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Untuk Negeriku</span>
                    <p>2011</p>
                </div>
                <div class="desk__books">
                    <p>buku kisah perjalanan hidup dan perjuangan Pahlawan Proklamator Kemerdekaan Mohammad Hatta, sejak masa kanak-kanak hingga ke periode puncak kematangan pemikiran dan kegiatan politiknya.</p>
                </div>
            </div>

            <div class="books3">
                <div class="img__books">
                    <img src="assets/biografi/biografi3 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Gelap Terang Kartini</span>
                    <p>2019</p>
                </div>
                <div class="desk__books">
                    <p>Buku ini secara khusus menceritakan pahit getir kisah Kartini sebagai perempuan cahaya, penerang jalan gulita bangsa Indonesia. Bukan hanya penerang bagi perempuan, tetapi juga lelaki untuk memahami hak, kewajiban, serta keadilan bagi sesama manusia.</p>
                </div>
            </div>

            <div class="books4">
                <div class="img__books">
                    <img src="assets/biografi/biografi4 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Mr. Crack dari Parepare</span>
                    <p>2018</p>
                </div>
                <div class="desk__books">
                    <p>Buku Mr. Crack dari Parepare menceritakan perjalanan hidup seorang BJ Habibie bermula dari Parepare, lanjut ke Aachen, lalu ke Jakarta. Dari seorang ilmuwan, kemudian menjadi negarawan, dan kini minandito. Kecintaan Habibie pada tanah air.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-4">
        <div class="title__con__2">
            <a href="kategori-pelajaran.html"><Span>Buku Pelajaran</Span></a>
        </div>

        <div class="container__books_4">
            <!-- BUKU_BUKU -->
            <div class="books1">
                <div class="img__books">
                    <img src="assets/pelajaran/pljrn 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Matematika</span>
                </div>
            </div>

            <div class="books2">
                <div class="img__books">
                    <img src="assets/pelajaran/pljrn1 1 (2).png" alt="">
                </div>
                <div class="title__books">
                    <span>Sejarah</span>
                </div>
            </div>

            <div class="books3">
                <div class="img__books">
                    <img src="assets/pelajaran/pljrn2 1.png" alt="">
                </div>
                <div class="title__books">
                    <span>Bahasa Indonesia</span>
                </div>
            </div>

            <div class="books4">
                <div class="img__books">
                    <img src="assets/pelajaran/pljrn3 1 (2).png" alt="">
                </div>
                <div class="title__books">
                    <span>Bahasa Inggris</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer"></div>
</body>
</html>