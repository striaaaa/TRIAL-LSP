<?php 
$servername = "localhost";
$database = "cruds";
$username = "root";
$password = "";
 
$conn = mysqli_connect($servername, $username, $password, $database);


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM fiksi WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function tambah($data) {
	global $conn;

	$judul = htmlspecialchars($data["judul"]);
	$penulis = htmlspecialchars($data["penulis"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO fiksi
				VALUES
			  ('', '$judul', '$penulis', '$tahun', '$deskripsi', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$judul= htmlspecialchars($data["judul"]);
	$penulis = htmlspecialchars($data["penulis"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	

	$query = "UPDATE fiksi SET
				judul = '$judul',
				penulis = '$penulis',
				tahun = '$tahun',
				deskripsi = '$deskripsi',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

?>



