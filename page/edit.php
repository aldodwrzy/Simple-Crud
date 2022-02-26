<?php  
if (isset($_GET['no'])) {
	$no = $_GET['no'];
	$row = $conn->query("SELECT * FROM barang WHERE no = '$no'")->fetch_assoc();
}
?>
<div class="container">
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="text-center">
				<h1>Edit Data Barang</h1>
			</div><hr>
		</div>
		<div class="col-md-8">			
			<a href="?page=home" class="btn btn-info">Kembali</a>
			<form method="post" class="mt-3">
				<div class="form-row form-group">
					<div class="col">
						<label for="no">Nomor Inventaris</label>
						<input type="number" name="no" id="no" class="form-control" min="0" required value="<?= $row['no']; ?>" readonly="true">
					</div>
					<div class="col">
						<label for="nama">Nama Barang</label>
						<input type="text" name="nama" id="nama" class="form-control" required value="<?= $row['nama']; ?>">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="col">
						<label for="jenis">Jenis Barang</label>
						<input type="text" name="jenis" id="jenis" class="form-control" required value="<?= $row['jenis']; ?>">
					</div>
					<div class="col">
						<label for="alamat">Merk Barang</label>
						<input type="text" name="merk" id="merk" cols="30" rows="2" class="form-control" required value="<?= $row['merk']; ?>">
					</div>
				</div>
				<div class="float-right">
					<button name="btnSimpan" type="submit" class="btn btn-success">
						Update Data
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php  
if (isset($_POST['btnSimpan'])) {
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$merk = $_POST['merk'];

	if (empty(trim($no)) || empty(trim($nama)) || empty(trim($jenis)) || empty(trim($merk))) {
		echo "<script>alert('Maaf, Data Tidak Lengkap!');</script>";
	} else {
		$sql = $conn->query("UPDATE barang SET nama = '$nama', jenis = '$jenis', merk = '$merk' WHERE no = '$no'");
		if ($sql) {
			echo "<script>alert('Data barang Berhasil Diupdate.');location='?page=home';</script>";
		} else {
			echo "<script>alert('Maaf, Ada Masalah Saat Mengupdate Data!');</script>";
		}
	}
}
?>