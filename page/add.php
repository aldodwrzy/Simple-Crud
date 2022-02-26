<div class="container">
	<div class="row mt-2">
		<div class="col-md-12">
			<div class="text-center">
				<h1>Tambah Data Barang</h1>
			</div><hr>
		</div>
		<div class="col-md-8">			
			<a href="?page=home" class="btn btn-info">Kembali</a>
			<form method="post" class="mt-3">
				<div class="form-row form-group">
					<div class="col">
						<label for="no">Nomor Inventaris</label>
						<input type="number" name="no" id="no" class="form-control" placeholder="Masukan Nomor Inventaris" min="0" required>
					</div>
					<div class="col">
						<label for="nama">Nama Barang</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Barang" required>
					</div>
				</div>
				<div class="form-row form-group">
					<div class="col">
						<label for="jenis">Jenis Barang</label>
						<input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukan Jenis Barang" required>
					</div>
					<div class="col">
						<label for="merk">Merk Barang</label>
						<input type="text" name="merk" id="merk" class="form-control" placeholder="Masukan Merk Barang" required>
					</div>
				</div>
				<div class="float-right">
					<button name="btnSimpan" type="submit" class="btn btn-success">
						Simpan Data
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
		$sql = $conn->query("INSERT INTO barang VALUES ('$no', '$nama', '$jenis', '$merk')");
		if ($sql) {
			echo "<script>alert('Data barang Berhasil Disimpan.');location='?page=home';</script>";
		} else {
			echo "<script>alert('Maaf, Ada Masalah Saat Menyimpan Data!');</script>";
		}
	}
}
?>