<?php  
require_once 'connection/connection.php';
require_once 'template/header.php';

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'home') {
		require_once 'page/home.php';
	} elseif ($_GET['page'] === 'add') {
		require_once 'page/add.php';
	} elseif ($_GET['page'] === 'edit') {
		require_once 'page/edit.php';
	} elseif ($_GET['page'] === 'delete') {
		if (isset($_GET['no'])) {
			$no = $_GET['no'];
			$sql = $conn->query("DELETE FROM barang WHERE no = '$no'");
			if ($sql) {
				echo "<script>alert('Data Berhasil Dihapus.');location='?page=home';</script>";
			} else {
				echo "<script>alert('Maaf, Ada Masalah Saat Menghapus Data!');</script>";
			}
		}
	}
} else {
	require_once 'page/home.php';
}

require_once 'template/footer.php';
?>