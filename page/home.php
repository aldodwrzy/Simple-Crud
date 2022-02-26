<?php $sql = $conn->query("SELECT * FROM barang"); ?>
<div class="container">
	<div class="row mt-2">
		<div class="col-md-12 text-center">
			<h1>Data Barang</h1><hr>
		</div>
		<div class="col-md-12">
			<a href="?page=add" class="btn btn-primary">Tambah Data</a><hr>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>No</th>
						<th>Nomor Inventaris</th>
						<th>Nama Barang</th>
						<th>Jenis Barang</th>
						<th>Merk Barang</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php  
						$no = 1;
						while ($row = $sql->fetch_assoc()) :
						?>
						<tr>
							<td><?= $no++; ?>.</td>
							<td><?= $row['no']; ?></td>
							<td><?= $row['nama']; ?></td>
							<td><?= $row['jenis']; ?></td>
							<td><?= $row['merk']; ?></td>
							<td>
								<a href="?page=edit&no=<?= $row['no']; ?>" class="badge badge-warning">Edit</a> | 
								<a href="?page=delete&no=<?= $row['no']; ?>" class="badge badge-danger" onclick="return(confirm('Yakin Ingin Dihapus ?'))">Hapus</a>
							</td>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>