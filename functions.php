<?php 
// Koneksi Database
$konek = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $konek;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
	// $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	// $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	// $jk = htmlspecialchars($data["jk"]);
	// $agama = htmlspecialchars($data["agama"]);
	// $alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$divisi = htmlspecialchars($data["divisi"]);
	// $email = htmlspecialchars($data["email"]);
	
	$query = "INSERT INTO mahasiswa VALUES
			('',
			 '$nim',
			 '$nama',
			  '$angkatan',
				   '$no_hp',
				    '$divisi')
			";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ( $error === 4 ) {
		echo "<script>
			alert('Pilih Gambar Terlebih Dahulu!')
			</script>";
			return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('Yang Anda Upload Bukan Gambar!')
			</script>";
			return false;
	}

	if ($ukuranFile > 1000000) {
		echo "<script>
			alert('Ukuran Gambar Terlalu Besar!')
			</script>";
			return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;

}



function hapus($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($konek);
}

function ubah($data){
	global $konek;
	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
	// $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	// $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	// $jk = htmlspecialchars($data["jk"]);
	// $agama = htmlspecialchars($data["agama"]);
	// $alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$divisi = htmlspecialchars($data["divisi"]);
	// $email = htmlspecialchars($data["email"]);

	// query insert data
	$query = "UPDATE mahasiswa SET	
			nim = '$nim',
			nama = '$nama',
			angkatan = '$angkatan',
			no_hp = '$no_hp',
			divisi = '$divisi'
			WHERE id = $id
			";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);

}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa WHERE
			nim LIKE '%$keyword%' OR
			nama LIKE '%$keyword%' OR
			email LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'";

	return query($query);
}


function registrasi($data){
	global $konek;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($konek, $data["password"]);
	$password2 = mysqli_real_escape_string($konek, $data["password2"]);


	$result = mysqli_query($konek, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert ('Username Sudah Terdaftar!');
			</script>";
			return false;
	}

	if ($password !== $password2) {
		echo "<script>
			alert ('Konfirmasi Password Tidak Sesuai!');
			</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($konek, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($konek);
}


 ?>